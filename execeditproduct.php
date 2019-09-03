<p align="right">
<?php 
$id=$_POST['id'];
$fnam=$_POST['firstname']; 
$lnam=$_REQUEST['lastname'];
$mnam=$_POST['mname']; 
$sex=$_POST['sex'];
$age=$_POST['dob']; 
$tel=$_POST['contact'];
$prov=$_POST['province'];
$dis=$_POST['district'];
$bill=$_POST['billnum'];
$link=mysqli_connect("localhost","root","") or die("Cannot Connect to the database!");
mysqli_select_db($link,"insurance") or die ("Cannot select the database!");
$query="UPDATE members SET firstname='".$fnam."',lastname='".$lnam."',mname='".$mnam."' ,sex='".$sex."' ,dob='".$age."',contact='".$tel."' ,province='".$prov."',district='".$dis."' ,billnum='".$bill."' WHERE id='".$id."'";
if(!mysqli_query($link,$query))
{die ("An unexpected error occured while saving the record, Please try again!");}
else
{
include("succesupdate.php");}
?>
</p>