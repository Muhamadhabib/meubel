<?php
Class Laporanpdf extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->library('pdf');
        $this->load->model('M_penjualan');
        $this->load->model('M_admin');
    }
    //laporan transaksi tunai
    function transaksi_tunai(){
        $pdf = new FPDF('l','mm','A5');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string 
        $pdf->Cell(190,7,'BUKAN TOKO TEBU',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(190,7,'DAFTAR TRANSAKSI TUNAI',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10,'C');
        $pdf->Cell(15,6,'KODE',1,0,'C');
        $pdf->Cell(45,6,'NAMA PELANGGAN',1,0,'C');
        $pdf->Cell(30,6,'TOTAL BARANG',1,0,'C');
        $pdf->Cell(35,6,'TOTAL HARGA',1,0,'C');
        $pdf->Cell(55,6,'TANGGAL TRANSAKSI',1,1,'C');
        $pdf->SetFont('Arial','',10);
        $transaksi = $this->M_penjualan->get_trs2();
        foreach ($transaksi as $row){
            $pdf->Cell(15,6,$row->id_trans,1,0,'C');
            $pdf->Cell(45,6,$row->nm_plg,1,0,'C'); 
            $pdf->Cell(30,6,$row->tot_brg,1,0,'C');
            $pdf->Cell(35,6,$row->tot_hrg,1,0,'C');
            $pdf->Cell(55,6,$row->tgl_trans,1,1,'C'); 
        }
        $pdf->Output();
    }
    //laporan pelanggan
    function pelanggan(){
        $pdf = new FPDF('l','mm','A5');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string 
        $pdf->Cell(190,7,'BUKAN TOKO TEBU',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(190,7,'DAFTAR PELANGGAN TERDAFTAR',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(20,6,'KODE',1,0,'C');
        $pdf->Cell(50,6,'NAMA PELANGGAN',1,0,'C');
        $pdf->Cell(40,6,'NO. HP',1,0,'C');
        $pdf->Cell(70,6,'ALAMAT',1,1,'C');
        $pdf->SetFont('Arial','',10);
        $pelanggan = $this->M_admin->get_plg2();
        foreach ($pelanggan as $row){
            $pdf->Cell(20,6,$row->id_plg,1,0,'C');
            $pdf->Cell(50,6,$row->nm_plg,1,0,'C'); 
            $pdf->Cell(40,6,$row->no_hp,1,0,'C');
            $pdf->Cell(70,6,$row->alamat,1,1,'C'); 
        }
        $pdf->Output();
    }
    //laporan barang
    function barang(){
        $pdf = new FPDF('l','mm','A5');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string 
        $pdf->Cell(190,7,'BUKAN TOKO TEBU',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(190,7,'DAFTAR BARANG TERSEDIA',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(20,6,'KODE',1,0,'C');
        $pdf->Cell(60,6,'NAMA BARANG',1,0,'C');
        $pdf->Cell(20,6,'STOK',1,0,'C');
        $pdf->Cell(40,6,'HARGA BELI',1,0,'C');
        $pdf->Cell(40,6,'HARGA JUAL',1,1,'C');
        $pdf->SetFont('Arial','',10);
        $pelanggan = $this->M_admin->get_barang2();
        foreach ($pelanggan as $row){
            $pdf->Cell(20,6,$row->id_brg,1,0,'C');
            $pdf->Cell(60,6,$row->nama_brg,1,0,'C'); 
            $pdf->Cell(20,6,$row->stok_brg,1,0,'C');
            $pdf->Cell(40,6,$row->harga_beli,1,0,'C');
            $pdf->Cell(40,6,$row->harga_jual,1,1,'C'); 
        }
        $pdf->Output();
    }

}