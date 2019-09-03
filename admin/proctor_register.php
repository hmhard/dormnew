<?php
ob_start();
//echo $_SESSION['user'];
//if(isset($_SESSION['user'])){
include('db.php');

if(isset($_POST['register'])){
	if(!empty($_POST['idno']) && !empty($_POST['fname'])&& !empty($_POST['lname'])&& !empty($_POST['sname'])&& !empty($_POST['age'])&& !empty($_POST['phone'])&& !empty($_POST['email'])){
		
		  $idno=$_POST['idno'];
		  $fname=$_POST['fname'];
		  $lname=$_POST['lname'];	
		  $sname=$_POST['sname'];
		  $age=$_POST['age'];
		  $gender=$_POST['gender'];
		   $rank=$_POST['rank'];
		  $phone=$_POST['phone'];
		  $email=$_POST['email'];

		include('db.php');
			$q1="INSERT INTO proctor(idno,firstname,lastname,surname,age,gender,rank,phone,email) values('$idno','$fname','$lname','$sname',$age,'$gender','$rank',$phone,'$email')";
			if(mysqli_query($conn,$q1)){

			echo '<span class="alert alert-success alert-dismissible fade in">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			inserted succesfully</span>';
			}
			else{
				echo '<script>alert("error occurred");</script>';
			}
			
	
	
	}
	
}



?>
<!DOCTYPE html>
<html lang="en">
<head>

<title>wsu dormitory management system</title>

<?php 
include 'headern (2).php';
//include 'css.php'; 
?>	
<!--<link href="css/register.css" rel="stylesheet">	-->
</head>
<body>		
<div class="table-responsive">

<table class="table  table-condensed">
<form name="stud_reg" method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
<tr>
<th colspan="2">
Proctor Registration Form
<span class="alert alert-danger" id="validmsg"></span>
</th>
</tr>
<tr>
<td >
<div class="form-group">
  <label for="idno">ID Number:</label></td>
<td>
  <input type="text" class="form-control"  name="idno" id="idno"  pattern="PR\-[0-9/]{4,}" required>
</div>
</tr>
<tr>
<td >
<div class="form-group">
  <label for="fname">First Name:</label></td>
<td>
  <input type="text" class="form-control"  name="fname" id="fname"  pattern="[a-zA-Z]{4,}" required>
</div>
</tr>
<tr>
<td >
<div class="form-group">
  <label for="lname">Last Name:</label></td>
<td>
  <input type="text" class="form-control"  name="lname" id="lname"  pattern="[a-zA-Z]{4,}" required>
</div>
</tr>
<tr>
<td >
<div class="form-group">
  <label for="sname">Sur Name:</label></td>
<td>
  <input type="text" class="form-control"  name="sname" id="sname"  pattern="[a-zA-Z]{4,}" required>
</div>
</tr>
<tr>
<td >
<div class="form-group">
  <label for="age">Age:</label></td>
<td>
  <input type="number" class="form-control"  name="age" id="age"  pattern="[0-9]{2,3}" min='15' max="100" required>
</div>
</tr>
<tr>
<td >
<div class="form-group">
  <label for="gender">Gender:</label></td>
<td>
  <select name="gender" id="gender" required>
  <option value="#">Select Gender</option>
  <option value="male">Male</option>
  <option value="female">Female</option>
  </select>
  </div>
</tr>
<tr>
<td >
<div class="form-group">
  <label for="rank">Rank:</label></td>
<td>
  <select name="rank" id="rank" required>
  <option value="#">Select Rank</option>
  <option value="diploma">Diploma</option>
  <option value="degree">Degree</option>
  </select>
  </div>
</tr>
<tr>
<td>
<div class="form-group">
  <label for="phone">Phone Number:</label></td>
<td>
  <input type="text" class="form-control"  name="phone" id="phone"  pattern="\+251[0-9]{8}|09[0-9]{8}" required>
</div>
</tr>
<tr>
<td>
<div class="form-group">
  <label for="email">Email(optional):</label></td>
<td>
  <input type="email" class="form-control"  name="email" id="email">
</div>
</tr>

<tr>
<td >
<div class="form-group">
  <label for="register"></label></td>
<td>
  <input type="submit" class="form-control btn btn-success"  name="register" id="register" value="Register">
</div>
</tr>
</form>
</table>
</div>
 <?php
 include 'footer (2).php';
include 'js.php'; 
?>
<script>
$(function(){
		
	$('#fname,#lname,#sname').keydown(function(e){
		if(e.key>'0' && e.key<'9'){
		
			$('#validmsg').fadeIn(10).text('not string');
			return false;
		}
		else{
			$('#validmsg').fadeOut();
		}
	});
	

});
</script>

</body>
</html>		