


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
		<h1>Job Apply Status</h3>
			<div class="frame2">
				<div class="box">
					<img src="images/luck.jpg" alt="Img" height="298" width="924">
				</div>
			</div>
			<p>
				<?php
require('connect.php');

include('lockjp.php');

$login_session=$row['id'];
		 
/*$ses_sql=mysql_query("SELECT j.id,j.fk_employer_id,j.job_ref,j.job_title,j.job_description,j.job_postion,j.city,j.state_province,j.country,
		j.fk_education_id,j.fk_career_id,j.fk_experience_id,j.job_salary,j.company_name,j.contact_name,j.contact_telephone,j.site_link,j.poster_email,j.apply_count,
		j.job_startdate,j.job_enddate,edu.id,edu.education_name,career.id,career.career_name,exp.id,exp.experience_name,cat.id,cat.cat_name,
		j2c.job_id,j2c.category_id,j2s.fk_job_id,j2t.fk_job_id,status.id,status.status_name,type.id,type.type_name
		FROM jobberland_job AS j,jobberland_education AS edu,jobberland_career_degree AS career,jobberland_experience AS exp,jobberland_category AS cat,jobberland_job2category AS j2c,jobberland_job2status AS j2s,jobberland_job2type AS j2t,jobberland_job_status AS status,jobberland_job_type AS type
		WHERE j.fk_employer_id='$login_session' AND
			 j.fk_education_id=edu.id AND
			 j.fk_career_id=career.id AND
			 j.fk_experience_id=exp.id AND
			 j.id=cat.id AND
			 j2c.job_id=j2c.category_id AND
			 j2s.fk_job_id=status.id AND
			 j2t.fk_job_id=type.id" );
*/

$ses_sql=mysql_query("select c.id as cvid,c.cv_title,c.cv_description,c.cv_file_name,c.year_experience,c.highest_education,c.salary_range,c.availability,
					c.start_date,c.positions,c.recent_job_title,c.recent_employer,c.recent_industry_work,c.look_job_type,c.look_job_status,
					c.city,c.state_province,c.country,c.are_you_auth,c.willing_to_relocate,c.willing_to_travel,cv.cv_id,cv.category_id,
					cat.id,cat.cat_name,j.id,j.var_name,j.fk_employer_id,j.contact_name,j.job_title,j.job_description,j.job_postion,j.company_name,
					j.contact_telephone,j.site_link,j.poster_email,emp.id
					from jobberland_cv_detail as c
					inner join jobberland_cv_look_occupation as cv
					on c.id=cv.cv_id
					inner join jobberland_category as cat
					on cv.category_id=cat.id
					inner join jobberland_job as j
					on cv.category_id=j.var_name
					inner join jobberland_employer as emp
					on j.fk_employer_id=$login_session
					where emp.id=$login_session " );

			
$row=mysql_fetch_array($ses_sql);

		$cvid=$row['cvid'];
		//$fkemployerid=$row['fk_employer_id'];
		$cvtitle=$row['cv_title'];
		$cvdesc=$row['cv_description'];
		$cvname=$row['cv_file_name'];
		$cvexp=$row['year_experience'];
		$cvedu=$row['highest_education'];
		$cvsalary=$row['salary_range'];
		$availability=$row['availability'];
		$startdate=$row['start_date'];
		$position=$row['positions'];
		$recentjobtitle=$row['recent_job_title'];
		$recentemployer=$row['recent_employer'];
		$recentindwork=$row['recent_industry_work'];
		$cvjobtype=$row['look_job_type'];
		$cvjobstatus=$row['look_job_status'];
		$city=$row['city'];
		$state=$row['state_province'];
		$country=$row['country'];
		$auth= $row['are_you_auth'];
		$relocate= $row['willing_to_relocate'];
		$travel=$row['willing_to_travel'];
		$cvlookid=$row['cv_id'];
		$cvlookcatid=$row['category_id'];
		$catid=$row['id'];
		$catname=$row['cat_name'];
		$jobid=$row['id'];
		$varname=$row['var_name'];
		$fkemployerid=$row['fk_employer_id'];
		$contactname=$row['contact_name'];
		$jobtitle=$row['job_title'];
		$jobdesc=$row['job_description'];
		$jobposition=$row['job_postion'];
		$companyname=$row['company_name'];
		$contactphone=$row['contact_telephone'];
		$site=$row['site_link'];
		$email=$row['poster_email'];
		$empid=$row['id'];
	
		
		


// ---------------- SEND MAIL FORM ----------------
	require 'class.phpmailer.php';
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Mailer = 'smtp';
$mail->SMTPAuth = true;
$mail->Host = 'smtp.gmail.com'; // "ssl://smtp.gmail.com" didn't worked
$mail->Port = 465;
$mail->SMTPSecure = 'ssl';
$mail->Username = "rockyrox7777@gmail.com";
$mail->Password = "uiopuiop";

$mail->IsHTML(true); // if you are going to send HTML formatted emails
$mail->SingleTo = true;

$mail->From = "rockyrox7777@gmail.com";
$mail->FromName = "Rohit Patil";
	
$mail->addAddress("rockyrox7777@gmail.com","user 2");
//$mail->addAddress("$email","User 2");
	// send e-mail to ...
	//$to=$email;

$mail->Subject = "Resume Selected for you Job Search on Rohit Patil Job Site";
$mail->Body = "Hello $cvtitle,"."<br>"."Your Resume has been selected for the position available in our company"."<br>"." 
Below are the details for the Job contact us 
through our Email or Contact number below:"."<br>"."<b>"."Company Name:"."</b>"."$companyname"."<br>"."<b>"."Job Category:"."</b>"."$catname"."<br>"."
<b>"."Job Title:"."</b>"."$jobtitle"."<br>"."<b>"."Job Description:"."</b>"."$jobdesc
"."<br>"."<b>"."Job Position:"."</b>"."$jobposition"."<br>"."<b>"."Contact Person For this Job:"."</b>"."$contactname"."<br>"."
<b>"."Contact Number:"."</b>"."$contactphone"."<br>"."
<b>"."Email Address:"."</b>"."$email"."<br>"."<b>"."Our Company Website:"."</b>"."$site";

// send email
//$mail->mail($mail->addAddress,$mail->Subject,$mail->Body,$mail->From);
//}//


// if not found 
/*else 
{
echo "Not found your email in our database";
}

// if your email succesfully sent

/*if($mail->Send())
{
echo "Your Confirmation link Has Been Sent To Your Email Address.";
}
else {
echo "Cannot send Confirmation link to your e-mail address";
}
}
*/

if ($_POST ['email_address']="") {
    echo "<span style='color: #ff0000;'>"."	Not found your email in our database"."</span>";
        }
        
    //If the message is sent successfully, display success message otherwise display an error message.
    //if($cvid==1)
    //if($count==1)
	{
	if(!$mail->Send())
    echo "Message was not sent <br />PHPMailer Error: " . $mail->ErrorInfo;

	//else
    echo "<h2>"."Job Notification Sent to the Candidate Successfully"."</h2>";
        
    }
       /* else
        {
        if($_POST['email_address']!="")
        echo "<span style='color: #ff0000;'> Cannot send password to your e-mail address.Problem with sending mail...</span>";
    }*/
?>	
			



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