<?php

include("connect.php");
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST")
{
// username and password sent from form 

$myusername=addslashes($_POST['username']); 
$mypassword=addslashes($_POST['passwd']);

$encrypted_mypassword=md5($mypassword); 


$sql="SELECT id FROM jobberland_employee WHERE username='$myusername' and passwd='$encrypted_mypassword'";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
//$active=$row['active'];

$count=mysql_num_rows($result);


// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1)
{
//session_register("myusername");
$_SESSION['login_user']=$myusername;

header("location: welcomejs.php");
}
else 
{
$error="Your Login Name or Password is invalid";
}
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Login Page</title>

<style type="text/css">
body
{
font-family:Arial, Helvetica, sans-serif;
font-size:14px;

}
label
{
font-weight:bold;

width:100px;
font-size:14px;

}
.box
{
border:#666666 solid 1px;

}
</style>
</head>
<body bgcolor="#FFFFFF">
<div><h3>Tutorial link <a href="">Click Here</a></h3></div>

<div style="font-weight:bold; margin-bottom:10px">Demo Login Details -> Username : <a href="#">test</a>  Password : <a href="#">test</a></div>

<div align="center">
<div style="width:300px; border: solid 1px #333333; " align="left">
<div style="background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>


<div style="margin:30px">

<form action="" method="post">
<label>UserName  :</label><input type="text" name="username" class="box"/><br /><br />
<label>Password  :</label><input type="password" name="password" class="box" /><br/><br />
<input type="submit" value=" Submit "/><br />

</form>
<div style="font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
</div>
</div>
</div>

</body>
</html-->

<!--html>
<head>
<title>Rohit Patil Job Site</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<div class="register-form">
<form action="" method="post">
<h3>Login here as Job seeker</h3>
Username:<input type="text" name="username" id="myusername"> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<br>
Password:<input type="password" name="passwd" id="mypassword">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<br>
<input type="submit" value="Login"></form><form action="forgotjs.php" method="post"><input type="submit" value="Forgot Password"></form>

<br>

<form action="" method="post">
<h3>Login here as Job Employer</h3>
Username:<input type="text" name="username" id="myusername"> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<br>
Password:<input type="password" name="passwd" id="mypassword">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<br>
<input type="submit" value="Login"></form><form action="forgotjp.php" method="post"><input type="submit" value="Forgot Password"></form>

<br>

<form action="register.php" method="post">
New User's Register Here<br>
<input type="submit" value="Continue to Register"> 
</form>
</div>
</body>
</html-->
