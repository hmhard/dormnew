<?php
$fname="miniyahil";
$lname="kebede";
$password1="";

$temp="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890!@#$%&()+|[]{}<>/?";
for($i=0;$i<8;$i++){
	$password1.=substr($temp,rand(0,strlen($temp)),1);
}
// $username1=substr($fname,0,2).$lname;
 $password1;
?>