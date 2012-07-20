<?php 
require_once('database.php');
require_once('PasswordHash.php');
require_once('head.php');
$dbh = new databaseaccess;
$hasher = new PasswordHash(8, false);
$password = $_POST["password"];
$dbh->gethash();
$dbh->displayposts(0, 1024); //probably shouldn't hardcode this
$hash = $dbh->hash;
$check = $hasher->CheckPassword($password, $hash);
if ($check) {
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
?>
<input type="submit" value="Delete" name="submit">
</form>
<h1>Update Post</h1>
<form method="post" action="update.php">
<?php
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
?>
<input type="submit" value="Update" name="submit">
</form>
<?php
} else {
?>
Password incorrect<br>
<?
}
require_once('foot.php');
?>



