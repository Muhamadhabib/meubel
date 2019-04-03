<?php
    class Login extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->model("M_login");
        }
        public function index(){
            $this->load->view("login/login_h");
            $this->load->view("login/login_v");
            $this->load->view("login/login_f");
        }
        public function proses(){
            $user = $this->input->post('username');
            $pass = $this->input->post('password');
            $where = array(
                'nm_user'   => $user,
                'pass_user' => md5($pass)
            );
            $cek = $this->M_login->getUser($where);
            if($cek > 0 ){
                $data_session = array(
                    'nama'   => $user,
                    'status' => 'login'
                );
                $this->session->set_userdata($data_session);
                redirect(base_url('home'));
            }else{
                $this->session->set_flashdata('login','Maaf username atau password<br>anda kurang tepat');
                redirect('login');
            }
        }
        public function logout(){
            $this->session->sess_destroy();
            redirect(base_url('login'));
        }
    }
?>  