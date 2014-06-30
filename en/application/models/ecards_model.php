<?php
/**
 * User: hongri
 * To change this template use File | Settings | File Templates.
 */

class Ecards_model extends CI_Model {

    public function __construct(){
        parent::__construct();
    }
 
    public function insertInfo($array){
        $this->db->insert('ecards',$array);
    }
	
	public function getValueList(){
        return $this->db->get('ecards')->result_array();
	}

    public function getValueListByNum($id){
        return $this->db->limit($id)->get('ecards')->result_array();
    }

    public function getValueListByFiled($filed){
        return $this->db->where('filed',$filed)->get('ecards')->result_array();
    }

    public function updateValue($array){
        return $this->db->where('id',$array['id'])->set($array)->update('ecards');
    }

    public function insertValue($array){
        return $this->db->set($array)->insert('ecards');
    }

    public function deleteValue($id){
        return $this->db->where('id',$id)->delete('ecards');
    }

    public function getValuePagination($per_num,$offset){
        return $this->db->get('ecards',$per_num,$offset)->result_array();
    }

    public function totalRows(){
        return $this->db->count_all_results('ecards');
    }

}

