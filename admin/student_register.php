<?php

ob_start();
//echo $_SESSION['user'];
//if(isset($_SESSION['user'])){

include('db.php');
if(isset($_POST['register'])){
	if(!empty($_POST['fname'])&& !empty($_POST['lname'])&& !empty($_POST['sname'])&& !empty($_POST['age'])&& !empty($_POST['status'])&& !empty($_POST['idno'])){
		
		  $idno=$_POST['idno'];
		  $fname=$_POST['fname'];
		  $lname=$_POST['lname'];	
		  $sname=$_POST['sname'];
		  $age=$_POST['age'];
		  $gender=$_POST['gender'];
		   $status=$_POST['status'];
		  $year=$_POST['year'];
		  $dept=$_POST['dept'];

		include('db.php');
			$q1="INSERT INTO students(idno,firstname,lastname,surname,age,gender,status,year,department) values('$idno','$fname','$lname','$sname',$age,'$gender','$status',$year,'$dept')";
			if(mysqli_query($conn,$q1)){

			echo '<script>alert("inserted succesfully");</script>';	
			
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

<table class="table table-condensed">
<form name="form1" id="form1" method="POST" action="student_register.php" onsubmit="return validate();">
<tr>
<th colspan="2">
Student Registration Form 
<span class="alert alert-danger" id="validmsg"></span>
</th>
</tr>
<tr>
<td >
<div class="form-group">
  <label for="idno">ID Number:</label></td>
<td>
  <input type="text" class="form-control"  name="idno" id="idno"  pattern="RU\-[0-9/]{4,}" required>
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
  <input type="text" class="form-control"  name="lname" id="lname"   pattern="[a-zA-Z]{4,}" required>
</div>
</tr>
<tr>
<td >
<div class="form-group">
  <label for="sname">Sur Name:</label></td>
<td>
  <input type="text" class="form-control"  name="sname" id="sname"   pattern="[a-zA-Z]{4,}" required>
</div>
</tr>
<tr>
<td >
<div class="form-group">
  <label for="age">Age:</label></td>
<td>
  <input type="number" class="form-control" min="15" max="100" name="age" id="age"   pattern="[0-9]{2,3}" required>
</div>
</tr>
<tr>
<td >
<div class="form-group">
  <label for="gender">Gender:</label></td>
<td>
  <select name="gender" id="gender"  required>
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
  <select name="status" id="status"  required>
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
  <select name="year" id="year"  required>
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
<select name="dept" id="dept"  required>
  <option value="#">Select Department</option>
  <option value="cs">CS</option>
  <option value="IT">IT</option>
  <option value="Electrical">Electrical</option>
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
<?php include 'js.php';

 include 'footer (2).php';
// include 'footer.php';
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
	
	$('#age').keydown(function(e){		
		  if(!(e.key>='0' && e.key<='9' || e.key=="Backspace" || e.key=="Down" || e.key=="Up"|| e.key=="Left" || e.key=="Right"|| e.key=="Tab"||e.key=="Alt"||e.key=="Control")) {

			  $('#validmsg').fadeIn(10).text(e.key+' not number');
			 
		  return false;  
		  }
		else{
			$('#validmsg').fadeOut();
		}
	});
	
	$('#age').keydown(function(e){
		var len=$(this).val().length;
		if(len>=2){
			 $('#validmsg').fadeIn(10).text('age limit');
		  e.key=0;
		}	});

});
function validate(){
	var idno=$('#idno').val();
	var fname=$('#fname').val();
	var lname=$('#lname').val();
	var sname=$('#sname').val();
	var age=$('#age').val();
	var gender=$('#gender').val();
	var status=$('#status').val();
	var year=$('#year').val();
	var dept=$('#dept').val();
	if(idno==""){
	$('#validmsg').fadeIn(3000).text("Idno Empty");	
	$('#idno').focus();
	return false;
	}
	if(fname==""){
	$('#validmsg').fadeIn(3000).text("First Name Empty");	
	$('#fname').focus();
	return false;
	}
	if(lname==""){
	$('#validmsg').fadeIn(3000).text("Last Name Empty");	
	$('#lname').focus();
	return false;
	}
	if(sname==""){
	$('#validmsg').fadeIn(3000).text("Sur Name Empty");	
	$('#sname').focus();
	return false;
	}
	if(age==""){
	$('#validmsg').fadeIn(3000).text("Age Empty");	
	$('#age').focus();
	return false;
	}
	
	if(gender=="#"){
	$('#validmsg').fadeIn(3000).text("Gender not selected");	
	$('#gender').focus();
	return false;
	}
	
	
	
	return true;
}
</script>

</body>
</html>		
 