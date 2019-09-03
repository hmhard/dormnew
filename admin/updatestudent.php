<?php
ob_start();
//echo $_SESSION['user'];
//if(isset($_SESSION['user'])){
include('db.php');
if(isset($_POST['register'])){
	if(!empty($_POST['fname'])&& !empty($_POST['lname'])&& !empty($_POST['sname'])&& !empty($_POST['age'])&& !empty($_POST['status'])&& !empty($_POST['idno'])){
		
		 echo $idno=$_POST['idno'];
		 echo $fname=$_POST['fname'];
		 echo $lname=$_POST['lname'];	
		 echo $sname=$_POST['sname'];
		 echo $age=$_POST['age'];
		 echo $gender=$_POST['gender'];
		  echo $status=$_POST['status'];
		 echo $year=$_POST['year'];
		 echo $dept=$_POST['dept'];

		include('db.php');
			$q1="INSERT INTO students(idno,firstname,lastname,surname,age,gender,status,year,department) values('$idno','$fname','$lname','$sname',$age,'$gender','$status',$year,'$dept')";
			if(mysqli_query($conn,$q1)){

			echo '<script>alert("inserted succesfully");</script>';	
			
			}
			else{
				echo '<script>alert("error occurred");</script>';
			}
			
	
	
	}
	



?>
<!DOCTYPE html>
<html lang="en">
<head>

<title>wsu dormitory management system</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Resort Inn Responsive , Smartphone Compatible web template , Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
		
<!--css-->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />		
<link href="css/register.css" rel="stylesheet">	
</head>
<body>		
<?php
}

if(isset($_GET['update'])){
	
include('db.php');
$idno=$_POST['id'];
$sql="SELECT *FROM students where idno=$idno";
if(mysqli_query($conn, $sql)){
	$res=mysqli_query($conn, $sql);
	$row=mysqli_fetch_assoc($res);
}
?>
<div class="table-responsive">

<table class="table table-condensed">
<form name="form1" id="form1" method="POST" action="student_register.php">
<tr>
<th colspan="2">
Student Update Form
</th>
</tr>
<tr>
<td >
<div class="form-group">
  <label for="idno">ID Number:</label></td>
<td>
  <input type="text" class="form-control"  name="idno" id="idno" value="<?php echo $row['idno'];?>" required>
</div>
</tr>
<tr>
<td >
<div class="form-group">
  <label for="fname">First Name:</label></td>
<td>
  <input type="text" class="form-control"  name="fname" id="fname"  value="<?php echo $row['fname'];?>" required>
</div>
</tr>
<tr>
<td >
<div class="form-group">
  <label for="lname">Last Name:</label></td>
<td>
  <input type="text" class="form-control"  name="lname" id="lname"  value="<?php echo $row['idno'];?>" required>
</div>
</tr>
<tr>
<td >
<div class="form-group">
  <label for="sname">Sur Name:</label></td>
<td>
  <input type="text" class="form-control"  name="sname" id="sname" required>
</div>
</tr>
<tr>
<td >
<div class="form-group">
  <label for="age">Age:</label></td>
<td>
  <input type="number" class="form-control"  name="age" id="age" required>
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
  <label for="status">Status:</label></td>
<td>
  <select name="status" id="status" required>
  <option value="#">Select status</option>
  <option value="regular">Regular</option>
  <option value="summer">Summer</option>
  </select>
  </div>
</tr>
<tr>
<td >
<div class="form-group">
  <label for="year">Year:</label></td>
<td>
  <select name="year" id="year" required>
  <option value="#">Select Year</option>
  <option value="1">1st</option>
  <option value="2">2nd</option>
  <option value="3">3rd</option>
  <option value="4">4th</option>
  <option value="5">5th</option>
  <option value="6">6th</option>
  <option value="7">7th</option>
  </select>
  </div>
</tr>
<tr>
<td >
<div class="form-group">
  <label for="dept">Department:</label></td>
<td>
<select name="dept" id="dept" required>
  <option value="#">Select Department</option>
  <option value="cs">CS</option>
  </select>
</div>
</tr>
<tr>
<td >
<div class="form-group">
  <label for="register"></label></td>
<td>
  <input type="submit" class="form-control btn btn-success"  name="register" id="register"  value="Register">
</div>
</tr>
</form>
</table>
</div>

</body>
</html>		
<?php


if($_GET['type']){
	?>
	<h1> insert <?php echo $_GET['type'];?> Idno</h1>
<form class="form-inline" role="form" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <div class="form-group">
    <label  for="id">Student Id:</label>
    <input type="text" class="form-control" id="id" name="id">
  </div>
  <input type="submit" name="search" class="btn btn-primary" value="Search"/>
</form>		

	
	
	<?php
}
}

?>
