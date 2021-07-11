<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Lingkaran extends CI_Controller {
    public function index( ) {
        //meload model Lingkaran_model
        $this->load->model('Lingkaran_model');

        //menangkap model yang telah dimuat oleh controller
        $model = $this->Lingkaran_model;

        //menentukan nilai jari jari
        $model->set_jarijari(3);

        //memuat view dan mengirimkan $model ke view
        $this->load->view ('lingkaran_view', array('model' => $model));
    }
}

?>
