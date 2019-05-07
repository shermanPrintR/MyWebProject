<?php
session_start();
$_SESSION['username'] = [];
$_SESSION['password'] = [];
$_SESSION['name'] = [];
session_destroy();
header("location:../web/login.php");
