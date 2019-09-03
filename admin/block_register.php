<?php
ob_start();
//echo $_SESSION['user'];
//if(isset($_SESSION['user'])){
include('db.php');


if(isset($_POST['register'])){
	if(!empty($_POST['bno']) && !empty($_POST['bname'])&& !empty($_POST['capacity'])&& !empty($_POST['nosofdorm'])){
		
		  $bno=$_POST['bno'];
		  $bname=$_POST['bname'];
		  $capacity=$_POST['capacity'];	
		  $btype=$_POST['btype'];
		  $nosofdorm=$_POST['nosofdorm'];
		  $pid=$_POST['pid'];
		 
	include('db.php');
	$q1="INSERT INTO block(blockno,blockname,capacity,blocktype,noofdorms,proctor_id) values('$bno','$bname',$capacity,'$btype',$nosofdorm,'$pid')";
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

<div class="panel panel-default">
  <div class="panel-body">
<div class="table-responsive">

<table class="table  table-condensed">
<form name="blockform" id="blockform" method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>" onsubmit="return validate();">
<tr>
<th colspan="2">
Block Registration Form
<span class="alert alert-danger" id="validmsg"></span>

</th>
</tr>
<tr>
<td >
<div class="form-group">
  <label for="bno">Block Number:</label></td>
<td>
  <input type="number" class="form-control"  name="bno" id="bno"  pattern="[0-9]{2,}" required>
</div>
</tr>
<tr>
<td >
<div class="form-group">
  <label for="bname">Block Name:</label></td>
<td>
  <input type="text" class="form-control"  name="bname" id="bname"  pattern="[a-zA-Z]{4,}" required>
</div>
</tr>
<tr>
<td >
<div class="form-group">
  <label for="capacity">Capacity:</label></td>
<td>
  <input type="number" class="form-control"  name="capacity" id="capacity" required>
</div>
</tr>
<tr>
<td >
<div class="form-group">
  <label for="btype">Block Type:</label></td>
<td>
  <select name="btype" id="btype" required>
  <option value="#">Select Block Type</option>
  <option value="mblock" >Male Block</option>
  <option value="fblock" >Female Block</option>
  </select>
  </div>
</tr>


<tr>
<td >
<div class="form-group">
  <label for="nosofdorm">Number of Dorms:</label></td>
<td>
  <input type="number" class="form-control"  name="nosofdorm" id="nosofdorm" required>
</div>
</tr>
<tr>
<td >
<div class="form-group">
  <label for="pid">Proctor Id:</label></td>
<td>
<select name="pid" id="pid" required>
	 <option value="#">Select proctor Id</option>
<?php
			$q1="SELECT idno FROM proctor";
	
	$res=mysqli_query($conn,$q1);
	if($res){
		while($row=mysqli_fetch_assoc($res)){
       
		echo '<option value='.$row["idno"].'>'.$row["idno"].'</option>';
						
						
					}
			}
	



?>

  </select>
</div>
</td>
</tr>

<tr>
<td>
<div class="form-group">
  <label for="register"></label></td>
<td>
  <input type="submit" class="form-control btn btn-success"  name="register" id="register" value="Register">
</div>
</tr>
</form>
</table>
</div>
</div>
</div>
 <?php
 include 'footer (2).php';
include 'js.php'; 
?>

<script>
$(function(){
		
	$('#bname').keydown(function(e){
		if(e.key>'0' && e.key<'9'){
		
			$('#validmsg').fadeIn(10).text('not string');
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
	var bno=$('#bno').val();
	var bname=$('#bname').val();
	var capacity=$('#capacity').val();
	var btype=$('#btype').val();
	var nosofdorm=$('#nosofdorm').val();
	var pid=$('#pid').val();

	if(bno==""){
	$('#validmsg').fadeIn(3000).text("Block Number Empty");	
	$('#bno').focus();
	return false;
	}
	if(bname==""){
	$('#validmsg').fadeIn(3000).text("Block Name Empty");	
	$('#bname').focus();
	return false;
	}
	if(capacity==""){
	$('#validmsg').fadeIn(3000).text("Capacity Empty");	
	$('#capacity').focus();
	return false;
	}
	if(btype=="#"){
	$('#validmsg').fadeIn(3000).text("Block Type Not Selected");	
	$('#sname').focus();
	return false;
	}
	if(nosofdorm==""){
	$('#validmsg').fadeIn(3000).text("Nos of Dorm Empty");	
	$('#nosofdorm').focus();
	return false;
	}
	
	if(pid=="#"){
	$('#validmsg').fadeIn(3000).text("Proctor  selected");	
	$('#pid').focus();
	return false;
	}
	
	
	return true;
}
</script>

</body>
</html>		