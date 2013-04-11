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
 * FileName application/controllers/myuser.php
 * Created by CIscaffolding.
 * User: qujiakang
 * QQ:myqq_postor@qq.com
 * Email: qujiakang@gmail.com  
 * Date: Wed Nov 28 23:40:02 CST 2012
 *    
 */

class Myuser extends MY_Controller {
     
    public  function __construct(){
        parent::__construct("Myuser_model");


    }

    public function index(){
        $data = array();
        
        $this->load->view("apps/header");
        $this->load->view("myuser/index",$data);
        $this->load->view("apps/footer");
    }
    
     /**
      * 新增编辑
      */
    public function editNew($id=-1){
        
        $data = array();

        $this->fireLog($id);
        if($id!=-1){

           $data = $this->dao->get($id);
        }else{
           $data = $this->dao->emptyObject();
        }
        $this->fireLog($data);
        $this->load->view("admin/res-head");
        $this->load->view($this->dao->table()."/editNew",$data);
        $this->load->view("admin/footer");
    }


    public function login(){
        $id =  $this->_post('id');
        $password =  $this->_post("password");
        $data = array('flag'=>'index');
        $this->__user_header($data);
        if(!$id || !$password){
            $data['info'] = '用户Email,密码都必须填写';
            $this->load->view('index/openlogin',$data);
            $this->load->view('apps/footer');
            return;
        }
        $this->load->library('sina');
        $state=getGUID();
        $data['sina'] = $this->sina->sinaAuthUrl($state);

        $id = urldecode($id);
        $rst = $this->dao->login($id,$password);
        if(!$rst){
            $data['info']='用户名或者密码错误';
            $this->load->view('index/openlogin',$data);
            $this->load->view('apps/footer');
        }else{
            if($rst['acted']){
                $this->nsession->set_userdata('user', $rst);
                $from = $this->_post('from');
                $this->fireLog($from);
                redirect($from);
            }else{
                $data['info']='用户未激活,登陆'.$rst['id'].'点击激活链接激活用户';
                $this->load->view('index/openlogin',$data);
                $this->load->view('apps/footer');
            }


        }



    }

    public function register(){
        $id    = $this->_post('id');
        $name  = $this->_post('name');
        $pass  = $this->_post('password');


        $data = array('info'=>'','flag'=>'index');
        $this->__user_header($data);
        if(!$id || !$name || !$pass){
            $data['info'] = '用户Email,昵称,密码都必须填写';
            $this->load->view('index/register',$data);
            $this->load->view('apps/footer');
            return;
        }

        $activecode =  getGUID().getGUID();
        $rst = $this->dao->register($id,$name,$pass,$activecode);
        $data['register_rst']=$rst;



        if(!$rst){
            $data['info'] = '相同的用户已经注册，请重新选择注册Email';
            $this->load->view('index/register',$data);

        }else{
            $data['info'] = '恭喜!注册成功，激活邮件已发送,请先登陆邮箱'.$id.'激活用户,再登陆';
            $this->load->library('email');
            $this->email->from('xxxxfox@163.com', '测试BE电子商务');
            $this->email->to($id);
            $this->email->subject('BE数码通讯用户激活邮件，请勿回复');
            $message = $this->load->view('index/common/active-message',array('code'=>$activecode),true);
            $this->email->message($message);
            $this->email->send();
            $this->load->view('index/openlogin',$data);
        }
        $this->load->view('apps/footer');

    }

    public function rgetpass(){
        $email = urldecode($this->_post('email'));

        $data = array('email'=>$email);
        $this->__user_header($data);
        if (valid_email($email))
        {
            $user = $this->dao->find_by_email($email);
            if(!$user){
                $this->load->view('myuser/bademail');
            }else{
                $this->email->from('xxxxfox@163.com', '测试BE电子商务');
                $this->email->to($email);
                $this->email->subject('BE数码通讯用户密码重置邮件，请勿回复');
                $message = $this->load->view('index/common/regetpassword',array('code'=>''),true);
                $this->email->message($message);
                $this->email->send();
                $this->load->view('index/openlogin',$data);
                $this->load->view('myuser/mailsent',$data);
            }
        }
        else
        {
            $this->load->view('myuser/bademail',$data);

        }


    }

    public function active($code){
        $rst  =  $this->dao->actvie($code);
        $data = array('flag'=>'index');
        $this->__user_header($data);
        if(!$rst){
            $data['info']='无效激活，用户已激活或者激活吗非法';
        }else{
            $data['info']='恭喜，用户已经激活';
        }

        $this->load->view('index/openlogin',$data);
        $this->load->view('apps/footer');
    }


    public function modify_avatar(){

        $path = $this->_post('avatar');
        $user = $this->nsession->userdata("user");
        if(!$user) return;
        $data = array(
            'id' => $user['id'],
            'avatar'=>$path
        );
        $this->dao->update($data);
    }

    public function avator(){

        //$this->load->view('apps/res-header');
        $this->load->view('myuser/avator');
       // $this->load->view('apps/res-footer');
    }
}   