<?php
    class Barang extends CI_Controller{
        public function __construct()
        {
            parent::__construct();
            $this->load->model('M_admin');
        
        }
        public function index(){
            $data['brg'] = $this->M_admin->get_jenis2();
            $this->load->view("header");
            $this->load->view("barang",$data);
            $this->load->view("footer");
        }
        public function tambah(){
            $data['data'] = $this->M_admin->get_jenis();
            $this->load->view("header");
            $this->load->view("tambahbrg",$data);
            $this->load->view("footer");
        }
        //fungsi untuk tombol dari halaman tampilan barang menuju halaman edit
        public function ubah($id){
            $data['data'] = $this->M_admin->get_IdBarang($id);
            $data['jenis'] = $this->M_admin->get_jenis();
            $this->load->view("header");
            $this->load->view("ubahbrg",$data);
            $this->load->view("footer");
        }
        public function input(){
            $data = [
                'nama_brg'  => $this->input->post('nama'),
                'id_jenis' => $this->input->post('jenis'),
                'deskripsi' => $this->input->post('desk'),
                'stok_brg' => $this->input->post('stok'),
                'harga_beli' => $this->input->post('h_beli'),
                'harga_jual' => $this->input->post('h_jual')
            ];
            // if($this->M_admin->cek_barang($this->input->post('nama'))){
                
            //     $this->M_admin->input($data);
            //     $this->session->set_flashdata('input','Ditambahkan');
            // }else {
            //     redirect('index');
            // }
            // redirect('barang');
            if($this->M_admin->cek_barang($this->input->post('nama'))){
                $this->session->set_flashdata('cek','Sudah Ada');
            }else{
                $this->M_admin->input($data);
                $this->session->set_flashdata('input','Ditambahkan');
            }
            redirect('barang');
        }
        public function edit($id){
            $data = [
                'nama_brg'  => $this->input->post('nama'),
                'id_jenis' => $this->input->post('jenis'),
                'deskripsi' => $this->input->post('desk'),
                'stok_brg' => $this->input->post('stok'),
                'harga_beli' => $this->input->post('h_beli'),
                'harga_jual' => $this->input->post('h_jual')
            ];

            $this->M_admin->ubah_barang($id, $data);
            redirect('barang');
        }
        public function hapus($id){
            $this->M_admin->delete_barang($id);
            $this->session->set_flashdata('hapus','Dihapus');
            redirect('barang');
        }
    }
?>