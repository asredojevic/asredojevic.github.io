<?php
/************************************************************************/
/* PHP Simple PasswordProtect v1.0                                      */
/* ===========================                                          */
/*                                                                      */
/*   Written by Steve Dawson - http://www.stevedawson.com               */
/*   Freelance Web Developer - PHP, MySQL, HTML programming             */
/*                                                                      */
/* This program is free software. You can redistribute it and/or modify */
/* but please leave this header intact, thanks                          */
/************************************************************************/
##########################################################################
$password = "admin";  // Modify Password to suit for access, Max 10 Char.
##########################################################################
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Simple Password Protect - PHP PasswordProtect</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
 @font-face {
  font-family: "Open Sans";
  src: url("file:///Macintosh HD/Users/allisonsredojevic/Downloads/password-protect/OpenSans.otf");
  }
 

Body{
	font-family: "Open Sans", Helvetica, Arial, Sans-serif;
	font-size: 18px;
	color: #333;
	background-color: #FFF;
	text-align:center;
	}
h1{
	font-family: "Open Sans", Helvetica, Arial, Sans-serif;
	font-size:36px;
	font-weight: 100;
	text-align:center;
	color:#333333;
	line-height:.5;
	padding:60px 0 0 0;
	}

h2{
	font-family: "Open Sans", Helvetica, Arial, Sans-serif;
	font-size:21px;
	font-weight: 100;
	text-align:center;
	color:#333333;
	line-height:.25;
	}

h3{
	font-family: "Open Sans", Helvetica, Arial, Sans-serif;
	font-size:21px;
	font-weight: 700;
	text-align:center;
	color:#333333;
	line-height:.25;
	
	}
h4{
	font-family: "Open Sans", Helvetica, Arial, Sans-serif;
	font-size:18px;
	font-weight: 100;
	text-align:center;
	color:#333333;
	line-height:.25;
	padding:30px 0 0 0;
	}

p{
	font-family: "Open Sans", Helvetica, Arial, Sans-serif;
	padding: 0 0 15px 0;
	margin: 0;
	line-height:1.5;
	}
a{
	text-decoration:none;
	color:#b92772;
	font-weight:bold;
	}
	
#container {
	width: 100%;
	max-width:1020px;
	margin-left: auto;
	margin-right: auto;
	background-color: #ffffff;
}
.content{
	width:75%;
	padding:30px 0 30px 0;
	margin-left:auto;
	margin-right:auto;
	}
.list{
	width:50%;
	margin-left:auto;
	margin-right:auto;
	}
.list img{
	width:100%;
	padding:10px 0 10px 0;
	}
.site-arch{
	width:90%;
	margin-left:auto;
	margin-right:auto;
	}
.site-arch img{
	width:100%;
	}
.browserSearch{
	width:90%;
	margin-left:auto;
	margin-right:auto;
	}
.browserSearch img{
	width:100%;
	}
.single-img{
	width:80%;
	background-color:#e2e2e2;
	margin-left:auto;
	margin-right:auto;
	}
.single-img img{
	width:100%;
	}
	
@media only screen and (max-width: 481px){
	.list{
	width:80%;
	margin-left:auto;
	margin-right:auto;
	}
	.single-img{
	width:90%;
	}
</style>
-->
</style>
</head>
<body>
<?php 
  print "<h2 align=\"center\">PHP Simple Password Protect</h2>";
// If password is valid let the user get access
if (isset($_POST["password"]) && ($_POST["password"]=="$password")) {
?>
<!-- START OF HIDDEN HTML - PLACE YOUR CONTENT HERE -->
<div id="container">
<div>
<h1>The Garage Sale Helper</h1>
</div>
<div>
<h2>a google assignment</h2>
</div>
<div class="content">
<p>Design an experience that makes it easier for sellers to intelligently <a>inventory</a> their goods, and helps bargain hunters <a>find</a> the needle in a haystack.
</p>
</div>
<hr>
<div>
<h3>THE STORY</h3>
</div>
<div class="content">
<p>I began this assigment with a quick word assocation from the promt. This created two different paths, interfaces, and set of goals. The seller's would be organized and no-nonsense while the buyer's would focus on discovery. 
</p>
</div>
<div class="list">
<img src="file:///Macintosh HD/Users/allisonsredojevic/Downloads/password-protect/images/list.jpg" alt="list">
</div>
<div class="content">
<p>The image below depicts the site architecture (of a user not signed in) along the paths that both buyers and sellers can come across.
</p>
</div>
<div class="site-arch">
<img src="file:///Macintosh HD/Users/allisonsredojevic/Downloads/password-protect/images/site-arch.jpg" alt="arch">
</div>

<div class="content">
<p>The seller path is standardized with list and category views, compared to the browser path that is fluid and visually dynamic. Since images are a huge feature with any product, I decided that they should visually represent the difference between the two users. In the seller interface, all the images are the same size to easily organize and find items, while in the browser interface, the images are all different sizes for chance discoveries with every scroll. 
</p>
</div>
<hr>
<div>
<h3>USER FLOW</h3>
</div>
<div style="width:70%;margin-left:auto; margin-right:auto;padding:25px 0 25px 0;">
<div style="background-color:#e2e2e2; width:100%;" class="single-img">
       <img src="file:///Macintosh HD/Users/allisonsredojevic/Downloads/password-protect/images/UserFlow.gif" alt="interactionGIF"/>
      </div>
</div>
<hr>
<div>
<h3>HIGH FIDELITY MOCKUP</h3>
</div>

<div>
<h4>browser search for west elm funiture</h4>
</div>
<div class="browserSearch">
<img src="file:///Macintosh HD/Users/allisonsredojevic/Downloads/password-protect/images/browserSearch.jpg" alt="westelm">
</div>

<div>
<h4>details page for modern couch</h4>
</div>
<div class="browserSearch">
<img src="file:///Macintosh HD/Users/allisonsredojevic/Downloads/password-protect/images/itemDetails.jpg" alt="westelm">
</div>
<div>
<h4> by allison sredojevic</h4>
</div>


<!-- END OF HIDDEN HTML -->
<?php 
}
else
{
// Wrong password or no password entered display this message
if (isset($_POST['password']) || $password == "") {
  print "<p align=\"center\"><font color=\"red\"><b>Incorrect Password</b><br>Please enter the correct password</font></p>";}
  print "<form method=\"post\"><p align=\"center\">Please enter your password for access<br>";
  print "<input name=\"password\" type=\"password\" size=\"25\" maxlength=\"10\"><input value=\"Login\" type=\"submit\"></p></form>";
}
  print "<br><br><p align=\"center\">Written by <a href=\"http://www.stevedawson.com\">SteveDawson.com</a></p>";
?>
<BR>
</body>
</html>
