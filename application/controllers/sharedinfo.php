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
 * FileName application/controllers/sharedinfo.php
 * Created by CIscaffolding.
 * User: qujiakang
 * QQ:myqq_postor@qq.com
 * Email: qujiakang@gmail.com  
 * Date: Wed Nov 28 23:40:03 CST 2012
 *    
 */

class Sharedinfo extends MY_Controller {
     
    public  function __construct(){
        parent::__construct("Sharedinfo_model");
    }

    public function index(){
        $data = array();
        
        $this->load->view("apps/header");
        $this->load->view("sharedinfo/index",$data);
        $this->load->view("apps/footer");
    }
    
     /**
      * 新增编辑
      */
    public function editNew($id=-1){
        
       $data = array(); 
      
        if($id!=-1){
           $data = $this->dao->get($id);
          
        }

        $this->load->view("admin/res-head");
        $this->load->view($this->dao->table()."/editNew",$data);
        $this->load->view("admin/footer");
    }

    public function more($name){
        if(!isset($name) || $name==""){
            show_error("$name 分享信息没找到",404);
            return;
        }
        $beans =  $this->dao->find_where("name like '%$name%'");
        $data = array();
        $data['beans'] = $beans;
        $data['phonename'] = $name;
        $this->__user_header($data);

        $this->load->view("sharedinfo/more",$data);

        $this->load->view("apps/footer");
    }

    public function input($id,$name){

        $name = urldecode($name);
        $id = urldecode($id);
        $data = array(
            'name'=>$name,
            'id'=>$id,
            'flag'=>'index'
        );

        $this->__user_header($data);
        $this->load->view("sharedinfo/input",$data);
        $this->load->view("index/common/phonefooter");
        $this->load->view("apps/footer");
    }


    public function saveUpdate(){
        $data =  $this->_xsl_post();
        $user    =  $this->nsession->userdata("user");
        if(!$user){
            redirect('/welcome/openlogin');
            return;
        }

        $data['username'] = $user['name'];
        $this->dao->saveUpdate($data);
        $this->_end();
    }

    
}   