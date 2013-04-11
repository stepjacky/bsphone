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
 * FileName application/models/tags.php
 * Created by CIscaffolding.
 * User: qujiakang
 * QQ:myqq_postor@qq.com
 * Email: qujiakang@gmail.com  
 * Date: Sat Jan 19 22:52:00 CST 2013
 *    
 */

class Tags_model extends PK_Model {
     
    public  function __construct(){
        parent::__construct("Tags_model");
    }


    /**
     * @param array;
     */
    public function save($data)
    {
        $str = $this->db->insert_string($this->table(), $data);
        //$this->firelog($str);
        $this->db->insert($this->table, $data);

    }
    public function remove($id,$catalog,$pk){

        $this->db->delete($this->table(), array($pk=>$id,'catalog'=>$catalog));
    }

    public function find_by_catalog($catalog){
        $this->db->select('name');
        $this->db->where('catalog',$catalog);
        $query = $this->db->get($this->table());
        $tags = $query->result_array();
        return $tags;
    }

}   