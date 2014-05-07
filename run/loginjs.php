<?php

include("connect.php");
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST")
{
// username and password sent from form 

$myusername=addslashes($_POST['username']); 
$mypassword=addslashes($_POST['passwd']);

$encrypted_mypassword=md5($mypassword); 


$sql="SELECT id FROM jobberland_employee WHERE username='$myusername' and passwd='$encrypted_mypassword'";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
//$active=$row['active'];

$count=mysql_num_rows($result);


// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1)
{
//session_register("myusername");
$_SESSION['login_user']=$myusername;

header("location: welcomejs.php");
}
else 
{
$msg ="Your Login Name or Password is Invalid";
}
}
?>




<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>Rohit Patil Job Site</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
	<div id="header">
		<div class="clearfix">
			<div class="logo">
				<a href="index.html"><img src="images/logotop.png" alt="LOGO" height="52" width="362"></a>
			</div>
			
			<ul class="navigation">
				<li class="active">
					
				</li>
			</ul>
		</div>
	</div>
	<div id="contents">
		<div class="clearfix">
			<h1>Login Status for Job Seeker</h3>
			
			<div class="frame2">
				<div class="box">
					<img src="images/error.jpg" alt="Img" height="298" width="924">
				</div>
			</div>
			<h2>
			  <?php
if(isset($msg) & !empty($msg)){
		echo $msg;
	}
 ?> 
</h2>

		</div>
	</div>
	
		<div id="footnote">
			<div class="clearfix">
				<div class="connect">
					<a href="https://www.facebook.com/" class="facebook"></a><a href="https://twitter.com/" class="twitter"></a><a href="https://plus.google.com/" class="googleplus"></a>
				</div>
				<p>
					Rohit. Patil Job Site
				</p>
			</div>
		</div>
	</div>
</body>
</html>
