<?php
session_start();

require_once('head.php');
require_once ('database.php');
require_once ('markdown.php');
$title = $_POST["title"];
$text = $_POST["text"];
$dbh = new databaseaccess;
if (strlen($title) > 0 && $_SESSION['check']){
	$mdtext = Markdown($text);
	$dbh->write($title,$text);
	echo "post submitted";
}elseif(!$_SESSION['check']){
	echo "please login";
}else{
	echo "please have a non-empty title";
}

echo "</div>
</div>
</body>";
?>


