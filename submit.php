<?php
require_once('head.php');
require_once ('database.php');
$title = $_POST["title"];
$text = $_POST["text"];
$dbh = new databaseaccess;
if (strlen($title) > 0){
	$dbh->write(htmlspecialchars($title),htmlspecialchars($text));
	echo "post submitted";
}

echo "</div>
</div>
</body>";
?>


