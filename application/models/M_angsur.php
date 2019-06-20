<?php
    class M_angsur extends CI_Model{
        public function getUser($where){
            return $this->db->get_where('user',$where)->num_rows();
        }
        public function get_plg(){
            $this->db->select('*');
            $this->db->from('kredit');
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
    }
?>