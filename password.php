<?php 
require_once('user.php');
session_start();

require_once('database.php');

require_once('head.php');
$dbh = new databaseaccess;
if($_SESSION['user']->checkLoggedIn()){
	$password = $_POST["password"];
	$passwordnew = $_POST["passwordnew"];
	$passwordnew1 = $_POST["passwordnew1"];

	$_SESSION['user']->checkPassword($password);

	if ($_SESSION['user']->checkLoggedIn()) {
		echo $_SESSION['user']->changePassword($passwordnew,$passwordnew1);
	}else{
		echo "Password incorrect";
	}
}else{
	echo "please login";
}
require_once('foot.php');
?>
