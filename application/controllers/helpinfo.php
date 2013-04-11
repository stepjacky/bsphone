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
 * FileName application/controllers/helpinfo.php
 * Created by CIscaffolding.
 * User: qujiakang
 * QQ:myqq_postor@qq.com
 * Email: qujiakang@gmail.com  
 * Date: Wed Mar 06 00:57:00 CST 2013
 *    
 */

class Helpinfo extends MY_Controller {
     
    public  function __construct(){
        parent::__construct("Helpinfo_model");
               $this->load->library('create_ckeditor');
        $this->load->model("Helpcatalog_model","catDao");
                
    }

    public function index(){
        $data = array('flag'=>'index');
        $beans = $this->dao->find_helpinfo();
        $data['beans'] = $beans;
        $this->fireLog($data);
        $this->__user_header($data);
        $this->load->view("helpinfo/index",$data);
        $this->load->view("apps/footer");
    }

    public function one($id){

        $data = array('flag'=>'index');
        $bean = $this->dao->find_one($id);
        $data['bean'] = $bean;
        $this->fireLog($data);
        $this->__user_header($data);
        $this->load->view("helpinfo/one",$data);
        $this->load->view("apps/footer");
    }

     /**
      * 新增编辑
      */
    public function editNew($id=-1){
        
       $data = array(); 
             
               $ckcfg = array();
               $ckcfg["name"]  ="content";          
      
        if($id!=-1){
           $data = $this->dao->get($id);
              $ckcfg["value"] = $data["content"];       
          
        }else{
           $data = $this->dao->emptyObject();
        
        }

        $catas =  $this->catDao->find_all();
        $data['catas'] = $catas;
        $data['my_editor'] = $this->create_ckeditor->createEditor( $ckcfg);
        $this->load->view("admin/res-head");
        $this->load->view($this->dao->table()."/editNew",$data);
        $this->load->view("admin/footer");
    }
    
    
}   