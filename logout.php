<?php

session_start();
require_once('user.php');
require_once('head.php');
$user = new user($dbh);



$user->logout();
echo "successfully logged out";
require_once('foot.php');
?>