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
require_once ('database.php');
require_once ('PasswordHash.php');
$t_hasher = new PasswordHash(8, FALSE);

$correct = 'test12345';
$hash = $t_hasher->HashPassword($correct);
print 'Hash: ' . $hash . "\n";

$check = $t_hasher->CheckPassword($correct, $hash);
if ($check) $ok++;
print "Check correct: '" . $check . "' (should be '1')\n";

$wrong = 'test12346';
$check = $t_hasher->CheckPassword($wrong, $hash);
if (!$check) $ok++;
print "Check wrong: '" . $check . "' (should be '0' or '')\n";

unset($t_hasher);
echo "By Jonathan Milford</div>
</div>
</body>";
?>
