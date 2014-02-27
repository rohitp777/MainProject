<?php
session_start();
if (!isset($_SESSION['username'])){
header("location:jp.html");
}
?>

<html>
<body>
Login Successful
</body>
</html>