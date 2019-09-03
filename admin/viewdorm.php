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
          <li class="breadcrumb-item active">Dorm</li>
        </ol>

        <!-- Page Content -->
     <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            All Dorms</div>
          <div class="card-body">

<div class="col-md-12">
<h1 class="h1 text-primary">All Dorms</h1>
<?php
include('db.php');
$sql="select *from dorm";
$res=mysqli_query($conn,$sql);
if($res){
?>

<div class="panel panel-default">
<div class="panel-body">
<div class=""><a href="index.php" target="_top" class="btn btn-info right">Back</a></div>	
<button type="button" class="btn btn-primary " id="addnewbtn" >
 <i class="fa fa-plus fa-2x"></i> Add New</button> 
<div class="table-responsive ">
  <table class="table table-bordered " id="data-table">
  <thead>
  <tr>
    <th>RNo</th>
    <th>dorm no</th>
    <th>dorm name</th>
    <th>capacity</th>

  </tr>
  </thead>
  <tbody>
<?php
$c=1;
while($row=mysqli_fetch_assoc($res)){
	echo '<tr>
			<td>'.$c.'</td>
			<td>'.$row["dormno"].'</td>
		  <td>'.$row["dormname"].'</td>
		  <td>'.$row["capacity"].'</td>
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
        <h4 class="modal-title text-primary">Register Here!!</h4>
      </div>
      <div class="modal-body">
	  <?php include 'dorm_register.php'; ?>
 
 
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
 ?></body>
</html>		
<script>
            $('document').ready(function () {
            
			  $('#data-table').Tabledit({
				  url:'action_dorm.php',
				  columns:{
					  identifier:[1,'dno'],
					  editable:[[2,'dormname'],[3,'capacity']]
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
						  $('#'+data.dno).remove();
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
