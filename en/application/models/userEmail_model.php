<?php
/**
 * User: hongri
 * To change this template use File | Settings | File Templates.
 */

class UserEmail_model extends CI_Model {

    public function __construct(){
        parent::__construct();
    }
 
    public function insertInfo($array){
        $this->db->insert('user_email',$array);
    }

    public function updateInfo($array){
        $this->db->where('email',$array['email'])->update('user_email',$array);
    }
	
	public function getValueList(){
        return $this->db->get('user_email')->result_array();
	}

	public function getValuePagination($per_num,$offset){
        return $this->db->order_by('time','desc')->order_by('id','desc')->get('user_email',$per_num,$offset)->result_array();
	}

	public function totalRows(){
        return $this->db->count_all_results('user_email');
	}

    public function hasEmail($email){
        return $this->db->where('email',$email)->count_all_results('user_email');
    }

}

