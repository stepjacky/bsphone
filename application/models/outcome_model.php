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
 * FileName application/models/outcome.php
 * Created by CIscaffolding.
 * User: qujiakang
 * QQ:myqq_postor@qq.com
 * Email: qujiakang@gmail.com  
 * Date: Tue Mar 12 22:01:56 CST 2013
 *    
 */

class Outcome_model extends MY_Model {
     
    public  function __construct(){
        parent::__construct("Outcome_model");
    }  

    public function find_by_firedate(){

        $this->db->select("username,address,Logistics,shipnumber,date(firedate) fdate");
        $this->db->order_by("date(firedate)","desc");
        $query = $this->db->get($this->table());
        $beans = $query->result_array();
        $data = array();
        foreach($beans as &$bean){
            $key = $bean['fdate'];
            if(!isset($data[$key])){
                $data[$key] = array();
            }
            array_push($data[$key],$bean);
            $this->firelog($key);
            $this->firelog($data[$key]);

        }



        return $data;
    }

    public function gets($page = 1, $rows = 10) {
        $start = $rows*$page - $rows; //
        if ($start<0) $start = 0;
        $this->db->limit($rows,$start);
        $this->db->order_by('firedate','desc');
        $query = $this->db->get($this->table());
        $result = $query->result_array();
        return $result;
    }

    
}   