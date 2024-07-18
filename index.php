<?php

define('COREFILE', true);

require_once('./backend/fake-database.php');
require_once('./shared-component.php');

$db = new D2M_Database();
?>


<!DOCTYPE html>
<html lang="en">
  	<head>
		<?php
			insert_shared_html_head("Home");
		?>
	</head>
		
	<body>
		<?php
			insert_html_early_loading_animation();
			insert_shared_header(true);
		?>

		<!-- ***** Main Banner Area Start ***** -->
		<div class="main-banner" id="top">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-6">
						<div class="left-content">
							<div class="thumb">
								<div class="inner-content">
									<h4>We Are <b>D2M</b></h4>
									<span>Awesome, clean &amp; creative HTML5 Template</span>
									<div class="main-border-button">
										<a href="#">Purchase Now!</a>
									</div>
								</div>
								<img src="assets/images/baner-right-image-01.jpg" alt="" height="829px">
							</div>
						</div>
					</div>

					<div class="col-lg-6">
						<div class="right-content" style="color: black;">
							<div class="row">
								<div class="col-lg-6">
									<div class="right-first-image">
										<div class="thumb">
											<div class="inner-content">
												<h4>Wig</h4>
												<span>Best Wig</span>
											</div>
											<div class="hover-content">
												<div class="inner">
													<h4>Wig</h4>
													<p>Lorem ipsum dolor sit amet, conservisii ctetur adipiscing elit incid.</p>
													<div class="main-border-button">
														<a href="#">Discover More</a>
													</div>
												</div>
											</div>
											<img src="assets/images/Kazha Wig.jpg">
										</div>
									</div>
								</div>

								<div class="col-lg-6">
									<div class="right-first-image">
										<div class="thumb">
											<div class="inner-content">
												<h4>Kostum</h4>
												<span>Best Kostum</span>
											</div>
											<div class="hover-content">
												<div class="inner">
													<h4>Kostum</h4>
													<p>Lorem ipsum dolor sit amet, conservisii ctetur adipiscing elit incid.</p>
													<div class="main-border-button">
														<a href="#">Discover More</a>
													</div>
												</div>
											</div>
											<img src="assets/images/Furina.jfif">
										</div>
									</div>
								</div>

								<div class="col-lg-6">
									<div class="right-first-image">
										<div class="thumb">
											<div class="inner-content">
												<h4>Accesories</h4>
												<span>Best Cosplay Accesories</span>
											</div>
											<div class="hover-content">
												<div class="inner">
													<h4>Accesories</h4>
													<p>Lorem ipsum dolor sit amet, conservisii ctetur adipiscing elit incid.</p>
													<div class="main-border-button">
														<a href="#">Discover More</a>
													</div>
												</div>
											</div>
											<img src="assets/images/Panah Yelan.webp">
										</div>
									</div>
								</div>

								<div class="col-lg-6">
									<div class="right-first-image">
										<div class="thumb">
											<div class="inner-content">
												<h4>Our Collection</h4>
												<span>Best Trend Cosplay Collection</span>
											</div>
											<div class="hover-content">
												<div class="inner">
													<h4>Our Collection</h4>
													<p>Lorem ipsum dolor sit amet, conservisii ctetur adipiscing elit incid.</p>
													<div class="main-border-button">
														<a href="#">Discover More</a>
													</div>
												</div>
											</div>
											<img src="assets/images/Pedang Acheron.webp">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- ***** Main Banner Area End ***** -->

		<!-- ***** Men Area Starts ***** -->
		<section class="section" id="men">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="section-heading">
							<h2>Latest Costum</h2>
							<span>Details to details is what makes D2M different from the other themes.</span>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="men-item-carousel">
							<div class="owl-men-item owl-carousel">
								<?php
								
								$data_costum = $db->SELECT_Product_Kostum();

								foreach ($data_costum as $costum) {
									$link_produk = "single-product.php?id=" . $costum['id'] . "&type=kostum";
									?>
									<div class="item">
										<div class="thumb">
											<div class="hover-content">
												<ul>
													<li><a href="<?php echo $link_produk; ?>"><i class="fa fa-eye"></i></a></li>
													<li><a href="<?php echo $link_produk; ?>"><i class="fa fa-star"></i></a></li>
													<li><a href="<?php echo $link_produk; ?>"><i class="fa fa-shopping-cart"></i></a></li>
												</ul>
											</div>

											<a href="<?php echo $link_produk; ?>">
												<img src="<?php echo $costum['image']; ?>" alt="">
											</a>
										</div>

										<div class="down-content">
											<a href="<?php echo $link_produk; ?>">
												<h4><?php echo $costum['name']; ?></h4>
											</a>

											<span>$<?php echo $costum['price']; ?></span>

											<ul class="stars">
												<?php
													$max_star = 5;
													$target_star = $costum['star'];

													for ($i = 0; $i < $target_star; $i++) { ?>
														<li><i class="fa fa-star"></i></li>
												<?php
													}

													for ($i = $target_star; $i < $max_star; $i++) { ?>
														<li><i class="fa fa-star-o"></i></li>
												<?php
													} ?>
											</ul>
										</div>
									</div>
								<?php } ?>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- ***** Men Area Ends ***** -->

		<!-- ***** Women Area Starts ***** -->
		<section class="section" id="women">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="section-heading">
							<h2>Latest Wig</h2>
							<span>Details to details is what makes D2M different from the other themes.</span>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="women-item-carousel">
							<div class="owl-women-item owl-carousel">
								<div class="item">
									<div class="thumb">
										<div class="hover-content">
											<ul>
												<li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>
												<li><a href="single-product.html"><i class="fa fa-star"></i></a></li>
												<li><a href="single-product.html"><i class="fa fa-shopping-cart"></i></a></li>
											</ul>
										</div>
										<img src="assets/images/Kirara Wig.jfif" alt="">
									</div>
									<div class="down-content">
										<h4>Kirara Wig</h4>
										<span>$55.00</span>
										<ul class="stars">
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
										</ul>
									</div>
								</div>
								<div class="item">
									<div class="thumb">
										<div class="hover-content">
											<ul>
												<li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>
												<li><a href="single-product.html"><i class="fa fa-star"></i></a></li>
												<li><a href="single-product.html"><i class="fa fa-shopping-cart"></i></a></li>
											</ul>
										</div>
										<img src="assets/images/Kazha Wig.jpg" alt="">
									</div>
									<div class="down-content">
										<h4>Kazuha Wig</h4>
										<span>$65.00</span>
										<ul class="stars">
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
										</ul>
									</div>
								</div>
								<div class="item">
									<div class="thumb">
										<div class="hover-content">
											<ul>
												<li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>
												<li><a href="single-product.html"><i class="fa fa-star"></i></a></li>
												<li><a href="single-product.html"><i class="fa fa-shopping-cart"></i></a></li>
											</ul>
										</div>
										<img src="assets/images/Miku Wig.webp" alt="">
									</div>
									<div class="down-content">
										<h4>Miku Wig Vampire Model</h4>
										<span>$60.00</span>
										<ul class="stars">
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
										</ul>
									</div>
								</div>
								<div class="item">
									<div class="thumb">
										<div class="hover-content">
											<ul>
												<li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>
												<li><a href="single-product.html"><i class="fa fa-star"></i></a></li>
												<li><a href="single-product.html"><i class="fa fa-shopping-cart"></i></a></li>
											</ul>
										</div>
										<img src="assets/images/Wig Mitaka Asa.jpg" alt="">
									</div>
									<div class="down-content">
										<h4>Mitaka Asa Wig</h4>
										<span>$50.00</span>
										<ul class="stars">
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- ***** Women Area Ends ***** -->

		<!-- ***** Kids Area Starts ***** -->
		<section class="section" id="kids">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="section-heading">
							<h2>Latest Accesories</h2>
							<span>Details to details is what makes D2M different from the other themes.</span>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="kid-item-carousel">
							<div class="owl-kid-item owl-carousel">
								<div class="item">
									<div class="thumb">
										<div class="hover-content">
											<ul>
												<li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>
												<li><a href="single-product.html"><i class="fa fa-star"></i></a></li>
												<li><a href="single-product.html"><i class="fa fa-shopping-cart"></i></a></li>
											</ul>
										</div>
										<img src="assets/images/Pedang Acheron.webp" alt="">
									</div>
									<div class="down-content">
										<h4>Acheron Sword</h4>
										<span>$125.00</span>
										<ul class="stars">
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
										</ul>
									</div>
								</div>
								<div class="item">
									<div class="thumb">
										<div class="hover-content">
											<ul>
												<li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>
												<li><a href="single-product.html"><i class="fa fa-star"></i></a></li>
												<li><a href="single-product.html"><i class="fa fa-shopping-cart"></i></a></li>
											</ul>
										</div>
										<img src="assets/images/Panah Yelan.webp" alt="">
									</div>
									<div class="down-content">
										<h4>Aqua Simulcara-Yelan Bow</h4>
										<span>$150.00</span>
										<ul class="stars">
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
										</ul>
									</div>
								</div>
								<div class="item">
									<div class="thumb">
										<div class="hover-content">
											<ul>
												<li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>
												<li><a href="single-product.html"><i class="fa fa-star"></i></a></li>
												<li><a href="single-product.html"><i class="fa fa-shopping-cart"></i></a></li>
											</ul>
										</div>
										<img src="assets/images/Hidan Scythe.webp" alt="">
									</div>
									<div class="down-content">
										<h4>Hidan Scythe</h4>
										<span>$90.00</span>
										<ul class="stars">
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
										</ul>
									</div>
								</div>
								<div class="item">
									<div class="thumb">
										<div class="hover-content">
											<ul>
												<li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>
												<li><a href="single-product.html"><i class="fa fa-star"></i></a></li>
												<li><a href="single-product.html"><i class="fa fa-shopping-cart"></i></a></li>
											</ul>
										</div>
										<img src="assets/images/Pistol Kafka.webp" alt="">
									</div>
									<div class="down-content">
										<h4>Kafka Uzi</h4>
										<span>$85.00</span>
										<ul class="stars">
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- ***** Kids Area Ends ***** -->

		<!-- ***** Explore Area Starts ***** -->
		<section class="section" id="explore">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="left-content">
							<h2>Explore Our Products</h2>
							<span>You are allowed to use this D2M HTML CSS template. You can feel free to modify or edit this layout. You can convert this template as any kind of ecommerce CMS theme as you wish.</span>
							<div class="quote">
								<i class="fa fa-quote-left"></i><p>You are not allowed to redistribute this template ZIP file on any other website.</p>
							</div>
							<p>There are 5 pages included in this D2M Template and we are providing it to you for absolutely free of charge at our TemplateMo website. There are web development costs for us.</p>
							<p>If this template is beneficial for your website or business, please kindly <a rel="nofollow" href="https://paypal.me/templatemo" target="_blank">support us</a> a little via PayPal. Please also tell your friends about our great website. Thank you.</p>
							<div class="main-border-button">
								<a href="products.html">Discover More</a>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="right-content">
							<div class="row">
								<div class="col-lg-6">
									<div class="leather">
										<h4>Leather Bags</h4>
										<span>Latest Collection</span>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="first-image">
										<img src="assets/images/explore-image-01.jpg" alt="">
									</div>
								</div>
								<div class="col-lg-6">
									<div class="second-image">
										<img src="assets/images/explore-image-02.jpg" alt="">
									</div>
								</div>
								<div class="col-lg-6">
									<div class="types">
										<h4>Different Types</h4>
										<span>Over 304 Products</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- ***** Explore Area Ends ***** -->
		
		<?php
		// insert_social_trends_product();
		// insert_newsletter_subscribe_form();
		insert_shared_footer();
		insert_shared_html_end_assets();
		?>

		<script>

			$(function() {
				var selectedClass = "";
				$("p").click(function(){
				selectedClass = $(this).attr("data-rel");
				$("#portfolio").fadeTo(50, 0.1);
					$("#portfolio div").not("."+selectedClass).fadeOut();
				setTimeout(function() {
				$("."+selectedClass).fadeIn();
				$("#portfolio").fadeTo(50, 1);
				}, 500);
					
				});
			});

		</script>
	</body>
</html>