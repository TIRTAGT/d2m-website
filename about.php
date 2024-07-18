<!DOCTYPE html>
<html lang="en">
	<head>
		<?php
			define('COREFILE', true);
			require_once './shared-component.php';

			insert_shared_html_head("About");
		?>
	</head>

	<body>
		<?php
			insert_html_early_loading_animation();
			insert_shared_header();
		?>

		<!-- ***** Main Banner Area Start ***** -->
		<div class="page-heading about-page-heading" id="top">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="inner-content">
							<h2>About Our Company</h2>
							<span>Awesome, clean &amp; creative HTML5 Template</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- ***** Main Banner Area End ***** -->

		<!-- ***** About Area Starts ***** -->
		<div class="about-us">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="left-image">
							<img src="assets/images/about-left-image.jpg" alt="">
						</div>
					</div>
					<div class="col-lg-6">
						<div class="right-content">
							<h4>About Us &amp; Our Skills</h4>
							<span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod kon tempor
								incididunt ut labore.</span>
							<div class="quote">
								<i class="fa fa-quote-left"></i>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiuski smod kon tempor
									incididunt ut labore.</p>
							</div>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod kon tempor incididunt
								ut labore et dolore magna aliqua ut enim ad minim veniam, quis nostrud exercitation ullamco
								laboris nisi ut aliquip.</p>
							<ul>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-behance"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- ***** About Area Ends ***** -->

		<!-- ***** Our Team Area Starts ***** -->
		<section class="our-team">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-heading">
							<h2>Our Amazing Team</h2>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="team-item">
							<div class="thumb">
								<div class="hover-effect">
									<div class="inner-content">
										<ul>
											<li><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
										</ul>
									</div>
								</div>
								<img src="assets/images/about/dimasprofile.jpeg">
							</div>
							<div class="down-content">
								<h4>Dimas Alief Yudhistira</h4>
								<span><b>[ insert text disini ]</b></span>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="team-item">
							<div class="thumb">
								<div class="hover-effect">
									<div class="inner-content">
										<ul>
											<li><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
										</ul>
									</div>
								</div>
								<img src="assets/images/about/danardiprofile.jpeg">
							</div>
							<div class="down-content">
								<h4>Danardi Listyono</h4>
								<span><b>[ insert text disini ]</b></span>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="team-item">
							<div class="thumb">
								<div class="hover-effect">
									<div class="inner-content">
										<ul>
											<li><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
										</ul>
									</div>
								</div>
								<img src="assets/images/about/matthewportfolio.png">
							</div>
							<div class="down-content">
								<h4>Matthew Tirtawidjaja</h4>
								<span><b>[ insert text disini ]</b></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- ***** Our Team Area Ends ***** -->

		<!-- ***** Services Area Starts ***** -->
		<section class="our-services">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-heading">
							<h2>Our Services</h2>
							<span>Details to details is what makes D2M different from the other themes.</span>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="service-item">
							<h4>Synther Vaporware</h4>
							<p>Lorem ipsum dolor sit amet, consecteturti adipiscing elit, sed do eiusmod temp incididunt ut
								labore, et dolore quis ipsum suspend.</p>
							<img src="assets/images/service-01.jpg" alt="">
						</div>
					</div>
					<div class="col-lg-4">
						<div class="service-item">
							<h4>Locavore Squidward</h4>
							<p>Lorem ipsum dolor sit amet, consecteturti adipiscing elit, sed do eiusmod temp incididunt ut
								labore, et dolore quis ipsum suspend.</p>
							<img src="assets/images/service-02.jpg" alt="">
						</div>
					</div>
					<div class="col-lg-4">
						<div class="service-item">
							<h4>Health Gothfam</h4>
							<p>Lorem ipsum dolor sit amet, consecteturti adipiscing elit, sed do eiusmod temp incididunt ut
								labore, et dolore quis ipsum suspend.</p>
							<img src="assets/images/service-03.jpg" alt="">
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- ***** Services Area Ends ***** -->

		<!-- ***** Footer Start ***** -->
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-lg-3">
						<div class="first-item">
							<div class="logo">
								<img src="assets/images/white-logo.png" alt="D2M ecommerce templatemo">
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
							<li><a href="#">Men’s Shopping</a></li>
							<li><a href="#">Women’s Shopping</a></li>
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

								<br>Design: <a href="https://templatemo.com" target="_parent"
									title="free css templates">TemplateMo</a>

								<br>Distributed By: <a href="https://themewagon.com" target="_blank"
									title="free & premium responsive templates">ThemeWagon</a>
							</p>
							<ul>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-behance"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</footer>


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

		<script>

			$(function () {
				var selectedClass = "";
				$("p").click(function () {
					selectedClass = $(this).attr("data-rel");
					$("#portfolio").fadeTo(50, 0.1);
					$("#portfolio div").not("." + selectedClass).fadeOut();
					setTimeout(function () {
						$("." + selectedClass).fadeIn();
						$("#portfolio").fadeTo(50, 1);
					}, 500);

				});
			});

		</script>
	</body>
</html>