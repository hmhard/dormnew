<?php 
include 'connect.php';
if(isset($_POST['name'])){
	$name=$_POST['name'];

	$out="";
	$result=mysqli_query($con,'select *from beneficiary where first_name like "'.$name.'%"');
	while($row=mysqli_fetch_array($result)){
		$out.=$row['first_name'].' '.$row['last_name']; 
		echo mysqli_error($con);
	}
	echo $out;
}
?>