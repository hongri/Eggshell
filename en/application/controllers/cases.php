<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cases extends RI_Controller {
	public function index()
	{
		$this->load->view('case',$this->data);
	}
}

