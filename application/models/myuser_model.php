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
 * FileName application/models/myuser.php
 * Created by CIscaffolding.
 * User: qujiakang
 * QQ:myqq_postor@qq.com
 * Email: qujiakang@gmail.com  
 * Date: Wed Nov 28 23:40:02 CST 2012
 *    
 */

class Myuser_model extends Media_Model {
     
    public  function __construct(){
        parent::__construct("Myuser_model");
    }



    public function remove($id){

        $id = urldecode($id);
        $this->firelog($id);
        $sql="delete from  qqnickname where name='".$id."' and amount>1";
        $this->db->trans_start();
        $this->db->query($sql);
        $this->db->delete("shipaddress",array('myuser_username'=>$id));
        $this->db->delete($this->table(), array("id"=>$id));
        $this->db->trans_complete();
    }

    public function getByOpenId($openId){
        $query = $this->db->get_where($this->table, array('openId' => $openId));
        if ($query->num_rows() > 0)
        {
            $row = $query->first_row("array");
            return $row;
        }else{
            return FALSE;
        }
    }

    public function getUserName($nick){
        if(strlen(trim($nick))==0)
            $nick ='BE通讯用户';
        $sql = "select amount from qqnickname where name='$nick'";

        $query = $this->db->query($sql);
        if($query->num_rows()>0){
            //该用户名已经存在,证明曾经注册过
            $row = $query->first_row();
            $mount = $row->amount+1;
            $this->db->where('name', $nick);
            $this->db->update('qqnickname', array(
                "amount"=>$mount
            ));
            return $nick.$mount;
        }else{
            $data = array(
                'name' => $nick,
                'amount' => 1
            );

            $this->db->insert('qqnickname', $data);
            return $nick;
        }
    }

    public function  save($data){
        $this->db->trans_start();
        $id = urldecode($data["id"]);
        $id = $this->dao->getUserName($id);
        $data['id'] = $id;
        $this->db->insert($this->table, $data);
        $this->db->trans_complete();
    }

    public function find_by_email($email){
        if(!$this->__valid($email))return FALSE;
        $this->db->select('id,name,password');
        $this->db->where('email',$email);
        $query = $this->db->get($this->table());
        $user = $query->first_row('array');
        return $user;

    }

    public function login($username,$password){


        $this->db->where('id', $username);
        $this->db->where('password', $password);
        $query = $this->db->get($this->table());
        $user =  $query->first_row('array');
        if(count($user)==0)return FALSE;
        return $user;

    }

    public function register($email,$name,$password,$activecode){


       $email = urldecode($email);

       $this->db->where('id',$email);
       $this->db->from($this->table());
       $count =  $this->db->count_all_results();
       $this->firelog($count);
       if($count!=0)return FALSE;
       $data = array(
           'id'=>$email,
           'name'=>$name,
           'password'=>$password,
           'activecode'=>$activecode
       );
       $this->save($data);
       $rst = $this->get($email);
       $this->firelog($rst);
       return $rst;
    }

    public function active($code){
        $this->db->select('id');
        $this->db->where('acted',false);
        $this->db->where('activecode',$code);
        $user =  $this->db->get($this->table());
        if(count($user)!=0){
            $data = array(
                "id"=>$user['id'],
                'acted'=>true
            );
            $this->update($data);
            return TRUE;
        }
        return FALSE;
    }




    
}   