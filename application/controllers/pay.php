<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Created by JetBrains PhpStorm.
 * User: 饭
 * Date: 13-4-7
 * Time: 下午11:04
 * To change this template use File | Settings | File Templates.
 */

class Pay extends MY_Controller{

    private $logined = FALSE;
    public  function __construct(){
        parent::__construct("Brand_model");
        $this->load->library('alipaynotify');
        $this->load->library('alipaysubmit');
        $this->load->helper('alipaybase');
         $this->load->model('Porder_model','ordDao');


    }
    public function notify_back(){
        $verify_result = $this->alipaynotify->verifyNotify();

        if($verify_result) {//验证成功
            /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            //请在这里加上商户的业务逻辑程序代


            //——请根据您的业务逻辑来编写程序（以下代码仅作参考）——

            //获取支付宝的通知返回参数，可参考技术文档中服务器异步通知参数列表

            //商户订单号
            $out_trade_no = $this->_post('out_trade_no');

            //支付宝交易号
            $trade_no = $this->_post('trade_no');

            //交易状态
            $trade_status = $this->_post('trade_status');

            $data = array(
                'id'=>$out_trade_no,
                'alipayno'=>$trade_no,
                'pstatus'=>$trade_status
            );
            $this->ordDao->update($data);


            if($trade_status == 'WAIT_BUYER_PAY') {
                //该判断表示买家已在支付宝交易管理中产生了交易记录，但没有付款

                //判断该笔订单是否在商户网站中已经做过处理
                //如果没有做过处理，根据订单号（out_trade_no）在商户网站的
                //订单系统中查到该笔订单的详细，并执行商户的业务程序
                //如果有做过处理，不执行商户的业务程序

                $this->load->view('pay/notify_success');
                //echo "success";		//请不要修改或删除

                //调试用，写文本函数记录程序运行情况是否正常
                //logResult("这里写入想要调试的代码变量值，或其他运行的结果记录");
            }
            else if($trade_status == 'WAIT_SELLER_SEND_GOODS') {
                //该判断表示买家已在支付宝交易管理中产生了交易记录且付款成功，
                //但卖家没有发货

                //判断该笔订单是否在商户网站中已经做过处理
                //如果没有做过处理，根据订单号（out_trade_no）
                //在商户网站的订单系统中查到该笔订单的详细，
                //并执行商户的业务程序
                //如果有做过处理，不执行商户的业务程序

                $this->load->view('pay/notify_success');
                //echo "success";		//请不要修改或删除

                //调试用，写文本函数记录程序运行情况是否正常
                //logResult("这里写入想要调试的代码变量值，或其他运行的结果记录");
            }
            else if($trade_status == 'WAIT_BUYER_CONFIRM_GOODS') {
                //该判断表示卖家已经发了货，但买家还没有做确认收货的操作

                //判断该笔订单是否在商户网站中已经做过处理
                //如果没有做过处理，根据订单号（out_trade_no）在商户网站的订单系统中查到该笔订单的详细，并执行商户的业务程序
                //如果有做过处理，不执行商户的业务程序

                $this->load->view('pay/notify_success');
                //echo "success";		//请不要修改或删除

                //调试用，写文本函数记录程序运行情况是否正常
                //logResult("这里写入想要调试的代码变量值，或其他运行的结果记录");
            }
            else if($trade_status == 'TRADE_FINISHED') {
                //该判断表示买家已经确认收货，这笔交易完成

                //判断该笔订单是否在商户网站中已经做过处理
                //如果没有做过处理，根据订单号（out_trade_no）在商户网站的订单系统中查到该笔订单的详细，并执行商户的业务程序
                //如果有做过处理，不执行商户的业务程序

                $this->load->view('pay/notify_success');
                //echo "success";		//请不要修改或删除

                //调试用，写文本函数记录程序运行情况是否正常
                //logResult("这里写入想要调试的代码变量值，或其他运行的结果记录");
            }
            else {
                $this->load->view('pay/notify_success');
                //echo "success";		//请不要修改或删除

                //调试用，写文本函数记录程序运行情况是否正常
                //logResult ("这里写入想要调试的代码变量值，或其他运行的结果记录");
            }

            //——请根据您的业务逻辑来编写程序（以上代码仅作参考）——

            /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        }
        else {
            //验证失败
            $this->load->view('pay/notify_fail');
            //echo "success";		//请不要修改或删除

            //调试用，写文本函数记录程序运行情况是否正常
            //logResult("这里写入想要调试的代码变量值，或其他运行的结果记录");
        }
    }

    /**
              支付后自己返回同步

     */
    public function post_back(){
        $verify_result = $this->alipaynotify->verifyReturn();
        if($verify_result) {//验证成功
            /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            //请在这里加上商户的业务逻辑程序代码

            //——请根据您的业务逻辑来编写程序（以下代码仅作参考）——
            //获取支付宝的通知返回参数，可参考技术文档中页面跳转同步通知参数列表

            //WAIT_BUYER_PAY→WAIT_SELLER_SEND_GOODS→WAIT_BUYER_CONFIRM_GOODS→TRADE_FINISHED。

            //WAIT_BUYER_PAY→TRADE_FINISHED
            //商户订单号
            $out_trade_no = $this->_get('out_trade_no');

            //支付宝交易号
            $trade_no = $this->_get('trade_no');

            //交易状态
            $trade_status = $this->_get('trade_status');

            $data = array(
                'id'=>$out_trade_no,
                'alipayno'=>$trade_no,
                'pstatus'=>$trade_status
            );
            $this->ordDao->update($data);
            if($trade_status == 'WAIT_SELLER_SEND_GOODS') {
                //判断该笔订单是否在商户网站中已经做过处理
                //如果没有做过处理，根据订单号（out_trade_no）
                //在商户网站的订单系统中查到该笔订单的详细，、
                //并执行商户的业务程序
                //如果有做过处理，不执行商户的业务程序
            }
            else if($trade_status == 'TRADE_FINISHED') {
                //判断该笔订单是否在商户网站中已经做过处理
                //如果没有做过处理，根据订单号（out_trade_no）在商户网站的订单系统中查到该笔订单的详细，并执行商户的业务程序
                //如果有做过处理，不执行商户的业务程序
            }
            else {
                echo "trade_status=".$trade_status;
            }

            redirect('/profile/index/myorder');

            //——请根据您的业务逻辑来编写程序（以上代码仅作参考）——

            /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        }
        else {
            //验证失败
            //如要调试，请看alipay_notify.php页面的verifyReturn函数
            echo "验证失败";
        }
    }

    public function request_alipay(){

        $cfg = alipayconfig();

        //支付类型
        $payment_type = "1";
        //必填，不能修改
        //服务器异步通知页面路径
        $notify_url = base_url("pay/notify_back");
        //"http://www.xxx.com/trade_create_by_buyer-PHP-UTF-8/notify_url.php";
        //需http://格式的完整路径，不能加?id=123这类自定义参数
        //页面跳转同步通知页面路径
        $return_url = base_url("pay/post_back");
            //"http://www.xxx.com/trade_create_by_buyer-PHP-UTF-8/return_url.php";
        //需http://格式的完整路径，不能加?id=123这类自定义参数，不能写成http://localhost/
        //卖家支付宝帐户
        $seller_email = $cfg['seller'];

        //必填
        //商户订单号
        $out_trade_no = $_POST['WIDout_trade_no'];
        //商户网站订单系统中唯一订单号，必填
        //订单名称
        $subject = $_POST['WIDsubject'];
        //必填
        //付款金额
        $price = $_POST['WIDprice'];
        //必填
        //商品数量
        $quantity = "1";
        //必填，建议默认为1，不改变值，把一次交易看成是一次下订单而非购买一件商品
        //物流费用
        $logistics_fee = $_POST["WIDdeliver_fee"];
        //必填，即运费
        //物流类型
        $logistics_type = $_POST["WIDDeliver"];
        //必填，三个值可选：EXPRESS（快递）、POST（平邮）、EMS（EMS）
        //物流支付方式
        $logistics_payment = "BUYER_PAY";
        //必填，两个值可选：SELLER_PAY（卖家承担运费）、BUYER_PAY（买家承担运费）
        //订单描述
        $body = $_POST['WIDbody'];
        //商品展示地址
        $show_url = base_url('/porder/show/'.$out_trade_no);
        //需以http://开头的完整路径，如：http://www.xxx.com/myorder.html
        //收货人姓名
        $receive_name = $_POST['WIDreceive_name'];
        //如：张三
        //收货人地址
        $receive_address = $_POST['WIDreceive_address'];
        //如：XX省XXX市XXX区XXX路XXX小区XXX栋XXX单元XXX号
        //收货人邮编
        $receive_zip = $_POST['WIDreceive_zip'];
        //如：123456
        //收货人电话号码
        $receive_phone = $_POST['WIDreceive_phone'];
        //如：0571-88158090
        //收货人手机号码
        $receive_mobile = $_POST['WIDreceive_mobile'];
        //如：13312341234


        /************************************************************/

//构造要请求的参数数组，无需改动
        $parameter = array(
            "service" => "trade_create_by_buyer",
            "partner" => trim($cfg['partner']),
            "payment_type"	=> $payment_type,
            "notify_url"	=> $notify_url,
            "return_url"	=> $return_url,
            "seller_email"	=> $seller_email,
            "out_trade_no"	=> $out_trade_no,
            "subject"	=> $subject,
            "price"	=> $price,
            "quantity"	=> $quantity,
            "logistics_fee"	=> $logistics_fee,
            "logistics_type"	=> $logistics_type,
            "logistics_payment"	=> $logistics_payment,
            "body"	=> $body,
            "show_url"	=> $show_url,
            "receive_name"	=> $receive_name,
            "receive_address"	=> $receive_address,
            "receive_zip"	=> $receive_zip,
            "receive_phone"	=> $receive_phone,
            "receive_mobile"	=> $receive_mobile,
            "_input_charset"	=> trim(strtolower($cfg['input_charset']))
        );

        //建立请求
        $html_text = $this->alipaysubmit->buildRequestForm($parameter,"get", "确认");
        $data  = array(
            'form'=>$html_text
        );
        $this->load->view('apps/res-header');
        $this->load->view('pay/request-alipay',$data);
        $this->load->view('apps/res-footer');
    }
}