

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
	<div class="featured">
			<h1>Training and Education</h>
			</p>
			<ul class="clearfix">
			<li>
					<div class="frame2">
					
							<img src="images/service1.gif" alt="Img"  height="150" width="350">
						
					
						<h2>Home Learning College</h2><p>Home Learning College has many training courses across Book-Keeping & Accountancy, 
						IT & Computing, Business & Marketing courses, Internet & Web Design, Social Care and Child Care
					
					<a href="http://www.homelearningcollege.com/default.aspx?campaignname=TTJ0001" class="more">Read More</a>
				</p>
				</div>
				</div>	
				</li>
				<li>
					<div class="frame2">
						
							<img src="images/service2.gif" alt="Img"  height="150" width="350">
					
					
						<h2>Kaplan Open Learning</h2><p>Kaplan Open Learning is changing the way that working adults study. 
						Kaplan train over 1 million students every year and are working with 
						the University of Essex (consistently ranking among the top 10 Universities in the country) to deliver online degrees to working adults.

					
					<a href="http://online.essex.ac.uk/?utm_source=tip%2Btop%2Bjob&utm_medium=course%2Blisting&utm_campaign=tip%2Btop%2Bjob%2Btraining" class="more">Read More</a>
				</p>
				</div>
					</div>
				</li>
				<li>
					<div class="frame2">
					
							<img src="images/service3.gif" alt="Img"  height="150" width="350">
						
					
						<h2>Natural Training</h2><p>Natural Training is one of the UK’s most innovative sales training companies. 
						We run in-house workshops across the UK and Europe for companies like Dell Computers and The Discovery Channel.
					
					<a href="http://www.naturaltraining.com/" class="more">Read More</a>
				</p>
				</div>
				</div>	
				</li>
				<li>
					<div class="frame2">
						
							<img src="images/service4.gif" alt="Img"  height="150" width="350">
					
					
						<h2>Training Link</h2><p>Training Link have a wide range of courses to choose from and are continually updated to meet the latest guidelines with the latest qualifications and diplomas available. 
						Whichever home study course you choose from you can be assured of its quality and will give you the latest skills and knowledge.

					
					<a href="http://www.training-link.co.uk/" class="more">Read More</a>
				</p>
				</div>
					</div>
				</li>
				
					
					</ul>
		</div>
	</div>
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