<?php
/**
 * User: hongri
 * To change this template use File | Settings | File Templates.
 */

class Admin_model extends CI_Model {

    public function __construct(){
        parent::__construct();
//        $this->db = $this->load->database();
    }


    public function userIsExits($username,$password=''){
        return $this->db->get_where('admin',array('username'=>$username,'password'=>$password))->row_array();
		  //	return $this->db->get('admin')->where('username',$username)->result();
	 }

}

