<?php
session_start();
$time = microtime(true); 
require_once('user.php');
require_once('head.php');
require_once ('database.php');
require_once ('user.php');

if (get_magic_quotes_gpc()){  
 	$title = stripslashes($_POST["title"]);
	$text = stripslashes($_POST["text"]);
}else{ 	
	$title = $_POST["title"];
	$text = $_POST["text"];
}

$dbh = new databaseaccess;
$user = new user($dbh);

if (strlen($title) > 0 && $user->checkLoggedIn()){
	$dbh->write($title,$text);
	echo "post submitted<br>";
	echo "<a href='crud.php'>Back</a>";
}elseif(!$user->checkLoggedIn()){
	echo "<a href='login.php'>Please Login</a>";
}else{
	echo "please have a non-empty title";
}

require_once('foot.php');
echo "PHP executed in: ".(microtime(true) - $time)."s"; //debug only
?>


