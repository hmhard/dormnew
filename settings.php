<?php 
session_start();
	include('connect.php');
include 'header.php';?>

<?php
if(isset($_POST['update'])){
	$pass=$_POST['pass1'];
	$id=$_POST['id'];

	$result = mysqli_query($con,"update user set Password='$pass' where id=$id");
if(mysqli_affected_rows($con)>0){
	echo '<script>alert("inserted successfully");</script>';
}	
else{
	echo '<script>alert("error");</script>';
	
}			
}
?>


 
 <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
         
          <li class="breadcrumb-item active">Settings</li>
        </ol>

        <!-- Page Content -->
     <div class="card mb-5 col-8 ">
          <div class="card-header bg-primary text-white">
            <i class="fas fa-table"></i>
            Action Table</div>
          <div class="card-body">
  <?php 
  
$res=mysqli_query($con,'select *from user where id='.$_SESSION['admin_id']);
$row=mysqli_fetch_array($res);
?>  
					  

<form action="settings.php" method="post" onsubmit="return validate();">
	<input type="hidden" name="id"  value="<?php echo $_SESSION['admin_id'];?>">

 <label for="username">current Username</label>
<input type="text" class="form-control" name="username" value="<?php echo $row['Username']; ?>" readonly>
 <label for="cpass"> Current Password</label>
<input type="text" name="cpass" id="cpass" class="form-control" ><br>
 <label for="pass1"> New Password</label>
<input type="password" name="pass1" id="pass1" class="form-control"  >
 <label for="pass2"> New Password Again</label>
<input type="password" name="pass2" id="pass2" class="form-control"  >
 
</div>
<div align="right">
	<input type="submit" name="update" class="btn btn-success col-4" value="Edit">
	</div>
	</form>
  
  </div></div></div>
		


<?php include 'footer.php';?>

<script>

$(':text').keydown(function(e){
	//alert(e.key);
	$('.errorms').empty();
	if(e.key>='0' && e.key<='9'){
		$(this).after('<span  class="text-danger errorms">'+e.key+' is not string</span>');
		return false;
	}else{
		return true;
	}
	
});

$('#pass2').keydown(function(e){
	//alert(e.key);
	
	var pass1=$('#pass1').val();
	
	$('.errorms').empty();
	if($(this).val()+e.key==pass1){
		$(this).after('<span  class="text-success errorms">similar</span>');
		
	}else{
		$(this).after('<span  class="text-danger errorms">not similar</span>');
	
	}
	
});
<?php
  
$res=mysqli_query($con,'select *from user where id='.$_SESSION['admin_id']);
$row=mysqli_fetch_array($res);
	?>
$('#cpass').keydown(function(e){
	//alert(e.key);
	
	$('.errorms').empty();
	var opass=<?php
 
	echo '"'.$row['Password'].'"';?>;
	//alert(opass);
	if($(this).val()+e.key==opass){
		$(this).after('<span  class="text-success errorms">similar</span>');
		
	}else{
		$(this).after('<span  class="text-danger errorms">not similar</span>');
	
	}
	
});

function validate(){
	$('input').each(function(){
	
	if($(this).val()==''){
		$(this).after('<span  class="text-danger errorms">'+($(this).attr('name')+' empty</span>'));
	$(this).focus();
   return false;	
		
	}
	
});

	return false;
}
</script>