<?php
	// include("../inc/header.php");
										    
	// if($usertype != "Admin"){
        // header("Location: ../dashboard");
    // }

?>

<?php
require('../connect.php');

if(isset($_POST['submit'])){

$user_id=$_POST['user'];
$user_name=$_POST['username'];
$pass_word=$_POST['password'];
$type=$_POST['atype'];
$update=mysqli_query($connect,"INSERT INTO user (user_id, user_name, pass_word,type)
VALUES
(NULL, '$user_name', '$pass_word','$type')");


if($update){
	echo "<script>alert('inserted successfully')</script>";
}
else{
	echo "<script>alert('Error Occured'".mysqli_error($connect).")</script>";
}

}



?>
<?php
	// include("../inc/header.php");
										    
	// if($usertype != "Admin"){
        // header("Location: ../dashboard");
    // }

?>
<?php include 'headern.php';?>
 <div id="content-wrapper">
      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="index.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">User</li>
        </ol>

        <!-- Page Content -->
     <div class="card mb-5 col-sm-7">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Account </div>
          <div class="card-body">
	
     

    
		  
		  
		<div class="container">
		<div class="displaySuccess"></div>
			<div class="wrapper add_employee clearfix">
				
				<form id="registermember" class="clearfix" method="post" action="create_account.php" enctype="multipart/form-data" onsubmit="return validate();">
					<div class="alert alert-info">Personal Data</div>
					
					<div class="input-box input-small left">
						<label for="user">User</label><br>
						<input type="text" class="inputField user form-control" name="user" required>
						<div class="error lastnameerror"></div>
					</div>
					
				
					<div class="input-box input-small right">
						<label for="username">Username</label><br>
						<input type="text" class="inputField username form-control" name="username">
						<div class="error reslocationerror"></div>
					</div>
					
					<div class="input-box input-small left clearfix">
						<label for="password"> Password</label><br>
						<input type="password" class="inputField password form-control" name="password" required>
						<div class="error resdirectionerror"></div>
					</div>
					<div class="input-box input-small right clearfix">
						<label for="password2"> Password Again</label><br>
						<input type="password" class="inputField password2 form-control" name="password2" required>
						<div class="error resdirectionerror"></div>
					</div>
					<div class="input-box input-small left">
						<label for="atype">Account Type</label><br>
						<select class="inputField empstatus form-control" name="atype" required>
							<option value="">-- Select Type --</option>
							<option value="admin">Admin</option>
							<option value="manager">Manager</option>
							<option value="skeeper">Store Keeper</option>
							<option value="Beneficiary">Beneficiary</option>
						</select>
						<div class="error empstatuserror"></div>
					</div>

					
								<br>			
								<br>			
						<button type="submit" name="submit" class="submitField form-control btn btn-primary">Add record</button>
					</div>
				</form>
			</div>
		</div>
	
   </div>
    </div>

  </div>
<?php include 'footer.php';?>


<script>
$('.contact, .billno').keydown(function(e){
	//alert(e.key);
	$('#errorm').empty();
	if(e.key>='0' && e.key<='9' || e.key=='Backspace'){
		return true;
	}else{
		$(this).after('<span id="errorm" class="text-danger">'+e.key+' is not number</span>');
		return false;
	}
	
});


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

</script>

<script>
$('.user').keyup(function(){
	
	$.ajax({
	url:'suggestion.php',
	method:'POST',
	dataType:'text',
	data:{name:$(this).val()},
	success:function(data){
		$(this).append(data);
	}
	});
	
});
</script>