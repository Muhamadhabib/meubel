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
                <li class="active">
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

<?php
    $tahun = date('Y');
    $bulan = date('m');
    if(isset($_GET['tahun'])){
        $tahun = $_GET['tahun'];
    }
?>

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Grafik</h2>
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
            Data <strong>berhasil</strong> <?= $this->session->flashdata('hapus'); ?>
            </div>
        <?php endif; ?>

        <div class="row clearfix p-t-10">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>CHART Barang</h2>
                            <!-- <ul class="header-dropdown m-r--5">
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
                            </ul> -->
                            
                        </div>
                        <div class="body">
                            <canvas id="myChart" width="800" height="400"></canvas>
                        
                            <?php 
                                foreach($brg as $c):
                                    $nama[] = $c['nama_jenis'];
                                    $stok[] = $c['SUM(stok_brg)'];
                            ?>
                                <script>
                                var ctx = document.getElementById('myChart').getContext('2d');
                                var myChart = new Chart(ctx, {
                                    type: 'pie',
                                    data: {
                                        datasets: [{
                                            data: <?php echo json_encode($stok);?>,
                                            backgroundColor: [
                                                "rgb(233, 30, 99)",
                                                "rgb(255, 193, 7)",
                                                "rgb(0, 188, 212)",
                                                "rgb(139, 195, 74)"
                                            ],
                                        }],
                                        labels: <?php echo json_encode($nama);?>
                                    },
                                    options: {
                                        responsive: true,
                                        legend: false
                                    }
                                });
                                </script>
                            <?php 
                                endforeach;
                            ?>
                        </div>
                    </div>
                    
                </div>

                

                <!-- real shit -->




        </div>

        <!-- start new row -->
        <div class="row clearfix p-t-10"> 
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <div class="header">
                            <div class="row clearfix">
                                <div class="col-lg-4 col-sm-12">
                                    <h2>CHART Transaksi</h2>
                                </div>
                                <div class="col-lg-4 col-sm-12">
                                <form action="">
                                    <label for="tahun">Pilih Tahun: </label>
                                    <select name="tahun" id="tahun">
                                    <?php
                                        for($i=2015; $i<=2025; $i++){
                                        $selected = ($i==$tahun)?'selected':'';
                                        echo "
                                            <option value='".$i."' ".$selected.">".$i."</option>
                                        ";
                                        }
                                    ?>
                                    </select>
                                
                                </div>
                                <div class="col-lg-4 col-sm-12">
                                    <button type="submit" class="btn btn-primary btn-lg m-l-15 waves-effect">Pilih</button>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>  <!-- end header -->

                    <div class="body">
                        <canvas id="myChart3" width="800" height="400"></canvas>
                        <!-- script chart php -->
                        <?php
                            // $tahun = 2019;
                            $months = array();
                            $transaksi = array();
                            $kredit = array();
                            for($m = 1; $m <= 12; $m++ ){
                                $month = date('M', mktime(0,0,0,$m,1));
                                $trs = $this->M_grafik->get_data_trans($m, $tahun);
                                $kre = $this->M_grafik->get_data_kredit($m, $tahun);
                                array_push($months, $month);
                                array_push($transaksi, $trs);
                                array_push($kredit, $kre);
                                
                            }
                            $months = json_encode($months);
                            $transaksi = json_encode($transaksi);
                            $kredit = json_encode($kredit);
                        ?>

                        <!-- script chart js -->
                        <script>
                            var ctx = document.getElementById('myChart3').getContext('2d');
                            var myChart = new Chart(ctx, {
                                type: 'bar',
                                data: {
                                    labels:<?php echo $months; ?>,
                                    datasets: [{
                                        label: "Transaksi Kredit",
                                        // data: [28, 48, 40, 0, 86, 27, 90, 10, 54, 32, 15, 11],
                                        data: <?php echo $transaksi; ?>,
                                        borderColor: 'rgba(0, 188, 212, 0.75)',
                                        backgroundColor: 'rgba(0, 188, 212, 0.3)',
                                        pointBorderColor: 'rgba(0, 188, 212, 0)',
                                        pointBackgroundColor: 'rgba(0, 188, 212, 0.9)',
                                        pointBorderWidth: 1
                                    },{
                                        label: "Transaksi Kredit",
                                        data: <?php echo $kredit; ?>,
                                        borderColor: 'rgba(233, 30, 99, 0.75)',
                                        backgroundColor: 'rgba(233, 30, 99, 0.3)',
                                        pointBorderColor: 'rgba(233, 30, 99, 0)',
                                        pointBackgroundColor: 'rgba(233, 30, 99, 0.9)',
                                        pointBorderWidth: 1
                                    }
                                ]
                                },
                            
                                options: {
                                    responsive: true,
                                    legend: false,

                                    scales: {
                                    yAxes: [{
                                        ticks: {
                                            beginAtZero: true,
                                            userCallback: function(label, index, labels) {
                                                // when the floored value is the same as the value we have a whole number
                                                if (Math.floor(label) === label) {
                                                    return label;
                                                }

                                            },
                                        }
                                    }],
                                },

                                }
                            });
                        </script>

                    </div>  <!-- end body -->
                </div><!-- end col -->

        </div>

        <div class="row clearfix p-t-10"> 
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <div class="header">
                            <div class="row clearfix">
                                <div class="col-lg-4 col-sm-12">
                                    <h2>Kerugian Bulan Ini</h2>
                                </div>
                                <div class="col-lg-4 col-sm-12">
                                <!-- <form action="">
                                    <label for="tahun">Pilih Tahun: </label>
                                    <select name="tahun" id="tahun">
                                    <?php
                                        for($i=2015; $i<=2025; $i++){
                                        $selected = ($i==$tahun)?'selected':'';
                                        echo "
                                            <option value='".$i."' ".$selected.">".$i."</option>
                                        ";
                                        }
                                    ?>
                                    </select>
                                
                                </div>
                                <div class="col-lg-4 col-sm-12">
                                    <button type="submit" class="btn btn-primary btn-lg m-l-15 waves-effect">Pilih</button>
                                </form> -->
                                </div>
                            </div>
                        </div>
                    </div>  <!-- end header -->

                    <div class="body">
                        <!-- <canvas id="myChart3" width="800" height="400"></canvas> -->
                        <!-- script chart php -->
                        <?php
                            // $tahun = 2019;
                            
                            $rugi = $this->M_angsur->get_rugi($bulan);
                            foreach($rugi->result() as $r){
                                $tot_bln_ini = $r->total_bulan_ini;
                            }
                            $tagihan = $this->M_angsur->get_total_tagihan_perbulan($bulan);
                            foreach($tagihan->result() as $z){
                                $tot_tagihan = $z->total_tagihan;
                            }

                            echo $tot_bln_ini - $tot_tagihan;
                        ?>

                        

                        <!-- script chart js -->
                        

                    </div>  <!-- end body -->
                </div><!-- end col -->

        </div>

    </div>
</section>