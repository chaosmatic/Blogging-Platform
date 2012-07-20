<?php 
require_once('database.php');
require_once('head.php');
$dbh = new databaseaccess;
$id = $_POST["id"];
$dbh->delete($id);
echo "Post Deleted<br>";
require_once('foot.php');
?>
