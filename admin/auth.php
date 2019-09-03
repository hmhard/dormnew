<?php 
session_start();


if(!isset($_SESSION['admin_id'])){
	echo 'error';
	$errmessage=array();
	$errmessage="not authorized";
	$_SESSION['errorms']=$errmessage;
	header('Location:../login.php');
}

?>
