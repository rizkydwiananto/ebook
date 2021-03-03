<?php

//WEB TITLE
$title ="Gallery - Pradaswara Website";
$description ="";
$author ="";

//LAYOUT
$page ="gallery";

$main_dir = "Gallery";
$sub_dir = "Our Designers";
$sub_dir_2 ="Graphic Designer";



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
include"layout/gallery-our-designers-dtl-konten.php";  


  ?>	

	  <?php
//FOOTER
include"layout/all-footer.php";  

	  ?>	
	
	</body>
</html>