  <!-- Sticky Footer 
     </div>
	 <footer class="sticky-footer">
         <div class="container my-auto">
		<br>
2019 ©
<a class="btn btn-link" href="#">WSU</a>
by
<a class="btn btn-link" href="#">Your Life Our Life!</a>
</div>
          <div class="copyright text-center my-auto">
            <span>Copyright © Your Website 2019</span>
          </div>
        </div>
      </footer>-->

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="../logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="../vendor/chart.js/Chart.min.js"></script>
  <script src="../vendor/datatables/jquery.dataTables.js"></script>
  <script src="../vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../js/sb-admin.min.js"></script>

  <script src="../js/demo/mai.js"></script>
  <script src="../js/demo/jquery.validate.js"></script>
  <script src="../js/demo/datepicker/js/bootstrap-datepicker.js"></script>
  <script src="../js/demo/jquery-ui.min.js"></script>
  <!-- Demo scripts for this page-->
  <script src="../js/demo/datatables-demo.js"></script>
  <!--<script src="js/demo/chart-area-demo.js"></script>-->
  
</body>

</html>


<script>
$(function(){
	// alert('dgdfg');
	$('#datepicker').datepicker({
		dateFormat:'yy-mm-dd',
		chooseYear:true,
		chooseMonth:true,
		maxDate:new Date(2009,12,12)
		
	});
});
	
$('.nav-item').click(function(){
	 
	
	$(this).addClass('actived');
//});
});
</script>