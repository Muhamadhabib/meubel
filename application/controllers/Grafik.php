<?php
    class Grafik extends CI_Controller{
        public function __construct()
        {
            parent::__construct();
            $this->load->model('M_admin');
        }
        public function index(){
            $data['brg'] = $this->M_admin->get_barang();
            $this->load->view('header');
            $this->load->view('grafik',$data);
            $this->load->view('footer');
        }
    }
?>