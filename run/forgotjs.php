<?php session_start();

?>
 <!DOCTYPE html>
<!--html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="styleupdate.css" />
<title>Rohit Patil Job Site</title>
</head>
<body>

<?php
/*	if(isset($msg) & !empty($msg)){
		echo $msg;
	}
	*/
 ?>
 <font color="000000">
<h3>Forgot Password</h3>
<form action="http://localhost/MainProject/run/sendmailjs.php" method="POST">
    <label>Enter User Name : </label>
	<input id="username" type="text" name="username" required/>

    <input  type="submit" class="password" value="Get Password" />
   
	</form>
	</font>

</body>
</html-->


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
					<a href="index.html">Home</a>
				</li>
				<li>
					<a href="about.html">My Details</a>
					<div>
						<a href="http://localhost/MainProject/run/jsdetail.php">MY ACCOUNT DETAILS</a>
						<a href="http://localhost/MainProject/run/forgotjs.php">UPDATE PASSWORD</a>
					</div>
				</li>
				<li>
					<a href="practices.html">Resume & Applications</a>
					<div>
						<a href="http://localhost/MainProject/run/resumejs.php">REGISTER CV/RESUME</a>
						<a href="#">MY SAVED RESUME</a>
					</div>
				</li>
				<li>
					<a href="lawyers.html">Job Search</a>
					<div>
						<a href="http://localhost/MainProject/run/jobsearchjs.php">JOB SEARCH BY KEYWORDS</a>
						<a href="http://localhost/MainProject/run/jobsearchsector.php">JOB SEARCH BY CATEGORY</a>
					</div>
				</li>
				<li>
					<a href="news.html">Career Advice</a>
					<div>
						<a href="singlepost.html">News Single Post</a>
					</div>
				</li>
				<li>
					<a href="contact.html">Services</a>
				</li>
				<li>
					<a href="logoutjs.php">Log Out</a>
				</li>
			</ul>
		</div>
	</div>
	<div id="contents">
		<div class="clearfix">
			<h1>Forget Password Update</h3>
			<form action="http://localhost/MainProject/run/sendmailjs.php" method="POST">
			<div class="frame2">
				<div class="box">
					<img src="images/update.jpg" alt="Img" height="298" width="924">
				</div>
			</div>
			<p>
			    <b>Enter User Name : </b>
	<input id="username" type="text" name="username" required/>

    <input  type="submit" class="password" value="Get Password" />
   
	</form>

</p>
<form action="welcomejs.php" method="POST">
		
		<input type="submit" name="submit" value="Home Page">
		</form>
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