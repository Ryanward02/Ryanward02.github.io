<!DOCTYPE html>

<html>
  
  <link rel="stylesheet" type="text/css" href="stylesheet.css"/>
  <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
  
  <head>
    <title>
	  About ryanward.ddns.net
    </title>
  </head>
  
  <body>
    <?php include_once("analyticstracking.php") ?>
	<div id="header">
	  <a href="index.php">
        <div class="navbox">Home</div>
	  </a>
	  <a href="downloads.php">
	    <div class="navbox">Downloads</div>
	  </a>
	  <a href="recent.php"> 
	    <div class="navbox">Recent Blogs</div>
	  </a>
	  <a href="about.php">
	    <div class="navbox">About</div>
	  </a>
	  <a href="help.php">
	    <div class="navbox">Help / Contact</div>
	  </a>
	</div>
	
	<div class="paragraph">
	<?php
	$welcome = fopen("about.txt", "r");
	  while(!feof($welcome)) { 
	  echo fgets($welcome) . "<br />";
	  }
	  fclose($welcome); 
	  ?>
	</div>
	
	<div id="footer">Run by WAMPSERVER 3.0.6 running on a Windows 10 x86_64 machine. Served by Apache 2.4.23 ®</div>
	</body>
</html>