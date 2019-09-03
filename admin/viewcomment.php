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

<title> wsu dormitory service</title>
<?php 
include 'headern (2).php';
//include 'css.php';
 ?>	
</head>
</body >		

<div class="container-fluid">
<div class="row">

<div class="col-md-2	">
<div class=""><a href="index.php" target="_top" class="btn btn-primary signup">Back</a></div>	
</div>
<div class="col-md-10">
<h1 class="h1 text-primary">Search Result</h1>
<?php
include('db.php');
$sql="select *from comment where status=0 order by time desc";
$res=mysqli_query($conn,$sql);
if($res){
?>
<div class="panel panel-default">
<div class="panel-body">

<div class="table-responsive ">
  <table class="table table-bordered  " id="data-table">
  <thead>
  <tr>
    <th>RNo</th>
    <th>email</th>
    <th>Comment</th>
    <th>Time</th> 
    <th colspan="2">Action</th>
  </tr>
  </thead>
  <tbody>
<?php
$c=1;
while($row=mysqli_fetch_assoc($res)){
	echo '<tr>
			<td>'.$c.'</td>
			<td>'.$row["email"].'</td>
		  <td>'.$row["comment"].'</td>
		  <td>'.$row["time"].'</td>
		  <td>';
		  ?>
		  <a href="viewcomment.php?action=update&&id=<?php echo $row['comment_id'];?>" class="btn btn-success">Read</a> </td>
		 <td> <a href="viewcomment.php?action=delete&&id=<?php echo $row['comment_id'];?>" class="btn btn-danger">Delete</a> </td>
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
<?php 
 include 'footer (2).php';
include 'js.php';
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
