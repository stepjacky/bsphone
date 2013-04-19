<?php
/**
 * Created by JetBrains PhpStorm.
 * User: hantu
 * Date: 12-5-13
 * Time: 下午2:50
 * To change this template use File | Settings | File Templates.
 */
class MY_Model extends CI_Model
{
    protected $table = null;
    protected $fieldNames = array();
    protected $row_per_page=10;
    protected $default_page_pre='/';
    public function __construct()
    {

        parent::__construct();

        $this->default_page_pre = "/".$this->table()."/lists/";
        if (func_num_args() == 1) {
            $mname = func_get_arg(0);
            $this->table = strtolower(substr($mname,0,strlen($mname)-6));
        }
        $this->load->library('firephp');
        $this->load->helper('guid');
        $this->load->database();

    }


    public function gets($page = 1, $rows = 10,$sorts=array()) {
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

    public function query($sql){
        $query =  $this->db->query($sql);
        $result = $query->result_array();
        return $result;
    }

    function query_paged($page=1,$rows=10,$navpre=FALSE,$sort=array(),$where=FALSE){
        $start = $rows*$page - $rows; //
        if ($start<0) $start = 0;
        $sortstr = FALSE;
        foreach($sort as $fd=>$val){
            $sortstr.= $fd." ".$val.",";
        }
        $sortstr = substr($sortstr,0,strlen($sortstr)-1);

        $SQL = "select * from ".$this->table()
            .($where?" where ".$where:"")
            .($sortstr?" order by ".$sortstr:" ")
            ."  limit ".$start." , ".$rows ;
        $result = $this->db->query($SQL);
        $data = array();
        $data['beans']     =  $result->result_array();

        $pagelink = $this->page_nav(!$navpre?$navpre:$this->default_page_pre,$this->db->count_all($this->table()),$page,10);
        $data['pagelink']  =  $pagelink;
        return $data;
    }

    public function find_where($where=""){
        $sql="select * from ".$this->table().(strlen($where)==0?"":" where ".$where);
        $query =  $this->db->query($sql);
        $result = $query->result_array();
        return $result;
    }

    public function search($fields,$key,$page=1,$rows=10){
        $key = urldecode($key);
        foreach($fields as $fd)
        $this->db->or_like($fd, $key);
        $start = $page*$rows-$rows;
        if($start<0)$start=0;
        $this->db->limit($rows,$start);
        $query =  $this->db->get($this->table());

        foreach($fields as $fd)
            $this->db->or_like($fd, $key);
        $this->db->from($this->table());
        $count =  $this->db->count_all_results();
        $pagelink = $this->page_nav($this->table().'/search/'.$key,$count,$page,$rows);
        $data = array(
            'beans'=>$query->result_array(),
            'pagelink'=>$pagelink
        );
        return $data;

    }


    public function page_link($page=1,$row=10){

        return $this->page_nav("/".$this->table()."/lists/",$this->db->count_all($this->table()),$page,$row);
    }

    public function page_nav($baseurl='',$count=0,$page=1,$rows=10){
        $config['base_url'] = $baseurl;
        $config['total_rows'] = $count;
        $config['per_page'] = $rows;
        $this->pagination->initialize($config);
        $pagelink = $this->pagination->create_links($page);
        return $pagelink;
    }

    public function saveUpdate($data,$pk='id'){
       $pk = urldecode($pk);
       if(!isset($data[$pk]) || $data[$pk]==''){
           $this->save($data,$pk);
       }else{
           $this->update($data,$pk);
       }
    }

    public function persiste($data,$pk='id'){
        $pk = urldecode($pk);

        if(!isset($data[$pk]) || empty($data[$pk])){
            $this->save($data,$pk);
        }else{
           if(!$this->get($data[$pk])){
               $this->save($data,$pk);
           }else{
            $this->update($data,$pk);
           }
        }
    }

    /**
     * @param array;
     */
    public function save($data,$pk='id')
    {


        if($pk=='id')
           $data[$pk]=getGUID();

        $str = $this->db->insert_string($this->table(), $data);
        $this->firelog($str);
        $this->db->insert($this->table, $data);

    }


    public function update($data,$pk='id'){


        $pk = urldecode($pk);
        $id = isset($data[$pk])?$data[$pk]:false;
        if(!$id){
            $this->firelog("primary key ".$pk." for  update action  is required  of table ".$this->table());
            return;
        }

        unset($data[$pk]);
        $str = $this->db->update_string($this->table(),$data,$pk."='$id'");
        $this->firelog($str);
        $this->db->where($pk, $id);
        $this->db->update($this->table(),$data);
    }

    public function list_with_paged($page=1,$rows=10,$fields="id,name"){
        $data = array();
        $this->db->select($fields);
        $this->db->order_by('firedate','desc');
        $start = $page*$rows-$rows;
        $this->db->limit($rows,$start);

        $query = $this->db->get($this->table());
        $data['list'] = $query->result_array();
        $count =  $this->db->count_all_results();
        $config['base_url'] = "/".$this->table()."/list_with_paged/";
        $config['total_rows'] = $count;
        $config['per_page'] = $rows;
        //$this->firelog($config);
        $this->pagination->initialize($config);
        $pagelink = $this->pagination->create_links($page);
        $data['pagelink']= $pagelink;
        return $data;
    }


    public function create_batch($data)
    {

        $this->db->insert_batch($this->table(), $data);

    }

    public function update_batch($data,$pk='id'){

       foreach($data as $d){
           // $this->firelog($d);
           $this->update($d);
       }
    }

    public function remove($id,$pk='id')
    {
        $id = urldecode($id);
        $this->db->delete($this->table(), array($pk=>$id));
    }

    public function get($id,$pk='id'){

        //$this->firelog($id);
        $id = urldecode($id);
        $query = $this->db->get_where($this->table(), array($pk => $id));
        $bean =  $query->first_row('array');
        return count($bean)==0?FALSE: $bean;
    }

    public function table(){
        return strtolower($this->table);
    }

    /**
      *  创建一个新的空对象
      */
    public function emptyObject($pk='id'){
        $fields = $this->db->list_fields($this->table());
        $data = array();
        foreach ($fields as $field)
        {
            $data[$field]="";
        }

        return $data;
    }

    public function emptyRow($table,$pk='id'){
        $table = !$table?$this->table():$table;
        $fields = $this->db->list_fields($table);
        $data = array();
        foreach ($fields as $field)
        {
            $data[$field]="";
        }

        return $data;
    }

    public function result($result=array(),$table=FALSE,$pk='id'){
         if(!$table)  return $result;
         if(count($result)!=0) return $result;
         return $this->emptyRow($table,$pk);
    }

    public function find_all($sorts= array()){
        foreach($sorts as $fd=>$dc){
            $this->db->order_by($fd,$dc);
        }
        $query = $this->db->get($this->table());
        $beans = $query->result_array();
        //$this->firelog($beans);
        return $beans;
    }

    public function __valid($param){
        if(!isset($param) || $param==null || $param=='')return FALSE;
        return TRUE;
    }

    public function firelog($msg = "")
    {
        $this->firephp->log($msg);
    }
}



class Media_Model extends MY_Model{
    public function __construct()
    {

        if (func_num_args() == 1) {
            $mname = func_get_arg(0);
            parent::__construct($mname);
        }else{
            parent::__construct();
        }

    }



    public function update_picture_extra($path,$pk,$idval,$field){
        $data = array(
            $field => $path
        );
        $idval = urldecode($idval);
        $this->db->where($pk, $idval);
        $this->db->update($this->table(), $data);
    }

    public function update_funds($user,$amount=0){
        if(!($this->__valid($user) || $this->__valid($amount)))return;

        $SQL = "update  myuser  set founds=founds+".$amount."  where id='".$user."'";
        $this->db->query($SQL);

    }

    public function gets($page = 1, $rows = 10,$sorts=array('firedate'=>'desc')){
        return parent::gets($page,$rows,$sorts);
    }

    public function increaviews($id,$table=FALSE){
        $SQL="update ".(!$table?$this->table():$table)." set views=views+1 where id=?";
        $this->db->query($SQL,array($id));
    }

}

class PK_Model extends Media_Model{

    public function __construct()
    {

        if (func_num_args() == 1) {
            $mname = func_get_arg(0);
            parent::__construct($mname);
        }else{
            parent::__construct();
        }

    }

    public function saveUpdate($data,$pk='id'){
        $pk = urldecode($pk);
        $id = $data[$pk];
        if(!$this->__valid($id))return;
        $bean = $this->get($id,$pk);
        if(empty($bean)){
            $this->save($data,$pk);
        }else{
            $this->update($data,$pk);
        }
    }
}
