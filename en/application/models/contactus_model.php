<?php
/**
 * User: hongri
 * To change this template use File | Settings | File Templates.
 */

class Contactus_model extends CI_Model {

    public function __construct(){
        parent::__construct();
    }
 
    public function insertInfo($array){
        $this->db->insert('contact_us',$array);
    }
	
	public function getValueList(){
        return $this->db->get('contact_us')->result_array();
	}

	public function getValuePagination($per_num,$offset){
        return $this->db->order_by('time','desc')->order_by('id','desc')->get('contact_us',$per_num,$offset)->result_array();
	}

	public function totalRows(){
        return $this->db->count_all_results('contact_us');
	}

}

