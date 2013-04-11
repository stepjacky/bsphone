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
 * FileName application/models/fundsrecord.php
 * Created by CIscaffolding.
 * User: qujiakang
 * QQ:myqq_postor@qq.com
 * Email: qujiakang@gmail.com  
 * Date: Sat Feb 02 22:33:41 CST 2013
 *    
 */

class Fundsrecord_model extends MY_Model {
     
    public  function __construct(){
        parent::__construct("Fundsrecord_model");
    }  

    public function save($data,$pk='id'){

        if($data[$pk]=='')$data[$pk] = getGUID();
        $amount = $data['amount'];
        $user   = $data['username'];
        if(!($this->__valid($user) || $this->__valid($amount)))return;
        $this->db->trans_start();
        $amount = $amount*(-1);
        $SQL = "update myuser u set u.founds=u.founds+".$amount."  where ".$pk."='".$user."'";
        $this->db->query($SQL);
        $str = $this->db->insert_string($this->table(), $data);
        //$this->firelog($str);
        $this->db->insert($this->table, $data);
        $this->db->trans_complete();
    }

    public function find_my_fund($page=1){
        $user = $this->nsession->userdata('user');

        $where = "username='".$user['id']."'";

        $data = $this->query_paged($page,10,'/profile/fund',array("firedate"=>"desc"),$where);

        return  $data;
    }
}   