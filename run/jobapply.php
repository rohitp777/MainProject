
<?php
	
	require('connect.php');
	include('lockjs.php');
	//$login_session=$row['id'];
	//session_start();
    // If the values are posted, insert them into the database.
   
 //if($_SERVER["REQUEST_METHOD"] == "POST")
//if(isset ($_POST['fk_employer_id']) && isset($_POST['company_name']))
//if(isset ($_POST['submit']))	
	if(isset ($_GET['fk_employee_id']) && isset ($_GET['fk_job_id']))
	{
			
		$fkemployeeid=$_GET['fk_employee_id'];
		$jobid=$_GET['fk_job_id'];
		$date=$_GET['date_saved'];	
		$delete=$_GET['is_deleted'];
		
			
			$sql = "INSERT INTO jobberland_save_job(fk_employee_id,fk_job_id,date_saved,is_deleted) 
			VALUES ('$_GET[fk_employee_id]', '$_GET[fk_job_id]', '$_GET[date_saved]', '$_GET[is_deleted]')";
		
				
	 if(mysql_query($sql))
	   {
	   header("Location: resultsearch.php");
        echo "Entered Success";
       }
	
	   else
	   {
	  die("Error:".mysql_error());
	   }
    }

	    mysql_close($connection); 
		
      
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
	<div id="contents">
		<div class="clearfix">
			<h1>Job Applying Details </h1>
			<form action="jobapply.php" method="GET" name="submit">
			<div class="frame2">
				<div class="box">
					<img src="images/reg.jpg" alt="Img" height="298" width="924">
				</div>
			</div>
			<?php
require('connect.php');

//include('search.php');

$id=$_GET['jobid'];
//echo "$id";
		 
$ses_sql=mysql_query("SELECT j.id,j.job_ref,j.var_name,job_title,job_description,job_postion,j.city,
j.state_province,j.country,fk_education_id,fk_career_id,fk_experience_id,
job_salary,j.company_name,j.company_logo,j.contact_name,contact_telephone,j.site_link,poster_email,apply_count,
job_startdate,job_enddate,cat.id,cat.cat_name,stat.fk_job_id,stat.fk_job_status_id,
type.fk_job_id,type.fk_job_type_id,jobstat.id,jobstat.status_name,jobtype.id,jobtype.type_name,
edu.id,edu.education_name,car.id,car.career_name,exp.id,exp.experience_name,
s.id,s.results,s.created_on
FROM jobberland_job as j
inner join jobberland_search as s
on j.id=$id
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
		

?><p>
<b>Employer Name:</b>&nbsp;<?php echo $jobref=$row['job_ref'];?><br><br>

<b>Job Category:</b>&nbsp;<?php echo $catname=$row['cat_name'];?><br><br>

<b>Job Title:</b>&nbsp;<?php echo $jobtitle=$row['job_title'];?><br><br>

<b>Job Description:</b>&nbsp;<?php echo $jobdescription=$row['job_description'];?><br><br>

<b>Job Position:</b>&nbsp;<?php echo $jobpostion=$row['job_postion'];?><br><br>

<b>Job Status:</b>&nbsp;<?php echo$jobstatusname=$row['status_name'];?><br><br>

<b>Job Work Type:</b>&nbsp;<?php echo $jobtypename=$row['type_name'];?><br><br>

<b>Job City:</b>&nbsp;<?php echo 	$city=$row['city']; ?><br><br>

<b>Job State:</b>&nbsp;<?php echo$state=$row['state_province'];?><br><br>

<b>Job Country:</b>&nbsp;<?php echo $country = $row['country'];?><br><br>
 
<b>Education Qualification:</b>&nbsp;<?php echo $eduname=$row['education_name'];?><br><br>
 
<b>Career Degree Acquired:</b>&nbsp;<?php echo $carname=$row['career_name'];?><br><br>
 
<b>Work Experience:</b>&nbsp;<?php echo $expname=$row['experience_name'];?><br><br>

<b>Annual Job Salary for this Job:</b>&nbsp;<?php echo $salary=$row['job_salary']; ?><br><br>

<b>Company Name:</b>&nbsp;<?php echo $companyname=$row['company_name']; ?><br><br>

<b>Company Trademark:</b>&nbsp;<?php echo $companylogo=$row['company_logo']; ?><br><br>

<b>Reference Name:</b>&nbsp;<?php echo $contactname=$row['contact_name']; ?><br><br>

<b>Contact Number:</b>&nbsp;<?php echo $phnumber=$row['contact_telephone'];?><br><br>

<b>Email Address:</b>&nbsp;<?php echo	$email = $row['poster_email'];?><br><br>

<b>Company's Website:</b>&nbsp;<?php echo $site=$row['site_link'];?><br><br>
  
<b>Job Start Date:</b>&nbsp;<?php echo $startdate=$row['job_startdate'];?><br><br>

<b>Job End Date:</b>&nbsp;<?php echo $enddate=$row['job_enddate'];?><br><br>

Application ID:<input  name="fk_employee_id" type="text" value="<?php 
require('connect.php');
//include('lockjs.php'); 
echo $login_session=$row['id'];?>" readonly /><br><br>

Job Posting ID: <input type="text" name="fk_job_id" value="<?php //echo $login_session=$row['id'];

/*require('connect.php');

//include('search.php');

$result = $runrows ['results'];

$ses_sql=mysql_query("select * from jobberland_job where id='$result' ");

$row=mysql_fetch_array($ses_sql);

$id=$row['id'];

echo "$id";
*/
$id=$_GET['jobid'];
echo "$id";
?>"  readonly /> 
<br><br>
 
Date Applied for Job: <input type="date" name="date_saved"><br><br>

Cancel Job Application:<select name="is_deleted">
<option value="Y"> Yes </option> 
<option selected value="N"> No </option>
</select>
<br><br></p>
			
<input type="submit" name="submit" value="submit">
</form>

<br>

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