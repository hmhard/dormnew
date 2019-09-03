<?php 
$host="localhost";
$db_user="root";
$db_pass="";

$db_name="logistic";
$con =mysqli_connect($host,$db_user,$db_pass) or die('can not connect'.mysql_error());
mysqli_select_db($con,$db_name);


?>