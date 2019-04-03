<?php
    class Penjualan extends CI_Controller{
        public function __construct()
        {
            parent::__construct();
        }
        public function index(){
            $this->load->view("header");
            $this->load->view("penjualan_v");
            $this->load->view("footer");
        }
    }
?>