<?php
echo "<html>";
echo "<head>";
echo "<title>Rohit Patil Job Site</title>";
echo "<link rel='stylesheet' type='text/css' href='styleact.css' />";
echo "</head>";
echo "<body>";

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
		echo  "<b>"."Your account has been activated"."</b>";
		// Delete information of this user from table "temp_members_db" that has this passkey 
		//$sql3="DELETE FROM $tbl_name1 WHERE confirm_code = '$passkey'";
		//$result3=mysql_query($sql3);
	
	}
}


echo "</div>";
echo "</body>";
echo "</html>";
?>
