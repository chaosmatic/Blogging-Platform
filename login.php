<?php
require_once('user.php');
session_start();
require_once('head.php');
If($_SESSION['user']->checkLoggedin()){
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
