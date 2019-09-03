

<?php
	include('header.php');
	include('connect.php');
	$idd=$_GET['comfi'];
	$result = mysqli_query($con,"SELECT * FROM comfirmed where comfi='$idd'");
		while($row = mysqli_fetch_array($result))
			{
			$comfi=$row['comfi'];
				$fnam=$row['firstname'];
				$lnam=$row['lastname'];
				$mna=$row['mname'];
				$sex=$row['sex'];
				$age=$row['dob'];
			$image=$row['urlimage'];
				$bk=$row['valddate'];
				$ac=$row['expdate'];
				
			}
?>

 <div id="content-wrapper">

      <div class="container-fluid">

 <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
          <li class="breadcrumb-item"><a href="confirmed.php">View Confirmed</a></li>
          <li class="breadcrumb-item active">Create Member Card</li>
        </ol>
  <div class="col-md-7" style="margin-left:20%">
     <div class="card">
          <div class="card-header bg-primary text-white">
            <i class="fas fa-table"></i>
            EHLI Member</div>
          <div class="card-body">
	
<div id="print2">
<div id="table-responsive">
<table  class="">
  <tr>
    <td width="56" background="cardmember2.png" style="background-repeat:no-repeat;background-position:center;background-size:cover;height:15px;width:90%">
	<table width="464"  height="202">
      <tr>
        <td width="154" height="140" rowspan="6">
		<div width="30" height="10"align="right"><center>
		<img width="120" height="100" class="" src="images/uploads/<?php echo $image ?> "></center></div></td>
        <td height="31"  colspan="2"><div align="center" class="style1"></div></td>
      </tr>
      <tr>
        <td width="73"><span class="style4">Names:</span></td>
        <td width="216"class="result"><?php echo $fnam ?> <?php echo $mna ?> <?php echo $lnam ?></td>
      </tr>
      <tr>
        <td><span class="style">Sex:</span></td>
        <td><?php echo $sex ?></td>
      </tr>
      <tr>
        <td><span class="style4">Date of Birth: </span></td>
        <td><?php echo $age ?></td>
      </tr>
      <tr>
        <td height="23"><span class="style4">Valid Date: </span></td>
        <td><?php echo $bk ?></td>
      </tr>
      <tr>
        <td height="25"><span class="style4">Expired Date: </span></td>
        <td><?php echo $ac ?></td>
      </tr>
    </table></td>
  </tr>
</table>
</br>
</form>
</div>
</div>
<input type="button"  name="printbutton" value="Print Card" onclick="return print1('print2')"/>
</div>
</div>
</div>


<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript">
function print1(strid)
{
if(confirm("Do you want to print?"))
{
var values = document.getElementById(strid);
var printing =
window.open('','','left=0,top=0,width=550,height=400,toolbar=0,scrollbars=0,sta­?tus=0');
printing.document.write(values.innerHTML);
printing.document.close();
printing.focus();
printing.print();
printing.close();
}
}
</script>
</div>