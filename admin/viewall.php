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


<!Doctype html>
<html>
<head>
<link rel="stylesheet" href="css/bootstrap.css"/>
<link rel="stylesheet" href="js/dataTables/dataTables.bootstrap.css"/>

</head>
<body>
<?php
include('db.php');
$sql="select *from students";
$res=mysqli_query($conn,$sql);
if($res){
}?>

 <table class="table table-bordered table-hover" id="data">
  <thead>
  <tr>
    <th>RNo</th>
    <th>Idno</th>
    <th>Full Name</th>
    <th>Age</th>
    <th>Gender</th>
    <th>Status</th>
    <th>Year</th>
    <th>Department</th>
    <th >Action</th>
    <th >Action</th>
  </tr>
  </thead> 
  <tbody>

<?php
$c=1;
while($row=mysqli_fetch_assoc($res)){
	
	echo '<tr>
			<td>'.$c.'</td>
			<td>'.$row["idno"].'</td>
		  <td>'.$row["firstname"].' '.$row["lastname"].' '.$row["surname"].'</td>
		  <td>'.$row["age"].'</td>
		  <td>'.$row["gender"].'</td>
		  <td>'.$row["status"].'</td>
		  <td>'.$row["year"].'</td>
		  <td>'.$row["department"].'</td>
		  ';
		  ?>
		  <td><a href="viewcomment.php?action=update&&id=<?php echo $row['stud_id']; ?>" class="btn btn-success" >Update</a> </td>
		 <td> <a href="viewcomment.php?action=delete&&id=<?php echo $row['stud_id'];?>" class="btn btn-danger" >Delete</a> </td>
		  </tr>
	<?php
  $c+=1;
	}
?>  
</tbody>

</table>


<script src="js/jquery-2.1.4.min.js"></script>
<script src="js/dataTables/jquery.dataTables.js"></script>
<script src="js/dataTables/dataTables.bootstrap.js"></script>
<script>
$('document').ready(function(){
<!-- alert('fdfgdggf'); -->
$('#data').DataTable();

});
</script>

</body>
</html>