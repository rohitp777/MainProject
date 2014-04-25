<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Profiles for Job Providers</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<div id="content">
	<div class="register-form">
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
<label for="cvid"><b>Resume id:</b></label><?php $cvid=$_GET['cvid'];
echo "$cvid";?>
		<br>
		<br>
<label for="cv_title"><b>Applicant Name:</b></label><?php $cvtitle=$_GET['cv_title']; echo "$cvtitle";?>
			
		<br>	
	
		<br>
<label for="cv_description"><b>Applicant Skills:</b></label><?php 	$cvdesc=$_GET['cv_description'];echo "$cvdesc";?>
			
		<br>
		<br>
<label for="cv_file_name"><b>Applicant Resume Name:</b></label><?php $cvname=$_GET['cv_file_name'];echo "$cvname";?>
			
		<br>
		<br>
<label for="year_experience"><b>Work Experience:</b></label><?php $cvexp=$_GET['year_experience']; echo "$cvexp";?>
			
		<br>
		<br>
<label for="highest_education"><b>Highest Education:</b></label><?php $cvedu=$_GET['highest_education']; echo "$cvedu";?>

		<br>
		<br>
<label for="salary_range"><b>Expected Salary Range (Annually):</b></label><?php $cvsalary=$_GET['salary_range']; echo "$cvsalary";?>
			
		<br>
		<br>
<label for="availability"><b>Availability For Job:</b></label><?php $availability=$_GET['availability']; echo "$availability";?>	
			
		<br>
		<br>
<label for="start_date"><b>Date Availability to Start the Job:</label></b><?php $startdate=$_GET['start_date']; echo "$startdate";?>
		    
		<br>
		<br>
<label for="positions"><b>Applied Job Positions:</b></label><?php $position=$_GET['positions'];
echo "$position";?>
		    
		<br>
		<br>
<label for="recent_job_title"><b>Current Job Title:</b> </label><?php $recentjobtitle=$_GET['recent_job_title']; echo "$recentjobtitle";?>
		    
		<br>
		<br>
<label for="recent_employer"><b>Current Employer:</b> </label><?php $recentemployer=$_GET['recent_employer']; echo "$recentemployer";?>
		    
		<br>
		<br>
<label for="recent_industry_work"><b>Current Designated Work:</b></label><?php $recentindwork=$_GET['recent_industry_work']; echo "$recentindwork";?>
		<br>
		<br>
<label for="look_job_type"><b>Applied Job Type:</b> </label><?php $cvjobtype=$_GET['look_job_type']; echo "$cvjobtype";?>
		<br>
		<br>
<label for="look_job_status"><b>Applied Job Status:</b> </label><?php $cvjobstatus=$_GET['look_job_status']; echo "$cvjobstatus";?>
		<br>
		<br>
<label for="city"><b>City/Town: </b></label><?php $city=$_GET['city']; echo "$city";?>
		<br>
		<br>
<label for="country"><b>Country:</b></label><?php $country=$_GET['country']; echo "$country";?>		 
	<br>
	<br>
<label for="state_province"><b>State:</b></label><?php $state=$_GET['state_province']; echo "$state";?>	        
		<br>
		<br>
<label for="are_you_auth"><b>Authorized to Work</b> </label><?php $auth= $_GET['are_you_auth']; echo "$auth";?>
	
		<br>
		<br>
<label for="willing_to_relocate"><b>Willing To Relocate:</b> </label><?php $relocate= $_GET['willing_to_relocate']; echo "$relocate";?>
		<br>
		<br>
<label for="willing_to_travel"><b>Willing To Travel:</b></label><?php $travel=$_GET['willing_to_travel']; echo "$travel";?>
			
		<br>
		<br>
<label for="cat_name"><b>Job Category Selected:</b></label><?php $catname=$_GET['cat_name']; echo "$catname";?>
		  
		<br>
		<br>
<form action="resumemaisend.php" method="GET">
<input type="submit" name="submit" value="Send Job">
</form>

		
</div>
</div>
</body>
</html>