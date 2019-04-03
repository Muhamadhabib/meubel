<?php
    class M_admin extends CI_model{
        public function input($data){
            $this->db->insert('barang',$data);
        }
        public function get_jenis(){
            return $this->db->get('jenis')->result_array();
        }
        public function get_jenis2(){
            $this->db->select('*');
            $this->db->from('barang');
            $this->db->join('jenis', 'jenis.id_jenis = barang.id_jenis');
            return $this->db->get()->result_array();
        }
        public function get_barang(){
            return $this->db->get('barang')->result_array();
        }
        public function ubah_barang($id, $data){
            $this->db->where('id_brg', $id);
            $this->db->update('barang', $data);
        }
        public function delete_barang($id){
            $this->db->where('id_brg',$id);
            $this->db->delete('barang');
        }
        public function get_IdBarang($id){
            $this->db->where('id_brg', $id);
            return $this->db->get('barang')->result_array();
        }

    }
?>