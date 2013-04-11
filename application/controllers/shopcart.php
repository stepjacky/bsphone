<?php
/**
 * Created by JetBrains PhpStorm.
 * User: 饭
 * Date: 12-12-6
 * Time: 下午1:44
 * To change this template use File | Settings | File Templates.
 */
class Shopcart extends MY_Controller
{

    private $logined = FALSE;

    public function Shopcart()
    {
        parent::__construct();
        $this->logined = $this->islogin();
        if (!$this->logined) return;
        $this->load->library('cart');
        $this->load->model('Phone_model', 'pdao');
        $this->load->model('Shipaddress_model', 'sadao');
    }

    public function index()
    {
        $data = array("flag" => "index");
        $this->__user_header($data);

        $this->load->view("shopcart/show", $data);

        $this->load->view("apps/footer");
    }

    public function remove($id)
    {
        $data = array(
            'rowid' => $id,
            'qty' => 0
        );

        $this->cart->update($data);
        $this->index();
    }

    //build order and order details
    public function ensurecart()
    {
        $itemnum = count($this->cart->contents());
        if ($itemnum == 0) {
            $refer = $this->agent->referrer();
            $refer = $refer == '' ? '/' : $refer;
            redirect($refer);
            return;
        }




        $user = $this->nsession->userdata('user');
        if (!$user) {
            redirect('/welcome/openlogin');
            return;
        }


        $sd = $this->sadao->find_by_owner($user['id'],true);

        if(count($sd)==0){
            redirect('/profile/basic?info=nodefaultaddr');
            return;
        }
        //$this->fireLog($sd);
        $token = 'token_'.getGUID(false);
        $this->nsession->set_userdata('token',$token);
        $data = array(
            "flag" => "index",
            'address'=>$sd?$sd[0]:FALSE,
            'token'=>$token

        );
        $this->__user_header($data);
        $this->load->view("shopcart/ensure", $data);
        $this->load->view("index/common/phonefooter");
        $this->load->view("apps/footer");

    }

    public function add()
    {

        $id = $this->_post('id');
        $pid = $this->_post('prcid');
        $image = $this->_post('image');
        if (!$id || !$pid || !$image) {
            $this->__erroritem();
            return;
        }
        $cart_id = $id . '_' . $pid;
        $hason = false;
        $numofitem = 1;
        $rowid = null;
        foreach ($this->cart->contents() as $items) {
            if ($items['id'] == $cart_id) {

                $hason = true;
                $rowid = $items['rowid'];
                $numofitem = $items['qty'];
                break;
            }
        }

        if (!$hason) {

            $data = $this->pdao->find_cart_info($id, $pid);

            $data['id'] = $cart_id;
            $data["qty"] = 1;
            $data["options"] = array('image' => $image,'bid'=>$id);


            $this->cart->insert($data);
        } else {
            $data = array(
                'rowid' => $rowid,
                'qty' => $numofitem + 1
            );
            $this->cart->update($data);
        }
        //$this->fireLog($this->cart->contents());
        $this->index();
    }

    public function changeqty($rowid, $qty)
    {
        $data = array(
            'rowid' => $rowid,
            'qty' => $qty
        );

        $this->cart->update($data);
        $this->index();
    }


    function __erroritem()
    {
        $data = array("flag" => "index");
        $this->__user_header($data);
        $data['message'] = "购物车参数不完整";
        $this->load->view("shopcart/erroritem", $data);

        $this->load->view("apps/footer");
    }

}
