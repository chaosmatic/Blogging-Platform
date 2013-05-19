<?php //TAKES CARE OF ALL THE CRATES
if(!isset($_SESSION['warehouse'])){
	$_SESSION['warehouse'] = array();
 	for ($StoreNumber=1; $StoreNumber <= $amountOfStores; $StoreNumber++) { 
  		$_SESSION['store'.$StoreNumber] = array();
 	}
}	

//DISPLAY WAREHOUSE STACK
echo "<div id='Warehouse'>";
echo "<table class='WarehouseTable'>";
$WarehouseStack = array_reverse($_SESSION['warehouse']);
foreach ($WarehouseStack as $key => $value) {
	echo "<tr><td class='WarehouseCell'>";
	echo $value;
	echo "</td></tr>";
}
echo "</table><b>Warehouse</b><br>";
echo  "Crates: ".count($_SESSION['warehouse'])."<br><br>";
echo "</div>";

//DISPLAY SHOP STACKS
for ($StoreNumber=1; $StoreNumber <= $amountOfStores; $StoreNumber++) { 
	$Storename = "store".$StoreNumber;
	echo "<div id='".$Storename."'>";
	$StoreStack = array_reverse($_SESSION[$Storename]);
	
	echo "<table class='StoreTable'>";
	if ($move){ //DISPLAY THE CHECK BOXES
		if(count($_SESSION['store'.$StoreNumber])<($maxStoreSize -1)){ 
			echo "<tr><td id='AddCrate2'>";
			echo "Add Crate 2: <input type='radio' value='".$StoreNumber."' name='StoreStack2'><br>";
			echo "</td></tr>";
		}
		if(count($_SESSION['store'.$StoreNumber])<$maxStoreSize){ 
			echo "<tr><td id='AddCrate1'>";
			echo "Add Crate 1: <input type='radio' value='".$StoreNumber."' name='StoreStack1'>";
			echo "</td></tr>"; 
		}
	}
	foreach ($StoreStack as $key => $value) {
		echo "<tr><td class='StoreCell'>";
		echo $value;
		echo "</td></tr>";
	}
	echo "</table>";
	echo "<b>Store " . $StoreNumber . "</b><br>";
	echo  "Crates: ".count($_SESSION['store'.$StoreNumber])."<br>";
	if (count($_SESSION['store'.$StoreNumber])>0){
		echo "<a href='ship.php?store=".$StoreNumber."'>Ship</a><br>";
	}else{
		echo "<font color='#A0A0A0'>Ship</font><br>";
	}	
	echo "</div>";
}
echo "</div>";
?>
