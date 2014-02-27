<?php session_start();

?>
 <!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
<title>Rohit Patil Job Site</title>
</head>
<body>


<div class="register-form">
<?php
	if(isset($msg) & !empty($msg)){
		echo $msg;
	}
 ?>
<h1>Forgot Password</h1>
<form action="http://localhost/MainProject/run/sendmailjp.php" method="POST">
    <p><label>Enter User Name : </label>
	<input id="username" type="text" name="username"></p>
 
    <input class="btn register" type="submit" name="submit" value="Submit" />
    </form>
</div>

</body>
</html>