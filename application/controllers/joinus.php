<?php
/**
 * Created by JetBrains PhpStorm.
 * User: 饭
 * Date: 13-3-2
 * Time: 下午10:50
 * To change this template use File | Settings | File Templates.
 */
class Joinus extends Media_Controller {

    public  function index($page='index'){

        $this->load->model('Shop_model', 'shoDao');
        $this->load->model('Trends_model','trdDao');
        $trends = $this->trdDao->find_by_tags('加盟动态',20);
        $beans = $this->shoDao->gets(1,10);
        $data= array(
            'flag'=>'joinus',
            'beans'=>$beans,
            'trends'=>$trends,
            'bean'=>empty($trends)?array():$trends[0]


        );

        $this->fireLog($data);
        $this->__user_header($data);

        $this->load->view('apps/joinus/join-header');

        $this->load->view("apps/joinus/".$page, $data);

        $this->load->view('apps/joinus/join-footer');

        $this->load->view("apps/footer");

    }

}
