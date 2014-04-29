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
	 echo "Entered Success";
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


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>My Job Posts</title>
<!--link rel="stylesheet" href="css/screen.css" /-->
<link rel="stylesheet" type="text/css" href="style.css" />


	<div id="content">
	<div class="register-form">
	<h3><span class="red">*</span>For Posting New Job by this Profile Log In again</h3>

	<form action="jobpost.php" method="POST">
		
			<label for="fk_employer_id">Job Poster Id Number: </label>
			<input  name="fk_employer_id" type="text" value="<?php echo $login_session=$row['id'];?>" readonly />
		<br>
		<br>
			<label for="job_ref">Reference Name:</label>
			<input name="job_ref" type="text" value="<?php echo $login_session=$row['contact_name'];?>" />
		<br><br>

Job Industry Sector:<select name="var_name"> 
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
			<label for="job_title">Job Title: </label><br>
			<textarea name="job_title" ROWS="5" COLS="50"></textarea>
		<br>
		<br>
		
			<label for="job_description">Job Description: </label><br>
			<textarea name="job_description" ROWS="5" COLS="50" /></textarea>
		<br>
		<br>
		
			<label for="job_postion">Job Position:</label>
			<input  type="text" name="job_postion"/>
		<br>
		<br>		
			<label for="city">City:</label>
			<input type="text" name ="city" value="<?php echo $login_session=$row['city'];?>"  />
		<br>
		<br>
		
		<script type="text/javascript" src="countries.js"></script>
		Country:<select onchange="print_state('state_province',this.selectedIndex);" id="country" name ="country"></select>

		<br><br>
		State:<select name ="state_province" id ="state_province"></select>
		<script language="javascript">print_country("country");</script>	
		<br><br>
		
			<label for="fk_education_id">Educational Qualification Required</label>
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
		
			<label for="fk_career_id">Minimum Qualification:</label>
			<br>
			<input type="radio" name="fk_career_id" value="1" />None of these<br>	
			<input type="radio" name="fk_career_id" value="2" />Student (Higher education/Graduate)<br>
			<input type="radio" name="fk_career_id" value="3" />Entry Level<br>
			<input type="radio" name="fk_career_id" value="4" />Experienced (Non-Manager)<br>
			<input type="radio" name="fk_career_id" value="5" />Manager (Manager/Supervisor of Staff)<br>	
			<input type="radio" name="fk_career_id" value="6" />Executive (Director, Department Head)<br>	
			<input type="radio" name="fk_career_id" value="7" />Senior Executive (Chairman, MD, CEO)<br>		
		<br>
		
		<label for="fk_experience_id">Experience Required:</label>
			<br>
			<input type="radio" name="fk_experience_id" value="1" />Less than 1 Year<br>	
			<input type="radio" name="fk_experience_id" value="2" />1+ to 2 Years<br>
			<input type="radio" name="fk_experience_id" value="3" />2+ to 5 Years<br>
			<input type="radio" name="fk_experience_id" value="4" />5+ to 7 Years<br>
			<input type="radio" name="fk_experience_id" value="5" />7+ to 10 Years<br>	
			<input type="radio" name="fk_experience_id" value="6" />10 to 15 Years<br>	
			<input type="radio" name="fk_experience_id" value="7" />More than 15 Years<br>		
		<br>
	
			<label for="job_salary">Salary Range (Annually):</label>
			<select  name="job_salary">
			<option selected value="">Select Salary</option>
			<option value="30,000-50,000">30,000-50,000</option> 
			<option value="50,000-100,000">50,000-100,000</option> 
			<option value="100,000-Above">100,000-Above</option> 
			</select>
		<br>
		<br>
		
			<label for="company_name">Company Name:</label>
			<input name="company_name" type="text" value="<?php echo $login_session=$row['company_name'];?>" />
		<br>
		<br>
			<label for="company_logo">Job Reference:</label>
			<input name="company_logo" type="text" />
		<br>
		<br>
		
			<label for="contact_name">Contact Name:</label>
			<input name="contact_name" type="text" value="<?php echo $login_session=$row['contact_name'];?>" />
		<br>
		<br>
		
			<label for="contact_telephone">Contact Number:</label>
			<input name="contact_telephone" type="tel" value="<?php echo $login_session=$row['phone_number'];?>" />
		<br>	
		<br>
		
			<label for="site_link">Website Link for Posting for this Job:</label>
			<input type="url" name ="site_link" value="https://">
		<br>	
		<br>
		
		<label for="poster_email">Company's Email:</label>
			<input type="email" name ="poster_email" value="<?php echo $login_session=$row['email_address'];?>" />
		<br>	
		<br>
		
		
		<label for="apply_count">Total Applicants:</label>
			<input type="number" name ="apply_count" value="0" />
		<br>	
		<br>
		
		<label for="job_startdate">Job Start Date:</label>
		    <input type="date" name="job_startdate">
		<br>
		<br>
			<label for="job_enddate">Job End Date:</label>
		    <input type="date" name="job_enddate">
		<br>
		<!--br>
			Job Status:<br>
			<input type="radio" name="fk_job_status_id" value="1" />Permanent<br>	
			<input type="radio" name="fk_job_status_id" value="2" />Part-Time<br>
			<input type="radio" name="fk_job_status_id" value="3" />Contract<br>
			<input type="radio" name="fk_job_status_id" value="4" />Temporary/Contract/Project<br>
			<input type="radio" name="fk_job_status_id" value="5" />Placement Student<br>	
			<input type="radio" name="fk_job_status_id" value="6" />Seasonal<br>	
		<br>
			Job Type:<br>
			<input type="radio" name="fk_job_type_id" value="1" />Full-time<br>	
			<input type="radio" name="fk_job_type_id" value="2" />Part-Time<br>
			<input type="radio" name="fk_job_type_id" value="3" />Per Day<br-->
				
		<br>
		
	
		<input type="submit" name="submit" value="Post Job" >
		</form>
		<br>
		
		<form action="welcomejp.php" method="POST">
		
		<input type="submit" name="submit" value="Home Page">
		</form>
		
		<form action="job2status.php" method="POST">
		
		<input type="submit" name="submit" value="Continue for Posting More Related to Above Posted Job">
		</form>
			
	
			<br>
		   
		
		
			<!--input type="submit" value="Submit"-->
	
<b><p align="right"><a href="logoutjs.php">Sign Out</a></p></b>
<!--/fieldset-->
</div>
</div>
</body>
</html>
