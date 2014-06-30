<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Hongri extends RI_Controller {
	public function __construct() {
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('index', $this->data);
	}

	public function contactus_post(){
		$json = json_decode(file_get_contents('php://input'),true);
		$json['time'] = date('Y-m-d H:i:s');
		$this->load->model('contactus_model');
		$this->contactus_model->insertInfo($json);
	}

	public function news_post(){
		$json = json_decode(file_get_contents('php://input'),true);
		$json['time'] = date('Y-m-d H:i:s');
		$this->load->model('userEmail_model');
		if($this->userEmail_model->hasEmail($json['email'])){
			$this->userEmail_model->updateInfo($json);
		}
		else{
			$this->userEmail_model->insertInfo($json);
		}		
	}
}

