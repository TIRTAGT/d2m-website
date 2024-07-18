<?php

// Pastikan file ini di import dari file PHP lain saja, bukan di akses langsung
if (!defined('COREFILE')) {
	echo "Not Found";
	die(404);
}

/* TemplateMo 571 D2M https://templatemo.com/tm-571-D2M */
function insert_shared_html_head($title) { ?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
	<link rel="icon" type="image/png" href="assets/images/logo company.png">
	<title><?php echo $title; ?> - D2M Ecommerce</title>

	<!-- Additional CSS Files -->
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
	<link rel="stylesheet" href="assets/css/templatemo.css">
	<link rel="stylesheet" href="assets/css/owl-carousel.css">
	<link rel="stylesheet" href="assets/css/lightbox.css">

<?php }

function insert_html_early_loading_animation() { ?>
	<div id="preloader">
		<div class="jumper">
			<div></div>
			<div></div>
			<div></div>
		</div>
	</div>  
<?php }

function insert_shared_header($in_home = false) { ?>
	<header class="header-area header-sticky">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<nav class="main-nav">
						<!-- ***** Logo Start ***** -->
						<a href="/index.php" class="logo">
							<img src="assets/images/logo.jpeg">
						</a>
						<!-- ***** Logo End ***** -->

						<!-- ***** Menu Start ***** -->
						<ul class="nav">
							<?php
							if ($in_home) { ?>
								<li class="active"><a href="#top">Home</a></li>
								<li class="scroll-to-section"><a href="#men">Kostum</a></li>
								<li class="scroll-to-section"><a href="#women">Wig</a></li>
								<li class="scroll-to-section"><a href="#kids">Accesories</a></li>
							<?php } else { ?>
								<li><a href="index.php">Home</a></li>
							<?php } ?>
							
							<li><a href="about.php">About Us</a></li>
							<li><a href="products.php">Products</a></li>
							
							<?php
							if (!$in_home) { ?>
								<li><a href="contact.html">Contact Us</a></li>
							<?php } ?>
						</ul>        

						<a class='menu-trigger'>
							<span>Menu</span>
						</a>
						<!-- ***** Menu End ***** -->
					</nav>
				</div>
			</div>
		</div>
	</header>
<?php
}

function insert_shared_html_end_assets() { ?>
	<!-- jQuery -->
	<script src="assets/js/jquery-2.1.0.min.js"></script>

	<!-- Bootstrap -->
	<script src="assets/js/popper.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>

	<!-- Plugins -->
	<script src="assets/js/owl-carousel.js"></script>
	<script src="assets/js/accordions.js"></script>
	<script src="assets/js/datepicker.js"></script>
	<script src="assets/js/scrollreveal.min.js"></script>
	<script src="assets/js/waypoints.min.js"></script>
	<script src="assets/js/jquery.counterup.min.js"></script>
	<script src="assets/js/imgfix.min.js"></script> 
	<script src="assets/js/slick.js"></script> 
	<script src="assets/js/lightbox.js"></script> 
	<script src="assets/js/isotope.js"></script> 

	<!-- Global Init -->
	<script src="assets/js/custom.js"></script>
<?php }

function insert_shared_footer() { ?>
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-lg-3">
					<div class="first-item">
						<div class="logo">
							<img src="assets/images/logo.jpeg" alt="D2M ecommerce templatemo">
						</div>
						<ul>
							<li><a href="#">16501 Collins Ave, Sunny Isles Beach, FL 33160, United States</a></li>
							<li><a href="#">D2M@company.com</a></li>
							<li><a href="#">010-020-0340</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3">
					<h4>Shopping &amp; Categories</h4>
					<ul>
						<li><a href="#">Men's Shopping</a></li>
						<li><a href="#">Women's Shopping</a></li>
						<li><a href="#">Kid's Shopping</a></li>
					</ul>
				</div>
				<div class="col-lg-3">
					<h4>Useful Links</h4>
					<ul>
						<li><a href="#">Homepage</a></li>
						<li><a href="#">About Us</a></li>
						<li><a href="#">Help</a></li>
						<li><a href="#">Contact Us</a></li>
					</ul>
				</div>
				<div class="col-lg-3">
					<h4>Help &amp; Information</h4>
					<ul>
						<li><a href="#">Help</a></li>
						<li><a href="#">FAQ's</a></li>
						<li><a href="#">Shipping</a></li>
						<li><a href="#">Tracking ID</a></li>
					</ul>
				</div>
				<div class="col-lg-12">
					<div class="under-footer">
						<p>Copyright © 2024 D2M. All Rights Reserved. 
						
						<br>Design: <a href="https://templatemo.com" target="_parent" title="free css templates">TemplateMo</a>

						<br>Distributed By: <a href="https://themewagon.com" target="_blank" title="free & premium responsive templates">ThemeWagon</a></p>
						<ul>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer>
<?php }

function insert_newsletter_subscribe_form() { ?>
	<div class="subscribe">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="section-heading">
						<h2>Subscribe ke newsletter kami dan dapatkan diskon hingga <b><u>30%</u></b></h2>
						<br>
					</div>
					<form id="subscribe" action="" method="get">
						<div class="row">
						<div class="col-lg-5">
							<fieldset>
								<input name="name" type="text" id="name" placeholder="Nama" required="">
							</fieldset>
						</div>
						<div class="col-lg-5">
							<fieldset>
								<input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Email" required="">
							</fieldset>
						</div>
						<div class="col-lg-2">
							<fieldset>
								<button type="submit" id="form-submit" class="main-dark-button"><i class="fa fa-paper-plane"></i></button>
							</fieldset>
						</div>
						</div>
					</form>
				</div>

				<div class="col-lg-4">
					<div class="row">
						<div class="col-6">
							<ul>
								<li>Store Location:<br>
									<span>Sunny Isles Beach, FL 33160, United States</span>
								</li>

								<li>Phone:<br>
									<span>010-020-0340</span>
								</li>

								<li>Office Location:<br>
									<span>North Miami Beach</span>
								</li>
							</ul>
						</div>
						<div class="col-6">
							<ul>
								<li>Work Hours:<br><span>07:30 AM - 9:30 PM Daily</span></li>
								<li>Email:<br><span>info@company.com</span></li>
								<li>Social Media:<br>
									<span>
										<a href="#">Facebook</a>,
										<a href="#">Instagram</a>,
										<a href="#">Linkedin</a>
									</span>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php } 

function insert_social_trends_product() { ?>
	<section class="section" id="social">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section-heading">
						<h2>Social Media</h2>
						<span>Details to details is what makes D2M different from the other themes.</span>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row images">
				<div class="col-2">
					<div class="thumb">
						<div class="icon">
							<a href="http://instagram.com">
								<h6>Fashion</h6>
								<i class="fa fa-instagram"></i>
							</a>
						</div>
						<img src="assets/images/instagram-01.jpg" alt="">
					</div>
				</div>
				<div class="col-2">
					<div class="thumb">
						<div class="icon">
							<a href="http://instagram.com">
								<h6>New</h6>
								<i class="fa fa-instagram"></i>
							</a>
						</div>
						<img src="assets/images/instagram-02.jpg" alt="">
					</div>
				</div>
				<div class="col-2">
					<div class="thumb">
						<div class="icon">
							<a href="http://instagram.com">
								<h6>Brand</h6>
								<i class="fa fa-instagram"></i>
							</a>
						</div>
						<img src="assets/images/instagram-03.jpg" alt="">
					</div>
				</div>
				<div class="col-2">
					<div class="thumb">
						<div class="icon">
							<a href="http://instagram.com">
								<h6>Makeup</h6>
								<i class="fa fa-instagram"></i>
							</a>
						</div>
						<img src="assets/images/instagram-04.jpg" alt="">
					</div>
				</div>
				<div class="col-2">
					<div class="thumb">
						<div class="icon">
							<a href="http://instagram.com">
								<h6>Leather</h6>
								<i class="fa fa-instagram"></i>
							</a>
						</div>
						<img src="assets/images/instagram-05.jpg" alt="">
					</div>
				</div>
				<div class="col-2">
					<div class="thumb">
						<div class="icon">
							<a href="http://instagram.com">
								<h6>Bag</h6>
								<i class="fa fa-instagram"></i>
							</a>
						</div>
						<img src="assets/images/instagram-06.jpg" alt="">
					</div>
				</div>
			</div>
		</div>
	</section>
<?php }
?>