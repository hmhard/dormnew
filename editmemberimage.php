<?php
include('connect.php');
if(isset($_POST['upload'])){
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

}
?>

<?php
	require('connect.php');
	$id=$_GET['id'];
	$result = mysqli_query($con,"SELECT * FROM members where id='$id'");
		while($row = mysqli_fetch_array($result))
			{
				$image=$row['urlimage'];
			}
?>
<?php include 'header.php';?>
<div id="content-wrapper">
      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="index.php">Dashboard</a>
          </li>
		  <li class="breadcrumb-item">
            <a href="viewmembers.php">View Members</a>
          </li>
          <li class="breadcrumb-item active">Edit Member Image</li>
        </ol>

<div class="col-md-7" style="margin-left:20%">
     <div class="card">
          <div class="card-header bg-primary text-white">
            <i class="fas fa-table"></i>
            EHLI Member</div>
          <div class="card-body">
	
		<img width="150" class="card-img-top" height="200" src="images/uploads/<?php echo $image ?>">
<form action="editmemberimage.php" method="post" enctype="multipart/form-data">
	<br>
	<input type="hidden" class="form-control" name="id" value="<?php echo $id=$_GET['id']; ?>">
 <label for="image">Select Image</label>
	
	<input type="file" class="form-control" id="image" name="image"><br>
	<input type="submit" class="btn col-md-5 btn-primary right" name="upload" value="Upload">
</form>
</div>
</div>
</div>


<?php include 'footer.php';?>
<script>
$('#image').change(function(){
	var info=$(':file').val();
	alert(info);
	
	$('img').attr('src',""+$('#image').val());
	
$.ajax({
type: "POST",
url: "selectdata.php",
data: {info,info},
success: function(data){
	//alert(data);
}
});

});

</script>