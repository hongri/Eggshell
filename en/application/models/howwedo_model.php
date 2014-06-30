<?php
/**
 * User: hongri
 * To change this template use File | Settings | File Templates.
 */

class Howwedo_model extends CI_Model {

    public function __construct(){
        parent::__construct();
    }
 
    public function insertInfo($array){
        $this->db->insert('howwedo',$array);
    }
	
	public function getValueList(){
        return $this->db->get('howwedo')->order_by('filed','desc')->result_array();
	}

    public function getValueListByNum($id){
        return $this->db->limit($id)->get('howwedo')->result_array();
    }

    public function getValueListByFiled($filed){
        return $this->db->where('filed',$filed)->get('howwedo')->result_array();
    }

    public function updateValue($array){
        return $this->db->where('id',$array['id'])->set($array)->update('howwedo');
    }

    public function insertValue($array){
        return $this->db->set($array)->insert('howwedo');
    }

    public function deleteValue($id){
        return $this->db->where('id',$id)->delete('howwedo');
    }

    public function getValuePagination($per_num,$offset){
        return $this->db->order_by('filed','asec')->get('howwedo',$per_num,$offset)->result_array();
    }

    public function totalRows(){
        return $this->db->count_all_results('howwedo');
    }

}

