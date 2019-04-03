<?php
    class M_login extends CI_Model{
        public function getUser($where){
            return $this->db->get_where('user',$where)->num_rows();
        }
    }
?>