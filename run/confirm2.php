


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
			
		</div>
	</div>
	<div id="contents">
		<div class="clearfix">
		<h1>Registration Status</h3>
			<div class="frame2">
				<div class="box">
					<img src="images/activation.png" alt="Img" height="298" width="924">
				</div>
			</div>
			<p>
				<?php

require('connect.php');

// Passkey that got from link 
$passkey=$_GET['passkey'];
$tbl_name1="jobberland_tempjp";

// Retrieve data from table where row that match this passkey 
$sql1="SELECT * FROM $tbl_name1 WHERE confirm_code ='$passkey'";
$result1=mysql_query($sql1);

// If successfully queried 
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
		$password=$rows['passwd'];
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
		//$fkcareerdegree=$rows['fk_career_degree_id'];
		$jobqty=$rows['job_qty'];
		$date=$rows['date_register'];
		$act=$rows['actkey'];
		$comments=$rows['admin_comments'];
		$status=$rows['employer_status'];
		$isactive=$rows['is_active'];
		
		$tbl_name2="jobberland_employer";

// Insert data that retrieves from "temp_members_db" into table "registered_members" 
		$sql2="INSERT INTO $tbl_name2(company_name,contact_name,site_link,company_desc,email_address,username,passwd,title,fname,sname,
				address,address2,city,state_province,
				country,post_code,phone_number,job_qty,date_register,actkey,admin_comments,employer_status,is_active)
				VALUES
				('$companyname','$contactname','$site','$companydesc','$email','$username','$password','$title','$fname','$sname',
				'$address','$address2','$city','$stateprovince','$country','$postcode',
				'$phnumber','$jobqty','$date','$act','$comments','$status','$isactive')";
				$result2=mysql_query($sql2);
				}
				
else{
// if not found passkey, display message "Wrong Confirmation code"
	echo "Wrong Confirmation code";
	}
	// if successfully moved data from table"temp_members_db" to table "registered_members" displays message "Your account has been activated" and don't forget to delete confirmation code from table "temp_members_db"
	if($result2==mysql_query($sql2)){
		echo  "<marquee>"."<h2>"."Your account has been activated !!!"."</h2>"."</marquee>";
		echo "<b>"."Login with Your Username and Password"."</b>";
		// Delete information of this user from table "temp_members_db" that has this passkey 
		//$sql3="DELETE FROM $tbl_name1 WHERE confirm_code = '$passkey'";
		//$result3=mysql_query($sql3);
	
	}
}



?>





</p>
<form action="http://localhost/MainProject/run/loginprovider.html" method="POST">
		
		<input type="submit" name="submit" value="Login">
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
