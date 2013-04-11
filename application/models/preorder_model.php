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
 * FileName application/models/preorder.php
 * Created by CIscaffolding.
 * User: qujiakang
 * QQ:myqq_postor@qq.com
 * Email: qujiakang@gmail.com  
 * Date: Mon Feb 04 18:08:58 CST 2013
 *    
 */

class Preorder_model extends MY_Model {
     
    public  function __construct(){
        parent::__construct("Preorder_model");
    }


    public function find_by_owner($user,$page=1){
        $user = urldecode($user);

        $where = "username='".$user."'";

        $data = $this->query_paged(
            $page
            ,10
            ,'/profile/preorder'
            ,array("firedate"=>"desc","finished"=>"desc")
            ,$where);

        return $data;

    }

    public function toggle_status($id,$s){
         $data = array(
             "id"=>$id,
             "finished"=>$s
         );
         $this->update($data);

    }


    public function gets($page=1,$rows=10){
        return parent::gets($page,$rows,array("finished"=>"asc","firedate"=>"desc"));
    }


}   