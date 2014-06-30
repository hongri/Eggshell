<?php
/**
 * User: hongri
 * To change this template use File | Settings | File Templates.
 */

class Client_model extends CI_Model {

    public function __construct(){
        parent::__construct();
    }
 
    public function insertInfo($array){
        $this->db->insert('client',$array);
    }
	
	public function getValueList(){
        return $this->db->order_by('id', 'desc')->get('client')->result_array();
	}

    public function getValueListByNum($id){
        return $this->db->limit($id)->get('client')->result_array();
    }

    public function updateValue($array){
        return $this->db->where('id',$array['id'])->set($array)->update('client');
    }

    public function insertValue($array){
        return $this->db->set($array)->insert('client');
    }

    public function deleteValue($id){
        return $this->db->where('id',$id)->delete('client');
    }

    public function getValuePagination($per_num,$offset){
        return $this->db->get('client',$per_num,$offset)->result_array();
    }

    public function totalRows(){
        return $this->db->count_all_results('client');
    }

}

