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
        public function get_barang3(){
            $this->db->select('nama_brg,stok_brg,SUM(stok_brg),jenis.nama_jenis');
            $this->db->from('barang');
            $this->db->join('jenis', 'barang.id_jenis = jenis.id_jenis');
            $this->db->group_by('barang.id_jenis');
            // $query = $this->db->query('SELECT barang.nama_brg, barang.stok_brg, SUM(barang.stok_brg) FROM barang INNER JOIN jenis ON barang.id_jenis=jenis.id_jenis GROUP BY barang.id_jenis');
            return $this->db->get()->result_array();
        }
        //untuk laporan
        public function get_barang2(){
            return $this->db->get('barang')->result();
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
        //ambil data pelanggan untuk pelanggan
        public function get_plg2(){
            return $this->db->get('pelanggan')->result();
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
            $this->db->join('trans', 'trans.id_plg = pelanggan.id_plg');
            return $this->db->get()->result_array();
        }

        public function cek_plg($nama){
            $this->db->where('nm_plg',$nama);
            return $this->db->get('pelanggan')->num_rows();
        }
        
        public function cek_jenis($nama){
            $this->db->where('nama_jenis',$nama);
            return $this->db->get('jenis')->num_rows();
        }
      
        public function cek_barang($nama){
            $this->db->where('nama_brg',$nama);
            return $this->db->get('barang')->num_rows();
        }

        public function get_stok($id){
            $this->db->select("stok_brg");
            $this->db->where("id_brg", $id);
            return $this->db->get("barang")->row()->stok_brg;
        }
    }
?>