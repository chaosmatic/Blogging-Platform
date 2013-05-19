<?php
echo "<!DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.01 Transitional//EN'   'http://www.w3.org/TR/html4/loose.dtd'><head><meta http-equiv='content-type' content='text/html;charset=UTF-8'><link rel='shortcut icon' href='favicon.ico'>";
echo "<title>Stack Manager</title>"; 
echo "</head><body><div id='wall'></div>"; //wall for debug purposes
echo "<div id='container1'>";
$amountOfStores = 5; //Actual amount of stores
$maxWarehouseSize = 5;
$maxStoreSize = 10;
$screensize =1024;
require_once("style.php");
?>