<?php if(! defined('BASEPATH'))exit('No direct script access allowed');

class subGroupProduct extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
        $this->load->model('subGroupProduct_model');
	}

	public function index()
	{
	  $data['data'] = $this->subGroupProduct_model->getGroup();
	  json_encode($data);
	  $this->load->view('header');
	  $this->load->view('menu');
	  $this->load->view('subGroupProduct_add', $data);
	  $this->load->view('footer');
	}
}
?>
