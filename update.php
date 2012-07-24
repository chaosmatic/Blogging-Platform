<?php 
session_start();

require_once('database.php');
require_once('head.php');
$dbh = new databaseaccess;
$id = $_POST["id"];
if(!$_SESSION['check']){
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
require_once('foot.php');
?>
