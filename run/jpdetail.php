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

<DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Rohit Patil Job Site</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<h3><strong> Your Account Details</strong></h3>
</head>
<body>
<div id="content">
<div class="register-form">

<b>Company Name:</b> <?php echo $companyname=$rows['company_name'];?><br><br>

<b>Contact Name:</b> <?php echo $contactname=$rows['contact_name'];?><br><br>

<b>Name:</b> <?php echo $title=$rows['title']; echo $fname=$rows['fname']; echo "."; echo $sname=$rows['sname']; ?><br><br>

<b>Website Link:</b> <?php echo $site=$rows['site_link'];?><br><br>

<b>Company Details:</b> <?php echo $companydesc=$rows['company_desc'];?><br><br>

<b>Email Address:</b> <?php echo $email = $rows['email_address'];?><br><br>

<b>Your Account User-Name:</b> <?php echo $username = $rows['username'];?><br><br>

<b>Address:</b> <?php echo $address = $rows['address']; echo "<br>"; echo "&emsp;&emsp;&emsp;&emsp;&nbsp;"; echo $address2 = $rows['address2']; ?><br>

<b>City:</b> <?php echo $city = $rows['city'];?><br>

<b>State:</b> <?php echo $stateprovince = $rows['state_province'];?><br>

<b>Country:</b> <?php echo $country = $rows['country'];?><br><br>

<b>Your Phone Number:</b> <?php echo $phnumber = $rows['phone_number'];?><br><br>

<b>Jobs Posted:</b> <?php echo $jobqty=$rows['job_qty'];?><br><br>

<b>Last Job Posted Date:</b> <?php echo $date = $rows['date_register'];?><br><br>

<form action="updatejp.php" method="POST">
<input type="submit" value="Update">
</form>

<b><span class="red">*</span>Use (Ctrl+P) Command on your keyboard to Save as .pdf or to Print this Page for You Information</b>

</div>
</div>
</body>
</html>