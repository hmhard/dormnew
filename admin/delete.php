<?php
ob_start();


if(isset($_POST['delete'])){
	if(!empty($_POST["id"])){
	 $id=$_POST['id'];
	 $tbl_name=$_GET['type'];
	include('db.php');
	$q1="delete FROM $tbl_name WHERE idno='$id'";
			echo $ql;
			if(mysqli_query($conn,$q1)){

			echo '<script>alert("deleted succesfully");</script>';	
			
			}
			else{
				echo '<script>alert("error occurred");</script>';
			}
		
			
	}
	
			else{
				echo '<script>alert("not empty");</script>';
			}
}



echo $_GET['type'];
if(isset($_GET['type'])){
?>

<!Doctype html>
<html lang="en">
<head>
<style>
*{
	color:#fff;
}
</style>
<title>login</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Resort Inn Responsive , Smartphone Compatible web template , Samsung, LG, Sony Ericsson, Motorola web design" />
<!--css-->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />		
<link href="css/main.css" rel="stylesheet"/>		

</head>
<body>
<h1> insert <?php echo $_GET['type'];?> Idno</h1>
<form class="form-inline" role="form" method="POST" action="delete.php">
  <div class="form-group">
    <label  for="id">Student Id:</label>
    <input type="text" class="form-control" id="id" name="id">
  </div>
  <input type="submit" name="delete" class="btn btn-primary" value="Delete"/>
</form>		
<?php

}

?>
</body>
</html>