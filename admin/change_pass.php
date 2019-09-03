<?php
ob_start();
if(isset($_POST['change'])){
	if(!empty($_POST['old_pass'])&& !empty($_POST['new_pwd'])&& !empty($_POST['new_pwda'])){
		echo $opass=$_POST['old_pass'];
		echo $newp=$_POST['new_pwd'];
	
		include('db.php');
			$q1="update user set password='$newp' where password='$opass'";
			print_r($ql);
			if(mysqli_query($conn,$q1)){
			echo '<script>alert("updated successfully");</script>';	
			}
			else{
			echo '<script>alert("error occured");</script>';	
		
			}
			
	}
}
?>
<!Doctype html>
<html lang="en">
<head>
<style>
*{
	color:#000;
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
<div class="login-page">
	
		<div class="row">
			<div class="col-md-3">
			
			</div>
			<div class="col-md-4">

<div class="panel panel-primary">
<div class="panel-heading">
<h4>Change Password</h4>
</div>

<div class="panel-body">
	<form class="" role="form" id="loginform" method="post" action="change_pass.php">
			  <div class="form-group">
				<label for="old_pass">Old password:</label>
				<input type="text" class="form-control" id="old_pass" name="old_pass">
			  </div>
			  <div class="form-group">
				<label for="new_pwd">New password:</label>
				<input type="password" class="form-control" id="new_pwd" name="new_pwd" autocomplete="off">
			  </div>
			  <br/>
			  <div class="form-group">
				<label for="new_pwda">New Password Again:</label>
				<input type="password" class="form-control" id="new_pwda" name="new_pwda" autocomplete="off">
			  </div>
			  <br/>

			<button type="submit" name="change" onclick="" class="btn btn-primary  signin">Change</button>
			
</div>
	</form>
</div>
</div>
</div>

</div>

<script  src="js/jquery-2.1.4.min.js"></script>
<script  src="js/jquery.validate.js"></script>
<script>
$('document').ready(function(){
	$("form").validate({
	rules: {
		old_pass: {
			required: true,
		},
		new_pwd:{
			required:true
		},
		new_pwda:{
			required:true,
			equalTo:'#new_pwd'
		}
	},
	messages:{
		old_pass:{
		required:'<p style="color:red">old password is required</p>'
		
	},	
	new_pwd:{
		required:'<p style="color:red">new password is required</p>'
	},
		
	new_pwda:{
		required:'<p style="color:red">insert new password again!!</p>',
		equalTo:'<p style="color:red">passwords must be equal</p>'
	},
	}
	
});

});

</script>
<body>
</body>
</html>