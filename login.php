<?php
ob_start();
if(isset($_POST['login'])){
	if(!empty($_POST['username'])&& !empty($_POST['password'])){
		  $usern=$_POST['username'];
		 $passd=$_POST['password'];
	
		include('db.php');
			$sql="SELECT * FROM user WHERE username =  '$usern' AND PASSWORD =  '$passd' LIMIT 0 , 30";
			
			
		  $res=mysqli_query($conn,$sql);
		  
			echo $row=mysqli_fetch_array($res);
			if(mysqli_affected_rows($conn)>0){
				
			 echo $_SESSION['USER_ID']=$row['user_id'];
			
			$type=$row['type'];
			 $_SESSION['USER_TYPE']=$type;
			if($type=='admin'){
			 $_SESSION['ADMIN_ID']=$row['id'];
			header("Location:admin/index.php");	
			}
			else if($type=='student'){
			 $_SESSION['STUDENT_ID']=$row['id'];
			header("Location:student/index.php");		
			}
			else if($type=='proctor'){
			 $_SESSION['PROCTOR_ID']=$row['id'];
			header("Location:proctor/index.php");		
			}
			
			}
			else
			{
				$_SESSION['MESSAGE_TYPE']='error';
				$_SESSION['MESSAGE']='user & password doesn\'t match';
			//header("Location:proctor/index.php");		
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
<title>login</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Resort Inn Responsive , Smartphone Compatible web template , Samsung, LG, Sony Ericsson, Motorola web design" />
<!--css-->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />		
<link href="css/login.css" rel="stylesheet"/>		

</head>
<body>
<div class="login-page">
	
		<div class="row">
			<div class="col-md-3">
			<div class=""><a href="index.php" class="btn btn-primary">Back to Main Page</a></div>	

			</div>
			<div class="col-md-5 log-area">

			 <h3 class="h3">Login Here</h3>
			<div class="">
			<div class="panel-heading">
			<?php if(isset($_SESSION['MESSAGE_TYPE']))
			{
				?>
			<div class="alert alert-warning"><?php echo $_SESSION['MESSAGE'];
			?>
			</div>
				<?php
			}?>
			
			</div>
			
			<div class="panel-body">
	<form class="form-inline" role="form" id="loginform" method="POST" action="login.php">
	
			  <div class="form-group">
				<label for="username">Username:</label>
				<input type="text" class="form-control" id="username" name="username">
			  </div>
			  <div class="form-group">
				<label for="pwd">Password:</label>
				<input type="password" class="form-control" id="password" name="password" autocomplete="off">
			  </div><br>
			  <div class="checkbox">
				<label><input type="checkbox" name="remember"> Remember me</label>
			  </div><br>

			<button type="submit" name="login" onclick="" class="btn btn-primary  signin">Sign In</button>
							
			<div class=""><a href="signup.php" class="btn btn-primary signup">Sign Up</a></div>	
	</form>
</div>
</div>
</div>
</div>

</div>
<script  src="js/jquery-2.1.4.min.js"></script>
<script  src="js/jquery.validate.js"></script>
<script>
$('document').ready(function(){
	$("#loginform").validate({
	rules: {
		username: {
			required: true,
			minlength: 4,
			maxlength:10,
			
		
		},
		password:{
			required:true
		}
	},
	messages:{
		username:{
		required:'<p style="color:red">username is required</p>'
		
	},	
	password:{
		required:'<p style="color:red">password is required</p>'
	}
	}
	
});

});

</script>
<body>
</body>
</html>