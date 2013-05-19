<?php
$value = 0;
echo "<title> Fifty Shades Of Grey </title>";
echo "<table border='0' cellpadding='2' cellspacing='0' width='100%'>";
for ($i = 1; $i <= 50; $i++) {
	echo "<tr>";
	echo "<td bgcolor='#";
	if (strlen(dechex($value))==1){ 
		echo "0" . dechex($value) . "0" . dechex($value) . "0" . dechex($value);
	}else{
		echo dechex($value) . dechex($value) . dechex($value);
	}
	echo "'>&nbsp;". $i . "</td>";
	echo "</tr>";
	$value = $value + 5.1;
}
echo "</table>";
?>
