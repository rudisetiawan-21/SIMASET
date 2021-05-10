<footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.1.0
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="<?= base_url();?>/plugins/jquery/jquery.min.js"></script>
<script src="<?= base_url();?>/dist/js/jquery-3.3.1.js" type="text/javascript"></script>
<script src="<?= base_url();?>/dist/js/bootstrap.js" type="text/javascript"></script>
<script src="<?= base_url();?>/dist/js/jquery-ui.js" type="text/javascript"></script>
<script src="<?= base_url();?>/plugins/js/jquery.min.js"></script>
<script src="<?= base_url();?>/plugins/js/bootstrap.bundle.min.js"></script>
<!-- Bootstrap -->
<script src="<?= base_url();?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="<?= base_url();?>/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url();?>/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url();?>/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url();?>/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?= base_url();?>/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url();?>/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?= base_url();?>/plugins/jszip/jszip.min.js"></script>
<script src="<?= base_url();?>/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?= base_url();?>/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?= base_url();?>/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?= base_url();?>/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?= base_url();?>/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script src="<?= base_url();?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?= base_url();?>/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url();?>/dist/js/adminlte.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="<?= base_url();?>/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="<?= base_url();?>/plugins/raphael/raphael.min.js"></script>
<script src="<?= base_url();?>/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="<?= base_url();?>/plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="<?= base_url();?>/plugins/chart.js/Chart.min.js"></script>

<!-- AdminLTE for demo purposes -->
<script src="<?= base_url();?>/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?= base_url();?>/dist/js/pages/dashboard2.js"></script>

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": true, "autoWidth": false,
      // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>