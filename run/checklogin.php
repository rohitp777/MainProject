<html>
<head>
<title>Rohit Patil Job Site</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<div class="register-form">
<?php
session_start();
require('connect.php');

// username and password sent from form 
$myusername=$_POST['username']; 
$mypassword=$_POST['passwd']; 

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);
$sql="SELECT * FROM jobberland_employee WHERE username='$myusername' and passwd='$mypassword'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1)
{
// Register $myusername, $mypassword and redirect to file "logincheck.php"
$_SESSION['username'] = $myusername;
$_SESSION['passwd'] = $mypassword;

header("location:logincheck.php");

}
else {
echo "Wrong Username or Password";
}

session_destroy();
?>
</div>
</body>
</html>