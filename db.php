<?php
$host="localhost";
$user="root";
$pass="";
$dbname="dormnew";
$conn=mysqli_connect($host, $user, $pass) or die("unable to connect");

mysqli_select_db($conn, $dbname);



?>