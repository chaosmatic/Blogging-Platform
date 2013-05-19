<?php
session_start();
require_once("head.php");

//RM STORE
echo "<div id='UI'>";
$StoreNumber = filter_var($_GET["store"], FILTER_SANITIZE_NUMBER_INT);
if (filter_var($StoreNumber,FILTER_VALIDATE_INT) && $StoreNumber > 0 && $StoreNumber <= $amountOfStores ){
	unset($_SESSION['store'.$StoreNumber]);
	$_SESSION['store'.$StoreNumber] = array();
	require_once("UI.php");
}else{
	print "Store ".$StoreNumber." is not a valid store.";
}
echo "</div>";

require_once("display.php");

require_once("foot.php");
?>