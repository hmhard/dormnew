<?php
if(isset($_GET['action'])){
	include('db.php');
if($_GET['action']=='delete'){

$sql="delete from comment where comment_id=".$_GET['id']."";
$res=mysqli_query($conn,$sql);
if($res){
	echo '<script>alert("deleted succesfully");</script>';

}
else{
	echo '<script>alert("error occurred");</script>';
	
}
}
if($_GET['action']=='update'){

$sql="update comment set status=1 where comment_id=".$_GET['id']."";
$res=mysqli_query($conn,$sql);
if($res){

	echo '<script>alert("updated succesfully");</script>';

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

<title> wsu</title>
<?php 
include 'headern (2).php';
//include 'css.php';
 ?>	
 	
<div id="content-wrapper">
      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="index.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Department</li>
        </ol>

        <!-- Page Content -->
     <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            All Departments</div>
          <div class="card-body">

<div class="col-md-12">
<h1 class="h1 text-primary">Registered departments</h1>
<?php
include('db.php');
$sql="select *from department";
$res=mysqli_query($conn,$sql);
if($res){
?>
<div class="panel panel-default">
<div class="panel-body">
<div class=""><a href="index.php" target="_top" class="btn btn-info right">Back</a></div>	
<button type="button" class="btn btn-primary " id="addnewbtn" >
 <i class="fa fa-plus fa-2x"></i> Add New</button> 
<div class="table-responsive ">
  <table class="table table-bordered  " id="data-table">
  <thead>
  <tr>
    <th>RNo</th>
    <th>department name</th>
    <th>department code</th>
    <th>phone</th>
    <th>faculity</th>
    <th>Action 1</th>
    <th>Action 2</th>
  </tr>
  </thead>
  <tbody>
<?php
$c=1;
while($row=mysqli_fetch_assoc($res)){
	echo '<tr>
			<td>'.$c.'</td>
			<td>'.$row["dept_name"].'</td>
		  <td>'.$row["dept_code"].'</td>
		  <td>'.$row["phone"].'</td>
		  <td>'.$row["faculity_id"].'</td>
		  <td>';
		  ?>
		  <a href="viewcomment.php?action=update&&id=<?php echo $row['dept_id'];?>" class="btn btn-success">Update</a> </td>
		 <td> <a href="viewcomment.php?action=delete&&id=<?php echo $row['dept_id'];?>" class="btn btn-danger">Delete</a> </td>
		  </tr>
	<?php
  $c+=1;
	}
?>
</tbody>
</table>
</div>
</div>
<?php
}

?>
</div>
</div>
</div>
</div>

<?php include 'js.php';

 include 'footer (2).php';
// include 'footer.php';
 ?></body>
</html>		

<?php
//}
//else{
	//echo "you are not logged in!";
	//header('Location:../login.php');
	
//}



?>
