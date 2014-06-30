<?php
/**
 * User: hongri
 * To change this template use File | Settings | File Templates.
 */

class Social_model extends CI_Model {

    public function __construct(){
        parent::__construct();
    }
 
    public function insertInfo($array){
        $this->db->insert('social_posibility',$array);
    }
	
	public function getValueList(){
        return $this->db->order_by('date','desc')->get('social_posibility')->result_array();
    }
	
    public function getValueListByNum($id){
        return $this->db->order_by('date','desc')->limit($id)->get('social_posibility')->result_array();
    }

    public function updateValue($array){
        return $this->db->where('id',$array['id'])->set($array)->update('social_posibility');
    }

    public function insertValue($array){
        return $this->db->set($array)->insert('social_posibility');
    }

    public function deleteValue($id){
        return $this->db->where('id',$id)->delete('social_posibility');
    }

    public function getValuePagination($per_num,$offset){
        return $this->db->order_by('date','desc')->get('social_posibility',$per_num,$offset)->result_array();
    }

    public function totalRows(){
        return $this->db->count_all_results('social_posibility');
    }

}

