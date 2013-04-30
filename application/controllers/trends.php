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
 * FileName application/controllers/trends.php
 * Created by CIscaffolding.
 * User: qujiakang
 * QQ:myqq_postor@qq.com
 * Email: qujiakang@gmail.com  
 * Date: Wed Nov 28 23:40:03 CST 2012
 *    
 */

class Trends extends Media_Controller {
     
    public  function __construct(){
        parent::__construct("Trends_model");
               $this->load->library('create_ckeditor');
                
    }

    public function index(){
        $data = array();
        
        $this->load->view("apps/header");
        $this->load->view("trends/index",$data);
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
        
             $data['my_editor'] = $this->create_ckeditor->createEditor( $ckcfg);        
        $this->load->view("admin/res-head");
        $this->load->view($this->dao->table()."/editNew",$data);
        $this->load->view("admin/footer");
    }

    public function save4vip(){
        $trends = $this->_post('trends');
        if(!$this->__invalidparam($trends))return;
        if(strpos($trends,',')){
            $trends = explode(',',$trends);
        }else{
            $trends = array($trends);
        }
        $this->dao->save4trends($trends);

    }

    public function load_vip_trends(){
        $data = array();
        $beans = $this->dao->load_vip_trends();
        $data['beans'] = $beans;
        $this->load->view('trends/vip4top',$data);
    }

    public function joinus($id){


        $trends = $this->dao->find_by_tags("加盟动态",20);

        $bean = $this->dao->get($id);

        $this->load->model('Shop_model', 'shoDao');

        $beans = $this->shoDao->gets(1,10);
        $data= array(
            'flag'=>'joinus',
            'bean'=>$bean,
            'beans'=>$beans,
            'trends'=>$trends
        );
        $this->fireLog($data);

        $this->__user_header($data);

        $this->load->view('apps/joinus/join-header');

        $this->load->view("apps/joinus/active", $data);

        $this->load->view('apps/joinus/join-footer');

        $this->load->view("apps/footer");

    }



    public function one($id){

        $bean  = $this->dao->get($id);

        $data =  array(
            'flag'=>'service',
            'bean'=>$bean
        );

        $topmovs =  $this->dao->hotservice();

        $data['topmovs'] = $topmovs;


        $this->load->model('Servicecenter_model','servDao');

        $services = $this->servDao->find_all();

        $data['services'] = $services;

        $data['keywords']=  str_replace('@',$bean['summary'],'@');
        $data['description']=str_replace('@',$bean['summary'],'@');
        $data['title']= str_replace('@',$bean['name'],'@-BE数码通信');
       // $this->fireLog($data);
        $this->__user_header($data);

        $this->load->view("trends/one",$data);

        $this->load->view("apps/footer");

    }


    public  function  two($id,$page = 'index'){

        $menu = $this->__aboutus_menu($page);
        $tag = $menu[$page]['title'];
        $data = array(
            'flag' => 'index',
            'tag' => $tag,
            'menu' => $menu
        );

        // $this->fireLog($data);

        $bean = $this->dao->get($id);

        $data['bean'] = $bean;

        $this->__user_header($data);

        $this->load->view("trends/two", $data);

        $this->load->view("apps/footer");
    }

    public function service_by_tag($tag='',$page=0,$rows=10){
        $data = array(
            "flag"=>"service",
            "ctag"=>urldecode($tag)
        );

        if($tag=='全部')$tag='售后服务';

        $beans = $this->dao->list_by_tag($tag,$page,$rows);

        $data['beans'] = $beans;

        $topmovs =  $this->dao->hotservice();

        $data['topmovs'] = $topmovs;


        $this->load->model('Servicecenter_model','servDao');

        $services = $this->servDao->find_all();

        $data['services'] = $services;


       // $this->fireLog($data);

        $this->__user_header($data);

        $this->load->view("index/service",$data);

        $this->load->view("apps/footer");
    }


    public function find_by_nametags($key,$page=1,$rows=10){
        $beans  =  $this->dao->find_by_nametags($key,$page,$rows);
        $data['datasource'] = $beans;
        $data['pagelink']="";
        $this->load->view($this->dao->table()."/list",$data);

    }

}   