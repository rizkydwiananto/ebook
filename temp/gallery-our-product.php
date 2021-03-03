<?php

//WEB TITLE
$title ="Gallery - Pradaswara Website";
$description ="";
$author ="";

//LAYOUT
$page ="gallery";

$main_dir = "Gallery";
$sub_dir = "Our Product";
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
include"layout/gallery-our-product-slides.php";  
include"layout/gallery-our-product-konten.php";  


  ?>	

	  <?php
//FOOTER
include"layout/all-footer.php";  

	  ?>	
	
	</body>
</html>