<?php

class Portofolio_model extends CI_model{
    public function getAllData(){
        return $this->db->get('data_pribadi')->result_array();
    }
}