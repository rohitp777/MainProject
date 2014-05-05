<?php
	
	require('connect.php');
	include('lockjp.php');
	//$login_session=$row['id'];
	//session_start();
    // If the values are posted, insert them into the database.
   
 //if($_SERVER["REQUEST_METHOD"] == "POST")
//if(isset ($_POST['fk_employer_id']) && isset($_POST['company_name']))
//if(isset ($_POST['submit']))	
	if(isset ($_POST['fk_job_id']) && isset ($_POST['fk_job_type_id']))
	{
			
		$categoryid=$_POST['fk_job_id'];
		$id=$_POST['fk_job_type_id'];
	
		
			
			$sql = "INSERT INTO jobberland_job2type(fk_job_id,fk_job_type_id) VALUES ('$_POST[fk_job_id]', '$_POST[fk_job_type_id]')";
		
				
	 if(mysql_query($sql))
	   {
      $msg= "Job Type Posted Successfully Continue to Post Details for Searching this Job for Job Seekers!!!";
		
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
		<div class="clearfix">
<p>		
<b>
<?php
if(isset($msg) & !empty($msg)){
		echo $msg;
	}
 ?> 
 </b>
 </p>
			<h1>Post Job Type about above Posted Job</h3>
		<form action="job2type.php" method="POST">
			<div class="frame2">
				<div class="box">
					<img src="images/update1.jpg" alt="Img" height="298" width="924">
				</div>
			</div>
			<p>
			<b>Job Posting ID:*</b><input type="text" name="fk_job_id" value="<?php //echo $login_session=$row['id'];

require('connect.php');

//include('lockjp.php');

$login_session=$row['email_address'];

$ses_sql=mysql_query("select * from jobberland_job where poster_email='$login_session' ");

$row=mysql_fetch_array($ses_sql);

$id=$row['id'];

echo $id=$row['id'];

?>"  readonly /> <br><br>
		
			<b>Job Type:*</b>
			<br>
			<input type="radio" name="fk_job_type_id" value="1" />Full-time<br>	
			<input type="radio" name="fk_job_type_id" value="2" />Part-Time<br>
			<input type="radio" name="fk_job_type_id" value="3" />Per Day<br>	
		<br>

<input type="submit" name="submit" value="Post Job Type">
</form>

</p>
	<p>
		<form action="searchjob.php" method="POST">
		
		<input type="submit" name="submit" value="Continue Job Search Details">
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