<?php
include '../db.php';
 if(isset($_POST['block_id'])){
 $blockid=$_POST['block_id'];
$output='';


 $output.='<option value="#">Select Dorm Number</option>';
 $sql='select * from dorm where block_id='.$blockid.'';

 $result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($result)) {
	
	
	$output.='<option value='.$row["dorm_id"].'>'.$row["dormname"].'</option>';
}   

echo $output;
 }


 if(isset($_POST['dorm_id'])){
 $dormid=$_POST['dorm_id'];
$output1='';


 $sql1='select * from assign where dorm_id='.$dormid.'';

 $result1 = mysqli_query($conn, $sql1);
$c=1;
while($row1 = mysqli_fetch_assoc($result1)) {
	
	
$c=$c+1;
}
   

echo $output1.=''.$c;
 }
 
 

 if(isset($_POST['stud_id'])){

 $studid=$_POST['stud_id'];
if(strlen($studid)>=2){
$output2='';


 $sql2='select * from students where firstname like "'.$studid.'%"';

 $result2 = mysqli_query($conn, $sql2);
$c=false;
$output2.='<ul class="well">';
while($row2 = mysqli_fetch_assoc($result2)) {
	
		$output2.='<li class="list-group-item sli" value="'.$row2["idno"].'" >'.$row2['firstname'].' '.$row2['lastname'].'</li>';
		
	
   

 }
 $output2.='</ul>';
 echo $output2;
 $output2="";
 }}
?>