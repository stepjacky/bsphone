<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
 * FileName application/models/product.php
 * Created by CIscaffolding.
 * User: qujiakang
 * QQ:myqq_postor@qq.com
 * Email: qujiakang@gmail.com  
 * Date: Wed Nov 28 23:40:02 CST 2012
 *    
 */

class Phone_model extends Media_Model {
     
    public  function __construct(){
        parent::__construct("Phone_model");
        $this->load->model("Sharedinfo_model",'shrdao');
    }

    public function find($cnds = array(),$sort=array()){
        $whs = array();
        if(!is_array($cnds))return $whs;
        //$this->firelog($cnds);
        while($key = key($cnds)){
            $value = $cnds[$key];
            if($value=="all"){
                next($cnds);
                continue;
            }
            if("brand"==$key || "os"==$key){
                array_push($whs,$key."='".$value."'");

            }
            if("price"==$key || "screen"==$key || "carame"==$key){
                $d = substr($value,-1,1);

                if("`"==$d){
                    $val=substr($value,0,strlen($value)-1);
                    array_push($whs,$key.">".$val);
                }else if("-"==$d){
                    $val=substr($value,0,strlen($value)-1);
                    array_push($whs,$key."<".$val);

                }else{

                    $ps = explode("-",$value);
                    array_push($whs,$key.">".$ps[0]." and ".$key."<".$ps[1]);

                }
            }
            if("tag"==$key){
                array_push($whs,$key." like '%".$value."%'");

            }


            next($cnds);
            continue;

        }

        array_push($whs,'pstatus=0');
        $qstr =  implode(" and ",$whs);

        return $this->find_where($qstr,$sort);

    }

    public function find_by_id($id){
        if(!isset($id)){
            show_error("手机名称有误",404,"产品没找到");
            return;
        }

        //更新浏览量
        $SQL='update phone set moods=moods+1 where id=?';
        $this->db->query($SQL,array($id));

        $this->db->where('id', $id);
        $query = $this->db->get($this->table());
        $phone = $query->first_row('array');

        if(count($phone)==0){
            show_error("手机名称有误",404,"产品没找到");
            return;
        }

        $name = $phone['name'];

        $this->db->like('name', $name);
        $this->db->from('video');
        $vcount = $this->db->count_all_results();


        $this->db->like('name', $name);
        $query = $this->db->get("video",2,0);
        $videos = $query->result_array();

        $phone["videos"] = $videos;
        $phone["vcount"] = $vcount;

        $phone['prices'] = $this->find_phone_price($phone['id']);

        $SQL="select
              c.id cid
              ,c.firedate firedate
              ,mu.name nick
              ,c.guest cuser
              ,c.content ccnt
              ,mu.avatar uatar
              from comment c
              join myuser mu on c.guest=mu.id
              where c.phone_id='".$id."'
              order by c.firedate desc
              ";
        $query    =  $this->db->query($SQL);
        $comments =  $query->result_array();
        $phone['comments']= $comments;


        $SQL="select
              c.id cid
              ,c.firedate firedate
              ,c.guest cuser
              ,mu.name nick
              ,c.content ccnt
              ,mu.avatar uatar
              from comment c
              join myuser mu on c.guest=mu.id
              where c.phone_id='".$id."'
              and length(c.content)>=60
              order by c.firedate desc
              ";

        $query    =  $this->db->query($SQL);
        $mostcmts =  $query->result_array();
        $phone['mostcmts']=$mostcmts;

        $this->db->like('name', $name);
        $this->db->from('artitle');
        $atcount = $this->db->count_all_results();
        $phone['atcount'] = $atcount;

        $this->db->select('id, name, minipic');
        $this->db->like("name",$name);
        $this->db->order_by("firedate", "desc");
        $this->db->limit(8,0);
        $query = $this->db->get("video");
        $videos8 = $query->result_array();
        $phone['videos8'] = $videos8;



        $this->db->select('id,name,minipic');
        $this->db->like("name",$name);
        $this->db->order_by("firedate", "desc");
        $this->db->limit(8,0);
        $query = $this->db->get("artitle");
        $artitles8 = $query->result_array();
        $phone['artitles8'] = $artitles8;

        $this->db->select("id,name,minipic,summary");
        $this->db->where("id",$phone['main_artitle']);
        $query = $this->db->get("artitle");
        $mainartitle=$query->first_row("array");
        $phone['mainartitle']= $this->result($mainartitle,'artitle');



        $shares = $this->shrdao->find_by_phone($phone['id']);
        $this->firelog($shares);
        $phone['shares'] = $shares;
        $phone['shareslen'] = count($shares);

        $this->db->where('ptype', "plist");
        $this->db->where('phone_id', $phone['id']);
        $query = $this->db->get("picture");
        $piclist = $query->result_array();
        $phone['piclist']= $piclist;


        $this->db->select("path");
        $this->db->where('ptype','largepic');
        $this->db->where('phone_id',$phone['id']);
        $query = $this->db->get("picture");
        $pic = $query->first_row('array');
        $phone['largepic'] = !empty($pic)?$pic['path']:'';


        $this->db->select("path");
        $this->db->where('ptype','minipic');
        $this->db->where('phone_id',$phone['id']);
        $query = $this->db->get("picture");
        $pic = $query->first_row('array');
        $phone['minipic'] =  !empty($pic)?$pic['path']:'';

        ///$this->firelog($phone);
        return $phone;
    }


    /**
     * @param int $s
     * 1        即将上市
     * 0        在售
     * -1       退市
     *
     * */
    public function find_by_status($s=1){


        $this->db->select("t.id id ,t.name name ,p.path minipic");
        $this->db->join('picture p', "p.phone_id =t.id and p.ptype='minipic'");
        $this->db->where('t.pstatus',$s);
        $this->db->order_by('t.firedate','desc');
        $query = $this->db->get($this->table()." t ");
        return $query->result_array();
    }



    public function find_brand(){
        $this->db->select("id,name");
        $query = $this->db->get("brand");
        $brands=  $query->result_array();
        foreach($brands as &$brd)$brd['isParent']=true;
        return $brands;
    }

    public function find_new_recommend(){
        $SQL="select p.id id,p.name name,pic.path minipic,min(pp.price) price
              from recommendphone rp
              join phone p on p.id=rp.phone_id
              join phoneprice pp on pp.phone_id=rp.phone_id
              join picture pic on pic.phone_id=rp.phone_id and pic.ptype='minipic'
              GROUP BY pp.phone_id
              order by p.firedate desc
              limit 0,12
              ";
        $beans = $this->query($SQL);

        return $beans;
    }

    public function remove_feture($table,$phoneId){
        $this->db->delete($table,array('phone_id'=>$phoneId));
    }
    public function save_new_recommend($phones){

        //$this->db->empty_table('recommendphone');

        $data = array();
        $i=0;
        foreach($phones as $phone){
            $data[$i++]=array(
                'phone_id'=>$phone
            );
        }

        $this->firelog($data);

        $this->db->insert_batch('recommendphone',$data);

    }

    public function find_coming(){
        $SQL="select p.id id,p.name name,pic.path minipic
              from comingphone rp
              join phone p on p.id=rp.phone_id
              join picture pic on pic.phone_id=rp.phone_id and pic.ptype='minipic'
              order by p.firedate desc
              limit 0,6
              ";
        ///$this->firelog($SQL);
        $beans = $this->query($SQL);
        return $beans;
    }


    public function save_coming($phones){

        ///$this->firelog($phones);
        $this->db->empty_table('comingphone');
        $data = array();
        $i=0;
        foreach($phones as $phone){
            $data[$i++]=array(
                'phone_id'=>$phone
            );
        }

       // $this->firelog($data);
        $this->db->insert_batch('comingphone',$data);

    }

    public function find_by_brand($brand){

        $SQL="select p.id id ,p.name name
              from phone p

              where p.brand=?

              ";
        /*
         * CONCAT(p.name,'[￥',min(pp.price),']')
         *  join phoneprice pp on pp.phone_id=p.id
              GROUP BY pp.phone_id
         * */

        $query = $this->db->query($SQL,array($brand));
        return $query->result_array();
    }


    public function find_by_brands($brand ,$page=1){
        $data = array();
        $this->db->select("id,name");
        $this->db->where("brand",$brand);
        $start = $page*10-10;
        $this->db->limit(10,$start);
        $query = $this->db->get($this->table());
        $list =  $query->result_array();
        $config['base_url'] = "/".$this->table()."/find_by_brand/".$brand;
        $this->db->where('brand', $brand);
        $this->db->from($this->table());
        $count =  $this->db->count_all_results();
        $config['total_rows'] = $count;
        $config['per_page'] = 10;
        //$this->firelog($config);
        $this->pagination->initialize($config);
        $pagelink = $this->pagination->create_links($page);
        $data['list']=$list;
        $data['pagelink'] = $pagelink;
        return $data;
    }

    public function find_phone_price($phone){

        $this->db->where("phone_id",$phone);
        $this->db->order_by('sort','asc');
        $query = $this->db->get("phoneprice");
        return $query->result_array();
    }


    public function remove_phone_price($phone){
        $this->db->where("phone_id",$phone);
        $this->db->delete('phoneprice');
    }

    public function save_price($data){
        $this->db->insert_batch('phoneprice', $data);
    }

    public function sort_price($data){

        $this->db->update_batch('phoneprice', $data, 'id');
    }

    public function find_cart_info($id,$pid){
        $SQL="select p.id id,concat(p.name,pc.name) name,pc.price price
              from phone p
              join phoneprice pc on pc.phone_id=p.id and pc.id=?
              where p.id=?
        ";
        $query = $this->db->query($SQL,array($pid,$id));
        return $query->first_row('array');
    }

    public function find_where($where="",$sort=FALSE){
        $sql="select p.id id,p.name name,min(pp.price) price,pc.path minipic
              from ".$this->table()." p
              join phoneprice pp on pp.phone_id=p.id
              join picture pc on pc.phone_id=p.id and pc.ptype='minipic'
              ".(strlen($where)==0?"":" where ".$where)
              ."   GROUP BY pp.phone_id ".($sort?$sort:"");
        $this->firelog($sql);
        $query =  $this->db->query($sql);
        $result = $query->result_array();
        return $result;
    }

    public function modify_status($id,$status){
        $data = array(
            'pstatus'=>$status
        );
        $this->firelog($data);
        $this->db->where('id', $id);
        $this->db->update($this->table(), $data);
    }

    public function remove($id){

        $tables = array(
            'recommendphone',
            'sharedinfo',
            'picture',
            'comingphone',
            'deviceprice',
            'comment',
            'phoneprice'

        );
        foreach($tables as $table)
        $this->db->delete($table, array('phone_id' => $id));
        parent::remove($id);
    }

    public function fetch_tags(){
        $this->db->select("tag");
        $query = $this->db->get($this->table());
        $tags = $query->result_array();
        $taglist = array();
        $tindex = 0;
        $this->firelog($tags);
        foreach($tags as $tag){
           $ctags = explode(",",$tag['tag']);
           foreach($ctags as $ctag){
               if(!isset($taglist[$ctag]))
                   $taglist[$ctag] = "tg".($tindex++);
           }
        }
        return $taglist;
    }

    public function gets($page=1,$rows=10,$sorts=array("firedate"=>"desc"),$brand=FALSE){



        if($brand){
            $this->db->where('brand',$brand);
            $rows = 25;
        }
        $start = $rows*$page - $rows; //
        if ($start<0) $start = 0;
        $this->db->limit($rows,$start);
        foreach($sorts as $fd=>$dc){
            $this->db->order_by($fd,$dc);
        }

        $query = $this->db->get($this->table());
        $result = $query->result_array();
        return $result;
    }

}