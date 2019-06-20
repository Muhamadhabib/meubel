<?php 
    class Angsuran extends CI_Controller{
        public function __construct()
        {
            parent::__construct();
            $this->load->model("M_angsur");
        }
        public function index(){
            $data['plg'] = $this->M_angsur->get_plg();
            $data['data']= $this->M_angsur->get_plg2();
            if ($this->input->post('pilih')) {
                $data['ang'] = $this->M_angsur->pilih();
            }
            $this->load->view("header");
            $this->load->view("angsur_v",$data);
            $this->load->view("footer");
        }
        public function update(){
            $id = $this->input->post('id');
            $idplg = $this->input->post('idplg');
            $ang1 = $this->input->post('ang_satu');
            $ang2 = $this->input->post('ang_dua');
            $ang3 = $this->input->post('ang_tiga');
            $ang4 = $this->input->post('ang_empat');
            $ang5 = $this->input->post('ang_lima');
            $ang6 = $this->input->post('ang_enam');
            $tagihan = $this->input->post('tagihan');
            $bayar = $tagihan-$ang1-$ang2-$ang3-$ang4-$ang5-$ang6;
            if($bayar==0){
                $data = array(
                    'ang_kre1' => $ang1,
                    'ang_kre2' => $ang2,
                    'ang_kre3' => $ang3,
                    'ang_kre4' => $ang4,
                    'ang_kre5' => $ang5,
                    'ang_kre6' => $ang6,
                    'status'=> "lunas",
                    'ang_tgl'  => date('y/m/d h:i:s'),
                );
                $kredit = array(
                    'status' => 'lunas',
                );
                $this->M_angsur->ubah_kredit($idplg,$kredit);
                $this->session->set_flashdata('input','Disimpan'); 
            }else if($bayar<0){
                $data = array(
                    'ang_kre1' => null,
                    'ang_kre2' => null,
                    'ang_kre3' => null,
                    'ang_kre4' => null,
                    'ang_kre5' => null,
                    'ang_kre6' => null,
                    'ang_tgl'  => date('y/m/d h:i:s'),
                );
                $this->session->set_flashdata('gagal','Pembayaran gagal');
            }
            else{
                $data = array(
                    'ang_kre1' => $ang1,
                    'ang_kre2' => $ang2,
                    'ang_kre3' => $ang3,
                    'ang_kre4' => $ang4,
                    'ang_kre5' => $ang5,
                    'ang_kre6' => $ang6,
                    'ang_tgl'  => date('y/m/d h:i:s'),
                );
                $this->session->set_flashdata('input','Disimpan'); 
            }
            // $data = array(
            //     'ang_kre1' => $ang1,
            //     'ang_kre2' => $ang2,
            //     'ang_kre3' => $ang3,
            //     'ang_kre4' => $ang4,
            //     'ang_kre5' => $ang5,
            //     'ang_kre6' => $ang6,
            //     'status'=> $status,
            // );
            //echo $bayar;
            $this->M_angsur->ubah_angsur($id,$data);
            //$this->M_angsur->ubah_kredit($idplg,$kredit);
            
            redirect('angsuran');
        }
    }
?>