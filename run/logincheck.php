<?php
session_start();
if (!isset($_SESSION['username'])){
header("location:jsreg.php");
}
?>

<html>
<body>
Login Successful
</body>
</html>