<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>EHLI - View Members</title>

 
  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <link href="js/demo/datepicker/css/datepicker.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/jquery-ui.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
   <link href="css/style.css" rel="stylesheet">
  <link href="css/sb-admin.css" rel="stylesheet">
  
 <!--  <link href="css/bootstrap.min.css" rel="stylesheet">
 <link href="vendor/bootstrap/js/bootstrap.min.css" rel="stylesheet" type="text/css">-->

</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="index.php">EHLI</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>
	
	<div class="text-white h3 pull-right main-title" style="margin:0 16%;text-transform:uppercase">Ethiopian Health and LIfe Insurance</div>
    

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
      <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-bell fa-fw"></i>
          <span class="badge badge-danger">9+</span>
        </a>
       <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
          <a class="dropdown-item" href="viewcards.php">Created Cards</a>
          <a class="dropdown-item" href="viewmembers.php">New Members</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="impostorusers.php">Impostor Users</a>
        </div>
      </li>
      <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-envelope fa-fw"></i>
          <span class="badge badge-danger">7</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
          <a class="dropdown-item" href="viewmembers.php">New Members</a>
          <a class="dropdown-item" href="viewcards.php">Created Cards</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="impostorusers.php">Impostor Users</a>
        </div>
      </li>
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="settings.php">Settings</a>
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
	  
	    <li class="nav-item">
        <a class="nav-link" href="registermember.php">
          <i class="fas fa-register"></i>
          <span>Register Members</span></a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="add_employee.php">
          <i class="fas fa-register"></i>
          <span>Register Employee</span></a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="add_company.php">
          <i class="fa fa-register"></i>
          <span>Register Company</span></a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="viewmembers.php">
          <i class="fas fa-register"></i>
          <span>View Members</span></a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="viewemployees.php">
          <i class="fas fa-register"></i>
          <span>View Employees</span></a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="viewcompany.php">
          <i class="fas fa-register"></i>
          <span>View Companies</span></a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="confirmed.php">
          <i class="fas fa-register"></i>
          <span>View Confirmed</span></a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="viewdeactivated.php">
          <i class="fas fa-register"></i>
          <span>View Deactivated</span></a>
      </li>

	  <li class="nav-item">
        <a class="nav-link" href="impostorusers.php">
          <i class="fas fa-register"></i>
          <span>View Impostor Users</span></a>
      </li>
	  
	  <li class="nav-item">
        <a class="nav-link" href="viewcards.php">
          <i class="fas fa-register"></i>
          <span>View  Cards</span></a>
      </li>
	  
    </ul>
