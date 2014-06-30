<?php
/**
 * User: hongri
 * To change this template use File | Settings | File Templates.
 */

class Case_model extends CI_Model {

    public function __construct(){
        parent::__construct();
    }
 
    public function insertInfo($array){
        $this->db->insert('case',$array);
    }
	
	public function getValueList(){
        return $this->db->order_by('id', 'desc')->get('case')->result_array();
	}
	
	public function getPicture(){
        return $this->db->get('case_picture')->result_array();
	}
	
	public function getPictureList($id){
        return $this->db->where('case_id',$id)->get('case_picture')->result_array();
	}

    public function getValueListByNum($id){
        return $this->db->limit($id)->get('case')->result_array();
    }

    public function getValueListByFiled($filed){
        return $this->db->like('type',$filed)->get('case')->result_array();
    }

    public function updateValue($array){
        return $this->db->where('id',$array['id'])->set($array)->update('case');
    }

    public function insertValue($array){
        return $this->db->set($array)->insert('case');
    }

    public function deleteValue($id){
        return $this->db->where('id',$id)->delete('case');
    }
	
	public function updatePictureValue($array){
        return $this->db->where('id',$array['id'])->set($array)->update('case_picture');
    }

    public function insertPictureValue($array){
        return $this->db->set($array)->insert('case_picture');
    }

    public function deletePictureValue($id){
        return $this->db->where('id',$id)->delete('case_picture');
    }

    public function getValuePagination($per_num,$offset){
        return $this->db->get('case',$per_num,$offset)->result_array();
    }

    public function totalRows(){
        return $this->db->count_all_results('case');
    }

}

