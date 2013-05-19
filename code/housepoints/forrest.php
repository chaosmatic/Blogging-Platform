<?php
$id = 'forrest';
$pxforrest = $houses['Forrest']/max($houses);
$pxforrest = $pxforrest * $pxforrest;
$pxforrest = ceil($pxforrest*$height);

$offset = $height/20;
$leftforrest = $left + 3 * $width;

$topblacktop = $top + $offset;

$bottomblacktop = $top + $height;
$bottomcolourtop = $top + $offset + 2*$height - $pxforrest;
$bottomlinetop = $bottomcolourtop + $pxforrest;
$linewidth = $width + $width/10;
$horizontallineleft = $leftforrest - $width/20;
$vertlineleft1 = $leftforrest  - 2;
$vertlineleft2 = $leftforrest  + $width;
$vertlineheight = 2*$height + $offset;
?>
<div id=topblack<?php echo $id;?>></div>
<div id=topcolour<?php echo $id;?>></div>
<div id=bottomblack<?php echo $id;?>></div>
<div id=bottomcolour<?php echo $id;?>><br><center><?php echo $houses['Forrest'];?></center></div>
<div id=line<?php echo $id;?>></div>
<div id=line1<?php echo $id;?>></div>
<div id=line2<?php echo $id;?>></div>
<div id=line3<?php echo $id;?>></div>

<style type="text/css">

#bottomblack<?php echo $id;?>
{
    position: absolute;
    top: <?php echo $bottomblacktop;?>px;
    left: <?php echo $leftforrest;?>px;
    z-index: 0;
    width: <?php echo $width;?>px;
    height: <?php echo $height;?>px;
    background-color: #000000;
    -webkit-border-radius: <?php echo $height;?>px <?php echo $height;?>px 0 0;
    border-radius:<?php echo $height;?>px <?php echo $height;?>px 0 0;
}
 
#bottomcolour<?php echo $id;?>
{
    position: absolute;
    top: <?php echo $bottomcolourtop;//$topforrest = 305 - $pxforrest; echo $topforrest;?>px;
    left: <?php echo $leftforrest;?>px;
    z-index: 1;
    width: <?php echo $width;?>px;
    height: <?php echo $pxforrest; ?>px;
    background-color: #00F;
    -webkit-border-radius: <?php echo $pxforrest; ?>px <?php echo $pxforrest; ?>px 0 0;
    border-radius:<?php echo $pxforrest; ?>px <?php echo $pxforrest; ?>px 0 0;
}

#topblack<?php echo $id;?>
{
    position: absolute;
    top: <?php echo $topblacktop;?>px;
    left: <?php echo $leftforrest;?>px;
    z-index: 0;
    width: <?php echo $width;?>px;
    height: <?php echo $height;?>px;
    background-color: #000;
    -webkit-border-radius:0 0 <?php echo $height;?>px <?php echo $height;?>px;
    border-radius:0 0 <?php echo $height;?>px <?php echo $height;?>px;
}
 
#topcolour<?php echo $id;?>
{
    position: absolute;
    top: <?php echo $top;?>px;
    left: <?php echo $leftforrest;?>px;
    z-index: 1;
    width: <?php echo $width;?>px;
    height: <?php echo $height;?>px;
    background-color: #00F;
    -webkit-border-radius:0 0 <?php echo $height;?>px <?php echo $height;?>px;
    border-radius:0 0 <?php echo $height;?>px <?php echo $height;?>px;
}
#line<?php echo $id;?>
{
    position: absolute;
    top: <?php echo $top;?>px;
    left: <?php echo $vertlineleft1;?>px;
    width: 2px;
    height: <?php echo $vertlineheight; ?>px;
    background-color: #000000;
}
#line1<?php echo $id;?>
{
    position: absolute;
    top: <?php echo $top;?>px;
    left: <?php echo $vertlineleft2;?>px;
    width: 2px;
    height: <?php echo $vertlineheight; ?>px;
    background-color: #000000;
}
#line2<?php echo $id;?>
{
    position: absolute;
    top: <?php echo $top;?>px;
    left: <?php echo $horizontallineleft;?>px;
    width: <?php echo $linewidth;?>px;
    height: 2px;
    background-color: #000000;
    z-index: 2;
}
#line3<?php echo $id;?>
{
    position: absolute;
    top: <?php echo $bottomlinetop;?>px;
    left: <?php echo $horizontallineleft;?>px;
    width: <?php echo $linewidth;?>px;
    height: 2px;
    background-color: #000000;
    z-index: 2;
}
</style>
