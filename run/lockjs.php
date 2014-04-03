<?php
include('connect.php');
session_start();
$user_check=$_SESSION['login_user'];

$ses_sql=mysql_query("select username,id,fname,sname from jobberland_employee where username='$user_check' ");

$row=mysql_fetch_array($ses_sql);

$login_session=$row['username'];
$login_session=$row['id'];
$login_session=$row['fname'];
$login_session=$row['sname'];

if(!isset($login_session))
{
header("Location: loginjs.php");
}
?>