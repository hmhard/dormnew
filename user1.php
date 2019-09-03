<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>User</title>
<link rel="stylesheet" type="text/css" href="form.css" />

<script type="text/JavaScript">
function validate()
{
	if(document.userform.fname.value=="")
   { alert("Please fill fname!" );
    document.userform.fname.focus() ;
    return false;
   }
   var str=document.userform.fname.value;
		   if(str.length>2 && str.length<12)
		   {
	       var valid="abcdefghijklmnopqrstuvwxyzABCDEFGHIGKLMNOPQRSTUVWXYZ ";
	      for(i=0;i<str.length;i++)
	       {
	        if(valid.indexOf(str.charAt(i))==-1)
	         {
	          alert("please insert alphabet characters for  fname");
	          document.userform.fname.value="";
	          document.userform.fname.focus();
	          return false;
	         }
	       }
		  }
		 else
		      {
		         alert("please enter at least three alphabet characters for fname.");
		         document.userform.fname.value="";
	             document.userform.fname.focus();
	             return false;
		      } 
			  
if(document.userform.lname.value =="" )
   { alert("Please fill your 's  last name!" );
    document.userform.lname.focus() ;
    return false;
   }
   
   var str=document.userform.lname.value;
		   if(str.length>2 && str.length<12)
		   {
	       var valid="abcdefghijklmnopqrstuvwxyzABCDEFGHIGKLMNOPQRSTUVWXYZ ";
	      for(i=0;i<str.length;i++)
	       {
	        if(valid.indexOf(str.charAt(i))==-1)
	         {
	          alert("please insert alphabet characters for last name");
	          document.userform.lname.value="";
	          document.userform.lname.focus();
	          return false;
	         }
	       }
		  }
		 else
		      {
		         alert("please enter at least three alphabet characters for last name.");
		         document.userform.lname.value="";
	             document.userform.lname.focus();
	             return false;
		      } 
   if(document.userform.age.value=="")
	{
	alert("please enter number");
	document.userform.age.value="";
	document.userform.age.focus();
	return false;
	}
	var str=document.userform.age.value;
	var valid="0123456789";
	for(i=0;i<str.length;i++)
		if(str.length>2)
			alert("please enter valid digit");
	{
	if(valid.indexOf(str.charAt(i))==-1)
	{
	alert("please insert age only number");
	document.userform.age.value="";
	document.userform.age.focus();
	return false;
	}
	}
    if(document.userform.sex.value=="Default")
	{
	alert("Please Select Your Gender!");
	document.userform.sex.value="";
	document.userform.sex.focus();
	return false;
	}
   
   if(document.userform.address.value=="")
   { alert("Please fill woreda!" );
    document.userform.address.focus() ;
    return false;
   }
   var str=document.userform.address.value;
		   if(str.length>1 && str.length<20)
		   {
	       var valid="abcdefghijklmnopqrstuvwxyzABCDEFGHIGKLMNOPQRSTUVWXYZ ";
	      for(i=0;i<str.length;i++)
	       {
	        if(valid.indexOf(str.charAt(i))==-1)
	         {
	          alert("please insert alphabet characters for  address");
	          document.userform.address.value="";
	          document.userform.address.focus();
	          return false;
	         }
	       }
		  }
		 else
		      {
		         alert("please enter at least two alphabet characters for address.");
		         document.userform.address.value="";
	             document.userform.address.focus();
	             return false;
		      } 

   
	if(document.userform.salary.value=="")
	{
	alert("please enter Salary!");
	document.userform.salary.value="";
	document.userform.salary.focus();
	return false;
	}
	var str=document.userform.salary.value;
	var valid="0123456789";
	for(i=0;i<str.length;i++)
	{
	if(valid.indexOf(str.charAt(i))==-1)
	{
	alert("please insert Salary only number");
	document.userform.salary.value="";
	document.userform.salary.focus();
	return false;
	}
	} 
	if(document.userform.phone.value=="")
	{
	alert("please enter phone number");
	document.userform.phone.value="";
	document.userform.phone.focus();
	return false;
	}
	var str=document.userform.phone.value;
	var valid="0123456789+";
	for(i=0;i<str.length;i++)
	{
	if(valid.indexOf(str.charAt(i))==-1)
	{
	alert("please insert phone number only number");
	document.userform.phone.value="";
	document.userform.phone.focus();
	return false;
	}
	}
	if(str.length!=10)
	{
	alert("please enter phone number 10  digit.");
	document.userform.phone.focus();
	return false;
	}
 if (str.charAt(0)!="0")
           {
             alert("phone number should be start with 0");
			 document.userform.phone.focus();
              return false;
			  	   
           }
if (str.charAt(1)!="9")			   
           {
             alert("phone number should be start with 09");
			 document.userform.phone.focus();
              return false;
           }
if(document.userform.email.value == "" )
   {
    alert("Please fill your 's email!" );
    document.userform.email.focus() ;
    return false;
   }
   var x=document.forms["userform"]["email"].value;
var atpos=x.indexOf("@");
var dotpos=x.lastIndexOf(".");
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
  {
  alert("Not a valid e-mail address");
  document.userform.email.value="";
  return false;
  }
  if(document.userform.username.value =="" )
   { alert("Please provide Your UserName!" );
    document.userform.username.focus() ;
    return false;
   }
   
   var str=document.userform.username.value;
		   if(str.length>3 && str.length<12)
		   {
	       var valid="abcdefghijklmnopqrstuvwxyzABCDEFGHIGKLMNOPQRSTUVWXYZ";
	      for(i=0;i<str.length;i++)
	       {
	        if(valid.indexOf(str.charAt(i))==-1)
	         {
	          alert("please insert alphabet characters for UserName");
	          document.userform.username.value="";
	          document.userform.username.focus();
	          return false;
	         }
	       }
		  }
		 else
		      {
		         alert("please enter at least three alphabet characters for UserName.");
		         document.userform.username.value="";
	             document.userform.username.focus();
	             return false;
		      } 
if(document.userform.usertype.value=="Default")
	{
	alert("Please Select Your UserType!");
	document.userform.usertype.value="";
	document.userform.usertype.focus();
	return false;
	}
	if(document.userform.password.value=="")
	{
	alert("please enter id");
	document.userform.password.value="";
	document.userform.password.focus();
	return false;
	}
	var str=document.userform.password.value;
	var valid="0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIGKLMNOPQRSTUVWXYZ/.@#$&";
	for(i=0;i<str.length;i++)
	{
	if(valid.indexOf(str.charAt(i))==-1)
	{
	alert("please provide your password!");
	document.userform.password.value="";
	document.userform.password.focus();
	return false;
	}
	}
}
</script>
</head>

<body>
<center>
<div id="container">
<form action="insertuser1.php" method="POST" name="userform" onsubmit='return validate()'>
<h2>የተጠቃሜ መረጃ መመዝገቤያ ቅፅ </h2>
<hr>
<center><h3>የተመዝጋቤ ሙሉ መረጃ ማሰገቧያ </h3></center>
<div><label for="fname">ስም</label><input type="text" name="fname" required/><br></div>
<div><label for="lname">የአባት ስም</label><input type="text" name="lname" required /><br></div>
<div><label for="ag">ዕድሜ</label> <input type="text" name="age"  required/><br></div>
<div><label for="s">ጸታ</label><select name="sex" >
<option value="Default">ምረጥ</option>
<option value="male">ወንድ</option>
<option value="female">ሴት</option>
</select><br></div>
<div><label for="a">አድራሻ</label> <input  type="text" name="address"  required/><br></div>

<div><label for="p">ስልክ</label><input type="text" name="phone" required/><br></div>
<div><label for="e">ኤሚሌ</label><input type="text" name="email" required/><br></div>
<hr>
<center><h3>Account Profile</h3></center>
<div><label for="username">User Name</label><input type="text" name="username"  required/><br></div>

<div><label for="password"> የይለፍ ቃል </label>
  <input type="password" id="password" name="password" required/><br></div>
<hr>
<div id="lower">
<input type="submit" value="Submit" name="submit" />
<input type="reset" value="Reset"  name="reset"/>
</div>
<hr>
</form>
<br>
 <?php if(isset($_GET['msgs'])) echo $_GET['msgs']?><br>
</div>
</center>
</body>
</html>
