<?php 
session_start();
error_reporting(0);
require_once 'headern.php';

	
	require_once('connect.php');
	
	$getp=mysqli_query($con,'select * from assign where stud_id=78');
	$row=mysqli_fetch_array($getp);
	
		if(mysqli_affected_rows($con)>0){
	
	
 ?>
    <div id="content-wrapper">
      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="index.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">About</li>
        </ol>

        <!-- Page Content -->
     <div class="card mb-3 col-md-8 ">
          <div class="card-header">
            <i class="fas fa-table"></i>
            dorm info</div>
          <div class="card-body">
		  

				
				
				  <div class="form-group left">
				    <label for="startDate" class=" control-label">Bed No</label>
				    <div class="">
				      <input type="text"  class="form-control datepicker" id="startDate" name="startDate" value="<?php echo $row['bedno'];?>" />
				    </div>
				  </div>
				  <div class="form-group right">
				    <label for="endDate" class=" control-label">Bed Type</label>
				    <div class="">
				      <input type="text"  class="form-control datepicker" id="endDate" name="endDate" placeholder="Card Number" value="<?php echo $row['bedtype']; ?>"/>
				    </div>
				  </div>
				  <div class="form-group left">
				    <label for="endDate" class=" control-label">Block Id</label>
				    <div class="">
				      <input type="text"  class="form-control datepicker" id="endDate" name="endDate" value="<?php echo $row['block_id'];?>"  />
				    </div>
				  </div>
				  <div class="form-group right">
				    <label for="endDate" class=" control-label">Dorm Id</label>
				    <div class="">
				      <input type="text"  class="form-control datepicker" id="endDate" name="endDate" value="<?php echo $row['dorm_id'];?>"  />
				    </div>
				  </div>
				
				     
				  
				
				

		
</div>
 <button type="submit" name="create" class="btn btn-success col-md-2" id="generateReportBt"> <i class=""></i> Back</button>
</div>
</div>
</div>

	<?php }
	else{
	?>
	<div class="container">
  <div class="jumbotron">
<div class="alert alert-danger ">

  <strong>Message!</strong> Your Request has Not been Approved.<br>
  wait...
</div>
</div>
</div>

<?php }

?>
<?php require_once 'footer.php'; ?>

<script>
$(function(){
	$('input, select').attr('disabled','on');
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
</script>