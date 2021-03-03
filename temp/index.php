
<?php

//WEB TITLE
$title ="Home - Pradaswara Website";
$description ="";
$author ="";

//LAYOUT
$page ="home";
$sub_page ="";



?>
<!DOCTYPE html>
<html lang="en">
  <head>
	  <?php include"layout/all-head.php"; ?>
  </head>
  <body>
	  
	
<?php 
//HEADER
include"layout/all-header.php";  
//SLIDER
include"layout/home-slider.php";  	  
//WHO WE ARE
include"layout/home-whoweare.php";  	  
//SERVICES
include"layout/home-services.php";  	  
//GALLERY
include"layout/home-gallery.php";  	  
//Our Blog
include"layout/home-ourblog.php";  	  
//FOOTER
include"layout/all-footer.php";  
	  ;?>	
	
	</body>
</html>