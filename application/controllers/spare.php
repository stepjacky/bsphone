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
 * FileName application/controllers/outskirts.php
 * Created by CIscaffolding.
 * User: qujiakang
 * QQ:myqq_postor@qq.com
 * Email: qujiakang@gmail.com  
 * Date: Wed Nov 28 23:40:03 CST 2012
 *    
 */

class Spare extends Media_Controller {
     
    public  function __construct(){

        parent::__construct("Spare_model");
        $this->load->library('create_ckeditor');
        $this->load->model('Sparetype_model','sprDao');
    }

    public function index(){
        $data = array();
        
        $this->load->view("apps/header");
        $this->load->view("spare/index",$data);
        $this->load->view("apps/footer");
    }
    
     /**
      * 新增编辑
      */
    public function editNew($id=-1){
        
       $data = array();
        $ckcfg = array();
        $ckcfg["name"]  ="remark";
        if($id!=-1){


            $id = urldecode($id);
            $data = $this->dao->get($id);
            $this->fireLog($data);
            $ckcfg["value"] = $data["remark"];

          
        }

        $data['my_editor'] = $this->create_ckeditor->createEditor( $ckcfg);
        $sprs = $this->sprDao->find_by_sprtype();
        $data['treeSource'] = json_encode($sprs);
        $this->load->view("admin/res-head");
        $this->load->view($this->dao->table()."/editNew",$data);
        $this->load->view("admin/footer");
    }

    public function by_type($typeid){

        $sprs = $this->sprDao->find_by_sprtype();
        $beans = $this->dao->by_type($typeid);
        $spr = $this->sprDao->get($typeid);
        $topad4 = $this->dao-> load_ad4();


        $data = array(
            'beans'=>$beans,
            'sprs'=>$sprs,
            'spr'=>$spr,
            'flag'=>'outskirts'
        );
        $data['topad4'] = $topad4;
        $this->__user_header($data);
        $this->load->view('apps/outskirts/header',$data);
        $this->load->view('spare/types',$data);
        $this->load->view('apps/outskirts/footer',$data);
        $this->load->view('apps/footer');
    }


    public function by_type_paged($tid,$page=1){
        $data = $this->dao->by_type_paged($tid,$page);
        $this->load->view('spare/selector-list',$data);
    }


    public function one($id){
        $bean =  $this->dao->get($id);
        $data  =array(
            'flag'=>'outskirts',
            'bean'=>$bean
        );

        $this->__user_header($data);
        $this->load->view('spare/one',$data);
        $this->load->view("index/common/phonefooter");
        $this->load->view('apps/footer');
    }

    public function load_recommends(){
        $data = array();

        $beans = $this->dao->recommends();

        $data['beans'] = $beans;
        $data['stype'] = 'recommendspare';
        $this->load->view('spare/recommends',$data);

    }

    public function save_recommends(){
        $spares = $this->_post("spares");
        $this->fireLog($spares);
        if(!$this->__invalidparam($spares))return;
        if(strpos($spares,','))
            $spares = explode(',',$spares);
        else
            $spares = array($spares);
        $this->dao->save_recommends($spares);
    }


    public function remove_feture($stype,$id,$homed=false){
        $this->dao->remove_feture($stype,$id,$homed);
    }

    public function selector(){
        $this->load->model('Sparetype_model','sprDao');
        $sprs = $this->sprDao->find_by_sprtype();
        $data = array(
            "sprs"=>$sprs
        );
        $this->load->view('admin/res-head');
        $this->load->view('spare/selector',$data);
    }


    public function save_ad4(){
        $spares = $this->_post("spares");
        if(!$this->__invalidparam($spares))return;
        if(strpos($spares,','))
            $spares = explode(',',$spares);
        else
            $spares = array($spares);
        $this->dao->save_ad4($spares);

    }
   public function save_ad2(){
        $spares = $this->_post("spares");
        $ad_type = $this->_post('ad_type');

        if(!$this->__invalidparam($spares))return;
       $this->fireLog($spares);
        if(strpos($spares,','))
            $spares = explode(',',$spares);
        else
            $spares = array($spares);
        $this->dao->save_ad2($spares,$ad_type);

    }

    public function load_sparead2(){
        $data =  $this->dao->load_sparead2();
        $this->load->view('spare/ad2',$data);
    }


    public function load_ad4(){
       $data = array();
       $beans = $this->dao->load_ad4();
       $data['beans'] = $beans;
       $this->load->view('spare/ad4',$data);
    }




    public function save_new8(){
        $spares = $this->_post("spares");

        if(!$this->__invalidparam($spares))return;

        if(strpos($spares,',')){

            $spares = explode(',',$spares);
            $this->fireLog($spares);
        }else{
            $spares = array($spares);
        }
        $this->dao->save_new8($spares);

    }

    public function load_new8(){
        $data = array();
        $beans = $this->dao->load_new8();
        $data['beans'] = $beans;
        $data['stype'] = 'recommendspare';
        $data['home'] = true;
        $this->load->view('spare/new8',$data);
    }



}   