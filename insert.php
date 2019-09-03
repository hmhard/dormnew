
<!DOCTYPE html>
<html>
<link href="insert.css" rel="stylesheet" type="text/css">
<style type="text/css">
</style>
<body>
<div id="container">
  <div class="header">
    <h1>System Message</h1>
  </div>
  <div class="con2">
  		<?php
		require('connect.php');
		// Check connection
		if (mysqli_connect_errno())
		  {
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
		  }
		
	
		$id = $_POST['id'];
		$location=$_POST['urlimage'];
		$fnam=$_POST['firstname'];
				$lnam=$_POST['lastname'];
				$mna=$_POST['surname'];
				$sex=$_POST['gender'];
				$age=$_POST['dob'];
				$cont=$_POST['contact'];
				$prov=$_POST['province'];
				$dist=$_POST['district'];
				$valddate=$_POST['valddate'];
				$expdate=$_POST['expdate'];
		$query=mysqli_query($con,"Select * From comfirmed Where id='$id'");
		if(mysqli_num_rows($query)) {
		echo "THE CLIENT YOU ARE TRYING TO COMFORM IS ALREAD IN THE SYSTEM MAKE SURE IF YOU HAVE SELECTED THE RIGHT ONE!!";
		} 
		else 
		{
		mysqli_query($con,"INSERT INTO comfirmed(id,urlimage,firstname, lastname, mname, sex, dob, contact,  province, district, valddate, expdate)
		VALUES ('$id','$location', '$fnam','$lnam','$mna','$sex', '$age','$cont','$prov','$dist','$valddate','$expdate')");
		?>
        <H1><meta http-equiv="refresh" content="5; url=viewmembers.php">

<div style="margin:0 auto; text-align:center;">
Successfully Confirmation Will Be Save In few Seconds
<br>
<img src="008.gif">
<br>
Pls........ wait
<p>
</div>
</br>

    	</H1>
        <?php
		}
		mysqli_close($con);
		?>
  </div>
  
</div>
</body>
</html>
