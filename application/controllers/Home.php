<?php
    class Home extends CI_Controller{
        public function __construct()
        {
            parent::__construct();
        }
        public function index(){
            $data['kredit'] = $this->db->get('kredit')->num_rows();
            $data['tunai'] = $this->db->get('trans')->num_rows();
            $data['brg'] = $this->db->get('barang')->num_rows();
            $data['plg'] = $this->db->get('pelanggan')->num_rows();
            $this->load->view("header");
            $this->load->view("home",$data);
            $this->load->view("footer");
        }
    }
?>