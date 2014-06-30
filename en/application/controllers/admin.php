<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admin extends MY_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('key_value_model');
		$this->load->model('text_model');
		$this->load->model('contactus_model');
		$this->load->model('recruitment_model');
		$this->load->model('faq_model');
		$this->load->model('news_model');
		$this->load->model('userEmail_model');
		$this->load->model('assessment_model');
		$this->load->model('shop_model');
		$this->load->model('ecards_model');
		$this->load->model('video_model');
		$this->load->model('client_model');
		$this->load->model('press_model');
		$this->load->model('case_model');
		$this->load->model('howwedo_model');
		$this->load->model('eggsheller_model');
		$this->load->model('picture_model');
		$this->load->model('social_model');
	}

	public function index()
	{
		redirect(ROOT_PATH.'admin/home_management');
	}

	public function nav_management()
	{
		$data['navlist'] = $this->key_value_model->getValueList('nav');
		$data['page_name'] = 'nav';
		$this->loadView('admin/nav_element',$data);
	}

	public function nav_post()
	{
		$json = json_decode(file_get_contents('php://input'),true);
		$id = $json['id'];
		$value = trim($json['value']);
		$this->key_value_model->updateValue($id,$value,'nav');
	}

	public function footer_management()
	{
		$data['footer_text'] = $this->text_model->getTextByName('footer');
		$data['page_name'] = 'footer';
		$this->loadView('admin/footer_element',$data);
	}

	public function footer_post()
	{
		$json = json_decode(file_get_contents('php://input'),true);
		$id = $json['id'];
		$value = trim($json['value']);
		$this->text_model->updateText($id,$value);
	}

	public function home_management()
	{
		$data['homelist'] = $this->key_value_model->getValueList('home');
		$data['page_name'] = 'home';
		$this->loadView('admin/home_element',$data);
	}

	public function home_post()
	{
		$json = json_decode(file_get_contents('php://input'),true);
		$id = $json['id'];
		$value = trim($json['value']);
		$this->key_value_model->updateValue($id,$value,'home');
	}

	public function oneminute()
	{
		$data['oneminutelist'] = $this->key_value_model->getValueList('oneminute');
		$data['page_name'] = 'oneminute';
		$this->loadView('admin/oneminute_element',$data);
	}

	public function oneminute_post()
	{
		$json = json_decode(file_get_contents('php://input'),true);
		$id = $json['id'];
		$value = trim($json['value']);
		$this->key_value_model->updateValue($id,$value,'oneminute');
	}

	public function aboutus_management()
	{
		$data['aboutuslist'] = $this->key_value_model->getValueList('aboutus');
		$data['page_name'] = 'aboutus';
		$this->loadView('admin/aboutus_element',$data);
	}

	public function aboutus_post()
	{
		$json = json_decode(file_get_contents('php://input'),true);
		$id = $json['id'];
		$value = trim($json['value']);
		$this->key_value_model->updateValue($id,$value,'aboutus');
	}

	public function company_background_management()
	{
		$data['company_background_text'] = $this->text_model->getTextByName('company_background');
		$data['page_name'] = 'company_background';
		$this->loadView('admin/company_background',$data);
	}

	public function company_background_post()
	{
		$json = json_decode(file_get_contents('php://input'),true);
		$id = $json['id'];
		$value = trim($json['value']);
		$this->text_model->updateText($id,$value);
	}
	public function vision_management()
	{
		$data['vision_text'] = $this->text_model->getTextByName('vision');
		$data['page_name'] = 'vision';
		$this->loadView('admin/vision',$data);
	}

	public function vision_post()
	{
		$json = json_decode(file_get_contents('php://input'),true);
		$id = $json['id'];
		$value = trim($json['value']);
		$this->text_model->updateText($id,$value);
	}

	public function howwedo()
	{
		$data['howwedolist'] = $this->key_value_model->getValueList('howwedo');
		$data['page_name'] = 'howwedo';
		$this->loadView('admin/howwedo_element',$data);
	}

	public function howwedo_post()
	{
		$json = json_decode(file_get_contents('php://input'),true);
		$id = $json['id'];
		$value = trim($json['value']);
		$this->key_value_model->updateValue($id,$value,'howwedo');
	}

	public function cases()
	{
		$data['caselist'] = $this->key_value_model->getValueList('case');
		$data['page_name'] = 'case';
		$this->loadView('admin/case_element',$data);
	}

	public function cases_post()
	{
		$json = json_decode(file_get_contents('php://input'),true);
		$id = $json['id'];
		$value = trim($json['value']);
		$this->key_value_model->updateValue($id,$value,'case');
	}

	public function press()
	{
		$data['presslist'] = $this->key_value_model->getValueList('press');
		$data['page_name'] = 'press';
		$this->loadView('admin/press_element',$data);
	}

	public function press_post()
	{
		$json = json_decode(file_get_contents('php://input'),true);
		$id = $json['id'];
		$value = trim($json['value']);
		$this->key_value_model->updateValue($id,$value,'press');
	}

	public function possibility_management()
	{
		$data['possibilitylist'] = $this->key_value_model->getValueList('possibility');
		$data['page_name'] = 'possibility';
		$this->loadView('admin/possibility_element',$data);
	}

	public function possibility_post()
	{
		$json = json_decode(file_get_contents('php://input'),true);
		$id = $json['id'];
		$value = trim($json['value']);
		$this->key_value_model->updateValue($id,$value,'possibility');
	}

	public function contactus_management()
	{
		$data['contactuslist'] = $this->key_value_model->getValueList('contactus');
		$data['page_name'] = 'contactus';
		$this->loadView('admin/contactus_element',$data);
	}

	public function contactus_post()
	{
		$json = json_decode(file_get_contents('php://input'),true);
		$id = $json['id'];
		$value = trim($json['value']);
		$this->key_value_model->updateValue($id,$value,'contactus');
	}

	public function contactus($id=0)
	{
		$this->load->library('pagination');
		$config['base_url'] = ROOT_PATH.'admin/contactus/';
		$config['total_rows'] = $this->contactus_model->totalRows();
		$config['per_page'] = 15;
		$this->pagination->initialize($config);

		$data['contactus'] = $this->contactus_model->getValuePagination($config['per_page'],$id);
		$data['page_name'] = 'contact';
		$this->loadView('admin/contactus',$data);
	}

	public function recruitment()
	{	
		$data['recruitmentlist'] = $this->recruitment_model->getValueList();
		$data['page_name'] = 'recruitment';
		$this->loadView('admin/recruitment',$data);
	}

	public function recruitment_insert()
	{
		$json = json_decode(file_get_contents('php://input'),true);
		$this->recruitment_model->insertValue($json);
	}

	public function recruitment_update()
	{
		$json = json_decode(file_get_contents('php://input'),true);
		$this->recruitment_model->updateValue($json);
	}

	public function recruitment_delete()
	{
		$json = json_decode(file_get_contents('php://input'),true);
		$arr = explode(' ',$json['id']);
		foreach ($arr as $key => $value) {
			$this->recruitment_model->deleteValue($value);
		}		
	}

	public function faq()
	{	
		$data['faqlist'] = $this->faq_model->getValueList();
		$data['page_name'] = 'faq';
		$this->loadView('admin/faq_management',$data);
	}

	public function faq_insert()
	{
		$json = json_decode(file_get_contents('php://input'),true);
		$this->faq_model->insertValue($json);
	}

	public function faq_update()
	{
		$json = json_decode(file_get_contents('php://input'),true);
		$this->faq_model->updateValue($json);
	}

	public function faq_delete()
	{
		$json = json_decode(file_get_contents('php://input'),true);
		$arr = explode(' ',$json['id']);
		foreach ($arr as $key => $value) {
			$this->faq_model->deleteValue($value);
		}		
	}

	public function news($id=0)
	{	
		$this->load->library('pagination');
		$config['base_url'] = ROOT_PATH.'admin/news/';
		$config['total_rows'] = $this->news_model->totalRows();
		$config['per_page'] = 15;
		$this->pagination->initialize($config);

		$data['newslist'] = $this->news_model->getValuePagination($config['per_page'],$id);
		$data['page_name'] = 'news';
		$this->loadView('admin/news_management',$data);
	}

	public function news_insert()
	{
		$json = json_decode(file_get_contents('php://input'),true);
		$json['time'] = date('Y-m-d H:i:s');
		$this->news_model->insertValue($json);
	}

	public function news_update()
	{
		$json = json_decode(file_get_contents('php://input'),true);
		$json['time'] = date('Y-m-d H:i:s');
		$this->news_model->updateValue($json);
	}

	public function news_delete()
	{
		$json = json_decode(file_get_contents('php://input'),true);
		$arr = explode(' ',$json['id']);
		foreach ($arr as $key => $value) {
			$this->news_model->deleteValue($value);
		}		
	}

	public function user_email($id=0)
	{	
		$this->load->library('pagination');
		$config['base_url'] = ROOT_PATH.'admin/user_email/';
		$config['total_rows'] = $this->userEmail_model->totalRows();
		$config['per_page'] = 10;
		$this->pagination->initialize($config);

		$data['useremaillist'] = $this->userEmail_model->getValuePagination($config['per_page'],$id);
		$data['allEmail'] = $this->userEmail_model->getValueList();

		$data['page_name'] = 'user_email';
		$this->loadView('admin/user_email',$data);
	}

	public function brand_shop()
	{
		$data['shoplist'] = $this->key_value_model->getValueList('shop');
		$data['page_name'] = 'shop';
		$this->loadView('admin/brand_shop',$data);
	}

	public function shop_post()
	{
		$json = json_decode(file_get_contents('php://input'),true);
		$id = $json['id'];
		$value = trim($json['value']);
		$this->key_value_model->updateValue($id,$value,'shop');
	}

	public function shop_management($id=0)
	{	
		$data['brandshoplist'] = $this->shop_model->getValueList();
		$data['page_name'] = 'shop_management';
		$this->loadView('admin/shop_management',$data);
	}

	public function shop_insert()
	{
		$up = new upphoto();
		$submit = $_POST['submit'];
		if($submit == "上传图片"){
			if($_FILES['photo']['size']==0){
				redirect(ROOT_PATH.'admin/shop_management');
			}
			else{
				$up->get_ph_tmpname($_FILES['photo']['tmp_name']);
				$up->get_ph_type($_FILES['photo']['type']);
				$up->get_ph_size($_FILES['photo']['size']);
				$up->get_ph_name($_FILES['photo']['name']);
				$json['image'] = $up->get_image_name($_FILES['photo']['name']);
				$up->save();
			}
		}
		$json['title'] = $_POST['title'];
		$json['subtitle'] = $_POST['subtitle'];
		$json['content'] = $_POST['content'];
		$json['style'] = $_POST['style'];
		$json['photos'] = $_POST['photos'];
		$json['buy'] = $_POST['buy'];


		//$json = json_decode(file_get_contents('php://input'),true);
		$this->shop_model->insertValue($json);
		redirect(ROOT_PATH.'admin/shop_management');
	}

	public function shop_update()
	{
		$up = new upphoto();
		$submit = $_POST['submit'];
		if($submit == "上传图片"){
			if($_FILES['photo']['size']!==0){
				$up->get_ph_tmpname($_FILES['photo']['tmp_name']);
				$up->get_ph_type($_FILES['photo']['type']);
				$up->get_ph_size($_FILES['photo']['size']);
				$up->get_ph_name($_FILES['photo']['name']);
				$json['image'] = $up->get_image_name($_FILES['photo']['name']);
				$up->save();
			}
		}
		$json['id'] = $_POST['id'];
		$json['title'] = $_POST['title'];
		$json['subtitle'] = $_POST['subtitle'];
		$json['content'] = $_POST['content'];
		$json['style'] = $_POST['style'];
		$json['photos'] = $_POST['photos'];
		$json['buy'] = $_POST['buy'];
		//$json = json_decode(file_get_contents('php://input'),true);
		$this->shop_model->updateValue($json);
		redirect(ROOT_PATH.'admin/shop_management');
	}

	public function shop_delete()
	{
		$json = json_decode(file_get_contents('php://input'),true);
		$arr = explode(' ',$json['id']);
		foreach ($arr as $key => $value) {
			$this->shop_model->deleteValue($value);
		}		
	}

	public function brand_assessment()
	{
		$data['assessmentlist'] = $this->key_value_model->getValueList('assessment');
		$data['page_name'] = 'assessment';
		$this->loadView('admin/brand_assessment',$data);
	}

	public function assessment_post()
	{
		$json = json_decode(file_get_contents('php://input'),true);
		$id = $json['id'];
		$value = trim($json['value']);
		$this->key_value_model->updateValue($id,$value,'assessment');
	}

	public function assessment_management()
	{	
		$data['assessmentlist'] = $this->assessment_model->getValueList();
		$data['page_name'] = 'assessment_management';
		$this->loadView('admin/assessment_management',$data);
	}

	public function assessment_insert()
	{
		$json = json_decode(file_get_contents('php://input'),true);
		$this->assessment_model->insertValue($json);
	}

	public function assessment_update()
	{
		$json = json_decode(file_get_contents('php://input'),true);
		$this->assessment_model->updateValue($json);
	}

	public function assessment_delete()
	{
		$json = json_decode(file_get_contents('php://input'),true);
		$arr = explode(' ',$json['id']);
		foreach ($arr as $key => $value) {
			$this->assessment_model->deleteValue($value);
		}		
	}

	public function company_info($id=0)
	{	
		$this->load->library('pagination');
		$config['base_url'] = ROOT_PATH.'admin/company_info/';
		$config['total_rows'] = $this->assessment_model->totalRows();
		$config['per_page'] = 15;
		$this->pagination->initialize($config);

		$data['companylist'] = $this->assessment_model->getValuePagination($config['per_page'],$id);
		$data['page_name'] = 'company_info';
		$this->loadView('admin/company_info',$data);
	}

	public function ecards_management($id=0)
	{	
		$this->load->library('pagination');
		$config['base_url'] = ROOT_PATH.'admin/ecards_management/';
		$config['total_rows'] = $this->ecards_model->totalRows();
		$config['per_page'] = 10;
		$this->pagination->initialize($config);

		$data['ecardslist'] = $this->ecards_model->getValuePagination($config['per_page'],$id);
		$data['page_name'] = 'ecards';
		$this->loadView('admin/ecards_management',$data);
	}

	public function ecards_insert()
	{
		$up = new upphoto();
		$submit = $_POST['submit'];
		if($submit == "上传图片"){
			if($_FILES['photo']['size']==0){
				redirect(ROOT_PATH.'admin/ecards_management');
			}
			else{
				$up->get_ph_tmpname($_FILES['photo']['tmp_name']);
				$up->get_ph_type($_FILES['photo']['type']);
				$up->get_ph_size($_FILES['photo']['size']);
				$up->get_ph_name($_FILES['photo']['name']);
				$json['image'] = $up->get_image_name($_FILES['photo']['name']);
				$up->save();
			}
		}
		$json['content'] = $_POST['content'];
		$json['filed'] = $_POST['filed'];
		$json['href'] = $_POST['href'];
		$this->ecards_model->insertValue($json);
		redirect(ROOT_PATH.'admin/ecards_management');
	}

	public function ecards_update()
	{
		$up = new upphoto();
		$submit = $_POST['submit'];
		if($submit == "上传图片"){
			if($_FILES['photo']['size']!==0){
				$up->get_ph_tmpname($_FILES['photo']['tmp_name']);
				$up->get_ph_type($_FILES['photo']['type']);
				$up->get_ph_size($_FILES['photo']['size']);
				$up->get_ph_name($_FILES['photo']['name']);
				$json['image'] = $up->get_image_name($_FILES['photo']['name']);
				$up->save();
			}
		}
		$json['id'] = $_POST['id'];
		$json['content'] = $_POST['content'];
		$json['filed'] = $_POST['filed'];
		$json['href'] = $_POST['href'];
		//$json = json_decode(file_get_contents('php://input'),true);
		$this->ecards_model->updateValue($json);
		redirect(ROOT_PATH.'admin/ecards_management');
	}

	public function ecards_delete()
	{
		$json = json_decode(file_get_contents('php://input'),true);
		$arr = explode(' ',$json['id']);
		foreach ($arr as $key => $value) {
			$this->ecards_model->deleteValue($value);
		}		
	}

	public function video_management($id=0)
	{	
		$this->load->library('pagination');
		$config['base_url'] = ROOT_PATH.'admin/video_management/';
		$config['total_rows'] = $this->video_model->totalRows();
		$config['per_page'] = 10;
		$this->pagination->initialize($config);

		$data['videolist'] = $this->video_model->getValuePagination($config['per_page'],$id);
		$data['page_name'] = 'video';
		$this->loadView('admin/video_management',$data);
	}

	public function video_insert()
	{
		//$up = new upphoto();
//		$submit = $_POST['submit'];
//		if($submit == "上传图片"){
//			if($_FILES['photo']['size']==0){
//				redirect(ROOT_PATH.'admin/video_management');
//			}
//			else{
//				$up->get_ph_tmpname($_FILES['photo']['tmp_name']);
//				$up->get_ph_type($_FILES['photo']['type']);
//				$up->get_ph_size($_FILES['photo']['size']);
//				$up->get_ph_name($_FILES['photo']['name']);
//				$json['image'] = $up->get_image_name($_FILES['photo']['name']);
//				$up->save();
//			}
//		}
		$json['content'] = $_POST['content'];
		$json['description'] = $_POST['description'];
		$this->video_model->insertValue($json);
		redirect(ROOT_PATH.'admin/video_management');
	}

	public function video_update()
	{
		//$up = new upphoto();
//		$submit = $_POST['submit'];
//		if($submit == "上传图片"){
//			if($_FILES['photo']['size']!==0){
//				$up->get_ph_tmpname($_FILES['photo']['tmp_name']);
//				$up->get_ph_type($_FILES['photo']['type']);
//				$up->get_ph_size($_FILES['photo']['size']);
//				$up->get_ph_name($_FILES['photo']['name']);
//				$json['image'] = $up->get_image_name($_FILES['photo']['name']);
//				$up->save();
//			}
//		}
		$json['id'] = $_POST['id'];
		$json['content'] = $_POST['content'];
		$json['description'] = $_POST['description'];
		//$json = json_decode(file_get_contents('php://input'),true);
		$this->video_model->updateValue($json);
		redirect(ROOT_PATH.'admin/video_management');
	}

	public function video_delete()
	{
		$json = json_decode(file_get_contents('php://input'),true);
		$arr = explode(' ',$json['id']);
		foreach ($arr as $key => $value) {
			$this->video_model->deleteValue($value);
		}		
	}

	public function client_management($id=0)
	{	
		$this->load->library('pagination');
		$config['base_url'] = ROOT_PATH.'admin/client_management/';
		$config['total_rows'] = $this->client_model->totalRows();
		$config['per_page'] = 10;
		$this->pagination->initialize($config);

		$data['clientlist'] = $this->client_model->getValuePagination($config['per_page'],$id);
		$data['page_name'] = 'client';
		$this->loadView('admin/client_management',$data);
	}

	public function client_insert()
	{
		$up = new upphoto();
		$submit = $_POST['submit'];
		if($submit == "上传图片"){
			if($_FILES['photo']['size']==0){
				redirect(ROOT_PATH.'admin/client_management');
			}
			else{
				$up->get_ph_tmpname($_FILES['photo']['tmp_name']);
				$up->get_ph_type($_FILES['photo']['type']);
				$up->get_ph_size($_FILES['photo']['size']);
				$up->get_ph_name($_FILES['photo']['name']);
				$json['image'] = $up->get_image_name($_FILES['photo']['name']);
				$up->save();
			}
		}
		$json['content'] = $_POST['content'];
		$json['description'] = $_POST['description'];
		$this->client_model->insertValue($json);
		redirect(ROOT_PATH.'admin/client_management');
	}

	public function client_update()
	{
		$up = new upphoto();
		$submit = $_POST['submit'];
		if($submit == "上传图片"){
			if($_FILES['photo']['size']!==0){
				$up->get_ph_tmpname($_FILES['photo']['tmp_name']);
				$up->get_ph_type($_FILES['photo']['type']);
				$up->get_ph_size($_FILES['photo']['size']);
				$up->get_ph_name($_FILES['photo']['name']);
				$json['image'] = $up->get_image_name($_FILES['photo']['name']);
				$up->save();
			}
		}
		$json['id'] = $_POST['id'];
		$json['content'] = $_POST['content'];
		$json['description'] = $_POST['description'];
		//$json = json_decode(file_get_contents('php://input'),true);
		$this->client_model->updateValue($json);
		redirect(ROOT_PATH.'admin/client_management');
	}

	public function client_delete()
	{
		$json = json_decode(file_get_contents('php://input'),true);
		$arr = explode(' ',$json['id']);
		foreach ($arr as $key => $value) {
			$this->client_model->deleteValue($value);
		}		
	}

	public function press_management($id=0)
	{	
		$this->load->library('pagination');
		$config['base_url'] = ROOT_PATH.'admin/press_management/';
		$config['total_rows'] = $this->press_model->totalRows();
		$config['per_page'] = 10;
		$this->pagination->initialize($config);

		$data['presslist'] = $this->press_model->getValuePagination($config['per_page'],$id);
		$data['page_name'] = 'press_management';
		$this->loadView('admin/press_management',$data);
	}

	public function press_insert()
	{
		$up = new upphoto();
		$submit = $_POST['submit'];
		if($submit == "上传图片"){
			if($_FILES['photo']['size']==0){
				$json['image'] = '';
			}
			else{
				$up->get_ph_tmpname($_FILES['photo']['tmp_name']);
				$up->get_ph_type($_FILES['photo']['type']);
				$up->get_ph_size($_FILES['photo']['size']);
				$up->get_ph_name($_FILES['photo']['name']);
				$json['image'] = $up->get_image_name($_FILES['photo']['name']);
				$up->save();
			}
			if($_FILES['image']['size']==0){
				$json['photo'] = '';
			}
			else{
				$up->get_ph_tmpname($_FILES['image']['tmp_name']);
				$up->get_ph_type($_FILES['image']['type']);
				$up->get_ph_size($_FILES['image']['size']);
				$up->get_ph_name($_FILES['image']['name']);
				$json['photo'] = $up->get_image_name($_FILES['image']['name']);
				$up->save();
			}
		}
		$json['filed'] = $_POST['filed'];
		$json['events'] = $_POST['events'];
		$json['date'] = $_POST['date'];
		$json['video'] = $_POST['video'];
		$json['description'] = $_POST['description'];
		$this->press_model->insertValue($json);
		redirect(ROOT_PATH.'admin/press_management');
	}

	public function press_update()
	{
		$up = new upphoto();
		$submit = $_POST['submit'];
		if($submit == "上传图片"){
			if($_FILES['photo']['size']!==0){
				$up->get_ph_tmpname($_FILES['photo']['tmp_name']);
				$up->get_ph_type($_FILES['photo']['type']);
				$up->get_ph_size($_FILES['photo']['size']);
				$up->get_ph_name($_FILES['photo']['name']);
				$json['image'] = $up->get_image_name($_FILES['photo']['name']);
				$up->save();
			}
			if($_FILES['image']['size']!==0){
				$up->get_ph_tmpname($_FILES['image']['tmp_name']);
				$up->get_ph_type($_FILES['image']['type']);
				$up->get_ph_size($_FILES['image']['size']);
				$up->get_ph_name($_FILES['image']['name']);
				$json['photo'] = $up->get_image_name($_FILES['image']['name']);
				$up->save();
			}
		}
		$json['id'] = $_POST['id'];
		$json['filed'] = $_POST['filed'];
		$json['events'] = $_POST['events'];
		$json['date'] = $_POST['date'];
		$json['video'] = $_POST['video'];
		$json['description'] = $_POST['description'];
		//$json = json_decode(file_get_contents('php://input'),true);
		$this->press_model->updateValue($json);
		redirect(ROOT_PATH.'admin/press_management');
	}

	public function press_delete()
	{
		$json = json_decode(file_get_contents('php://input'),true);
		$arr = explode(' ',$json['id']);
		foreach ($arr as $key => $value) {
			$this->press_model->deleteValue($value);
		}		
	}

	public function case_management($id=null)
	{	
		$data['page_name'] = 'case_management';
		if(is_null($id)){
			
			$data['caselist'] = $this->case_model->getValueList();
			$this->loadView('admin/case_management',$data);
		}
		else{
			$data['caselist'] = $this->case_model->getPictureList($id);
			$data['pageid'] = $id;
			$this->loadView('admin/case_picture',$data);
		}
	}

	public function case_insert()
	{
		$up = new upphoto();
		$submit = $_POST['submit'];
		if($submit == "上传图片"){
			if($_FILES['photo']['size']==0){
				redirect(ROOT_PATH.'admin/case_management');
			}
			else{
				$up->get_ph_tmpname($_FILES['photo']['tmp_name']);
				$up->get_ph_type($_FILES['photo']['type']);
				$up->get_ph_size($_FILES['photo']['size']);
				$up->get_ph_name($_FILES['photo']['name']);
				$json['image'] = $up->get_image_name($_FILES['photo']['name']);
				$up->save();
			}
		}
		$json['name'] = $_POST['name'];
		$json['type'] = implode(',',$_POST['type']);
		$json['video'] = $_POST['video'];
		$json['detail'] = $_POST['detail'];
		$this->case_model->insertValue($json);
		redirect(ROOT_PATH.'admin/case_management');
	}
	
	public function case_picture_insert($id)
	{
		$up = new upphoto();
		$submit = $_POST['submit'];
		if($submit == "上传图片"){
			if($_FILES['photo']['size']==0){
				redirect(ROOT_PATH.'admin/case_management/'.$id);
			}
			else{
				$up->get_ph_tmpname($_FILES['photo']['tmp_name']);
				$up->get_ph_type($_FILES['photo']['type']);
				$up->get_ph_size($_FILES['photo']['size']);
				$up->get_ph_name($_FILES['photo']['name']);
				$json['image'] = $up->get_image_name($_FILES['photo']['name']);
				$up->save();
			}
		}
		$json['case_id'] = $id;
		$this->case_model->insertPictureValue($json);
		redirect(ROOT_PATH.'admin/case_management/'.$id);
	}
	
	public function case_picture_update($id)
	{
		$up = new upphoto();
		$submit = $_POST['submit'];
		if($submit == "上传图片"){
			if($_FILES['photo']['size']!==0){
				$up->get_ph_tmpname($_FILES['photo']['tmp_name']);
				$up->get_ph_type($_FILES['photo']['type']);
				$up->get_ph_size($_FILES['photo']['size']);
				$up->get_ph_name($_FILES['photo']['name']);
				$json['image'] = $up->get_image_name($_FILES['photo']['name']);
				$up->save();
			}
		}
		$json['id'] = $_POST['id'];
		$json['case_id'] = $id;
		//$json = json_decode(file_get_contents('php://input'),true);
		$this->case_model->updatePictureValue($json);
		redirect(ROOT_PATH.'admin/case_management/'.$id);
	}
	
	public function case_picture_delete()
	{
		$json = json_decode(file_get_contents('php://input'),true);
		$arr = explode(' ',$json['id']);
		foreach ($arr as $key => $value) {
			$this->case_model->deletePictureValue($value);
		}		
	}

	public function case_update()
	{
		$up = new upphoto();
		$submit = $_POST['submit'];
		if($submit == "上传图片"){
			if($_FILES['photo']['size']!==0){
				$up->get_ph_tmpname($_FILES['photo']['tmp_name']);
				$up->get_ph_type($_FILES['photo']['type']);
				$up->get_ph_size($_FILES['photo']['size']);
				$up->get_ph_name($_FILES['photo']['name']);
				$json['image'] = $up->get_image_name($_FILES['photo']['name']);
				$up->save();
			}
		}
		$json['id'] = $_POST['id'];
		$json['name'] = $_POST['name'];
		$json['type'] = implode(',',$_POST['type']);
		$json['video'] = $_POST['video'];
		$json['detail'] = $_POST['detail'];
		//$json = json_decode(file_get_contents('php://input'),true);
		$this->case_model->updateValue($json);
		redirect(ROOT_PATH.'admin/case_management/');
	}

	public function case_delete()
	{
		$json = json_decode(file_get_contents('php://input'),true);
		$arr = explode(' ',$json['id']);
		foreach ($arr as $key => $value) {
			$this->case_model->deleteValue($value);
		}		
	}

	public function howwedo_management($id=0)
	{	
		$this->load->library('pagination');
		$config['base_url'] = ROOT_PATH.'admin/howwedo_management/';
		$config['total_rows'] = $this->howwedo_model->totalRows();
		$config['per_page'] = 10;
		$this->pagination->initialize($config);

		$data['howwedolist'] = $this->howwedo_model->getValuePagination($config['per_page'],$id);
		$data['page_name'] = 'howwedo_management';
		$this->loadView('admin/howwedo_management',$data);
	}

	public function howwedo_insert()
	{
		$up = new upphoto();
		$submit = $_POST['submit'];
		if($submit == "上传图片"){
			if($_FILES['photo']['size']==0){
				redirect(ROOT_PATH.'admin/howwedo_management');
			}
			else{
				$up->get_ph_tmpname($_FILES['photo']['tmp_name']);
				$up->get_ph_type($_FILES['photo']['type']);
				$up->get_ph_size($_FILES['photo']['size']);
				$up->get_ph_name($_FILES['photo']['name']);
				$json['image'] = $up->get_image_name($_FILES['photo']['name']);
				$up->save();
			}
		}
		$json['filed'] = $_POST['filed'];
		$json['description'] = $_POST['description'];
		$json['video'] = $_POST['video'];
		$this->howwedo_model->insertValue($json);
		redirect(ROOT_PATH.'admin/howwedo_management');
	}

	public function howwedo_update()
	{
		$up = new upphoto();
		$submit = $_POST['submit'];
		if($submit == "上传图片"){
			if($_FILES['photo']['size']!==0){
				$up->get_ph_tmpname($_FILES['photo']['tmp_name']);
				$up->get_ph_type($_FILES['photo']['type']);
				$up->get_ph_size($_FILES['photo']['size']);
				$up->get_ph_name($_FILES['photo']['name']);
				$json['image'] = $up->get_image_name($_FILES['photo']['name']);
				$up->save();
			}
		}
		$json['id'] = $_POST['id'];
		$json['filed'] = $_POST['filed'];
		$json['video'] = $_POST['video'];
		$json['description'] = $_POST['description'];
		//$json = json_decode(file_get_contents('php://input'),true);
		$this->howwedo_model->updateValue($json);
		redirect(ROOT_PATH.'admin/howwedo_management');
	}

	public function howwedo_delete()
	{
		$json = json_decode(file_get_contents('php://input'),true);
		$arr = explode(' ',$json['id']);
		foreach ($arr as $key => $value) {
			$this->howwedo_model->deleteValue($value);
		}		
	}

	public function eggsheller_management($id=0)
	{	
		$this->load->library('pagination');
		$config['base_url'] = ROOT_PATH.'admin/eggsheller_management/';
		$config['total_rows'] = $this->eggsheller_model->totalRows();
		$config['per_page'] = 10;
		$this->pagination->initialize($config);

		$data['eggshellerlist'] = $this->eggsheller_model->getValuePagination($config['per_page'],$id);
		$data['page_name'] = 'eggsheller';
		$this->loadView('admin/eggsheller_management',$data);
	}

	public function eggsheller_insert()
	{
		$up = new upphoto();
		$submit = $_POST['submit'];
		if($submit == "上传图片"){
			if($_FILES['photo']['size']==0){
				redirect(ROOT_PATH.'admin/eggsheller_management');
			}
			else{
				$up->get_ph_tmpname($_FILES['photo']['tmp_name']);
				$up->get_ph_type($_FILES['photo']['type']);
				$up->get_ph_size($_FILES['photo']['size']);
				$up->get_ph_name($_FILES['photo']['name']);
				$json['photo'] = $up->get_image_name($_FILES['photo']['name']);
				$up->save();
			}
			if($_FILES['image']['size']==0){
				redirect(ROOT_PATH.'admin/eggsheller_management');
			}
			else{
				$up->get_ph_tmpname($_FILES['image']['tmp_name']);
				$up->get_ph_type($_FILES['image']['type']);
				$up->get_ph_size($_FILES['image']['size']);
				$up->get_ph_name($_FILES['image']['name']);
				$json['image'] = $up->get_image_name($_FILES['image']['name']);
				$up->save();
			}
		}
		$json['name'] = $_POST['name'];
		$json['pinterest'] = $_POST['pinterest'];
		$json['content'] = $_POST['content'];
		$json['filed'] = $_POST['filed'];
		$json['pinterest'] = $_POST['pinterest'];
		$json['email'] = $_POST['email'];
		$json['interview'] = $_POST['interview'];
		$this->eggsheller_model->insertValue($json);
		redirect(ROOT_PATH.'admin/eggsheller_management');
	}

	public function eggsheller_update()
	{
		$up = new upphoto();
		$submit = $_POST['submit'];
		if($submit == "上传图片"){
			if($_FILES['photo']['size']!==0){
				$up->get_ph_tmpname($_FILES['photo']['tmp_name']);
				$up->get_ph_type($_FILES['photo']['type']);
				$up->get_ph_size($_FILES['photo']['size']);
				$up->get_ph_name($_FILES['photo']['name']);
				$json['photo'] = $up->get_image_name($_FILES['photo']['name']);
				$up->save();
			}
			if($_FILES['image']['size']!==0){
				$up->get_ph_tmpname($_FILES['image']['tmp_name']);
				$up->get_ph_type($_FILES['image']['type']);
				$up->get_ph_size($_FILES['image']['size']);
				$up->get_ph_name($_FILES['image']['name']);
				$json['image'] = $up->get_image_name($_FILES['image']['name']);
				$up->save();
			}
		}
		$json['id'] = $_POST['id'];
		$json['name'] = $_POST['name'];
		$json['pinterest'] = $_POST['pinterest'];
		$json['content'] = $_POST['content'];
		$json['pinterest'] = $_POST['pinterest'];
		$json['filed'] = $_POST['filed'];
		$json['email'] = $_POST['email'];
		$json['interview'] = $_POST['interview'];
		//$json = json_decode(file_get_contents('php://input'),true);
		$this->eggsheller_model->updateValue($json);
		redirect(ROOT_PATH.'admin/eggsheller_management');
	}

	public function eggsheller_delete()
	{
		$json = json_decode(file_get_contents('php://input'),true);
		$arr = explode(' ',$json['id']);
		foreach ($arr as $key => $value) {
			$this->eggsheller_model->deleteValue($value);
		}		
	}

	public function eggsheller_detail($id)
	{
		$data['eggsheller_detail'] = $this->eggsheller_model->getDetailByID($id);
		$data['page_name'] = 'eggsheller';
		$this->loadView('admin/eggsheller_detail',$data);
	}

	public function eggsheller_post()
	{
		$json = json_decode(file_get_contents('php://input'),true);
		$id = $json['id'];
		$detail = trim($json['detail']);
		$this->eggsheller_model->updateDetail($id,$detail);
	}
	
	public function picture_management($id=0)
	{	
		$this->load->library('pagination');
		$config['base_url'] = ROOT_PATH.'admin/picture_management/';
		$config['total_rows'] = $this->picture_model->totalRows();
		$config['per_page'] = 10;
		$this->pagination->initialize($config);

		$data['picturelist'] = $this->picture_model->getValuePagination($config['per_page'],$id);
		$data['page_name'] = 'picture_management';
		$this->loadView('admin/oneminute_management',$data);
	}

	public function picture_insert()
	{
		$up = new upphoto();
		$submit = $_POST['submit'];
		if($submit == "上传图片"){
			if($_FILES['photo']['size']==0){
				redirect(ROOT_PATH.'admin/picture_management');
			}
			else{
				$up->get_ph_tmpname($_FILES['photo']['tmp_name']);
				$up->get_ph_type($_FILES['photo']['type']);
				$up->get_ph_size($_FILES['photo']['size']);
				$up->get_ph_name($_FILES['photo']['name']);
				$json['images'] = $up->get_image_name($_FILES['photo']['name']);
				$up->save();
			}
		}
		$json['filed'] = $_POST['filed'];
		$json['description'] = $_POST['description'];
		$this->picture_model->insertValue($json);
		redirect(ROOT_PATH.'admin/picture_management');
	}

	public function picture_update()
	{
		$up = new upphoto();
		$submit = $_POST['submit'];
		if($submit == "上传图片"){
			if($_FILES['photo']['size']!==0){
				$up->get_ph_tmpname($_FILES['photo']['tmp_name']);
				$up->get_ph_type($_FILES['photo']['type']);
				$up->get_ph_size($_FILES['photo']['size']);
				$up->get_ph_name($_FILES['photo']['name']);
				$json['images'] = $up->get_image_name($_FILES['photo']['name']);
				$up->save();
			}
		}
		$json['id'] = $_POST['id'];
		$json['filed'] = $_POST['filed'];
		$json['description'] = $_POST['description'];
		//$json = json_decode(file_get_contents('php://input'),true);
		$this->picture_model->updateValue($json);
		redirect(ROOT_PATH.'admin/picture_management');
	}
	
	public function picture_delete()
	{
		$json = json_decode(file_get_contents('php://input'),true);
		$arr = explode(' ',$json['id']);
		foreach ($arr as $key => $value) {
			$this->picture_model->deleteValue($value);
		}		
	}
	
	public function social_posibility($id=0)
	{	
		$this->load->library('pagination');
		$config['base_url'] = ROOT_PATH.'admin/social_posibility/';
		$config['total_rows'] = $this->social_model->totalRows();
		$config['per_page'] = 10;
		$this->pagination->initialize($config);

		$data['sociallist'] = $this->social_model->getValuePagination($config['per_page'],$id);
		$data['page_name'] = 'social_posibility';
		$this->loadView('admin/social_posibility',$data);
	}

	public function social_insert()
	{
		$up = new upphoto();
		$submit = $_POST['submit'];
		if($submit == "上传图片"){
			if($_FILES['photo']['size']==0){
				redirect(ROOT_PATH.'admin/social_posibility');
			}
			else{
				$up->get_ph_tmpname($_FILES['photo']['tmp_name']);
				$up->get_ph_type($_FILES['photo']['type']);
				$up->get_ph_size($_FILES['photo']['size']);
				$up->get_ph_name($_FILES['photo']['name']);
				$json['image'] = $up->get_image_name($_FILES['photo']['name']);
				$up->save();
			}
		}
		$json['date'] = $_POST['date'];
		$json['description'] = $_POST['description'];
		$this->social_model->insertValue($json);
		redirect(ROOT_PATH.'admin/social_posibility');
	}

	public function social_update()
	{
		$up = new upphoto();
		$submit = $_POST['submit'];
		if($submit == "上传图片"){
			if($_FILES['photo']['size']!==0){
				$up->get_ph_tmpname($_FILES['photo']['tmp_name']);
				$up->get_ph_type($_FILES['photo']['type']);
				$up->get_ph_size($_FILES['photo']['size']);
				$up->get_ph_name($_FILES['photo']['name']);
				$json['image'] = $up->get_image_name($_FILES['photo']['name']);
				$up->save();
			}
		}
		$json['id'] = $_POST['id'];
		$json['date'] = $_POST['date'];
		$json['description'] = $_POST['description'];
		//$json = json_decode(file_get_contents('php://input'),true);
		$this->social_model->updateValue($json);
		redirect(ROOT_PATH.'admin/social_posibility');
	}

	public function social_delete()
	{
		$json = json_decode(file_get_contents('php://input'),true);
		$arr = explode(' ',$json['id']);
		foreach ($arr as $key => $value) {
			$this->social_model->deleteValue($value);
		}		
	}


	


	protected function loadView($view='/admin/admin',$data){
		$data['username']=$this->session->userdata['uname'];
		$this->load->view('admin/header',$data);
		$this->load->view($view,$data);
		$this->load->view('admin/footer',$data);
	} 
}

class upphoto{
		public $previewsize=0.125;   //预览图片比例
		public $preview=0;   //是否生成预览，是为1，否为0
		public $datetime;   //随机数
		public $ph_name;   //上传图片文件名
		public $ph_tmp_name;    //图片临时文件名
		public $ph_path='./upload/'; 
		public $ph_type;   //图片类型
		public $ph_size;   //图片大小
		public $imgsize;   //上传图片尺寸，用于判断显示比例
		public $al_ph_type=array('image/jpg','image/jpeg','image/png','image/pjpeg','image/gif','image/bmp','image/x-png');    //允许上传图片类型
		public $al_ph_size=1000000;   //允许上传文件大小
		function __construct(){
			$this->set_datatime();
		}
		function set_datatime(){
			$this->datetime=date("YmdHis");
		}
		//获取文件类型
		function get_ph_type($phtype){
			$this->ph_type=$phtype;
		}
		//获取文件大小
		function get_ph_size($phsize){
			$this->ph_size=$phsize."<br>";
		}
		//获取上传临时文件名
		function get_ph_tmpname($tmp_name){
			$this->ph_tmp_name=$tmp_name;
			$this->imgsize=getimagesize($tmp_name);
		}
		//获取原文件名
		function get_ph_name($phname){
			$this->flag = rand(1,100);
			$this->ph_name=$this->ph_path.$this->datetime.$this->flag.strrchr($phname,"."); //strrchr获取文件的点最后一次出现的位置
			//$this->ph_name=$this->datetime.strrchr($phname,"."); //strrchr获取文件的点最后一次出现的位置
			return $this->ph_name;
		}
		//获取文件名
		function get_image_name($phname){
			$this->image_name=$this->datetime.$this->flag.strrchr($phname,"."); //strrchr获取文件的点最后一次出现的位置
			//$this->ph_name=$this->datetime.strrchr($phname,"."); //strrchr获取文件的点最后一次出现的位置
			return $this->image_name;
		}
		// 判断上传文件存放目录
		function check_path(){
			if(!file_exists($this->ph_path)){
				mkdir($this->ph_path);
			}
		}
		//判断上传文件是否超过允许大小
		function check_size(){
			if($this->ph_size>$this->al_ph_size){
				$this->showerror("上传图片超过2000KB");
			}
		}
		//判断文件类型
		function check_type(){
			if(!in_array($this->ph_type,$this->al_ph_type)){
				$this->showerror("上传图片类型错误");
			}
		}
		//上传图片
		function up_photo(){
			if(!move_uploaded_file($this->ph_tmp_name,$this->ph_name)){
				$this->showerror("上传文件出错");
			}
		}
		//图片预览
		function showphoto(){
			if($this->preview==1){
				if($this->imgsize[0]>2000){
					$this->imgsize[0]=$this->imgsize[0]*$this->previewsize;
					$this->imgsize[1]=$this->imgsize[1]*$this->previewsize;
				}
				echo("<img src=\"{$this->ph_name}\" width=\"{$this->imgsize['0']}\" height=\"{$this->imgsize['1']}\">");
			}
		}
		//错误提示
		function showerror($errorstr){
			echo "<script language=javascript>alert('$errorstr');location='javascript:history.go(-1);';</script>";
			exit();
		}
		function save(){
			$this->check_path();
			$this->check_size();
			$this->check_type();
			$this->up_photo();
			$this->showphoto();
		}
	}
