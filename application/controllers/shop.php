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
 * FileName application/controllers/shop.php
 * Created by CIscaffolding.
 * User: qujiakang
 * QQ:myqq_postor@qq.com
 * Email: qujiakang@gmail.com  
 * Date: Wed Nov 28 23:40:03 CST 2012
 *    
 */

class Shop extends Media_Controller {
     
    public  function __construct(){
        parent::__construct("Shop_model");
        $this->load->library('create_ckeditor');
        $this->load->model('Shoparea_model','areaDao');
        $this->load->model('Servicecenter_model', 'sceDao');
    }

    public function index(){
        $data = array();
        
        $this->load->view("apps/header");
        $this->load->view("shop/index",$data);
        $this->load->view("apps/footer");
    }

    public function ofarea($aid){
        $bean = $this->dao->first_area($aid);
        $menu = $this->dao->find_for_nav();
        $servs = $this->sceDao->find_all();

        $data = array(
            'menu' => $menu,
            'smenu' => $servs,
            'flag' => 'service'
        );
        $data['bean'] = $bean;
        $this->__user_header($data);

        $this->load->view("index/servicecenter", $data);

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
          
        }
        $areas = $this->areaDao->find_all();
        $data['shopareas'] = $areas;
        $data['my_editor'] = $this->create_ckeditor->createEditor( $ckcfg);
        $this->load->view("admin/res-head");
        $this->load->view($this->dao->table()."/editNew",$data);
        $this->load->view("admin/footer");
    }

    public function find_by_area($area,$type='raw'){
       if($this->__invalidparam($type) && $type=='json'){
           echo json_encode($this->dao->find_by_area($area));
           return ;
       }
        return $this->dao->find_by_area($area);
    }
    
    public function ztree(){
        $parent =  $this->_post('id');
        if($parent=='root'){
            $areas = $this->areaDao->find_all();
            foreach($areas as &$area){
                $area['isParent']=true;
            }
            echo json_encode($areas);
        }else{
            $this->find_by_area($parent,'json');
        }
    }
}   