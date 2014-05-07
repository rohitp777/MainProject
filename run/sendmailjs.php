<?php
//require('connect.php');
//include('lockjs.php');

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
			<!--marquee><b>Welcome,<?php /*echo $login_session=$row['fname'];
echo ". ";
echo $login_session=$row['sname'];
*/
	  ?></b></marquee-->
			<ul class="navigation">
				<li class="active">
					<!--a href="welcomejs.php">Home</a>
				</li>
				<li>
					<a href="#">My Details</a>
					<div>
						<a href="http://localhost/MainProject/run/jsdetail.php">MY ACCOUNT DETAILS</a>
						<a href="http://localhost/MainProject/run/forgotjs.php">UPDATE PASSWORD</a>
					</div>
				</li>
				<li>
					<a href="#">Resume & Applications</a>
					<div>
						<a href="http://localhost/MainProject/run/resumejs.php">REGISTER CV/RESUME</a>
						
					</div>
				</li>
				<li>
					<a href="#">Job Search</a>
					<div>
						<a href="http://localhost/MainProject/run/jobsearchjs.php">JOB SEARCH BY KEYWORDS</a>
						<a href="http://localhost/MainProject/run/jobsearchsector.php">JOB SEARCH BY CATEGORY</a>
					</div>
				</li>
				<li>
					<a href="careerjs.php">Career Advice</a>
				
				</li>
				<li>
					<a href="servicejs.php">Services</a>
				</li>
				<li>
					<a href="logoutjs.php">Log Out</a-->
				</li>
			</ul>
		</div>
	</div>
	<div id="contents">
		<div class="clearfix">
		<h1>Notification of Your Password Update</h3>
			<div class="frame2">
				<div class="box">
					<img src="images/luck.jpg" alt="Img" height="298" width="924">
				</div>
			</div>
			<p>
				
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

//$mail->Body = "Hi, Your Email-Id used for registration is: "."$to"." <br/>Your Password is: "."$password"." ";
$mail->Body = "Hi, Your Email-Id used for registration is: "."$to"." <br/>Click on this link to change your password: <br/> "."http://localhost/MainProject/run/passwordjs.php"."" ; 	


		
		
		
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
    echo "Your Email-Id and Password Change settings has been sent to your registered Email-ID";
        
    }
        else
        {
        if($_POST['email_address']!="")
        echo "<span style='color: #ff0000;'> Cannot send password to your e-mail address.Problem with sending mail...</span>";
    }

?>



</p>
<!--form action="welcomejs.php" method="POST">
		
		<input type="submit" name="submit" value="Home Page">
		</form-->
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