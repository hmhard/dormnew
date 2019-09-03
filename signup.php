<?php
ob_start();
if(isset($_POST['login'])){
	if(!empty($_POST['username'])&& !empty($_POST['password'])){
		echo $user=$_POST['username'];
		echo $pass=$_POST['password'];
	
		include('db.php');
			$q1="SELECT *FROM user WHERE username='$user' and password='$pass'";
			if(mysqli_query($conn,$q1)){

			header("Location:admin/index.php");	
			}
			
	}
}
?>
<!Doctype html>
<html lang="en">
<head>
<style>
*{
	color:#fff;
}
</style>
<title>Sign Up</title>
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
			<div class="col-offset-4 col-md-7">

			 <h3 class="h3">Login Here</h3>
			 <div>
				 <form role="form" class="form-inline" method="post" action="#">
			  <div class="form-group">
				<label for="fname">First Name:</label>
				<input type="text" class="form-control" name="fname" id="fname">
			  </div>
			  <div class="form-group">
				<label for="lname">Last Name:</label>
				<input type="text" name="lname" class="form-control" id="lname">
			  </div><div class="form-group">
				<label for="sname">Sur Name:</label>
				<input type="text" class="form-control" name="sname" id="sname">
			  </div>
			  <div class="form-group">
				<label for="username">Username:</label>
				<input type="text" class="form-control" name="username" id="username">
			  </div>
			  <div class="form-group">
				<label for="password1">Password:</label>
				<input type="password" name="password1" class="form-control" id="password1">
			  </div>
			  <div class="form-group">
				<label for="password2">Password:</label>
				<input type="password" name="password2" class="form-control" id="password2">
			  </div>
			  <div class="assert">
			  <h4>HUMAN VERIFICATION</h4>
                        <p>Type Below this code <?php $Random_code=rand(); echo $Random_code; ?>
						</p><br />
						</p>
			 
			  </div>
			  <div class="form-group">
				<label for="code">Random code:</label>
				<input type="number" name="code" class="form-control" id="code">
			  </div>

			  <button type="submit" name="signup" class="btn btn-primary signin">Sign Up</button>
				<div class=""><a href="login.php" class="btn btn-primary signup">Sign In</a></div>	
			</form>
			</div>
</div>
<div class=""><a href="index.php" class="btn btn-primary">Back to Main Page</a></div>	

</div>
</div>
<body>
</body>
</html>