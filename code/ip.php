<?php
echo "<title>Your Ip</title> <h1> Your IP Address is: ";
$ip =  filter_var($_SERVER['REMOTE_ADDR'],FILTER_VALIDATE_IP);
echo $ip;
echo " </h1>";
?>
