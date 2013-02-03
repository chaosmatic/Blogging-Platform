<?php
$time = microtime(true); 
require_once ('head.php');
require_once ('database.php');
require_once ('markdown.php');
$pageid = $_GET["pageid"];
$PostPerPage = 5;
$lbound = $PostPerPage*$pageid;
$dbh = new databaseaccess;
$dbh->displayposts($lbound, $PostPerPage);
$dbh->count();
$totalpages = ceil($dbh->amount/$PostPerPage);
if ($dbh->result != null){
	foreach ($dbh->result as $v1) {
  		foreach ($v1 as  $value => $v2) {
			if ($value == "title"){
				echo "<span id='post-title'>".$v2."</span>";
			}
			if ($value == "text"){
				echo "<p>".Markdown($v2)."</p>";
			}
		}
		//echo "<hr>";
	}
	if($pageid == 0){//if first page
		if($totalpages>1){//if filled
			?>
			<span id="old"><a href="index.php?pageid=<?php echo ($pageid + 1);?>"> Older Posts > </a></span>
			<br>
			<?php	
		}
	}elseif($totalpages>$pageid+1){//if middle page
		?>
		<a href="index.php?pageid=<?php echo ($pageid - 1);?>"> < Newer Posts </a>
		<span id="old"><a href="index.php?pageid=<?php echo ($pageid + 1);?>"> Older Posts > </a></span>
		
		<br>
	<?php
	}elseif($totalpages==$pageid+1){//if last page
		?>
		<a href="index.php?pageid=<?php echo ($pageid - 1);?>"> < Newer Posts </a>
		<br>
	<?php
	}
	
}else {
	echo "The content you requested is not availible.";
		?>
		<a href="index.php?pageid=<?php echo ($pageid - 1);?>"> < Newer Posts </a>
	<?php
	}

require_once('foot.php');
echo "<!-PHP executed in: ".(microtime(true) - $time)."s-->"; //debug only
?>
