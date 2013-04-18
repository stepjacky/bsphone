<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * Licensed to the Apache Software Foundation (ASF) under one or more
 * contributor license agreements.  See the NOTICE file distributed with
 * this work for additional information regarding copyright ownership.
 * The ASF licenses this file to You under the Apache License, Version 2.0
 * (the "License"); you may not use this file except in compliance with
 * the License.  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 * 
 * FileName application/models/artitle.php
 * Created by CIscaffolding.
 * User: qujiakang
 * QQ:myqq_postor@qq.com
 * Email: qujiakang@gmail.com  
 * Date: Wed Nov 28 23:40:02 CST 2012
 *    
 */

class Artitle_model extends Media_Model {
     
    public  function __construct(){
        parent::__construct("Artitle_model");
    }  

    public function get($id){
        if(!$this->__valid($id)) return $this->emptyObject();
        $bean = parent::get($id);
        $this->increaviews($id);
        $SQL="select c.id id ,c.guest username,mu.name nick, c.firedate firedate,c.content content
              ,mu.avatar userimg
              from comment c
              join myuser mu on mu.id=c.guest
              where c.artitle_id='".$id."'";
        $query = $this->db->query($SQL);
        $comments = $query->result_array();
        $bean['comments'] = $comments;
        $bean['cmtcount'] = count($comments);

        $tags = explode(',', $bean['tags']);

        $this->db->select("id,name,minipic");
        $this->db->like("tags",$tags[0]);
        foreach($tags as $tag){
            $this->db->or_like('tags', $tag);
        }
        $this->db->limit(4,0);
        $query = $this->db->get($this->table());
        $abouts = $query->result_array();
        $bean['abouts'] = $abouts;
        $bean['keywords'] = $tags;

        return $bean;
    }

    public function find_by_tag($tag,$rows=20){
        $this->db->select("id,name,tags,firedate,summary,largepic");
        $this->db->like('tags',$tag);
        $this->db->order_by('firedate','desc');
        $this->db->limit($rows,0);
        $query = $this->db->get($this->table());
        $beans = $query->result_array();
        foreach($beans as &$bean){
            $tags = explode(',',$bean['tags']);
            $bean['atags'] = $tags;
        }

        return $beans;
    }

    public function list_by_tag($tag='',$page=1,$rows=10){
        $data = array();
        $this->db->select("id,name,tags,firedate,summary,minipic");
        $this->db->like('tags',$tag);
        $this->db->order_by('firedate','desc');
        $this->db->limit($rows,0);
        $query = $this->db->get($this->table());
        $beans = $query->result_array();
        $data['list'] = $beans;
        $config['base_url'] = "/".$this->table()."/service_by_tag/$tag";
        $this->db->like('tags', $tag);
        $this->db->from($this->table());
        $config['total_rows'] = $this->db->count_all_results();
        $config['per_page'] = $rows;
        //$this->firelog($config);
        $this->pagination->initialize($config);
        $pagelink = $this->pagination->create_links($page);
        $data['pagelink'] = $pagelink;
        return $data;

    }




    public function save_recommend($beans){
        $data = array();
        $i=0;
        foreach($beans as $bean){
            $data[$i++]=array(
                'artitle_id'=>$bean,
                'home'=>false
            );
        }
        $this->db->empty_table('recommendartitle');
        //$this->firelog($data);
        $this->db->insert_batch('recommendartitle',$data);
    }


    public function save_home_artitle($beans){


        $data = array();
        foreach($beans as &$bean){
            if(empty($bean)) continue;
            $bean['id']=getGUID();
            array_push($data,$bean);
        }
        if(!empty($data))
        $this->db->insert_batch('homeartitle',$data);
    }

    public function find_recommend(){
        $SQL="select a.id id ,a.name, name ,a.firedate firedate,a.minipic minipic
              from recommendartitle ra
              join artitle a on a.id=ra.artitle_id
              order by a.firedate desc,a.views desc
              limit 4
              ";

        $beans = $this->query($SQL);
        return $beans;
    }

    public function find_home_artitle(){
        $this->db->where('position',0);
        $this->db->limit(5,0);
        $query =  $this->db->get("homeartitle");
        $beans = $query->result_array();
        return $beans;
    }

    public function remove_home_artitle($id){
        $this->db->delete('homeartitle',array('id'=>$id));
    }

    public function find_index_by_tag($tag='',$rows=5){
        $this->db->select("id,name,firedate,minipic,largepic");
        $this->db->like('tags',$tag);
        $this->db->order_by('firedate','desc');
        $this->db->limit($rows,0);
        $query = $this->db->get($this->table());
        $beans = $query->result_array();
        return $beans;
    }

    public function find_index_recommend(){

        $this->db->select('id,name,minipic');
        $this->db->limit(5,0);
        $this->db->order_by('firedate','desc');
        $query = $this->db->get($this->table());
        return $query->result_array();
    }



    
}   