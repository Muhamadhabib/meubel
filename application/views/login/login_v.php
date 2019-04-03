
<body class="login-page">
    <div class="login-box">
        <div class="logo">
            <a href="">Bukan Toko <b>TEBU</b></a>
            <small>Menjual Barang Meubel Bukan Tebu</small>
        </div>
        <div class="card">
            <div class="body">
                <form id="sign_in" action="<?= base_url();?>login/proses" method="POST">
                    <div class="msg">Silahkan Login Untuk Masuk</div>
                    
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="username" placeholder="Username" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-8 p-t-5">
                            <!-- <input type="checkbox" name="rememberme" id="rememberme" class="filled-in chk-col-pink">
                            <label for="rememberme">Remember Me</label> -->
                        </div>
                        <div class="col-xs-4">
                            <button class="btn btn-block bg-pink waves-effect" type="submit">Masuk</button>
                        </div>
                    </div>
                    <div class="row">
                        <?php if($this->session->flashdata('login')): ?>
                            <div class="msg alert alert-danger alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <small><?= $this->session->flashdata('login'); ?></small>
                            </div>
                        <?php endif; ?>
                    </div>
                </form>
            </div>
        </div>
    </div>
