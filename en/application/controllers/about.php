<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About extends RI_Controller {
	public function index()
	{
		$this->load->view('about_us',$this->data);
	}
	
	public function vision()
	{
		$this->load->view('about_us_vision',$this->data);
	}

	public function social()
	{
		$this->load->view('about_us_social_responsibily');
	}

	public function meet_eggshellers()
	{
		$this->load->view('about_us_meet_eggshellers');
	}
}

