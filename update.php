<?php 
session_start();

require_once('database.php');
require_once('head.php');
require_once('user.php');
$dbh = new databaseaccess;
$user = new user($dbh);

$id = $_POST["id"];
$_SESSION["id"] = filter_var($id, FILTER_SANITIZE_NUMBER_INT);
if (filter_var($id,FILTER_VALIDATE_INT)&& $id>-1) {
	if (!$user->checkLoggedIn()){
		echo "Please Login";
	}else{
		$dbh->displaybyid($id);
		?>
		<form method="post" action="updated.php">
		Title:<input type="text" size="50" maxlength="50" value="<?php echo $dbh->result['title']; ?>" name="title"><br />
		Text:<br><textarea cols="87" rows="35" wrap="soft" name="text"><?php echo $dbh->result['text']; ?></textarea><br />
		<input type="submit" value="Update" name="submit">
		</form>
		<?php
	}
}else{
	echo "invalid id";
}
require_once('foot.php');
?>
