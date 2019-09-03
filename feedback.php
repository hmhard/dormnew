<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Feedback</title>
<link rel="stylesheet" type="text/css" href="form.css" />
<script type="text/JavaScript">
function validate()
{
if(document.fbform.fname.value=="")
   { alert("Please fill fname!" );
    document.fbform.fname.focus() ;
    return false;
   }
   var str=document.fbform.fname.value;
		   if(str.length>2 && str.length<12)
		   {
	       var valid="abcdefghijklmnopqrstuvwxyzABCDEFGHIGKLMNOPQRSTUVWXYZ ";
	      for(i=0;i<str.length;i++)
	       {
	        if(valid.indexOf(str.charAt(i))==-1)
	         {
	          alert("please Provide your firstname!");
	          document.fbform.fname.value="";
	          document.fbform.fname.focus();
	          return false;
	         }
	       }
		  }
		 else
		      {
		         alert("please enter at least three alphabet characters for fname.");
		         document.fbform.fname.value="";
	             document.fbform.fname.focus();
	             return false;
		      } 


if(document.fbform.lname.value =="" )
   { 
alert("Please fill your 's  last name!" );
    document.fbform.lname.focus() ;
    return false;
   }
   
   var str=document.fbform.lname.value;
		   if(str.length>2 && str.length<12)
		   {
	       var valid="abcdefghijklmnopqrstuvwxyzABCDEFGHIGKLMNOPQRSTUVWXYZ ";
	      for(i=0;i<str.length;i++)
	       {
	        if(valid.indexOf(str.charAt(i))==-1)
	         {
	          alert("please provide alphabet characters for last name");
	          document.fbform.lname.value="";
	          document.fbform.lname.focus();
	          return false;
	         }
	       }
		  }
		 else
		      {
		         alert("please enter at least three alphabet characters for last name.");
		         document.fbform.lname.value="";
	             document.fbform.lname.focus();
	             return false;
		      } 
if(document.fbform.email.value == "" )
   {
    alert("Please fill your 's email!" );
    document.fbform.email.focus() ;
    return false;
   }
   var x=document.forms["fbform"]["email"].value;
var atpos=x.indexOf("@");
var dotpos=x.lastIndexOf(".");
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
  {
  alert("Please provide your valid e-mail address!");
  document.fbform.email.value="";
  return false;
  }
   if(document.fbform.type.value=="Default")
	{
	alert("Please Select The Type!");
	document.fbform.type.value="";
	document.fbform.type.focus();
	return false;
	}
if(document.fbform.rate.value=="Default")
	{
	alert("Please Select The Rate!");
	document.fbform.rate.value="";
	document.fbform.rate.focus();
	return false;
	}
  if(document.fbform.comment.value=="")
	{
	alert("please enter your comment");
	document.fbform.comment.value="";
	document.fbform.comment.focus();
	return false;
	}
	var str=document.fbform.comment.value;
	var valid="0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIGKLMNOPQRSTUVWXYZ/.";
	for(i=0;i<str.length;i++)
	{
	alert("please provide your comment!");
	document.fbform.comment.value="";
	document.fbform.comment.focus();
	return false;
	}
	}
  }
 </script>

</head>
<body>
<center>
<div id="container">
<form action="insertfb.php" method="POST" name="fbform"  onsubmit='return validate()'>
<h3>You can give us any comment</h3>
<hr>
 <div><label for="fn"> First Name</label> <input type="text" name="fname"required/> <br></div>
 <div><label for="ln">Last Name</label><input type="text" name="lname" required/><br></div>
 
<div><label  for="email"> Email</label><input type="text" name="email" required/><br></div>
 
 <div><label for="type">Type </label>
 <select name="type" >
 <option selected="" value="Default">please select type</option>
 <option value="aboutoffice">About Office</option>
 <option value="awebsite">About Website</option>
 <option value="other">Others</option>
 </select><br></div>
 
  <div><label for="rate">  Rating</label>
    <select  name="rate" id="rate">
	<option selected="" value="Default">please select rate</option> 
      <option  value="excellent">Excellent</option>
      <option value="vgood">Very Good</option>
      <option value="good">Good</option>
      <option value="fair">Fair</option>
      <option value="poor">Poor</option>
    </select><br><br></div>
   <div><label for="comment"> Comment</label> 
    <textarea cols="25" rows="5" name="comment" required></textarea> 
    <br></div>
    <hr>
    <div id="lower">
    <input type="submit" value="Submit" name="submit"/>
      <input type="reset" value="Reset"  name="reset"/>
      </div>
      <hr>
 </form>

<h4>
<?php if(isset($_GET['msgs'])) echo $_GET['msgs']?></h4>
 </div>

</center>
</body>
</html>
