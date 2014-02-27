<?php
session_start();
if (!isset($_SESSION['username'])){
header("location:jpreg.php");
}
?>

<html>
<body>
Login Successful
</body>
</html>