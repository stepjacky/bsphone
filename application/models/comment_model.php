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
 * FileName application/models/comment.php
 * Created by CIscaffolding.
 * User: qujiakang
 * QQ:myqq_postor@qq.com
 * Email: qujiakang@gmail.com  
 * Date: Wed Nov 28 23:40:02 CST 2012
 *    
 */

class Comment_model extends Media_Model {
     
    public  function __construct(){
        parent::__construct("Comment_model");
    }  
    
    public function  add_for_artitle($aid,$content,$user){
       if(!$this->__valid($content)) return;
       $data = array(
           'id'=>getGUID(),
           'content'=>$content,
           'guest'=>$user,
           'artitle_id'=>$aid

       );
       $this->save($data);
       $this->update_funds_cond('artitle',10,$user,0.1);
    }

    public function  add_for_video($aid,$content,$user){
        if(!$this->__valid($content)) return;
        $data = array(
            'id'=>getGUID(),
            'content'=>$content,
            'guest'=>$user,
            'video_id'=>$aid

        );
        $this->save($data);
        $this->update_funds_cond('video',10,$user,0.1);
    }

    public function add_for_phone($pid,$content,$user){
        if(!$this->__valid($content)) return;
        $data = array(
            'id'=>getGUID(),
            'content'=>$content,
            'guest'=>$user,
            'phone_id'=>$pid

        );
        $this->save($data);

    }

    public function add_for_found($content,$user){
        if(!$this->__valid($content)) return;
        $data = array(
            'id'=>getGUID(),
            'content'=>$content,
            'guest'=>$user,
            'foundable'=>true

        );
        $this->save($data);

    }

    public function most_for_artitle(){
        $SQL="select c.id id,c.firedate firedate ,c.guest username,c.content content
              ,c.artitle_id artid,a.name artname
              ,mu.avatar userimg
              from comment c
              join myuser mu on mu.name=c.guest
              join artitle a on a.id=c.artitle_id
              where c.artitle_id is not null
              order by c.firedate desc
              limit 0,30";

        $query = $this->db->query($SQL);
        return $query->result_array();


    }

    public function most_for_video(){
        $SQL="select c.id id,c.firedate firedate ,c.guest username,c.content content
              ,c.video_id vdoid, a.name vdoname
              ,mu.avatar userimg
              from comment c
              join myuser mu on mu.name=c.guest
              join video a on a.id=c.video_id
              where c.video_id is not null
              order by c.firedate desc
              limit 0,30";

        $query = $this->db->query($SQL);
        return $query->result_array();
    }


    public function most_for_vip(){
        $SQL="select c.id id,c.firedate firedate ,c.guest username,c.content content
              ,mu.avatar userimg
              from comment c
              join myuser mu on mu.id=c.guest
              where c.foundable is true
              order by c.firedate desc
              limit 0,20";

        $query = $this->db->query($SQL);
        return $query->result_array();
    }

    public function fetch_typed_count($ctype){

        $today = getdate();
        $year = $today['year'];
        $mon  = $today['mon'];
        $day  = $today['mday'];
        $SQL = " select count(*) cnt from comment t
                 where
                 year(t.firedate)=?
                 and month(t.firedate)=?
                 and day(t.firedate)=? and ".$ctype."_id is not null";

        $query = $this->db->query($SQL,array($year,$mon,$day));
        $rst = $query->first_row('array');
        return $rst['cnt'];

    }


    public function update_funds_cond($ctype,$limit,$user,$amount=0.1){
        $cnum =  $this->fetch_typed_count($ctype);
        if($cnum<$limit){
            $this->update_funds($user,$amount);
        }
    }
}   