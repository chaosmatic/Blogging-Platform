<?php //DISPLAYS LINKS
if(count($_SESSION['warehouse'])>0){
	echo "<a href='move.php'>Move from warehouse stack<br></a>";
}
if(count($_SESSION['warehouse'])<$maxWarehouseSize){
	echo "<a href='add.php'>Add to warehouse stack<br></a>";
}
?>