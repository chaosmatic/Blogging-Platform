<html><head><meta http-equiv="content-type" content="text/html;charset=UTF-8"><link rel="shortcut icon" href="favicon.ico"><LINK REL=StyleSheet HREF="style.css" TYPE="text/css" MEDIA=screen>
<title>Milford's World </title>
</head>

<body link="#F01010" vlink="#B01010">

<div id=wrapper>
<div id=head><center>
    <font size="70"> <font color="#F01010">Milfords</font>World<font color="#808080">.com</font></font>

</center>
	</div>

	<ul id="list-nav">
	<li><a href="index.html">Home</a> </li>
	<li><a href="downloads/index.html">Downloads</a> </li>
	<li><a href="minecraft/index.html">Minecraft</a> </li>
	<li><a href="articles/index.html">Articles</a></li>
</ul><br>
   <div id=content>
<?php
echo "1";
require_once ('database.php');
$posts = '5';
echo "2";
$dbh = new databaseaccess;
echo "3";
$dbh->displayposts($posts);
echo "4";
foreach ($dbh->result as $v1) {
  	foreach ($v1 as  $value => $v2) {
		if ($value == "title"){
			echo "<h1>".$v2."</h1>";
		}
		if ($value == "text"){
			echo "<p>".$v2."</p>";
		}
	}
	echo "<hr>";
}
echo "5";
echo "Hi
</div>
</div>
</body>";
?>


