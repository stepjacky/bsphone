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
 * FileName application/models/sparetype.php
 * Created by CIscaffolding.
 * User: qujiakang
 * QQ:myqq_postor@qq.com
 * Email: qujiakang@gmail.com  
 * Date: Wed Nov 28 23:40:03 CST 2012
 *    
 */

class Sparetype_model extends MY_Model {
     
    public  function __construct(){
        parent::__construct("Sparetype_model");
    }  

    public function find_by_sprtype(){
        $this->db->select("id,name,icon");
        $this->db->where('parent',null);
        $this->db->order_by('sort','asc');
        $query = $this->db->get($this->table());
        $beans = $query->result_array();
        foreach($beans as &$bean){
            $this->db->select('id,name');
            $this->db->where('parent',$bean['id']);
            $query = $this->db->get($this->table());
            $child = $query->result_array();
            $bean['children'] = $child;
        }
        return $beans;
    }
    public function find_by_root(){
        $this->db->select("id,name,icon");
        $this->db->where('parent',null);
        $this->db->order_by('sort','asc');
        $query = $this->db->get($this->table());
        $beans = $query->result_array();
        return $beans;
    }
    
}   