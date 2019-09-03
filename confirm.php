<?php include 'header.php';?>



<?php
	include('connect.php');
	 $idd=$_GET['id'];
	$result = mysqli_query($con,"SELECT * FROM members where id='$idd'");
		while($row = mysqli_fetch_array($result))
			{
			$id=$row['id'];
			$image=$row['urlimage'];
			$fnam=$row['firstname'];
				$lnam=$row['lastname'];
				$mna=$row['mname'];
				$sex=$row['sex'];
				$age=$row['dob'];
				$cont=$row['contact'];
				$prov=$row['province'];
				$dist=$row['district'];
				
				$today = date("d-m-Y");
				$num=date("Y")+1;
				$nexttoday=date("d-m-$num");
			}
?>


 
 <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
          <li class="breadcrumb-item"><a href="viewmembers.php">View Members</a></li>
          <li class="breadcrumb-item active">Members</li>
        </ol>

        <!-- Page Content -->
     <div class="col-md-7" style="margin-left:20%">
     <div class="card">
          <div class="card-header bg-primary text-white">
            <i class="fas fa-table"></i>
            EHLI Member</div>
          <div class="card-body">
		<form action="insert.php" method="post" class="form-inline" role="form">
		<label><font size="3">Client Member: </font></label></br></br>
		<label><font size="3">As: <strong> <?php echo $fnam ?> <?php echo $lnam ?><?php echo $mna  ?></strong></label></font></br></br>
		<input type="hidden" name="id" value="<?php echo $id ?>" class="ed">
		<input type="hidden" name="firstname" value="<?php echo $fnam ?>" class="ed">
		<input type="hidden" name="lastname" value="<?php echo $lnam ?>" class="ed">
		<input type="hidden" name="surname" value="<?php echo $mna ?>" class="ed">
		<input type="hidden" name="gender" value="<?php echo $sex ?>" class="ed">
		<input type="hidden" name="dob" value="<?php echo $age ?>" class="ed">
		<input type="hidden" name="contact" value="<?php echo $cont ?>" class="ed">
		<input type="hidden" name="province" value="<?php echo $prov ?>" class="ed">
		<input type="hidden" name="district" value="<?php echo $dist ?>" class="ed">
		<input type="hidden" value="<?php echo $image ?>" name="urlimage" class="ed">
		<?php
			include('connect.php');
			$idd=$_GET['id'];
			$result = mysqli_query($con,"SELECT * FROM members where id='$id'");
				while($row = mysqli_fetch_array($result))
					{
						$image=$row['urlimage'];
					}
		?>
		<img width="250" height="200" class="card-img-top" src="images/uploads/<?php echo $image ?>"><br>
		<div class="form-group">
		  <label for="valddate">
		Validation Date:
		  </label>
		<input type="text" class="form-control" id="valddate" name="valddate" value="<?php echo $today ?>" >
		</div>
		<div class="form-group">
		<div class="form-row">
		  <label for="expdate" class="">
		Expired Date:
		  </label>
		<input type="text" id="expdate"  name="expdate" class="form-control" value="<?php echo $nexttoday ?>" >
		</div>
		</div>
</div>
  <div class="card-footer">
<div align="right"><br>
<label><br>

	<input type="submit" class="form-control btn btn-primary" value="Submit" id="button1" name="register">

					  </div>
  </div>
</form>
  
					</div>
		</div>
		</div>
		</div>
		

	   
	   <?php include 'footer.php';?>