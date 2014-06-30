<?php
/**
 * User: hongri
 * To change this template use File | Settings | File Templates.
 */

class Shop_model extends CI_Model {

    public function __construct(){
        parent::__construct();
    }
 
    public function insertInfo($array){
        $this->db->insert('brand_shop',$array);
    }
	
	public function getValueList(){
        return $this->db->get('brand_shop')->result_array();
	}

    public function getValueListByNum($id){
        return $this->db->order_by('time','desc')->limit($id)->get('brand_shop')->result_array();
    }

    public function updateValue($array){
        return $this->db->where('id',$array['id'])->set($array)->update('brand_shop');
    }

    public function insertValue($array){
        return $this->db->set($array)->insert('brand_shop');
    }

    public function deleteValue($id){
        return $this->db->where('id',$id)->delete('brand_shop');
    }

    public function getValuePagination($per_num,$offset){
        return $this->db->order_by('time','desc')->get('brand_shop',$per_num,$offset)->result_array();
    }

    public function totalRows(){
        return $this->db->count_all_results('brand_shop');
    }

}

