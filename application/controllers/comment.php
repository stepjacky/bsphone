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
 * FileName application/controllers/comment.php
 * Created by CIscaffolding.
 * User: qujiakang
 * QQ:myqq_postor@qq.com
 * Email: qujiakang@gmail.com  
 * Date: Wed Nov 28 23:40:02 CST 2012
 *    
 */

class Comment extends MY_Controller {

    private $referer;
    public  function __construct(){
        parent::__construct("Comment_model");
        $this->load->library('user_agent');
        $refer = $this->agent->referrer();
        $this->referer = $refer==''?'/':$refer;
    }

    public function index(){
        $data = array();
        
        $this->load->view("apps/header");
        $this->load->view("comment/index",$data);
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

    public function add_for_artitle($aid){
        $user    =  $this->nsession->userdata("user");
        $this->fireLog($user);
        if(!$user){
            redirect('/welcome/openlogin');
            return;
        }

        $aid = urldecode($aid);
        $user    =  $this->nsession->userdata("user");

        $content = $this->_post('content');
        $this->dao->add_for_artitle($aid,$content,$user['id']);
        redirect($this->referer);
    }

    public function add_for_video($vid){
        $user    =  $this->nsession->userdata("user");
        if(!$user){
            redirect('/welcome/openlogin');
            return;
        }
        $vid = urldecode($vid);
        $user    =  $this->nsession->userdata("user");
        $content = $this->_post('content');
        $this->dao->add_for_video($vid,$content,$user['id']);
        redirect($this->referer);
    }

    public function add_for_phone($pid){
        $user    =  $this->nsession->userdata("user");
        if(!$user){
            redirect('/welcome/openlogin');
            return;
        }
        $pid = urldecode($pid);
        $user    =  $this->nsession->userdata("user");
        $content = $this->_post('content');
        $this->dao->add_for_phone($pid,$content,$user['id']);
        redirect($this->referer);
    }


    public function add_for_found(){
        $user    =  $this->nsession->userdata("user");
        if(!$user){
            redirect('/welcome/openlogin');
            return;
        }
        $user    =  $this->nsession->userdata("user");
        $content = $this->_post('content');
        $this->dao->add_for_found($content,$user['id']);
        redirect($this->referer);
    }

}   