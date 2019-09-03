<?php

require_once('auth.php');
require_once('connect.php');
include 'header.php';
?>
<div id="content-wrapper">
      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="index.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Confirmed Members</li>
        </ol>
  <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Confirmed Users Table</div>
          <div class="card-body">
<div class="table-responsive">
<table cellpadding="1" cellspacing="1" class="table  table-striped table-hover table-bordered table-condensed" id="dataTable">
<thead>
<tr>

<th>Image </th>
<th>Names </th>
<th>Sex </th>
<th>Date of b</th>
<th>CONTACT</th>
<th>PROVINCE</th>
<th>DISTRICT</th>
<th>VAL DATE</th>
<th>EXP DATE</th>
<th> ACTION</th>
<th> COMFIRM</th>

</tr>
</thead>
<tbody>
<?php
include('connect.php');
$result = mysqli_query($con,"SELECT * FROM comfirmed");

while($row = mysqli_fetch_array($result))
{
echo '<tr class="record">';

echo '<td><img class="img-responsive " src="images/uploads/'.$row['urlimage'].'" width="70" height="80"></a></td>';
echo '<td><div align="right">'.$row['firstname'].' '.$row['mname'].' '.$row['lastname'].'</div></td>';
echo '<td><div align="right">'.$row['sex'].'</div></td>';
echo '<td><div align="right">'.$row['dob'].'</div></td>';
echo '<td><div align="right">'.$row['contact'].'</div></td>';
echo '<td><div align="right">'.$row['province'].'</div></td>';
echo '<td><div align="right">'.$row['district'].'</div></td>';
echo '<td><div align="right">'.$row['valddate'].'</div></td>';
echo '<td><div align="right">'.$row['expdate'].'</div></td>';
echo '<td><div align="center"><a rel="facebox" href="editproductdetail.php?comfi='.$row['comfi'].'">Update</a> |<a href="#" comfi="'.$row['comfi'].'" class="delbutton" title="Click To Delete">Delete</a></div></td>';
echo '<td><div align="center"><a rel="facebox" href="mcard.php?comfi='.$row['comfi'].'">CARD</a> ';
echo '</tr>';
}
?> 
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>




<?php include 'footer.php'; ?>

<script src="js/jquery.js"></script>
<script type="text/javascript">
$(function() {


$(".delbutton").click(function(){

//Save the link in a variable called element
var element = $(this);

//Find the id of the link that was clicked
var del_id = element.attr("comfi");

//Built a url to send
var info = 'comfi=' + del_id;
if(confirm("Sure you want to delete this update? There is NO undo!"))
{

$.ajax({
type: "GET",
url: "deleteroo.php",
data: info,
success: function(data){
	alert(data);
}
});
$(this).parents(".record").animate({ backgroundColor: "yellow" }, "fast")
.animate({ opacity: "hide" }, "slow");

}

return false;

});

});
</script>
