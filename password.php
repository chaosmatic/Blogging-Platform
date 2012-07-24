<?php 
session_start();

require_once('database.php');
require_once('PasswordHash.php');
require_once('head.php');
$dbh = new databaseaccess;
$hasher = new PasswordHash(8, false);
if($_SESSION['check']){
	$password = $_POST["password"];
	$passwordnew = $_POST["passwordnew"];
	$passwordnew1 = $_POST["passwordnew1"];
	$dbh->gethash();
	$dbh->displayposts(0, 1024); //probably shouldn't hardcode this
	$hash = $dbh->hash;
	$check = $hasher->CheckPassword($password, $hash);
	if ($check) {
		if ($passwordnew1 == $passwordnew){
			$newhash = $hasher->HashPassword($passwordnew);
			if (strlen($hash) < 20){
				echo "Failed to hash new password";
			}else{
				$dbh->writehash($newhash);
				echo "Password Updated";
			}
		}
	}else{
		echo "Password incorrect";
	}
}else{
	echo "please login";
}
require_once('foot.php');
?>
