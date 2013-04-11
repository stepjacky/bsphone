
<?php
/**
 * Created by JetBrains PhpStorm.
 * User: 饭
 * Date: 12-11-16
 * Time: 下午9:47
 * To change this template use File | Settings | File Templates.
 */
class Test extends MY_Controller
{

    public  function __construct(){
        parent::__construct();
    }

    public function index(){

        $this->load->library('create_ckeditor');
        $data['myeditor'] = $this->create_ckeditor->createEditor();
        $this->__user_header($data);
        $this->load->view('test',$data);
        $this->load->view("apps/footer");
    }





    public function typeahead(){
        $resp = array();
        for($i=0;$i<10;$i++){
            $resp[$i]['name'] = "name".$i;

            $resp[$i]['value']="samvval".$i;
        }

        $resp[10]['name']='name10';
        $resp[10]['value']='value10';

        echo json_encode($resp);
    }

}
