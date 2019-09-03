<?php include 'headern.php'; 
   require_once('connect.php');
	
	$getp=mysqli_query($con,'select * from students where idno=78');
	$row=mysqli_fetch_array($getp);
	
		
	
	
 ?>
    <div id="content-wrapper">
      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="index.php">Dashboard</a>
          </li>
         
        </ol>

        <!-- Page Content -->
     <div class="card mb-3 col-md-8 ">
          <div class="card-header bg-info text-white">
            <i class="fas fa-table"></i>
            Student info</div>
          <div class="card-body">
		  

				
				
				  <div class="form-group left">
				    <label for="startDate" class=" control-label">IdNo</label>
				    <div class="">
				      <input type="text"  class="form-control datepicker" id="startDate" name="startDate" value="<?php echo $row['idno'];?>" />
				    </div>
				  </div>
				  <div class="form-group right">
				    <label for="endDate" class=" control-label">Full Name</label>
				    <div class="">
				      <input type="text"  class="form-control datepicker" id="endDate" name="endDate" placeholder="Card Number" value="<?php echo $row['firstname'].' '.$row['lastname']; ?>"/>
				    </div>
				  </div>
				  <div class="form-group left">
				    <label for="endDate" class=" control-label">Age</label>
				    <div class="">
				      <input type="text"  class="form-control datepicker" id="endDate" name="endDate" value="<?php echo $row['age'];?>"  />
				    </div>
				  </div>
				  <div class="form-group right">
				    <label for="endDate" class=" control-label">Gender</label>
				    <div class="">
				      <input type="text"  class="form-control datepicker" id="endDate" name="endDate" value="<?php echo $row['gender'];?>"  />
				    </div>
				  </div>
				
				<div class="form-group left">
				    <label for="endDate" class=" control-label">Year</label>
				    <div class="">
				      <input type="text"  class="form-control datepicker" id="endDate" name="endDate" value="<?php echo $row['year'].' Year';?>"  />
				    </div>
				  </div>
				  <div class="form-group right">
				    <label for="endDate" class=" control-label">Department</label>
				    <div class="">
				      <input type="text"  class="form-control datepicker" id="endDate" name="endDate" value="<?php echo $row['department'];?>"  />
				    </div>
				  </div>
				
				     
				  
				
				

		
</div>
 
</div>
</div>
</div>
</div>
</div>



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