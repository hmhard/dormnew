<?php
ob_start();
//echo $_SESSION['user'];
//if(isset($_SESSION['user'])){
include('db.php');

if(isset($_POST['register'])){
	if(!empty($_POST['comment'])){
		
		  $comment=$_POST['comment'];

		include('db.php');
			$q1="INSERT INTO comment(comment) values('$comment')";
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
include 'headern.php';
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
Comment Box
<span class="alert alert-danger" id="validmsg"></span>
</th>
</tr>
<tr>
<td >
<div class="form-group">
  <label for="idno">Comment:</label></td>
<td>
  <textarea class="form-control"  name="comment" id="comment"    placeholder="Comment here.." required></textarea>
</div>
</tr>

<tr>
<td >
<div class="form-group">
  <label for="register"></label></td>
<td>
  <input type="submit" class="form-control btn btn-success"  name="register" id="register" value="Comment">
</div>
</tr>
</form>
</table>
</div>
 <?php
 include 'footer.php';
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