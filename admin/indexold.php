<?php

ob_start();
//echo $_SESSION['user'];
//if(isset($_SESSION['user'])){
include('db.php');

		$sql1="SELECT *FROM comment where status=0";
		
			if(mysqli_query($conn,$sql1)){
				$res1=mysqli_query($conn,$sql1);
				$nosc=mysqli_num_rows($res1);
				}


?>
<!DOCTYPE html>
<html lang="en">
<head>

<title>wsu dormitory management system</title>

<?php include 'css.php';?>

</head>
<body>		
<!-- <div class="welcome-a">
 <p class="welcome-t"> Welcome to Admin Page</p>
 </div>
-->
<!--navigation-->


<nav class="nav navbar navbar-inverse">
<div class="container-fluid">
<div class="navbar-header">
      <button type="button" id="navtoggle" class="navbar-toggle" data-toggle="collapse" data-target="#myNav">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="#">WSU</a>
    </div>
<div class="collapse navbar-collapse" id="myNav">
	<ul class="nav navbar-nav navigate">
		
		<li class=""><a href="index.php" class="smooth-scroll">Home</a></li>
		<li class="register">
				<a href="#" class="">Register</a>
					
	<div class="register-menu">
	 <a href="student_register.php" target="mcont" class="list-group-item">Student</a> 
	 <a href="block_register.php" target="mcont" class="list-group-item">Block</a>
	 <a href="dorm_register.php" target="mcont" class="list-group-item">Dorm</a>
	 <a href="proctor_register.php" target="mcont" class="list-group-item">Proctor</a>
	 <a href="dept_register.php" target="mcont" class="list-group-item">Department</a>
	  <a href="faculity_register.php" target="mcont" class="list-group-item">Faculity</a>
	
	  </div>
					</li>
					
	<li class="dropdown">
			<a href="#" class="">Manipulate</a>
					<div class="list-group dropdown-menu">
	  <div class="search" >
	  <a href="#"  class="list-group-item ">Search</a>
	  <div class="search-menu">
	 <a href="search.php?type=student" target="mcont" class="list-group-item">Student</a> 
	 <a href="searchblock.php?type=block" target="mcont" class="list-group-item">Block</a>
	 <a href="searchdorm.php?type=dorm" target="mcont" class="list-group-item">Dorm</a>
	 <a href="searchproctor.php?type=proctor" target="mcont" class="list-group-item">Proctor</a>
	 <a href="searchdept.php?type=department" target="mcont" class="list-group-item">Department</a>
	  <a href="searchfaculity.php?type=faculity" target="mcont" class="list-group-item">Faculity</a>
	
	  </div>
	  
	</div>
	<div class="delete" > 
	<a href="#"  class="list-group-item ">Delete</a>
	  <div class="delete-menu">
	 <a href="delete.php?type=student" target="mcont" class="list-group-item">Student</a> 
	  <a href="delete.php?type=proctor" target="mcont" class="list-group-item">Proctor</a>
	  <a href="delete.php?type=bed" target="mcont" class="list-group-item">Bed</a>
	
	  <a href="delete.php" target="mcont" class="list-group-item">Assigned Dorm</a>
	   </div>
	  
	</div>
	 
  </div>		
				</li>
		<li class="viewall">
				<a href="#" class="">View</a>
	<div class="viewall-menu">
	 <a href="viewstudent.php" target="mcont" class="list-group-item">Student</a> 
	 <a href="viewblock.php" target="mcont" class="list-group-item">Block</a>
	 <a href="viewdorm.php" target="mcont" class="list-group-item">Dorm</a>
	 <a href="viewprocotor.php" target="mcont" class="list-group-item">Proctor</a>
	 <a href="viewdept.php" target="mcont" class="list-group-item">Department</a>
	  <a href="viewfacultiy.php" target="mcont" class="list-group-item">Faculity</a>
	
	  </div>
					</li>		
				<li class="title-white"><a href="viewcomment.php" target="mcont" class="smooth-scroll">
				<?php if($nosc>0){
					?>
					<span class="label label-primary"> <?php echo $nosc; ?></span>
				<?php
				}
				?>
				Read Comment</a></li>
				<li class=""><a href="viewcontact.php"  target="mcont" class="smooth-scroll">Contacts</a></li>
				</ul>
		<div class="setting nav navbar-nav  navbar-right">

		 
		  <a class="list-group-item" href="#">Mine</a>
		  
		  <ul class="setting-menu">
			<a class="list-group-item" href="settings.php" target="mcont">settings</a>
			<a class="list-group-item" target="mcont" href="change_pass.php">change password</a>
			<a class="list-group-item" href="../logout.php">Logout</a>
			</ul>
		</div>
		
</div>
</div>
</nav>

<section id="home">
<div class="container-fluid">
	<div class="row">
	<div class="col-md-2 col-lg-3 col-sm-3 col-xs-2 main-left">
	<div class="list-group side-link">
  <a href="dashboard.php" target="mcont" class="list-group-item active"><i class="fa fa-dashboard">&nbsp;&nbsp;&nbsp;&nbsp;</i>Dashboard</a>
  <a href="student_register.php" target="mcont" class="list-group-item "><i class="fa fa-users">&nbsp;&nbsp;&nbsp;&nbsp;</i>Student</a>
  <a href="faculity_register.php" target="mcont" class="list-group-item"><i class="fa fa-book">&nbsp;&nbsp;&nbsp;&nbsp;</i>Faculity</a>
  <a href="dorm_register.php" target="mcont" class="list-group-item"><i class="fa fa-home">&nbsp;&nbsp;&nbsp;&nbsp;</i>Dorm</a>
  <a href="proctor_register.php" target="mcont" class="list-group-item"><i class="fa fa-user">&nbsp;&nbsp;&nbsp;&nbsp;</i>Proctor</a>

  <a href="block_register.php" target="mcont" class="list-group-item"><i class="fa fa-home">&nbsp;&nbsp;&nbsp;&nbsp;</i>Block</a>
  <a href="dept_register.php" target="mcont" class="list-group-item"><i class="fa fa-room">&nbsp;&nbsp;&nbsp;&nbsp;</i>Department</a>
  <a href="bed.php" target="mcont" class="list-group-item">
  <i class="fa fa-bed">&nbsp;&nbsp;&nbsp;&nbsp;</i>Bed</a>
  <div id="dman">
 
  <a href="../logout.php" class="list-group-item">Logout</a>
</div>
  </div>
</div>
	<div class="col-md-9 col-lg-8 col-sm-10 col-xs-10 main-content">
	
<iframe name="mcont" src="dashboard.php">

</iframe>
</div>

</div>
</section>
<?php
//}
//else{
	//echo "you are not logged in!";
	//header('Location:../login.php');
	
//}
?>

<?php include 'js.php';?>
<script>
$(function(){
	//alert('hello');
	$('.side-link a').click(function(){
		$(this).addClass('active');
		$(this).siblings().removeClass('active');
	});
	$('#navtoggle').click(function(){
	$('#myNav').toggle();
		
	});
});

</script>


</body>
</html>		