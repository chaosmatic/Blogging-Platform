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

echo "<html><head><meta http-equiv='content-type' content='text/html;charset=UTF-8'><link rel='shortcut icon' href='favicon.ico'><LINK REL=StyleSheet HREF='style.css' TYPE='text/css' MEDIA=screen><LINK REL=StyleSheet HREF='colour.css' TYPE='text/css' MEDIA=screen>";
echo "<title>";
echo TITLE;
echo "</title>"; //title in top of browser
echo "</head>";
echo "<body>";
echo "<div id=wrapper>";
echo "<div id=head><center>";
echo "<span id='title'><a href='index.php'>";
echo TITLE;
echo "</a></span>"; //title at top of page

echo "</center>";
	echo "</div>";
	echo "<div id=content>";
?>
