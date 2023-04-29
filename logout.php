<?php
include_once('webconfig.php');
session_destroy();
header("location:adminlogin.php");
exit;
?>