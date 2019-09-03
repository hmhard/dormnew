
<?php
require('connect.php');

if(isset($_POST['submit'])){
	
$beneficiary_id=$_POST['beneficiary_id'];
$first_name=$_POST['firstname'];
$last_name=$_POST['lastname'];
$birth_date=$_POST['dob'];
$gender=$_POST['gender'];
$category=$_POST['category'];
$woreda=$_POST['woreda'];
$kebele=$_POST['kebele'];
$village=$_POST['village'];
$contact=$_POST['contact'];
$email=$_POST['email'];
$nof_of_fam=$_POST['nof'];
$nof_of_f=$_POST['nom'];
$nof_of_m=$_POST['nofm'];
$update=mysqli_query($con,"update  beneficiary set first_name='$first_name', last_name='$last_name',birth_date=$birth_date,gender='$gender',category='$category',woreda='$woreda',kebele='$kebele',village='$village', contact=$contact,email='$email',nos_of_fam=$nof_of_fam,nos_of_m=$nof_of_m,nos_of_f=$nof_of_f where beneficiary_id=$beneficiary_id");


if($update){
	echo "<script>alert('updated successfully')</script>";
	header('location:view_beneficiary.php');
}
else{
	echo "<script>alert('Error Occured'".mysqli_error($con).")</script>";
}

}



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
				
			}
?>


 
 <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
          <li class="breadcrumb-item"><a href="view_beneficiary.php">View Members</a></li>
          <li class="breadcrumb-item active">Update Beneficiary</li>
        </ol>

        <!-- Page Content -->
     <div class="card mb-5 col-8 ">
          <div class="card-header bg-primary text-white">
            <i class="fas fa-table"></i>
            Beneficiary Data Table</div>
          <div class="card-body">
    
					  

				<form id="registermember" class="clearfix" method="post" action="updatebeneficiary.php" enctype="multipart/form-data" onsubmit="return validate();">
					<div class="alert alert-info">Personal Data</div>
					
					<div class="input-box input-small left">
						<label for="firstname">First Name</label><br>
						<input type="hidden" name="beneficiary_id" value="<?php echo $id;?>">
						<input type="text" class="inputField firstname form-control" id="firstname" name="firstname" value="<?php echo $fname; ?>" required>
						<div class="error firstnameerror "></div>
					</div>
					
					<div class="input-box input-small right">
						<label for="lastname">Last Name</label><br>
						<input type="text" class="inputField lastname form-control" name="lastname" value="<?php echo $lname; ?>" required>
						<div class="error lastnameerror"></div>
					</div>
					<div class="input-box input-small left">
						<label for="dob">Birth Date</label><br>
						<input type="t" id="datepicker" class="inputField dob form-control" name="dob">
						<div class="error phoneerror" value="<?php echo $birth_date; ?>" required></div>
					</div>
						<div class="input-box input-small right">
						<label for="gender">Gender</label><br>
						<select class="inputField empstatus form-control" name="gender" required>
							<option value="">-- Select Gender --</option>
							<option value="male" selected>Male</option>
							<option value="female">Female</option>
						</select>
						<div class="error empstatuserror"></div>
					</div>
					<div class="input-box input-small left">
						<label for="category">Category</label><br>
						<input type="id" class="inputField category form-control" placeholder="Optional" name="category" value="<?php echo $category; ?>" required>
						
					</div>
				
					<div class="input-box input-small right">
						<label for="woreda">Woreda</label><br>
						<select class="inputField empstatus form-control" name="woreda" required>
							<option value="">-- Select woreda --</option>
							<option value="Jimma" >Jimma</option>
							<option value="Addis" selected>Addis</option>
						</select>
						<div class="error empstatuserror"></div>
					</div><div class="input-box input-small left">
						<label for="kebele">Kebele</label><br>
						<select class="inputField empstatus form-control" name="kebele" required>
							<option value="">-- Select kebele --</option>
							<option value="Agaro" selected>Agaro</option>
							<option value="Ayer Tena">Ayer Tena</option>
						</select>
						<div class="error empstatuserror"></div>
					</div>
					<div class="input-box input-small right">
						<label for="village" >Village</label><br>
						<input type="text" class="inputField village form-control" name="village" value="<?php echo $village; ?>" required>
						<div class="error jobtypeerror"></div>
					</div>
					<div class="input-box input-small left">
						<label for="contact">Contact</label><br>
						<input type="number" class="inputField contact form-control" name="contact" value="<?php echo $contact; ?>" required>
						<div class="error jobtypeerror"></div>
					</div>
					<div class="input-box input-small right">
						<label for="email">Email</label><br>
						<input type="email" class="inputField email form-control" name="email" value="<?php echo $email; ?>" required>
						<div class="error jobtypeerror"></div>
					</div>
					<div class="input-box input-small left">
						<label for="nof">Number of Family</label><br>
						<input type="number" class="inputField nof form-control" name="nof" value="<?php echo $nos_of_fam; ?>" required>
						<div class="error jobtypeerror"></div>
					</div>
					<div class="input-box input-small right">
						<label for="nom">Number of Males</label><br>
						<input type="number" class="inputField nom form-control" name="nom" value="<?php echo $nos_of_m; ?>" required>
						<div class="error jobtypeerror"></div>
					</div>
					<div class="input-box input-small left">
						<label for="nofm">Number of Females</label><br>
						<input type="number" class="inputField nofm form-control" name="nofm" value="<?php echo $nos_of_f; ?>" required>
						<div class="error jobtypeerror"></div>
					</div>
			
								<br>			
								<br>			
						<button type="submit" name="submit" class="submitField form-control btn btn-primary">Add record</button>
					</div>
				</form>
  
  </div>
					</div>
		</div>
		


<?php include '../footer.php';?>