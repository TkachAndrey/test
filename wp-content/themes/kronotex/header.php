<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content=text/html; charset="utf-8">
	<!-- viewport -->
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, maximum-scale=1">
	<!-- keywords -->
	<meta name="keywords" content="">
	<!-- description -->
	<meta name="Description" content="">
	<!-- favicon -->
	<link type="image/png" rel="shortcut icon" href="img/icons/favicon.png">



	<?php wp_head(); ?>
</head>
<body>
	 
	<header class="top">
		<div class="wrapper">
			<div class="top__item flex">
				<a href="<?php echo home_url(); ?>" class="top__item_link top__item_logo">
					<img src="<?php bloginfo('template_directory'); ?>/assets/img/logo.svg" alt="">
				</a>
				<!-- top__item_phone -->
				<a href="tel:<?php the_field('phone_number', 'option'); ?>" class="top__item_link top__item_phone">
					<?php the_field('phone_number', 'option'); ?>
				</a>
				<!-- top__item_input -->
				<?php get_search_form('search-form','top'); ?>
				<!-- top__item_logIn -->
				<a href="#!" onclick="return false" class="top__item_link top__item_logIn" rel="popup">
					<img src="<?php bloginfo('template_directory') ?>/assets/img/logIn.svg" alt="">
				</a>
				<a href="#" class="top__item_link top__item_cart">
					<div class="top__item_cart-svg">
						<img src="<?php bloginfo('template_directory') ?>/assets/img/cart.svg" alt="">
					</div>
					<span class="top__item_number" id="cart__number">2</span>
				</a>
			</div>
		</div>
	</header>
	
	<section class="navi" id="navi">
		<div class="wrapper">

			<?php wp_nav_menu([
				'theme_location'  => 'top',
				'menu'            => 'ul',
				'menu_class'      => 'menu__list',
				'container'       => 'nav',
				'container_class' => 'navi__menu',
			]); ?>
		</div>
	</section>