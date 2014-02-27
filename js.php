<html>
<body>
<h3>Job Seeker Registration</h3>
<form action="js.php" method="post">
<?php

$con=mysqli_connect("localhost","root","hatsoff777","jobsite");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="INSERT INTO jobberland_employee(email_address,username,passwd,title,fname,sname,address,address2,city,state_province,
country,post_code,phone_number,fk_career_degree_id,actkey)
VALUES
('$_POST[email_address]','$_POST[username]','$_POST[passwd]','$_POST[title]','$_POST[fname]','$_POST[sname]',
'$_POST[address]','$_POST[address2]','$_POST[city]','$_POST[state_province]','$_POST[country]','$_POST[post_code]',
'$_POST[phone_number]','$_POST[fk_career_degree_id]','$_POST[actkey]')";


if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo "1 record added";

mysqli_close($con);

?>
</form>
</body>
</html>