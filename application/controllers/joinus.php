<?php
/**
 * Created by JetBrains PhpStorm.
 * User: 饭
 * Date: 13-3-2
 * Time: 下午10:50
 * To change this template use File | Settings | File Templates.
 */
class Joinus extends Media_Controller {

    public function __construct(){
        parent::__construct("Joinus_model");
        $this->load->model('Shop_model', 'shoDao');
        $this->load->model('Trends_model','trdDao');
    }


    public  function index($page='index'){



        $jbean = $this->dao->get($page);
        $trends = $this->trdDao->find_by_tags('加盟动态',20);
        $beans = $this->shoDao->gets(1,10);
        $data= array(
            'flag'=>'index',
            'jflag'=>$page,
            'beans'=>$beans,
            'trends'=>$trends,
            'bean'=>empty($trends)?array():$trends[0],
            'jbean'=>$jbean
        );

        $this->fireLog($data);
        $this->__user_header($data);

        $this->load->view('joinus/join-header',$data);

        $this->load->view("joinus/".$page, $data);

        $this->load->view('joinus/join-footer');

        $this->load->view("apps/footer");

    }

    public function saveUpdate($pk='id'){
        $data =  $this->_no_xsl_post();
        $this->dao->persiste($data,$pk);
        $this->_end();
    }



}
