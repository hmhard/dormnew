<!DOCTYPE html>
<html lang="en">
<head>

		<?php 
include 'headern (2).php';
//include 'css.php';
 ?>	
<style>
    body{
      
        
    }
    label{
        color: #337ab7;
    }
	table,td,th{
		text-align:center;
	}
</style>
</head>
<body >		

<?php
 
if(isset($_POST['search'])){

if(! empty($_POST['id'])){
$dno=$_POST['id'];
?>

<div class="container-fluid">
<div class="row">

<div class="col-md-2	">
<div class=""><a href="index.php" target="_top" class="btn btn-primary signup">Back</a></div>	
</div>
<div class="col-md-10">
<h1 class="h1 text-primary">Search Result</h1>
<?php
include('db.php');
$sql="select *from department where dept_code='$dno'";
$res=mysqli_query($conn,$sql);
if($res){
?>
<div class="table-responsive ">
  <table class="table table-bordered text-primary ">
  <tr>
    <th>Department Name</th>
    <th>Department Code</th>
    <th>Phone</th> 
    <th>Faculity Id</th> 
    <th colspan="2">Action</th>
  </tr>
<?php
while($row=mysqli_fetch_assoc($res)){
	echo '<tr class="text-primary" ><td>'.$row["dept_name"].'</td>
	     <td>'.$row["dept_code"].'</td>
		  <td>'.$row["phone"].'</td>
		  <td>'.$row["faculity_id"].'</td>
		  <td>';
		  ?>
		  <a href="action.php?action=delete&&id=<?php echo $row['dept_id'];?>" class="btn btn-danger">Delete</a> </td></tr>
	<?php
}
?>
</table>
<?php
}
}
?>
</div>


</body>
</html>		

<?php
//}
//else{
	//echo "you are not logged in!";
	//header('Location:../login.php');
	
//}

}
if(isset($_GET['type'])){
	?>
	<h1> insert <?php  ?> Code</h1>
<form class="form-inline" role="form" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
  <div class="form-group">
    <label  for="id">Department Code:</label>
    <input type="text" class="form-control" id="id" name="id">
  </div>
  <input type="submit" name="search" class="btn btn-primary" value="Search"/>
</form>		

	
	
	<?php
}

?>
