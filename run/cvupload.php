<?php
include('lockjs.php');
?>
<html>
<head>
<title>Rohit Patil Job Site</title>
<link rel="stylesheet" type="text/css" href="css/styleregform.css" />
<style type="text/css">
body {
	font-family:Arial, Helvetica, sans-serif
}
#availability_status {
	font-size:11px;
	margin-left:10px;
}
#email_status {
	font-size:11px;
	margin-left:10px;
}
input.form_element {
	width: 221px;
	background: transparent url('bg.jpg') no-repeat;
	color : #747862;
	height:20px;
	border:0;
	padding:4px 8px;
	margin-bottom:0px;
}
label {
	width: 125px;
	float: left;
	text-align: left;
	margin-right: 0.5em;
	display: block;
}
.style_form {
	margin:3px;
}
#content {
	margin-left: auto;
	margin-right: auto;
	width: 600px;
	margin-top:200px;
}
#submit_btn {
	margin-left:70px;
	height:30px;
	width: 250px;
}
</style>

</head>
<body>
		     <form action="upload_ac.php" method="post" enctype="multipart/form-data" name="form1" id="form1" class="register">
			 <fieldset class="row1">
            <legend>Resume Attachment</legend>
			<p>
			<label for="ufile"><strong>Browse to Upload Resume:</strong></label>
			</p>
			
			<!--label for="ufile">Select File:</label-->
			</fieldset>
			<fieldset class="row1">
		<div>
			
			<input name="ufile" type="file" id="submit_btn" size="50" />
			<p>
			<input type="submit" name="Submit" value="Upload Resume &raquo;" id="submit_btn" class="button"/>
			</p>
		</form>
			<form action="welcomejs.php" method="POST">
		<p>
		<input type="submit" name="submit" value="Home Page &raquo;" id="submit_btn" class="button">
		</p>
		</form>
		
			<!--label for="ufile"><strong>Browse to Upload Resume:</strong></label><br>
			<label for="ufile">Select File:</label>
			<input name="ufile" type="file" id="ufile" size="50" /-->
			<!--input type="submit" value="Submit"-->
		 <fieldset class="row1">
		<form action="logoutjs.php" method="POST">	
		<p>
		<input type="submit" value="Log Out &raquo;" id="submit_btn" class="button">
		</p>
		</form>	
		</div>
		</fieldset>
		

</body>
</html>