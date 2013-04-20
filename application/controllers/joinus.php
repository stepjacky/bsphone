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
        $this->load->library('create_ckeditor');
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


    /**
     * 新增
     */
    public function editNew($id=-1,$pk='id'){

        $this->load->view($this->dao->table()."/editNew");

    }


    public function show($id){
        $bean  = $this->dao->get($id);
        if(!$bean){
            $bean['id']=$id;
            $bean['content']="请添加内容";
        }
        $this->load->view($this->dao->table()."/show",$bean);


    }

    public function one($id){
        $bean  = $this->dao->get($id);

        $data = array(
            'bean'=>$bean,
            'id'=>$id
        );

        $ckcfg = array();
        $ckcfg["name"]  ="content";
        $ckcfg['height'] = "500";
        if($bean){
            $ckcfg["value"] = $bean["content"];
        }


        $data['editor'] = $this->create_ckeditor->createEditor( $ckcfg);
        $this->load->view('admin/res-head');
        $this->load->view('joinus/one',$data);
        $this->load->view('admin/footer');
    }


    public function saveUpdate($pk='id'){
        $data =  $this->_no_xsl_post();
        $this->dao->persiste($data,FALSE,$pk);
        $this->_end();
    }



}
