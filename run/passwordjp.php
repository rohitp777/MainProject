<?php
	
	require('connect.php');
    // If the values are posted, insert them into the database.
    if (isset($_POST['username']) && isset($_POST['passwd']))
  
		{
		
		$username=$_POST['username'];
		$password=md5($_POST['passwd']);
	
        $sql = "UPDATE jobberland_employer SET passwd=md5('$_POST[passwd]') WHERE username='$username'";
			
	 if( mysql_query($sql))
	   {
        $msg = "Your password has been changed.";
       }
	
	   
    }
	
  mysql_close($connection);      
 ?>
 
 <DOCTYPE html>
<html>
<head>
<title>Rohit Patil Job Site</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<!-- Form for logging in the users -->
<div class="register-form">
<?php
if(isset($msg) & !empty($msg)){
		echo $msg;
	}
 ?>
<h1>Update Password</h1>
<form action="passwordjp.php" method="POST">
Username:<input type="text" name="username"><br>
Enter New Password:<input type="password" name ="passwd"><br>
<input type="submit" value="Confirm New Password">
</form>
</div>
</body>
</html>