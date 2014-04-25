<?php
include('connect.php');
session_start();
$user_check=$_SESSION['login_user'];

//$ses_sql=mysql_query("select username,id,fname,sname from jobberland_employee where username='$user_check' ");

$ses_sql=mysql_query("select * from jobberland_employee where username='$user_check' ");

$row=mysql_fetch_array($ses_sql);

$login_session=$row['email_address'];
$login_session=$row['username'];
$login_session=$row['passwd'];
$login_session=$row['id'];
$login_session=$row['fname'];
$login_session=$row['sname'];
$login_session=$row['address'];
$login_session=$row['address2'];
$login_session=$row['city'];
$login_session=$row['state_province'];
$login_session=$row['country'];
$login_session=$row['post_code'];
$login_session=$row['phone_number'];
$login_session=$row['fk_career_degree_id'];
$login_session=$row['date_register'];


if(!isset($login_session))
{
header("Location: loginjs.php");
}
?>