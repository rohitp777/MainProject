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

$ses_sql=mysql_query("SELECT j.id,j.job_ref,j.var_name,job_title,job_description,job_postion,j.city,
						j.state_province,j.country,fk_education_id,fk_career_id,fk_experience_id,
						job_salary,j.company_name,j.company_logo,j.contact_name,contact_telephone,j.site_link,poster_email,apply_count,
						job_startdate,job_enddate,cat.id,cat.cat_name,stat.fk_job_id,stat.fk_job_status_id,
						type.fk_job_id,type.fk_job_type_id,jobstat.id,jobstat.status_name,jobtype.id,jobtype.type_name,
						edu.id,edu.education_name,car.id,car.career_name,exp.id,exp.experience_name
						FROM jobberland_job AS j
						INNER JOIN jobberland_employer AS emp 
						ON j.fk_employer_id = $login_session
						inner join jobberland_category as cat
						on j.var_name=cat.id
						inner join jobberland_job2status as stat
						on j.id=stat.fk_job_id
						inner join jobberland_job2type as type
						on j.id=type.fk_job_id
						inner join jobberland_job_status as jobstat
						on stat.fk_job_status_id=jobstat.id
						inner join jobberland_job_type as jobtype
						on type.fk_job_type_id=jobtype.id
						inner join jobberland_education as edu
						on fk_education_id=edu.id
						inner join jobberland_career_degree as car
						on fk_career_id=car.id
						inner join jobberland_experience as exp
						on fk_experience_id=exp.id" );


$row=mysql_fetch_array($ses_sql);

//$id=$row['id'];

		$jobid=$row['id'];
		//$fkemployerid=$row['fk_employer_id'];
		$jobref=$row['job_ref'];
		$varname=$row['var_name'];
		$jobtitle=$row['job_title'];
		$jobdescription=$row['job_description'];
		$jobpostion=$row['job_postion'];
		$city=$row['city'];
		$state=$row['state_province'];
		$country=$row['country'];
		$fkeducationid=$row['fk_education_id'];
		$fkcareerid=$row['fk_career_id'];
		$fkexperienceid=$row['fk_experience_id'];
		$salary=$row['job_salary'];
		$companyname=$row['company_name'];
		$companylogo=$row['company_logo'];
		$contactname=$row['contact_name'];
		$phnumber=$row['contact_telephone'];
		$site=$row['site_link'];
		$email = $row['poster_email'];
		$applycount= $row['apply_count'];
		$startdate=$row['job_startdate'];
		$enddate=$row['job_enddate'];
		$catid=$row['id'];
		$catname=$row['cat_name'];
		$statjobid=$row['fk_job_id'];
		$statusid=$row['fk_job_status_id'];
		$typejobid=$row['fk_job_id'];
		$typeid=$row['fk_job_type_id'];
		$jobstatusid=$row['id'];
		$jobstatusname=$row['status_name'];
		$jobtypeid=$row['id'];
		$jobtypename=$row['type_name'];
		$eduid=$row['id'];
		$eduname=$row['education_name'];
		$carid=$row['id'];
		$carname=$row['career_name'];
		$expid=$row['id'];
		$expname=$row['experience_name'];
		
		/*$educationname=$row['education_name'];
		$careerid=$row['id'];
		$careername=$row['career_name'];
		$experienceid=$row['id'];
		$experiencename=$row['experience_name'];
		$job2catid=$row['job_id'];
		$job2categoryid=$row['category_id'];
		$categoryid=$row['id'];
		$categoryname=$row['cat_name'];
		$statusid=$row['id'];
		$statusname=$row['status_name'];
		$typeid=$row['id'];
		$typename=$row['type_name'];
		*/
	
//echo $jobid=$row['id'];

//echo $typename=$row['type_name'];

?>

		<DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Rohit Patil Job Site</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<h3><strong> Your Account Details</strong></h3>
</head>
<body>
<div id="content">
<div class="register-form">

<b>Employer Name:</b><?php echo $jobref=$row['job_ref'];?><br><br>

<b>Job Category:</b><?php echo $catname;?><br><br>

<b>Job Title:</b><?php echo $jobtitle=$row['job_title'];?><br><br>

<b>Job Description:</b><?php echo $jobdescription=$row['job_description'];?><br><br>

<b>Job Position:</b><?php echo $jobpostion=$row['job_postion'];?><br><br>

<b>Job Status:</b><?php echo$jobstatusname=$row['status_name'];?><br><br>

<b>Job Work Type:</b><?php echo $jobtypename=$row['type_name'];?><br><br>

<b>Job City:</b><?php echo 	$city=$row['city']; ?><br><br>

<b>Job State:</b><?php echo$state=$row['state_province'];?><br><br>

<b>Job Country:</b><?php echo $country = $row['country'];?><br><br>
 
<b>Education Qualification:</b><?php echo $eduname=$row['education_name'];?><br><br>
 
<b>Career Degree Acquired:</b><?php echo $carname=$row['career_name'];?><br><br>
 
<b>Work Experience:</b><?php echo $expname=$row['experience_name'];?><br><br>

<b>Annual Job Salary for this Job:</b><?php echo $salary=$row['job_salary']; ?><br><br>

<b>Company Name:</b><?php echo $companyname=$row['company_name']; ?><br><br>

<b>Company Trademark:</b><?php echo $companylogo=$row['company_logo']; ?><br><br>

<b>Reference Name:</b><?php echo $contactname=$row['contact_name']; ?><br><br>

<b>Contact Number:</b><?php echo $phnumber=$row['contact_telephone'];?><br><br>

<b>Email Address:</b><?php echo	$email = $row['poster_email'];?><br><br>

<b>Company's Website:</b><?php echo $site=$row['site_link'];?><br><br>
 
<b>Number of Applications:</b><?php echo $applycount= $row['apply_count'];?><br><br>
 
<b>Job Start Date:</b><?php echo $startdate=$row['job_startdate'];?><br><br>

<b>Job End Date:</b><?php echo $enddate=$row['job_enddate'];?><br><br>

<b><span class="red">*</span>Use (Ctrl+P) Command on your keyboard to Save as .pdf or to Print this Page for You Information</b>

<form action="welcomejp.php" method="POST">
<input type="submit" name="submit" value="Home Page">
</form>

<b><p align="right"><a href="logoutjp.php">Sign Out</a></p></b>

</div>
</div>
</body>
</html>



