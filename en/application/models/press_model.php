<?php
/**
 * User: hongri
 * To change this template use File | Settings | File Templates.
 */

class Press_model extends CI_Model {

    public function __construct(){
        parent::__construct();
    }
 
    public function insertInfo($array){
        $this->db->insert('press',$array);
    }
	
	public function getValueList(){
        return $this->db->order_by('filed desc, id desc')->get('press')->result_array();
	}

    public function getValueListByFiled($filed){
        return $this->db->where('filed',$filed)->order_by('date','desc')->get('press')->result_array();
    }

    public function getValueListByNum($id){
        return $this->db->order_by('date','desc')->limit($id)->get('press')->result_array();
    }

    public function updateValue($array){
        return $this->db->where('id',$array['id'])->set($array)->update('press');
    }

    public function insertValue($array){
        return $this->db->set($array)->insert('press');
    }

    public function deleteValue($id){
        return $this->db->where('id',$id)->delete('press');
    }

    public function getValuePagination($per_num,$offset){
        return $this->db->order_by('filed','desc')->get('press',$per_num,$offset)->result_array();
    }

    public function totalRows(){
        return $this->db->count_all_results('press');
    }

}

