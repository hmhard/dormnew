<script  src="js/jquery-2.1.4.min.js"></script>
<script  src="js/jquery-ui.js"></script>
<script  src="js/bootstrap.min.js"></script>


<script  src="js/jquery.validate.js"></script>

      <script src="js/jquery.metisMenu.js"></script>
    <script src="js/dataTables/jquery.dataTables.js"></script>
    <script src="js/dataTables/dataTables.bootstrap.js"></script>
    <script src="js/tabledit/jquery.tabledit.min.js"></script>
        <script>
            $('document').ready(function () {
             //alert('fdgdf');
			  $('#data-table').dataTable();
			  
			  
			  $("select").addClass('col-sm-12');
			  
			//  $('<i class="fa fa-dashboard"></i>').ibsertAfter(":submit");
			  
			  
			  $(':submit').mouseenter(function(){
			  $(this).css({'background':'white','color':'#5CB85C;'});
			  }).mouseleave(function(){
				  $(this).css({'background':'#5CB85C','color':'white'});
			  });
	       });
		   $('#addnewbtn').click(function(){
	  $('#myModal').modal('show');
   });
    </script>
         <!-- Custom Js -->
