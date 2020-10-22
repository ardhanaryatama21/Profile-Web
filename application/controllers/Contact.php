<?php

class Contact extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function contact(){
        $this->load->model('Portofolio_model');
        $data['judul'] = 'Contact Us';
        $data['portofolio'] = $this->Portofolio_model->getAllData();
        $this->load->view('part/header-contact', $data);
        $this->load->view('pages/contact');
        $this->load->view('part/footer', $data);
    }
}