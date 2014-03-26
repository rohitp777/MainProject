<?php
session_start();
if (!isset($_SESSION['username'])){
header("location:jsreg.php");
//header("location:logincheck.php");
}
?>

<html>
<body>
Login Successful
</body>
</html>

<?php
session_destroy ();
?>