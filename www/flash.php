<!-- | © Copyright 2007 Justin Bull | All rights reserved | -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<?php include('html/inc/head.html'); ?>
<body>
<div id="master">
<?php
include('html/inc/error.html');
include('html/inc/nav.html');
$id = $_GET['id'];
if ($id == '0701') { $title ="Breitling Watch"; $dir ="flash/"; $src ="time.swf"; $width ="520"; $height ="800"; }
if ($id == '0702') { $title ="Snow Flakes"; $title; $dir ="flash/"; $src ="snow.swf"; $width ="520"; $height ="458"; }
if ($id == '0703') { $title ="Radial Spectrum"; $dir ="flash/"; $src ="spectrum.swf"; $width ="520"; $height ="458"; }
if ($id == '0801') { $title ="Preloader"; $dir ="flash/"; $src ="preloader.swf"; $width ="520"; $height ="458"; }
if ($id == '0802') { $title ="Electric Sound"; $dir ="flash/"; $src ="electric.swf"; $width ="520"; $height ="200"; }
if ($id == '0803') { $title ="Depth Game"; $dir ="flash/"; $src ="depth.swf"; $width ="520"; $height="400"; }
if ($id == '0804') { $title ="Bitmap Data Game"; $dir ="flash/"; $src ="bitmap.swf"; $width ="520"; $height="600"; }
?>
<div id="header"></div>
<div id="content">
	<div class="subheader"><h1><?php echo $title; ?></h1></div>
	<div class="subcontent"><?php echo "<embed src='$dir$src' width='$width' height='$height' quality='high' type='application/x-shockwave-flash'></embed>"; ?></div>
	<div class="subfooter"></div>
	<div class="break"></div>
</div>
<div id="footer"></div>
<?php include('html/inc/reflection.html');?>
</div>
</body>
</html>
