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
 * FileName application/models/helpinfo.php
 * Created by CIscaffolding.
 * User: qujiakang
 * QQ:myqq_postor@qq.com
 * Email: qujiakang@gmail.com  
 * Date: Wed Mar 06 00:57:00 CST 2013
 *    
 */

class Helpinfo_model extends MY_Model {
     
    public  function __construct(){
        parent::__construct("Helpinfo_model");
    }  
    
    public function find_helpinfo(){

        $this->db->select("*");
        $this->db->order_by("catalog","desc");
        $query = $this->db->get($this->table());
        $datas = $query->result_array();
        $data = array();
        foreach($datas as $d){
            $catalog = $d['catalog'];
            $cata =  $this->find_catalog($catalog);

            if(!isset($data[$catalog])){
                $data[$catalog] = array();
            }
            if(!isset($data[$catalog]['list'])){
                $data[$catalog]['list'] = array();
            }
            $data[$catalog]['bean'] = $cata;
            array_push($data[$catalog]['list'],$d);
        }
        $tdata = array();
        foreach($data as $dd)
            array_push($tdata,$dd);
        return $tdata;

    }

    public function find_one($id){
        $data  = array();


        $this->db->select("*");
        $this->db->where("id",$id);
        $query = $this->db->get($this->table());
        $bean = $query->first_row("array");
        $data['bean'] = $bean;


        $this->db->select("id,name");
        $this->db->where("catalog",$bean['catalog']);
        $query = $this->db->get($this->table());
        $list = $query->result_array();
        $data['list'] = $list;

        $this->db->select("id,name,minipic");
        $this->db->where("id",$bean['catalog']);
        $query = $this->db->get("helpcatalog");
        $catalog = $query->first_row('array');
        $data['catalog'] = $catalog;


        return $data;
    }

    public function find_catalog($id){
        $this->db->select("id,name,minipic");
        $this->db->where("id",$id);
        $query = $this->db->get("helpcatalog");
        return $query->first_row('array');
    }



}


