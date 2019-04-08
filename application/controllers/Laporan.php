<?php 
    class Laporan extends CI_Controller{
        public function __construct()
        {
            parent::__construct();
        }
        public function index(){
            $this->load->view('header');
            $this->load->view('laporan');
            $this->load->view('footer');
        }
    }
?>