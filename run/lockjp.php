<?php
include('connect.php');
session_start();
$user_check=$_SESSION['login_user'];

$ses_sql=mysql_query("select username from jobberland_employer where username='$user_check' ");

$row=mysql_fetch_array($ses_sql);

$login_session=$row['username'];

if(!isset($login_session))
{
header("Location: loginjp.php");
}
?>