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
</body >		

<?php
 
if(isset($_POST['search'])){
if(!empty($_POST['search'])){

$sid=$_POST['id'];
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
$sql="select *from students where $sid";
$res=mysqli_query($conn,$sql);
if($res){
?>
<div class="table-responsive ">
  <table class="table table-bordered text-primary ">
  <tr>
    <th>Idno</th>
    <th>FirstName</th> 
    <th>LastName</th> 
    <th>SurName</th> 
    <th>Age</th>
    <th>Gender</th>
    <th>Status</th>
    <th>Year</th>
    <th>Department</th>
    <th colspan="2">Action</th>
  </tr>
<?php
while($row=mysqli_fetch_assoc($res)){
	echo '<tr class="text-primary" ><td>'.$row["idno"].'</td>
	     <td>'.$row["firstname"].'</td>
		  <td>'.$row["lastname"].'</td>
		  <td>'.$row["surname"].'</td>
		  <td>'.$row["age"].'</td>
		  <td>'.$row["gender"].'</td>
		  <td>'.$row["status"].'</td>
		  <td>'.$row["year"].'</td>
		  <td>'.$row["department"].'</td>
		  <td>';
		  ?>
		  <a href="action.php?action=delete&&id=<?php echo $row['stud_id'];?>" class="btn btn-danger">Delete</a> </td></tr>
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
	<h1> insert <?php  ?> Idno</h1>
<form class="form-inline" role="form" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <div class="form-group">
    <label  for="id">Student Id:</label>
    <input type="text" class="form-control" id="id" name="id">
  </div>
  <input type="submit" name="search" class="btn btn-primary" value="Search"/>
</form>		

	
	
	<?php
}

?>
