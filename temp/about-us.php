<?php

//WEB TITLE
$title ="About - Pradaswara Website";
$description ="";
$author ="";

//LAYOUT
$page ="about_us";

$main_dir = "Profil PT Krakatoa Pradaswara";
$sub_dir = "";
$sub_dir_2 ="";



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
include"layout/all-heading-blue.php";  
include"layout/about-profile.php";  
include"layout/about-visi.php";  
include"layout/about-misi.php";  
include"layout/about-mitra.php";  

  ?>	

	  <?php
//FOOTER
include"layout/all-footer.php";  

	  ?>	
	
	</body>
</html>