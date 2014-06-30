<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Press extends RI_Controller {
	public function index()
	{
		$this->load->view('press',$this->data);
	}
}

