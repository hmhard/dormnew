
		<?php 
		 $id=$_REQUEST['pid']; 
		 
		include 'connect.php';
		 $query="DELETE FROM problems WHERE pid=".$id."";
			
			  if(!mysqli_query($con,$query))
			  {die ("An unexpected error occured while <b>deleting</b> the record, Please try again!");}
			  else
			 {
			  echo "<b>Student with record: ".$id." <br> removed successfully!";}
		 ?>