<?php

class Transaksi extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('M_admin');
    }

    public function index(){
        $data['data'] = $this->M_admin->get_trans();
        $this->load->view('header');
        $this->load->view('transaksi_v', $data);
        $this->load->view('footer');
    }
}

?>