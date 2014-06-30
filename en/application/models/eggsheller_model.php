<?php
/**
 * User: hongri
 * To change this template use File | Settings | File Templates.
 */

class Eggsheller_model extends CI_Model {

    public function __construct(){
        parent::__construct();
    }
 
    public function insertInfo($array){
        $this->db->insert('eggsheller',$array);
    }
	
	public function getValueList(){
        return $this->db->order_by('filed','desc')->get('eggsheller')->result_array();
	}

    public function getValueListByFiled($filed){
        return $this->db->where('filed',$filed)->get('eggsheller')->result_array();
    }

    public function getValueListByNum($id){
        return $this->db->order_by('date','desc')->limit($id)->get('eggsheller')->result_array();
    }

    public function getDetailById($id){
        return $this->db->where('id',$id)->get('eggsheller')->result_array();
    }

    public function updateValue($array){
        return $this->db->where('id',$array['id'])->set($array)->update('eggsheller');
    }

    public function updateDetail($id,$detail){
        return $this->db->where('id',$id)->set('detail',$detail)->update('eggsheller');
    }

    public function insertValue($array){
        return $this->db->set($array)->insert('eggsheller');
    }

    public function deleteValue($id){
        return $this->db->where('id',$id)->delete('eggsheller');
    }

    public function getValuePagination($per_num,$offset){
        return $this->db->order_by('filed','desc')->get('eggsheller',$per_num,$offset)->result_array();
    }

    public function totalRows(){
        return $this->db->count_all_results('eggsheller');
    }

}

