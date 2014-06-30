<?php
/**
 * User: hongri
 * To change this template use File | Settings | File Templates.
 */

class News_model extends CI_Model {

    public function __construct(){
        parent::__construct();
    }
 
    public function insertInfo($array){
        $this->db->insert('news',$array);
    }
	
	public function getValueList(){
        return $this->db->get('news')->result_array();
	}

    public function getValueListByNum($id){
        return $this->db->order_by('time','desc')->limit($id)->get('news')->result_array();
    }

    public function updateValue($array){
        return $this->db->where('id',$array['id'])->set($array)->update('news');
    }

    public function insertValue($array){
        return $this->db->set($array)->insert('news');
    }

    public function deleteValue($id){
        return $this->db->where('id',$id)->delete('news');
    }

    public function getValuePagination($per_num,$offset){
        return $this->db->order_by('time','desc')->get('news',$per_num,$offset)->result_array();
    }

    public function totalRows(){
        return $this->db->count_all_results('news');
    }

}

