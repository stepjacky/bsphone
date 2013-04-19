<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
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
 * FileName application/controllers/porder.php
 * Created by CIscaffolding.
 * User: qujiakang
 * QQ:myqq_postor@qq.com
 * Email: qujiakang@gmail.com  
 * Date: Wed Nov 28 23:40:03 CST 2012
 *    
 */

class Porder extends MY_Controller
{

    public function __construct()
    {
        parent::__construct("Porder_model");
        $this->load->model('Shipaddress_model', 'sadao');
        $this->load->library('cart');
    }

    public function index()
    {
        if (!$this->islogin()) return;
        $orderid=  getGUID(false);
        $token  = $this->_post('token');
        $stoken = $this->nsession->userdata('token');
        if(!$stoken || $token!=$stoken){
            redirect();
            return;
        }
        $this->nsession->unset_userdata('token');

        $deliver = $this->_post('deliver');
        if (!$deliver) $this->goback('没有选择快递方式');
        $dev2fee = explode('@', $deliver);
        $deliver = $dev2fee[0];
        $defee = $dev2fee[1];
        $remark = $this->_post('remark');

        $user = $this->nsession->userdata('user');
        if (!$user) {
            redirect('/welcome/openlogin');
            return;
        }

        //get default address
        $address = $this->sadao->find_by_owner($user['id'], true);
        $this->fireLog($address);
        $address = $address[0];

        /**
        id varchar(50) NOT NULL编号
        pdtid varchar(50) NULL商品编号
        pdtname varchar(45) NULL商品名称
        pdtprice varchar(45) NULL商品价格
        pdtcount int(11) NULL商品总数
        porder_id


         */

        $details =  array();
        $total_fee = 0;
        $names = array();
        foreach ($this->cart->contents() as $items){
            $ditem = array(
                'id'=>getGUID(),
                'pdtid'=>$items['options']['bid'],
                'pdtname'=>$items['name'],
                'pdtprice'=>$items['price'],
                'pdtcount'=>$items['qty'],
                'porder_id'=>$orderid
            );
            $total_fee+=$items['subtotal'];
            array_push($details,$ditem);
            array_push($names,$items['name']);
        }



        /*
                `id` varchar(50) NOT NULL COMMENT '编号',
          `consignee` varchar(45) DEFAULT NULL COMMENT '收件人,text',
          `phone` varchar(45) DEFAULT NULL COMMENT '收件人电话,text',
          `amount` float DEFAULT NULL COMMENT '总额,text',
          `deyfee` float DEFAULT NULL COMMENT '配送费用,text',
          `pdtamount` float DEFAULT NULL COMMENT '商品总额,text',
          `firedate` timestamp NULL DEFAULT CURRENT_TIMESTAMP COMMENT '订货时间,text,datepicker',
          `email` varchar(45) DEFAULT NULL COMMENT '收货人E-MAIL,text',
          `postcode` varchar(45) DEFAULT NULL COMMENT '邮政编码,text',
          `deymodel` varchar(45) DEFAULT NULL COMMENT '送货方式,text',
          `usedfonds` float DEFAULT NULL COMMENT '已用购物资金,text',
          `myuser_username` varchar(200) DEFAULT NULL COMMENT '订单用户,text',
          `remark` varchar(1000) DEFAULT NULL COMMENT '备注,textarea,input-xlarge',
        */

        $order = array(
            'id' => $orderid,
            'consignee' => $address['username'],
            'phone' => $address['phone'],
            'deyfee' => $defee,
            //商品总额
            'name'=>implode(' ',$names),
            'pdtamount' => $this->cart->total(),
            'address'=>$address['address'],
            'email' => $address['email'],
            'postcode' => $address['postcode'],
            'deymodel' => $deliver,
            'usedfonds' => 0,
            'myuser_username' => $user['id'],
            'firedate'=>date("Y-m-d H:i:s"),
            'remark' => $remark
        );



        $rst =  $this->dao->add_order($order,$details);
        $deliver_type = array(
            'EXPRESS'=>'顺丰速递',
            'POST'=>'平邮',
            'EMS'=>'EMS'

        );
        $data = array(
            'flag'=>'index',
            'result'=>$rst,
            'porder'=>$order,
            'pdetails'=>$details,
            'total_fee'=>$total_fee,
            'deliver'=>$deliver_type[$deliver],
            'porder_total_fee'=>$total_fee,
            'porder_name'=>implode(',',$names)
        );

        if($rst){
            $this->cart->destroy();
        }
        $this->__user_header($data);

        $this->load->view("porder/index", $data);

        $this->load->view("index/common/phonefooter");
        $this->load->view('apps/footer');
    }

    /**
     * 新增编辑
     */
    public function editNew($id = -1)
    {

        $data = array();

        if ($id != -1) {
            $data = $this->dao->get($id);

        }

        $this->load->view("admin/res-head");
        $this->load->view($this->dao->table() . "/editNew", $data);
        $this->load->view("admin/footer");
    }


}   