<section>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li class="header">MAIN NAVIGATION</li>
                <li>
                    <a href="<?=base_url();?>">
                        <i class="material-icons">home</i>
                        <span>Home</span>
                    </a>
                </li>
                <li>
                    <a href="<?=base_url();?>home/penjualan">
                        <i class="material-icons">store</i>
                        <span>Penjualan</span>
                    </a>
                </li>
                <li>
                    <a href="<?=base_url();?>kredit">
                        <i class="material-icons">receipt</i>
                        <span>Kredit</span>
                    </a>
                </li>
                <li>
                    <a href="<?=base_url();?>barang">
                        <i class="material-icons">list</i>
                        <span>Barang</span>
                    </a>
                </li>
                <li class="active">
                    <a href="<?=base_url();?>pelanggan">
                        <i class="material-icons">person</i>
                        <span>Pelanggan</span>
                    </a>
                </li>
                <li>
                    <a href="<?=base_url();?>transaksi">
                        <i class="material-icons">shopping_cart</i>
                        <span>Transaksi</span>
                    </a>
                </li>
                <li>
                    <a href="<?=base_url();?>laporan">
                        <i class="material-icons">description</i>
                        <span>Laporan</span>
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
            <h2>TAMBAH DATA BARANG</h2>
        </div>

        <?php foreach($plg as $p) : ?>

        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <a href="<?= base_url(); ?>pelanggan"class="btn btn-warning waves-effect">Kembali</a>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
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
                                            <input type="text" class="form-control" value="<?= $p['no_hp'];?>" id="no_hp" name="no_hp" required>
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