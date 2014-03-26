<html>
<head>
<title>Rohit Patil Job Site</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<div class="register-form">
<?php
session_start();
include "connect.php"; //connects to the database

$tbl_name="jobberland_tempjp";

	// Random confirmation code 
    //$confirm_code=md5(uniqid(rand()));
    
	// If the values are posted, insert them into the database.
   // if (isset($_POST['username']) && isset($_POST['passwd']))
  
		$confirm_code=md5(uniqid(rand()));
		$companyname=$_POST['company_name'];
		$contactname=$_POST['contact_name'];
		$site=$_POST['site_link'];
		$companydesc=$_POST['company_desc'];
		$email= $_POST['email_address'];
		$username=$_POST['username'];
		$password=md5($_POST['passwd']);
		$title=$_POST['title'];
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
		$act=$_POST['actkey'];
		

        $sql = "INSERT INTO $tbl_name(confirm_code,company_name,contact_name,site_link,company_desc,email_address,username,passwd,title,fname,sname,
				address,address2,city,state_province,
				country,post_code,phone_number,job_qty,date_register,actkey)
				VALUES
				('$confirm_code','$_POST[company_name]','$_POST[contact_name]','$_POST[site_link]','$_POST[company_desc]','$_POST[email_address]','$_POST[username]',
				md5('$_POST[passwd]'),'$_POST[title]','$_POST[fname]','$_POST[sname]','$_POST[address]','$_POST[address2]','$_POST[city]',
				'$_POST[state_province]','$_POST[country]','$_POST[post_code]','$_POST[phone_number]','$_POST[job_qty]','$_POST[date_register]','$_POST[actkey]')";
		$result=mysql_query($sql);
		//$count=mysql_num_rows($result);
 if($result==0)
    {
        $rows=mysql_fetch_array($result);
        //$password  =  $rows['passwd'];//FETCHING PASS
      
        $to = $rows['email_address'];
        //$to = $_POST['email_address'];
		
		}

//		if($result){
	// ---------------- SEND MAIL FORM ----------------
	require 'class.phpmailer.php';
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Mailer = 'smtp';
$mail->SMTPAuth = true;
$mail->Host = 'smtp.gmail.com'; // "ssl://smtp.gmail.com" didn't worked
$mail->Port = 465;
$mail->SMTPSecure = 'ssl';
$mail->Username = "rockyrox7777@gmail.com";
$mail->Password = "uiopuiop";

$mail->IsHTML(true); // if you are going to send HTML formatted emails
$mail->SingleTo = true;

$mail->From = "rockyrox7777@gmail.com";
$mail->FromName = "Rohit Patil";
	
$mail->addAddress("rockyrox7777@gmail.com","User 2");
	// send e-mail to ...
	//$to=$email;

$mail->Subject = "Your confirmation link here";
$mail->Body = "Your Confirmation link \r\n";
$mail->Body = "Click on this link to activate your account \r\n";
$mail->Body = "http://localhost/MainProject/run/confirm2.php?passkey=$confirm_code";

// send email
//$mail->mail($mail->addAddress,$mail->Subject,$mail->Body,$mail->From);
//


// if not found 
/*else 
{
echo "Not found your email in our database";
}
*/
// if your email succesfully sent

if($mail->Send())
{
echo "Your Confirmation link Has Been Sent To Your Email Address.";
}
else {
echo "Cannot send Confirmation link to your e-mail address";
}


/*
if ($_POST ['email_address']="") {
    echo "<span style='color: #ff0000;'>"."	Not found your email in our database"."</span>";
        }
        
    //If the message is sent successfully, display success message otherwise display an error message.
    if($result)
    //if($count==1)
	{
	if(!$mail->Send())
    echo "Message was not sent <br />PHPMailer Error: " . $mail->ErrorInfo;

	else
    echo "Your Password and Email-Id has been sent has been sent to your registered Email-ID";
        
    }
        else
        {
        if($_POST['email_address']!="")
        echo "<span style='color: #ff0000;'> Cannot send password to your e-mail address.Problem with sending mail...</span>";
    }
*/
// mysql_close($connection); 
?>
</div>
</body>
</html>