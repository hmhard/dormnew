<?php
ob_start();
//echo $_SESSION['user'];
//if(isset($_SESSION['user'])){
		include('db.php');
		$sql1="SELECT *FROM comment where status=0";
		$sql2="SELECT  * FROM contact";
		$sql3="SELECT count(*) FROM students";
		
			if(mysqli_query($conn,$sql1)){
				$res1=mysqli_query($conn,$sql1);
				$nosc=mysqli_num_rows($res1);
				}
				if(mysqli_query($conn,$sql2)){
				$res2=mysqli_query($conn,$sql2);
				$noscon=mysqli_num_rows($res2);
				}
				if(mysqli_query($conn,$sql3)){
				$res3=mysqli_query($conn,$sql3);
				$nosstu=mysqli_num_rows($res3);
				}
			




?>
<!DOCTYPE html>
<html lang="en">
<head>

<title>wsu dormitory management system</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Resort Inn Responsive , Smartphone Compatible web template , Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
		
<!--css-->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />		
<link href="css/main.css" rel="stylesheet">	
<link href="css/register.css" rel="stylesheet">	
<style>
body{
	background-image:url('image/1.jpg');
	background-position:center;
	background-attachment:fixed;
	
	background-position:cover;
	margin-top:55px;
	min-height:90%;
	width:100%;
}
.dashcont{
	background:#fff;
	width:45%;
	height:200px;
	margin:5px;
	border:1px solid #000;
	float:left;
}
</style>
</head>
<body>	
	

<div class="dash">
<h1 class="h1 text-center text-primary">Dashboard</h1>
<div class="container-fluid">
<div class="row dash">
<div class="col-sm-9 col-md-6 dashcont">
<div class="panel panel-primary">
  <div class="panel-heading">Contacts</div>
  <div class="panel-body">
 <?php echo $noscon.' new contacts';?>			  
  
  </div>
</div>
              
</div>               
<div class="col-md-6 col-sm-12 dashcont">
<div class="panel panel-primary">
  <div class="panel-heading">Comments</div>
  <div class="panel-body">
<?php if($nosc>0){
				
				
				
				 echo $nosc.' new comments';
				}
				else{
				 echo 'no new comment';
					
				}
				?>                    

</div>               
</div>               
</div>               
<div class="col-md-6 dashcont">
<div class="panel panel-primary">
  <div class="panel-heading">Student Status</div>
  <div class="panel-body">
 <?php echo $nosstu.' students';?>
</div>
</div>
</div>
</div>
</div>
</div>

<?php include 'js.php';?>
<script>
$('document').ready(function(){
	
	$('.dash').sortable();
	
});
</script>


</body>


</html>		