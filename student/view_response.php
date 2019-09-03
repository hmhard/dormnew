<?php include 'headern.php'; ?>
    <div id="content-wrapper">
      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="index.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Beneficiary</li>
        </ol>

        <!-- Page Content -->
     <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Members Table</div>
          <div class="card-body">
		  
		  
            <div class="table-responsive" id="printTable">
   <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
		<thead>
			<tr>
				
				<th> Image </th>
				<th width="5999" align="left">Names </th>
				<th> Sex </th>
				<th> D.o.birth</th>
				<th> TEL</th>
				<th>PROVINCE</th>
				<th>DISTR</th>
			
				<th>Bill</th>
				<th class="hidden-print"> ACTION</th>
				
				<th class="hidden-print"> COMFIRM</th>
		
			</tr>
		</thead>
		<tbody>
		<?php
			include('../connect.php');
			$result = mysqli_query($connect,"SELECT * FROM beneficiary");
			while($row = mysqli_fetch_array($result))
				{
					echo '<tr class="record">';
					
					echo '<td><a rel="facebox" href="editmemberimage.php?id='.$row['beneficiary_id'].'"><img width="50" height="50" src="../images/uploads/'.$row['imageurl'].'" width="80" height="50"></a></td>';
					echo '<td width="100"><div>'.$row['first_name'].' '.$row['last_name'].'</div></td>';
					echo '<td><div align="left">'.$row['gender'].'</div></td>';
					echo '<td><div align="left">'.$row['birth_date'].'</div></td>';
					echo '<td><div align="left">'.$row['contact'].'</div></td>';
					echo '<td><div align="left">'.$row['woreda'].'</div></td>';
					echo '<td><div align="left">'.$row['kebele'].'</div></td>';
					echo '<td><div align="left">'.$row['email'].'</div></td>';
					
					echo '<td class="hidden-print"><div align="center" bgcolor="yellow"><a rel="facebox" href="updatebeneficiary.php?id='.$row['beneficiary_id'].'">Update</a> | <a href="#" id="'.$row['beneficiary_id'].'" class="delbutton" title="Click To Delete">Delete</a></div></td>';
					echo '<td class="hidden-print"><div align="center"><a href="confirm.php?id='.$row['beneficiary_id'].'" name="confirm" id="confirm">CONFIRM</a>| <a rel="facebox" href="issue.php?beneficiary_id='.$row['beneficiary_id'].'">ERROR</a>';
	
					echo '</tr>';
				}
			?> 
		</tbody>
  </table>
      </div>
	  
			<button type="button" onclick="return print1('printTable')" class="btn btn-danger col-md-2 col-offset-md-2">Print all records</button>
      </div>
      </div>
      </div>
	  
      </div>
      
	 


<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

	 
	  <!-- /.container-fluid -->

    <?php include 'footer.php'; ?>
	
	
<script type="text/javascript">
$(function(){
	
});
$('img').hover(function(){
	var info=$(this).attr('src');
	//alert(info);
	$(this).parent().after('<img class="img-responsive" id="toolt"  href="#" src="'+info+'"></img>');
	//$('#myModal').modal();
	
	//$('img').attr('src',""+$('#image').val());
	
},
function(){
	
	$('#toolt').remove();

});


function print1(strid)
{
if(confirm("Do you want to print?"))
{
var values = document.getElementById(strid);
var printing =
window.open('','','left=0,top=0,width=750,height=600,toolbar=0,scrollbars=0,sta­?tus=0');
printing.document.write(values.innerHTML);
printing.document.close();
printing.focus();
printing.print();
printing.close();
}
}


$(function() {


$(".delbutton").click(function(){

//Save the link in a variable called element
var element = $(this);

//Find the id of the link that was clicked
var del_id = element.attr("id");

//Built a url to send

if(confirm("Sure you want to delete this update? There is NO undo!"))
{

$.ajax({
type: "GET",
url: "deleteroo.php",
data: {benefid:del_id},
success: function(data){
	alert(data);
}
});
$(this).parents(".record").animate({ backgroundColor: "yellow" }, "fast")
.animate({ opacity: "hide" }, "slow");

}

return false;

});

});

</script>