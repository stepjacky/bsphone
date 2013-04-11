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
 * FileName application/controllers/preorder.php
 * Created by CIscaffolding.
 * User: qujiakang
 * QQ:myqq_postor@qq.com
 * Email: qujiakang@gmail.com  
 * Date: Mon Feb 04 18:08:58 CST 2013
 *    
 */

class Preorder extends MY_Controller {
     
    public  function __construct(){
        parent::__construct("Preorder_model");
    }

    public function index($page=1){
        $data = array('flag'=>'index');
        $user = $this->nsession->userdata('user');
        if(!$user){
            redirect('/welcome/openlogin');
            return;
        }
        $data['user'] = $user;
        $beans = $this->dao->find_by_owner($user['id'],$page);
        $data['data'] = $beans;
        $this->__user_header($data);
        $this->load->view("preorder/index",$data);
        $this->load->view("apps/footer");
    }
    
     /**
      * 新增编辑
      */
    public function editNew($id=-1){
        
       $data = array(); 
      
        if($id!=-1){
           $data = $this->dao->get($id);
          
        }else{
           $data = $this->dao->emptyObject();
        
        }
        
        $this->load->view("admin/res-head");
        $this->load->view($this->dao->table()."/editNew",$data);
        $this->load->view("admin/footer");
    }


    public function add_order(){

        $user = $this->nsession->userdata('user');
        if(!$user){
            redirect('/welcome/openlogin');
            return;
        }

        $phone   = $this->_post('phone_name');
        $addrs    = $this->_post('address');
        $date     = $this->_post('firedate');
        $mobile   = $this->_post('mobile');
        $amount   = $this->_post('amount');
        $data = array();
        $user = $this->nsession->userdata('user');
            $data['id'] = getGUID();
            $data['phone_name'] = $phone;
            $data['address'] = $addrs;
            $data['firedate'] = $date;
            $data['username'] = $user['id'];
            $data['mobile'] = $mobile;
            $data['amount'] = $amount;

        $this->fireLog($data);
        $this->dao->save($data);
        $this->goback();

     }

     public function toggle_status($id,$s){
        $this->dao->toggle_status($id,$s);
     }

     public function remove($id){
         $user = $this->nsession->userdata('user');
         if(!$user){
             redirect('/welcome/openlogin');
             return;
         }
         parent::remove($id);
         $this->goback();
     }
    
}   