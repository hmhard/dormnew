<?php
include('connect.php');


	if (!isset($_FILES['image']['tmp_name'])) {
	echo "";
	}else{
	$file=$_FILES['image']['tmp_name'];
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);
	$image_size= getimagesize($_FILES['image']['tmp_name']);

	
		if ($image_size==FALSE) {
		
			echo "That's not an image!";
			
		}else{
			
			move_uploaded_file($_FILES["image"]["tmp_name"],"../reservation/img/products/" . $_FILES["image"]["name"]);
			
			$location=$_FILES['urlimage'];
			$pname=$_POST['firstname'];
			$desc=$_POST['lastname'];
			$price=$_POST['mname'];
			$cat=$_POST['sex'];
			$age=$_POST['dob'];
			$tec=$_POST['contact'];
	$prov=$_POST['province'];
			$dist=$_POST['district'];
			$secto=$_POST['sector'];
				$cel=$_POST['cell'];
			$val=$_POST['valddate'];
			$exp=$_POST['expdate'];
			$amp=$_POST['amount'];
			
				$update=mysqli_query($link"INSERT INTO comfirmed (urlimage, firstname, lastname, mname, sex, dob, contact,  province, district, sector,  cell, valddate, expdate)
VALUES
('$location','$pname','$desc','$price','$cat','$age','$tec','$prov','$dist','$secto','$cel','$val','$exp')");
header("location: products.php");
			exit();
		
			}
	}

?>
