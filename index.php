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
	<li><a href="index.php">Home</a> </li>
	<li><a href="newpost.php">New Post</a> </li>
	<li><a href="minecraft/index.html">Minecraft</a> </li>
	<li><a href="articles/index.html">Articles</a></li>
</ul><br>
   <div id=content>
<?php
require_once ('database.php');
$pageid = $_GET["pageid"];
$lbound = 5*($pageid + 1) - 5;
$ubound = 5*($pageid + 1);
$dbh = new databaseaccess;
$dbh->displayposts($lbound, $ubound);
if ($dbh->result != null){
	foreach ($dbh->result as $v1) {
  		foreach ($v1 as  $value => $v2) {
			if ($value == "title"){
				echo "<h1>".$v2."</h1>";
			}
			if ($value == "text"){
				echo "<p>".nl2br($v2)."</p>";
			}
		}
		echo "<hr>";
	}
	if($pageid == 0){
		?>
		<form method="get" action="<?php echo $PHP_SELF; ?>">
		<button name="pageid" value="<?php echo ($pageid + 1);?>" type="submit">Older Posts</button>
	</form>
	<?php

	}elseif($pageid > 0){
		?>
		<form method="get" action="<?php echo $PHP_SELF; ?>">
		<button name="pageid" value="<?php echo ($pageid + 1);?>" type="submit">Older Posts</button>
		<button name="pageid" value="<?php echo ($pageid - 1);?>" type="submit">Newer Posts</button>
		</form>
	<?php
	}elseif($pageid > 0){
		?>
		<form method="get" action="<?php echo $PHP_SELF; ?>">
		<button name="pageid" value="<?php echo ($pageid + 1);?>" type="submit">Older Posts</button>
		<button name="pageid" value="<?php echo ($pageid - 1);?>" type="submit">Newer Posts</button>
		</form>
	<?php
	}
}else {
	echo "The content you requested is not availible.";
		?>
		<form method="get" action="<?php echo $PHP_SELF; ?>">
		<button name="pageid" value="<?php echo ($pageid - 1);?>" type="submit">Newer Posts</button>
		</form>
	<?php
	}
?>
By Jonathan Milford</div>
</div>
</body>




