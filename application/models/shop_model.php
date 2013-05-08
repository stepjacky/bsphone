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
 * FileName application/models/shop.php
 * Created by CIscaffolding.
 * User: qujiakang
 * QQ:myqq_postor@qq.com
 * Email: qujiakang@gmail.com  
 * Date: Wed Nov 28 23:40:03 CST 2012
 *    
 */

class Shop_model extends MY_Model {
     
    public  function __construct(){
        parent::__construct("Shop_model");
    }  

    public function find_by_area($area){
        $this->db->select("id,name");
        $this->db->where("shoparea_id",$area);
        $query = $this->db->get($this->table());
        $beans = $query->result_array();
        return $beans;
    }

    public function first_area($aid){
        $this->db->select("*");
        $this->db->where("shoparea_id",$aid);
        $this->db->limit(1,0);
        $query = $this->db->get($this->table());
        $bean = $query->first_row('array');
        return empty($bean)?$this->emptyObject():$bean;
    }

    public function find_for_nav(){
        $data = array();
        $this->load->model('Shoparea_model','sharDao');
        $areas  = $this->sharDao->find_all();
        foreach ($areas as $area) {

            $shops =  $this->find_by_area($area['id']);
            $data[$area['name']] = $shops;
        }

        return $data;

    }
    
}   