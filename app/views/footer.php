</div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
                    <strong>Copyright &copy; 2017 <a href="" >Bqb Soft</a>. </strong> Tüm hakları saklıdır.
                </footer>


  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->
 <!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- Morris.js charts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="plugins/morris/morris.min.js"></script>
    <!-- FastClick -->
    <script src="plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js"></script>
    <script src="dist/js/bootstrap-select.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script><!-- InstanceBeginEditable name="scriptler" -->

    <script>
  $(function() {
    $( "#StartDate" ).datepicker();
  });
  
   $(function() {
    $( "#EndDate" ).datepicker();
  });
  </script>
  <link rel="stylesheet" type="text/css" href="../dist/css/bootstrap-datepicker3.min.css" >
  <script src="dist/js/bootstrap-datepicker.min.js"></script>
  	

   <!-- DataTables -->
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
	<script>
      $(function () {
        $('#liste1').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
      });
    </script>

</body>
</html>
