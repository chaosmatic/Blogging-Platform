<?php
session_start();
require_once("head.php");
echo "<div id='UI'>";
//SANITIZATION
$StoreStack1 = filter_var($_POST["StoreStack1"], FILTER_SANITIZE_NUMBER_INT);
$StoreStack2 = filter_var($_POST["StoreStack2"], FILTER_SANITIZE_NUMBER_INT);

if(isset($_SESSION['warehouse']) & count($_SESSION['warehouse'])>0 ){
	if($StoreStack1 and $StoreStack2){
		if (filter_var($StoreStack1,FILTER_VALIDATE_INT) && $StoreStack1 > 0 && $StoreStack1 <= $amountOfStores && filter_var($StoreStack2,FILTER_VALIDATE_INT) && $StoreStack2 > 0 && $StoreStack2 <= $amountOfStores){
			//MOVE
			$crate = array_pop($_SESSION['warehouse']);
			$StoreStack1 = "store".$StoreStack1;
			$StoreStack2 = "store".$StoreStack2;
			array_push($_SESSION[$StoreStack1],$crate);
			array_push($_SESSION[$StoreStack2],$crate);
			require_once("UI.php");
		}else{
			echo "Please select a valid crate.<br>";
		}
		echo "</div>";
		require_once("display.php");
	}else{
		//DISPLAY MOVE FORM
		echo "<form method='post' action='move.php'>";
		echo "<input type='submit' value='MOVE CRATE' name='submit'><br>";
		echo "<a href='index.php'>BACK</a>";
		echo "</div>";
		$move = True;
		require_once("display.php");
	}
}		
require_once("foot.php");
?>