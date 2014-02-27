<?php
session_start();
include "connect.php"; //connects to the database
/*require 'class.phpmailer.php';
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

//$mail->addCC("user.3@ymail.com","User 3");
//$mail->addBCC("user.4@in.com","User 4");

$mail->Subject = "Testing PHPMailer with localhost";
$mail->Body = "Hi,<br /><br />This system is working perfectly.";
*/

//include "connect.php"; //connects to the database
if (isset($_POST['username']))
    $username = $_POST['username'];
	//$email=$_POST ['email'];
    $query="select * from user where username='$username'";
    $result   = mysql_query($query);
    $count=mysql_num_rows($result);
 if($count==1)
    {
        $rows=mysql_fetch_array($result);
        $pass  =  $rows['password'];//FETCHING PASS
        //echo "your pass is ::".($pass)."";
        $to = $rows['email'];
        //echo "your email is ::".$email."";
		
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

//$mail->addCC("user.3@ymail.com","User 3");
//$mail->addBCC("user.4@in.com","User 4");

$mail->Subject = "Rohit Patil JobSite Notifications";
$mail->Body = "Hi, Your Email-Id used for registration is: "."$to"." <br/>Your Password is: "."$pass"." ";

		
		
		
		//else {
    if ($_POST ['email']="") {
    echo "<span style='color: #ff0000;'>"."	Not found your email in our database"."</span>";
        }
        
    //If the message is sent successfully, display sucess message otherwise display an error message.
    if($count==1)
    //if($count==1)
	{
	if(!$mail->Send())
    echo "Message was not sent <br />PHPMailer Error: " . $mail->ErrorInfo;
else
    echo "Your Password and Email-Id has been sent";
        //echo "<span style='color: #ff0000;'> Your Password Has Been Sent To Your Email Address.</span>";
    }
        else
        {
        if($_POST['email']!="")
        echo "<span style='color: #ff0000;'> Cannot send password to your e-mail address.Problem with sending mail...</span>";
    }

	
	
/*if(!$mail->Send())
    echo "Message was not sent <br />PHPMailer Error: " . $mail->ErrorInfo;
else
    echo "Message has been sent";
	*/
?>