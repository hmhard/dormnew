<?php
include('connect.php');
if(isset($_POST['info'])){
	echo $_POST['info'];
	//if (!isset($_FILES['info']['tmp_name'])) {
	//echo "";
	//}else{
	$file=$_POST['info'];
	$image= addslashes($file);
	$image= addslashes(fopen($file, 'r'));
	$image_name= addslashes($_FILES['info']['name']);
	$image_size= getimagesize($_FILES['info']['tmp_name']);

	
		if ($image_size==FALSE) {
		
			echo "That's not an image!";
			
		}else{
			
			move_uploaded_file($_FILES["image"]["tmp_name"],"images/uploads/" . $_FILES["image"]["name"]);
			
			$location=$_FILES["image"]["name"];
			$prodid=$_POST['id'];
			
			if(!$update=mysqli_query($con,"UPDATE members SET urlimage = '$location' WHERE id='$prodid'")) {
			
				echo mysql_error();
				
				
			}
			else{
		 echo '<script>alert("Edited");</script>';
			header("location: viewmembers.php");
			exit();
			}
			}
	}

//}
?>
