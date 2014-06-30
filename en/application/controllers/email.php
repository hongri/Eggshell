<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Email extends RI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->library('email'); 
	}

	public function index()
	{		
		$config['protocol'] = 'sendmail';
/*		$config['smtp_host'] = 'ssl://smtp.gmail.com';
		$config['smtp_user'] = 'hongri1987@gmail.com';
		$config['smtp_pass'] = '';
		$config['smtp_port'] = '465';
		$config['smtp_timeout'] = '5';*/
		$config['newline'] = '\r\n';
		$config['crlf'] = '\r\n';
		
		$this->email->initialize($config);
		
		$this->email->from('hongri1987@gmail.com', 'Hong Ri');
		$this->email->to('hongri0615@yahoo.com.cn');
		
		$this->email->subject('Email Test');
		$this->email->message('Testing the email class.');
		
		$this->email->send();
		
		echo $this->email->print_debugger();
	}

}


