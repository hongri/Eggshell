<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Clients extends RI_Controller {
	public function index()
	{
		$this->load->view('clients',$this->data);
	}
}

