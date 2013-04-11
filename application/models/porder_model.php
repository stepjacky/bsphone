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
 * FileName application/models/porder.php
 * Created by CIscaffolding.
 * User: qujiakang
 * QQ:myqq_postor@qq.com
 * Email: qujiakang@gmail.com  
 * Date: Wed Nov 28 23:40:03 CST 2012
 *    
 */

class Porder_model extends Media_Model {
     
    public  function __construct(){
        parent::__construct("Porder_model");
    }  

    public function add_order($order,$details){
        $this->db->trans_begin();
        $SQL = $this->db->insert_string('porder', $order);
        $this->db->query($SQL);
        foreach($details as $dtl){
            $SQL =  $this->db->insert_string('porderdetail', $dtl);
            $this->db->query($SQL);
        }
        if ($this->db->trans_status() === FALSE)
        {
            $this->db->trans_rollback();
            return FALSE;
        }
        else
        {

            $this->db->trans_commit();
            return TRUE;
        }

    }

    public function find_my_porder($page=1,$rows=10){

        $user = $this->nsession->userdata('user');

        $where = "myuser_username='".$user['id']."'";

        $data = $this->query_paged($page,$rows,'/profile/index/myorder',array("firedate"=>"desc"),$where);

        return $data;

    }




    
}   