<?php
$time = microtime(true); 
require_once ('head.php');
require_once ('database.php');
require_once ('markdown.php');
$pageid = $_GET["pageid"];
$post = $_GET["post"];

$dbh = new databaseaccess;
if ($pageid >= 0 && 0 == $post){
	$PostPerPage = 5;
	$lbound = $PostPerPage*$pageid;
	$dbh->displayposts($lbound, $PostPerPage);
	$dbh->count();
	$totalpages = ceil($dbh->amount/$PostPerPage);

	if ($dbh->result != null){

		foreach ($dbh->result as $v1) {
			$titlegroup = array();
			echo "<div class='post'>";
	  		foreach ($v1 as  $value => $v2) {
	  			if ($value == "title"){
					$titlegroup[0] = $v2;
				}elseif ($value == "text"){
					echo "<div><p>".Markdown($v2)."</p></div>";
				}elseif ($value == "date"){
					echo "<span class='date'>Posted at:".$v2."</span>";
				}elseif ($value == "id"){
					$titlegroup[1] = $v2;
				}
			}
			echo "<span class='post-title'><a href='index.php?post=".$titlegroup[1]."'>".$titlegroup[0]."</a></span>";
			echo "</div>";
			//echo "<hr>";
		}
		if($pageid == 0){//if first page
			if($totalpages>1 && 0 == $post){//if filled
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
}elseif ($post >= 0 && 0 == $pageid){
	$dbh->displaybyid($post);
	$titlegroup = array();
	echo "<div class='post'>";
	foreach ($dbh->result as $key=>$value) {
				
	  	if ($key == "title"){
			$titlegroup[0] = $value;
		}elseif ($key == "text"){
			echo "<div>".Markdown($value)."</div>";
		}elseif ($key == "date"){
				echo "<span class='date'>Posted at:".$value."</span>";
		}elseif ($key == "id"){
			$titlegroup[1] = $value;
		}
	}
	echo "<span class='post-title'><a href='index.php?post=".$titlegroup[1]."'>".$titlegroup[0]."</a></span></div>";
	//echo "<hr>";
}


require_once('foot.php');
echo "<!-PHP executed in: ".(microtime(true) - $time)."s-->"; //debug only
?>
