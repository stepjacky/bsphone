<?php
/**
 * Created by JetBrains PhpStorm.
 * User: 饭
 * Date: 12-12-5
 * Time: 下午11:01
 * To change this template use File | Settings | File Templates.
 */
class Settings extends MY_Controller {

    public  function __construct(){
       parent::__construct();
    }

    public function one($setting){
      $this->load->view("settings/".$setting);
    }
}
