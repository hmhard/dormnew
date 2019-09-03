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
          <li class="breadcrumb-item active">Proctor</li>
        </ol>

        <!-- Page Content -->
     <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            All Proctors</div>
          <div class="card-body">

<div class="col-md-12">
<?php
include('db.php');
$sql="select *from proctor";
$res=mysqli_query($conn,$sql);
if($res){
?>
<div class="panel panel-default">
<div class="panel-body">
<div class=""><a href="index.php" target="_top" class="btn btn-info right">Back</a></div>	
<button type="button" class="btn btn-primary " id="addnewbtn" >
 <i class="fa fa-plus fa-2x"></i> Add New</button> 
<div class="table-responsive ">
  <table class="table table-bordered  " id="data-table">
  <thead>
  <tr>
    <th>RNo</th>
    <th>Idno</th>
    <th>Full Name</th>
    <th>Age</th>
    <th>Gender</th>
    <th>Rank</th>
    <th>Phone</th>
    <th>Email</th>
  </tr>
  </thead>
  <tbody>
<?php
$c=1;
while($row=mysqli_fetch_assoc($res)){
	echo '<tr>
			<td>'.$c.'</td>
			<td>'.$row["idno"].'</td>
		  <td>'.$row["firstname"].' '.$row["lastname"].' '.$row["surname"].'</td>
		  <td>'.$row["age"].'</td>
		  <td>'.$row["gender"].'</td>
		  <td>'.$row["rank"].'</td>
		  <td>'.$row["phone"].'</td>
		  <td>'.$row["email"].'</td>
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
</div>

 <div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title text-primary">Register Here</h4>
      </div>
      <div class="modal-body">
	  <?php include 'proctor_register.php'; ?>
 
 
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
include 'js.php';
 include 'footer (2).php';

// include 'footer.php';
 ?>
	
<script>
            $('document').ready(function () {
            
			  $('#data-table').Tabledit({
				  url:'action_proctor.php',
				  columns:{
					  identifier:[1,'idno'],
					  editable:[[3,'age'],[4,'gender'],[5,'rank'],[6,'phone'],[7,'email']]
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
						  $('#'+data.bno).remove();
					  }
				  }
			  });
            });
    </script>

<?php
//}
//else{
	//echo "you are not logged in!";
	//header('Location:../login.php');
	
//}



?>
