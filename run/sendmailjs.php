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

//include "connect.php"; //connects to the database
if (isset($_POST['username']))
    $username = $_POST['username'];
	//$email=$_POST ['email'];
    $query="select * from jobberland_employee where username='$username'";
    $result   = mysql_query($query);
    $count=mysql_num_rows($result);
 if($count==1)
    {
        $rows=mysql_fetch_array($result);
        $password  =  $rows['passwd'];//FETCHING PASS
      
        $to = $rows['email_address'];
        
		
		}

require 'class.phpmailer.php';
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Mailer = 'smtp';
$mail->SMTPAuth = true;
$mail->Host = 'smtp.gmail.com'; // "ssl://smtp.gmail.com" didn't worked
$mail->Port = 465;
$mail->SMTPSecure = 'ssl';
// or try these settings (worked on XAMPP and WAMP):
// $mail->Port = 587;
// $mail->SMTPSecure = 'tls';


$mail->Username = "rockyrox7777@gmail.com";
$mail->Password = "uiopuiop";

$mail->IsHTML(true); // if you are going to send HTML formatted emails
$mail->SingleTo = true; // if you want to send a same email to multiple users. multiple emails will be sent one-by-one.

$mail->From = "rockyrox7777@gmail.com";
$mail->FromName = "Rohit Patil";

$mail->addAddress("rohit_patil23111988@yahoo.co.in","User 1");
$mail->addAddress("rockyrox7777@gmail.com","User 2");

$mail->Subject = "Rohit Patil JobSite Notifications";
$mail->Body = "Hi, Your Email-Id used for registration is: "."$to"." <br/>Your Password is: "."$password"." ";

		
		
		
		//else {
    if ($_POST ['email_address']="") {
    echo "<span style='color: #ff0000;'>"."	Not found your email in our database"."</span>";
        }
        
    //If the message is sent successfully, display success message otherwise display an error message.
    if($count==1)
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

?>
</div>
</body>
</html>