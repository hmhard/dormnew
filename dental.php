<!DOCTYPE html>
<?php
	// require_once'logincheck.php';
	$conn = new mysqli("localhost", "root", "", "hcpms") or die(mysqli_error());
	$query = $conn->query("SELECT * FROM `user` WHERE `user_id` = '$_SESSION[user_id]'") or die(mysqli_error());
	$fetch = $query->fetch_array();
?>

<?php include 'headern.php';?>
 <div id="content-wrapper">
      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="index.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Members</li>
        </ol>

        <!-- Page Content -->
     <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Table Example</div>
          <div class="card-body">
		  

	
		<div class = "">
			<div class = "">
				<center><label>DENTAL</label></center>
			</div>
		</div>
		<a href = "view_dental_record.php" id = "d_record" style = "float:right; margin-right:10px;" href = "" class = "btn btn-success"><span class = "glyphicon glyphicon-book"></span> DENTAL RECORD</a>
		<br />
		<br />
		
			<div class = "">
				<h4>INDIVIDUAL TREATMENT RECORD</h4>
			</div>
		
	
		<table id = "dataTable" class = "display table" >
			<thead>
				<tr>
					<th>ITR No</th>
					<th>Name</th>
					<th>Birthdate</th>
					<th>Age</th>
					<th>Address</th>
					<th>Civil Status</th>
					<th>Gender</th>
					<th><center>Action</center></th>
				</tr>
			</thead>
			<tbody>
			<?php 
				$conn = new mysqli("localhost", "root", "", "hcpms") or die(mysqli_error());
				$q = $conn->query("SELECT * FROM `itr` ORDER BY `itr_no` DESC") or die(mysqli_error());
				while($f = $q->fetch_array()){
			?>
				<tr>
					<td><?php echo $f['itr_no']?></td>
					<td><?php echo $f['firstname']." ".$f['lastname'] ?></td>
					<td><?php echo $f['birthdate'] ?></td>
					<td><?php echo $f['age'] ?></td>
					<td><?php echo $f['address'] ?></td>
					<td><?php echo $f['civil_status'] ?></td>
					<td><?php echo $f['gender'] ?></td>
					<td>
						<center>
							<a href = "view_dental.php?itr_no=<?php echo $f['itr_no']?>"class = "btn btn-sm btn-info"><span class = "glyphicon glyphicon-search"></span> VIEW DETAIL</a> 
						</center>
					</td>
				</tr>
			<?php
				}
					$conn->close();
			?>	
			</tbody>
		</table>
	</div>
	</div>
	</div>
	</div>

	
		<?php require "footern.php" ?>
		<?php //require "script.php" ?>
		<script src ="js/add_dental.js"></script>
