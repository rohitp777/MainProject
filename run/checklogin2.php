<?php session_start();
echo "<html>";
echo "<head>";
echo "<title>Rohit Patil Job Site</title>";
echo "<link rel='stylesheet' type='text/css' href='style.css' />";
echo "</head>";
echo "<body>";
echo "<div class='register-form'>";
//<?php
//session_start();
require('connect.php');


// username and password sent from form 
$myusername=$_POST['username']; 
$mypassword=$_POST['passwd']; 

// To protect MySQL injection (more detail about MySQL injection)
$encrypted_mypassword=md5($mypassword);

$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);

$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);
//$sql="SELECT * FROM jobberland_employer WHERE username='$myusername' and passwd='$mypassword'";
$sql="SELECT * FROM jobberland_employer WHERE username='$myusername' and passwd='$encrypted_mypassword'";

$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){

// Register $myusername, $mypassword and redirect to file "logincheck2.php"
$_SESSION['username'] = $myusername;
$_SESSION['passwd'] = $mypassword;

header("location:logincheck2.php");
}
else {
echo "Wrong Username or Password";
}

echo "</div>";
echo "</body>";
echo "</html>";
//session_destroy();
?>