<?php
require_once('user.php');
session_start();

require_once('head.php');




$_SESSION['user']->logout();
echo "successfully logged out";
require_once('foot.php');
?>