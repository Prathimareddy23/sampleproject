<?php if(!isset($footer)): ?>

  <footer class="main-footer">
    <strong><?= "Copyright © 2020 Prathima Admin All rights reserved." ?></strong>
    <div class="float-right d-none d-sm-inline-block">
      <b>Developed By:</b> Prathima
    </div>
  </footer>

  <?php endif; ?>  

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  
</div>
<!-- ./wrapper -->


<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?= base_url() ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Slimscroll -->
<script src="<?= base_url() ?>assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?= base_url() ?>assets/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url() ?>assets/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url() ?>assets/dist/js/demo.js"></script>
<!-- Notify JS -->
<script src="<?= base_url() ?>assets/plugins/notify/notify.min.js"></script>
<!-- DROPZONE -->
<script src="<?= base_url() ?>assets/plugins/dropzone/dropzone.js" type="text/javascript"></script>

<script>

var csfr_token_name = '<?php echo $this->security->get_csrf_token_name(); ?>';

var csfr_token_value = '<?php echo $this->security->get_csrf_hash(); ?>';

</script>

</body>
</html>
