<?php
require('connect.php');

include('lockjp.php');

$login_session=$row['username'];
$tbl_name1="jobberland_employer";
//$tbl_name2="jobberland_career_degree";

$sql1="SELECT company_name,contact_name,site_link,company_desc,email_address,username,title,fname,sname,address,address2,city,state_province,
				country,post_code,phone_number,job_qty,date_register
				FROM $tbl_name1 WHERE username ='$login_session'";
$result1=mysql_query($sql1);

 if($result1){

	// Count how many row has this passkey
	$count=mysql_num_rows($result1);

	// if found this passkey in our database, retrieve data from table "temp_members_db"
	if($count==1){
		$rows=mysql_fetch_array($result1);
		
		$companyname=$rows['company_name'];
		$contactname=$rows['contact_name'];
		$site=$rows['site_link'];
		$companydesc=$rows['company_desc'];
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
		$jobqty=$rows['job_qty'];
		$date=$rows['date_register'];
		//$career=$rows['id'];
		//$degree=$rows['career_name'];
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
			<h1>Your Account Details </h1>
			<div class="frame2">
				<div class="box">
					<img src="images/thumb-up.jpg" alt="Img" height="298" width="924">
				</div>
			</div>
			<p>
			<b>Company Name:</b> <?php echo $companyname=$rows['company_name']; ?><br><br>

<b>Contact Name:</b> <?php echo $contactname=$rows['contact_name'];?><br><br>

<b>Your Account User-Name:</b> <?php echo $username = $rows['username'];?><br><br>

<b>Name:</b> <?php echo $title=$rows['title']; echo $fname=$rows['fname']; echo "."; echo $sname=$rows['sname']; ?><br><br>

<b>Email Address:</b> <?php echo $email = $rows['email_address'];?><br><br>

<b>Your Account User-Name:</b> <?php echo $username = $rows['username'];?><br><br>

<b>Address:</b> <?php echo $address = $rows['address']; echo "<br>"; echo "&emsp;&emsp;&emsp;&emsp;&nbsp;"; echo $address2 = $rows['address2']; ?><br><br>

<b>City:</b> <?php echo $city = $rows['city'];?><br><br>

<b>State:</b> <?php echo $stateprovince = $rows['state_province'];?><br><br>

<b>Country:</b> <?php echo $country = $rows['country'];?><br><br>

<b>Your Phone Number:</b> <?php echo $phnumber = $rows['phone_number'];?><br><br>

<b>Jobs Posted:</b> <?php echo $jobqty=$rows['job_qty'];?><br><br>

<b>Last Job Posted Date:</b> <?php echo $date = $rows['date_register'];?><br><br>
<form action="updatejp.php" method="POST">
<input type="submit" value="Update">
</form>
<p>
Use (Ctrl+P) Command on your keyboard to Save as .pdf or to Print this Page for You Information</b>
</p>
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