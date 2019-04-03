<section>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li class="header">MAIN NAVIGATION</li>
                    <a href="<?=base_url(); ?>">
                        <i class="material-icons">home</i>
                        <span>Home</span>
                    </a>
                </li>
                <li>
                <li class="active">
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
            <h2>PENJUALAN</h2>
        </div>

        <?php echo form_open('path/to/controller/update/method'); ?>

        <table cellpadding="6" cellspacing="1" style="width:100%" border="0">

        <tr>
                <th>QTY</th>
                <th>Item Description</th>
                <th style="text-align:right">Item Price</th>
                <th style="text-align:right">Sub-Total</th>
        </tr>

        <?php $i = 1; ?>

        <?php foreach ($this->cart->contents() as $items): ?>

                <?php echo form_hidden($i.'[rowid]', $items['rowid']); ?>

                <tr>
                        <td><?php echo form_input(array('name' => $i.'[qty]', 'value' => $items['qty'], 'maxlength' => '3', 'size' => '5')); ?></td>
                        <td>
                                <?php echo $items['name']; ?>

                                <?php if ($this->cart->has_options($items['rowid']) == TRUE): ?>

                                        <p>
                                                <?php foreach ($this->cart->product_options($items['rowid']) as $option_name => $option_value): ?>

                                                        <strong><?php echo $option_name; ?>:</strong> <?php echo $option_value; ?><br />

                                                <?php endforeach; ?>
                                        </p>

                                <?php endif; ?>

                        </td>
                        <td style="text-align:right"><?php echo $this->cart->format_number($items['price']); ?></td>
                        <td style="text-align:right">$<?php echo $this->cart->format_number($items['subtotal']); ?></td>
                </tr>

        <?php $i++; ?>

        <?php endforeach; ?>

        <tr>
                <td colspan="2"> </td>
                <td class="right"><strong>Total</strong></td>
                <td class="right">$<?php echo $this->cart->format_number($this->cart->total()); ?></td>
        </tr>

        </table>

        <p><?php echo form_submit('', 'Update your Cart'); ?></p>
    </div>
</section>


<div class="row clearfix js-sweetalert">
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
        <p>A warning message, with a function attached to the <b>Confirm</b> button...</p>
        <button class="btn btn-primary waves-effect" data-type="confirm">CLICK ME</button>
    </div>
</div>