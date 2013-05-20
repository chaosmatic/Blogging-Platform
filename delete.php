<?php 
session_start();
require_once('user.php');
require_once('database.php');
require_once('head.php');
$dbh = new databaseaccess;
$user = new user($dbh);
$id = $_POST["id"];
$id = filter_var($id, FILTER_SANITIZE_NUMBER_INT);
if (filter_var($id,FILTER_VALIDATE_INT)&& $id>-1) {
	if(!$user->checkLoggedIn()){
		echo "<a href='login.php'>Please Login</a>";
	}else{
		$dbh->delete($id);
		echo "Post Deleted<br>";
		echo "<a href='crud.php'>Back</a>";
	}
}else{
	echo "invalid id";
}	
require_once('foot.php');
?>
