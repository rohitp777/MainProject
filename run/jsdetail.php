<?php
require('connect.php');

include('lockjs.php');

$login_session=$row['username'];
$tbl_name1="jobberland_employee";
$tbl_name2="jobberland_career_degree";

$sql1="SELECT js.email_address,js.username,js.title,js.fname,js.sname,js.address,js.address2,js.city,js.state_province,
				js.country,js.post_code,js.phone_number,js.fk_career_degree_id,js.date_register,career.id,career.career_name
				FROM $tbl_name1 AS js,$tbl_name2 AS career WHERE js.username ='$login_session' AND js.fk_career_degree_id=career.id";
$result1=mysql_query($sql1);

 if($result1){

	// Count how many row has this passkey
	$count=mysql_num_rows($result1);

	// if found this passkey in our database, retrieve data from table "temp_members_db"
	if($count==1){
		$rows=mysql_fetch_array($result1);
		
		$email = $rows['email_address'];
		$username= $rows['username'];
	//$password=$rows['passwd'];
		//md5($password);
		//Use md5($_POST['passwd']);
		$title=$rows['title'];
		$fname=$rows['fname'];
		$sname=$rows['sname'];
		$address=$rows['address'];
		$address2=$rows['address2'];
		$city=$rows['city'];
		$stateprovince=$rows['state_province'];
		$country=$rows['country'];
		$postcode=$rows['post_code'];
		$phnumber=$rows['phone_number'];
		$fkcareerdegree=$rows['fk_career_degree_id'];
		$date=$rows['date_register'];
		$career=$rows['id'];
		$degree=$rows['career_name'];
		//$act=$rows['actkey'];
		//$comments=$rows['admin_comments'];
		//$status=$rows['employee_status'];
		//$isactive=$rows['is_active'];
	/*	
		echo "$email";
		}
		else
		{
		echo "error";*/
		}
		}


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
			<h1>Your Account Details </h1>
			<div class="frame2">
				<div class="box">
					<img src="images/thumb-up.jpg" alt="Img" height="298" width="924">
				</div>
			</div>
			<p>
			<b>Name:</b> <?php echo $title=$rows['title']; echo $fname=$rows['fname']; echo "."; echo $sname=$rows['sname']; ?><br><br>

<b>Email Address:</b> <?php echo $email = $rows['email_address'];?><br><br>

<b>Your Account User-Name:</b> <?php echo $username = $rows['username'];?><br><br>

<b>Address:</b> <?php echo $address = $rows['address']; echo "<br>"; echo "&emsp;&emsp;&emsp;&emsp;&nbsp;"; echo $address2 = $rows['address2']; ?><br><br>

<b>City:</b> <?php echo $city = $rows['city'];?><br><br>

<b>State:</b> <?php echo $stateprovince = $rows['state_province'];?><br><br>

<b>Country:</b> <?php echo $country = $rows['country'];?><br><br>

<b>Your Phone Number:</b> <?php echo $phnumber = $rows['phone_number'];?><br><br>

<b>Applied Position:</b> <?php echo $degree=$rows['career_name'];?><br><br>

<b>Registration Date:</b> <?php echo $date = $rows['date_register'];?><br><br>
<form action="updatejs.php" method="POST">
<input type="submit" value="Update">
</form>
<p>
Use (Ctrl+P) Command on your keyboard to Save as .pdf or to Print this Page for You Information</b>
</p>
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