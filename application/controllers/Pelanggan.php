<?php

class Pelanggan extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('M_admin');
    }

    public function index(){
        $data['plg'] = $this->M_admin->get_plg();
        $this->load->view('header');
        $this->load->view('pelanggan_v',$data);
        $this->load->view('footer');
    }

    public function tambah(){
        $this->load->view('header');
        $this->load->view('tambahplg_v');
        $this->load->view('footer');
    }
    public function ubah($id){
        $data['plg'] = $this->M_admin->get_IdPlg($id);
        $this->load->view('header');
        $this->load->view('ubahplg_v', $data);
        $this->load->view('footer');
    }

    public function input(){
        $data = [
            'nm_plg'  => $this->input->post('nama'),
            'no_hp' => $this->input->post('no_hp'),
            'alamat' => $this->input->post('almt')
        ];
        $this->M_admin->input_plg($data);
        $this->session->set_flashdata('input','Ditambahkan');
        redirect('pelanggan');
    }

    public function edit($id){
        $data = [
            'nm_plg'  => $this->input->post('nama'),
            'no_hp' => $this->input->post('no_hp'),
            'alamat' => $this->input->post('almt')
        ];

        $this->M_admin->ubah_plg($id, $data);
        redirect(pelanggan);
    }

    public function hapus($id){
        $this->M_admin->delete_plg($id);
        $this->session->set_flashdata('hapus','Dihapus');
        redirect(pelanggan);
    }

}

?>