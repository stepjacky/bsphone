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
 * FileName application/controllers/movies.php
 * Created by CIscaffolding.
 * User: qujiakang
 * QQ:myqq_postor@qq.com
 * Email: qujiakang@gmail.com  
 * Date: Wed Nov 28 23:40:03 CST 2012
 *    
 */

class Video extends Media_Controller {
     
    public  function __construct(){
        parent::__construct("Video_model");
        $this->load->model('Tags_model','tagDao');
        $this->load->model('Comment_model','cmtDao');
    }

    public function index(){
        $data = array();
        
        $this->load->view("apps/header");
        $this->load->view("video/index",$data);
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

    public function by_tags($tag,$tidx=0){
        $tag = urldecode($tag);
        $beans     =  $this->dao->find_by_tag($tag);
        //$comments  =  $this->cmtDao->most_for_video();
        $tags = $this->tagDao->find_by_catalog('video');
        //$hots = $this->dao->hot_video();
        foreach ($beans as &$bean) {
            $bean['cmtnum'] = $this->cmtDao->count_for_type('artitle_id',$bean['id']);
        }
        $data  =array(
            //'hots'=>$hots,
            'gtags'=>$tags,
            "beans"=>$beans,
            //'comments'=>$comments,
            'tidx'=>$tidx,
            'flag'=>'movies'
        );
        $top4 = $this->dao->find_recommend();
        $data['top4'] = $top4;
        $this->__user_header($data);
        $this->load->view("index/movies",$data);
        $this->load->view("apps/footer");
    }

    public function hotest($page=1){
        $data = array(
            'flag'=>'movies',
            'title'=>'热门视频'
        );
        $beans = $this->dao->hotest($page);
        $pagelink = $this->dao->pagelink($page,'/video/hotest/'.$page);
        $data['beans'] = $beans;
        $data['pagelink'] = $pagelink;
        $this->__user_header($data);
        $this->load->view("video/videoest",$data);
        $this->load->view("apps/footer");
    }

    public function newest($page=1){
        $data = array(
            'flag'=>'movies',
            'title'=>'最新视频'

        );
        $beans = $this->dao->newest($page);
        $data['beans'] = $beans;
        $pagelink = $this->dao->pagelink($page,'/video/newest/'.$page);
        $data['pagelink'] = $pagelink;
        $this->__user_header($data);
        $this->load->view("video/videoest",$data);
        $this->load->view("apps/footer");
    }


    public function  one($id){
        $id = urldecode($id);
        $data = array('flag'=>'movies');
        $bean  = $this->dao->get($id);
        $data['bean'] = $bean;
        $this->fireLog($data);
        $data['keywords']=  str_replace('@',$bean['remark'],'@');
        $data['description']=str_replace('@',$bean['remark'],'@');
        $data['title']= str_replace('@',$bean['name'],'@-BE数码通信');
        $this->__user_header($data);
        $this->load->view("video/one",$data);
        $this->load->view("apps/footer");
    }



    public  function selector($page=1){

        $this->load->view('admin/res-head');
        $this->load->view('video/selector');
    }

    public function list_with_paged($page=1){

        $data = $this->dao->list_with_paged($page);

        $this->load->view('/video/selector-list',$data);
    }

    public function save_recommends(){
        $beans = $this->_post('beans');
        $beans = urldecode($beans);
        if(!$this->__invalidparam($beans))return;
        if(strpos($beans,','))
            $beans = explode(',',$beans);
        else
            $beans = array($beans);
        $this->fireLog($beans);
        $this->dao->save_recommend($beans);
    }

    public function recommend_video(){
        $beans = $this->dao->find_recommend();
        $data= array(
            'beans'=>$beans

        );

        $this->load->view('video/recommends',$data);
    }
    
}   