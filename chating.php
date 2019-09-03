<!Doctype html>
<html>
<head>
<title>chating</title>
<style>
body{
	background:green;
}
.container {
    border: 2px solid #dedede;
    background-color: #f1f1f1;
    border-radius: 5px;
    padding: 2px 10px;
    margin:10px  auto ;
	width:50%;
	overflow: auto;
	overflow-x:hidden;
	clear: left;
	bacground:#036a23;
}
.container:last-child{
	margin-bottom:250px;
}

.chat-container {
	position:fixed;
	bottom:5px;
	right:285px;
    border: 2px solid #dedede;
    background-color: #f1f1f1;
    border-radius: 5px;
    padding: 3px 10px;
    margin:10px auto ;
	width:50%;
	clear: left;
}
/* Darker chat container */
.darker {
    border-color: #ccc;
    background-color: #ddd;
	text-align:right;
}

/* Clear floats */
.container::after {
    content: "";
    clear: both;
    display: table;
}

/* Style images */
.container img {
    float: left;
    max-width: 60px;
    width: 100%;
    margin-right: 20px;
    border-radius: 50%;
}

/* Style the right image */
.container img.right {
    float: right;
    margin-left: 20px;
    margin-right:0;
}

/* Style time text */
.time-right {
    float: right;
    color: #aaa;
}

/* Style time text */
.time-left {
    float: left;
    color: #999;
}

</style>

  <link href="assets/css/bootstrap.min.css" type="text/css" rel="stylesheet"/>
  <link href="css/jquery-ui.css" rel="stylesheet">
  
</head>
<body>



<div class="container-fluid" style="position:absolute">
<div class="row">
<div class="container">
<div class="col-sm-6">
  <img src="/w3images/bandmember.jpg" alt="Avatar">
  <p>Hello. How are you today?</p>
  <span class="time-right">11:00</span>
</div>

<div class="container darker">
  <img src="/w3images/avatar_g2.jpg" alt="Avatar" class="right">
  <p>Hey! I'm fine. Thanks for asking!</p>
  <span class="time-left">11:01</span>
</div>

<div class="container">
  <img src="/w3images/bandmember.jpg" alt="Avatar">
  <p>Sweet! So, what do you wanna do today?</p>
  <span class="time-right">11:02</span>
</div>

<div class="container darker">
  <img src="/w3images/avatar_g2.jpg" alt="Avatar" class="right">
  <p>Nah, I dunno. Play soccer.. or learn more coding perhaps?</p>
  <span class="time-left">11:05</span>
</div>

<div class="chat-container">
 <div class="form-group">
  <label for="usr">Name:</label>
  <input type="text" class="form-control" id="chat">
  <input type="submit" class="form-control col-md-2" id="send" name="send" value="Send">

  <input type="submit" class="form-control right col-md-2" id="response" name="response" value="response">
</div>

</div>
</div>


  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <script src="js/demo/main.js"></script>
  <script src="js/demo/jquery.validate.js"></script>
  <script src="js/demo/datepicker/js/bootstrap-datepicker.js"></script>
  <script src="js/demo/jquery-ui.min.js"></script>
  <!-- Demo scripts for this page-->
  <script src="js/demo/datatables-demo.js"></script>
  <!--<script src="js/demo/chart-area-demo.js"></script>-->
<script>
$(function(){
	// alert('dgdfg');
	$('#datepicker').datepicker({
		dateFormat:'yy-mm-dd',
		chooseYear:true,
		chooseMonth:true,
		maxDate:new Date(2009,12,12)
		
	});
});
	
$('.nav-item').click(function(){
	 
	
	$(this).addClass('actived');
//});
});

$('#send').click(function(){
	
	var chat=$('#chat').val();
	var d=new Date();
	//var dat=d.getHours()+':'+d.getMinutes()+':'+getSeconds();
	//alert(chat);
	$('.container-fluid').append('<div class="container"><img src="/w3images/bandmember.jpg" alt="Avatar"><p>'+chat+'</p><span class="time-eight">'+d.toUTCString()+'</span></div>');
	
});

$('#response').click(function(){
	var chat=$('#chat').val();
	var d=new Date();
	//var dat=d.getHours()+':'+d.getMinutes()+':'+getSeconds();
	//alert(chat);
	$('.container-fluid').append('<div class="container darker"><img src="/w3images/bandmember.jpg" alt="Avatar"><p>'+chat+'</p><span class="time-right">'+d.toUTCString()+'</span></div>');
	
});
</script>

</body>
</html>
