

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
					<a href="#">Recruiter Resources</a>
				</li>
				<li>
					<a href="logoutjp.php">Log Out</a>
				</li>
			</ul>
		</div>
	</div>
	<div id="contents">
		<div class="clearfix">

			<h1>Job Applicants for Your Posted Job</h3>
			<div class="frame2">
				<div class="box">
					<img src="images/providerhome2.jpg" alt="Img" height="298" width="924">
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
					cat.id,cat.cat_name,j.id,j.var_name,j.fk_employer_id,j.contact_name,emp.id
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

			
//$row=mysql_fetch_array($ses_sql);

		/*$cvid=$row['cvid'];
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
		$empid=$row['id'];
	*/	
		while($row=mysql_fetch_array($ses_sql))
	{
	//$cvid=$row['cvid'];
	//$contactname=$row['contact_name'];
	//$cvtitle=$row['cv_title'];
	
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
		$empid=$row['id'];
		
	}
		
		

?>
<b>Resume id:</b>&nbsp;<?php $cvid=$_GET['cvid'];
echo "$cvid";?>
		<br>
		<br>
<b>Applicant Name:</b>&nbsp;<?php $cvtitle=$_GET['cv_title']; echo "$cvtitle";?>
			
		<br>	
	
		<br>
<b>Applicant Skills:</b>&nbsp;<?php 	$cvdesc=$_GET['cv_description'];echo "$cvdesc";?>
			
		<br>
		<br>
<b>Applicant Resume Name:</b>&nbsp;<?php $cvname=$_GET['cv_file_name'];echo "$cvname";?>
			
		<br>
		<br>
<b>Work Experience:</b>&nbsp;<?php $cvexp=$_GET['year_experience']; echo "$cvexp";?>
			
		<br>
		<br>
<b>Highest Education:</b>&nbsp;<?php $cvedu=$_GET['highest_education']; echo "$cvedu";?>

		<br>
		<br>
<b>Expected Salary Range (Annually):</b>&nbsp;<?php $cvsalary=$_GET['salary_range']; echo "$cvsalary";?>
			
		<br>
		<br>
<b>Availability For Job:</b>&nbsp;<?php $availability=$_GET['availability']; echo "$availability";?>	
			
		<br>
		<br>
<b>Date Availability to Start the Job:</b>&nbsp;<?php $startdate=$_GET['start_date']; echo "$startdate";?>
		    
		<br>
		<br>
<b>Applied Job Positions:</b>&nbsp;<?php $position=$_GET['positions'];
echo "$position";?>
		    
		<br>
		<br>
<b>Current Job Title:</b>&nbsp;<?php $recentjobtitle=$_GET['recent_job_title']; echo "$recentjobtitle";?>
		    
		<br>
		<br>
<b>Current Employer:</b> &nbsp;<?php $recentemployer=$_GET['recent_employer']; echo "$recentemployer";?>
		    
		<br>
		<br>
<b>Current Designated Work:</b>&nbsp;<?php $recentindwork=$_GET['recent_industry_work']; echo "$recentindwork";?>
		<br>
		<br>
<b>Applied Job Type:</b>&nbsp;<?php $cvjobtype=$_GET['look_job_type']; echo "$cvjobtype";?>
		<br>
		<br>
<b>Applied Job Status:</b>&nbsp;<?php $cvjobstatus=$_GET['look_job_status']; echo "$cvjobstatus";?>
		<br>
		<br>
<b>City/Town: </b>&nbsp;<?php $city=$_GET['city']; echo "$city";?>
		<br>
		<br>
<b>Country:</b>&nbsp;<?php $country=$_GET['country']; echo "$country";?>		 
	<br>
	<br>
<b>State:</b>&nbsp;<?php $state=$_GET['state_province']; echo "$state";?>	        
		<br>
		<br>
<b>Authorized to Work:</b>&nbsp;<?php $auth= $_GET['are_you_auth']; echo "$auth";?>
	
		<br>
		<br>
<b>Willing To Relocate:</b>&nbsp;<?php $relocate= $_GET['willing_to_relocate']; echo "$relocate";?>
		<br>
		<br>
<b>Willing To Travel:</b>&nbsp;<?php $travel=$_GET['willing_to_travel']; echo "$travel";?>
			
		<br>
		<br>
<b>Job Category Selected:</b> &nbsp;<?php $catname=$_GET['cat_name']; echo "$catname";?>
		  
		<br>
		<br>
		
<form action="resumemaisend.php?cv_title=$cvtitle" method="GET">
<input type="submit" name="submit" value="Send Job">
</form>

</p>

<form action="welcomejp.php" method="POST">
		
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