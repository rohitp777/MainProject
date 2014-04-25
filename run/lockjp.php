<?php
include('connect.php');
session_start();
$user_check=$_SESSION['login_user'];

$ses_sql=mysql_query("select * from jobberland_employer where username='$user_check' ");

$row=mysql_fetch_array($ses_sql);

$login_session=$row['company_name'];
$login_session=$row['contact_name'];
$login_session=$row['site_link'];
$login_session=$row['company_desc'];
$login_session=$row['username'];
$login_session=$row['id'];
$login_session=$row['title'];
$login_session=$row['fname'];
$login_session=$row['sname'];
$login_session=$row['address'];
$login_session=$row['address2'];
$login_session=$row['city'];
$login_session=$row['state_province'];
$login_session=$row['country'];
$login_session=$row['post_code'];
$login_session=$row['phone_number'];
$login_session=$row['job_qty'];
$login_session=$row['date_register'];
$login_session=$row['email_address'];

if(!isset($login_session))
{
header("Location: loginjp.php");
}
?>