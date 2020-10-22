<?php

class Home extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function index(){
        $this->load->model('Portofolio_model');
        $data['judul'] = 'Portofolio';
        $data['portofolio'] = $this->Portofolio_model->getAllData();
        $this->load->view('part/header');
        $this->load->view('pages/index', $data);
        $this->load->view('part/footer', $data);
    }
}