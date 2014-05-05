<?php

include("connect.php");
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST")
{
// username and password sent from form 

$myusername=addslashes($_POST['username']); 
$mypassword=addslashes($_POST['passwd']);

$encrypted_mypassword=md5($mypassword); 


$sql="SELECT id FROM jobberland_employer WHERE username='$myusername' and passwd='$encrypted_mypassword'";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
//$active=$row['active'];

$count=mysql_num_rows($result);


// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1)
{
//session_register("myusername");
$_SESSION['login_user']=$myusername;

header("location: welcomejp.php");
}
else 
{
$msg= "Your Login Name or Password is Invalid";
}
}
?>


<DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Rohit Patil Job Site</title>
<link rel="stylesheet" type="text/css" href="styleerror.css" />

</head>
<body>
<!-- Form for logging in the users -->

<?php
if(isset($msg) & !empty($msg)){
		echo $msg;
	}
 ?> 
 </body>
 </div>
 </div>
 </html>