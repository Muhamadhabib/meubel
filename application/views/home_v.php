<section>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li class="header">MAIN NAVIGATION</li>
                <li class="active">
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
                    <a href="<?=base_url();?>penjualan">
                        <i class="material-icons">store</i>
                        <span>Pelanggan</span>
                    </a>
                </li>
                <li>
                    <a href="<?=base_url();?>penjualan">
                        <i class="material-icons">person</i>
                        <span>Penjualan</span>
                    </a>
                </li>
                <li>
                    <a href="<?=base_url();?>penjualan">
                        <i class="material-icons">shopping_cart</i>
                        <span>Transaksi</span>
                    </a>
                </li>
                <li>
                    <a href="<?=base_url();?>penjualan">
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
            <h2>DASHBOARD</h2>
        </div>

        <!-- Widgets -->
        <div class="row clearfix">

            <div class="col-lg-4 col-sm-6 col-xs-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-6">
                                <i class="material-icons md-48">list</i>
                            </div>
                            <div class="col-xs-6 text-right">
                                <p class="announcement-heading">21</p>
                                <p class="announcement-text">Jumlah Data Kredit</p>
                            </div>
                        </div>
                    </div>
                <a href="<?= base_url();?>kredit">
                    <div class="panel-footer announcement-bottom">
                        <div class="row">
                            <div class="col-xs-6">
                                Data Kredit
                            </div>
                            <div class="col-xs-6 text-right">
                                <i class="material-icons">subdirectory_arrow_right</i>
                            </div>
                        </div>
                    </div>
                </a>
                </div>
            </div>
            
            <div class="col-lg-4 col-sm-6 col-xs-12">
                <div class="panel panel-alert">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-6">
                                <i class="material-icons md-48">store</i>
                            </div>
                            <div class="col-xs-6 text-right">
                                <p class="announcement-heading">21</p>
                                <p class="announcement-text">Jumlah Data Penjualan</p>
                            </div>
                        </div>
                    </div>
                <a href="<?= base_url();?>home/penjualan">
                    <div class="panel-footer announcement-bottom">
                        <div class="row">
                            <div class="col-xs-6">
                                Data Penjualan
                            </div>
                            <div class="col-xs-6 text-right">
                                <i class="material-icons">subdirectory_arrow_right</i>
                            </div>
                        </div>
                    </div>
                </a>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 col-xs-12">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-6">
                                <i class="material-icons md-48">description</i>
                            </div>
                            <div class="col-xs-6 text-right">
                                <p class="announcement-heading">21</p>
                                <p class="announcement-text">Jumlah Data Laporan</p>
                            </div>
                        </div>
                    </div>
                <a href="<?= base_url();?>laporan">
                    <div class="panel-footer announcement-bottom">
                        <div class="row">
                            <div class="col-xs-6">
                                Data Laporan
                            </div>
                            <div class="col-xs-6 text-right">
                                <i class="material-icons">subdirectory_arrow_right</i>
                            </div>
                        </div>
                    </div>
                </a>
                </div>
            </div>
            

            <div class="col-lg-4 col-sm-6 col-xs-12">
                <div class="info-box bg-indigo hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">receipt</i>
                    </div>
                    <div class="content">
                        <div class="text">KREDIT</div>
                        <div class="number count-to" data-from="0" data-to="125" data-speed="1000" data-fresh-interval="20"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-xs-12">
                <div class="info-box bg-cyan hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">list</i>
                    </div>
                    <div class="content">
                        <div class="text">BARANG</div>
                        <div class="number count-to" data-from="0" data-to="257" data-speed="1000" data-fresh-interval="20"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-light-green hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">person</i>
                    </div>
                    <div class="content">
                        <div class="text">PELANGGAN</div>
                        <div class="number count-to" data-from="0" data-to="243" data-speed="1000" data-fresh-interval="20"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-orange hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">shopping_cart</i>
                    </div>
                    <div class="content">
                        <div class="text">TRANSAKSI</div>
                        <div class="number count-to" data-from="0" data-to="1225" data-speed="1000" data-fresh-interval="20"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-xs-12">
                <div class="info-box bg-teal hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">description</i>
                    </div>
                    <div class="content">
                        <div class="text">LAPORAN</div>
                        <div class="number count-to" data-from="0" data-to="125" data-speed="1000" data-fresh-interval="20"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Widgets -->
        
    </div>
</section>
