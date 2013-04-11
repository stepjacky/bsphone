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
 * FileName application/controllers/artitle.php
 * Created by CIscaffolding.
 * User: qujiakang
 * QQ:myqq_postor@qq.com
 * Email: qujiakang@gmail.com  
 * Date: Wed Nov 28 23:40:02 CST 2012
 *    
 */

class Artitle extends Media_Controller {
     
    public  function __construct(){
        parent::__construct("Artitle_model");
        $this->load->library('create_ckeditor');
        $this->load->model('Tags_model','tagDao');
        $this->load->model('Comment_model','cmtDao');
    }

    public function index(){
        $data = array();
        $data['tags'] = $this->tagDao->find_by_catalog('artitle');
        $this->load->view("apps/header");
        $this->load->view("artitle/index",$data);
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
            $id = urldecode($id);
            $data = $this->dao->get($id);
            $this->fireLog($data);
            $ckcfg["value"] = $data["content"];

        }
        
             $data['my_editor'] = $this->create_ckeditor->createEditor( $ckcfg);
        $this->load->view("admin/res-head");
        $this->load->view($this->dao->table()."/editNew",$data);
        $this->load->view("admin/footer");
    }

    public function one($id){
        $id = urldecode($id);
        $data  = array('flag'=>'artitle');
        $bean =  $this->dao->get($id);
        $data['bean'] = $bean;
        $tags = $this->tagDao->find_by_catalog('artitle');
        $data['tags']=$tags;
        $data['keywords']=  str_replace('@',$bean['summary'],'@');
        $data['description']=str_replace('@',$bean['summary'],'@');
        $data['title']= str_replace('@',$bean['name'],'@-BE数码通信');
        $this->__user_header($data);
        $this->load->view($this->dao->table()."/one", $data);
        $this->load->view("apps/footer");
    }

    public function by_tags($tag,$tidx=0){
        $tag = urldecode($tag);
        $beans     =  $this->dao->find_by_tag($tag);
        $comments  =  $this->cmtDao->most_for_artitle();
        $tags = $this->tagDao->find_by_catalog('artitle');
        $data  =array(
            'tags'=>$tags,
            "beans"=>$beans,
            'comments'=>$comments,
            'tidx'=>$tidx,
            'flag'=>'artitle'
        );
        $data['top4'] = $this->dao->find_recommend();
        $this->__user_header($data);
        $this->load->view("index/artitle",$data);
        $this->load->view("apps/footer");
    }

    public function service_by_tag($tag='',$page=1,$rows=10){
        $data = array("flag"=>"service");


        $beans = $this->dao->list_by_tag($tag,$page,$rows);

        $data['beans'] = $beans;


        $this->load->model('Video_model','vdoDao');

        $topmovs =  $this->vdoDao->top_newest();

        $data['topmovs'] = $topmovs;


        $this->load->model('Servicecenter_model','servDao');

        $services = $this->servDao->find_all();

        $data['services'] = $services;


        $this->__user_header($data);

        $this->load->view("index/service",$data);

        $this->load->view("apps/footer");
    }


    public  function selector($page=1){

        $this->load->view('admin/res-head');
        $this->load->view('artitle/selector');
    }



    public function save_recommends(){
        $beans = $this->_post('beans');
        $beans = urldecode($beans);
        if(!$this->__invalidparam($beans))return;
        if(strpos($beans,','))
            $beans = explode(',',$beans);
        else
            $beans = array($beans);
        //$this->fireLog($beans);
        $this->dao->save_recommend($beans);
    }

    public function save_home_artitle(){
        $beans = $this->_post('beans');
        $beans = urldecode($beans);
        if(!$this->__invalidparam($beans))return;
        if(strpos($beans,','))
            $beans = explode(',',$beans);
        else
            $beans = array($beans);
        //$this->fireLog($beans);
        $this->dao->save_home_artitle($beans);
    }

    public function home_artitle(){
        $beans = $this->dao->find_home_artitle();
        $data= array(
            'beans'=>$beans
        );

        $this->load->view('artitle/home-artitle',$data);
    }

    public function remove_home_artitle($id){

    }

    public function recommend_artitle(){
        $beans = $this->dao->find_recommend();
        $data= array(
            'beans'=>$beans

        );

        $this->load->view('artitle/recommends',$data);
    }

    public function remove($id){
        $SQL="update phone set main_artitle=null where main_artitle=?";
        $this->db->query($SQL,array($id));
        $SQL="delete from comment where artitle_id=?";
        $this->db->query($SQL,array($id));
        parent::remove($id);
    }

}   