
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
		
		
		
		
		
		if(isset($_REQUEST['benefid'])){
		 $id=$_REQUEST['benefid']; 
		 
		
		$query="DELETE FROM beneficiary WHERE beneficiary_id=".$id."";
			
			  if(!mysqli_query($con,$query))
			  {die ("An unexpected error occured while <b>deleting</b> the record, Please try again!");}
			  else
			 {
			  echo "Employee with record: ".$id." removed successfully!";}
		}
		
		
		if(isset($_REQUEST['user_id'])){
		 $id=$_REQUEST['user_id']; 
		 
		
		$query="DELETE FROM user WHERE user_id=".$id."";
			
			  if(!mysqli_query($con,$query))
			  {die ("An unexpected error occured while <b>deleting</b> the record, Please try again!");}
			  else
			 {
			  echo "Employee with record: ".$id." removed successfully!";}
		}
		
		//to delete good  
		if(isset($_REQUEST['good_id'])){
		 $id=$_REQUEST['good_id']; 
		 
		
		$query="DELETE FROM goods WHERE good_id=".$id."";
			
			  if(!mysqli_query($con,$query))
			  {die ("An unexpected error occured while <b>deleting</b> the record, Please try again!");}
			  else
			 {
			  echo "Employee with record: ".$id." removed successfully!";}
		}
		
		?>