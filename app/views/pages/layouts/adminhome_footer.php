
<script src="<?= URLROOT.'public/admin/main/factory/script/bootstrap.min.js' ?>"></script>
<script src="<?= URLROOT.'public/admin/main/factory/script/jquery.js' ?>"></script>
<script src="<?= URLROOT.'public/admin/main/factory/script/ui.min.js' ?>"></script>
<script src="<?= URLROOT.'public/admin/main/factory/script/script.js' ?>"></script>
<script src="<?= URLROOT.'public/admin/main/js/admin_home.js' ?>"></script>


<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?= URLROOT.'public/admin/pars/plugins/bootstrap/js/bootstrap.bundle.min.js' ?>"></script>
<!-- ChartJS -->
<script src="<?= URLROOT.'public/admin/pars/plugins/chart.js/Chart.min.js' ?>"></script>
<!-- Sparkline -->
<script src="<?= URLROOT.'public/admin/pars/plugins/sparklines/sparkline.js' ?>"></script>

<!-- daterangepicker -->
<script src="<?= URLROOT.'public/admin/pars/plugins/moment/moment.min.js' ?>"></script>
<script src="<?= URLROOT.'public/admin/pars/plugins/daterangepicker/daterangepicker.js' ?>"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?= URLROOT.'public/admin/pars/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js' ?>"></script>
<!-- Summernote -->
<script src="<?= URLROOT.'public/admin/pars/plugins/summernote/summernote-bs4.min.js' ?>"></script>
<!-- overlayScrollbars -->
<script src="<?= URLROOT.'public/admin/pars/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js' ?>"></script>
<!-- AdminLTE App -->
<script src="<?= URLROOT.'public/admin/pars/dist/js/adminlte.js' ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= URLROOT.'public/admin/pars/dist/js/pages/dashboard.js' ?>"></script>

    <?= (get_session('edit_empty_keys') != null) ? '<div class="modal-backdrop fade show"></div>' : ''; ?>
<?php
    $errors = new ErrorController;
    $errors -> clean_errors();
?>

</body>
</html>