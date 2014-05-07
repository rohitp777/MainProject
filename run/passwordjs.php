<?php
	
	require('connect.php');
	//include('lockjs.php');
    // If the values are posted, insert them into the database.
    if (isset($_POST['username']) && isset($_POST['passwd']))
  
		{
		
		$username=$_POST['username'];
		$password=md5($_POST['passwd']);
		
        $sql = "UPDATE jobberland_employee SET passwd=md5('$_POST[passwd]') WHERE username='$username'";
			
	 if( mysql_query($sql))
	   {
        $msg = "<marquee>"."<h2>"."Congrats!!! Your password has been Updated."."</h2>"."</marquee>";
       }
	
	   
    }
	
  mysql_close($connection);      
 ?>
 
 <DOCTYPE html>
<!--html>
<head>
<title>Rohit Patil Job Site</title>
<link rel="stylesheet" type="text/css" href="styleupdate.css" />
</head>
<body>
<!-- Form for logging in the users -->

<?php
/*if(isset($msg) & !empty($msg)){
		echo $msg;
	}
	*/
 ?>
<!--h3>Update Password:</h3>
<form action="passwordjs.php" method="POST">
<div class="p">
Enter Username:<input type="text" name="username" autocomplete="off" required/><br>

&emsp;&emsp;Enter New Password:<input type="password" name ="passwd" autocomplete="off" required/>
<br>
<input type="submit" class="confirmpassword" value="Confirm New Password">
</div>
</form>
</body>
</html-->



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
					<?php
if(isset($msg) & !empty($msg)){
		echo $msg;
	}
 ?>
			<h1>Update Your Password</h3>
		<form action="passwordjs.php" method="POST">
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
<form action="loginseeker.html" method="POST">
		
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