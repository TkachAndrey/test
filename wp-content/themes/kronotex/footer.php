<footer class="footer">
		<div class="footer__top">
			<div class="wrapper relative">
				<div class="footer__content">

					<?php wp_nav_menu([
						'theme_location'  => 'footer',
						'menu'            => 'ul',
						'menu_class'      => 'footer__menu',
						'container'       => ''
					]); ?>
					
					<div class="footer__content_contact">
						<div class="footer__content_item">
							<a href="tel:<?php the_field('phone_number', 'option'); ?>" class="footer__content_telNumber">
								<?php the_field('phone_number', 'option'); ?>
							</a>
							<a href="#!" class="footer__content_btn">
								<?php the_field('button_description', 'option'); ?>
							</a>
						</div>
					</div>
					<button class="footer__top_arrowUp" id="scrollup">
						<img src="<?php bloginfo('template_directory') ?>/assets/img/arrowUp.svg" alt="">
					</button>
				</div>
			</div>
		</div>
		<div class="footer__bottom">
			<a href="#!" class="footer__bottom_logo">
				<img src="<?php bloginfo('template_directory'); ?>/assets/img/logo.svg" alt="" class="footer__bottom_logo-svg">
			</a>
		</div>
		
	</footer> <!-- /.footer -->


	<?php wp_footer();?>
</body>
</html>