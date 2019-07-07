<?php
    class Grafik extends CI_Controller{
        public function __construct()
        {
            parent::__construct();
            $this->load->model('M_admin');
            $this->load->model('M_penjualan');
            $this->load->model('M_kredit');
            $this->load->model('M_grafik');
            $this->load->model('M_angsur');
        }
        public function index(){
            // $this->input->get('tahun');
            // $tahun = 2019;
            $data['brg'] = $this->M_admin->get_barang3();
            // $data['trs'] = $this->M_penjualan->get_trs3();
            // $data['kre'] = $this->M_kredit->get_kre2();
            // for($m = 1; $m <= 12; $m++){
            //     $data['trs'] = $this->M_grafik->get_data_trans($m, $tahun);
            //     $data['kre'] = $this->M_grafik->get_data_kredit($m, $tahun);
            // }
            $this->load->view('header');
            $this->load->view('grafik',$data);
            $this->load->view('footer');
        }
    }
?>