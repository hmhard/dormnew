<?php
if(isset($_GET['action'])){
	include('db.php');
if($_GET['action']=='delete'){

$sql="delete from comment where comment_id=".$_GET['id']."";
$res=mysqli_query($conn,$sql);
if($res){
	echo '<script>alert("deleted succesfully");</script>';

}
else{
	echo '<script>alert("error occurred");</script>';
	
}
}
if($_GET['action']=='update'){

$sql="update comment set status=1 where comment_id=".$_GET['id']."";
$res=mysqli_query($conn,$sql);
if($res){

	echo '<script>alert("updated succesfully");</script>';

}
else{
	echo '<script>alert("error occurred");</script>';
	
}
}

}

?>

<!DOCTYPE html>
<html lang="en">
<head>

<title> wsu dormitory service</title>
<?php 
include 'headern (2).php';
//include 'css.php';
 ?>	
	
<div id="content-wrapper">
      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="index.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Students</li>
        </ol>

        <!-- Page Content -->
     <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            All Students</div>
          <div class="card-body">
		  
	
<div class="container-fluid">
<div class="row">


<div class="col-md-12">

<?php
include('db.php');
$sql="select *from students where deleted=0";
$res=mysqli_query($conn,$sql);
if($res){
?>

<div class="panel panel-default">
<div class=""><a href="index.php" target="_top" class="btn btn-info right">Back</a></div>	
 <button type="button" class="btn btn-primary " id="addnewbtn" >
 <i class="fa fa-plus fa-2x"></i> Add New</button> 
<div class="table-responsive ">
   <table class="table table-bordered table-hover" id="data-table">
  <thead>
  <tr>
    <th>RNo</th>
    <th>Idno</th>
    <th >Full Name</th>
    <th>Age</th>
    <th>Gender</th>
    <th>Status</th>
    <th>Year</th>
    <th>Department</th>
    <th>Block</th>
    <th>Dorm</th>
    
  </tr>
  </thead>
<tbody>
<?php
$c=1;
while($row=mysqli_fetch_assoc($res)){
	
	$sql1="select *from assign where stud_id=".$row['idno'];
$res1=mysqli_query($conn,$sql1);
$row1=mysqli_fetch_assoc($res1);
	echo '<tr>
			<td>'.$c.'</td>
			<td>'.$row["idno"].'</td>
		  <td>'.$row["firstname"].' '.$row["lastname"].' '.$row["surname"].'</td>
		  <td>'.$row["age"].'</td>
		  <td>'.$row["gender"].'</td>
		  <td>'.$row["status"].'</td>
		  <td>'.$row["year"].'</td>
		  <td>'.$row["department"].'</td>
		  <td>'.$row1["block_id"].'</td>
		  <td>'.$row1["dorm_id"].'</td>
		  ';
		  ?>
		 
		  </tr>
	<?php
  $c+=1;
	}
?>
</tbody>
</table>
</div>
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h2 class="modal-title text-primary " style="text-align:center"><i class="fa fa-plus"></i>Register Here</h2>
      </div>
      <div class="modal-body">
        
		
		<div class="table-responsive">

<table class="table table-condensed">
<form name="form1" id="form1" method="POST" action="student_register.php">
<tr>
<th colspan="2">
<p class="text-primary">Student Registration Form</p>
</th>
</tr>
<tr>
<td >
<div class="form-group">
  <label for="idno">ID Number:</label></td>
<td>
  <input type="text" class="form-control"  name="idno" id="idno">
</div>
</tr>
<tr>
<td >
<div class="form-group">
  <label for="fname">First Name:</label></td>
<td>
  <input type="text" class="form-control"  name="fname" id="fname" >
</div>
</tr>
<tr>
<td >
<div class="form-group">
  <label for="lname">Last Name:</label></td>
<td>
  <input type="text" class="form-control"  name="lname" id="lname" required>
</div>
</tr>
<tr>
<td >
<div class="form-group">
  <label for="sname">Sur Name:</label></td>
<td>
  <input type="text" class="form-control"  name="sname" id="sname" required>
</div>
</tr>
<tr>
<td >
<div class="form-group">
  <label for="age">Age:</label></td>
<td>
  <input type="number" class="form-control"  name="age" id="age" required>
</div>
</tr>
<tr>
<td >
<div class="form-group">
  <label for="gender">Gender:</label></td>
<td>
  <select name="gender" id="gender" required>
  <option value="#">Select Gender</option>
  <option value="male">Male</option>
  <option value="female">Female</option>
  </select>
  </div>
</tr>
<tr>
<td >
<div class="form-group">
  <label for="status">Status:</label></td>
<td>
  <select name="status" id="status" required>
  <option value="#">Select status</option>
  <option value="regular">Regular</option>
  <option value="summer">Summer</option>
  </select>
  </div>
</tr>
<tr>
<td >
<div class="form-group">
  <label for="year">Year:</label></td>
<td>
  <select name="year" id="year" required>
  <option value="#">Select Year</option>
  <option value="1">1st</option>
  <option value="2">2nd</option>
  <option value="3">3rd</option>
  <option value="4">4th</option>
  <option value="5">5th</option>
  <option value="6">6th</option>
  <option value="7">7th</option>
  </select>
  </div>
</tr>
<tr>
<td >
<div class="form-group">
  <label for="dept">Department:</label></td>
<td>
<select name="dept" id="dept" required>
  <option value="#">Select Department</option>
  <option value="cs">CS</option>
  </select>
</div>
</tr>
<tr>
<td >
<div class="form-group">
  <label for="register"></label></td>
<td>
  <input type="submit" class="form-control btn btn-success"  name="register" id="register"  value="Register">
</div>
</tr>
</form>
</table>
</div>

		
		
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<?php
}

?>
</div>
</div>
</div>
</div>


<?php 

 include 'footer (2).php';
include 'js.php';
// include 'footer.php';
 ?>
</body>

<script>
            $('document').ready(function () {
            
			  $('#data-table').Tabledit({
				  url:'action.php',
				  columns:{
					  identifier:[1,'idno'],
					  editable:[[8,'block'],[9,'dorm']]
				  },
				  buttons:{
					  edit:{
						  class:'btn btn-info',
						  html:'Edit',
						  action:'edit'
					  },
					  delete:{
						  class:'btn btn-danger',
						  html:'delete',
						  action:'delete'
					  },
				  },
				  restoreButton:false,
				  onSuccess:function(data,textStatus,jqXHR){
					  if(data.action=='delete'){
						  $('#'+data.idno).remove();
					  }
				  }
			  });
    


	});
   $('#addnewbtn').click(function(){
	  $('#myModal').modal('show');
   });
    
	
	</script>
        

</html>		

<?php
//}
//else{
	//echo "you are not logged in!";
	//header('Location:../login.php');
	
//}



?>

   
