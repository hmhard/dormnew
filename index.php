<?php
include('db.php');
if(isset($_POST['submit'])){
if(!empty($_POST['email'])&& !empty($_POST['comm'])){
	
	$email=$_POST['email'];
	$comment=$_POST['comm'];
	
	$sql="INSERT INTO comment(email,comment) values('$email','$comment')";
    if(mysqli_query($conn,$sql)){
		echo '<script>alert("submitted successfully");</script>';
	}
	else{
		echo '<script>alert("error occured");</script>';
	}
	
	}

}

include('db.php');
if(isset($_POST['send'])){
if(!empty($_POST['fullname'])&& !empty($_POST['phone'])&& !empty($_POST['email'])){
	
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$fullname=$_POST['fullname'];
	
	$sql="INSERT INTO contact(fullname,phone,email) values('$fullname',$phone,'$email')";
    if(mysqli_query($conn,$sql)){
		echo '<script>alert("submitted successfully");</script>';
	}
	else{
		echo '<script>alert("error occured");</script>';
	}
	
	}

}
?>

<!DOCTYPE html>
<html lang="en">
<head>

<title>wsu dormitory management system</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Resort Inn Responsive , Smartphone Compatible web template , Samsung, LG, Sony Ericsson, Motorola web design" />
<link rel="shortcut icon" href="images/Audio_Cd.ico"/>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>

		
<!--css-->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />		
<link href="css/owl.carousel.min.css" rel="stylesheet">		
<link href="css/font-awesome.css" rel="stylesheet">		
<link href="css/owl.theme.default.min.css" rel="stylesheet">		
<link href="css/animate.css" rel="stylesheet">		
<link href="css/jquery-ui.css" rel="stylesheet">		
<link href="css/magnific-popup.css" rel="stylesheet">		
<link href="css/main.css" rel="stylesheet">		
</head>
<body>
<section id="top">
<div class="h2 text-primary wsu-main-text animated fadeIn" id="welcome" >Wolaita Soddo University dormitory service</div> 
</section


<!-- navigation -->

<nav class="nav navbar navbar-primary">
<div class="navbar-header">
<button type="button" id="opennav" class="navbar-toggle" data-toggle="collapse" data-target="#navigate">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
<a class="navbar-brand brand" href="#">WSU</a>
</div>
<div class="navbar-collapse collapse"  id="navigate">
<ul class=" nav navbar-nav ">
	
				<li class="active"><a href="index.php" class="smooth-scroll">Home</a></li>
							<li class="title-white"><a href="#service" class="smooth-scroll">Our Services</a></li>
							<li class=""><a href="#gallery" class="smooth-scroll">Gallery</a></li>
							<li class=""><a href="#proctor" class="smooth-scroll">Proctors</a></li>
							<li class=""><a href="#rules" class="smooth-scroll">Rules</a></li>
							<li class=""><a href="#contactus" class="smooth-scroll">Contact us</a></li>
							</ul>
							<ul class="nav navbar-nav navbar-right">
							<li class=""><a href="login.php" class="">Login</a></li>
							</ul>

</div>
</nav>

<!--Home-->
<div class="home wow fadeIn" data-wow-delay=".1s" data-wow-duration=".5s" id="home">
	<div class="container animated zoomIn anim">
		<div class="home-header">
			<h1 class="home-text " >Wolaita Soddo Unversity</h1>
		</div>
		
		<div class="home-desc">
			<p class="title-white" >WSU is situated in SNNPR Regional State which is 365 km far from Addis Ababa. It was established by Ministry of Education (MOE) in 2000 E.C, and has begun to give services for the students in 2001 E.C. And also dormitory Service was established,becuase it is basic needs for students.</p>
		</div>
		
		<div class="rules-main  owl-carousel owl-theme title-white" id="news">
		<div class="rule">
		<h1>Students Should Have to stay in their own dorm</h1>
		</div>
		<div class="rule">
		<h1>Silence Should be respected</h1>
		</div>
		<div class="rule">
		<h1>Any kind of Violence ends with punishment</h1>
		</div>
		<div class="rule">
		<h1>All dorms should have Keep clean and safe</h1>
		</div>
		<div class="rule">
		<h1>contiuneswsssssssssssssssssssssssssss</h1>
		</div>
		<div class="rule">
		<h1>Silence Should be respected</h1>
		</div>
		</div>

		</div>
   <a href="#service" id="btn-more" class="btn btn-warning btn-lg" style="transform:translate(500px,120px)" ><i class="fa fa-arrow-down fa-3x"></i></a>
</div>
<div class="clearfix"></div>


<!--sevices-->
<section id="service" class="services smooth-scroll">
		<div class="services-main">
		 <h3 class="main-title ">Our Services</h3>
		 <div class="main-under"></div>
				
		   <div class="">
			 <div class="col-md-6 " data-wow-delay="0.3s">
			 	<div class="service-sect ">
			 	<div class="service-sec ">
					<i class="" aria-hidden="true"></i>
			 		<h4>For not non-dorm students  ! </h4>
			 		<p>we provide the services to stay inside<br> the dorm in the given dorm .</p>
					<p><i class="" aria-hidden="true"></i>in the given blocks</p>
					<p><i class="" aria-hidden="true"></i>in the given rooms</p>
	
	<div id="commentmodal" class="modal fade" role="dialog">
	<div class="modal-dialog ">


    <div class="modal-content">    
      <div class="modal-body">
		
	<form role="form" action=<?php echo $_SERVER['PHP_SELF'];?> method="POST">
	<div class="panel panel-primary">
	<div class=" panel-header">
	<h3 class="h3 text-primary">Comment Here</h3>
	</div>
	<div class="panel-body"
	<div class="form-group">
    <label for="email" class="text-primary">Your email:</label>
    <input type="email" class="form-control" id="email" name="email">
	</div>
	<div class="form-group">
    <label for="comm" class="text-primary">Comment:</label>
    <textarea  class="form-control" id="comm" name="comm" rows="5" cols="5" placeholder="comment here ">
	</textarea>
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
  </div>

</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
				
				
			 	</div>
			 </div>
			 </div>


			 <div class="col-md-6 " data-wow-delay="0.3s">
			 	<div class="service-sect ">
			 	<div class="service-sec ">
			 <div class=" ">
					<i class="" aria-hidden="true"></i>
			 		<h4>For not non-dorm students  ! </h4>
			 		<p>we provide the services to stay inside<br> the dorm in the given dorm .</p>
					<p><i class="" aria-hidden="true"></i>in the given blocks</p>
					<p><i class="" aria-hidden="true"></i>in the given rooms</p>
			 		
			 	</div>
			 </div>
	
	</div>
		<div class="comment-main">	
		 <button type="button" id="openmodal" class="btn btn-success btn-lg" data-toggle="modal" data-target="#commentmodal">Comment</button>
			 	</div>
					
		</div>
	
	</div>

	</section>





<div class="clearfix"></div>



<!--gallery-->
<section class="gallery" id="gallery">
		 <h3 class="main-title ">Students Gallery</h3>
		 <div class="main-under"></div>
				<div class="col-md-4  gallery1">
					<a href="images/g1.jpg" class="swipebox">
					<img src="images/g1.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>students</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
						</div>
				</a>
				</div>
			<div class="col-md-4  gallery1">
					<a href="images/g1.jpg" class="swipebox">
					<img src="images/100.png" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>students</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
						</div>
				</a>
				</div><div class="col-md-4  gallery1">
					<a href="images/g1.jpg" class="swipebox"><img src="images/100.png" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>students</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
						</div>
				</a>
				</div>
				<div class="col-md-4 gallery1">
					<a href="images/g1.jpg" class="swipebox"><img src="images/g1.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>students</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
						</div>
				</a>
				</div>
			<div class="col-md-4  gallery1">
					<a href="images/g1.jpg" class="swipebox"><img src="images/100.png" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>students</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
						</div>
				</a>
				</div><div class="col-md-4  gallery1">
					<a href="images/g1.jpg" class="swipebox"><img src="images/100.png" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>students</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
						</div>
				</a>
				</div>

</section>

<div class="clearfix"></div>


<!--Proctor-->
<section id="proctor" class="proctors">
		 <h3 class="main-title">Proctors Team</h3>
		 <div class="main-under"></div>
			<div class="container">
				<ul id="proctor-memb" class="owl-carousel owl-theme">
					<li>
						<img src="images/teams1.jpg" alt=" " class="proctor-image img-circle" />
						<div class="tabs">
						
						<div class="col-md-12 ">
							<h4>Abebe Kebede</h4>
							<span>Main Proctor</span>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.Lorem ipsum dolor .</p>
						<div class="">
							<ul class="social-icons3">
								<li><a href="#" class="fa fa-facebook icon-border facebook"> </a></li>
								<li><a href="#" class="fa fa-twitter icon-border twitter"> </a></li>
								<li><a href="#" class="fa fa-google-plus icon-border googleplus"> </a></li> 
								<li><a href="#" class="fa fa-rss icon-border rss"> </a></li>
							</ul>
						</div>							
						</div>
					</div>
					</li>
					<li>
						<img src="images/teams2.jpg" alt=" " class="proctor-image img-circle" />
						<div class="tabs">
						<div class="col-md-12 team-Info-agileits">
							<h4>Sara Elco</h4>
							<span>Female Proctor</span>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.Lorem ipsum dolor .</p>	
						<div class="social-bnr-agileits footer-icons-agileinfo">
							<ul class="social-icons3">
								<li><a href="#" class="fa fa-facebook icon-border facebook"> </a></li>
								<li><a href="#" class="fa fa-twitter icon-border twitter"> </a></li>
								<li><a href="#" class="fa fa-google-plus icon-border googleplus"> </a></li> 
								<li><a href="#" class="fa fa-rss icon-border rss"> </a></li>
							</ul>
						</div>							
						</div>
					</div>
					</li>
					<li>
						<img src="images/teams3.jpg" alt=" " class="proctor-image img-circle" />
						<div class="tabs">
						<div class="col-md-12 team-Info-agileits">
							<h4>Estifanos Debisa</h4>
							<span>Block Three(3) Proctor</span>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.Lorem ipsum dolor .</p>
						<div class="social-bnr-agileits footer-icons-agileinfo">
							<ul class="social-icons3">
								<li><a href="#" class="fa fa-facebook icon-border facebook"> </a></li>
								<li><a href="#" class="fa fa-twitter icon-border twitter"> </a></li>
								<li><a href="#" class="fa fa-google-plus icon-border googleplus"> </a></li> 
								<li><a href="#" class="fa fa-rss icon-border rss"> </a></li>
							</ul>
						</div>							
						</div></div>
					</li>
					<li>
						<img src="images/teams4.jpg" alt=" " class="proctor-image img-circle" />
				<div class="tabs">
						<div class="col-md-12 team-Info-agileits">
							<h4>ABebe Gidebo</h4>
							<span>Block 5 Proctor</span>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.Lorem ipsum dolor .</p>
						<div class="social-bnr-agileits footer-icons-agileinfo">
							<ul class="social-icons3">
								<li><a href="#" class="fa fa-facebook icon-border facebook"> </a></li>
								<li><a href="#" class="fa fa-twitter icon-border twitter"> </a></li>
								<li><a href="#" class="fa fa-google-plus icon-border googleplus"> </a></li> 
								<li><a href="#" class="fa fa-rss icon-border rss"> </a></li>
							</ul>
						</div>							
						</div>
						</div>
					</li>
				</ul>
					
			</div>
	</div>
</section>

<div class="clearfix"></div>


<!-- Rules ------>
<section id="rules" class="rules">
	<h3 class="main-title title-black-wthree">Grand Rules</h3>
		 <div class="main-under"></div>
	<div class="container">
<div class="row">
<div class="col-md-4">
  <div class="panel panel-primary">
    <div class="panel-heading">Basic</div>
    <div class="panel-body">
	<p>The first constructor creates a horizontal toolbar with no title. The second creates a horizontal toolbar with the title specified by title.</p>
</div>
    <div class="panel-footer">Basic</div>
  </div>
</div>
<div class="col-md-4">
  <div class="panel panel-primary">
    <div class="panel-heading">Basic</div>
    <div class="panel-body">
	<p style="color:#000"> The title will show only when the toolbar is dragged out of its window. The third creates a toolbar that is oriented as specified by how.</p>
</div>
    <div class="panel-footer">Basic</div>
  </div>
</div>
<div class="col-md-4">
  <div class="panel panel-primary">
    <div class="panel-heading">Basic</div>
    <div class="panel-body">
	<p> The title will show only when the toolbar is dragged out of its window. The third creates a toolbar that is oriented as specified by how.</p>
</div>
    <div class="panel-footer">Basic</div>
  </div>
</div>
</div>
		
	</div>
</section>



<div class="clearfix"></div>

<!-- contact -->
<section class="contact" id="contactus">
<h3 class="main-title title-white title-black-" >Contact Us</h3>

	<div class="container">
		<div class="col-lg-6 col-md-6 col-sm-6 contact-w3-agile2" data-aos="flip-left">
			<div class="contact-agileits">
				<h4>Contact Us</h4>
				<p class="contact-agile2">Sign Up For Our News Letters</p>
				
				
				<form  method="post" name="sentMessage" id="contactForm" >
					<div class="control-group form-group">
                        
                            <label class="contact-p1">Full Name:</label>
                            <input type="text" class="form-control" name="fullname" id="fullname" required >
                            <p class="help-block"></p>
                       
                    </div>	
                    <div class="control-group form-group">
                        
                            <label class="contact-p1">Phone Number:</label>
                            <input type="tel" class="form-control" name="phone" id="phone" required >
							<p class="help-block"></p>
						
                    </div>
                    <div class="control-group form-group">
                        
                            <label class="contact-p1">Email Address:</label>
                            <input type="email" class="form-control" name="email" id="email" required >
							<p class="help-block"></p>
						
                    </div>
                    
                    
                    <input type="submit" name="send" value="Send Now" class="btn btn-primary">	
				</form>
				
			</div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 contact-w3-agile1" data-aos="flip-left">
			<h4>Connect With Us</h4>
			<p class="contact-agile1"><strong>Phone :</strong>+(46)551-44-55</p>
			<p class="contact-agile1"><strong>Email :</strong> <a href="mailto:name@example.com">INFO@wsu.COM</a></p>
			<p class="contact-agile1"><strong>Address :</strong> W.Soddo, SNNPR,Ethiopia</p>
																
			<div class="social-bnr-agileits footer-icons-agileinfo">
				<ul class="social-icons">
								<li><a href="#" class="fa fa-facebook icon-border facebook"> </a></li>
								<li><a href="#" class="fa fa-twitter icon-border twitter"> </a></li>
								<li><a href="twitter.com" class="fa fa-google-plus icon-border googleplus"> </a></li> 
								
							</ul>
			</div>
			<iframe src="https://www.google.com/maps/embed?pb=" ></iframe>
		</div>
		<div class="clearfix"></div>
	</div>
</section>
<!-- /contact -->
			<div class="copy">
		        <p>Copyright © 2019. All Rights Reserved | Design by <a href="index.php">Asirat</a> </p>
		    </div>

<!--totop -->
<div class="arr-w3ls">
	<a href="#top" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	</div>
	
	
	
	
	
	
<!-- js -->
		<script src="js/jquery-2.1.4.min.js"></script>		
		<script src="js/bootstrap.min.js"></script>		
		<script src="js/bootstrap-3.1.1.min.js"></script>		
		<script src="js/bootstrap.js"></script>		
		<script src="js/owl.carousel.min.js"></script>		
		<script src="js/jquery.magnific-popup.js"></script>		
		<script src="js/wow.min.js"></script>		
		<script src="js/jquery.easing.1.3.js"></script>		
		<script src="js/main.js"></script>				

		
		
		</body>
<html>		