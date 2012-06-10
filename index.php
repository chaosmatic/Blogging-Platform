<?php
require_once ('head.php');
require_once ('database.php');
$pageid = $_GET["pageid"];
$PostPerPage = 5;
$lbound = $PostPerPage*($pageid + 1) - $PostPerPage;
$ubound = $PostPerPage*($pageid + 1);
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
		if($dbh->result[0]["id"] > $PostPerPage){
			?>
			<form method="get" action="<?php echo $PHP_SELF; ?>">
			<button name="pageid" value="<?php echo ($pageid + 1);?>" type="submit">Older Posts</button>
			</form>
			<?php	
		}
	}elseif($pageid > 0 && $dbh->result[0]["id"] > $PostPerPage){
		?>
		<form method="get" action="<?php echo $PHP_SELF; ?>">
		<button name="pageid" value="<?php echo ($pageid + 1);?>" type="submit">Older Posts</button>
		<button name="pageid" value="<?php echo ($pageid - 1);?>" type="submit">Newer Posts</button>
		</form>
	<?php
	}elseif($dbh->result[0]["id"] <= $PostPerPage){
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
?>





