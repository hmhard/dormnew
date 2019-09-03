<?php
ob_start();
//echo $_SESSION['user'];
//if(isset($_SESSION['user'])){
include('db.php');

if(isset($_POST['register'])){
	if(!empty($_POST['sid'])){
		
		  $bno=$_POST['bno1'];
		  $sid=$_POST['sid'];
		  $btype=$_POST['btype'];
		  $block_id=$_POST['mblock'];	
		  $dorm_id=$_POST['dno'];
		 
	include('db.php');
	$q1="INSERT INTO assign(stud_id,bedno,bedtype,block_id,dorm_id) values('$sid',$bno,'$btype',$block_id,$dorm_id)";
			if(mysqli_query($conn,$q1)){

echo '<p class="alert alert-success alert-dismissible fade in">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			Assigned Succesfully</p>';	
		
			}
			else{
				print($q1);
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
<link href="css/register.css" rel="stylesheet">	
</head>
<body>		
<div class="table-responsive">

<table class="table  table-condensed">
<form name="stud_reg" method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>" onsubmit="return validate();">
<tr>
<th colspan="2">
Bed Assign Form
<span class="alert alert-danger" id="validmsg"></span>

</th>
</tr>

<tr>
<td >
<div class="form-group">
  <label for="sid">Student Id:</label></td>
<td>
  <input type="text" class="form-control"  name="sid" id="sid" required >
</td>
</div>
</tr>

<tr>
<td >
<div class="form-group">
  <label for="mblock">Female Block:</label></td>
<td>
  <select name="mblock" id="mblock" onselect="selected_one()"  required>
  <option value="#">Select Block Name</option>
<?php
			$sql="SELECT * FROM block WHERE  `blocktype`='fblock'";
	
	$res=mysqli_query($conn,$sql);
	if($res){
		while($row=mysqli_fetch_assoc($res)){
       
	echo '<option value='.$row["block_id"].'>'.$row["blockname"].'</option>';
						
						
					}
			}
	



?>
  </select>
  </div>
</tr>
<tr>
<td >
<div class="form-group">
  <label for="dno">Select Dorm No:</label></td>
<td>
  <select name="dno" id="dno" required>
  <option value="#">Select Dorm Number</option>
  </select>
  </div>
</tr>
<tr>
<td >
<div class="form-group">
  <label for="btype">Bed Type:</label></td>
<td>
  <select name="btype" id="btype" required>
  <option value="#">Select Bed Type</option>
  <option value="steel">Steel</option>
  <option value="wood">Wood</option>
  </select>
  </div>
</tr>

<tr>
<td >
<div class="form-group">
  <label for="bno">Bed Number:</label></td>
<td>
  <input type="text" class="form-control"  name="bno" id="bno" required disabled>
  <input type="hidden" name="bno1" id="bno1">
</td>
</div>
</tr>

<tr>
<td >
<div class="form-group">
  <label for="register"></label></td>
<td>
  <input type="submit" class="form-control btn btn-success"  name="register" id="register" value="Register">
  <a href="bed.php" class="btn btn-default btn-lg" style="text-align:center" >Assign Male</a>

</div>
</tr>
</form>
</table>
</div>

</body>
</html>
<script  src="js/jquery-2.1.4.min.js"></script>
<script  src="js/jquery.validate.js"></script>

 <?php
 include 'footer (2).php';
include 'js.php'; 
?>
		
<script>

$('#mblock').change(function(){
	var blockid=$(this).val();
	//alert(a);
	$.ajax({
		url:'selectdata.php',
		method:"POST",
		dataType:'text',
		data:{block_id:blockid},
		success:function(data){
			$('#dno').html(data);
		}
	});
});

$('#sid').blur(function(){
	var studid=$(this).val();
	
	$.ajax({
		url:'selectdata.php',
		method:"POST",
		dataType:'text',
		data:{stud_id:studid},
		success:function(data){
			if(data=='1')
				alert("no such idno");
			
		}
	});
});


$('#dno').change(function(){
	var dormid=$(this).val();
	
	

	$.ajax({
		url:'selectdata.php',
		method:"POST",
		dataType:'text',
		data:{dorm_id:dormid},
		success:function(data1){
			$('#bno').val(data1);
			$('#bno1').val(data1);
			
		}
	});
});



</script>
<script>
$(function(){
		
	
});
function validate(){
	var sid=$('#sid').val();
	var mblock=$('#mblock').val();
	var dno=$('#dno').val();
	var btype=$('#btype').val();
	var bno=$('#bno').val();
	if(sid==""){
	$('#validmsg').fadeIn(1000).text("Student Id Empty");	
	$('#sid').focus();
	return false;
	}
	if(mblock=="#"){
	$('#validmsg').fadeIn(1000).text("Block Not Selected");	
	$('#mblock').focus();
	return false;
	}
	if(dno=="#"){
	$('#validmsg').fadeIn(1000).text("Dorm Not Selected");	
	$('#dno').focus();
	return false;
	}
	if(btype=="#"){
	$('#validmsg').fadeIn(1000).text("Bed Type Not Selected");	
	$('#btype').focus();
	return false;
	}
	if(bno==""){
	$('#validmsg').fadeIn(1000).text("Bed No Empty");	
	$('#bno').focus();
	return false;
	}
	return true;
}
</script>
