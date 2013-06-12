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
 * FileName application/controllers/product.php
 * Created by CIscaffolding.
 * User: qujiakang
 * QQ:myqq_postor@qq.com
 * Email: qujiakang@gmail.com  
 * Date: Wed Nov 28 23:40:02 CST 2012
 *    
 */

class Phone extends Media_Controller
{

    public function __construct()
    {
        parent::__construct("Phone_model");
        $this->load->library('create_ckeditor');
        $this->load->model("Brand_model", "brandDao");
        $this->load->model("Phoneos_model", "osDao");
        $this->load->model("Tags_model","tagdao");

    }

    public function index()
    {
        $data = array();

        $this->load->view("apps/header");
        $this->load->view("phone/index", $data);
        $this->load->view("apps/footer");
    }

    /**
     * 新增编辑
     */
    public function editNew($id = -1)
    {

        $data = array();

        $ckcfg = array();
        $ckcfg["name"] = "details";

        if ($id != -1) {
            $data = $this->dao->get($id);
            $ckcfg["value"] = $data["details"];

        }

        $data['my_editor'] = $this->create_ckeditor->createEditor($ckcfg);
        $ckcfg = array();
        $ckcfg["name"] = "remark";
        $ckcfg["value"] = $data["remark"];
        $data['remark_editor'] = $this->create_ckeditor->createEditor($ckcfg);

        $data['brands'] = $this->brandDao->find_all();
        $data['oses'] = $this->osDao->find_all();
        $this->load->view("admin/res-head");
        $this->load->view($this->dao->table() . "/editNew", $data);
        $this->load->view("admin/footer");
    }

    public function hotphone()
    {
        $data = array();

        $beans = $this->dao->find_by_status(1);

        $data['beans'] = $beans;
        $this->__user_header($data);
        $this->load->view("phone/hotphone", $data);

        $this->load->view("index/common/phonefooter");
        $this->load->view("phone/compare-util");
        $this->load->view("apps/footer");
    }

    public function search($kword=FALSE) {
        $data = array();
        $keyword = !$kword?$this->__xsl_post('keyword'):urldecode($kword);
         !empty($keyword) OR redirect('/');
        $where = "p.name like '%".$keyword."%' or pp.name like '%".$keyword."%'";
        $beans = $this->dao->find_where($where);
        $data['beans'] = $beans;
        $this->__user_header($data);
        $this->load->view("phone/search-result", $data);
        $this->load->view("index/common/phonefooter");
        $this->load->view("apps/footer");
    }



    public function query()
    {


        $brands = $this->brandDao->find_all();
        $oss    = $this->osDao->find_all();
        $taglist  = $this->tagdao->find_by_catalog("phone");
        $data = array(
            "flag" => "product",
            "brands"=>$brands,
            'oss'=>$oss,
            'taglist'=>$taglist
        );



        $parys = $this->__qstr(array("brand","price", "os", "screen", "carame", "tag"));
        $data['types'] = $this->_urlstr($parys);

        $parys = $this->__qstr(array("price", "os", "screen", "carame", "tag"));
        $data['brand'] = $this->_urlstr($parys);

        $parys = $this->__qstr(array("brand", "price", "screen", "carame", "tag"));
        $data['os'] = $this->_urlstr($parys);

        $parys = $this->__qstr(array("brand", "price", "os", "carame", "tag"));
        $data['screen'] = $this->_urlstr($parys);

        $parys = $this->__qstr(array("brand", "price", "screen", "os", "tag"));
        $data['carame'] = $this->_urlstr($parys);

        $parys = $this->__qstr(array("brand", "price", "screen", "carame", "os"));
        $data['tag'] = $this->_urlstr($parys);

        $parys = $this->__qstr(array("brand", "screen", "carame", "tag", "os"));
        $data['price'] = $this->_urlstr($parys);


        $parys = $this->__qstr(array("qidxa","qidxb", "qidxc", "qidxd", "qidxe", "qidxf"));
        $data['qidx'] = $this->_urlstr($parys);

        $parys = $this->__qstr(array("qidxb", "qidxc", "qidxd", "qidxe", "qidxf"));
        $data['qidxa'] = $this->_urlstr($parys);

        $parys = $this->__qstr(array("qidxa", "qidxc", "qidxd", "qidxe", "qidxf"));
        $data['qidxb'] = $this->_urlstr($parys);

        $parys = $this->__qstr(array("qidxa", "qidxb", "qidxd", "qidxe", "qidxf"));
        $data['qidxc'] = $this->_urlstr($parys);

        $parys = $this->__qstr(array("qidxa", "qidxb", "qidxc", "qidxe", "qidxf"));
        $data['qidxd'] = $this->_urlstr($parys);

        $parys = $this->__qstr(array("qidxa", "qidxb", "qidxc", "qidxd", "qidxf"));
        $data['qidxe'] = $this->_urlstr($parys);


        $parys = $this->__qstr(array("qidxa", "qidxb", "qidxc", "qidxd", "qidxe"));
        $data['qidxf'] = $this->_urlstr($parys);

        $parys = $this->__qstr(array("qidxa", "qidxb", "qidxc", "qidxd", "qidxe", "qidxf"));
        $data['indexdb'] = $parys;

        $cnds = $this->__qstr(array("brand", "screen", "carame", "tag", "os", "price"));


        $sort_type = $this->_get('sort_type');

        $sort_type = $sort_type?$sort_type:1;


        $sort_type = $sort_type*(-1);

        $data['sort_type'] = $sort_type;

        $sort = $this->_get("sort");

        $sort_str = FALSE;

        if($sort){
            $this->fireLog($sort);
           $sort_str = sprintf(" order by %s.%s %s " ,$sort=='price'?'pp':'p', $sort,$sort_type>0?"asc":"desc");
        }


        $pdts = $this->dao->find($cnds,$sort_str);

        $data['beans'] = $pdts;

        $tbrand=  $this->_get('brand');


        $wbeans = $this->dao->find_by_status(1,$tbrand);

        $data['wbeans'] = $wbeans;

        $ebeans = $this->dao->find_by_status(-1,$tbrand);

        $data['ebeans'] = $ebeans;

        $data['keywords']='BE数码通信手机选购中心提供品牌手机最新产品信息，包括手机报价，手机图片，手机产品参数对比。为您在选购手机时提供最全面最有价值的参考。';
        $data['description']='';
        $data['title']='手机选购中心-BE数码通信';
        $this->fireLog($data);
        $this->__user_header($data);
        $this->load->view("index/product", $data);

        $this->load->view("index/common/phonefooter");
        $this->load->view("phone/compare-util");
        $this->load->view("apps/footer");

    }


    public function one($id)
    {
        if (!isset($id)) {
            show_404();
            return;
        }

        $data = array();
        $bean = $this->dao->find_by_id($id);
        $data['bean'] = $bean;
        $data['flag'] = 'product';

        $data['keywords']=  str_replace('@',$bean['name'],'@报价,@参数,@图片,@评测,@视频,@优缺点');
        $data['description']=str_replace('@',$bean['name'],'BE数码通信为您提供@的手机报价，@手机图片，@手机评测，@评测视频，@优缺点。为您在购买@手机时提供最全面最有价值的参考。');
        $data['title']= str_replace('@',$bean['name'],'@报价_视频_参数_图片_新闻-BE数码通信');
        $this->__user_header($data);
        $this->load->view("phone/one", $data);
        $this->load->view("apps/footer");

    }

    public function price($phone)
    {
        $data = array(
            "phone" => $phone
        );
        $prices = $this->dao->find_phone_price($phone);
        $data['prices'] = $prices;
        $this->load->view("admin/res-head");
        $this->load->view("phone/price", $data);
        $this->load->view("admin/footer");

    }

    public function sortedprice(){
        $pks   = $this->_post('bizPk');
        $data  = array();
        for($i=0;$i<count($pks);$i++){
            array_push($data,array(
                'id'    =>$pks[$i],
                'sort'  =>$i
            ));
        }
        $this->dao->sort_price($data);
    }

    public function save_price($phone)
    {
        $names = $this->_post("name");
        $prices = $this->_post("price");
        $sorts = $this->_post('sort');
        $data = array();
        for ($i = 0; $i < count($names); $i++) {
            $data[$i] = array(
                "id" => getGUID(),
                "name" => $names[$i],
                "price" => $prices[$i],
                "sort" =>$sorts[$i],
                "phone_id" => $phone
            );
        }

        $this->dao->remove_phone_price($phone);
        $this->dao->save_price($data);
    }


    public function ztree()
    {

        $id = $this->_post("id");
        //$this->fireLog($id);
        $data = array();
        if ($id == "root") {
            $data = $this->dao->find_brand();
        } else {
            $data = $this->dao->find_by_brand($id);
        }

        //$this->fireLog($data);
        echo  json_encode($data);


    }

    public function main_artitle($id)
    {
        $data = array();

        $ckcfg = array();
        $ckcfg["name"] = "content";
        $ckcfg['height'] = '400';

        if (isset($id) && $id != '') {

            $phone = $this->dao->get($id);

            if (isset($phone['main_artitle']) && $phone['main_artitle'] != '') {
                $this->db->select("name,summary,content");
                $this->db->where('id', $phone['main_artitle']);
                $query = $this->db->get("artitle");
                $artitle = $query->first_row('array');
                $ckcfg["value"] = $artitle['content'];
                $data['main_artitle'] = $phone['main_artitle'];
                $data['mname'] = $artitle['name'];
                $data['msummary']=$artitle['summary'];
                $this->fireLog($ckcfg);
            } else {
                $data['mname'] = '';
                $data['msummary']='';
                $ckcfg["value"] = '请输入文章内容';
                $data['main_artitle']='';
            }
        } else {
            $ckcfg["value"] = '请输入文章内容';
            $data['main_artitle']='';
        }


        $data['my_editor'] = $this->create_ckeditor->createEditor($ckcfg);
        $data['phone'] = $id;
        $this->load->view("admin/res-head");
        $this->load->view($this->dao->table() . "/edit-main-artitle", $data);
        $this->load->view("admin/footer");
    }

    function save_main_artitle($id=null,$aid=null){
        if(!$this->__invalidparam($id))return;
        $id= urldecode($id);
        $aid  = urldecode($aid);
        $data = $this->_xsl_post();

        if($this->__invalidparam($aid)){

           $udata = array(
               'name'=>$data['name'],
               'summary'=>$data['summary'],
               'content' => $data['content']
           );

            $str = $this->db->update_string('artitle',$udata,"id='$aid'");
            $this->fireLog($str);
            $this->db->where("id",$aid);
            $this->db->update('artitle', $udata);
       }else{

            $main_artitle = getGUID();
            $udata = array(
                'id'=>$main_artitle,
                'content' => $data['content'],
                'name'=>$data['name'],
                'summary'=>$data['summary']
            );

            $this->db->insert('artitle', $udata);

            $udata = array(
                'main_artitle'=>$main_artitle
            );

            $this->db->where("id",$id);
            $this->db->update($this->dao->table(),$udata);
       }
    }


    public function find_by_brand($brand,$page=1){
        $data = array();
        $bean = $this->dao->find_by_brands($brand,$page);
        $data['bean'] = $bean;

        $this->load->view('phone/selector-list',$data);


    }


    public function phone_selector(){
        $data = array();
        $brands = $this->dao->find_brand();
        $data['brands'] = $brands;
        $this->load->view('admin/res-head');
        $this->load->view('phone/selector',$data);

    }

    public function save_recommend(){
        $phones = $this->_post('phones');
        if(!$this->__invalidparam($phones))return;
        if(strpos($phones,','))
        $phones = explode(',',$phones);
        else
            $phones = array($phones);
        ///$this->fireLog($phones);
        $this->dao->save_new_recommend($phones);
    }

    public function  load_new_recommend(){

        $beans =  $this->dao->find_new_recommend();

        $data = array(
            'beans'=>$beans,
            'ptype' =>'recommendphone'

        );

        $this->load->view('phone/feture-phone-list',$data);

    }

    public function remove_feture($table,$id){
        $this->dao->remove_feture($table,$id);
    }


    public function save_coming(){
        $phones = $this->_post('phones');
        if(!$this->__invalidparam($phones))return;
        if(strpos($phones,','))
            $phones = explode(',',$phones);
        else
            $phones = array($phones);
        $this->dao->save_coming($phones);
    }
    public function load_coming(){

        $beans =  $this->dao->find_coming();

        $data = array(
            'beans'=>$beans,
            'ptype' =>'comingphone'
        );

        $this->load->view('phone/feture-phone-list',$data);
    }

    public function modify_status($id,$s=0){
        $this->dao->modify_status($id,$s);
    }


    public function lists($page=1,$rows=10){

        $cond =  $this->__xsl_get();
        unset($cond['_']);
        if(!$cond) $cond = array();
        $ccond = $this->cache->file->get('pagecond');
        $cond = array_merge($ccond,$cond);
        $this->cache->file->save('pagecond',$cond,60);
        $this->fireLog($cond);
        if(!$rows)$rows=10;
        $brands   = $this->brandDao->find_all();
        $result   = $this->dao->gets($page,$rows,$sorts=array("firedate"=>"desc"),$cond);
        $pagelink = $this->dao->page_link($page,$rows,$cond);

        $data['datasource'] = $result;
        $data['brands'] = $brands;
        $data['pagelink']=$pagelink;
        $this->load->view($this->dao->table()."/list",$data);
    }


    public function lists_status($s=0){
        $this->cache->save('pstatus', $s,3600);
        $brand = $this->cache->get('pbrand');
        $brands  = $this->brandDao->find_all();
        $this->db->where("pstatus",$s);
        if($brand){
            $this->db->where("brand",$brand);
        }
        $query = $this->db->get($this->dao->table());
        $beans = $query->result_array();
        $data['datasource'] = $beans;
        $data['brands'] = $brands;
        $data['pagelink']="";
        $this->fireLog($beans);
        $this->load->view($this->dao->table()."/list",$data);
    }


    public function compares($ids){
        $beans  = $this->dao->compares($ids);
        $this->fireLog($beans);
        $data['beans'] = $beans;
        $data['flag'] = 'product';

        $data['keywords']=  str_replace('@','数码','@报价,@参数,@图片,@评测,@视频,@优缺点');
        $data['description']=str_replace('@','数码','BE数码通信为您提供@的手机报价，@手机图片，@手机评测，@评测视频，@优缺点。为您在购买@手机时提供最全面最有价值的参考。');
        $data['title']= str_replace('@','各种数码产品','@报价_视频_参数_图片_新闻-BE数码通信');
        $this->__user_header($data);
        $this->load->view("phone/compare", $data);
        $this->load->view("apps/footer");
    }




    function __qstr($pnames)
    {
        $pary = array();
        foreach ($pnames as $p) {
            $val = $this->_get($p);
            if (!$val) continue;
            $pary[$p] = $val;
        }

        return $pary;

    }


    function _urlstr($pary)
    {
        $url = http_build_query($pary);
        return ($url == null || $url == "") ? "" : "&" . $url;
    }




}   