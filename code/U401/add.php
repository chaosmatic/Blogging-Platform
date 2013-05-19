<?php
session_start();
require_once("head.php");
echo "<div id='UI'>";
if($_POST['name']==null){
	//DISPLAYS FORM
	if (count($_SESSION['warehouse']) == $maxWarehouseSize -1){
		echo "<b>WARNING: THERE IS ONLY ONE SPACE LEFT ON THE STACK!</b>";
	}
	echo "<form method='post' action='add.php'>";
	echo "Name of crate: <input type='text' size='10' maxlength='9' name='name'><br>";
	echo "<input type='submit' value='ADD' name='submit'></form>";
	echo "<a href='index.php'>BACK</a>";
}else{
	//SANITIZE AND VALIDATE
	$Valid = False;
	$name = $_POST['name'];
	$nameSanitized = filter_var($name, FILTER_SANITIZE_SPECIAL_CHARS/*, FILTER_FLAG_STRIP_HIGH*/);
	$nameSanitized = trim(str_replace(range(0, 9), '', $nameSanitized));
	if(strlen($nameSanitized)>0){
		if($name!=$nameSanitized){
			echo "Some characters you entered are not allowed by the program and have been removed.<br>";
			$Valid = True;
		}else{
			$Valid = True;
		}
		
	}else{
		echo "Crate is invalid.<br>";
	}
	//SAVES IF VALID
	if($Valid){
		array_push($_SESSION['warehouse'], $nameSanitized);
		require_once("UI.php");
	}else{
		echo "Crate was invalid, please <a href='add.php'>resubmit.</a><br>";
	}
	
}
echo "</div>";

require_once("display.php");
require_once("foot.php");
?>