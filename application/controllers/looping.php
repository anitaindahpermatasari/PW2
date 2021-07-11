<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Looping extends CI_Controller {

	public function index()
    {
        $data['title']= "Hallo World";
        $data['nama_buah']= array("Semangka","Mangga","Jeruk","Melon");
        $data['message']="Pesan saya adalah";
	
	  $this->load->view('looping',$data);
    }
	
}
