<?php
require('connect.php');

if(isset($_POST['register'])){
if (!isset($_FILES['image']['tmp_name'])) {
echo "";
echo "<script>alert('Error Occured')</script>";

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
$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$sname=$_POST['surname'];
$gender=$_POST['gender'];
$dob=$_POST['dob'];
$contact=$_POST['contact'];
$prov=$_POST['province'];
$dist=$_POST['district'];
$bill=$_POST['bill'];


$update=mysqli_query($con,"INSERT INTO members (urlimage, firstname, lastname, mname, sex, dob, contact,  province, district,billnum)
VALUES
('$location','$fname','$lname','$sname','$gender','$dob','$contact','$prov','$dist','$bill')");


if($update){
	echo "<script>alert('inserted successfully')</script>";
}
else{
	echo "<script>alert('Error Occured')</script>";
}

}
}
}

?>
<?php include 'header.php';?>
  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header bg-primary text-white">Register an Account</div>
      <div class="card-body">
        <form action="register.php" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="firstName" name="firstname" class="form-control" placeholder="First name"  autofocus="autofocus">
                  <label for="firstName">First name</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="lastName" name="lastname" class="form-control" placeholder="Last name" >
                  <label for="lastName">Last name</label>
                </div>
              </div>
              </div>
              </div>
			  <div class="form-group">
            <div class="form-row">
          
			  <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="surname" name="surname" class="form-control" placeholder="Sur name" >
                  <label for="surname">Sur name</label>
                </div>
              </div>
			  <div class="col-md-6">
                <div class="form-label-group">
                  <input type="date" id="dob" name="dob" class="form-control" placeholder="Birth Date" >
                  <label for="dob">Birth Date</label>
                </div>
              </div>
              </div>
              </div>
			   <div class="form-group">
			   <div class="form-row">
			  <div class="col-md-4">
                <div class="form-label-group">
				<select name="gender" id="gender" >
                  <option value="0">Select Gender</option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                  <label for="gender">Gender</label>
				  </select>
                </div>
              </div> 
            			  
			  <div class="col-md-4">
                <div class="form-label-group">
				<select name="province" id="province" >
                  <option value="0">Select Province</option>
                  <option value="Jimma">Jimma</option>
                  <option value="Addis">Addis</option>
                  <label for="province">Province</label>
				  </select>
                </div>
                </div>
                
               <div class="col-md-4">
                <div class="form-label-group">
				<select name="district" id="district" >
                  <option value="0">Select Distinct</option>
                  <option value="JimmaBranch">Jimma Branch</option>
                  <option value="Gesabo">Gesabo</option>
                  <label for="district">Distinct</label>
				  </select>
                </div>
              </div>
              </div>
              </div>
             
			   <div class="form-group">
			   <div class="form-row">
			    <div class="col-md-6">
                <div class="form-label-group">
                  <input type="tel" id="contact" name="contact" class="form-control" placeholder="Contact" >
                  <label for="contact">Contact</label>
                </div>
              </div>
              
			  <div class="col-md-6">
                <div class="form-label-group">
                  <input type="number" id="bill" name="bill" class="form-control" placeholder="Bill Number" >
                  <label for="bill">Bill No</label>
                </div>
              </div>
            </div>
            </div>
          
       
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-10">
                <div class="form-label-group">
                  <input type="file" id="image" name="image" class="form-control" placeholder="Select Image" >
                  <label for="image">Image</label>
                </div>
              </div>
              </div>
              </div>
			  
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="password" id="inputPassword" class="form-control" placeholder="Password" >
                  <label for="inputPassword">Password</label>
                </div>
              </div>
           
              
         
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="password" id="confirmPassword" class="form-control" placeholder="Confirm password" >
                  <label for="confirmPassword">Confirm password</label>
                </div>
              </div>
            </div>
            </div>
             <input type="submit" class="btn btn-primary btn-block" name="register" value="Register" />       
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="login.php">Login Page</a>
          <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>
<script>
$('form').submit(function(){
	
	
	var fname=$('#firstName').val();
	var lname=$('#lastName').val();
	var sname=$('#surname').val();
	var contact=$('#contact').val();
	
	
	
	if(fname.length<3){
	alert("first name chars not less than 3");
    $('#firstName').focus();
	return false;
	}
	if(lname.length<3){
	alert("last name chars not less than 3");
    $('#firstName').focus();
	return false;
	}
	if(sname.length<3){
	alert("sur name chars not less than 3");
    $('#firstName').focus();
	return false;
	}
		
		if(contact.length!=10){
		alert("contact no must be equal to 10");
$('#contact').focus();
	return false;
		}
	if(contact.substr(0,2)!='09'){
	alert("contact no must start with 09...");
$('#contact').focus();
	return false;
}		
	return true;
});
$('#contact').keydown(function(e){
	
	var v=$(this).val();
	// alert(e.key);
	if(e.key>='0' && e.key<='9' || e.key=='Backspace'||e.key=='Tab'||e.key=='ArrowLeft'||e.key=='ArrowRight'||e.key=='ArrowUp'){
	return true;
		
	}
	else{
		return false;
	}
	
});
$('#firstName,#lastName,#surname').keydown(function(e){
	
	var v=$(this).val();
	// alert(e.key);
	if(e.key>'0' && e.key<'9'){
	return false;
		
	}
	else{
		return true;
	}
	
});
</script>