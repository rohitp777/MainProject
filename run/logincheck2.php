<?php
session_start();
if (!isset($_SESSION['username'])){
header("location:jpreg.php");
//header("location:logincheck2.php");
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