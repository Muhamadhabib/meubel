<script type="text/javascript">
$(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>

<!-- Bootstrap Core Js -->
<script src="<?= base_url();?>asset/plugins/bootstrap/js/bootstrap.js"></script>

<!-- Select Plugin Js -->
<script src="<?= base_url();?>asset/plugins/bootstrap-select/js/bootstrap-select.js"></script>

<!-- Slimscroll Plugin Js -->
<script src="<?= base_url();?>asset/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

<!-- Waves Effect Plugin Js -->
<script src="<?= base_url();?>asset/plugins/node-waves/waves.js"></script>

<!-- Jquery CountTo Plugin Js -->
<script src="<?= base_url();?>asset/plugins/jquery-countto/jquery.countTo.js"></script>

<!-- Morris Plugin Js -->
<script src="<?= base_url();?>asset/plugins/raphael/raphael.min.js"></script>
<script src="<?= base_url();?>asset/plugins/morrisjs/morris.js"></script>

<!-- ChartJs -->


<!-- DataTables -->
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.js"></script>
    <script type="text/javascript">
        function notif(){
            swal({
            title: "Apakah Anda Ingin Keluar?",
            icon: "warning",
            buttons: ["Tidak", "Ya"],
            dangerMode: true,
            })
            .then((result) => {
                if (result) {
                    location.href = "<?= base_url();?>login/logout";
                }
            });
        }
    </script>



<!-- Custom Js -->
<script src="<?= base_url();?>asset/js/admin.js"></script>
<script src="<?=base_url();?>asset/js/pages/index.js"></script>

<!-- Demo Js -->
<script src="<?= base_url();?>asset/js/demo.js"></script>
<script src="<?= base_url();?>asset/js/pages/forms/form-validation.js"></script>
<script src="<?= base_url();?>asset/js/pages/forms/form-validation.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<!-- Bootstrap Colorpicker Js -->
<script src="../../plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>

<!-- Dropzone Plugin Js -->
<script src="../../plugins/dropzone/dropzone.js"></script>

<!-- Input Mask Plugin Js -->
<script src="../../plugins/jquery-inputmask/jquery.inputmask.bundle.js"></script>

<!-- Multi Select Plugin Js -->
<script src="../../plugins/multi-select/js/jquery.multi-select.js"></script>

<!-- Jquery Spinner Plugin Js -->
<script src="../../plugins/jquery-spinner/js/jquery.spinner.js"></script>

<!-- Bootstrap Tags Input Plugin Js -->
<script src="../../plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>

<!-- noUISlider Plugin Js -->
<script src="../../plugins/nouislider/nouislider.js"></script>

<!-- Custom Js -->
<script src="<?= base_url();?>asset/js/pages/forms/advanced-form-elements.js"></script>
<script src="<?= base_url();?>asset/js/pages/forms/basic-form-elements.js"></script>
<script src="<?= base_url();?>asset/js/pages/forms/editors.js"></script>
<script src="<?= base_url();?>asset/js/pages/forms/form-validation.js"></script>
<script src="<?= base_url();?>asset/js/pages/forms/form-wizard.js"></script>



</body>

</html>