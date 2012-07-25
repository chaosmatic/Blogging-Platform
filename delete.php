<?php 
session_start();

require_once('database.php');
require_once('head.php');
$dbh = new databaseaccess;
$id = $_POST["id"];
$id = filter_var($id, FILTER_SANITIZE_NUMBER_INT);
if (filter_var($id,FILTER_VALIDATE_INT)&& $id>-1) {
	if(!$_SESSION['check']){
		echo "Please Login";
	}else{
		$dbh->delete($id);
		echo "Post Deleted";
	}
}else{
	echo "invalid id";
}	
require_once('foot.php');
?>
