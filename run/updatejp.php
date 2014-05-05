<?php
require('connect.php');

include('lockjp.php');

    // If the values are posted, insert them into the database.
    if (isset($_POST['username']) && isset($_POST['email_address']))
  
		{
		
		$companyname=$_POST['company_name'];
		$contactname=$_POST['contact_name'];
		$site=$_POST['site_link'];
		$companydesc=$_POST['company_desc'];
		$email = $_POST['email_address'];
		$username=$_POST['username'];
		//$password=md5($_POST['passwd']);
		//$title=$_POST['title'];
		$fname=$_POST['fname'];
		$sname=$_POST['sname'];
		$address=$_POST['address'];
		$address2=$_POST['address2'];
		$city=$_POST['city'];
		$stateprovince=$_POST['state_province'];
		$country=$_POST['country'];
		$postcode=$_POST['post_code'];
		$phnumber=$_POST['phone_number'];
		//$fkcareerdegree=$_POST['fk_career_degree_id'];
		$jobqty=$_POST['job_qty'];
		$date=$_POST['date_register'];
		
		
        $sql = "UPDATE jobberland_employer SET  company_name= '$_POST[company_name]', contact_name= '$_POST[contact_name]',
				 site_link= '$_POST[site_link]', company_desc= '$_POST[company_desc]',fname= '$_POST[fname]',sname= '$_POST[sname]',
				address= '$_POST[address]',address2= '$_POST[address2]',
				city= '$_POST[city]',state_province= '$_POST[state_province]',country= '$_POST[country]',post_code= '$_POST[post_code]',
				phone_number= '$_POST[phone_number]', job_qty= '$_POST[job_qty]',date_register= '$_POST[date_register]'
		WHERE username='$username'";
			
	 if( mysql_query($sql))
	   {
        $msg = "Thank You!!! Your Account has been Updated";
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
			<h1>Update Your Personal Details</h3>
			<form action="updatejp.php" method="POST" id="updatejs">
				<h2>Note: (For Updating all Fields are mandatory)*</h2>
			<div class="frame2">
				<div class="box">
					<img src="images/update1.jpg" alt="Img" height="298" width="924">
				</div>
			</div>
			<p>
			<b>Company Name:*</b> <input type="text" name="company_name" value="<?php echo $login_session=$row['company_name']; ?>" required/><br><br>
			
			<b>Contact Name:*</b><input type="text" name="contact_name" value="<?php echo $login_session=$row['contact_name']; ?>" required/><br><br>
			
			<b>Website Link:*</b><input type="url" name ="site_link" value="<?php echo $login_session=$row['site_link'];?>" required/><br><br>
			
			<b>Company's Detail:*</b><br>
<textarea name="company_desc" ROWS="5" COLS="50"><?php echo $login_session=$row['company_desc'];?></textarea><br><br>

<b>Email:*</b><input type="email" name="email_address" id="email_address" value="<?php echo$login_session=$row['email_address'];?>" class="form_element" readonly /><br><br>

<b>Username:*</b> <input type="text" name="username" id="username" value="<?php echo $login_session=$row['username']; ?>" readonly /><br><br>

<b>First Name:*</b><input type="text" name="fname" value="<?php echo $login_session=$row['fname']; ?>" required/><br><br>

<b>Last Name:*</b> <input type="text" name="sname" value="<?php echo $login_session=$row['sname']; ?>" required/><br><br>

<b>Address:*</b><input type="text" name="address" value="<?php echo $login_session=$row['address']; ?>" required/><br><br>

<b>Address2:*</b> <input type="text" name="address2" value="<?php echo $login_session=$row['address2']; ?>" required/><br><br>

<b>City:*</b> <input type="text" name="city" value="<?php echo $login_session=$row['city']; ?>" required/><br><br>

<script type="text/javascript" src="countries.js"></script>

<b>Update Country:*</b> <select onchange="print_state('state_province',this.selectedIndex);" id="country" name ="country"></select><br><br>

<b>Update State:*</b> <select name ="state_province" id ="state_province" value="<?php echo $login_session=$row['state_province']; ?>"></select>
	<script language="javascript">print_country("country");</script><br><br>

<b>Post Code:*</b> <input type="text" name ="post_code" value="<?php echo $login_session=$row['post_code']; ?>" required/><br><br>

<b>Contact no:*</b> <input type="tel" name ="phone_number" value="<?php echo $login_session=$row['phone_number']; ?>"><br><br>

<b>Job Positions Availability:*</b><input type="number" name="job_qty" value="<?php echo $login_session=$row['job_qty']; ?>"><br><br>

<b>Update Date Register for Job Posted:*</b><input type="date" name="date_register"><br><br>


<input type="submit" name="submit" value="Update">
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