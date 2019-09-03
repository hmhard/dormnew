<?php 
session_start();



if(!isset($_SESSION['STUDENT_ID'])){
	echo 'error';
	$errmessage=array();
	$errmessage="not authorized";
	$_SESSION['errorms']=$errmessage;
	header('Location:../login.php');
}

?>
