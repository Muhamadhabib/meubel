<?php
    class Penjualan extends CI_Controller{
        public function __construct()
        {
            parent::__construct();
            $this->load->library('cart');
            $this->load->model("M_penjualan");
        }
        public function index(){
            $data['judul'] = 'Transaksi';
            if ($this->input->post('cari')) {
                $data['brg'] = $this->M_penjualan->cari();
            }
            $data['plg'] = $this->M_penjualan->get_plg();
            $data['beli'] = $this->cart->contents();
            $this->load->view("header");
            $this->load->view("penjualan",$data);
            $this->load->view("footer");
        }
        public function add(){
            $data = array(
                'id'    => $this->input->post('id'),
                'name'  => $this->input->post('nama'),
                'price' => $this->input->post('harga'),
                'qty'   => $this->input->post('qty'),
            );
            $this->cart->insert($data);
            redirect('penjualan');
        }
        public function update(){
            $row = $this->input->post('row');
            $qty = $this->input->post('qt');
            $data = array(
                'rowid' => $row,
                'qty'   => $qty,
            );
            $this->cart->update($data);
            redirect('penjualan');
        }
        public function delete($row){
            $data = array(
                'rowid' => $row,
                'qty'   => 0,
            );
            $this->cart->update($data);
            redirect('penjualan');
        }
        public function simpan(){
            date_default_timezone_set('Asia/Jakarta');
            $cart = $this->cart->contents();
            foreach($cart as $z){
                $dat = array(
                    'id_plg' => $this->input->post('plg'),
                    'id_brg' => $z['id'],
                    'jml_brg'=> $z['qty'],
                    'sub_tot'=> $z['subtotal'],
                );
                $this->M_penjualan->input_pesan($dat);
            }
            $data = array(
                'id_plg'   => $this->input->post('plg'),
                'tot_brg'  => $this->input->post('brg'),
                'tot_hrg'  => $this->input->post('hrg'),
                'tgl_trans'=> date('y/m/d h:i:s'),
            );
            $this->M_penjualan->input_trans($data);
            $this->session->set_flashdata('input','Disimpan');
            redirect('penjualan');
            $this->cart->destroy();
        }
        public function simpan2(){
            date_default_timezone_set('Asia/Jakarta');
            $cart = $this->cart->contents();
            foreach($cart as $z){
                $dat = array(
                    'id_plg' => $this->input->post('plg'),
                    'id_brg' => $z['id'],
                    'jml_brg'=> $z['qty'],
                    'sub_tot'=> $z['subtotal'],
                );
                $this->M_penjualan->input_pesan2($dat);
            }
            $data = array(
                'id_plg'   => $this->input->post('plg'),
                'tot_brg'  => $this->input->post('brg'),
                'tot_hrg'  => $this->input->post('hrg'),
                'dp_hrg'   => $this->input->post('dp'),
                'bln_kre'  => $this->input->post('bln'),
                'ang_kre'  => 1,
                'sisa_kre' => ($this->input->post('hrg')-$this->input->post('dp')),
                'tgl_kre'  => date('y/m/d h:i:s'),
                'status'   => "belum lunas",
            );
            $this->M_penjualan->input_kre($data);
            $this->session->set_flashdata('input','Disimpan');
            redirect('penjualan');
            $this->cart->destroy();
        }
        public function transaksi(){
            $data['judul'] = 'Data Transaksi';
            $data['trs'] = $this->M_penjualan->get_trs();
            $this->load->view("header");
            $this->load->view("data_pjl",$data);
            $this->load->view("footer");
        }
        public function pesanan(){
            $data['judul'] = 'Data Pesanan';
            $data['trs'] = $this->M_penjualan->get_psn();
            $this->load->view("header");
            $this->load->view("data_psn",$data);
            $this->load->view("footer");
        }
    }
?>