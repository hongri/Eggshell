<?php
/**
 * User: hongri
 * To change this template use File | Settings | File Templates.
 */

class Key_value_model extends CI_Model {

    public function __construct(){
        parent::__construct();
    }
 

    public function getValueList($page_name){
        return $this->db->where('page_name',$page_name)->order_by('id','asec')->get('key_value')->result_array();
		  //	return $this->db->get('admin')->where('username',$username)->result();
	}
	 
	public function updateValue($id,$value,$page_name){
		$this->db->where('id',$id)
		 	->where('page_name',$page_name)
			->set('value',$value)
			->update('key_value');
	}

	public function getValueById($id,$page_name){
        $result = $this->db->select('value')
        	->where('id',$id)
        	->where('page_name',$page_name)
        	->get('key_value')->result();
        return $result[0]->value;
	}

	public function getAllData(){
		return $this->db->get('key_value')->result_array();
	}

}

