<?php
    class M_grafik extends CI_Model{
        public function get_data_trans($month, $year){
            $this->db->select("*");
            $this->db->where("MONTH(tgl_trans)", $month);
            $this->db->where("YEAR(tgl_trans)", $year);
            return $this->db->get("trans")->num_rows();
        }
        public function get_data_kredit($month, $year){
            $this->db->select("*");
            $this->db->where("MONTH(tgl_kre)", $month);
            $this->db->where("YEAR(tgl_kre)", $year);
            return $this->db->get("kredit")->num_rows();
        }


    }
?>