

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
/*			 
$data=array();
			 
while ($row=mysql_fetch_array($ses_sql))
{
$data[] = $row; 
}

*/

//$id=$row['id'];

		/*if(isset($_POST['id']) && isset ($_POST['cv_title'])&& isset ($_POST['cv_description'])&& isset ($_POST['cv_file_name'])&& isset ($_POST['year_experience'])
		&& isset ($_POST['highest_education'])&& isset ($_POST['salary_range'])&& isset ($_POST['availability'])&& isset ($_POST['start_date'])&& isset ($_POST['positions'])
		&& isset ($_POST['recent_job_title'])&& isset ($_POST['recent_employer'])&& isset ($_POST['recent_industry_work'])&& isset ($_POST['look_job_type'])&& isset ($_POST['look_job_status'])
		&& isset ($_POST['city'])&& isset ($_POST['state_province'])&& isset ($_POST['country'])&& isset ($_POST['are_you_auth'])&& isset ($_POST['willing_to_relocate'])
		&& isset ($_POST['willing_to_travel'])&& isset ($_POST['cv_id'])&& isset ($_POST['category_id'])&& isset ($_POST['id'])&& isset ($_POST['cat_name'])
		&& isset ($_POST['id'])&& isset ($_POST['var_name'])&& isset ($_POST['fk_employer_id'])&& isset ($_POST['contact_name'])&& isset ($_POST['id']))
		
		{
		$cvid=$row['id'];
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
		//$cvlookid=$row['cv_id'];
		//$cvlookcatid=$row['category_id'];
		//$catid=$row['id'];
		$catname=$row['cat_name'];
		//$jobid=$row['id'];
		$varname=$row['var_name'];
		//$fkemployerid=$row['fk_employer_id'];
		$contactname=$row['contact_name'];
		//$empid=$row['id'];
		}
		*/
		
		//$empcontactname=$row['contact_name'];
		/*$jobstatusname=$row['status_name'];
		$jobtypeid=$row['id'];
		$jobtypename=$row['type_name'];
		$eduid=$row['id'];
		$eduname=$row['education_name'];
		$carid=$row['id'];
		$carname=$row['career_name'];
		$expid=$row['id'];
		$expname=$row['experience_name'];
		*/
		
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


	/*echo "<table border = 5>";
	echo "<th>" . "ID" . "</th>";
	echo "<th>" . "Title" . "</th>";
	echo "<th>" . "Name" . "</th>";
	*/
	
		while($row=mysql_fetch_array($ses_sql))
	{
		$cvid=$row['cvid'];
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
  
  /*
	echo "<tr>";
	echo "<td>" . $row['cvid'] . "</td>" ;
	echo "<td>" . $row['cv_title'] . "</td>" ;
	echo "<td>" . $row['contact_name'] . "</td>" ;
	*/
	
	/*$cvid=$row['cvid'];
	$contactname=$row['contact_name'];
	$cvtitle=$row['cv_title'];
	*/
	//echo "$cvid"."<br>";	
	echo "<a href='http://localhost/MainProject/run/viewresume.php?cvid=$cvid&positions=$position&cv_title=$cvtitle&cv_description=$cvdesc&cv_file_name=$cvname&
		year_experience=$cvexp&highest_education=$cvedu&salary_range=$cvsalary&availability=$availability&start_date=$startdate&
		recent_job_title=$recentjobtitle&recent_employer=$recentemployer&recent_industry_work=$recentindwork&
		look_job_type=$cvjobtype&look_job_status=$cvjobstatus&city=$city&state_province=$state&country=$country&
		are_you_auth=$auth&willing_to_relocate=$relocate&willing_to_travel=$travel&cv_id=$cvlookid&category_id=$cvlookcatid&
		id=$catid&cat_name=$catname&id=$jobid&var_name=$varname&fk_employer_id=$fkemployerid&contact_name=$contactname&id=$empid'>"."$cvid".":"."&nbsp;"."$cvtitle"."<br>"."</a>";
	echo "$cvname"."<br>";
	echo "$cvdesc"."<br>";
	echo "$cvedu"."<br>";
	echo "$cvexp"."<br>";
	echo "$startdate"."<br>";
	echo "$position"."<br>";
	echo "$cvjobtype"."<br>";
	echo "$cvjobstatus"."<br>";
	echo "$catname"."<br>";
	echo "<a href='http://localhost/MainProject/run/viewresume.php?cvid=$cvid&positions=$position&cv_title=$cvtitle&cv_description=$cvdesc&cv_file_name=$cvname&
		year_experience=$cvexp&highest_education=$cvedu&salary_range=$cvsalary&availability=$availability&start_date=$startdate&
		recent_job_title=$recentjobtitle&recent_employer=$recentemployer&recent_industry_work=$recentindwork&
		look_job_type=$cvjobtype&look_job_status=$cvjobstatus&city=$city&state_province=$state&country=$country&
		are_you_auth=$auth&willing_to_relocate=$relocate&willing_to_travel=$travel&cv_id=$cvlookid&category_id=$cvlookcatid&
		id=$catid&cat_name=$catname&id=$jobid&var_name=$varname&fk_employer_id=$fkemployerid&contact_name=$contactname&id=$empid'>"."<input type='submit' name='submit' value='view'></a>"."<br>"."<br>";
	
	
	//echo "</tr>";
	}
	
	//echo "</table>";
	

?>



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