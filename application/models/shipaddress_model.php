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
 * FileName application/models/shipaddress.php
 * Created by CIscaffolding.
 * User: qujiakang
 * QQ:myqq_postor@qq.com
 * Email: qujiakang@gmail.com  
 * Date: Wed Nov 28 23:40:03 CST 2012
 *    
 */

class Shipaddress_model extends MY_Model {
     
    public  function __construct(){
        parent::__construct("Shipaddress_model");
    }  


    public function find_by_owner($owner,$useit=FALSE){
        if(!$this->__valid($owner)) return array();
        $owner = urldecode($owner);
        $this->db->where('myuser_username',$owner);
        if($useit){
            $this->db->where('usedit',$useit);
        }
        $query = $this->db->get($this->table());
        $beans = $query->result_array();
        return $beans;
     }


    
}   