<?php
?>
<STYLE type="text/css">
html, body {
	background-color: #f0f0f0;
	margin: 0;
	padding: 0;
  font-family: "Verdana"; 

}
/*debugging*//*
#wall {
	position: absolute;
	left: 1024px;
	width: 10px;
	height: 760px;
	background-color: #000;
}*/

#container1 {
	float:left;
	width:100%;
	padding-top: 20px;

}

<?php

$tablewidth = 100;
$width = floor(100/$amountOfStores)-9;
for ($i=1; $i <= $amountOfStores; $i++) {
	$left =  (floor(100/($amountOfStores)+1))*$i-floor(3.5*$i);
	echo "#store";
	echo $i;
	echo " {\n";
	echo "width:";
	echo $width;
	echo "%;\n";
	echo "position:absolute;\n";
	echo "bottom:50px;\n";
	echo "left:";
	echo $left;
	echo "%;\n";
	echo "overflow:hidden;\n";
	echo "}\n";

}/*
#store1 {
	width:16%;
	position:absolute;
	bottom:50px;
	left:22%;
	overflow:hidden;

}
#store2 {
	width:16%;
	position:absolute;
	bottom:50px;
	left:42%;
	overflow:hidden;
}
#store3 {
	width:16%;
	position:absolute;
	bottom:50px;
	left:62%;
	overflow:hidden;
}
#store4 {
	width:16%;
	position:absolute;
	bottom:50px;
	left:82%;
	overflow:hidden;
}*/
?>

#Warehouse {
	width:<?php echo $width; ?>%;
	position:absolute;
	bottom:50px;
	left:2%;
	overflow:hidden;
}

#WarehouseCell {
  overflow: wrap;
	font-size: 280%;
 	word-wrap:break-word;
}

table {
	width:<?php echo $tablewidth; ?>%;
	table-layout:fixed;
	border-collapse:separate; 
}

table.StoreTable{
	border-spacing:2px;
	padding-left: 1px;
}

table.WarehouseTable{
	border-spacing:4px;
  padding-left: 1px;
}


td {
	word-wrap:break-word;
}

td.StoreCell {
	color: #f0f0f0;
	background-color: #804000;
	border: 5px solid #654321;
	height:40px;
}

td.WarehouseCell {
	color: #f0f0f0;
	background-color: #804000;
	border: 5px solid #654321;
	height:80px;
}

#AddCrate2 {
	color: #9E7D5C;
	background-color: #F0F0F0;
	border: 5px solid #8E6D4C;
	height:40px;
	font-size: 65%;
}

#AddCrate1 {
	color: #825E3B;
	background-color: #F0F0F0;
	border: 5px solid #724E2B;
	height:40px;
	font-size: 65%;
}

#UI {
	clear:both;
	float:left;
	width:100%;
	font-size: 150%;
}
</STYLE>
