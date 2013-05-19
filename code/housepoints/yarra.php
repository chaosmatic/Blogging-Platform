<?php
$id = 'yarra';
$pxyarra = $houses['Yarra']/max($houses);
$pxyarra = $pxyarra * $pxyarra;
$pxyarra = ceil($pxyarra*$height);
$offset = $height/20;
$leftyarra = $left;

$topblacktop = $top + $offset;

$bottomblacktop = $top + $height;
$bottomcolourtop = $top + $offset + 2*$height - $pxyarra;
$bottomlinetop = $bottomcolourtop + $pxyarra;
$linewidth = $width + $width/10;
$horizontallineleft = $leftyarra - $width/20;
$vertlineleft1 = $leftyarra  - 2;
$vertlineleft2 = $leftyarra  + $width;
$vertlineheight = 2*$height + $offset;
?>
<div id=topblack<?php echo $id;?>></div>
<div id=topcolour<?php echo $id;?>></div>
<div id=bottomblack<?php echo $id;?>></div>
<div id=bottomcolour<?php echo $id;?>><br><center><?php echo $houses['Yarra'];?></center></div>
<div id=line<?php echo $id;?>></div>
<div id=line1<?php echo $id;?>></div>
<div id=line2<?php echo $id;?>></div>
<div id=line3<?php echo $id;?>></div>

<style type="text/css">

#bottomblack<?php echo $id;?>
{
    position: absolute;
    top: <?php echo $bottomblacktop;?>px;
    left: <?php echo $leftyarra;?>px;
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
    top: <?php echo $bottomcolourtop;//$topyarra = 305 - $pxyarra; echo $topyarra;?>px;
    left: <?php echo $leftyarra;?>px;
    z-index: 1;
    width: <?php echo $width;?>px;
    height: <?php echo $pxyarra; ?>px;
    background-color: #F00;
    -webkit-border-radius: <?php echo $pxyarra; ?>px <?php echo $pxyarra; ?>px 0 0;
    border-radius:<?php echo $pxyarra; ?>px <?php echo $pxyarra; ?>px 0 0;
}

#topblack<?php echo $id;?>
{
    position: absolute;
    top: <?php echo $topblacktop;?>px;
    left: <?php echo $leftyarra;?>px;
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
    left: <?php echo $leftyarra;?>px;
    z-index: 1;
    width: <?php echo $width;?>px;
    height: <?php echo $height;?>px;
    background-color: #F00;
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
