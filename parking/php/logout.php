<?php
session_start();
unset($_SESSION['user_name']);
session_destroy();

header("Location:../base.php");
exit;
?>
