<?php
include('database_connection.php');
//Include The Database Connection File 

if(isset($_POST['username']))//If a username has been submitted 
{
$username = mysql_real_escape_string($_POST['username']);//Some clean up :)

$check_for_username = mysql_query("SELECT id FROM jobberland_tempjp WHERE username='$username'");
//Query to check if username is available or not 

if(mysql_num_rows($check_for_username))
{
echo '1';//If there is a  record match in the Database - Not Available
}
else
{
echo '0';//No Record Found - Username is available 
}

}

//Email address validation
if(isset($_POST['email_address']))//If a username has been submitted 
{
$email = mysql_real_escape_string($_POST['email_address']);//Some clean up :)

$check_for_email = mysql_query("SELECT id FROM jobberland_tempjp WHERE email_address='$email'");
//Query to check if username is available or not 

if(mysql_num_rows($check_for_email))
{
echo '1';//If there is a  record match in the Database - Not Available
}
else
{
echo '0';//No Record Found - Username is available 
}

}

?>