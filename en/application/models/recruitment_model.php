<?php
/**
 * User: hongri
 * To change this template use File | Settings | File Templates.
 */

class Recruitment_model extends CI_Model {

    public function __construct(){
        parent::__construct();
    }
 
    public function insertInfo($array){
        $this->db->insert('recruitment',$array);
    }
	
	public function getValueList(){
        return $this->db->get('recruitment')->result_array();
	}

    public function updateValue($array){
        return $this->db->where('id',$array['id'])->set($array)->update('recruitment');
    }

    public function insertValue($array){
        return $this->db->set($array)->insert('recruitment');
    }

    public function deleteValue($id){
        return $this->db->where('id',$id)->delete('recruitment');
    }

}

