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
 * FileName application/controllers/tags.php
 * Created by CIscaffolding.
 * User: qujiakang
 * QQ:myqq_postor@qq.com
 * Email: qujiakang@gmail.com  
 * Date: Sat Jan 19 22:52:00 CST 2013
 *    
 */

class Tags extends MY_Controller {
     
    public  function __construct(){
        parent::__construct("Tags_model");
    }

    public function index(){
        $data = array();
        
        $this->__user_header($data);
        $this->load->view("tags/index",$data);
        $this->load->view("apps/footer");
    }
    
     /**
      * 新增编辑
      */
    public function editNew($id=-1,$pk='name'){

        $id= urldecode($id);
        $data = array();
      
        if($id!=-1){
           $data = $this->dao->get($id,$pk);
          
        }
        $data['catalogs'] = array(
            'artitle'=>'文章新闻',
            'video'=>'视频信息',
            'phone'=>'手机特点'

        );
        $this->load->view("admin/res-head");
        $this->load->view($this->dao->table()."/editNew",$data);
        $this->load->view("admin/footer");
    }

    public function remove($name,$catalog,$pk){
        $name = urldecode($name);
        $this->dao->remove($name,$catalog,$pk);
    }

    
}   