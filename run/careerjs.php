

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
			<h2>Career Advice</h2>
			</p>
			<ul class="clearfix">
			<li>
					<div class="frame2">
					
							<img src="images/resumecritic1.gif" alt="Img"  height="150" width="350">
						
					
						<h2>FREE Resume Critique</h2><p>We have partnered with Getinterviews to offer you a free resume critique. "· We know resumes – in fact, even in this economy, our writing service guarantees interviews in 30 days. 
						· We can spot errors that you can’t, because we know what hiring managers look for on a resume. 
						Most job seekers only guess at what these managers want – and with only one chance to get noticed, that’s risky. 
						· For 15+ years our Certified Professional Resume Writers have helped thousands of clients land their next interview and we can do the same for you." 
					
					<a href="http://www.getinterviews.com/tiptop/" class="more">Read More</a>
				</p>
				</div>
				</div>	
				</li>
				<li>
					<div class="frame2">
						
							<img src="images/resumecritic2.jpg" alt="Img"  height="150" width="350">
					
					
						<h2>Get Your CV/Resume Professionally Written</h2><p>We have teamed up with RedStarResume who are the number one choice for CV/Resume writing. 
						No matter where you are in your career, they can help you. Pick from the different levels of packages including "Entry Level", "Young Professional", "Professional Manager" and "Executive Director". 
						CV/Resume writing is about matching your skills and achievements to the requirements of the employer. 
						In order to get the job you desire, your CV/Resume needs to be displayed with the correct format, layout and presentation. 
						Why not get some help with making sure you have done this important task correctly?

					
					<a href="http://www.redstarresume.com/?affiliateCode=TIPTOP" class="more">Read More</a>
				</p>
				</div>
					</div>
				</li>
				
					<ul class="clearfix">
				<li>
					
						<h2>Career Advice for Applying Jobs</h2><br>
						<p>Take a look at some practical advice and useful articles with regards to applying for jobs:</p>

					
					<a href="http://us.tiptopjob.com/displaycontent/sectionid/84/contentid/1110_-length-of-resume" >How long should my resume be?</a><br><br>

	<a href="http://us.tiptopjob.com/displaycontent/sectionid/84/contentid/1116_-cover-letter-help" >How to write an Effective Cover Letter</a><br><br>

	<a href="http://us.tiptopjob.com/displaycontent/sectionid/84/contentid/1114_-resume-top-10-tips" >Top 10 Resume Tips </a><br><br>

	<a href="http://us.tiptopjob.com/displaycontent/sectionid/140/contentid/1233_-employer-interview-questions" >Employer Interview Questions </a><br><br>

	<a href="http://us.tiptopjob.com/displaycontent/sectionid/84/contentid/1168_-get-professional-resume-writing-assistance" >Resume Writing Companies </a><br><br>

	<a href="http://us.tiptopjob.com/displaycontent/sectionid/140/contentid/1241_-how-to-get-that-pay-raise-you-deserve" >How to Get That Pay Raise You Deserve </a><br><br>
	
<a href="http://us.tiptopjob.com/displaycontent/sectionid/140/contentid/1239_-questions-you-can-ask-in-the-job-interview" >Questions you can ask in the Job Interview  </a><br><br>

<a href="http://us.tiptopjob.com/displaycontent/sectionid/140/contentid/1226_-how-resumes-differ-from-country-to-country" >How Resumes differ from country to country  </a><br><br>

<a href="http://us.tiptopjob.com/displaycontent/sectionid/140/contentid/1246_-what-are-the-hardest-challenges-facing-college-graduates" >What are the hardest challenges facing college graduates</a><br><br>

<a href="http://us.tiptopjob.com/displaycontent/sectionid/140/contentid/1244_-finding-a-job-in-tough-economic-times" >Finding a job in tough economic times  </a><br><br>	

<a href="http://us.tiptopjob.com/displaycontent/sectionid/140/contentid/1243_-10-tips-to-staying-positive-while-looking-for-a-job" >10 Tips to staying positive while looking for a job  </a><br><br>	

<a href="http://us.tiptopjob.com/displaycontent/sectionid/140/contentid/1237_-interview-question-what-s-your-greatest-weakness" >Interview Question: What's your greatest weakness?   </a><br><br>	
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