<?php 
session_start();
$time = microtime(true); 
require_once('database.php');
require_once('user.php');
require_once('head.php');
$dbh = new databaseaccess;
$user = new user($dbh);
$dbh->count();
$amountofposts = (int) $dbh->amount; //needed to change, didn't like it as a string, which is what $dbh->amount is
$dbh->displayposts(0, $amountofposts);
if(!$user->checkLoggedIn()){
	$password = $_POST["password"];
	$user->checkPassword($password);
}
if ($user->checkLoggedIn()) {
	?>
	<h1>New Post</h1>
	<form method="post" action="submit.php">
	Title:<input type="text" size="50" maxlength="50" name="title"><br />
	Text:<br><textarea cols="87" rows="35" wrap="soft" name="text"></textarea><br />
	<input type="submit" value="Post" name="submit">
	</form>
	<h1>Delete Post</h1>
	<form method="post" action="delete.php">
	<?php
	if (null != $dbh->result) {
		foreach ($dbh->result as $v1) {
			foreach ($v1 as  $value => $v2) {
				if ($value == "id"){
					echo "<input type='radio' name='id' value='".$v2."'><br>";
				} 
				if ($value == "title"){
					echo $v2;
				}
			}
		}
	}else{
		echo "No posts<br>";
	}	
	?>
	<input type="submit" value="Delete" name="submit">
	</form>
	<h1>Update Post</h1>
	<form method="post" action="update.php">
	<?php
	if (null != $dbh->result) {
		foreach ($dbh->result as $v1) {
			foreach ($v1 as  $value => $v2) {
				if ($value == "id"){
					echo "<input type='radio' name='id' value='".$v2."'><br>";
				} 
				if ($value == "title"){
					echo $v2;
				}
			}
		}
	}else{
		echo "No posts<br>";
	}	
	?>
	<input type="submit" value="Update" name="submit">
	</form>
	<h1>Update Password</h1>
	<form method="post" action="password.php">
	Password:<input type="password" size="50" maxlength="50" name="password"><br>
	New Password:<input type="password" size="50" maxlength="50" name="passwordnew"><br>
	New Password(again):<input type="password" size="50" maxlength="50" name="passwordnew1"><br>
	<input type="submit" value="Change password" name="submit">
	</form>
	<?php
	echo "<a href='logout.php'>Logout</a>";
} else {
	?>
	Password incorrect<br>
	<?
}
require_once('foot.php');
echo "<!-PHP executed in: ".(microtime(true) - $time)."s-->"; //debug only
?>



