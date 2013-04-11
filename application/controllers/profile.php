<?php
class Profile extends MY_Controller {

    public  function __construct(){
        parent::__construct();
        $this->load->model('Myuser_model','usrDao');
        $this->load->model('Shipaddress_model',"shiDao");
        $this->load->model('Preorder_model',"porDao");
        $this->load->model('Porder_model',"ordDao");
        $this->load->model('Fundsrecord_model','fundDao');
    }

    public function index(){

        $user = $this->nsession->userdata("user");
        if(!$user){

            redirect("/welcome/openlogin","refresh");
            return;
        }

        $data = $this->usrDao->get($user['id']);
        $data['flag'] = 'index';
        $data['pflag'] = 'index';
        $this->__user_header($data);
        $this->load->view("profile/header",$data);
        $this->load->view("profile/index",$data);
        $this->load->view("profile/footer");
        $this->load->view("apps/footer");
    }

    public function basic(){

        $user = $this->nsession->userdata("user");
        if(!$user){

            redirect("/welcome/openlogin","refresh");
            return;
        }
        $address = $this->shiDao->find_by_owner($user['id']);

        $data =     array();
        $data['user_id'] = $user['id'];
        $data['address'] = $address;
        $data['flag'] = 'index';
        $data['pflag'] = "basic";

        $this->__user_header($data);
        $this->load->view("profile/header",$data);
        $this->load->view("profile/basic",$data);
        $this->load->view("profile/footer");
        $this->load->view("apps/footer");
    }

    public function myorder($page=1){
        $user = $this->nsession->userdata("user");
        if(!$user){

            redirect("/welcome/openlogin","refresh");
            return;
        }

        $data =    array();
        $data['flag'] = 'index';
        $data['pflag'] = 'myorder';

        $data['data'] =  $this->ordDao->find_my_porder($page);

        $this->__user_header($data);
        $this->load->view("profile/header",$data);
        $this->load->view("profile/myorder",$data);
        $this->load->view("profile/footer");
        $this->load->view("apps/footer");
    }

    public function preorder($page=1){
        $user = $this->nsession->userdata("user");
        if(!$user){

            redirect("/welcome/openlogin","refresh");
            return;
        }

        $data =    array();
        $data['data'] = $this->porDao->find_by_owner($user['id'],$page);

        $data['flag'] = 'index';
        $data['pflag'] = "preorder";

        $this->__user_header($data);
        $this->load->view("profile/header",$data);
        $this->load->view("profile/preorder",$data);
        $this->load->view("profile/footer");
        $this->load->view("apps/footer");
    }

    public function fund($page=1){

        $user = $this->nsession->userdata("user");
        if(!$user){

            redirect("/welcome/openlogin","refresh");
            return;
        }

        $bean = $this->fundDao->find_my_fund($page);

        $data = $this->usrDao->get($user['id']);
        $data['flag']  = 'index';
        $data['pflag'] = 'fund';
        $data['data']  =  $bean;
        $this->__user_header($data);
        $this->load->view("profile/header",$data);
        $this->load->view("profile/fund",$data);
        $this->load->view("profile/footer");
        $this->load->view("apps/footer");
    }
}