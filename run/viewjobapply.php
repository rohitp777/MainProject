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
<label for="sid"><b>Application id:</b></label><?php echo "$sid";?>
		<br>
		<br>
<label for="fname"><b>Applicant Name:</b></label><?php echo "$empfname"; echo "$empsname";?>
		<br>
		<br>
<label for="email_address"><b>Email Address:</b></label><?php echo "$empemail";?>
		<br>
		<br>		
<label for="phone_number"><b> Contact Number:</b></label><?php echo "$empphone";?>
		<br>
		<br>
<!--form action="resumemaisend.php" method="GET">
<input type="submit" name="submit" value="Send Job">
</form-->

		
</div>
</div>
</body>
</html>