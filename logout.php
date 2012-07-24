<?php
require_once('head.php');
session_start();
session_destroy();
echo "successfully logged out";
require_once('foot.php');
?>