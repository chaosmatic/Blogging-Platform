<?php
$time = microtime(true); 
require_once ('head.php');
require_once ('database.php');
require_once ('markdown.php');
$pageid = $_GET["pageid"];
$post = $_GET["post"];
#echo "Hi, I'm Jonathan Milford and this is my website. It contains my (infrequently updated) blog, details on the minecraft server I run and some of my programming projects.<p>";
$dbh = new databaseaccess;
if ($pageid >= 0 && 0 == $post){
	$PostPerPage = 5;
	$lbound = $PostPerPage*$pageid;
	$dbh->displayposts($lbound, $PostPerPage);
	$dbh->count();
	$totalpages = ceil($dbh->amount/$PostPerPage);

	if ($dbh->result != null){

		foreach ($dbh->result as $value) {
			echo "<div class='post'>";
			$newdate = explode(' ', $value['date']);
			$newdate = explode('-', $newdate[0]);
			$date = date( 'j F y', mktime(0, 0, 0, $newdate[1], $newdate[2], $newdate[0]) );
			echo "<span class='post-title'><a href='index.php?post=".$value['id']."'>".$value['title']."</a></span><br>";
			echo "<span class='date'>".$date."</span>";
			echo "<div class='post-text'>".Markdown($value['text'])."</div>";
			echo "</div>";
			//echo "<hr>";
		}
		if($pageid == 0){//if first page
			if($totalpages>1 && 0 == $post){//if filled
				?>
				<span id="old"><a href="index.php?pageid=<?php echo ($pageid + 1);?>"> Older Posts > </a></span>
				<?php	
			}
		}elseif($totalpages>$pageid+1){//if middle page
			?>
			<a href="index.php?pageid=<?php echo ($pageid - 1);?>"> < Newer Posts </a>
			<span id="old"><a href="index.php?pageid=<?php echo ($pageid + 1);?>"> Older Posts > </a></span>
			
		<?php
		}elseif($totalpages==$pageid+1){//if last page
			?>
			<a href="index.php?pageid=<?php echo ($pageid - 1);?>"> < Newer Posts </a>
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

		
	echo "<div class='post'>";

	echo "<span class='post-title'><a href='index.php?post=".$dbh->result['id']."'>".$dbh->result['title']."</a></span><br>";
	

	$newdate = explode(' ', $dbh->result['date']);
	$newdate = explode('-', $newdate[0]);
	$date = date( 'j F y', mktime(0, 0, 0, $newdate[1], $newdate[2], $newdate[0]) );
	echo "<span class='date'>".$date."</span>";
echo "<div class='post-text'>".Markdown($dbh->result['text'])."</div>";
	echo "</div>";
}

require_once('foot.php');
echo "<!-PHP executed in: ".(microtime(true) - $time)."s-->"; //debug only
?>
