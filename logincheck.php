<?php
session_start();
if (!isset($_SESSION['username'])){
header("location:js.html");
}
?>

<html>
<body>
Login Successful
</body>
</html>