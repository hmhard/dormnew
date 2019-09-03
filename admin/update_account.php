
<?php
require('connect.php');

if(isset($_POST['submit'])){
	
$user_id=$_POST['user_id'];
$user_name=$_POST['user_name'];
$pass_word=$_POST['pass_word'];
$type=$_POST['type'];

$update=mysqli_query($con,"update user set user_name='$user_name', pass_word='$pass_word',type='$type' where user_id=$user_id");


if($update){
	echo "<script>alert('updated successfully')</script>";
	header ('location:view_accounts.php');
}
else{
	echo "<script>alert('Error Occured'".mysqli_error($con).")</script>";
}

}



?>

<?php include 'headern.php';?>

<?php
	include('connect.php');
	if(isset($_GET['id'])){
	$idd=$_GET['id'];
	$result = mysqli_query($con,"SELECT * FROM user where user_id=$idd");
		while($row = mysqli_fetch_array($result))
			{
			$id=$row['user_id'];
				$user_name=$row['user_name'];
				$pass_word=$row['pass_word'];
				
				$type=$row['type'];
				
			}
?>


 
 <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
          <li class="breadcrumb-item"><a href="view_accounts.php">View Users</a></li>
          <li class="breadcrumb-item active">Update User</li>
        </ol>

        <!-- Page Content -->
     <div class="card mb-5 col-8 ">
          <div class="card-header bg-primary text-white">
            <i class="fas fa-table"></i>
            User Data Table</div>
          <div class="card-body">
    
					  

				<form id="registermember" class="clearfix" method="post" action="update_account.php" enctype="multipart/form-data" onsubmit="return validate();">
					<div class="alert alert-info">Personal Data</div>
					
					<div class="input-box input-small left">
						<label for="user_name">User Name</label><br>
						<input type="hidden" name="user_id" value="<?php echo $id;?>">
						<input type="text" class="inputField user_name form-control" id="user_name" name="user_name" value="<?php echo $user_name; ?>" required >
						<div class="error firstnameerror "></div>
					</div>
					
					<div class="input-box input-small right">
						<label for="pass_word">Password</label><br>
						<input type="text" class="inputField pass_word form-control" name="pass_word" value="<?php echo $pass_word; ?>" required>
						<div class="error lastnameerror"></div>
					</div>
					
						<div class="input-box input-small right">
						<label for="type">Type</label><br>
						<select class="inputField empstatus form-control" name="type" required>
							<option value="">-- Select Type --</option>
							<option value="admin" selected>Admin</option>
							<option value="manager">Manager</option>
							<option value="skeeper">Store Keeper</option>
							<option value="Beneficiary"> Beneficiary</option>
						</select>
						<div class="error empstatuserror"></div>
					</div>
								<br>			
								<br>			
						<button type="submit" name="submit" class="submitField form-control btn btn-primary">Add record</button>
					</div>
				</form>
  
  </div>
					</div>
		</div>
		


<?php include '../footer.php';
	}
?>