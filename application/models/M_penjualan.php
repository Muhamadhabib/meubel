<?php 
    class M_penjualan extends CI_Model{
        public function cari(){
            $cari = $this->input->post('cari');
            $this->db->like('id_brg',$cari);
            $this->db->or_like('nama_brg',$cari);
            $this->db->select('*');
            $this->db->from('barang');
            $this->db->join('jenis', 'jenis.id_jenis = barang.id_jenis');
            return $this->db->get()->result_array();
        }
        public function get_plg(){
            return $this->db->get('pelanggan')->result_array();
        }
        public function get_trs(){
            $this->db->select('*');
            $this->db->from('trans');
            $this->db->join('pelanggan', 'pelanggan.id_plg = trans.id_plg');
            return $this->db->get()->result_array();
        }
        //ambil data untuk laporan
        public function get_trs2(){
            $this->db->select('*');
            $this->db->from('trans');
            $this->db->join('pelanggan', 'pelanggan.id_plg = trans.id_plg');
            return $this->db->get()->result();
        }
        //untuk grafik
        public function get_trs3(){
            $this->db->select('tgl_trans, COUNT(tgl_trans) as jumlahTunai, MONTHNAME(tgl_trans)');
            // $this->db->where('Year(tgl_trans)', $tahun);
            $this->db->group_by('Month(tgl_trans)'); 
            return $this->db->get('trans')->result_array();
        }
        public function get_psn(){
            $this->db->select('*');
            $this->db->from('pesan');
            $this->db->join('pelanggan', 'pelanggan.id_plg = pesan.id_plg');
            $this->db->join('barang', 'barang.id_brg = pesan.id_brg');
            return $this->db->get()->result_array();
        }
        //untuk laporan
        public function get_psn2(){
            $this->db->select('*');
            $this->db->from('pesan');
            $this->db->join('pelanggan', 'pelanggan.id_plg = pesan.id_plg');
            $this->db->join('barang', 'barang.id_brg = pesan.id_brg');
            return $this->db->get()->result();
        }
        public function input_trans($data){
            $this->db->insert('trans', $data);
        }
        public function input_kre($data){
            $this->db->insert('kredit', $data);
        }
        public function input_ang($data){
            $this->db->insert('angsuran', $data);
        }
        public function input_pesan($data){
            $this->db->insert('pesan', $data);
        }
        public function input_pesan2($data){
            $this->db->insert('pesan2', $data);
        }
        public function cek_kre($nama){
            $this->db->where('id_plg',$nama);
            return $this->db->get('kredit')->num_rows();
        }
        public function update_stok($id, $data){
            $this->db->where('id_brg', $id);
            $this->db->update('barang', $data);
        }
    }
?>