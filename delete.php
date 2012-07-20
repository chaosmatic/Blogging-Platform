<?php 
require_once('database.php');
require_once('head.php');
$dbh = new databaseaccess;
$id = $_POST["id"];
if(NULL === $id){
	echo "Please Login";
}else{
	$dbh->delete($id);
	echo "Post Deleted";
}
require_once('foot.php');
?>
