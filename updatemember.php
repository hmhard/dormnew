<?php include 'header.php';?>

<?php
	include('connect.php');
	$idd=$_GET['id'];
	$result = mysqli_query($con,"SELECT * FROM members where id='$idd'");
		while($row = mysqli_fetch_array($result))
			{
			$id=$row['id'];
				$fnam=$row['firstname'];
				$lnam=$row['lastname'];
				$mna=$row['mname'];
				$sex=$row['sex'];
				$age=$row['dob'];
				$cont=$row['contact'];
				$prov=$row['province'];
				$dist=$row['district'];
				$bill=$row['billnum'];
				
			}
?>


 
 <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
          <li class="breadcrumb-item"><a href="viewmembers.php">View Members</a></li>
          <li class="breadcrumb-item active">Update Member</li>
        </ol>

        <!-- Page Content -->
     <div class="card mb-5 col-8 ">
          <div class="card-header bg-primary text-white">
            <i class="fas fa-table"></i>
            Data Table Example</div>
          <div class="card-body">
    
					  

<form action="execeditproduct.php" method="post">
	<input type="hidden" name="id" value="<?php echo $idd=$_GET['id'] ?>">

 <label for="firstname"> Firstname</label>
<input type="text" class="form-control" name="firstname" value="<?php echo $fnam ?>" class="ed">
 <label for="lastname"> Lastname</label>
<input type="text" name="lastname" class="form-control" value="<?php echo $lnam ?>" class="ed"><br>
 <label for="mname"> Middle Name</label>
<input type="text" name="mname" class="form-control"  value="<?php echo $mna ?>" class="ed">
 <label for="sex"> Sex</label>
<input type="text" name="sex" class="form-control"  value="<?php echo $sex ?>" class="ed">
 <label for="dob"> Date of birth</label>
<input type="date" name="dob" class="form-control"  value="<?php echo $age ?>" class="ed">
 <label for="contact"> Contact</label>
<input type="text" name="contact" class="form-control"  value="<?php echo $cont ?>" class="ed">
 <label for="province"> Province</label>
<input type="text" name="province" class="form-control"  value="<?php echo $prov ?>" class="ed">
 <label for="district"> District</label>
<input type="text" name="district" class="form-control"  value="<?php echo $dist ?>" class="ed">
 <label for="district"> payment index</label>
<input type="text" name="billnum" class="form-control"  value="<?php echo $bill ?>" name="" class="ed">

</div>
<div align="right">
	<input type="submit" class="btn btn-success col-4" value="Edit" id="button1" name="Edit">
				  </div>
	</form>
  
  </div>
					</div>
		</div>
		


<?php include 'footer.php';?>