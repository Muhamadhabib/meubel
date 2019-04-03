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
                <li class="active">
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

        <!-- <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            INPUT
                            <small>Different sizes and widths</small>
                        </h2>
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
                        <h2 class="card-inside-title">Basic Examples</h2>
                        <div class="row clearfix">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Username" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="password" class="form-control" placeholder="Password" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="body">
                        <form id="form_validation" action="<?= base_url();?>barang/input/" method="POST">
                            <!-- <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" id="nama" name="nama" required>
                                    <label class="form-label">Nama Barang</label>
                                </div>
                            </div> -->
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" id="nama" name="nama" required/>
                                            <label class="form-label">Nama Barang</label>
                                        </div>
                                    </div>
                                
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <textarea rows="4" class="form-control no-resize" id="desk" name="desk" required></textarea>
                                            <label class="form-label">Deskripsi</label>
                                        </div>
                                    </div>
                                
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                        <footer>Jenis Barang</footer>
                                            <select class="form-control show-tick" name="jenis" id="jenis">
                                                <?php foreach($data as $d): ?>
                                                <option value="<?= $d['id_jenis'];?>"><?=$d['nama_jenis'];?></option>
                                                <?php endforeach;?>
                                            </select> 
                                        </div>
                                    </div>
                                
                        
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="number" class="form-control" id="stok" name="stok" required>
                                            <label class="form-label">Stok Barang</label>
                                        </div>
                                    </div>
                                
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="number" class="form-control" id="h_beli" name="h_beli" required>
                                            <label class="form-label">Harga Beli</label>
                                        </div>
                                    </div>
                                
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="number" class="form-control" id="h_jual" name="h_jual" required>
                                            <label class="form-label">Harga Jual</label>
                                        </div>
                                    </div>
                                
                                    <button class="btn btn-primary waves-effect" type="submit">SUBMIT</button>
                            </form>
                        </div>
                    </div>
            </div>
        </div>

    </div>
</section>