<?php
require('connect.php');

include('lockjs.php');

    // If the values are posted, insert them into the database.
    if (isset($_POST['username']) && isset($_POST['email_address']))
  
		{
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
		$fkcareerdegree=$_POST['fk_career_degree_id'];
		$date=$_POST['date_register'];
		
		
        $sql = "UPDATE jobberland_employee SET fname= '$_POST[fname]',sname= '$_POST[sname]',
				address= '$_POST[address]',address2= '$_POST[address2]',
				city= '$_POST[city]',state_province= '$_POST[state_province]',country= '$_POST[country]',post_code= '$_POST[post_code]',
				phone_number= '$_POST[phone_number]',fk_career_degree_id= '$_POST[fk_career_degree_id]',date_register= '$_POST[date_register]'
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
				<a href="index.html"><img src="images/logotop.png" alt="LOGO" height="52" width="362"></a>
			</div>
			<ul class="navigation">
				<li class="active">
					<a href="index.html">Home</a>
				</li>
				<li>
					<a href="about.html">My Details</a>
					<div>
						<a href="http://localhost/MainProject/run/jsdetail.php">MY ACCOUNT DETAILS</a>
						<a href="http://localhost/MainProject/run/forgotjs.php">UPDATE PASSWORD</a>
					</div>
				</li>
				<li>
					<a href="practices.html">Resume & Applications</a>
					<div>
						<a href="http://localhost/MainProject/run/resumejs.php">REGISTER CV/RESUME</a>
						<a href="#">MY SAVED RESUME</a>
					</div>
				</li>
				<li>
					<a href="lawyers.html">Job Search</a>
					<div>
						<a href="http://localhost/MainProject/run/jobsearchjs.php">JOB SEARCH BY KEYWORDS</a>
						<a href="http://localhost/MainProject/run/jobsearchsector.php">JOB SEARCH BY CATEGORY</a>
					</div>
				</li>
				<li>
					<a href="news.html">Career Advice</a>
					<div>
						<a href="singlepost.html">News Single Post</a>
					</div>
				</li>
				<li>
					<a href="contact.html">Services</a>
				</li>
				<li>
					<a href="logoutjs.php">Log Out</a>
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
			<form action="updatejs.php" method="POST" id="updatejs">
				<h2>Note: (For Updating all Fields are mandatory)*</h2>
			<div class="frame2">
				<div class="box">
					<img src="images/update1.jpg" alt="Img" height="298" width="924">
				</div>
			</div>
			<p>
			<b>Email:*</b> <input type="email" name="email_address" id="email_address" value="<?php echo$login_session=$row['email_address'];?>" readonly /><br><br>

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

<b>Update Applying Positions:*</b><br>
<input type="radio" name="fk_career_degree_id" value="1" checked>None of these<br>	
<input type="radio" name="fk_career_degree_id" value="2">Student (Higher education/Graduate)<br>
<input type="radio" name="fk_career_degree_id" value="3">Entry Level<br>
<input type="radio" name="fk_career_degree_id" value="4">Experienced (Non-Manager)<br>
<input type="radio" name="fk_career_degree_id" value="5">Manager (Manager/Supervisor of Staff)<br>
<input type="radio" name="fk_career_degree_id" value="6">Executive (Director, Department Head)<br>
<input type="radio" name="fk_career_degree_id" value="7">Senior Executive (Chairman, MD, CEO)<br><br>

<b>Update Date Register for Positions:*<b><input type="date" name="date_register"><br><br>

<input type="submit" name="submit" value="Update">
</form>

</p>
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