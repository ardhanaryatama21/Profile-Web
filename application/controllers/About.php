<?php

class About extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function about(){
        $this->load->model('Portofolio_model');
        $data['judul'] = 'About Us';
        $data['portofolio'] = $this->Portofolio_model->getAllData();
        $this->load->view('part/header-about', $data);
        $this->load->view('pages/about');
        $this->load->view('part/footer', $data);
    }
}