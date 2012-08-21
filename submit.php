<?php
session_start();
$time = microtime(true); 
require_once('head.php');
require_once ('database.php');
require_once ('markdown.php');
$title = $_POST["title"];
$text = $_POST["text"];
$dbh = new databaseaccess;
if (strlen($title) > 0 && $_SESSION['check']){
	//$mdtext = Markdown($text);
	$dbh->write($title,$text);
	echo "post submitted";
}elseif(!$_SESSION['check']){
	echo "please login";
}else{
	echo "please have a non-empty title";
}

require_once('foot.php');
echo "PHP executed in: ".(microtime(true) - $time)."s"; //debug only
?>


