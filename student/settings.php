<?php
if(isset($_POST['change'])){
if(!empty($_POST['user'])&&!empty($_POST['pass'])){
	$username=$_POST['user'];
	$password=$_POST['pass'];
	$userid=$_POST['userid'];
	include('../db.php');
$sql="update user set username='$username',password='$password' where user_id=$userid";
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

<title> boditi police station</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Resort Inn Responsive , Smartphone Compatible web template , Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>


		
<!--css-->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />		
<link href="css/main.css" rel="stylesheet">
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

<div class="container-fluid">
<div class="row">

<div class="col-md-2	">
<div class=""><a href="index.php" target="_top" class="btn btn-primary signup">Back</a></div>	
</div>
<div class="col-md-10">
<h1 class="h1 text-primary">My Profile</h1>
<?php
include('db.php');
$sql="select *from user where user_id=1";
$res=mysqli_query($conn,$sql);
if($res){
?>
<div class="table-responsive ">
  <table class="table table-bordered text-primary ">
  <tr>

    <th>Username</th>
    <th>Password</th>
    <th >Action</th>
  </tr>
<?php
while($row=mysqli_fetch_assoc($res)){
	echo '<tr>
			<td>'.$row["username"].'</td>
		  <td>'.$row["password"].'</td>
		  <td>';
		  ?>
		  <button name="update" id="updatep"  class="btn btn-success"  data-toggle="modal" data-target="#updatemodal">Update</button>
		  </td>
		  </tr>
	<?php
  $c+=1;
	}
?>



<div id="updatemodal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Update your profile</h4>
      </div>
      <div class="modal-body">
           <div class="panel panel-primary">
<div class="panel-body">
<?php

include('db.php');
$sql="select *from user where user_id=1";
$res=mysqli_query($conn,$sql);
if($res){
$row=mysqli_fetch_assoc($res);
}
?>
	<form class="" role="form" id="loginform" method="post" action="settings.php">
			  <div class="form-group">
				<label for="user">username:</label>
				<input type="text" class="form-control" id="user" name="user" value="<?php echo $row['username']; ?>">
			<input type="hidden" name="userid" value="<?php echo $row['user_id']; ?>">	
			  </div>
			  <div class="form-group">
				<label for="pass">New password:</label>
				<input type="text" class="form-control" id="pass" name="pass" autocomplete="off" value="<?php echo $row['password']; ?>">
			  </div>
		
</div>

</div>
 
		</div>
      <div class="modal-footer">
	 
			<button type="submit" name="change" onclick="" class="btn btn-primary  signin">Change</button>
	 
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	</form>
      </div>
    </div>

  </div>
</div>




</table>
<?php
}

?>
</div>

<script  src="js/jquery-2.1.4.min.js"></script>
<script  src="js/bootstrap.min.js"></script>
<script  src="js/bootstrap-3.1.1.min.js"></script>
<script  src="js/jquery-ui.js"></script>

<script>
$('#updatep').click(function(){
	$('#updatemodal').modal('show');
});
</script>
</body>
</html>		

<?php
//}
//else{
	//echo "you are not logged in!";
	//header('Location:../login.php');
	
//}



?>
