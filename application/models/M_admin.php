<?php
    class M_admin extends CI_model{
        public function input($data){
            $this->db->insert('barang', $data);
        }

        public function input_jenis($data){
            $this->db->insert('jenis',$data);
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
        //barang
        public function get_barang(){
            return $this->db->get('barang')->result_array();
        }
        public function ubah_barang($id, $data){
            $this->db->where('id_brg', $id);
            $this->db->update('barang', $data);
        }

        public function ubah_jenis($id, $data){
            $this->db->where('id_jenis', $id);
            $this->db->update('jenis', $data);
        }

        public function delete_barang($id){
            $this->db->where('id_brg',$id);
            $this->db->delete('barang');
        }

        public function delete_jenis($id){
            $this->db->where('id_jenis',$id);
            $this->db->delete('jenis');
        }

        public function get_IdBarang($id){
            $this->db->where('id_brg', $id);
            return $this->db->get('barang')->result_array();
        }
        //pelangan
        public function get_plg(){
            return $this->db->get('pelanggan')->result_array();
        }
        public function input_plg($data){
            $this->db->insert('pelanggan', $data);
        }
        public function ubah_plg($id, $data){
            $this->db->where('id_plg', $id);
            $this->db->update('pelanggan', $data);
        }
        public function delete_plg($id){
            $this->db->where('id_plg', $id);
            $this->db->delete('pelanggan');
        }
        public function get_IdPlg($id){
            $this->db->where('id_plg', $id);
            return $this->db->get('pelanggan')->result_array();
        }

        public function get_IdJenis($id){
            $this->db->where('id_jenis', $id);
            return $this->db->get('jenis')->result_array();
        }

        //transaksi
        public function get_trans(){
            $this->db->select('*');
            $this->db->from('pelanggan');
            $this->db->join('transaksi', 'transaksi.id_plg = pelanggan.id_plg');
            return $this->db->get()->result_array();
        }

    }
?>