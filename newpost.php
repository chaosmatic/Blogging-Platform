<?php //this is ot a proper security implementation. I'm just getting used to phpass. I'll fix this later
require_once('PasswordHash.php');
require_once('head.php');
$hasher = new PasswordHash(8, false);
$password = $_POST["password"];
$hash = '$2a$08$oRSNSEHQ.DI3IQ5JlwwJLeD6SDFHxpDiJuJbbLQ4LfMQRAi7bsIMW';
$check = $hasher->CheckPassword($password, $hash);
if ($check) {
?>
<form method="post" action="submit.php">
Title:<input type="text" size="50" maxlength="50" name="title"><br />
Text:<br><textarea cols="87" rows="35" wrap="soft" name="text"></textarea><br />
<input type="submit" value="submit" name="submit">
</form>
<?php
} else {
?>
Password incorrect<br>
<?
}
require_once('foot.php');
?>



