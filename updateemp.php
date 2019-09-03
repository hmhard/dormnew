<p align="right">
<?php 
$id=$_POST['id'];
$fnam=$_POST['firstname']; 
$lnam=$_REQUEST['lastname'];
$mnam=$_POST['mname']; 

$date=$_POST['date']; 
$tel=$_POST['phone'];

$link=mysqli_connect("localhost","root","") or die("Cannot Connect to the database!");
mysqli_select_db($link,"insurance") or die ("Cannot select the database!");
$query="UPDATE employee SET first_name='".$fnam."',last_name='".$lnam."',middle_name='".$mnam."' ,date_employed='".$date."',phone='".$tel."'  WHERE emp_id=".$id."";
if(!mysqli_query($link,$query))
{die ("An unexpected error occured while saving the record, Please try again!");}
else
{
?>
<meta http-equiv="refresh" content="5; url=viewemployees.php">
<h1 align="center" class="border"><br><br><br><br>

<div style="margin:0 auto; text-align:center;">
Successfully Update Information Will Be Save In few Seconds
<br>
<img src="008.gif">
<br>
Pls........ wait</div></h1>

<?php
}?>
</p>