<?php
	
	require('connect.php');
	include('lockjp.php');
    // If the values are posted, insert them into the database.
    if (isset($_POST['username']) && isset($_POST['passwd']))
  
		{
		
		$username=$_POST['username'];
		$password=md5($_POST['passwd']);
	
        $sql = "UPDATE jobberland_employer SET passwd=md5('$_POST[passwd]') WHERE username='$username'";
			
	 if( mysql_query($sql))
	   {
        $msg = "<h2>"."Congrats!!! Your password has been Updated."."</h2>";
       }
	
	   
    }
	
  mysql_close($connection);      
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
					<?php
if(isset($msg) & !empty($msg)){
		echo $msg;
	}
 ?>
			<h1>Update Your Password</h3>
		<form action="passwordjp.php" method="POST">
			<div class="frame2">
				<div class="box">
					<img src="images/update.jpg" alt="Img" height="298" width="924">
				</div>
			</div>
			<p>

			 <b>Enter Username:<input type="text" name="username" autocomplete="off" required/></b><br>

			<b>Enter New Password:<input type="password" name ="passwd" autocomplete="off" required/></b><br>
   <input type="submit" class="confirmpassword" value="Update Password">
	</form>

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