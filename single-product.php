<?php

define('COREFILE', true);

require_once('./backend/fake-database.php');
require_once('./shared-component.php');

$db = new D2M_Database();

$product_id = $_GET['id'];
$product_type = $_GET['type'];

// If null, redirect to 404
if ($product_id == null || $product_type == null) {
	die("Invalid ID");
}

if ($product_type == 'kostum') {
	$product = $db->SELECT_Product_Kostum($product_id);
}
else {
	die('Invalid product type');
}

$product = $product[$product_id - 1];

if ($product == null) {
	die("Product not found");
}

// var_dump($product);
// die();
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
			insert_shared_header();
		?>

		<br>
		<br>
		<br>
		<br>

		<section class="section" id="product">
			<div class="container">
				<div class="row">
					<div class="col-lg-8">
						<div class="left-images">
							<img src="<?php echo $product['image']; ?>" alt="">
						</div>
					</div>
					<div class="col-lg-4">
						<div class="right-content">
							<h4><?php echo $product['name']; ?></h4>
							<span class="price">Rp. <?php echo $product['price']; ?></span>

							<ul class="stars">
								<?php
									$max_star = 5;
									$target_star = $product['star'];

									for ($i = 0; $i < $target_star; $i++) { ?>
										<li><i class="fa fa-star"></i></li>
								<?php
									}

									for ($i = $target_star; $i < $max_star; $i++) { ?>
										<li><i class="fa fa-star-o"></i></li>
								<?php
									} ?>
							</ul>
							<span><?php echo $product['description']; ?></span>
							<!-- <div class="quote">
								<i class="fa fa-quote-left"></i>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiuski smod.</p>
							</div> -->

							<div class="quantity-content">
								<div class="left-content">
									<h6>No. of Orders</h6>
								</div>
								<div class="right-content">
									<div class="quantity buttons_added">
										<input type="button" value="-" class="minus"><input type="number" step="1" min="1" max="" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode=""><input type="button" value="+" class="plus">
									</div>
								</div>
							</div>
							<div class="total">
								<h4><b>Total: Rp. <?php echo $product['price']; ?></b></h4>
								<div class="main-border-button"><a href="#">Add To Cart</a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<?php
		// insert_social_trends_product();
		// insert_newsletter_subscribe_form();
		insert_shared_footer();
		insert_shared_html_end_assets();
		?>

		<script>
			$(function() {
				var selectedClass = "";
				$("p").click(function() {
					selectedClass = $(this).attr("data-rel");
					$("#portfolio").fadeTo(50, 0.1);
					$("#portfolio div").not("." + selectedClass).fadeOut();
					setTimeout(function() {
						$("." + selectedClass).fadeIn();
						$("#portfolio").fadeTo(50, 1);
					}, 500);

				});
			});
		</script>
	</body>
</html>