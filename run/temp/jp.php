<html>
<body>
<h3>Job Provider Registration</h3>
<form action="jp.php" method="post">
<?php

$con=mysqli_connect("localhost","root","hatsoff777","jobsite");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="INSERT INTO jobberland_employer(company_name,contact_name,site_link,company_desc,email_address,username,passwd,title,fname,sname,
address,address2,city,state_province,
country,post_code,phone_number,job_qty,date_register,actkey)
VALUES
('$_POST[company_name]','$_POST[contact_name]','$_POST[site_link]','$_POST[company_desc]','$_POST[email_address]','$_POST[username]',
'$_POST[passwd]','$_POST[title]','$_POST[fname]','$_POST[sname]','$_POST[address]','$_POST[address2]','$_POST[city]',
'$_POST[state_province]','$_POST[country]','$_POST[post_code]','$_POST[phone_number]','$_POST[job_qty]','$_POST[date_register]','$_POST[actkey]')";
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