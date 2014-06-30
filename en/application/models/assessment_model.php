<?php
/**
 * User: hongri
 * To change this template use File | Settings | File Templates.
 */

class Assessment_model extends CI_Model {

    public function __construct(){
        parent::__construct();
    }
 
    public function insertInfo($array){
        $this->db->insert('brand_assessment',$array);
    }
	
	public function getValueList(){
        return $this->db->get('brand_assessment')->result_array();
	}

    public function getValueListByNum($id){
        return $this->db->order_by('time','desc')->limit($id)->get('brand_assessment')->result_array();
    }

    public function updateValue($array){
        return $this->db->where('id',$array['id'])->set($array)->update('brand_assessment');
    }

    public function insertValue($array){
        return $this->db->set($array)->insert('brand_assessment');
    }

    public function deleteValue($id){
        return $this->db->where('id',$id)->delete('brand_assessment');
    }

    public function getValuePagination($per_num,$offset){
        return $this->db->order_by('time','desc')->get('assessment',$per_num,$offset)->result_array();
    }

    public function getAssessment(){
        return $this->db->get('assessment')->result_array();
    }

    public function totalRows(){
        return $this->db->count_all_results('assessment');
    }

    public function hasEmail($email){
        return $this->db->where('email',$email)->count_all_results('assessment');
    }

    public function insertAssessment($array){
        $this->db->insert('assessment',$array);
    }

    public function updateAssessment($array){
        $this->db->where('email',$array['email'])->update('assessment',$array);
    }

    public function countResult($id,$rs)
    {
        $this->db->where('id',$id)->set($rs,$rs.'+1',false)->update('brand_assessment');
    }

}

