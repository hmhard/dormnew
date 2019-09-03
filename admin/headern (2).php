<?php
ob_start();
 //require('auth.php'); 
 
 ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>wsu -manager Page</title>

 
  <!-- Custom fonts for this template-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="../vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <link href="../js/demo/datepicker/css/datepicker.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin.css" rel="stylesheet">
  <link href="../css/jquery-ui.css" rel="stylesheet">
  <link href="../css/main.css" rel="stylesheet">
   <link href="../css/style.css" rel="stylesheet">
  
 <!--  <link href="css/bootstrap.min.css" rel="stylesheet">
 <link href="vendor/bootstrap/js/bootstrap.min.css" rel="stylesheet" type="text/css">-->

</head>

<body id="page-top">
  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">
    <a class="navbar-brand mr-1" href="index.php">WSU</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>
<div class="text-white h2" style="padding:0 31% 0 20%">WSU Dormitory Service</div>
   

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
       <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="#">Settings</a>
          <a class="dropdown-item" href="#">Activity Log</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
        </div>
      </li>
    </ul>

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item actived">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
	  
	   <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-book"></i>
          <span>Register</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header">Drop-Downs:</h6>
      <a href="student_register.php" class="dropdown-item" class="list-group-item">Student</a> 
	 <a href="block_register.php" class="dropdown-item" class="list-group-item">Block</a>
	 <a href="dorm_register.php" class="dropdown-item" class="list-group-item">Dorm</a>
	 <a href="proctor_register.php" class="dropdown-item" class="list-group-item">Proctor</a>
	 <a href="dept_register.php" class="dropdown-item" class="list-group-item">Department</a>
	  <a href="faculity_register.php" class="dropdown-item" class="list-group-item">Faculity</a>
	
	        </div>
      </li>
    
	<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-search"></i>
          <span>Search</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header">Drop-Downs:</h6>
         
	<a  href="search.php?type=student"  class="dropdown-item" >Student</a> 
	 <a class="dropdown-item"  href="searchblock.php?type=block"   class="list-group-item">Block</a>
	 <a class="dropdown-item"  href="searchdorm.php?type=dorm"   class="list-group-item">Dorm</a>
	 <a class="dropdown-item"  href="searchproctor.php?type=proctor"   class="list-group-item">Proctor</a>
	 <a class="dropdown-item"  href="searchdept.php?type=department"   class="list-group-item">Department</a>
	  <a  class="dropdown-item" href="searchfaculity.php?type=faculity"   class="list-group-item">Faculity</a>
	        </div>
      </li>
     
	 <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-eye"></i>
          <span>View</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header">Drop-Downs:</h6>
          <a href="viewstudent.php"    class="dropdown-item" >Student</a> 
	 <a href="viewblock.php"  class="dropdown-item">Block</a>
	 <a href="viewdorm.php"    class="dropdown-item">Dorm</a>
	 <a href="viewprocotor.php"    class="dropdown-item">Proctor</a>
	 <a href="viewdept.php"    class="dropdown-item">Department</a>
	  <a href="viewfacultiy.php"    class="dropdown-item">Faculity</a>
	
	        </div>
      </li>
     
	  
	  
    </ul>
