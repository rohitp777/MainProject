<!DOCTYPE html>
<!--html lang="en">
<head>
<meta charset="utf-8">
<title>Job Search for Job Seekers</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<div id="content">
	<div class="register-form">
<form action='search.php' method='GET'>
<center>
<h1>Job Search by Mentioning Keyword</h1>
<input type='text' size='90' name='search' autocomplete="off"></br></br>
<input type='submit' name='submit'  ></br></br></br>
</center>
</form>
<b><p align="right"><a href="logoutjs.php">Sign Out</a></p></b>
</div>
</div>
</body>
</html-->
<?php
//require('connect.php');
include('lockjs.php');

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
			<marquee><b>Welcome,<?php echo $login_session=$row['fname'];
echo ". ";
echo $login_session=$row['sname'];
/*
echo "<br>";
echo "User-ID:";
echo $login_session=$row['id'];
*/
	  ?></b></marquee>
			<ul class="navigation">
				<li class="active">
					<a href="welcomejs.php">Home</a>
				</li>
				<li>
					<a href="#">My Details</a>
					<div>
						<a href="http://localhost/MainProject/run/jsdetail.php">MY ACCOUNT DETAILS</a>
						<a href="http://localhost/MainProject/run/forgotjs.php">UPDATE PASSWORD</a>
					</div>
				</li>
				<li>
					<a href="#">Resume & Applications</a>
					<div>
						<a href="http://localhost/MainProject/run/resumejs.php">REGISTER CV/RESUME</a>
						
					</div>
				</li>
				<li>
					<a href="#">Job Search</a>
					<div>
						<a href="http://localhost/MainProject/run/jobsearchjs.php">JOB SEARCH BY KEYWORDS</a>
						<a href="http://localhost/MainProject/run/jobsearchsector.php">JOB SEARCH BY CATEGORY</a>
					</div>
				</li>
				<li>
					<a href="careerjs.php">Career Advice</a>
					
				</li>
				<li>
					<a href="servicejs.php">Services</a>
				</li>
				<li>
					<a href="logoutjs.php">Log Out</a>
				</li>
			</ul>
		</div>
	</div>
	<div id="contents">
		<div class="clearfix">
			<h1>Job Search</h3>
			<form action='search.php' method='GET'>
			<div class="frame2">
				<div class="box">
					<img src="images/jobsearch.jpg" alt="Img" height="298" width="924">
				</div>
			</div>
			<p>
				<h2>Job Search by Mentioning Keyword</h2>
			<input type='text' size='90' name='search' autocomplete="off"></br></br>

<input type="submit" name="submit" value="Search">
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