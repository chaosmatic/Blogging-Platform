<?php
require_once('head.php');
?>
<form method="post" action="submit.php">
Title:<input type="text" size="50" maxlength="50" name="title"><br />
Text:<br><textarea cols="87" rows="35" wrap="soft" name="text"></textarea><br />
<input type="submit" value="submit" name="submit">
</form>
<?php
require_once('foot.php');
?>



