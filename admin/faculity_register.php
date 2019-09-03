<?php
ob_start();
//echo $_SESSION['user'];
//if(isset($_SESSION['user'])){
include('db.php');
if(isset($_POST['register'])){
	if(!empty($_POST['facname'])&& !empty($_POST['faccode'])&& !empty($_POST['phone'])){
		
		  $facname=$_POST['facname'];
		  $faccode=$_POST['faccode'];
		  $phone=$_POST['phone'];	
		
		include('db.php');
			$q1="INSERT INTO faculity(facname,faccode,phone) values('$facname','$faccode',$phone)";
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

<table class="table  table-condensed">
<form name="stud_reg" id="regform" method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>" onsubmit="return validate();">
<tr>
<th colspan="2">
Faculity Registration Form
<span class="alert alert-danger" id="validmsg"></span>

</th>
</tr>
<tr>
<td >
<div class="form-group">
  <label for="facname">Faculity Name:</label></td>
<td>
  <input type="text" class="form-control"  name="facname" id="facname" pattern="[a-zA-Z]{4,}" required>
</div>
</td>
</tr>
<tr>
<td >
<div class="form-group">
  <label for="faccode">Faculity Code:</label></td>
<td>
  <input type="text" class="form-control"  name="faccode" id="faccode"  pattern="[a-zA-Z0-9]{4,}" required>
</div>
</td>
</tr>
<tr>
<td >
<div class="form-group">
  <label for="phone">Phone No:</label></td>
<td>
  <input type="text" class="form-control"  name="phone" id="phone"  pattern="\+251[0-9]{8}|09[0-9]{8}" required>
</div>
</td>
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

</script>
</body>
</html>		