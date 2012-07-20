<?php 
require_once('database.php');
require_once('head.php');
$dbh = new databaseaccess;
$id = $_POST["id"];
if(NULL === $id){
	echo "Please Login";
}else{
	$text = $_POST["text"];
	$title = $_POST["title"];
	$dbh->update($title,$text,$id);
	echo "Post Updated";
}
require_once('foot.php');
?>
