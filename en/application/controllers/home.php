<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends RI_Controller {
	public function __construct() {
		parent::__construct();
	}

	public function index()
	{		
		$this->load->view('home',$this->data);
	}

	public function home_detail()
	{
		$this->load->view('home_detail',$this->data);
	}
	
	public function brand_shop()
	{
		$this->load->view('brand_shop',$this->data);
	}

	public function assess_brand()
	{
		$this->load->view('assess_your_own_brand',$this->data);
	}

	public function assessment_post(){
		$json = json_decode(file_get_contents('php://input'),true);
		$json['time'] = date('Y-m-d H:i:s');
		$this->load->model('assessment_model');
		if($this->assessment_model->hasEmail($json['email'])){
			$this->assessment_model->updateAssessment($json);
		}
		else{
			$this->assessment_model->insertAssessment($json);
		}		
	}

	public function assessment_result_post(){
		$json = json_decode(file_get_contents('php://input'),true);
		foreach (explode(',',$json['result']) as $key => $value) {
			list($id,$rs) = explode(':',$value);
			$this->assessment_model->countResult($id,$rs);
		}				
	}
	
	public function come_soon()
	{
		$this->load->view('come_soon',$this->data);
	}
}


