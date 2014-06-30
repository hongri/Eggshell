<?php
/**
 * User: hongri
 * To change this template use File | Settings | File Templates.
 */

class Text_model extends CI_Model {

    public function __construct(){
        parent::__construct();
    }
 
    public function getTextByName($id){
        $result = $this->db->select('value')
        	->where('id',$id)->get('common_text')->result();
        return $result[0]->value;
	}
	
	public function updateText($id,$value){
		$this->db->where('id',$id)
			->set('value',$value)
			->update('common_text');
	}

}

