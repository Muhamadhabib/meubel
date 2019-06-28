<?php
    class Penjualan extends CI_Controller{
        public function __construct()
        {
            parent::__construct();
            $this->load->library('cart');
            $this->load->model("M_penjualan");
            $this->load->model("M_admin");
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
                'stock' => $this->input->post('stok'),
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
            $this->load->model("M_admin");
            date_default_timezone_set('Asia/Jakarta');
            $cart = $this->cart->contents();
            
            foreach($cart as $z){
                $dat = array(
                    'id_plg' => $this->input->post('plg'),
                    'id_brg' => $z['id'],
                    'jml_brg'=> $z['qty'],
                    'sub_tot'=> $z['subtotal'],
                );
                $stok = $this->M_admin->get_stok($dat['id_brg']);
                $jml = $dat['jml_brg'];
                $stok = $stok - $jml;
                $update = array(
                    'stok_brg' => $stok,
                );
                $this->M_penjualan->update_stok($dat['id_brg'], $update);
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
            $this->cart->destroy();
            redirect('penjualan');
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
            $bln = $this->input->post('bln');
            $kre = $this->input->post('hrg')-$this->input->post('dp');
            $data = array(
                'id_plg'   => $this->input->post('plg'),
                'tot_brg'  => $this->input->post('brg'),
                'tot_hrg'  => $this->input->post('hrg'),
                'dp_hrg'   => $this->input->post('dp'),
                'bln_kre'  => $this->input->post('bln'),
                'sisa_kre' => ($this->input->post('hrg')-$this->input->post('dp')),
                'tgl_kre'  => date('y/m/d h:i:s'),
                'status'   => "belum lunas",
            );
            $ang = array(
                'plg'   => $this->input->post('plg'),
                'ang_bln'  => $bln,
                'tagihan'  => ($this->input->post('hrg')-$this->input->post('dp')),
                'ang_tgl'  => date('y/m/d h:i:s'),
                'status'   => "belum lunas",
            );
            if(!$this->M_penjualan->cek_kre($this->input->post('plg'))){
                $this->M_penjualan->input_kre($data);
                $this->M_penjualan->input_ang($ang);
                $this->session->set_flashdata('input','Disimpan'); 
            }else{
                $this->session->set_flashdata('hapus','Sudah ada');
            }
            $this->cart->destroy();
            redirect('penjualan');
        }
        public function transaksi(){
            $data['judul'] = 'Data Transaksi';
            $data['trs'] = $this->M_penjualan->get_trs();
            $this->load->view("header");
            $this->load->view("data_pjl",$data);
            $this->load->view("footer");
        }
        //hapus transaksi
        public function del_trans($id){
            $this->M_penjualan->del_trans($id);
            $this->session->set_flashdata('hapus','Dihapus');
            redirect('transaksi');
        }

        public function pesanan(){
            $data['judul'] = 'Data Pesanan';
            $data['trs'] = $this->M_penjualan->get_psn();
            $this->load->view("header");
            $this->load->view("data_psn",$data);
            $this->load->view("footer");
        }
        // hapus pesanan
        public function del_pesan($id){
            $this->M_penjualan->del_pesanan($id);
            $this->session->set_flashdata('hapus','Dihapus');
            redirect('/penjualan/pesanan');
        }  
    }
?>