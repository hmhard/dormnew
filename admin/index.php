<?php include 'headern (2).php'; ?>
    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Overview</li>
        </ol>

        <!-- Icon Cards-->
        <div class="row" id="main-cards">
          <div class="col-xl-3 col-sm-4 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-comments"></i>
                </div>
				<?php include 'db.php';
				$res=mysqli_query($conn,'Select count(*) as total FROM students');
				$row1=mysqli_fetch_array($res);
				?>
                <div class="mr-5"><?php echo $row1['total'];?> Students!</div>
              </div>
              <a class="card-footer text-white small z-1" href="viewstudent.php">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-4 mb-3">
            <div class="card text-white bg-warning o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-list"></i>
                </div>
				<?php
				$res=mysqli_query($conn,'Select count(*) as total FROM proctor');
				$row1=mysqli_fetch_array($res);
				?>
                <div class="mr-5"><?php echo $row1['total'];?>  Proctors!</div>
              </div>
              <a class="card-footer text-white  small z-1" href="viewprocotor.php">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-4 mb-3">
            <div class="card text-white bg-success o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-shopping-cart"></i>
                </div>
				<?php
				$res=mysqli_query($conn,'Select count(*) as total FROM department');
				$row1=mysqli_fetch_array($res);
				?>
                <div class="mr-5"><?php echo $row1['total']; ?>  Departments !</div>
              </div>
              <a class="card-footer text-white small z-1" href="viewdept.php">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
                   <div class="col-xl-3 col-sm-4 mb-3">
            <div class="card text-white bg-danger o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-users"></i>
                </div>
				<?php
				$res=mysqli_query($conn,'Select count(*) as total FROM dorm');
				$row1=mysqli_fetch_array($res);
				?>
                <div class="mr-5"><?php echo $row1['total']; ?>  Dorms !</div>
              </div>
              <a class="card-footer text-white small z-1" href="viewdorm.php">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
         
		 <div class="col-xl-3 col-sm-4 mb-3">
            <div class="card text-white o-hidden h-100" style="background:#e38211">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-users"></i>
                </div>
				<?php
				$res=mysqli_query($conn,'Select count(*) as total FROM block');
				$row1=mysqli_fetch_array($res);
				?>
                <div class="mr-5"><?php echo $row1['total']; ?>  Blocks !</div>
              </div>
              <a class="card-footer text-white small z-1" href="viewblock.php">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
         
		 <div class="col-xl-3 col-sm-4 mb-3">
            <div class="card text-white o-hidden h-100" style="background:#82e311">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-book"></i>
                </div>
				<?php
				$res=mysqli_query($conn,'Select count(*) as total FROM faculity');
				$row1=mysqli_fetch_array($res);
				?>
                <div class="mr-5"><?php echo $row1['total']; ?>  Faculities !</div>
              </div>
              <a class="card-footer text-white small z-1" href="viewfacultiy.php">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
         
		  
		  
		  
		  
        </div>

        <!-- Area Chart Example-->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-chart-area"></i>
			<div class="btn-group right">
			  <button type="button" class="btn btn-primary btn-bar">Bar</button>
			  <button type="button" class="btn btn-info btn-line">Line</button>
			 </div>
            Members Chart</div>
          <div class="card-body">
            <canvas id="myAreaChart" width="100%" height="30"></canvas>
          </div>
          <div class="card-footer small text-muted">Updated <?php 
		  $res=mysqli_query($connect,'Select date_registered from beneficiary');
				$row1=mysqli_fetch_array($res);
		  echo $row1['date_registered'];
		  ?></div>
        </div>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Members Table</div>
          <div class="card-body">
            <div class="table-responsive">
                <div class="table-responsive" id="printTable">
   <table class="table table-bordered table-condensed" id="dataTable" width="100%" cellspacing="0">
		<thead>
			<tr>
				
				<th> Image </th>
				<th width="4999" align="left">Names </th>
				<th> Sex </th>
				<th> Age</th>
				<th> Contact</th>
				<th>Department</th>
				
				
			</tr>
		</thead>
		<tbody>
		<?php
			include('db.php');
			$result = mysqli_query($conn,"SELECT * FROM students");
			while($row = mysqli_fetch_array($result))
				{
					echo '<tr class="record">';
					
					echo '<td><a rel="facebox" href="editmemberimage.php?stud_id='.$row['stud_id'].'"><img width="50" height="50" src="../images/uploads/'.$row['imageurl'].'" width="80" height="50"></a></td>';
					echo '<td width="100"><div>'.$row['firstname'].' '.$row['lastname'].'</div></td>';
					echo '<td><div align="left">'.$row['gender'].'</div></td>';
					echo '<td><div align="left">'.$row['age'].'</div></td>';
					echo '<td><div align="left">'.$row['contact'].'</div></td>';
					echo '<td><div align="left">'.$row['department'].'</div></td>';
					
				
					echo '</tr>';
				}
			?> 
		</tbody>
  </table>
          </div>
          <div class="card-footer small text-muted">Updated <?php 
		  echo $row1['date_registered'];
		  ?></div>
        </div>

      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
     

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->

 <?php
 include 'footer (2).php';
// include 'footer.php';
 ?>

