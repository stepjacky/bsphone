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
 * FileName application/models/outskirts.php
 * Created by CIscaffolding.
 * User: qujiakang
 * QQ:myqq_postor@qq.com
 * Email: qujiakang@gmail.com  
 * Date: Wed Nov 28 23:40:03 CST 2012
 *    
 */

class Spare_model extends Media_Model {
     
    public  function __construct(){
        parent::__construct("Spare_model");
        $this->load->model('Sparetype_model','sprDao');
    }

    public function by_type($spt){
        $data = array();
        $beans = $this->sprDao->find_by_sprtype();
        $data['sprs'] = $beans;
        $this->db->select('id,name,minipic');
        $this->db->where('sparetype_id',$spt);
        $query = $this->db->get($this->table());
        $beans = $query->result_array();
        return $beans;
    }


    public function by_type_paged($tid,$page=1){
        $data = array();
        $this->db->select('id,name,minipic');
        $this->db->limit(10,0);
        $this->db->where('sparetype_id',$tid);
        $query = $this->db->get($this->table());
        $beans = $query->result_array();
        $data['list'] = $beans;

        $config['base_url'] = "/".$this->table()."/by_type_paged/".$tid."/".$page;
        $this->db->where('sparetype_id', $tid);
        $this->db->from($this->table());
        $count =  $this->db->count_all_results();
        $config['total_rows'] = $count;
        $config['per_page'] = 10;

        $this->pagination->initialize($config);
        $pagelink = $this->pagination->create_links($page);
        $data['pagelink'] = $pagelink;
        return $data;
    }





    public function list_by_types(){
        $rootTypes = $this->sprDao->find_by_root();

        $data = array();
        $i = 0;
        foreach($rootTypes as $rt){
            $SQL="select s.id id,s.name name,s.minipic minipic
              from spare s
              where s.sparetype_id in (select st.id from sparetype st where st.parent='".$rt['id']."')
              order by views desc
              limit 0,5";

            $beans =  $this->query($SQL);
            $data[$i]['stype'] = $rt;
            $data[$i]['list'] = $beans;
            $i++;
        }
        return $data;
    }

    public function most_views(){
        $this->db->select('id,name,minipic,views');
        $this->db->order_by('views','desc');
        $this->db->limit(8,0);
        $query = $this->db->get($this->table());
        return $query->result_array();
    }


    public function recommends(){
        $SQL="select s.id id ,s.name name ,s.minipic minipic
              from hotspare hs
              join spare s on s.id=hs.spare_id
              order by views desc
              limit 0,5";
       $beans =  $this->query($SQL);
       return $beans;
    }

    public function save_recommends($spares){

        $this->db->empty_table('hotspare');

        $data = array();
        $i=0;
        foreach($spares as $phone){
            $data[$i++]=array(
                'spare_id'=>$phone,
                'home'=>true
            );
        }

        $this->firelog($data);

        $this->db->insert_batch('hotspare',$data);

    }


    public function remove_feture($table,$id,$homed=false){
        $this->db->delete($table,array('spare_id'=>$id));
    }

    public function save_ad4($spares){

        $this->db->empty_table('sparead');

        $data = array();
        $i=0;
        foreach($spares as $phone){
            $data[$i++]=array(
                'spare_id'=>$phone
            );
        }

        $this->firelog($data);

        $this->db->insert_batch('sparead',$data);

    }

    public function load_ad4(){

        $SQL="select s.id id ,s.name name ,s.adpic minipic,s.largepic largepic
              from sparead hs
              join spare s on s.id=hs.spare_id
              order by views desc
              limit 0,4";
        $beans =  $this->query($SQL);
        return $beans;
    }

    public function save_new8($spares){

        //$this->db->empty_table('recommendspare');

        $data = array();
        $i=0;
        foreach($spares as $phone){
            $data[$i++]=array(
                'spare_id'=>$phone,
                'home'=>true
            );
        }

        $this->firelog($data);

        $this->db->insert_batch('recommendspare',$data);

    }

    public function load_new8(){
        $SQL="select s.id id ,s.name name,s.minipic minipic
              from recommendspare hs
              join spare s on s.id=hs.spare_id
              order by views desc
              limit 0,10";
        $beans =  $this->query($SQL);
        return $beans;
    }

    public function save_ad2($spares,$ad_type){
        $this->db->where('ad_type', $ad_type);
        $this->db->delete('sparead2');
        $data = array();
        $i=0;
        foreach($spares as $spare){
            $data[$i++] = array(
                "spare_id"=>$spare,
                'ad_type'=>$ad_type
            );
        }

        $this->db->insert_batch('sparead2',$data);

    }

    public function load_sparead2(){
        $data = array();

        $SQL="select s.id id ,s.name name,s.largepic largepic
              from sparead2 ad
              join spare s on s.id=ad.spare_id and ad.ad_type='t'
              limit 2
             ";

        $data['topad2'] = $this->query($SQL);



        $SQL="select s.id id ,s.name name,s.largepic largepic
              from sparead2 ad
              join spare s on s.id=ad.spare_id and ad.ad_type='b'
              limit 2
             ";

        $data['bottomad2'] = $this->query($SQL);


        return $data;


    }
    
}   