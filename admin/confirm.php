<?php
if(isset($_POST['register'])){
		require('connect.php');
		// Check connection
		if (mysqli_connect_errno())
		  {
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
		  }
		
	
		$id = $_POST['id'];
		
				$valddate=$_POST['valddate'];
				$expdate=$_POST['expdate'];
				
		$query=mysqli_query($con,"Select * From confirmed Where beneficiary_id=$id");
		if(mysqli_affected_rows($con)>0) {
		echo "THE CLIENT YOU ARE TRYING TO COMFORM IS ALREAD IN THE SYSTEM MAKE SURE IF YOU HAVE SELECTED THE RIGHT ONE!!";
		} 
		else 
		{
		mysqli_query($con,"INSERT INTO confirmed(beneficiary_id, validation_date, expiry_date)
		VALUES ($id,'$valddate','$expdate')");
		//header('location:view_beneficiary.php');
}}
		?>











<?php include 'headern.php';?>

<?php
	include('connect.php');
	
	$idd=$_GET['id'];
	$result = mysqli_query($con,"SELECT * FROM beneficiary where beneficiary_id=$idd");
		while($row = mysqli_fetch_array($result))
			{
			$id=$row['beneficiary_id'];
				$fname=$row['first_name'];
				$lname=$row['last_name'];
				
				$gender=$row['gender'];
				$birth_date=$row['birth_date'];
				
				$contact=$row['contact'];
				$category=$row['category'];
				$woreda=$row['woreda'];
				$kebele=$row['kebele'];
				$village=$row['village'];
				$nos_of_fam=$row['nos_of_fam'];
				$nos_of_f=$row['nos_of_f'];
				$nos_of_m=$row['nos_of_m'];
				$email=$row['email'];
			
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
		<form action="confirm.php" method="post" class="form-inline" role="form">
		<label><font size="3">Client Member: </font></label></br></br>
		<label><font size="3">As: <strong> <?php echo $fname ?> <?php echo $lname ?></strong></label></font></br></br>
		<input type="hidden" name="id" value="<?php echo $id ?>" class="ed">

		<?php
			include('connect.php');
			$idd=$_GET['id'];
			$result = mysqli_query($con,"SELECT * FROM beneficiary where beneficiary_id=$id");
				while($row = mysqli_fetch_array($result))
					{
						$image=$row['imageurl'];
					}
		?>
		<img width="250" height="200" class="card-img-top" src="../images/uploads/<?php echo $image ?>"><br>
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
		

	   
	   <?php include '../footer.php';?>