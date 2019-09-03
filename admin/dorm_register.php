<?php
ob_start();
//echo $_SESSION['user'];
//if(isset($_SESSION['user'])){
include('db.php');
if(isset($_POST['register'])){
	if(!empty($_POST['dno'])&& !empty($_POST['dname'])&& !empty($_POST['capacity'])){
		
		  $dno=$_POST['dno'];
		  $dname=$_POST['dname'];
		  $capacity=$_POST['capacity'];
		  $block_id=$_POST['block'];
		include('db.php');
			$q1="INSERT INTO dorm(dormno,dormname,capacity,block_id) values($dno,'$dname',$capacity,$block_id)";
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
<form name="stud_reg" method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>" onsubmit="return validate();">
<tr>
<th colspan="2">
Dorm Registration Form<span class="alert alert-danger" id="validmsg"></span>

</th>
</tr>
<tr>
<td >
<div class="form-group">
  <label for="dno">Dorm Number:</label></td>
<td>
  <input type="text" class="form-control"  name="dno" id="dno"  pattern="[0-9]{2,}" required>
</div>
</tr>
<tr>
<td >
<div class="form-group">
  <label for="dname">Dorm Name:</label></td>
<td>
  <input type="text" class="form-control"  name="dname" id="dname"  pattern="[a-zA-Z]{4,}" required>
</div>
</tr>
<tr>
<td >
<div class="form-group">
  <label for="capacity">Capacity:</label></td>
<td>
  <input type="number" class="form-control"  name="capacity" id="capacity" min="2" max="100" required>
</div>
</tr>
<tr>
<td >
<div class="form-group">
  <label for="block">Block Name:</label></td>
<td>
  <select name="block" id="block" required>
  <option value="#">Select Block</option>
  <?php
  include('db.php');
  $sql1='select *from block';
  $res=mysqli_query($conn, $sql1);
  if($res){
	 while($row=mysqli_fetch_assoc($res)){
		?>
	 <option value="<?php echo $row['block_id'];?>"><?php echo $row['blockname']; ?></option>
 	
		<?php  
	 } 
  }
  
  ?>
  </select>
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
		
	$('#dname').keydown(function(e){
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