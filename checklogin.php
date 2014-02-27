<?php
session_start();
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password="hatsoff777"; // Mysql password 
$db_name="jobsite"; // Database name 
$tbl_name="jobberland_employee"; // Table name 

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// username and password sent from form 
$myusername=$_POST['username']; 
$mypassword=$_POST['passwd']; 

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);
$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and passwd='$mypassword'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"
$_SESSION['username'] = $myusername;
$_SESSION['passwd'] = $mypassword;

header("location:logincheck.php");
}
else {
echo "Wrong Username or Password";
}
session_destroy();
?>