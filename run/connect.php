<?php
$db_name="jobsite";
$connection = mysql_connect("localhost", "root", "hatsoff777", $db_name);
//$sql=mysql_query($sql);
mysql_select_db($db_name,$connection);
if (!$connection){
    die("Database Connection Failed" . mysql_error());
}
//$select_db = mysql_select_db('user');
if (!$connection){
    die("Database Selection Failed" . mysql_error());
}
?>