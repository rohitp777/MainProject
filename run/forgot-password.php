<?php session_start();
//require 'class.phpmailer.php';
/*include "connect.php"; //connects to the database
if (isset($_POST['username'])){
    $username = $_POST['username'];
    $query="select * from user where username='$username'";
    $result   = mysql_query($query);
    $count=mysql_num_rows($result);
/*
 if($count==1)
 {
 $rows=mysql_fetch_array($result);
        $pass  =  $rows['password'];//FETCHING PASS
        //echo "your pass is ::".($pass)."";
        $to = $rows['email'];
        //echo "your email is ::".$email;
		
		
 
//require 'class.phpmailer.php';
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


$mail->Username = "rohitp777@gmail.com";
$mail->Password = "ROHITUNICORN112311";

$mail->IsHTML(true); // if you are going to send HTML formatted emails
$mail->SingleTo = true; // if you want to send a same email to multiple users. multiple emails will be sent one-by-one.

$mail->From = "rohitp777@gmail.com";
$mail->FromName = "Rohit Patil";

$mail->addAddress("rohit_patil23111988@yahoo.co.in","User 1");
$mail->addAddress("rohitp777@gmail.com","User 2");

//$mail->addCC("user.3@ymail.com","User 3");
//$mail->addBCC("user.4@in.com","User 4");

$mail->Subject = "Testing PHPMailer with localhost";
$mail->Body = "Hi,<br /><br />This system is working perfectly.";

}
/*if(!$mail->Send())
    echo "Message was not sent <br />PHPMailer Error: " . $mail->ErrorInfo;
else
    echo "Message has been sent";
*/	
	
    // If the count is equal to one, we will send message other wise display an error message.
  /*  if($count==1)
    {
        $rows=mysql_fetch_array($result);
        $pass  =  $rows['password'];//FETCHING PASS
        //echo "your pass is ::".($pass)."";
        $to = $rows['email'];
        //echo "your email is ::".$email;
        //Details for sending E-mail
        $from = "Rohit Patil";
        $url = "http://localhost/notify/forgot-password.php";
        $body  =  "Coding Cyber password recovery Script
        -----------------------------------------------
        Url : $url;
        email Details is : $to;
        Here is your password  : $pass;
        Sincerely,
        Coding Cyber";
        $from = "rohitp777@gmail.com";
        $subject = "Password recovered";
        $headers1 = "From: $from\n";
        $headers1 .= "Content-type: text/html;charset=iso-8859-1\r\n";
        $headers1 .= "X-Priority: 1\r\n";
        $headers1 .= "X-MSMail-Priority: High\r\n";
        $headers1 .= "X-Mailer: Just My Server\r\n";
        $sentmail = mail ( $to, $subject, $body, $headers1 );
    } 
	
	else {
    if ($_POST ['email'] != "") {
    echo "<span style='color: #ff0000;'> Not found your email in our database</span>";
        }
        }
    //If the message is sent successfully, display sucess message otherwise display an error message.
    if($sentmail==1)
    //if($count==1)
	{
        echo "<span style='color: #ff0000;'> Your Password Has Been Sent To Your Email Address.</span>";
    }
        else
        {
        if($_POST['email']!="")
        echo "<span style='color: #ff0000;'> Cannot send password to your e-mail address.Problem with sending mail...</span>";
    }
}*/
?>
 <!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
<title>CodingCyber - Simple Script to send Forgotten password</title>
</head>
<body>


<div class="register-form">
<?php
	if(isset($msg) & !empty($msg)){
		echo $msg;
	}
 ?>
<h1>Forgot Password</h1>
<form action="http://localhost/notify/send-email.php" method="POST">
    <p><label>User Name : </label>
	<input id="username" type="text" name="username" placeholder="username" /></p>
 
    <input class="btn register" type="submit" name="submit" value="Submit" />
    </form>
</div>

</body>
</html>