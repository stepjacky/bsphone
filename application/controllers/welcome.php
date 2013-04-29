<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends MY_Controller
{


    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {

        $data = array("flag" => "index");
        $this->__user_header($data);

        $this->load->model('Phone_model', 'pDao');
        $this->load->model('Spare_model', 'arDao');
        $this->load->model('Artitle_model', 'artDao');
        $this->load->model('Video_model', 'vcdDao');
        $this->load->model('Subject_model', 'sujDao');
        $this->load->model('Shoparea_model', 'shrDao');
        $this->load->model('Sharedinfo_model', 'sheDao');
        $this->load->model('Coagent_model','coaDao');
        $this->load->model('Trends_model', 'trdDao');





        $data['recphone'] = $this->pDao->find_new_recommend();

        $data['cmiphone'] = $this->pDao->find_coming();
        $data['recspare'] = $this->arDao->recommends();
        $data['comartitles'] = $this->trdDao->find_homed_by_tags('网站公告',8);;
        $data['pptartitles'] = $this->artDao->find_home_artitle();
        $data['rec_artitles'] = $this->artDao->find_index_by_tag('', 5);
        $data['rec_services'] = $this->trdDao->find_homed_by_tags('售后服务',5);

        $data['rec_videos'] = $this->vcdDao->find_index_by_tag('', 5);
        $data['rec_subjects'] = $this->trdDao->find_homed_by_tags('活动专题',5);

        $data['shopareas'] = $this->shrDao->find_for_index();

        $data['shareinfos'] = $this->sheDao->find_for_index();
        $data['coagents'] = $this->coaDao->gets(1,5);
        $data['sharecount']  = $this->shrDao->count_all();
        $this->load->view("index/index", $data);

        $this->load->view("apps/footer");
    }


    public function artitle()
    {
        $this->load->model('Tags_model', 'tagDao');
        $this->load->model('Comment_model', 'cmtDao');
        $this->load->model('Artitle_model', 'artDao');
        $data = array("flag" => "artitle");
        $data['tags'] = $this->tagDao->find_by_catalog('artitle');
        $beans = $this->artDao->gets(1, 10);
        foreach ($beans as &$bean) {
            $tags = explode(',', $bean['tags']);
            $bean['atags'] = $tags;
        }
        $data['beans'] = $beans;
        $comments = $this->cmtDao->most_for_artitle();
        $data['comments'] = $comments;
        $data['tidx'] = 0;

        $data['top4'] = $this->artDao->find_recommend();

        $this->__user_header($data);
        $this->load->view("index/artitle", $data);
        $this->load->view("apps/footer");
    }

    public function outskirts()
    {
        $data = array("flag" => "outskirts");

        $this->load->model('Sparetype_model', 'sprDao');
        $this->load->model('Spare_model', 'spareDao');
        $beans = $this->sprDao->find_by_sprtype();
        $typed = $this->spareDao->list_by_types();
        $mosts = $this->spareDao->most_views();
        $sparead = $this->spareDao->load_sparead2();
        $new10 = $this->spareDao->load_new8();
        $topad4 = $this->spareDao->load_ad4();

        $data['topad4'] = $topad4;
        $data['new10'] = $new10;
        $data['sparead'] = $sparead;
        $data['mosts'] = $mosts;
        $data['typed'] = $typed;
        $data['sprs'] = $beans;

        $this->__user_header($data);

        $this->load->view('apps/outskirts/header', $data);

        $this->load->view("index/outskirts", $data);

        $this->load->view('apps/outskirts/footer', $data);

        $this->load->view("apps/footer");
    }

    public function movies()
    {
        $data = array("flag" => "movies");


        $this->load->model('Tags_model', 'tagDao');
        $this->load->model('Comment_model', 'cmtDao');
        $this->load->model('Video_model', 'vdoDao');
        $data['tags'] = $this->tagDao->find_by_catalog('video');
        $beans = $this->vdoDao->gets(1, 10);
        $data['beans'] = $beans;
        $hots = $this->vdoDao->hot_video();
        $data['hots'] = $hots;
        $comments = $this->cmtDao->most_for_video();
        $data['comments'] = $comments;
        $data['tidx'] = 0;

        $top4 = $this->vdoDao->find_recommend();
        $data['top4'] = $top4;
        $this->__user_header($data);
        $this->load->view("index/movies", $data);
        $this->load->view("apps/footer");
    }

    public function service()
    {
        $data = array(
            "flag" => "service",
            "ctag" => "全部"
        );


        $this->load->model('Trends_model', 'artDao');

        $this->load->model('Servicecenter_model', 'servDao');

        $services = $this->servDao->find_all();

        $data['services'] = $services;

        $data['topmovs'] = $this->artDao->hotservice();

        $beans = $this->artDao->list_by_tag('售后服务',0, 10);

        $data['beans'] = $beans;

        $this->fireLog($data);

        $this->__user_header($data);

        $this->load->view("index/service", $data);

        $this->load->view("apps/footer");
    }

    public function vip()
    {
        $data = array("flag" => "vip");
        $this->load->model('Comment_model', 'cmtDao');

        $this->load->model('Trends_model', 'trdDao');

        $data['trends'] = $this->trdDao->list_vip();
        $data['most_comments'] = $this->cmtDao->most_for_vip();

        $data['toptrends'] = $this->trdDao->load_vip_trends();
        $this->__user_header($data);

        $this->load->view("index/vip", $data);

        $this->load->view("apps/footer");
    }


    public function aboutus($page = 'index', $type = 's')
    {

        $menu = $this->__aboutus_menu($page);
        $tag = $menu[$page]['title'];
        $data = array(
            'flag' => 'index',
            'tag' => $tag,
            'menu' => $menu
        );

        $this->load->model('Trends_model', 'trdDao');
       // $this->fireLog($data);
        if ($type == 'd') {




            $beans = $this->trdDao->find_by_tags($tag);


            $data['beans'] = $beans;
        }else{
            $beans = $this->trdDao->find_by_tags($tag,1);
            $data['bean'] = $this->trdDao->result(count($beans)>0?$beans[0]:array(),'trends');
        }


        $this->__user_header($data);

        $this->load->view("index/aboutus/" . $page, $data);

        $this->load->view("apps/footer");
    }


    public function servicecenter($id = '-1', $type = 's')
    {
        $this->load->model('Shop_model', 'shoDao');
        $this->load->model('Servicecenter_model', 'sceDao');
        $menu = $this->shoDao->find_for_nav();
        $servs = $this->sceDao->find_all();

        $data = array(
            'menu' => $menu,
            'smenu' => $servs,
            'flag' => 'service'
        );

        if ($id != '-1') {
            if ($type == 's') {
                $bean = $this->shoDao->get($id);
                $data['bean'] = $bean;
                //$this->fireLog($bean);
            } else {
                $bean = $this->sceDao->get($id);
                $data['bean'] = $bean;
            }
        } else {
            $bean = $this->shoDao->emptyObject();
            $data['bean'] = $bean;
        }



        $this->__user_header($data);

        $this->load->view("index/servicecenter", $data);

        $this->load->view("apps/footer");
    }


    public function joinus(){
        $this->load->model('Shop_model', 'shoDao');
        $this->load->model('Artitle_model','artDao');
        $trends = $this->artDao->find_by_tag('加盟动态',7);
        $beans = $this->shoDao->gets(1,10);
        $data= array(
            'flag'=>'index',
            'jflag'=>'joinus',
            'beans'=>$beans,
            'trends'=>$trends
        );
        ///$this->fireLog($data);

        $this->__user_header($data);

        $this->load->view('joinus/join-header');

        $this->load->view("joinus/index", $data);

        $this->load->view('joinus/join-footer');



        $this->load->view("apps/footer");
    }



    public function openlogin($url='/')
    {



        $data =  $this->_before_open_login();

        $this->__user_header($data);

        $this->load->view("index/openlogin");

        $this->load->view("apps/footer");
    }


    public function forgetpass()
    {
        $data = array();
        $this->__user_header($data);
        $this->load->view('index/forgetpass');
        $this->load->view('apps/footer');
    }

    public function register()
    {
        $this->load->library('sina');
        $state=getGUID();
        $data = array(
            "flag" => "aboutus",
            'sina' =>$this->sina->sinaAuthUrl($state),
            'info' => ''
        );
        $this->nsession->set_userdata('lstate',$state);
        $this->__user_header($data);

        $this->load->view("index/register");

        $this->load->view("apps/footer");
    }

    public function logout()
    {
        $this->nsession->unset_userdata('user');
        $this->nsession->sess_destroy();
        delete_cookie('PHPSESSID');
        redirect();
    }




}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */