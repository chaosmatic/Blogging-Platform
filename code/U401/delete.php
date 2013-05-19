<?php
session_start();
require_once("head.php");
//STUFF AT THE TOP
echo "<div id='footer'>";
$StoreStack1 = filter_var($_POST["StoreStack1"], FILTER_SANITIZE_NUMBER_INT);
$StoreStack2 = filter_var($_POST["StoreStack2"], FILTER_SANITIZE_NUMBER_INT);

if(isset($_SESSION['warehouse']) & count($_SESSION['warehouse'])>0 ){
	if($StoreStack1 and $StoreStack2){
		if (filter_var($StoreStack1,FILTER_VALIDATE_INT) && $StoreStack1 > 0 && $StoreStack1 < 5 && filter_var($StoreStack2,FILTER_VALIDATE_INT) && $StoreStack2 > 0 && $StoreStack2 < 5){
			$crate = array_pop($_SESSION['warehouse']);
			echo $crate . " crate removed<br>";
			$StoreStack1 = "store".$StoreStack1;
			$StoreStack2 = "store".$StoreStack2;
			array_push($_SESSION[$StoreStack1],$crate);
			array_push($_SESSION[$StoreStack2],$crate);
			echo "<a href='index.php'>OK</a>";
		}else{
			echo "Please select a valid crate.<br>";
		}
	}else{
		echo "<form method='post' action='move.php'>";
		for ($x=1; $x < 5; $x++) { 
			if(count($_SESSION['store'.$x])<10){ 
				echo "Store ".$x.": <input type='radio' value='".$x."' name='StoreStack1'>"; 
			}
			if(count($_SESSION['store'.$x])<9){ 
				echo "<input type='radio' value='".$x."' name='StoreStack2'>";
			}
			echo "</br>";
		}
		echo "<input type='submit' value='submit' name='submit'>";
		echo "</form>";
		echo "<a href='index.php'>BACK</a>";
	}
}		

echo "</div>";

require_once("display.php");
require_once("foot.php");
?>