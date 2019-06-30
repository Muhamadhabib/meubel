<section>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li class="header">MAIN NAVIGATION</li>
                <li >
                    <a href="<?=base_url(); ?>home">
                        <i class="material-icons">home</i>
                        <span>Home</span>
                    </a>
                </li>
                <li>
                    <a href="<?=base_url();?>pelanggan">
                        <i class="material-icons">person</i>
                        <span>Pelanggan</span>
                    </a>
                </li>
                <li class="active">
                    <a href="<?=base_url(); ?>penjualan">
                        <i class="material-icons">local_mall</i>
                        <span>Transaksi</span>
                    </a>
                </li>
                <li >
                    <a href="<?=base_url(); ?>angsuran">
                        <i class="material-icons">credit_card</i>
                        <span>Angsuran</span>
                    </a>
                </li>
                <li >
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">store</i>
                        <span>Tunai</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="<?= base_url(); ?>penjualan/transaksi">Data Transaksi</a>
                        </li>
                        <li>
                            <a href="<?= base_url(); ?>penjualan/pesanan">Data Pesanan</a>
                        </li>
                    </ul>
                </li>
                <li >
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">receipt</i>
                        <span>Kredit</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="<?= base_url(); ?>kredit">Data Transaksi</a>
                        </li>
                        <li>
                            <a href="<?= base_url(); ?>kredit/pesanan">Data Pesanan</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="<?=base_url();?>barang">
                        <i class="material-icons">list</i>
                        <span>Barang</span>
                    </a>
                </li>
                <!-- <li>
                    <a href="<?=base_url();?>transaksi">
                        <i class="material-icons">shopping_cart</i>
                        <span>Transaksi</span>
                    </a>
                </li> -->
                <li>
                    <a href="<?=base_url();?>jenis">
                        <i class="material-icons">view_column</i>
                        <span>Jenis</span>
                    </a>
                </li>
                <li>
                    <a href="<?=base_url();?>laporan">
                        <i class="material-icons">description</i>
                        <span>Laporan</span>
                    </a>
                </li>
                <li>
                    <a href="<?=base_url();?>grafik">
                        <i class="material-icons">show_chart</i>
                        <span>Grafik</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- #Menu -->
    </aside>
    <!-- #END# Left Sidebar -->
</section>

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2><?= $judul; ?></h2>
        </div>

        <?php if ($this->session->flashdata('input')) : ?>
            <div class="alert alert-success" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            Data <strong>berhasil</strong> <?= $this->session->flashdata('input'); ?>
            </div>
        <?php endif; ?>
        <?php if ($this->session->flashdata('hapus')) : ?>
            <div class="alert alert-danger" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            Data <?= $this->session->flashdata('hapus'); ?>
            </div>
        <?php endif; ?>
        <?php if ($this->session->flashdata('kosong')) : ?>
            <div class="alert alert-danger" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            Gagal menambahkan, <?= $this->session->flashdata('kosong'); ?>
            </div>
        <?php endif; ?>

        <!-- <a href="<?= base_url();?>barang/tambah" class="btn btn-primary btn-lg waves-effect">TAMBAH</a> -->
        <!-- <button type="button" class="btn btn-primary btn-lg waves-effect">TAMBAH</button> -->

        <div class="row clearfix p-t-10">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <div class="row m-b--25">
                        <form method="post" >
                            <div class="col-md-4">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" id="cari" name="cari">
                                        <label class="form-label">Cari Barang</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary btn-lg m-l-15 waves-effect">Cari</button>
                                </div>
                        </form>
                        </div>
                    </div>
                    <div class="body">
                        
                        <table class="table table-responsive table-bordered table-condensed table-hover table-striped" id="myTable">
                        <thead>
                            <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Kode Barang</th>
                            <th scope="col">Nama Barang</th>
                            <th scope="col">Jenis Barang</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Stok</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Operasi</th>
                            </tr>
                        </thead>
                        <?php 
                            if($this->input->post('cari')):
                        ?>
                        <tbody>
                        <?php $n = 1; foreach($brg as $b) : ?>
                            <form action="<?= site_url(); ?>penjualan/add" method="post">
                                <input type="hidden" id="id" name="id" value="<?= $b['id_brg'];?>">
                                <input type="hidden" id="nama" name="nama" value="<?= $b['nama_brg']; ?>">
                                <input type="hidden" id="stok" name="stok" value="<?= $b['stok_brg']; ?>">
                                <input type="hidden" id="harga" name="harga" value="<?= $b['harga_jual']; ?>">
                                <input type="hidden" id="qty" name="qty" value="1">
                            <tr>
                            <td><?= $n++; ?></td>
                            <td><?= $b['id_brg']; ?></td>
                            <td><?= $b['nama_brg'];?></td>
                            <td><?= $b['nama_jenis'];?></td>
                            <td><?= $b['deskripsi'];?></td>
                            <td><?= $b['stok_brg'];?></td>
                            <td><?= 'Rp '.number_format($b['harga_jual'],0,",",".");?></td>
                            <td>
                                <button type="submit" class=" btn btn-success btn-sm waves-effect">
                                    <i class="material-icons">shopping_cart</i>
                                </button>
                            </td>
                            </tr>
                            </form>
                        <?php endforeach; ?>
                        </tbody>
                        <?php endif;?>
                        </table>

                    </div>
                </div>
                <div class="card m-b--10">
                    <div class="header">
                        <div class="row m-b--25">
                        
                            
                        </form>
                        </div>
                    </div>
                    <div class="body">
                        
                        <table class="table table-responsive table-bordered table-condensed table-hover table-striped" id="myTable">
                        <thead>
                            <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Kode Barang</th>
                            <th scope="col">Nama Barang</th>
                            <th scope="col">Jumlah Barang</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Operasi</th>
                            </tr>
                        </thead>

                        <tbody>
                        <?php $n = 1; foreach($beli as $a) : ?>
                        <form action="<?= base_url(); ?>penjualan/update" method="post">
                            <tr>
                            <td><?= $n++; ?></td>
                            <td><?= $a['id']; ?></td>
                            <td><?= $a['name'];?></td>
                            <td>
                                <input type="hidden" value="<?= $a['rowid']; ?>" id="row" name="row">
                                <input type="number" onchange="refresh()" min="1" max="<?= $a['stock']; ?>" value="<?= $a['qty'];?>" id="qt" name="qt" style="width: 50px;">
                            </td>
                            <td>
                                <?= 'Rp '.number_format($a['subtotal'],0,",",".");?>
                            </td>
                            <td>
                                <button type="submit" class="btn btn-success btn-sm waves-effect" ><i class="material-icons">refresh</i></button>
                                <a href="<?= base_url();?>penjualan/delete/<?= $a['rowid']; ?>" class="btn btn-danger btn-sm waves-effect" onclick="return confirm('yakin?');" ><i class="material-icons">delete</i></a>
                            </td>

                            </tr>
                        </form>
                        <?php endforeach; ?>
                        </tbody>
                        
                        </table>
                        <div class="row clearfix">
                            <div class="col-sm-1 ">
                                <form action="" method="post" >
                                    <input type="hidden" id="tun" name="tun" value="tunai">
                                    <button type="submit" class="btn bg-indigo btn-lg m-l-15 waves-effect">Tunai</button>
                                </form>
                            </div>
                            <div class="col-md-0">
                                <form action="" method="post">
                                    <input type="hidden" id="kre" name="kre" value="kredit">
                                    <button type="submit" class="btn bg-indigo btn-lg m-l-15 waves-effect">Kredit</button>
                                </form>
                            </div>
                        </div>
                        <?php 
                            if($this->input->post('tun')):
                        ?>
                    <form action="<?= base_url(); ?>penjualan/simpan" method="post" name="cash">             
                        <label for="plg">Pilih Pelanggan</label>
                        <div class="form-group">
                            <div class="form-line">
                                <!-- <input type="text" id="email_address" class="form-control" placeholder="Enter your email address"> -->
                                <select class="form-control " id="plg" name="plg" required>
                                    <option value="">--Pilih Nama--</option>
                                    <?php foreach($plg as $c):?>
                                        <option value="<?= $c['id_plg']; ?>"><?= $c['nm_plg']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <label for="hrg">Total Harga</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="hidden" class="form-control" id="hrg" name="hrg" value="<?= $this->cart->total();?>">
                                <input type="text" class="form-control" value="<?= 'Rp '.number_format($this->cart->total(),0,",",".");?>" readonly>
                            </div>
                        </div>
                        <label for="brg">Total Barang</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="hidden" class="form-control" id="brg" name="brg" value="<?= $this->cart->total_items();?>">
                                <input type="text" class="form-control" value="<?= $this->cart->total_items();?>" readonly >
                            </div>
                        </div>
                        <div class="row clearfix">
                                <div class="col-md-4">
                                <label for="tunai">Tunai</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="number" min="0" step="10000" class="form-control" id="tunai" name="tunai" onchange="total()">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                <label for="kem">Kembali</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" id="kem" name="kem" readonly >
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    
                                </div>

                                <script type="text/javascript">
                                function total() {
                                    var uang = document.getElementById('tunai').value;
                                    var harga = document.getElementById('hrg').value;
                                    var kembali = uang - harga;
                                    
                                    if(document.getElementById('tunai').value != 0){
                                        document.getElementById('kem').value = kembali;
                                    }else{
                                        document.getElementById('kem').value = null;
                                    }
                                }
                                </script>

                            </div>
                        <button type="submit" class="btn btn-primary btn-lg m-l-15 waves-effect">Simpan</button>
                    </form>  
                        <?php
                            elseif($this->input->post('kre')):
                        ?>        
                        <form action="<?= base_url(); ?>penjualan/simpan2" method="post" name="cash">             
                            <label for="plg">Pilih Pelanggan</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <select class="form-control " id="plg" name="plg" required>
                                        <option value=""> --Pilih Nama-- </option>
                                        <?php foreach($plg as $c):?>
                                            <option value="<?= $c['id_plg']; ?>"><?= $c['nm_plg']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <label for="hrg">Total Harga</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="hidden" class="form-control" id="hrg" name="hrg" value="<?= $this->cart->total();?>">
                                    <input type="text" class="form-control" value="<?= 'Rp '.number_format($this->cart->total(),0,",",".");?>" disabled>
                                </div>
                            </div>
                            <label for="brg">Total Barang</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="hidden" class="form-control" id="brg" name="brg" value="<?= $this->cart->total_items();?>">
                                    <input type="text" class="form-control" value="<?= $this->cart->total_items();?>" disabled >
                                </div>
                            </div>
                            <label for="dp">Uang Muka</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="number" min="0" class="form-control" id="dp" name="dp" required>
                                </div>
                            </div>
                            <label for="plg">Bulan Kredit</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <select class="form-control " id="bln" name="bln" required>
                                        <option value=""> --Pilih Durasi Bulan-- </option>
                                            <option value="4">4</option>
                                            <option value="6">6</option>
                                    </select>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg m-l-15 waves-effect">Simpan</button>
                        </form>    
                        <?php 
                            endif;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
