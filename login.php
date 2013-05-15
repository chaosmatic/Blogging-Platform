<?php

session_start();
require_once('user.php');
require_once('head.php');
$user = new user($dbh);
If($user->checkLoggedin()){
	header('Location: crud.php');
    exit();
}
?>
<form method="post" action="crud.php">
Password:<input type="password" size="50" maxlength="50" name="password"><br />
<input type="submit" value="submit" name="submit">
</form>
<?
require_once('foot.php');
