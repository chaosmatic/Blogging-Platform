<?php
require_once ('head.php');
require_once ('database.php');
$dbh = new databaseaccess;
$dbh->count();
$dbh->archive();

for($i=0;$i<$dbh->amount;$i++){
	echo "<a href='index.php?post=".$dbh->result[1][$i]."'>".$dbh->result[0][$i]."</a><p>";

}


require_once ('foot.php');