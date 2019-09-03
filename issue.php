
</style>
	<?php include('header.php');?>

 <div id="content-wrapper">

      <div class="container-fluid">

 <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
          <li class="breadcrumb-item"><a href="viewmembers.php">View Member</a></li>
          <li class="breadcrumb-item active">Create Member Card</li>
        </ol>
  <div class="col-md-7" style="margin-left:20%">
     <div class="card">
          <div class="card-header bg-primary text-white">
            <i class="fas fa-table"></i>
            EHLI Member</div>
          <div class="card-body">
	

<?php
	include('connect.php');
	$idd=$_GET['id'];
	$result = mysqli_query($con,"SELECT * FROM members where id='$idd'");
		while($row = mysqli_fetch_array($result))
			{
			$id=$row['id'];
				$fnam=$row['firstname'];
				$lnam=$row['lastname'];
				$mna=$row['mname'];
				$sex=$row['sex'];
				$age=$row['dob'];
				$cont=$row['contact'];
				$prov=$row['province'];
				$dist=$row['district'];
				
				
			}
?>
<form action="impostuser.php" method="post">
<input type="hidden" name="id" value="<?php echo $id ?>" class="ed">
<input type="hidden" name="firstname" value="<?php echo $fnam ?>" class="ed">
<input type="hidden" name="lastname" value="<?php echo $lnam ?>" class="ed">
<input type="hidden" name="mname" value="<?php echo $mna ?>" class="ed">
<input type="hidden" name="sex" value="<?php echo $sex ?>" class="ed">
<input type="hidden" name="dob" value="<?php echo $age ?>" class="ed">
<input type="hidden" name="contact" value="<?php echo $cont ?>" class="ed">
<input type="hidden" name="province" value="<?php echo $prov ?>" class="ed">
<input type="hidden" name="district" value="<?php echo $dist ?>" class="ed">
<?php
	include('connect.php');
	$id=$_GET['id'];
	$result = mysqli_query($con,"SELECT * FROM members where id='$id'");
	$row = mysqli_fetch_array($result);
			
				$image=$row['urlimage'];
			
?>
<img width="150" height="200" class="card-img-top" src="images/uploads/<?php echo $image ?>">
<p><strong><?php echo $row['firstname'].' '.$row['lastname']; ?></strong> HAS THE FOLLOW ISSUES...
<ul class="list-group">
<li class="list-group-item ">Maybe He/She have Used The Wrong Bank slip Index.</li>
 <li class="list-group-item ">Maybe He/She have Paid Insufficiency Amount</li>
 <li class="list-group-item ">Maybe He/She have Reached Age 18</li>
 </ul>
	<input type="submit" class="btn btn-primary" value="CHECK LATE" id="button1">
</form>