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
 * Date: Sun Nov 25 14:59:32 CST 2012
 *    
 */

class Admin extends MY_Controller {
     
    public  function __construct(){
        parent::__construct("Adminsor_model");
    }

    public function index($site='index'){

        if(!$this->is_admin_login()){
            $this->load->view("admin/res-head");
            $this->load->view("admin/login");
            $this->load->view("admin/footer");
            return;
        }

        $user = $this->__sessing("adminuser");
        $this->load->view("admin/header",$user);
        $this->load->view("admin/".$site);
        $this->load->view("admin/footer");
    }

    public function gohome(){
        $uname = $this->__xsl_post("username");
        $pword = $this->__xsl_post("password");

        echo "name:".$uname;
        echo "pword: ".$pword;
        if($this->dao->validate($uname,$pword) ){
            $data = array(
                'adminName'=>$uname
            );
            $this->__sessit('adminuser',$data);
            redirect('/admin');
        } else{
            $this->load->view("admin/res-head");
            $this->load->view("admin/login");
            $this->load->view("admin/footer");
        }
    }


    public function modify_password(){
        $uname = $this->__xsl_post("username");
        $pword = $this->__xsl_post("password");

        $this->fireLog($uname);
        $this->fireLog($pword);
        $this->dao->modify($uname,$pword);
    }

    public function modify(){
        if(!$this->is_admin_login()){
            $this->load->view("admin/res-head");
            $this->load->view("admin/login");
            $this->load->view("admin/footer");
            return;
        }

        $user = $this->__sessing("adminuser");
        $this->load->view("admin/header",$user);
        $this->load->view("admin/modify-password");
        $this->load->view("admin/footer");
    }
    
    
}   