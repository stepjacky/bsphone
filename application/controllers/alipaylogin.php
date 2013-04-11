<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Created by JetBrains PhpStorm.
 * User: 饭
 * Date: 13-4-8
 * Time: 下午10:45
 * To change this template use File | Settings | File Templates.
 */

class Alipaylogin extends MY_Controller {

    public  function __construct(){
        parent::__construct("Myuser_model");
        $this->load->library('alipaynotify');
        $this->load->library('alipaysubmit');
        $this->load->helper('alipaybase');
        $this->load->library('user_agent');


    }

    public function login(){
        $user = $this->nsession->userdata('user');
        if($user){
            $refer = $this->agent->referrer();
            redirect($refer);

        }




        $cfg = alipayconfig();
        //目标服务地址
        $target_service = "user.auth.quick.login";
        //必填
        //必填，页面跳转同步通知页面路径
        $return_url = base_url("/alipaylogin/postback");
        //需http://格式的完整路径，不允许加?id=123这类自定义参数

        //防钓鱼时间戳
        $anti_phishing_key = "";
        //若要使用请调用类文件submit中的query_timestamp函数

        //客户端的IP地址
        $exter_invoke_ip = "";
        //非局域网的外网IP地址，如：221.0.0.1


        /************************************************************/

//构造要请求的参数数组，无需改动
        $parameter = array(
            "service" => "alipay.auth.authorize",
            "partner" => trim($cfg['partner']),
            "target_service"	=> $target_service,
            "return_url"	=> $return_url,
            "anti_phishing_key"	=> $anti_phishing_key,
            "exter_invoke_ip"	=> $exter_invoke_ip,
            "_input_charset"	=> trim(strtolower($cfg['input_charset']))
        );

        $html_text = $this->alipaysubmit->buildRequestForm($parameter,"get", "确认");
        $data['loginform'] = $html_text;
        $this->load->view('apps/res-header-modal',$data);
        $this->load->view('alipaylogin/submit',$data);
        $this->load->view('apps/res-footer',$data);
    }

    public function postback(){

        $verify_result = $this->alipaynotify->verifyReturn();
        if($verify_result) {//验证成功
            /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            //请在这里加上商户的业务逻辑程序代码

            //——请根据您的业务逻辑来编写程序（以下代码仅作参考）——
            //获取支付宝的通知返回参数，可参考技术文档中页面跳转同步通知参数列表

            //支付宝用户号

            $user_id = $this->_get('user_id');

            $real_name = $this->_get('real_name');



            //授权令牌
            $token = $this->_get('token');
            $puser = $this->dao->get($user_id);
            if(!$puser){

                //用户未注册过
                $userdata = array(
                    "id"=>$user_id,
                    "openid"=>$user_id,
                    "name"=>$real_name,
                    "nick"=>$real_name,
                    'access_token'=>$token,
                    'avatar'=>'/resources/images/avator/default.png',
                    'acted'=>true
                );
                $this->dao->save($userdata);
                $this->nsession->set_userdata('user', $userdata);
            }else{
                $this->nsession->set_userdata('user', $puser);
            }


            //判断是否在商户网站中已经做过了这次通知返回的处理
            //如果没有做过处理，那么执行商户的业务程序
            //如果有做过处理，那么不执行商户的业务程序

            //——请根据您的业务逻辑来编写程序（以上代码仅作参考）——
            $refer = $this->agent->referrer();
            redirect($refer);
            //redirect();
            /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        }
        else {
            //验证失败
            //如要调试，请看alipay_notify.php页面的verifyReturn函数
            redirect('welcome/openlogin');
        }
    }


}