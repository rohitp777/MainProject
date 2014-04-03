<?php

include('lockjs.php');


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Rohit Patil Job Site</title>
<link rel="stylesheet" type="text/css" href="style.css" />
			<!-- Start css3menu.com HEAD section -->
		<link rel="stylesheet" href="homepagejs_files/css3menu1/style.css" type="text/css" /><style type="text/css">._css3m{display:none}</style>
		<!-- End css3menu.com HEAD section -->

</head>

<body>
<b>Welcome,<?php echo $login_session=$row['fname'];
echo ". ";
echo $login_session=$row['sname'];
/*
echo "<br>";
echo "User-ID:";
echo $login_session=$row['id'];
*/
	  ?></b> <br>																								 

<!-- Start css3menu.com BODY section -->
<ul id="css3menu1" class="topmenu">
	<li class="topmenu"><a href="#" style="height:16px;line-height:16px;"><span>My Details</span></a>
	<ul>
		<li class="subfirst"><a href="#">My Account Details</a></li>
		<li><a href="#">Update Password</a></li>
		<li class="sublast"><a href="#">My Job Applications</a></li>
	</ul></li>
	<li class="topmenu"><a href="#" style="height:16px;line-height:16px;"><span>CVs &amp; Applications</span></a>
	<ul>
		<li class="subfirst"><a href="http://localhost/MainProject/run/resumejs.php">Register New CV/Resume</a></li>
		<li><a href="#">My Saved Resume</a></li>
		<li class="sublast"><a href="#">My Covering Letter</a></li>
	</ul></li>
	<li class="topmenu"><a href="#" style="height:16px;line-height:16px;">Jobs Search</a></li>
	<li class="topmenu"><a href="#" style="height:16px;line-height:16px;">Career Advice</a></li>
	<li class="topmenu"><a href="#" style="height:16px;line-height:16px;">Services</a></li>
</ul><p class="_css3m"><a href="http://css3menu.com/">HTML Menu Code Generator </a> by Css3Menu.com</p>
<!-- End css3menu.com BODY section -->
<!--b><p align="right">Welcome,<//?php echo $login_session; ?></p> </b>
																								 
<b><p align="right"><a href="logoutjs.php">Sign Out</a></p></b-->
<b><p align="right"><a href="logoutjs.php">Sign Out</a></p></b>

</body>
</html>
