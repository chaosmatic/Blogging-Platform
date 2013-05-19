<?php
if (!file_exists('config.php')){
	if (stripos($_SERVER["REQUEST_URI"],'setup.php')==false){
		header('Location: setup.php');
   		exit();
   	}
}elseif (stripos($_SERVER["REQUEST_URI"],'setup.php')==true){
	header('Location: index.php');
	exit();
}else{
	require_once("config.php");
}

echo "<html><head><meta http-equiv='content-type' content='text/html;charset=UTF-8'><link rel='shortcut icon' href='".$dir."favicon.ico'><LINK REL=StyleSheet HREF='".$dir."style.css' TYPE='text/css' MEDIA=screen><LINK REL=StyleSheet HREF='".$dir."colour.css' TYPE='text/css' MEDIA=screen>";
echo "<title>";
echo $title.TITLE;
echo "</title>"; //title in top of browser
echo "</head>";
echo "<body>";
echo "<div id=wrapper>";
echo "<div id=head><center>";
echo "<span id='title'><a href='".$dir."index.php'>";
echo TITLE;
echo "</a></span>"; //title at top of page

echo "</center>";
echo "<ul id='list-nav'>";
 //these are the links at the top of page. between the > < is the appearance, in the ' ' is the location
echo "<li><a href='".$dir."code/index.php'>Code</a> </li>";
echo "<li><a href='".$dir."minecraft/index.php'>Minecraft</a> </li>";
echo "<li><a href='".$dir."documents/index.php'>Documents</a></li>";
echo "<li><a href='".$dir."contact/index.php'>Contact</a> </li>";
echo "</ul><br>";
	echo "</div>";

	echo "<div id=content>";
?>
