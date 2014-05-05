
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>My Resume</title>

<!--link rel="stylesheet" href="css/screen.css" /-->
<link rel="stylesheet" type="text/css" href="css/styleregform.css" />

<script src="../lib/jquery.js"></script>
<script src="../jquery.validate.js"></script>
<?php
	
	require('connect.php');
	include('lockjs.php');
	//$login_session=$row['id'];
	//session_start();
    // If the values are posted, insert them into the database.
   
 //if($_SERVER["REQUEST_METHOD"] == "POST")
if(isset ($_POST['fk_employee_id']) && isset($_POST['cv_title']))
		{
		//$login_session=$row['id'];
		$login_session=$_POST['fk_employee_id'];
		//$row['id'] = $_POST['fk_employee_id'];
	    //$row['id']=$fkemployeeid;
		//$login_session=$fkemployeeid;
		$cvtitle=$_POST['cv_title'];
		$cvdesc=$_POST['cv_description'];
		$cvfilename=$_POST['cv_file_name'];
		$cvfiletype=$_POST['cv_file_type'];
		$cvfileexe=$_POST['cv_file_exe'];
		$cvfilesize=$_POST['cv_file_size'];
		$cvstatus=$_POST['cv_status'];
		$experience=$_POST['year_experience'];
		$education=$_POST['highest_education'];
		$salary=$_POST['salary_range'];
		$availability=$_POST['availability'];
		$startdate=$_POST['start_date'];
		$position=$_POST['positions'];
		$recentjobtitle=$_POST['recent_job_title'];
		$recentemployer=$_POST['recent_employer'];
		$recentwork=$_POST['recent_industry_work'];
		$lookjobtype=$_POST['look_job_type'];
		$lookjobstatus=$_POST['look_job_status'];
		$city=$_POST['city'];
		$state=$_POST['state_province'];
		$country=$_POST['country'];
		$auth=$_POST['are_you_auth'];
		$relocate=$_POST['willing_to_relocate'];
		$travel=$_POST['willing_to_travel'];
		$notes=$_POST['additional_notes'];
		//$views=$_POST['no_views'];
		$created=$_POST['created_at'];
		$modified=$_POST['modified_at'];
			$category=$_POST['var_name'];
		

        $sql1 = "INSERT INTO jobberland_cv_detail(fk_employee_id,cv_title,cv_description,cv_file_name,cv_file_type,
				cv_file_exe,cv_file_size,cv_status,year_experience,highest_education,salary_range,availability,
				start_date,positions,recent_job_title,recent_employer,recent_industry_work,look_job_type,look_job_status,
				city,state_province,country,are_you_auth,willing_to_relocate,willing_to_travel,additional_notes,created_at,modified_at)
				VALUES
				('$_POST[fk_employee_id]','$_POST[cv_title]','$_POST[cv_description]','$_POST[cv_file_name]','$_POST[cv_file_type]','$_POST[cv_file_exe]',
				'$_POST[cv_file_size]','$_POST[cv_status]','$_POST[year_experience]','$_POST[highest_education]','$_POST[salary_range]','$_POST[availability]',
				'$_POST[start_date]','$_POST[positions]','$_POST[recent_job_title]','$_POST[recent_employer]','$_POST[recent_industry_work]','$_POST[look_job_type]','$_POST[look_job_status]',
				'$_POST[city]','$_POST[state_province]','$_POST[country]','$_POST[are_you_auth]','$_POST[willing_to_relocate]','$_POST[willing_to_travel]','$_POST[additional_notes]','$_POST[created_at]','$_POST[modified_at]')";
			
	 /*if(mysql_query($sql))
	   {
        echo "Entered Success";
       }
	
	   else
	   {
	  die("Error:".mysql_error());
	   }
    }

	    mysql_close($connection); 
		*/
		
			 if($result1 = mysql_query($sql1))
	 {
	 $cvid=mysql_insert_id();
	 
	// $sql2=mysql_query("select * from jobberland_category where var_name='$category' ");
	 //$row=mysql_fetch_array($sql2);
	 //$id=$row['id'];
	 //$varname=$row['var_name'];
	 
	 $sql3="INSERT INTO jobberland_cv_look_occupation(cv_id,category_id) VALUES ('$cvid', '$_POST[var_name]')";
	 
	// $sql4="INSERT INTO jobberland_job2status(fk_job_id,fk_job_status_id) VALUES ('$jobid', '$_POST[fk_job_status_id]')";
	 
	//$sql5 = "INSERT INTO jobberland_job2type(fk_job_id,fk_job_type_id) VALUES ('$jobid', '$_POST[fk_job_type_id]')";
	 
	 if ($result2 = mysql_query($sql3))
	 {
	// header("location: resumejs.php");
	 echo "<b>"."Resume Details Submitted Successfully Continue to Upload Resume"."</b>";
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



<script>
$.validator.setDefaults({
	submitHandler: function() { alert("submitted!"); }
});

$().ready(function() {
	// validate the comment form when it is submitted
	$("#commentForm").validate();

	// validate signup form on keyup and submit
	$("#signupForm").validate({
		rules: {
			firstname: "required",
			lastname: "required",
			username: {
				required: true,
				minlength: 2
			},
			password: {
				required: true,
				minlength: 5
			},
			confirm_password: {
				required: true,
				minlength: 5,
				equalTo: "#password"
			},
			email: {
				required: true,
				email: true
			},
			topic: {
				required: "#newsletter:checked",
				minlength: 2
			},
			agree: "required"
		},
		messages: {
			firstname: "Please enter your firstname",
			lastname: "Please enter your lastname",
			username: {
				required: "Please enter a username",
				minlength: "Your username must consist of at least 2 characters"
			},
			password: {
				required: "Please provide a password",
				minlength: "Your password must be at least 5 characters long"
			},
			confirm_password: {
				required: "Please provide a password",
				minlength: "Your password must be at least 5 characters long",
				equalTo: "Please enter the same password as above"
			},
			email: "Please enter a valid email address",
			agree: "Please accept our policy"
		}
	});

	// propose username by combining first- and lastname
	$("#username").focus(function() {
		var firstname = $("#firstname").val();
		var lastname = $("#lastname").val();
		if(firstname && lastname && !this.value) {
			this.value = firstname + "." + lastname;
		}
	});

	//code to hide topic selection, disable for demo
	var newsletter = $("#newsletter");
	// newsletter topics are optional, hide at first
	var inital = newsletter.is(":checked");
	var topics = $("#newsletter_topics")[inital ? "removeClass" : "addClass"]("gray");
	var topicInputs = topics.find("input").attr("disabled", !inital);
	// show when newsletter is checked
	newsletter.click(function() {
		topics[this.checked ? "removeClass" : "addClass"]("gray");
		topicInputs.attr("disabled", !this.checked);
	});
});
</script>
<style type="text/css">
body {
	font-family:Arial, Helvetica, sans-serif
}
#availability_status {
	font-size:11px;
	margin-left:10px;
}
#email_status {
	font-size:11px;
	margin-left:10px;
}
input.form_element {
	width: 221px;
	background: transparent url('bg.jpg') no-repeat;
	color : #747862;
	height:20px;
	border:0;
	padding:4px 8px;
	margin-bottom:0px;
}
label {
	width: 125px;
	float: left;
	text-align: left;
	margin-right: 0.5em;
	display: block;
}
.style_form {
	margin:3px;
}
#content {
	margin-left: auto;
	margin-right: auto;
	width: 600px;
	margin-top:200px;
}
#submit_btn {
	margin-left:133px;
	height:30px;
	width: 250px;
}
</style>



</head>
<body>


<!--form action="resumejs.php" class="cmxform" id="commentForm" method="POST">
	<fieldset>

		<p>
			<label for="cname">Name (required, at least 2 characters)</label>
			<input id="cname" name="name" minlength="2" type="text" required />
		<p>
			<label for="cemail">E-Mail (required)</label>
			<input id="cemail" type="email" name="email" required />
		</p>
		<p>
			<label for="curl">URL (optional)</label>
			<input id="curl" type="url" name="url" />
		</p>
		<p>
			<label for="ccomment">Your comment (required)</label>
			<textarea id="ccomment" name="comment" required></textarea>
		</p>
		<p>
			<input class="submit" type="submit" value="Submit"/>
		</p>
	</fieldset-->
	
	<!--div id="main">
	<fieldset-->
	<form action="resumejs.php" method="POST" class="register">
 <fieldset class="row1">
    <legend>Resume Details</legend>
		<p>
			<label for="fk_employee_id">Application id:* </label>
			<input  name="fk_employee_id" type="text" value="<?php echo $login_session=$row['id'];?>"required readonly />
			</p>
		<p>
			<label for="cv_title">Application Name:*</label>
			<input name="cv_title" minlength="2" type="text" required />
		</p>
		<p>
			<label for="cv_description">Skills: </label>
			<input  type="text" name="cv_description"/>
		</p>
		<p>
			<label for="cv_file_name">Resume Name:*</label>
			<input  type="text" name="cv_file_name" required/>
		</p>	
		<p>
			<label for="cv_file_type">CV Name with Type (eg: ResumeName.docx)*</label>
			<input  type="text" name="cv_file_type" required/>
		</p>
		<p>
			<label for="cv_file_exe">CV Format Type (eg: .docx, .doc, .pdf, .rtf, .txt)*</label>
			<select name="cv_file_exe" required/>
			<option selected value="">Select Type</option>
			<option value=".doc">.docx</option> 
			<option value=".doc">.doc</option> 
			<option value=".pdf">.pdf</option> 
			<option value=".rtf">.rtf</option> 
			<option value=".txt">.txt</option> 
			</select>
		</p>
		<p>
			<label for="cv_file_size">CV File Size (max capacity:200kb):*</label>
			</p>
			<br><br>
			
			<input type="radio" name="cv_file_size" value="1" checked required/>0-50<br>	
			<input type="radio" name="cv_file_size" value="2" required/>50-100<br>
			<input type="radio" name="cv_file_size" value="3" required/>100-150<br>
			<input type="radio" name="cv_file_size" value="4" required/>150-200<br>
			<p>
			<label for="cv_status">Resume Explore:*</label></p>
			<p>
			<input type="radio" name="cv_status" value="Public" checked required/>Public (Resume is Accessible for all Employer) 
			</p>
			<p>
			<input type="radio" name="cv_status" value="Private" required/ >Private (Resume is Accessible for only Job Applied Employer)
		</p>
		</fieldset>
		 <fieldset class="row2">
		 <legend>Experience and Qalification Details</legend> 
			<label for="year_experience">Work Experience:</label>
			<select  name="year_experience">
			<option value="" selected="selected">None</option> 
			<option value="0-1 Year">0-1 Year</option> 
			<option value="1-2 Year">1-2 Year</option> 
			<option value="3-Above Years">3-Above Year</option> 
			</select>
		<p>
			<label for="highest_education">Highest Education:</label>
			<select  name="highest_education">
			<option value="Bachelors">Bachelor's</option> 
			<option value="Masters">Master's</option> 
			<option value="MBA">MBA</option> 
			<option value="Other">Other</option> 
			<option value="PhD">PhD</option> 
			</select>
		</p>
		<p>
			<label for="salary_range">Expected Salary Range (Annually):</label>
			<select  name="salary_range">
			<option selected value="">Select Salary</option>
			<option value="30,000-50,000">30,000-50,000</option> 
			<option value="50,000-100,000">50,000-100,000</option> 
			<option value="100,000-Above">100,000-Above</option> 
			</select>
	</p>
	<p>
			<label for="availability">Availability For Job: *</label>	
				</p>
					<p>
			<input type="radio" name="availability" value="Y" checked required/>Yes
			</p>
				<p>
			<input type="radio" name="availability" value="N" required/>No
		</p>
			</fieldset>
			 <fieldset class="row2">
			  <legend>More Personal Details</legend> 
			<p>
			<label for="start_date">Date Availability to Start the Job:*</label>
		    <input type="date" name="start_date" required/>
		</p>
		<p>
			<label for="positions">Applying Positions:*</label>
		    <input type="text" name="positions" required/>
		</p>
		<p>
			<label for="recent_job_title">Current Job Title (if no than type none):*</label>
		    <input type="text" name="recent_job_title" required/>
		</p>
		<p>
			<label for="recent_employer">Current Employer (if no than type none):*</label>
		    <input type="text" name="recent_employer" required/>
	</p>
	<p>
			<label for="recent_industry_work">Current Designated Work (if no than type none):*</label>
		    <input type="text" name="recent_industry_work" required/>
	</p>
	</fieldset>
	<fieldset class="row1">
		 <legend>Required Job Related Information</legend> 
		 <p>
	<label for="var_name">	 Job Industry Sector:</label><select name="var_name"> 
<option >Select Job Category</option>
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
</p>
<p>
			<label for="look_job_type">Applying Job Type:*</label>
			<select  name="look_job_type" required/>
			<option selected value="">Select Type</option>
			<option value="full-time">Full-Time</option> 
			<option value="part-time">Part-Time</option> 
			<option value="per-day">Per-Day</option> 
			</select>
	</p>
	<p>
			<label for="look_job_status">Applying Job Status: *</label>
			<select  name="look_job_status" required/>
			<option selected value="">Select Type</option>
			<option value="permanent">Permanent</option> 
			<option value="part-time">Part-Time</option> 
			<option value="contract">Contract</option> 
			<option value="temporary-contract-project">Temporary-Contract-Project</option> 
			<option value="placement-student">Placement Student</option> 
			<option value="seasonal">Seasonal</option> 
			</select>
		</p>
		<p>
			<label for="city">City/Town: *</label>
		    <input type="text" name="city" required/>
		</p>
		<p>
		<script type="text/javascript" src="countries.js"></script>
			<label for="country">Country:</label><select onchange="print_state('state_province',this.selectedIndex);" id="country" name ="country"></select>
		</p>
		<p>
			<label for="state_province">State:</label>
		             <select name ="state_province" id ="state_province"></select>
		<script language="javascript">print_country("country");</script>	
		</p>
		<p>
			<label for="are_you_auth">Are You Authorized to Work (Give information about your Status in Short):*</label><br>
		    <input type="text" name="are_you_auth" required/>
		</p>
		<p>
			<label for="willing_to_relocate">Willing To Relocate:*</label>	
			</p>
			<p>
			<input type="radio" name="willing_to_relocate" value="Y" checked required/>Yes
			</p>
			<p>
	<input type="radio" name="willing_to_relocate" value="N" required/>No	
	</p>
	<p>
			<label for="willing_to_travel">Willing To Travel: *</label>
			</p>
			<p>
			<input type="radio" name="willing_to_travel" value="Y" checked required/>Yes
			</p>
			<p>
			<input type="radio" name="willing_to_travel" value="N" required/>No
		</p>
		</fieldset>
			<fieldset class="row 2">
		 <legend>Additional Details</legend> 
		 <p>
			<label for="additional_notes">Additional Notes Related to Applied Jobs:</label><br>
		    <input type="text"  name="additional_notes">
		</p>
		<p>
		<label for="created_at">Resume Creation Date:</label>
		    <input type="date" name="created_at">
		</p>
		<p>
			<label for="modified_at">Modified Date:</label>
		    <input type="date" name="modified_at">
		</p>
		</fieldset>
		<fieldset class="row">
		<div>
		<input type="submit" name="Submit" value="Submit Application &raquo;" id="submit_btn" class="button">
		</form>
		<form action="cvupload.php" method="POSt">
		<p>
		<input type="submit" value="Continue to Upload Resume &raquo;" id="submit_btn" class="button">
		</p>

		</form>
		<form action="welcomejs.php" method="POST">
		<p>
		<input type="submit" name="submit" value="Home Page &raquo;" id="submit_btn" class="button">
		</p>
		</form>
		
			<!--label for="ufile"><strong>Browse to Upload Resume:</strong></label><br>
			<label for="ufile">Select File:</label>
			<input name="ufile" type="file" id="ufile" size="50" /-->
			<!--input type="submit" value="Submit"-->
		<form action="logoutjs.php" method="POST">	
		<input type="submit" value="Log Out &raquo;" id="submit_btn" class="button">
		</form>	
	
<!--b><p align="right"><a href="logoutjs.php">Sign Out</a></p></b-->
<!--/fieldset-->
</div>
</fieldset>	
</body>
</html>
