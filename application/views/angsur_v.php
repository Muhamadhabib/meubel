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
                <li class="active">
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
            <h2>Angsuran</h2>
        </div>
        <?php if ($this->session->flashdata('input')) : ?>
            <div class="alert alert-success" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            Data <strong>berhasil</strong> <?= $this->session->flashdata('input'); ?>
            </div>
        <?php endif; ?>
        <?php if ($this->session->flashdata('gagal')) : ?>
            <div class="alert alert-danger" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong> <?= $this->session->flashdata('gagal'); ?> </strong>
            </div>
        <?php endif; ?>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                
                    <div class="body">

                        <form id="form_validation" action="" method="POST">

                            <div class="row clearfix">
                                    <div class="col-md-4">
                                    <div class="form-group form-float">
                                        <select class="form-control " id="pilih" name="pilih" required>
                                            <option value="">--Pilih Nama--</option>
                                            <?php foreach($plg as $c):?>
                                                <option value="<?= $c['id_plg']; ?>"><?= $c['nm_plg']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    </div>
                                    <div class="col-md-4">
                                        <button type="submit" onclicik="myFunction()" class="btn btn-primary btn-lg m-l-15 waves-effect">Pilih</button>
                                    </div>
                                <div class="col-sm-12">
                                    <table class="table table-responsive table-bordered table-condensed table-hover table-striped" id="myTable">
                                        <thead>
                                            <tr>
                                            <th scope="col">No.</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Bulan</th>
                                            <th scope="col">Tagihan</th>
                                            <th scope="col">Angsur-1</th>
                                            <th scope="col">Angsur-2</th>
                                            <th scope="col">Angsur-3</th>
                                            <th scope="col">Angsur-4</th>
                                            <th scope="col">Angsur-5</th>
                                            <th scope="col">Angsur-6</th>
                                            <th scope="col">Tanggal</th>
                                            <th scope="col">Status</th>
                                            <th scope="col"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $n = 1; foreach($data as $p) : ?>
                                            <tr>
                                            <td><?= $n++; ?></td>
                                            <td><?= $p['nm_plg'];?></td>
                                            <td><?= $p['ang_bln'];?></td>
                                            <td><?= $p['tagihan'];?></td>
                                            <td><?= $p['ang_kre1'];?></td>
                                            <td><?= $p['ang_kre2'];?></td>
                                            <td><?= $p['ang_kre3'];?></td>
                                            <td><?= $p['ang_kre4'];?></td>
                                            <td><?= $p['ang_kre5'];?></td>
                                            <td><?= $p['ang_kre6'];?></td>
                                            <td><?= $p['ang_tgl'];?></td>
                                            <td><?= $p['status'];?></td>
                                            <td>
                                                <a href="<?= base_url();?>/pelanggan/hapus/<?= $p['id_plg']; ?>" class="btn btn-danger btn-sm waves-effect" onclick="return confirm('yakin?');" ><i class="material-icons">delete</i></a>
                                            </td>
                                            </tr>
                                        <?php endforeach; ?>
                                        </tbody>
                                    </table>
                        </form>
                                    <form action="<?= base_url(); ?>angsuran/update" method="post">
                                    <?php
                                        if($this->input->post('pilih')):
                                    ?>
                                        <?php
                                            foreach ($ang as $k):
                                        ?>
                                    <input type="hidden" id="id" name="id" value="<?= $k['id_ang']; ?>">
                                    <input type="hidden" id="idplg" name="idplg" value="<?= $k['plg']; ?>">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" id="nama" name="nama" value="<?= $k['nm_plg']; ?>" readonly />
                                            <label class="form-label">Nama Pelanggan</label>
                                        </div>
                                    </div>

                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" id="bulan" name="bulan" value="<?= $k['ang_bln']; ?>" readonly />
                                            <label class="form-label">Bulan</label>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" id="tagihan" name="tagihan" value="<?= $k['tagihan']; ?>" readonly />
                                            <label class="form-label">Tagihan</label>
                                        </div>
                                    </div>

                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" id="tagihan2" name="tagihan2" 
                                            value="<?= $k['tagihan']/$k['ang_bln']; ?>" readonly />
                                            <label class="form-label">Tagihan/bulan</label>
                                        </div>
                                    </div>
                                    <?php
                                        if($k['status']=='belum lunas'):
                                    ?>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" id="ang_satu" name="ang_satu" value="<?= $k['ang_kre1']; ?>"/>
                                            <label class="form-label">Angsuran 1</label>
                                        </div>
                                    </div>
                                    <?php if(!$k['ang_kre1']==0): ?>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" id="ang_dua" name="ang_dua" value="<?= $k['ang_kre2']; ?>"/>
                                            <label class="form-label">Angsuran 2</label>
                                        </div>
                                    </div>
                                    <?php endif;?>
                                    <?php if(!$k['ang_kre2']==0): ?>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" id="ang_tiga" name="ang_tiga" value="<?= $k['ang_kre3']; ?>"/>
                                            <label class="form-label">Angsuran 3</label>
                                        </div>
                                    </div>
                                    <?php endif;?>
                                    <?php if(!$k['ang_kre3']==0): ?>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" id="ang_empat" name="ang_empat" value="<?= $k['ang_kre4']; ?>"/>
                                            <label class="form-label">Angsuran 4</label>
                                        </div>
                                    </div>
                                    <?php endif;?>
                                    <?php if(!$k['ang_kre4']==0): ?>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" id="ang_lima" name="ang_lima" value="<?= $k['ang_kre5']; ?>"/>
                                            <label class="form-label">Angsuran 5</label>
                                        </div>
                                    </div>
                                    <?php endif;?>
                                    <?php if(!$k['ang_kre5']==0): ?>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" id="ang_enam" name="ang_enam" value="<?= $k['ang_kre6']; ?>"/>
                                            <label class="form-label">Angsuran 6</label>
                                        </div>
                                    </div>
                                    <?php endif;?>
                                    <button class="btn btn-primary waves-effect" type="submit">Bayar</button>
                                    <?php
                                        else:
                                    ?>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" id="ang_lima" name="ang_lima" value="<?= $k['status']; ?>" readonly />
                                            <label class="form-label">Status</label>
                                        </div>
                                    </div>               
                                    
                                    <?php
                                        endif;
                                    ?>
                                        <?php 
                                            endforeach;
                                        ?>
                                    <?php
                                        endif;
                                    ?>
                                    </form>
                        </div>
                    </div>
            </div>
        </div>
</section>