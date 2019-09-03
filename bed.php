<?php
ob_start();
//echo $_SESSION['user'];
//if(isset($_SESSION['user'])){
include('db.php');
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
</head>
<body>		
<div class="table-responsive">

<table class="table  table-condensed">
<form name="stud_reg" method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
<tr>
<th colspan="2">
Student Registration Form
</th>
</tr>
<tr>
<td >
<div class="form-group">
  <label for="bno">Bed Number:</label></td>
<td>
  <input type="number" class="form-control"  name="bno" id="bno" required>
</div>
</tr>
<tr>
<td >
<div class="form-group">
  <label for="btype">Bed Type:</label></td>
<td>
  <select name="btype" id="btype" required>
  <option value="#">Select Bed Type</option>
  <option value="steel">Steel</option>
  <option value="wood">Wood</option>
  </select>
  </div>
</tr>
<tr>
<td >
<div class="form-group">
  <label for="mblock">Male Block:</label></td>
<td>
  <select name="mblock" id="mblock" required>
  <option value="#">Select Block Number</option>
  <option value="1">1</option>
  </select>
  </div>
</tr>
<tr>
<td >
<div class="form-group">
  <label for="dno">Select Dorm No:</label></td>
<td>
  <select name="dno" id="dno" required>
  <option value="#">Select Dorm Number</option>
  <option value="1">1</option>
  </select>
  </div>
</tr>

<tr>
<td >
<div class="form-group">
  <label for="register"></label></td>
<td>
  <input type="submit" class="form-control btn btn-success"  name="register" id="register" value="Register">
</div>
</tr>
</form>
</table>
</div>

</body>
</html>		