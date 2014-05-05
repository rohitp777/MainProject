<?php
	
	require('connect.php');
	include('lockjp.php');
	//$login_session=$row['id'];
	//session_start();
    // If the values are posted, insert them into the database.
   
 //if($_SERVER["REQUEST_METHOD"] == "POST")
//if(isset ($_POST['fk_employer_id']) && isset($_POST['company_name']))
//if(isset ($_POST['submit']))	
	if(isset ($_POST['job_ref']) && isset($_POST['job_title']))
	{
		//$login_session=$row['id'];
		$login_session=$_POST['fk_employer_id'];
		$ref=$_POST['job_ref'];
		$category=$_POST['var_name'];
		$jobtitle=$_POST['job_title'];
		$jobdescription=$_POST['job_description'];
		$jobposition=$_POST['job_postion'];
		$city=$_POST['city'];
		$state=$_POST['state_province'];
		$country=$_POST['country'];
		$fkeducationid=$_POST['fk_education_id'];
		$fkcareerid=$_POST['fk_career_id'];
		$fkexperienceid=$_POST['fk_experience_id'];
		$salary=$_POST['job_salary'];
		$companyname=$_POST['company_name'];
		$companylogo=$_POST['company_logo'];
		$contactname=$_POST['contact_name'];
		$phnumber=$_POST['contact_telephone'];
		$site=$_POST['site_link'];
		$email=$_POST['poster_email'];
		$applycount=$_POST['apply_count'];
		$startdate=$_POST['job_startdate'];
		$enddate=$_POST['job_enddate'];
		//$statusid=$_POST['fk_job_status_id'];
		//$typeid=$_POST['fk_job_type_id'];
		/*
		$active=$_POST['is_active'];
		$jobstatus=$_POST['job_status'];
		$comments=$_POST['admin_comments'];
		*/
		
		/*
		$auth=$_POST['are_you_auth'];
		$relocate=$_POST['willing_to_relocate'];
		$travel=$_POST['willing_to_travel'];
		$notes=$_POST['additional_notes'];
		//$views=$_POST['no_views'];
		$created=$_POST['created_at'];
		$modified=$_POST['modified_at'];
		*/

        /*
		$sql = "INSERT INTO jobberland_job(fk_employer_id,job_ref,job_title,job_description,job_postion,city,
				state_province,country,fk_education_id,fk_career_id,fk_experience_id,job_salary,company_name,contact_name,
				contact_telephone,site_link,poster_email,apply_count,job_startdate,job_enddate,is_active,job_status,admin_comments)
				VALUES
				('$_POST[fk_employer_id]','$_POST[job_ref]','$_POST[job_title]','$_POST[job_description]','$_POST[job_postion]',
				'$_POST[city]','$_POST[state_province]','$_POST[country]','$_POST[fk_education_id]','$_POST[fk_career_id]','$_POST[fk_experience_id]',
				'$_POST[job_salary]','$_POST[company_name]','$_POST[contact_name]','$_POST[contact_telephone]','$_POST[site_link]','$_POST[poster_email]'
				,'$_POST[apply_count]','$_POST[job_startdate]','$_POST[job_enddate]','$_POST[is_active]','$_POST[job_status]','$_POST[admin_comments]')";
				
			*/
			
			$sql1 = "INSERT INTO jobberland_job(fk_employer_id,job_ref,var_name,job_title,job_description,job_postion,city,
				state_province,country,fk_education_id,fk_career_id,fk_experience_id,job_salary,company_name,company_logo,contact_name,
				contact_telephone,site_link,poster_email,apply_count,job_startdate,job_enddate)
				VALUES
				('$_POST[fk_employer_id]','$_POST[job_ref]','$_POST[var_name]','$_POST[job_title]','$_POST[job_description]','$_POST[job_postion]',
				'$_POST[city]','$_POST[state_province]','$_POST[country]','$_POST[fk_education_id]','$_POST[fk_career_id]','$_POST[fk_experience_id]',
				'$_POST[job_salary]','$_POST[company_name]','$_POST[company_logo]','$_POST[contact_name]','$_POST[contact_telephone]','$_POST[site_link]','$_POST[poster_email]'
				,'$_POST[apply_count]','$_POST[job_startdate]','$_POST[job_enddate]')";
	 
	 if($result1 = mysql_query($sql1))
	 {
	 $jobid=mysql_insert_id();
	 
	// $sql2=mysql_query("select * from jobberland_category where var_name='$category' ");
	 //$row=mysql_fetch_array($sql2);
	 //$id=$row['id'];
	 //$varname=$row['var_name'];
	 
	 $sql3="INSERT INTO jobberland_job2category(category_id,job_id) VALUES ('$_POST[var_name]', '$jobid')";
	 
	// $sql4="INSERT INTO jobberland_job2status(fk_job_id,fk_job_status_id) VALUES ('$jobid', '$_POST[fk_job_status_id]')";
	 
	//$sql5 = "INSERT INTO jobberland_job2type(fk_job_id,fk_job_type_id) VALUES ('$jobid', '$_POST[fk_job_type_id]')";
	 
	 if ($result2 = mysql_query($sql3))
	 {
	 $msg= "Job Posted Successfully Continue to Post more details related to this Job ";
	 }
	 
	  else
	   {
	  die("Error:".mysql_error());
	   }
	 }
	 /*if(mysql_query($sql))
	   {
        echo "Entered Success";
		
       }
	
	   else
	   {
	  die("Error:".mysql_error());
	   }*/
   

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
			<h1>Post Job</h3>
		<form action="jobpost.php" method="POST">
			<div class="frame2">
				<div class="box">
					<img src="images/update1.jpg" alt="Img" height="298" width="924">
				</div>
			</div>
			<p>
			<b>Job Poster Id Number:*</b><input  name="fk_employer_id" type="text" value="<?php echo $login_session=$row['id'];?>" readonly /><br><br>
			
			<b>Reference Name:*</b><input name="job_ref" type="text" value="<?php echo $login_session=$row['contact_name'];?>" /><br><br>
			
			<b>Contact Name:*</b><input type="text" name="contact_name" value="<?php echo $login_session=$row['contact_name']; ?>" required/><br><br>
			
<b>Job Industry Sector:*</b><select name="var_name"> 
<option selected>---Select Job Category---</option>
<option value="1">Accounting and Auditing Services</option> 
<option value="2">Advertising and PR Services </option>  
<option value="3">Aerospace and Defence </option>  
<option value="4">Agriculture/Forestry/Fishing </option>  
<option value="5">Architectural and Design Services</option>
<option value="6">Automotive and Parts Mfg</option>  
<option value="7">Automotive Sales and Repair Services </option>  
<option value="8">Banking and Consumer Lending </option>  
<option value="9">Biotechnology/Pharmaceuticals </option>  
<option value="10"> Broadcasting, Music, and Film</option>  
<option value="11">Business Services - Other </option>  
<option value="12"> Chemicals/Petro-Chemicals</option>  
<option value="13"> Clothing and Textile Manufacturing</option>  
<option value="14"> Computer Hardware</option>  
<option value="15"> Computer Software</option>  
<option value="16">Computer/IT Services </option>  
<option value="17">Construction - Industrial Facilities and Infrastructure </option>  
<option value="18"> Construction - Residential & Commercial/Office</option>  
<option value="19"> Education</option>  
<option value="20"> Electronics, Components, and Semiconductor Mfg</option>  
<option value="21"> Energy and Utilities</option>  
<option value="22">Engineering Services </option>  
<option value="23">Entertainment Venues and Theatres </option>  
<option value="24">Financial Services </option>  
<option value="25">Food and Beverage Production </option>  
<option value="26">Government and Public Sector </option>  
<option value="27">Healthcare Services </option>  
<option value="28"> Hotels and Lodging</option>  		
<option value="29">Insurance  </option>  	
<option value="30">Internet Services </option>  	
</select>
<br>	
		<br>
			<b>Job Title:*</b><br>
			<textarea name="job_title" ROWS="5" COLS="50" /required></textarea>
		<br>
		<br>
		
			<b>Job Description:*</b><br>
			<textarea name="job_description" ROWS="5" COLS="50" required/></textarea>
		<br>
		<br>
		
			<b>Job Position:*</b>
			<input  type="text" name="job_postion" required/>
		<br>
		<br>		
			<b>City:*</b>
			<input type="text" name ="city" value="<?php echo $login_session=$row['city'];?>"  required/>
		<br>
		<br>
		
		<script type="text/javascript" src="countries.js"></script>
		<b>Country:*</b><select onchange="print_state('state_province',this.selectedIndex);" id="country" name ="country"></select>

		<br><br>
		<b>State:*</b><select name ="state_province" id ="state_province"></select>
		<script language="javascript">print_country("country");</script>	
		<br><br>
		
			<b>Educational Qualification Required:*</b>
			<br>
			<input type="radio" name="fk_education_id" value="1" />Some Secondary School Coursework<br>	
			<input type="radio" name="fk_education_id" value="2" />Secondary School or equivalent<br>
			<input type="radio" name="fk_education_id" value="3" />A Level/Higher or Equivalent<br>
			<input type="radio" name="fk_education_id" value="4" />Vocational<br>
			<input type="radio" name="fk_education_id" value="5" />Some College Coursework Completed<br>	
			<input type="radio" name="fk_education_id" value="6" />HND/HNC or equivalent<br>	
			<input type="radio" name="fk_education_id" value="7" />Doctorate<br>	
			<input type="radio" name="fk_education_id" value="8" />Professional<br>	
		<br>
		
			<b>Minimum Qualification:*</b>
			<br>
			<input type="radio" name="fk_career_id" value="1" />None of these<br>	
			<input type="radio" name="fk_career_id" value="2" />Student (Higher education/Graduate)<br>
			<input type="radio" name="fk_career_id" value="3" />Entry Level<br>
			<input type="radio" name="fk_career_id" value="4" />Experienced (Non-Manager)<br>
			<input type="radio" name="fk_career_id" value="5" />Manager (Manager/Supervisor of Staff)<br>	
			<input type="radio" name="fk_career_id" value="6" />Executive (Director, Department Head)<br>	
			<input type="radio" name="fk_career_id" value="7" />Senior Executive (Chairman, MD, CEO)<br>		
		<br>
		
		<b>Experience Required:*</b>
			<br>
			<input type="radio" name="fk_experience_id" value="1" />Less than 1 Year<br>	
			<input type="radio" name="fk_experience_id" value="2" />1+ to 2 Years<br>
			<input type="radio" name="fk_experience_id" value="3" />2+ to 5 Years<br>
			<input type="radio" name="fk_experience_id" value="4" />5+ to 7 Years<br>
			<input type="radio" name="fk_experience_id" value="5" />7+ to 10 Years<br>	
			<input type="radio" name="fk_experience_id" value="6" />10 to 15 Years<br>	
			<input type="radio" name="fk_experience_id" value="7" />More than 15 Years<br>		
		<br>
	
			<b>Salary Range (Annually):*</b>
			<select  name="job_salary">
			<option selected value="">Select Salary</option>
			<option value="30,000-50,000">30,000-50,000</option> 
			<option value="50,000-100,000">50,000-100,000</option> 
			<option value="100,000-Above">100,000-Above</option> 
			</select>
		<br>
		<br>
		
			<b>Company Name:*</b>
			<input name="company_name" type="text" value="<?php echo $login_session=$row['company_name'];?>" required/>
		<br>
		<br>
			<b>Job Reference:*</b>
			<input name="company_logo" type="text" required/>
		<br>
		<br>
		
			<b>Contact Name:*</b>
			<input name="contact_name" type="text" value="<?php echo $login_session=$row['contact_name'];?>" required/>
		<br>
		<br>
		
			<b>Contact Number:*</b>
			<input name="contact_telephone" type="tel" value="<?php echo $login_session=$row['phone_number'];?>" required/>
		<br>	
		<br>
		
			<b>Website Link for Posting for this Job:*</b>
			<input type="url" name ="site_link" value="https://" required/>
		<br>	
		<br>
		
		<b>Company's Email:*</b>
			<input type="email" name ="poster_email" value="<?php echo $login_session=$row['email_address'];?>" required/>
		<br>	
		<br>
		
		
		<b>Total Applicants:</b>
			<input type="number" name ="apply_count" value="0" />
		<br>	
		<br>
		
		<b>Job Start Date:</b>
		    <input type="date" name="job_startdate">
		<br>
		<br>
			<b>Job End Date:</b>
		    <input type="date" name="job_enddate">
		<br><br>


<input type="submit" name="submit" value="Post Job">
</form>

</p>
<p>
		<form action="job2status.php" method="POST">
		
		<input type="submit" name="submit" value="Continue to Post More Detail">
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
