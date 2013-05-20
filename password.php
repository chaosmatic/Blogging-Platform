<?php 
session_start();

require_once('user.php');
require_once('database.php');
require_once('head.php');


$dbh = new databaseaccess;
$user = new user($dbh);

if($user->checkLoggedIn()){
	$password = $_POST["password"];
	$passwordnew = $_POST["passwordnew"];
	$passwordnew1 = $_POST["passwordnew1"];

	$user->checkPassword($password);

	if ($user->checkLoggedIn()) {
		echo $user->changePassword($passwordnew,$passwordnew1);
		echo "<a href='crud.php'>Back</a>";
	}else{
		echo "Password incorrect";
	}
}else{
	echo "<a href='login.php'>Please Login</a>";
}
require_once('foot.php');
?>
