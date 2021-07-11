<?php if(! defined('BASEPATH'))exit('No direct script access allowed');

class layout extends CI_Controller {
    public function __construct()
    {
      parent::__construct();
    }

    public function index()
    {
      $this->load->view('header');
      $this->load->view('menu');
      $this->load->view('home');
      $this->load->view('footer');
    }
}

?>
