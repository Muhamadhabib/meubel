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
                <li >
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
                <li class="active">
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
            <h2>DATA JENIS BARANG</h2>
        </div>

        <?php if ($this->session->flashdata('input')) : ?>
            <div class="alert alert-success" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            Data <strong>berhasil</strong> <?= $this->session->flashdata('input'); ?>
            </div>
        <?php endif; ?>
        <?php if ($this->session->flashdata('ada')) : ?>
            <div class="alert alert-warning" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            Data <strong> <?= $this->session->flashdata('ada');?></strong>
            </div>
        <?php endif; ?>
        <?php if ($this->session->flashdata('hapus')) : ?>
            <div class="alert alert-danger" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            Data <strong>berhasil</strong> <?= $this->session->flashdata('hapus'); ?>
            </div>
        <?php endif; ?>
        <?php if ($this->session->flashdata('cek')) : ?>
            <div class="alert alert-warning" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            Data <strong>Jenis</strong> <?= $this->session->flashdata('cek'); ?>
            </div>
        <?php endif; ?>

        <a href="<?= base_url();?>jenis/tambah" class="btn btn-primary btn-lg waves-effect">TAMBAH</a>
        <!-- <button type="button" class="btn btn-primary btn-lg waves-effect">TAMBAH</button> -->

        <div class="row clearfix p-t-10">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                    <!-- <button type="button" class="btn bg-default btn-s waves-effect">PRINT</button> -->
                    <button type="button" class="btn btn-default waves-effect">
                        <i class="material-icons">print</i>
                    </button>
                    </div>
                    <div class="body">
                        <table class="table table-responsive table-bordered table-condensed table-hover table-striped" id="myTable">
                        <thead>
                            <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Nama Jenis</th>
                            <th scope="col">Operasi</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $n = 1; foreach($jns as $b) : ?>
                            <tr>
                            <td><?= $n++; ?></td>
                            <td><?= $b['nama_jenis'];?></td>
                            <td>
                                <a href="<?= base_url();?>/jenis/ubah/<?= $b['id_jenis'] ?>" class=" btn btn-success btn-sm waves-effect"><i class="material-icons">mode_edit</i></a>
                                <a href="<?= base_url();?>/jenis/hapus/<?= $b['id_jenis'] ?>" class="btn btn-danger btn-sm waves-effect" onclick="return confirm('yakin?');" ><i class="material-icons">delete</i></a> 
                            </td>
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