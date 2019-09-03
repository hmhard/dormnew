<?php
session_start();
if(isset($_POST['register'])){
		require('connect.php');
		// Check connection
		if (mysqli_connect_errno())
		  {
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
		  }
		
	
		$id = $_POST['id'];
		$confirmed_by=$_SESSION['manager_id'];
				$valddate=$_POST['valddate'];
				$expdate=$_POST['expdate'];
				$cardNum=rand(100000,999999);
		$query=mysqli_query($con,"Select * From confirmed Where beneficiary_id=$id");
		if(mysqli_affected_rows($con)>0) {
		echo "THE CLIENT YOU ARE TRYING TO COMFORM IS ALREAD IN THE SYSTEM MAKE SURE IF YOU HAVE SELECTED THE RIGHT ONE!!";
		} 
		else 
		{
		mysqli_query($con,"INSERT INTO confirmed(beneficiary_id, confirmed_by,validation_date, expiry_date,card_number)
		VALUES ($id,$confirmed_by,'$valddate','$expdate','$cardNum')");
		mysqli_query($con,"update approved_cases set status=1 where benef_id=$id");
		header('location:view_confirmed.php');
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
            Logistics Member</div>
          <div class="card-body">
		<form action="confirm.php" method="post" class="form-inline" role="form">
		<div class="" style="clear:both;width:100%">
						<label for="username">Case</label><br>
						<textarea class="inputField username form-control" name="case" pattern="[a-zA-Z]{6,}" rows="5" cols="10" required placeholder="what is Your  case"></textarea>
						<div class="error case"></div>
					</div>
		
		<div class="" style="clear:both;width:100%">
						<label for="username">Case</label><br>
						<textarea class="inputField username form-control" name="case" pattern="[a-zA-Z]{6,}" rows="5" cols="10" required placeholder="what is Your  case"></textarea>
						<div class="error case"></div>
					</div></div>
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