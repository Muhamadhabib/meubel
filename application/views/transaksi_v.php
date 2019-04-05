<section>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li class="header">MAIN NAVIGATION</li>
                <li>
                    <a href="<?=base_url(); ?>">
                        <i class="material-icons">home</i>
                        <span>Home</span>
                    </a>
                </li>
                <li>
                    <a href="<?=base_url(); ?>penjualan">
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
                <li>
                    <a href="<?=base_url();?>pelanggan">
                        <i class="material-icons">person</i>
                        <span>Pelanggan</span>
                    </a>
                </li>
                <li class="active">
                    <a href="<?=base_url();?>transaksi">
                        <i class="material-icons">shopping_cart</i>
                        <span>Transaksi</span>
                    </a>
                </li>
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
            </ul>
        </div>
        <!-- #Menu -->
    </aside>
    <!-- #END# Left Sidebar -->
</section>

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>TRANSAKSI</h2>
        </div>

        <div class="row clearfix p-t-10">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                    <!-- <button type="button" class="btn bg-default btn-s waves-effect">PRINT</button> -->
                    <!-- <button type="button" class="btn btn-default waves-effect">
                        <i class="material-icons">print</i>
                    </button> -->
                    </div>
                    <div class="body">

                    <form method="post">
                        <div class="row clearfix">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="cari" class="form-control" placeholder="Cari Transaksi">
                                    </div>
                                </div>
                            </div>
                            <button type="button" type="submit" class="btn btn-primary btn-lg m-l-15 waves-effect">Cari</button>
                        </div>
                    </form>

                        <table class="table table-responsive table-bordered table-condensed table-hover table-striped" id="myTable">
                        <thead>
                            <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Nama Pelanggan</th>
                            <th scope="col">Tanggal Transaksi</th>
                            <th scope="col">Total Barang</th>
                            <th scope="col">Total Harga</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $n = 1; foreach($data as $d) : ?>
                            <tr>
                            <td><?= $n++; ?></td>
                            <td><?= $d['nm_plg'];?></td>
                            <td><?= $d['tgl_trans'];?></td>
                            <td><?= $d['tot_brg'];?></td>
                            <td><?= $d['tot_hrg'];?></td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>