<?php

include('lockjp.php');

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
				<a href="index.html"><img src="images/logotop2.png" alt="LOGO" height="52" width="362"></a>
			</div>
			<marquee><b>Welcome,<?php echo $login_session=$row['title']. "&nbsp;" . $login_session=$row['fname'];
echo ". ";
echo $login_session=$row['sname']. "&nbsp;" . "of" . "&nbsp;" . $login_session=$row['company_name']. "&nbsp;" . "Company";
  ?></b></marquee>
			<ul class="navigation">
				<li class="active">
					<a href="http://localhost/MainProject/run/welcomejp.php">Home</a>
				</li>
				<li>
					<a href="#">My Details</a>
					<div>
						<a href="http://localhost/MainProject/run/jpdetail.php">MY ACCOUNT DETAILS</a>
						<a href="http://localhost/MainProject/run/forgotjp.php">UPDATE PASSWORD</a>
					</div>
				</li>
				<li>
					<a href="#">My Jobs</a>
					<div>
						<a href="http://localhost/MainProject/run/jobpost.php">ADVERTISE A JOB</a>
						<a href="http://localhost/MainProject/run/jobadvertisedetail.php">VIEW ADVERTISED JOBS</a>
						<a href="http://localhost/MainProject/run/viewjobapply.php">VIEW JOB APPLICATIONS</a>
					</div>
				</li>
				<li>
					<a href="http://localhost/MainProject/run/searchcvjp.php">Search For Resume's</a>
				</li>
				<li>
					<a href="http://localhost/MainProject/run/recruiter.php">Recruiter Resources</a>
				</li>
				<li>
					<a href="logoutjp.php">Log Out</a>
				</li>
			</ul>
		</div>
	</div>
	<div id="contents">
		<div id="adbox">
			<div class="clearfix">
				<img src="images/jptop1.jpg" alt="Img" height="382" width="594">
				<div class="detail">
					<p>If you want to know what goals you should have, ask around.<br> 
					People will tell you. <br>					
						The secret of getting ahead is getting started.
					</p>
				</div>
			</div>
		</div>
	
		<div class="featured">
			<h2>Current Job Related News for Employers</h2>
			<ul class="clearfix">
				<li>
					<div class="frame1">
						<div class="box">
							<img src="images/pfooter1.jpeg" alt="Img" height="130" width="197">
						</div>
					</div>
					<p>
						<b>Payrolls Surge In April, Jobless Rate Hits 5½ Year Low</b>U.S. job growth increased at its fastest pace in more than two years in April and 
						the unemployment rate dived to a 5-1/2 year low of 6.3 percent.
					</p>
					<a href="http://jobs.aol.com/articles/2014/05/02/april-jobs-report/" class="more">Read More</a>
				</li>
				<li>
					<div class="frame1">
						<div class="box">
							<img src="images/pfooter2.jpg" alt="Img" height="130" width="197">
						</div>
					</div>
					<p>
						<b>Weekly Jobless Claims Rise Unexpectedly in Latest Week</b> The number of Americans filing new claims for unemployment benefits unexpectedly rose last week, 
						but trends point to improving labor market conditions.
					</p>
					<a href="http://jobs.aol.com/articles/2014/05/01/weekly-jobless-claims-rise-unexpectedly/" class="more">Read More</a>
				</li>
				<li>
					<div class="frame1">
						<div class="box">
							<img src="images/pfooter3.jpg" alt="Img" height="130" width="197">
						</div>
					</div>
					<p>
						<b>Minimum Wage Debate In A Nutshell Plenty of talk but no action in the U.S. Senate</b>Senate Republicans have blocked a formal debate on a minimum wage increase. 
						But senators on both sides are talking about it at length. Here is a sample. 
					</p>
					<a href="http://jobs.aol.com/articles/2014/05/01/minimum-wage-debate-in-a-nutshell/" class="more">Read More</a>
				</li>
				<li>
					<div class="frame1">
						<div class="box">
							<img src="images/pfooter4.jpg" alt="Img" height="130" width="197">
						</div>
					</div>
					<p>
						<b>U.S. Private Sector Employers Add 220,000 Jobs In April</b> U.S. businesses boosted hiring in April, according to a private survey, 
						a positive sign the economy may improve after a sluggish start this year.
					</p>
					<a href="http://jobs.aol.com/articles/2014/04/30/us-private-sector-employers-add-220000-jobs-april/" class="more">Read More</a>
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
