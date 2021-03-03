	<div class="main-header">
		<div class="container">
			<div class="row">
				<div class="col-md-2 col-sm-4 col-xs-8">
					<div class="logo">
						<img src="images/logo/color.png">
					</div>
				</div>
				<div class="col-md-5 col-sm-6 col-xs-12 hidden-xs">
					<div class="contact">
						<div class="social-icon">
							<ul>
								<li><a href="#"  style="background:#3B5998"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"  style="background:#cb0451"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
								<li><a href="#"  style="background:#00ACEE"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href="#"  style="background:#DD4B39"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
								<li><a href="#"  style="background:#0E76A8"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
							
							</ul>
						</div>
						<p>Phone/ Fax : 62-21 72895245/ 62-21 7238409 </p>
						<p>mail : krakatoa@pradaswara.com</p>
					</div>				
				</div>
					 
			</div>
		</div>
		<nav class="navbar navbar-default navbar-sticky bootsnav">
			<div class="container">      
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
						<i class="fa fa-bars"></i>
					</button>
				</div>
				<div class="collapse navbar-collapse" id="navbar-menu">
					<ul class="nav navbar-nav navbar-left" data-in="fadeInDown" data-out="fadeOutUp">
						<li <?php if($page=="home"){ echo " class=\"active\" ";}?>><a href="index.php">Home</a></li>                    
						<li <?php if($page=="about_us"){ echo " class=\"active\" ";}?>><a href="about-us.php">About Us</a></li>                    
						<li <?php if($page=="services"){ echo " class=\"active\" ";}?>><a href="services.php">Services</a></li>                    
						<li class="dropdown <?php if($page=="gallery"){ echo "active ";}?>" >
						  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Gallery</a>
						  <ul class="dropdown-menu">
							<li><a href="gallery-our-product.php">Our Product</a></li>
							<li><a href="gallery-our-designer.php">Our Designers</a></li>
						  </ul>
						</li>						
						
						<li <?php if($page=="blog"){ echo " class=\"active\" ";}?>><a href="blog.php">Blog</a></li>                    
						<li <?php if($page=="contact_us"){ echo " class=\"active\" ";}?>><a href="contact-us.php">Contact Us</a></li>                    
					</ul>
				</div><!-- /.navbar-collapse -->
			</div>   
		</nav>	

	</div>
