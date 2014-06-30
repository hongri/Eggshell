<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class How_we_work extends RI_Controller {
	public function index()
	{
		$this->load->view('how_we_work',$this->data);
	}
}

