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
		

        $sql = "INSERT INTO jobberland_cv_detail(fk_employee_id,cv_title,cv_description,cv_file_name,cv_file_type,
				cv_file_exe,cv_file_size,cv_status,year_experience,highest_education,salary_range,availability,
				start_date,positions,recent_job_title,recent_employer,recent_industry_work,look_job_type,look_job_status,
				city,state_province,country,are_you_auth,willing_to_relocate,willing_to_travel,additional_notes,created_at,modified_at)
				VALUES
				('$_POST[fk_employee_id]','$_POST[cv_title]','$_POST[cv_description]','$_POST[cv_file_name]','$_POST[cv_file_type]','$_POST[cv_file_exe]',
				'$_POST[cv_file_size]','$_POST[cv_status]','$_POST[year_experience]','$_POST[highest_education]','$_POST[salary_range]','$_POST[availability]',
				'$_POST[start_date]','$_POST[positions]','$_POST[recent_job_title]','$_POST[recent_employer]','$_POST[recent_industry_work]','$_POST[look_job_type]','$_POST[look_job_status]',
				'$_POST[city]','$_POST[state_province]','$_POST[country]','$_POST[are_you_auth]','$_POST[willing_to_relocate]','$_POST[willing_to_travel]','$_POST[additional_notes]','$_POST[created_at]','$_POST[modified_at]')";
			
	 if(mysql_query($sql))
	   {
        echo "Entered Success";
       }
	
	   else
	   {
	  die("Error:".mysql_error());
	   }
    }

	    mysql_close($connection); 
		
      
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>My Resume</title>

<!--link rel="stylesheet" href="css/screen.css" /-->
<link rel="stylesheet" type="text/css" href="style.css" />

<script src="../lib/jquery.js"></script>
<script src="../jquery.validate.js"></script>

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
#commentForm { width: 500px; }
#commentForm label { width: 250px; }
#commentForm label.error, #commentForm input.submit { margin-left: 253px; }
#signupForm { width: 670px; }
#signupForm label.error {
	margin-left: 10px;
	width: auto;
	display: inline;
}
#newsletter_topics label.error {
	display: none;
	margin-left: 103px;
}

.red {
  content:"*" ;
color: red;
font-size:20px;
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
	<div id="content">
	<div class="register-form">

	<form action="resumejs.php" method="POST">

	<h3>Fields marked with (<span class="red">*</span>) are required</h3>
		
			<label for="fk_employee_id">Application id: <span class="red">*</span> </label>
			<input  name="fk_employee_id" type="text" value="<?php echo $login_session=$row['id'];?>"required readonly />
		<br>
		<br>
			<label for="cv_title">Application Name: <span class="red">*</span> </label>
			<input name="cv_title" minlength="2" type="text" required />
		<br>	
	
		<br>
			<label for="cv_description">Skills: </label>
			<input  type="text" name="cv_description"/>
		<br>
		<br>
			<label for="cv_file_name">Resume Name: <span class="red">*</span></label>
			<input  type="text" name="cv_file_name" required/>
		<br>
		<br>		
			<label for="cv_file_type">CV Name with Type (eg: ResumeName.docx) <span class="red">*</span></label>
			<input  type="text" name="cv_file_type" required/>
		<br>
		<br>
			<label for="cv_file_exe">CV Format Type (eg: .docx, .doc, .pdf, .rtf, .txt) <span class="red">*</span></label>
			<select name="cv_file_exe" required/>
			<option selected value="">Select Type</option>
			<option value=".doc">.docx</option> 
			<option value=".doc">.doc</option> 
			<option value=".pdf">.pdf</option> 
			<option value=".rtf">.rtf</option> 
			<option value=".txt">.txt</option> 
			</select>
		<br>
		<br>
			<label for="cv_file_size">CV File Size (max capacity:200kb):  <span class="red">*</span></label>
			<br>
			<input type="radio" name="cv_file_size" value="1" checked required/>0-50<br>	
			<input type="radio" name="cv_file_size" value="2" required/>50-100<br>
			<input type="radio" name="cv_file_size" value="3" required/>100-150<br>
			<input type="radio" name="cv_file_size" value="4" required/>150-200<br>
		<br>
		
		
			<label for="cv_status">Resume Explore: <span class="red">*</span></label>
			<input type="radio" name="cv_status" value="Public" checked required/>Public (Resume is Accessible for all Employer) 	
			<input type="radio" name="cv_status" value="Private" required/>Private (Resume is Accessible for only Job Applied Employer)
		<br>
		<br>
			<label for="year_experience">Work Experience:</label>
			<select  name="year_experience">
			<option value="" selected="selected">None</option> 
			<option value="0-1 Year">0-1 Year</option> 
			<option value="1-2 Year">1-2 Year</option> 
			<option value="3-Above Years">3-Above Year</option> 
			</select>
		<br>
		<br>
			<label for="highest_education">Highest Education:</label>
			<select  name="highest_education">
			<option value="Bachelors">Bachelor's</option> 
			<option value="Masters">Master's</option> 
			<option value="MBA">MBA</option> 
			<option value="Other">Other</option> 
			<option value="PhD">PhD</option> 
			</select>
		<br>
		<br>
			<label for="salary_range">Expected Salary Range (Annually):</label>
			<select  name="salary_range">
			<option selected value="">Select Salary</option>
			<option value="30,000-50,000">30,000-50,000</option> 
			<option value="50,000-100,000">50,000-100,000</option> 
			<option value="100,000-Above">100,000-Above</option> 
			</select>
		<br>
		<br>
			<label for="availability">Availability For Job: <span class="red">*</span></label>	
			<input type="radio" name="availability" value="Y" checked required/>Yes
			<input type="radio" name="availability" value="N" required/>No<br>
		<br>
		<br>
			<label for="start_date">Date Availability to Start the Job: <span class="red">*</span></label>
		    <input type="date" name="start_date" required/>
		<br>
		<br>
			<label for="positions">Applying Positions: <span class="red">*</span></label><br>
		    <textarea name="positions" required/></textarea>
		<br>
		<br>
			<label for="recent_job_title">Current Job Title (if no than type none): <span class="red">*</span></label>
		    <input type="text" name="recent_job_title" required/>
		<br>
		<br>
			<label for="recent_employer">Current Employer (if no than type none): <span class="red">*</span></label>
		    <input type="text" name="recent_employer" required/>
		<br>
		<br>
			<label for="recent_industry_work">Current Designated Work (if no than type none): <span class="red">*</span></label>
		    <input type="text" name="recent_industry_work" required/>
		<br>
		<br>
			<label for="look_job_type">Applying Job Type: <span class="red">*</span></label>
			<select  name="look_job_type" required/>
			<option selected value="">Select Type</option>
			<option value="full-time">Full-Time</option> 
			<option value="part-time">Part-Time</option> 
			<option value="per-day">Per-Day</option> 
			</select>
		<br>
		<br>
			<label for="look_job_status">Applying Job Status: <span class="red">*</span></label>
			<select  name="look_job_status" required/>
			<option selected value="">Select Type</option>
			<option value="permanent">Permanent</option> 
			<option value="part-time">Part-Time</option> 
			<option value="contract">Contract</option> 
			<option value="temporary-contract-project">Temporary-Contract-Project</option> 
			<option value="placement-student">Placement Student</option> 
			<option value="seasonal">Seasonal</option> 
			</select>
		<br>
		<br>
			<label for="city">City/Town: <span class="red">*</span></label>
		    <input type="text" name="city" required/>
		<br>
		<br>
		<script type="text/javascript" src="countries.js"></script>
		
			<label for="country">Country:</label>
		       <select onchange="print_state('state_province',this.selectedIndex);" id="country" name ="country"></select>
	<br>
	<br>
			<label for="state_province">State:</label>
		             <select name ="state_province" id ="state_province"></select>
		<script language="javascript">print_country("country");</script>	
		<br>
		<br>
			<label for="are_you_auth">Are You Authorized to Work (Give information about your Status in Short): <span class="red">*</span></label><br>
		    <textarea name="are_you_auth" required/></textarea>
		<br>
		<br>
			<label for="willing_to_relocate">Willing To Relocate: <span class="red">*</span></label>
			<input type="radio" name="willing_to_relocate" value="Y" checked required/>Yes
			<input type="radio" name="willing_to_relocate" value="N" required/>No
		<br>
		<br>
			<label for="willing_to_travel">Willing To Travel: <span class="red">*</span></label>
			<input type="radio" name="willing_to_travel" value="Y" checked required/>Yes
			<input type="radio" name="willing_to_travel" value="N" required/>No
		<br>
		<br>
			<label for="additional_notes">Additional Notes Related to Applied Jobs:</label><br>
		    <textarea  name="additional_notes"></textarea>
		<br>
		<br>
		<label for="created_at">Resume Creation Date:</label>
		    <input type="date" name="created_at">
		<br>
		<br>
			<label for="modified_at">Modified Date:</label>
		    <input type="date" name="modified_at">
		<br>
		<br>
		<input type="submit" name="Submit" value="Submit Application" >
		</form>
		<br>
		<form action="cvupload.php" method="POST">
		<input type="submit" value="Continue to Upload Resume">
		</form>
			
			<!--label for="ufile"><strong>Browse to Upload Resume:</strong></label><br>
			<label for="ufile">Select File:</label>
			<input name="ufile" type="file" id="ufile" size="50" /-->
			<br>
		   
		
		
			<!--input type="submit" value="Submit"-->
	
<b><p align="right"><a href="logoutjs.php">Sign Out</a></p></b>
<!--/fieldset-->
</div>
</div>
</body>
</html>
