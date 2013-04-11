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
 * FileName application/models/trends.php
 * Created by CIscaffolding.
 * User: qujiakang
 * QQ:myqq_postor@qq.com
 * Email: qujiakang@gmail.com  
 * Date: Wed Nov 28 23:40:03 CST 2012
 *    
 */

class Trends_model extends Media_Model {
     
    public  function __construct(){
        parent::__construct("Trends_model");
    }  

    public function list_vip(){
        $this->db->select("id,name,minipic");
        $this->db->order_by('firedate','desc');
        $this->db->limit(5,0);
        $query = $this->db->get($this->table());
        return $query->result_array();
    }
    public function save4trends($trends){

        $this->db->truncate('viptrends');
        $data = array();
        $i = 0;

        foreach($trends as $trs){
           $data[$i++] = array(
               'trend_id'=>$trs

           );
        }
        $this->db->insert_batch('viptrends',$data);
    }

    public function load_vip_trends(){
        $SQL="select t.id id ,t.name name ,t.firedate firedate,t.largepic largepic
              from viptrends vt
              join trends t on t.id = vt.trend_id
              order by t.firedate desc
        ";

        return $this->query($SQL);
    }


    public function find_by_tags($key,$rows=0){
        $key = urldecode($key);
        $this->db->select("id,name,firedate,minipic,content");
        $this->db->like('tags',$key);
        if($rows!=0){
            $this->db->limit($rows,0);
        }
        $query = $this->db->get($this->table());
        return $query->result_array();
    }

    public function find_homed_by_tags($key,$count){
        $key = urldecode($key);
        $this->db->select("id,name,firedate,minipic");
        $this->db->like('tags',$key);
        $this->db->limit($count,0);
        $query = $this->db->get($this->table());
        return $query->result_array();
    }


    public function list_by_tag($tag='',$page=1,$rows=10){

        $tag = urldecode($tag);
        $data = array();
        $this->db->select("id,name,views ,tags,firedate,minipic,summary");
        $this->db->like('tags',$tag);
        $this->db->order_by('firedate','desc');
        $this->db->limit($rows,0);
        $query = $this->db->get($this->table());
        $beans = $query->result_array();
        //$this->firelog($beans);
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

    public function hotservice(){
        $this->db->select("id,name,minipic");
        $this->db->order_by("firedate","desc");
        $this->db->limit(5,0);
        $query = $this->db->get($this->table());
        $beans = $query->result_array();
        return $beans;

    }


}

