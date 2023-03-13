
<!-- jQuery -->
<script src="/admin/rtl/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="/admin/rtl/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="/admin/rtl/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="/admin/rtl/dist/js/adminlte.js"></script>
<!-- ChartJS -->
<script src="/admin/rtl/plugins/chart.js/Chart.min.js"></script>
<!-- JQVMap -->
<script src="/admin/rtl/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="/admin/rtl/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="/admin/rtl/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="/admin/rtl/plugins/moment/moment.min.js"></script>
<script src="/admin/rtl/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="/admin/rtl/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="/admin/rtl/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="/admin/rtl/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE for demo purposes -->
{{-- <script src="/admin/dist/js/demo.js"></script> --}}
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="/admin/rtl/dist/js/pages/dashboard.js"></script>

<!-- DataTables  & rtl/plugins -->
<script src="/admin/rtl/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/admin/rtl/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="/admin/rtl/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="/admin/rtl/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="/admin/rtl/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="/admin/rtl/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="/admin/rtl/plugins/jszip/jszip.min.js"></script>
<script src="/admin/rtl/plugins/pdfmake/pdfmake.min.js"></script>
<script src="/admin/rtl/plugins/pdfmake/vfs_fonts.js"></script>
<script src="/admin/rtl/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="/admin/rtl/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="/admin/rtl/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<!-- Select2 -->
<script src="/admin/rtl/plugins/select2/js/select2.full.min.js"></script>
<!-- SweetAlert2 -->
<script src="/admin/rtl/plugins/sweetalert2/sweetalert2.min.js"></script>

<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })
  })
  
  </script>
<!-- Sparkline -->
<script src="/admin/rtl/plugins/sparklines/sparkline.js"></script>
<!-- Bootstrap 4 rtl -->
<script src="https://cdn.rtlcss.com/bootstrap/v4.2.1/js/bootstrap.min.js"></script>