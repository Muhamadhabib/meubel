<?php 
    class M_kredit extends CI_Model{
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
        public function get_kre(){
            $this->db->select('*');
            $this->db->from('kredit');
            $this->db->join('pelanggan', 'pelanggan.id_plg = kredit.id_plg');
            return $this->db->get()->result_array();
        }
        //untuk grafik
        public function get_kre2(){
            $this->db->select('tgl_kre, COUNT(tgl_kre) as jumlah');
            $this->db->group_by('Month(tgl_kre)'); 
            $this->db->order_by('tgl_kre', 'asc'); 
            return $this->db->get('kredit')->result_array();
        }
        public function get_psn(){
            $this->db->select('*');
            $this->db->from('pesan2');
            $this->db->join('pelanggan', 'pelanggan.id_plg = pesan2.id_plg');
            $this->db->join('barang', 'barang.id_brg = pesan2.id_brg');
            return $this->db->get()->result_array();
        }
    }
?>