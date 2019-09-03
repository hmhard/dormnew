<!DOCTYPE html>
<html lang="en">
<head>

<title> wsu dormitory service</title>
	

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
          <li class="breadcrumb-item active">Contacts</li>
        </ol>

        <!-- Page Content -->
     <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            All Contacts</div>
          <div class="card-body">

<div class="col-md-10">
<?php
include('db.php');
$sql="select *from contact";
$res=mysqli_query($conn,$sql);
if($res){
?>
<div class="panel panel-default">
<div class="panel-body">

<div class=""><a href="index.php" target="_top" class="btn btn-primary right">Back</a></div>	
<div class="table-responsive ">
  <table class="table table-bordered " id="data-table">
  <thead>
  <tr>
    <th>RNo</th>
    <th>FullName</th>
    <th>Phone No</th>
    <th>Email</th> 
    <th>Action</th>
  </tr>
  </thead>
  <tbody>
<?php
$c=1;
while($row=mysqli_fetch_assoc($res)){
	echo '<tr>
			<td>'.$c.'</td>
			<td>'.$row["fullname"].'</td>
		  <td>'.$row["phone"].'</td>
		  <td>'.$row["email"].'</td>
		  <td>';
		  ?>
		  <a href="action.php?action=delete&&id=<?php echo $row['contacit_id'];?>" class="btn btn-danger">Delete</a> </td></tr>
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
 ?>
</body>
</html>		

<?php
//}
//else{
	//echo "you are not logged in!";
	//header('Location:../login.php');
	
//}



?>
