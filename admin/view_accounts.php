
<?php
require('connect.php');

if(isset($_POST['submit'])){
// if (!isset($_FILES['image']['tmp_name'])) {
// echo "";
// echo "<script>alert('Error Occured')</script>";

// }else{
// $file=$_FILES['image']['tmp_name'];
// $image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
// $image_name= addslashes($_FILES['image']['name']);
// $image_size= getimagesize($_FILES['image']['tmp_name']);
// if ($image_size==FALSE) {

// echo "That's not an image!";
// }else{
// move_uploaded_file($_FILES["image"]["tmp_name"],"images/uploads/" . $_FILES["image"]["name"]);

 // $location=$_FILES["image"]["name"];

$good_number=$_POST['productNumber'];
$name=$_POST['productName'];
$quantity=$_POST['quantity'];
$model=$_POST['rate'];
$price=$_POST['price'];
$expiry_date=$_POST['expiry_date'];
$product_date=$_POST['product_date'];


$update=mysqli_query($con,"INSERT INTO goods(good_number, name,quantity,model,price,product_date,expiry_date)
VALUES
($good_number, '$name',$quantity,'$model',$price,$product_date,$expiry_date)");


if($update){
	echo "<script>alert('inserted successfully')</script>";
}
else{
	echo "<script>alert('Error Occured'".mysqli_error($con).")</script>";
}

}

?>

<?php include 'headern.php'; ?>
    <div id="content-wrapper">
      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="index.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Beneficiary</li>
        </ol>

        <!-- Page Content -->
     <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Members Table</div>
          <div class="card-body">
		  
		  <button type="button" id="btnregister" class="btn btn-primary right"><i class="fa fa-plus"></i>Create Account</button>
            <div class="table-responsive" id="printTable">
	<table class="table table-bordered table-condensed" id="dataTable" width="100%" cellspacing="0">
		<thead>
			<tr>
				
				<th> RNo </th>
				<th  >Username </th>
				<th> password </th>
				<th> Account type</th>
				<th> Action </th>
				<th> Confirm</th>
				
				
			</tr>
		</thead>
		<tbody>
		<?php
			include('connect.php');
			$result = mysqli_query($con,"SELECT * FROM user");
			$c=0;
			while($row = mysqli_fetch_array($result))
				{$c+=1;
					echo '<tr class="record">';
				
				
					echo '<td><div align="left">'.$c.'</div></td>';
					echo '<td><div align="left">'.$row['user_name'].'</div></td>';
					echo '<td><div align="left">'.$row['pass_word'].'</div></td>';
					echo '<td><div align="left">'.$row['type'].'</div></td>';
					
					echo '<td class="hidden-print"><div align="center" bgcolor="yellow"><a rel="facebox" href="update_account.php?id='.$row['user_id'].'">Update</a> | <a href="#" id="'.$row['user_id'].'" class="delbutton" title="Click To Delete">Delete</a></div></td>';
					echo '<td class="hidden-print"><div align="center"><a href="confirm.php?id='.$row['user_id'].'" name="confirm" id="confirm">CONFIRM</a>| <a rel="facebox" href="issue.php?beneficiary_id='.$row['user_id'].'">ERROR</a>';
	
					echo '</tr>';
				}
			?> 
		</tbody>
  </table>
      </div>
	  
			<button type="button" onclick="return print1('printTable')" class="btn btn-danger col-md-2 col-offset-md-2">Print all records</button>
      </div>
      </div>
      </div>
	  
      </div>
      
    <?php include 'footer.php'; ?>
	 
	  <!-- /.container-fluid -->

	
	
<script type="text/javascript">

$('img').hover(function(){
	var info=$(this).attr('src');
	//alert(info);
	$(this).parent().after('<img class="img-responsive" id="toolt"  href="#" src="'+info+'"></img>');
	//$('#myModal').modal();
	
	//$('img').attr('src',""+$('#image').val());
	
},
function(){
	
	$('#toolt').remove();

});


function print1(strid)
{
if(confirm("Do you want to print?"))
{
var values = document.getElementById(strid);
var printing =
window.open('','','left=0,top=0,width=750,height=600,toolbar=0,scrollbars=0,sta­?tus=0');
printing.document.write(values.innerHTML);
printing.document.close();
printing.focus();
printing.print();
printing.close();
}
}


$(function() {




$(".delbutton").click(function(){

//Save the link in a variable called element
var element = $(this);

//Find the id of the link that was clicked
var del_id = element.attr("id");

//Built a url to send

if(confirm("Sure you want to delete this update? There is NO undo!"))
{

$.ajax({
type: "GET",
url: "deleteroo.php",
data: {user_id:del_id},
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

$('#btnregister').click(function(){
	
	$('#addgoodmodal').modal('show');
});

</script>