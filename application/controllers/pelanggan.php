<?php
    class Pelanggan extends CI_Controller{
        public function __construct()
        {
            parent::__construct();
            $this->load->model('M_admin');
        
        }
        public function index(){
            $data['brg'] = $this->M_admin->get_jenis2();
            $this->load->view("header");
        
            $this->load->view("footer");
        }

    }
?>