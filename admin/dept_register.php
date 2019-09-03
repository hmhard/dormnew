<?php
ob_start();
//echo $_SESSION['user'];
//if(isset($_SESSION['user'])){
include('db.php');

if(isset($_POST['register'])){
	if(!empty($_POST['dname'])&& !empty($_POST['dcode'])&& !empty($_POST['phone'])){
		
		  $dcode=$_POST['dcode'];
		  $dname=$_POST['dname'];
		  $phone=$_POST['phone'];	
		  $faculity_id=$_POST['fname'];	
		
		include('db.php');
			$q1="INSERT INTO department(dept_name,dept_code,phone,faculity_id) values('$dname','$dcode',$phone,$faculity_id)";
			if(mysqli_query($conn,$q1)){

			echo '<p class="alert alert-success alert-dismissible fade in">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			inserted succesfully</p>';	
		
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
<form name="stud_reg" method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>" onsubmit="return validate();">
<tr>
<th colspan="2">
Department Registration Form
<span class="alert alert-danger" id="validmsg"></span>

</th>
</tr>
<tr>
<td >
<div class="form-group">
  <label for="dname">Department Name:</label></td>
<td>
  <input type="text" class="form-control"  name="dname" id="dname"  pattern="[a-zA-Z]{4,}" required>
</div>
</tr>
<tr>
<td >
<div class="form-group">
  <label for="dcode">Department Code:</label></td>
<td>
  <input type="text" class="form-control"  name="dcode" id="dcode"  pattern="[a-zA-Z0-9]{2,}" required>
</div>
</tr>
<tr>
<td >
<div class="form-group">
  <label for="phone">Phone No:</label></td>
<td>
  <input type="text" class="form-control"  name="phone" id="phone"  pattern="\+251[0-9]{8}|09[0-9]{8}" required>
</div>
</tr>
<tr>
<td >
<div class="form-group">
  <label for="fname">Faculity Name:</label></td>
<td>
 <select name="fname" id="fname" required>
	 <option value="#">Select Faculity Name</option>
<?php
			$q1="SELECT *FROM faculity";
	
	$res=mysqli_query($conn,$q1);
	if($res){
		while($row=mysqli_fetch_assoc($res)){
       
		echo '<option value='.$row["faculity_id"].'>'.$row["facname"].'</option>';
						
						
					}
			}
	



?>

  </select>

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
$(function(){
		
	$('#dname').keydown(function(e){
		if(e.key>'0' && e.key<'9'){
		
			$('#validmsg').fadeIn(10).text('not string');
			return false;
		}
		else{
			$('#validmsg').fadeOut();
		}
	});
	
	$('#phone').keydown(function(e){		
		  if(!(e.key>='0' && e.key<='9' || e.key=="Backspace" || e.key=="Down" || e.key=="Up"|| e.key=="Left" || e.key=="Right"|| e.key=="Tab"||e.key=="Alt"||e.key=="Control")) {

			  $('#validmsg').fadeIn(10).text(e.key+' not number');
			 
		  return false;  
		  }
		else{
			$('#validmsg').fadeOut();
		}
	});
	
	$('#phone').keydown(function(e){
		var len=$(this).val().length;
		if(len==0){
			
			if(e.key!='0'){
				$('#validmsg').fadeIn(10).text('Start with 0');
			 
			return false;}
		}
		if(len==1){
			
			if(e.key!='9'){
					$('#validmsg').fadeIn(10).text('Second must be nine');
			
				return false;
			}
		}
		if(len>=10){
			 $('#validmsg').fadeIn(10).text('phone limit');
		 
		}

		});

});
function validate(){
	var dname=$('#dname').val();
	var dcode=$('#dcode').val();
	var phone=$('#phone').val();
	var fname=$('#fname').val();
	if(dname==""){
	$('#validmsg').fadeIn(1000).text("Dorm Name Empty");	
	$('#dname').focus();
	return false;
	}
	if(dcode==""){
	$('#validmsg').fadeIn(1000).text("Department Code Empty");	
	$('#faccode').focus();
	return false;
	}
	if(phone==""){
	$('#validmsg').fadeIn(1000).text("Phone Number Empty");	
	$('#phone').focus();
	return false;
	}
	if(fname=="#"){
	$('#validmsg').fadeIn(1000).text("Faculity Name Not Selected");	
	$('#fname').focus();
	return false;
	}
	return true;
}
</script>

</body>
</html>		