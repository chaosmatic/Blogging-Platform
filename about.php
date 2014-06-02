<?php
$time = microtime(true); 
require_once ('head.php');
require_once ('database.php');
require_once ('markdown.php');
?>
I am Jonathan Milford. I'm currently studying Bachelor of Science/Bachelor of Engineering at Monash University.
<p>
I love gaming. I currently play DotA2, Valve's MOBA game. I continue to run a <a href="minecraft/index.php">Minecraft Server</a> and used to play Age of Empires (back in the day :P)
<p>
I also love programming - most of my expirience is web-based, but I'm looking forward to learning assembly and C++ at Uni.
<p>

<?
require_once('foot.php');
echo "<!-PHP executed in: ".(microtime(true) - $time)."s-->"; //debug only
?>