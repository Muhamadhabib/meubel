<?php
    class M_angsur extends CI_Model{
        public function getUser($where){
            return $this->db->get_where('user',$where)->num_rows();
        }
        public function get_plg(){
            $this->db->select('*');
            $this->db->from('kredit');
            // $this->db->where('status !=', 'lunas');
            $this->db->join('pelanggan', 'pelanggan.id_plg = kredit.id_plg');
            return $this->db->get()->result_array();
        }
        public function get_plg2(){
            $this->db->select('*');
            $this->db->from('angsuran');
            $this->db->order_by('ang_tgl', 'ASC');
            $this->db->join('pelanggan', 'pelanggan.id_plg = angsuran.plg');
            return $this->db->get()->result_array();
        }
        public function pilih(){
            $cari = $this->input->post('pilih');
            $this->db->like('id_plg',$cari);
            $this->db->select('*');
            $this->db->from('angsuran');
            //$this->db->where('plg',$cari);
            $this->db->join('pelanggan', 'pelanggan.id_plg = angsuran.plg');
            return $this->db->get()->result_array();
            // $this->db->where('id_plg', $cari);
            // return $this->db->get('angsuran')->result_array();
        }
        public function ubah_angsur($id, $data){
            $this->db->where('id_ang', $id);
            $this->db->update('angsuran', $data);
        }
        public function ubah_kredit($id, $data2){
            $this->db->where('id_plg', $id);
            $this->db->update('kredit', $data2);
        }

        public function get_rugi($bulan){
            return $this->db->query("SELECT SUM(CASE WHEN MONTH(tempo1) = $bulan THEN ang_kre1 WHEN MONTH(tempo2) = $bulan THEN ang_kre2 WHEN MONTH(tempo3) = $bulan THEN ang_kre3 WHEN MONTH(tempo4) = $bulan THEN ang_kre4 WHEN MONTH(tempo5) = $bulan THEN ang_kre5 WHEN MONTH(tempo1) = $bulan THEN ang_kre6 END)AS total_bulan_ini FROM angsuran")->row()->total_bulan_ini;
        }

        public function get_total_tagihan_perbulan($bulan){
            return $this->db->query("SELECT SUM(CASE WHEN MONTH(tempo1) = $bulan THEN per_bln WHEN MONTH(tempo2) = $bulan THEN per_bln WHEN MONTH(tempo3) = $bulan THEN per_bln WHEN MONTH(tempo4) = $bulan THEN per_bln WHEN MONTH(tempo5) = $bulan THEN per_bln WHEN MONTH(tempo1) = $bulan THEN per_bln END)AS total_tagihan FROM angsuran")->row()->total_tagihan;
        }
    }
?>