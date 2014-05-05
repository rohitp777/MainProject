

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
					<a href="http://localhost/MainProject/run/recruiter.php">Recruiter Resources</a>
				</li>
				<li>
					<a href="logoutjp.php">Log Out</a>
				</li>
			</ul>
		</div>
	</div>
	<div id="contents">
		<div class="clearfix">

			<h1>View Job Applications</h3>
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

$ses_sql=mysql_query("select s.id as sid,s.fk_employee_id,s.fk_job_id,s.date_saved,emp.id,emp.fname,emp.sname,emp.email_address,emp.phone_number,j.id,j.fk_employer_id,e.id
					from jobberland_save_job as s
					inner join jobberland_employee as emp
					on s.fk_employee_id=emp.id
                                        inner join jobberland_job as j
                                        on s.fk_job_id=j.id
                                        inner join jobberland_employer as e
                                        on j.fk_employer_id=$login_session
										where e.id=$login_session		" );

			
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
	
	$sid=$row['sid'];
		//$fkemployerid=$row['fk_employer_id'];
		$sfkemployeeid=$row['fk_employee_id'];
		$sjobid=$row['fk_job_id'];
		$datesaved=$row['date_saved'];
		$empid=$row['id'];
		$empfname=$row['fname'];
		$empsname=$row['sname'];
		$empemail=$row['email_address'];
		$empphone=$row['phone_number'];
		$jobid=$row['id'];
		$jobfkemployerid=$row['fk_employer_id'];
		$eid=$row['id'];
		
	}
		
		
	
?>
<b>Application id:</b><?php echo "$sid";?>
		<br>
		<br>
<b>Applicant Name:</b><?php echo "$empfname"; echo "$empsname";?>
		<br>
		<br>
<b>Email Address:</b><?php echo "$empemail";?>
		<br>
		<br>		
<b> Contact Number:</b><?php echo "$empphone";?>
		<br>
		<br>

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