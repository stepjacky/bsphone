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
 * FileName application/models/movies.php
 * Created by CIscaffolding.
 * User: qujiakang
 * QQ:myqq_postor@qq.com
 * Email: qujiakang@gmail.com  
 * Date: Wed Nov 28 23:40:03 CST 2012
 *    
 */

class Video_model extends Media_Model {
     
    public  function __construct(){
        parent::__construct("Video_model");
    }  


    public function hot_video(){
        $this->db->select("id,name,tags,firedate,views,minipic");
        $this->db->order_by("views", "desc");
        $this->db->order_by("firedate", "desc");
        $this->db->limit(12,0);
        $query = $this->db->get($this->table());
        return $query->result_array();
    }


    public function find_by_tag($tag){
        $this->db->select("id,name,tags,firedate,views,minipic");
        $this->db->like('tags',$tag);
        $query = $this->db->get($this->table());
        $beans = $query->result_array();

        return $beans;
    }

    public function  hotest($page=1){
        $this->db->select("id,name,tags,firedate,views,minipic");
        $this->db->order_by('views','desc');
        $start = $page*30-30;
        $this->db->limit(30,$start);
        $query = $this->db->get($this->table());
        $beans = $query->result_array();
        return $beans;
    }

    public function newest($page=1){
        $this->db->select("id,name,tags,firedate,views,minipic");
        $this->db->order_by('firedate','desc');
        $start = $page*30-30;
        $this->db->limit(30,$start);
        $query = $this->db->get($this->table());
        $beans = $query->result_array();
        return $beans;
    }

    public function top_newest(){
        $this->db->select("id,name,tags,firedate,views,minipic");
        $this->db->order_by('firedate','desc');
        $this->db->limit(5,0);
        $query = $this->db->get($this->table());
        $beans = $query->result_array();
        return $beans;
    }


    public function pagelink($page=1,$prefix=""){
        $config['base_url'] = $prefix;
        $config['total_rows'] = $this->db->count_all($this->table());
        $config['per_page'] = 30;
        //$this->firelog($config);
        $this->pagination->initialize($config);
        $pagelink = $this->pagination->create_links($page);
        return $pagelink;
    }

    public function get($id){
        if(!$this->__valid($id)) return $this->emptyObject();
        $bean = parent::get($id);

        $SQL="select c.id id ,c.guest username,mu.name nick, c.firedate firedate,c.content content
              ,mu.avatar userimg
              from comment c
              join myuser mu on mu.id=c.guest
              where c.video_id='".$id."'";
        $query = $this->db->query($SQL);
        $comments = $query->result_array();
        $bean['comments'] = $comments;
        $tags = explode(',', $bean['tags']);
        $bean['atags']= $tags;
        $this->db->select("id,name,minipic,firedate,views");
        $this->db->like("tags",$tags[0]);
        foreach($tags as $tag){
            $this->db->or_like('tags', $tag);
        }
        $this->db->order_by('firedate','desc');
        $this->db->limit(8,0);
        $query = $this->db->get($this->table());
        $abouts = $query->result_array();
        $bean['abouts'] = $abouts;
        return $bean;

    }

    public function list_with_paged($page=1,$rows=10){
        $data = array();
        $this->db->select("id,name");
        $this->db->order_by('firedate','desc');
        $start = $page*$rows-$rows;
        $this->db->limit($rows,$start);

        $query = $this->db->get($this->table());
        $data['list'] = $query->result_array();
        $count =  $this->db->count_all_results();
        $config['base_url'] = "/".$this->table()."/list_with_paged/";
        $config['total_rows'] = $count;
        $config['per_page'] = $rows;
        //$this->firelog($config);
        $this->pagination->initialize($config);
        $pagelink = $this->pagination->create_links($page);
        $data['pagelink']= $pagelink;
        return $data;
    }

    public function save_recommend($beans){
        $data = array();
        $i=0;
        foreach($beans as $bean){
            $data[$i++]=array(
                'video_id'=>$bean,
                'home'=>false
            );
        }
        $this->db->empty_table('recommendvideo');
        $this->firelog($data);
        $this->db->insert_batch('recommendvideo',$data);
    }

    public function find_recommend(){
        $SQL="select a.id id ,a.name, name ,a.firedate firedate,a.minipic minipic
              from recommendvideo ra
              join video a on a.id=ra.video_id
              order by a.firedate desc,a.views desc
              limit 4
              ";

        $beans = $this->query($SQL);
        return $beans;
    }

    public function find_index_by_tag($tag='',$rows=5){
        $this->db->select("id,name,firedate,minipic");
        $this->db->like('tags',$tag);
        $this->db->order_by('firedate','desc');
        $this->db->limit($rows,0);
        $query = $this->db->get($this->table());
        $beans = $query->result_array();
        return $beans;
    }
}   