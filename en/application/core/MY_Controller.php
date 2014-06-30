<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 提供了需要登录的特性
 */
class MY_Controller extends CI_Controller {
	public function __construct() {
		// 禁止客户端缓存
		if(!headers_sent()) {
			header("Pragma: no-cache");
			header("Expires: Thu, 01 Jan 1970 00:00:01 GMT");
			header("Cache-Control: no-cache, must-revalidate");
			header("Content-Type: text/html; charset=utf-8");
		}

		parent::__construct();

		if ( !($this->getUname()) ) {
		//	show_error('Please login, thanks!', 403);
			redirect(ROOT_PATH.'login');
		}

	}

	/**
	 * get userName from session
	 */
	protected function getUname() {
		return $this->session->userdata('uname');
	}
}

class RI_Controller extends CI_Controller {
	public function __construct() {
		
		parent::__construct();

		$this->load->model('key_value_model');
		$this->load->model('text_model');
		$this->load->model('faq_model');
		$this->load->model('recruitment_model');
		$this->load->model('news_model');
		$this->load->model('assessment_model');
		$this->load->model('shop_model');
		$this->load->model('ecards_model');
		$this->load->model('video_model');
		$this->load->model('client_model');
		$this->load->model('press_model');
		$this->load->model('case_model');
		$this->load->model('howwedo_model');
		$this->load->model('picture_model');
		$this->load->model('eggsheller_model');
		$this->load->model('social_model');

		$this->getText('footer');
		$this->getText('company_background');
		$this->getText('vision');
		$allData = $this->key_value_model->getAllData();
		foreach ($allData as $key => $value) {
			$this->getValue($value['id'],$value['page_name']);
		}
		
		$this->data['recruitmentlist'] = $this->recruitment_model->getValueList();
		$this->data['faq'] = $this->faq_model->getValueList();
		$this->data['newsletter'] = $this->news_model->getValueListByNum(3);
		$this->data['assessment'] = $this->assessment_model->getValueList();
		$this->data['brandshop'] = $this->shop_model->getValueList();
		$this->data['ecards1'] = $this->ecards_model->getValueListByFiled('E-cards');
		$this->data['ecards2'] = $this->ecards_model->getValueListByFiled('Download');
		$this->data['ecards3'] = $this->ecards_model->getValueListByFiled('Experiemental Product');
		$this->data['video'] = $this->video_model->getValueList();
		$this->data['client'] = $this->client_model->getValueList();
		$this->data['press_video'] = $this->press_model->getValueListByFiled('Video');
		$this->data['press_press'] = $this->press_model->getValueListByFiled('Press');
		$this->data['press_events'] = $this->press_model->getValueListByFiled('Events');
		$this->data['case'] = $this->case_model->getValueList();
		$this->data['cases_picture'] = $this->case_model->getPicture();
		$this->data['howwedo_Audit'] = $this->howwedo_model->getValueListByFiled('Audit');
		$this->data['howwedo_Strategic'] = $this->howwedo_model->getValueListByFiled('Strategic');
		$this->data['howwedo_Identity'] = $this->howwedo_model->getValueListByFiled('Identity');
		$this->data['howwedo_Management'] = $this->howwedo_model->getValueListByFiled('Management');
		$this->data['howwedo_Experience'] = $this->howwedo_model->getValueListByFiled('Experience');
		$this->data['howwedo_Retain'] = $this->howwedo_model->getValueListByFiled('Retain');
		$this->data['case_Audit'] = $this->case_model->getValueListByFiled('Audit');
		$this->data['case_Strategic'] = $this->case_model->getValueListByFiled('Strategic');
		$this->data['case_Identity'] = $this->case_model->getValueListByFiled('Identity');
		$this->data['case_Management'] = $this->case_model->getValueListByFiled('Management');
		$this->data['case_Experience'] = $this->case_model->getValueListByFiled('Experience');
		$this->data['case_Retain'] = $this->case_model->getValueListByFiled('Retain');
		
		$this->data['case_picture'] = $this->picture_model->getValueListByFiled('Cases');
		$this->data['client_picture'] = $this->picture_model->getValueListByFiled('Clients');
		
		$this->data['eggsheller_strategic'] = $this->eggsheller_model->getValueListByFiled('Strategic');
		$this->data['eggsheller_advisor'] = $this->eggsheller_model->getValueListByFiled('Advisors');
		$this->data['eggsheller_designer'] = $this->eggsheller_model->getValueListByFiled('Designer');
		
		$this->data['social_posibility'] = $this->social_model->getValueList();
	}

	protected function getText($id){
		$this->data[$id.'_text'] = $this->text_model->getTextByName($id);
	}
	
	protected function getValue($id,$page_name){
		$this->data[$page_name.'_'.$id] = $this->key_value_model->getValueById($id,$page_name);
	}

}


