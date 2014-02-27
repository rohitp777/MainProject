<html>
<body>
<h3>Job Seeker Usercheck</h3>
<form action="jsusercheck.php" method="post">
<?php
if (isset($_POST['user']))
{
$con=mysqli_connect("localhost","root","hatsoff777","jobsite");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
include('js.php');
$db = new db();
$username = mysql_real_escape_string($_POST['user']);
$sql="SELECT count(*) as num FROM jobberland_employee WHERE username=" . $username;
$row=$db->select_single($sql);
if($row['num']==0)
{
echo 'Username <em>' . $username. '</em> is avaiable';
}
else
{
echo 'Username <em>' .$username.'</em> is already taken';
}
}
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