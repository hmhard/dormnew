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
$sql="select *from dorm where dormno=$dno";
$res=mysqli_query($conn,$sql);
if($res){
?>
<div class="table-responsive ">
  <table class="table table-bordered text-primary ">
  <tr>
    <th>Dorm No</th>
    <th>Dorm Name</th> 
    <th>Capacity</th> 
    <th colspan="2">Action</th>
  </tr>
<?php
while($row=mysqli_fetch_assoc($res)){
	echo '<tr class="text-primary" ><td>'.$row["dormno"].'</td>
	     <td>'.$row["dormname"].'</td>
		  <td>'.$row["capacity"].'</td>
		  <td>';
		  ?>
		  <a href="action.php?action=delete&&id=<?php echo $row['block_id'];?>" class="btn btn-danger">Delete</a> </td></tr>
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
    <label  for="id">Dorm No:</label>
    <input type="text" class="form-control" id="id" name="id">
  </div>
  <input type="submit" name="search" class="btn btn-primary" value="Search"/>
</form>		

	
	
	<?php
}

?>
