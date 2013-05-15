<?php 
session_start();

require_once('database.php');
require_once('user.php');
require_once('head.php');

$dbh = new databaseaccess;
$user = new user($dbh);

if(!$user->checkLoggedIn()){
	echo "Please Login";
}else{
	$id = $_SESSION["id"];
	if (get_magic_quotes_gpc()){  
	 	$title = stripslashes($_POST["title"]);
		$text = stripslashes($_POST["text"]);
	}else{ 	
		$title = $_POST["title"];
		$text = $_POST["text"];
	}
	$dbh->update($title,$text,$id);
	echo "Post Updated";
}
require_once('foot.php');
?>
