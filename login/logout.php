<?php
session_start();
$_SESSION['login'] = 0;
session_unset();
session_destroy();

header("location:../index.php");
exit();
?>