<?php
    class Home extends CI_Controller{
        public function __construct()
        {
            parent::__construct();
        
        }
        public function index(){
            $this->load->view("header");
            $this->load->view("home");
            $this->load->view("footer");
        }
        public function penjualan(){
            $this->load->helper('form');

            $this->load->view("header");
            $this->load->view("penjualan");
            $this->load->view("footer");
        }
        function update_cart(){
            
        }
    }
?>