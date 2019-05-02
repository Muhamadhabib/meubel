<?php
    class Grafik extends CI_Controller{
        public function __construct()
        {
            parent::__construct();
            $this->load->model('M_admin');
            $this->load->model('M_penjualan');
            $this->load->model('M_kredit');
        }
        public function index(){
            $data['brg'] = $this->M_admin->get_barang();
            $data['trs'] = $this->M_penjualan->get_trs3();
            $data['kre'] = $this->M_kredit->get_kre2();
            $this->load->view('header');
            $this->load->view('grafik',$data);
            $this->load->view('footer');
        }
    }
?>