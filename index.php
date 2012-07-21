<?php
$time = microtime(true); 
require_once ('head.php');
require_once ('database.php');
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
				echo "<h1>".$v2."</h1>";
			}
			if ($value == "text"){
				echo "<p>".nl2br($v2)."</p>";
			}
		}
		echo "<hr>";
	}
	if($pageid == 0){//if first page
		if($totalpages>1){//if filled
			?>
			<form method="get" action="<?php echo $PHP_SELF; ?>">
			<button name="pageid" value="<?php echo ($pageid + 1);?>" type="submit">Older Posts</button>
			</form>
			<?php	
		}
	}elseif($totalpages>$pageid+1){//if middle page
		?>
		<form method="get" action="<?php echo $PHP_SELF; ?>">
		<button name="pageid" value="<?php echo ($pageid + 1);?>" type="submit">Older Posts</button>
		<button name="pageid" value="<?php echo ($pageid - 1);?>" type="submit">Newer Posts</button>
		</form>
	<?php
	}elseif($totalpages==$pageid+1){//if last page
		?>
		<form method="get" action="<?php echo $PHP_SELF; ?>">
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

require_once('foot.php');
echo "<!-PHP executed in: ".(microtime(true) - $time)."s-->"; //debug only
?>





