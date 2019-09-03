<html> 
<head> 
<meta charset="utf-8" /> 
 <title>AUTOMATED LOGISTICS MANAGEMENT SYSTEM FOR OROMIA</title> 
 <link rel="stylesheet" href="css/style1.css" type="text/css" media="all" /> 
<link rel="stylesheet" href="style/style.css" type="text/css" /> 
<link rel="stylesheet" href="c.css" type="text/css" /> 
 
<script type="text/javascript"> 
        function noBack() 
         { 
             window.history.forward() 
         } 
        noBack(); 
        window.onload = noBack; 
        window.onpageshow = function(evt) { if (evt.persisted) noBack() } 
        window.onunload = function() { void (0) } 
    </script> 
</head> 
<body> 
<table align=center width=1000px height="900"  bgcolor="#F0F0DB"> 
<tr><td height=20px  colspan=4 bgcolor="green"> 
<img id="L" target="iframe" height="115" width=1116px src="logis.png"> 
</td></tr><tr> 
<div id="wrapper"> 
 <!-- shell --> 
  <!-- container --> 
  <!-- header -->    
<td  height=45px colspan=3 bgcolor=#008000 > 
  <nav id="navigation"> 
<ul class=nav> 
<li class=""><a href="#" target="_self">Home</a></li> 
 
<li><a href="about.php" target="iframe" >About</a></li> 
<li><a href="contact.php" target="iframe">Contact us</a></li><li><a href="#" target="iframe">Feedback</a></li> 
<li><a href="galary.php" target="iframe">Gallery</a></li> 
<li><a href="help.php"target="iframe">Help</a></li> 
<li><a href="#" target="iframe"><p><font color="white" face="monotype corsiva" size="5">Create Account</font></p></a></li></li>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
                        <a href="http://localhost/group/group/index.html">????</a>&nbsp;| 
                        <a href="http://localhost/group/index.html">English</a>  
    </ul> 
   </nav> 
  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
</div> 
</td></div></div> 
  
</div></tr><tr><td> 
<iframe src="about.php" name="iframe" height="1030" width="870" frameborder="2"> 
</iframe></td><td> 
<td  height=500px width=150px bgcolor="#ffebcd" valign=top border="1"> 
<table   bgcolor="#ffebcd"   width="200" height="900" class="menu-bar" align="center"> 
<tr> 
 <td width="150" height="20" bgcolor="#2F4F4F"> 
 <a ><b><form action="log.php" method="POST"> 

 <img  src="images/pho.jpg" width="225" height="120"> 
<h2 ><font color="white" face="monotype corsiva" size="5"> &nbsp;&nbsp;&nbsp;&nbsp; Login Here</h2></font><br> 
 <fieldset>  
<label for="username"><font color="white"  size="4">User Name</font></label> 
<input type="text" id="username" name="username" required /><br> 
<label for="usertype"><font color="white"  size="4">User Type</font></label>  
 <select name="usertype" id="usertype"> 
 <option>Applicant</option> 
  <option value="manager">manager</option> 
    <option value="systemadmin">systemadmin</option> 
  <option value="storekepper">storekepper</option> 
</select><br> 
<label for="password"><font color="white"  size="4"> Password </font></label> 
  <input type="password" id="password" name="password" required/> 
<br><br> 
<div id="lower"> 
<input type="submit" value="Login" name="submit" /> 
  <input type="reset" value="Reset"  name="reset"/> 
 </fieldset><br></label></form> </td></tr> 
<tr></td></tr></td>  </tr> 
  <tr><td> <img src="images/note.png" width="225" height="280"></td>  </tr> 
 <tr><td> <marquee direction="up"  
><font color="green" face="monotype corsiva" size="5">LOGISTIC SERVICE</font></marquee></td>  </tr> 
 
<tr><td >  
<h2>Social Medias</h2><fieldset> 
     <a href="https://www.facebook.com/" class="facebook-ico"><img src="images/facebook.png" width="55" height="40"></a> 
<a href="https://twitter.com/" class="twitter-ico"><img src="images/twitter.png" width="75" height="40"></a> 
<a href="http://www.google.com/en/" class="google-ico"><img src="images/google.png" width="75" height="40"></a> 
</fieldset></td>  </tr> 
   </table></td></td></tr><tr> 
<td colspan=3 bgcolor=gray> 
 
<table align="center"><tr ><td ><font face="Times New Roman" color="blue" size="3"> 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
&nbsp&copy; Copyright 2016  
 &nbsp; &nbsp; &nbsp; &nbsp; 
</font></td></tr></table> 
</td></tr></table> 
</body></html> 
Login.php 
<?php 
session_start(); 
$usertype=$_POST['usertype']; 
 
$username=$_POST['username']; 
$password=$_POST['password']; 
if($usertype=="Applicant") 
{ 
$con = mysql_connect("localhost","root",""); 
mysql_select_db("lmsorda", $con); 
 
$sql = "SELECT * FROM user where UserName='".$username."' and Password='".$password."' and UserType='"."'"; 
$result = mysql_query($sql,$con); 
$records = mysql_num_rows($result); 
$myrow = mysql_fetch_array($result); 
if ($records==0) 
{ 
echo '<script type="text/javascript">alert("Wrong Username or Password Please Try Again!"); 
window.location=\'index.html\';</script>'.mysql_error(); 
} 
else 
 { 
echo '<script type="text/javascript">window.location=\'beneficiary1.html\';</script>'; 
}  
 
mysql_close($con); 
} 

 
else if($usertype=="systemadmin") 
{ 
$con = mysql_connect("localhost","root",""); 
mysql_select_db("lmsorda", $con); 
 
$sql = "SELECT * FROM user where UserName='".$username."' and Password='".$password."' and UserType='".$usertype."'"; 
$result = mysql_query($sql,$con); 
$records = mysql_num_rows($result); 
$myrow = mysql_fetch_array($result); 
if ($records==0) 
{ 
echo '<script type="text/javascript">alert("Wrong Username or Password Please Try Again!"); 
window.location=\'index.html\';</script>'.mysql_error(); 
} 
else 
 { 
echo '<script type="text/javascript">window.location=\'systemadmin.html\';</script>'; 
}  
 
mysql_close($con); 
} 
else if($usertype=="manager") 
{ 

 
$con = mysql_connect("localhost","root",""); 
mysql_select_db("lmsorda",$con); 
$sql = "SELECT * FROM user where UserName='".$username."' and Password='".$password."' and UserType='".$usertype."'"; 
$result = mysql_query($sql,$con); 
$records = mysql_num_rows($result); 
$row = mysql_fetch_array($result); 
if ($records==0) 
{ 
echo '<script type="text/javascript">alert("Wrong Username or Password"); 
window.location=\'index.html\';</script>'.mysql_error(); 
} 
else 
 { 
echo '<script type="text/javascript">window.location=\'manager.html\';</script>'; 
$_SESSION['username']=$row['UserName']; 
}  
mysql_close($con); 
} 
else if($usertype=="storekepper") 
{ 
$con = mysql_connect("localhost","root",""); 
mysql_select_db("logistic", $con); 
$sql = "SELECT * FROM user where UserName='".$username."' and Password='".$password."' and UserType='".$usertype."'";  
 
$result = mysql_query($sql,$con); 
$records = mysql_num_rows($result); 
$row = mysql_fetch_array($result); 
if ($records==0) 
{ 
echo '<script type="text/javascript">alert("Wrong Username or Password Please Try Again?"); 
window.location=\'index.html\';</script>'.mysql_error(); 
} 
else 
{ 
echo '<script type="text/javascript">window.location=\'storek.html\';</script>'; 
$_SESSION['username']=$row['UserName']; 
} 
mysql_close($con); 
}
?> 
