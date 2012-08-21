<?php 
session_start();

require_once('database.php');
require_once('head.php');
$dbh = new databaseaccess;
if(!$_SESSION['check']){
	echo "Please Login";
}else{
	$id = $_SESSION["id"];
	$text = $_POST["text"];
	$title = $_POST["title"];
	$dbh->update($title,$text,$id);
	echo "Post Updated";
}
require_once('foot.php');
?>
