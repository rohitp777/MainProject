<?php

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
			<b>Welcome,<?php echo $login_session=$row['fname'];
echo ". ";
echo $login_session=$row['sname'];
/*
echo "<br>";
echo "User-ID:";
echo $login_session=$row['id'];
*/
	  ?></b>
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
		<div id="adbox">
			<div class="clearfix">
				<img src="images/jstop1.jpg" alt="Img" height="382" width="594">
				<div class="detail">
					<p>When you leave college, there are thousands of people out there with the same degree you have;<br> 
					when you get a job, there will be thousands of people doing what you want to do for a living.<br>					
						But you are the only person alive who has sole custody of your life.
					</p>
				</div>
			</div>
		</div>
	
		<div class="featured">
			<h2>Current Job Related News</h2>
			<ul class="clearfix">
				<li>
					<div class="frame1">
						<div class="box">
							<img src="images/footer1.png" alt="Img" height="130" width="197">
						</div>
					</div>
					<p>
						<b>Jump in jobs: We've been here before</b>The 288,000 jobs added by employers in April would be enough to get excited 
						about if not for the fact that there have been many false starts during this recovery.
					</p>
					<a href="http://money.cnn.com/news/specials/jobs/" class="more">Read More</a>
				</li>
				<li>
					<div class="frame1">
						<div class="box">
							<img src="images/footer2.jpg" alt="Img" height="130" width="197">
						</div>
					</div>
					<p>
						<b>Wanted: 1.4 million new supply chain workers by 2018</b> The logistics industry has a recruiting problem. 
						It's huge, making up 8.5% of GDP, and growing fast. But to most job seekers, it's misunderstood -- or invisible.
					</p>
					<a href="http://management.fortune.cnn.com/2014/05/01/supply-chain-jobs/?iid=SF_BN_LN" class="more">Read More</a>
				</li>
				<li>
					<div class="frame1">
						<div class="box">
							<img src="images/footer3.jpg" alt="Img" height="130" width="197">
						</div>
					</div>
					<p>
						<b>Minimum wage: Congress stalls, states act</b>Odds remain low that Congress will raise the $7.25 federal minimum wage anytime soon.
					</p>
					<a href="http://money.cnn.com/2014/04/28/news/economy/states-minimum-wage/index.html?iid=SF_BN_LN" class="more">Read More</a>
				</li>
				<li>
					<div class="frame1">
						<div class="box">
							<img src="images/footer4.jpg" alt="Img" height="130" width="197">
						</div>
					</div>
					<p>
						<b>2014 minimum wage, state by state</b> States must meet the federal wage baseline of $7.25 for all workers 
						covered under the Fair Labor and Standards Act.
					</p>
					<a href="http://money.cnn.com/interactive/pf/state-minimum-wage/?iid=SF_BN_LN" class="more">Read More</a>
				</li>
			</ul>
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
