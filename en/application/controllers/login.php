<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct() {
		// 禁止客户端缓存
		parent::__construct();
	}

	/** 
	 * get userName from session
	 */
	protected function getUname() {
		return $this->session->userdata('uname');
	}

	public function index() {
		if ( ($this->getUname()) ) {
			redirect(ROOT_PATH.'admin');die();
		}
		if(isset($_POST['ptname'])){
			$name = $this->input->post('ptname', true);
			$passwd = $this->input->post('ptpwd', true);
			$this->load->model('admin_model');
			// var_dump($this->admin_model->userIsExits($name, $passwd));die();
			if($name == USERNAME && $passwd == PASSWORD || $this->admin_model->userIsExits($name,$passwd)){
				$this->session->set_userdata('uname', $name);
				redirect(ROOT_PATH.'admin');
			}
			//var_dump($this->session->userdata('uname'));die();
			else{
				$data['error']= 'true';
				$this->load->view('admin/login',$data);
			}
		}
		else{
			$data['error'] =  'false';
			$this->load->view('admin/login',$data);
		}

		//TODO: login
		//	$name = 'test';
		/*
		$this->load->database();
		$sql = 'SELECT * FROM USERS WHERE (ID = ? OR NAME = ?) AND PASSWD = ?';
		$this->db->query($sql, array($id, $name, $passwd));

		if ($query->num_rows() > 0) {
			$row = $query->row();
			// Some information getter
		}
		 */


	}

	public function logout() {
		$this->session->unset_userdata(array(
			'uname'=>'',
		));
		redirect(ROOT_PATH.'login');
	}
}
