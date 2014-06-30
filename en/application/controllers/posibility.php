<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Posibility extends RI_Controller {
	public function index()
	{
		$this->load->view('posibility',$this->data);
	}

	public function video()
	{
		$this->load->view('posibility_video',$this->data);
	}
}

