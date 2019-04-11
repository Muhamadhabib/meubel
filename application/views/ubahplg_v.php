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
                <li class="active">
                    <a href="<?=base_url();?>pelanggan">
                        <i class="material-icons">person</i>
                        <span>Pelanggan</span>
                    </a>
                </li>
                <li >
                    <a href="<?=base_url(); ?>penjualan">
                        <i class="material-icons">local_mall</i>
                        <span>Transaksi</span>
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
            <h2>UBAH DATA PELANGGAN</h2>
        </div>

        <?php foreach($plg as $p) : ?>

        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <a href="<?= base_url(); ?>pelanggan"class="btn btn-warning waves-effect">Kembali</a>
                    </div>
                    <div class="body">

                        <form id="form_validation" action="<?= base_url();?>pelanggan/edit/<?= $p['id_plg']; ?>" method="POST">

                            <div class="row clearfix">

                                <div class="col-sm-12">

                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" value="<?= $p['nm_plg'];?>" id="nama" name="nama" required/>
                                            <label class="form-label">Nama Pelanggan</label>
                                        </div>
                                    </div>

                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="tel" maxlength="13" pattern="[0-9]{8,}" class="form-control" value="<?= $p['no_hp'];?>" id="no_hp" name="no_hp" required>
                                            <label class="form-label">No. HP</label>
                                        </div>
                                    </div>
                                
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <textarea rows="4" class="form-control no-resize" value="<?= $p['alamat'];?>" id="almt" name="almt" required><?= $p['alamat'];?></textarea>
                                            <label class="form-label">Alamat</label>
                                        </div>
                                    </div>

        

                                    <button class="btn btn-primary waves-effect" type="submit">SUBMIT</button>
                            </form>
        <?php endforeach;?>
                        </div>
                    </div>
            </div>
        </div>

    </div>
</section>