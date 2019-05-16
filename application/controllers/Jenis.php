<?php
    class Jenis extends CI_Controller{
        public function __construct()
        {
            parent::__construct();
            $this->load->model('M_admin');
        
        }
        public function index(){
            $data['jns'] = $this->M_admin->get_jenis();
            $this->load->view("header");
            $this->load->view("jenis_v",$data);
            $this->load->view("footer");
        }
        public function tambah(){
            $data['data'] = $this->M_admin->get_jenis();
            $this->load->view("header");
            $this->load->view("tambahjns",$data);
            $this->load->view("footer");
        }
        //dari halaman tampilan barang ke halaman edit

        public function input(){
            $data = [
                'nama_jenis'  => $this->input->post('nama_jenis'),
            ];
            if($this->M_admin->cek_jenis($this->input->post('nama_jenis'))){
                $this->session->set_flashdata('cek','Sudah Ada');
            }else{
                $this->M_admin->input_jenis($data);
                $this->session->set_flashdata('input','Ditambahkan');
            }
            redirect('jenis');
        }
        public function ubah($id){
            $data['data'] = $this->M_admin->get_IdJenis($id);
            $this->load->view("header");
            $this->load->view("ubahjns",$data);
            $this->load->view("footer");
        }
        public function edit($id){
            $data = [
                'nama_jenis'  => $this->input->post('nama_jenis'),
            ];

            $this->M_admin->ubah_jenis($id, $data);
            redirect('jenis');
        }

        public function hapus($id){
            $this->M_admin->delete_jenis($id);
            $this->session->set_flashdata('hapus','Dihapus');
            redirect(jenis);
        }
    }
?>