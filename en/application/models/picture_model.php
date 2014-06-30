<?php
/**
 * User: hongri
 * To change this template use File | Settings | File Templates.
 */

class Picture_model extends CI_Model {

    public function __construct(){
        parent::__construct();
    }
 
    public function insertInfo($array){
        $this->db->insert('case_client',$array);
    }
	
	public function getValueList(){
        return $this->db->get('case_client')->result_array();
	}

    public function getValueListByNum($id){
        return $this->db->limit($id)->get('case_client')->result_array();
    }
	
	 public function getValueListByFiled($filed){
        return $this->db->like('filed',$filed)->get('case_client')->result_array();
    }

    public function updateValue($array){
        return $this->db->where('id',$array['id'])->set($array)->update('case_client');
    }

    public function insertValue($array){
        return $this->db->set($array)->insert('case_client');
    }

    public function deleteValue($id){
        return $this->db->where('id',$id)->delete('case_client');
    }

    public function getValuePagination($per_num,$offset){
        return $this->db->get('case_client',$per_num,$offset)->result_array();
    }

    public function totalRows(){
        return $this->db->count_all_results('case_client');
    }

}

