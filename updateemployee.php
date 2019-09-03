<?php include 'header.php';?>

<?php
	include('connect.php');
	$idd=$_GET['id'];
	$result = mysqli_query($con,"SELECT * FROM employee where emp_id='$idd'");
		while($row = mysqli_fetch_array($result))
			{
			$id=$row['emp_id'];
				$fname=$row['first_name'];
				$lname=$row['last_name'];
				$mname=$row['middle_name'];
				$phone=$row['phone'];
				$date=$row['date_employed'];
			
				
			}
?>


 
 <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
          <li class="breadcrumb-item"><a href="viewemployees.php">View Employee</a></li>
          <li class="breadcrumb-item active">Update Employee</li>
        </ol>

        <!-- Page Content -->
     <div class="card mb-9 col-8 ">
          <div class="card-header bg-primary text-white">
            <i class="fas fa-table"></i>
            Data Table Example</div>
          <div class="card-body">
    
					  

<form action="updateemp.php" method="post">
	<input type="hidden" name="id" value="<?php echo $idd=$_GET['id'] ?>">

 <label for="firstname"> Firstname</label>
<input type="text" class="form-control" name="firstname" value="<?php echo $fname ?>" class="ed">
 <label for="lastname"> Lastname</label>
<input type="text" name="lastname" class="form-control" value="<?php echo $lname ?>" class="ed"><br>
 <label for="mname"> Middle Name</label>
<input type="text" name="mname" class="form-control"  value="<?php echo $mname ?>" class="ed">
 <label for="phone"> Phone</label>
<input type="text" name="phone" class="form-control"  value="<?php echo $phone ?>" class="ed">
 <label for="date"> Date Employed</label>
<input type="date" name="date" class="form-control"  value="<?php echo $date ?>" class="ed">
 
</div>
<div align="right">
	<input type="submit" class="btn btn-success col-4" value="Edit" id="button1" name="Edit">
				  </div>
	</form>
  
  </div>
  </div>
		</div>
		


<?php include 'footer.php';?>