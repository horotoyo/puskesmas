<!-- jQuery 3 -->
<script src="../../AdminLTE-2.4.5/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../../AdminLTE-2.4.5/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="../../AdminLTE-2.4.5/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="../../AdminLTE-2.4.5/bower_components/raphael/raphael.min.js"></script>
<script src="../../AdminLTE-2.4.5/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="../../AdminLTE-2.4.5/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="../../AdminLTE-2.4.5/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="../../AdminLTE-2.4.5/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>

<!-- jQuery Knob Chart -->
<script src="../../AdminLTE-2.4.5bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../../AdminLTE-2.4.5bower_components/moment/min/moment.min.js"></script>
<script src="../../AdminLTE-2.4.5bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="../../AdminLTE-2.4.5bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="../../AdminLTE-2.4.5plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>

<!-- Slimscroll -->
<script src="../../AdminLTE-2.4.5/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- AdminLTE App -->
<script src="../../AdminLTE-2.4.5/dist/js/adminlte.min.js?v=1.0"></script>
<script src="../../AdminLTE-2.4.5/dist/js/adminlte.min.js?v=1.2"></script>

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../../AdminLTE-2.4.5/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../AdminLTE-2.4.5/dist/js/demo.js"></script>
<!-- DataTables -->
<script src="../../AdminLTE-2.4.5/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../../AdminLTE-2.4.5/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>


<!-- FastClick -->
<script src="../../AdminLTE-2.4.5/bower_components/fastclick/lib/fastclick.js"></script>
<!-- CK Editor -->
<script src="../../AdminLTE-2.4.5/bower_components/ckeditor/ckeditor.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="../../AdminLTE-2.4.5/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="../../AdminLTE-2.4.5/plugins/iCheck/icheck.min.js"></script>
<!-- Pop up js script -->
<script src="../../js/popup.js"></script>

<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1')
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
  })
</script>

<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>