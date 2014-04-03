<?php
include('lockjs.php');
?>
<html>
<head>
<title>Rohit Patil Job Site</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<div class="register-form">
			<form action="upload_ac.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
			<label for="ufile"><strong>Browse to Upload Resume:</strong></label><br>
			<label for="ufile">Select File:</label>
			<input name="ufile" type="file" id="ufile" size="50" />
			<input type="submit" name="Submit" value="Upload Resume" />

</div>
</body>
</html>