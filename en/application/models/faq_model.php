<?php
/**
 * User: hongri
 * To change this template use File | Settings | File Templates.
 */

class Faq_model extends CI_Model {

    public function __construct(){
        parent::__construct();
    }
 
    public function insertInfo($array){
        $this->db->insert('faq',$array);
    }
	
	public function getValueList(){
        return $this->db->get('faq')->result_array();
	}

    public function updateValue($array){
        return $this->db->where('id',$array['id'])->set($array)->update('faq');
    }

    public function insertValue($array){
        return $this->db->set($array)->insert('faq');
    }

    public function deleteValue($id){
        return $this->db->where('id',$id)->delete('faq');
    }

}

