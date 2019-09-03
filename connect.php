<?php 
$host="localhost";
$db_user="root";
$db_pass="";
// $db_name="store";
$db_name="logistic";
$connect =mysqli_connect($host,$db_user,$db_pass) or die('can not connect'.mysql_error());
mysqli_select_db($connect,$db_name);


?>