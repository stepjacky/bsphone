<?php
/**
 * Created by JetBrains PhpStorm.
 * User: 饭
 * Date: 13-3-30
 * Time: 上午12:37
 * To change this template use File | Settings | File Templates.
 */
class Sinalogin  extends MY_Controller {
    public function __construct(){
       parent::__construct();
       $this->load->library('sina');
       $this->load->model("Myuser_model","dao");
    }

    public function login(){

       $lstate =   $this->nsession->userdata('lstate');
       $pstate =   $this->_get('lstate');
       //$this->fireLog($lstate);
       // $this->fireLog($pstate);
       if(strcmp(trim($lstate),trim($pstate))!=0){
            $this->load->view('common/bad_state');
            return;
       }
       $code = $this->_get('code');
       $user = $this->sina->getLoginUserId($code);
       //$this->fireLog($user['id']);
       $puser = $this->dao->get($user['id']);
       if(!$puser){
            if(!isset($user['id'])){
                redirect();
                return;
            }
            //用户未注册过
            $userdata = array(
                "id"=>$user['id'],
                "openid"=>$user['id'],
                "avatar"=>$user['avatar'],
                "name"=>$user['name'],
                "nick"=>$user['nick']
            );
            $this->dao->save($userdata);
            $this->nsession->set_userdata('user', $userdata);
        }else{
            $this->nsession->set_userdata('user', $puser);
        }
        redirect();
    }


}



