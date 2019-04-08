<?php 
    class Kredit extends CI_Controller{
        public function __construct()
        {
            parent::__construct();
            $this->load->model("M_kredit");
        }
        public function index(){
            $data['judul'] = 'Data Transaksi';
            $data['kre'] = $this->M_kredit->get_kre();
            $this->load->view("header");
            $this->load->view("kredit",$data);
            $this->load->view("footer");
        }
        public function pesanan(){
            $data['judul'] = 'Data Pesanan';
            $data['trs'] = $this->M_kredit->get_psn();
            $this->load->view("header");
            $this->load->view("data_kre",$data);
            $this->load->view("footer");
        }
    }
?>