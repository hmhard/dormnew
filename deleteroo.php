
		<?php 
		include 'connect.php';
		if(isset($_REQUEST['comfi'])){
		 $id=$_REQUEST['comfi']; 
		 
		
		$query="DELETE FROM comfirmed WHERE comfi=".$id."";
			
			  if(!mysqli_query($con,$query))
			  {die ("An unexpected error occured while <b>deleting</b> the record, Please try again!");}
			  else
			 {
			  echo "Student with record: ".$id." removed successfully!";}
		}
		
		
		if(isset($_REQUEST['emp'])){
		 $id=$_REQUEST['emp']; 
		 
		
		$query="DELETE FROM employee WHERE emp_id=".$id."";
			
			  if(!mysqli_query($con,$query))
			  {die ("An unexpected error occured while <b>deleting</b> the record, Please try again!");}
			  else
			 {
			  echo "Employee with record: ".$id." removed successfully!";}
		}
		
		
		
		if(isset($_REQUEST['memberid'])){
		 $id=$_REQUEST['memberid']; 
		 
		
		$query="DELETE FROM members WHERE id=".$id."";
			
			  if(!mysqli_query($con,$query))
			  {die ("An unexpected error occured while <b>deleting</b> the record, Please try again!");}
			  else
			 {
			  echo "Employee with record: ".$id." removed successfully!";}
		}
		
		if(isset($_REQUEST['company'])){
		 $id=$_REQUEST['company']; 
		 
		
		$query="DELETE FROM company WHERE comp_id=".$id."";
			
			  if(!mysqli_query($con,$query))
			  {die ("An unexpected error occured while <b>deleting</b> the record, Please try again!");}
			  else
			 {
			  echo "Employee with record: ".$id." removed successfully!";}
		}
		
		?>