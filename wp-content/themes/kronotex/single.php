<?php get_header(); ?>
	
	 <section id="onlineShop" class="onlineShop" role="main">
		<div class="wrapper">
			<?php
				while ( have_posts() ) : the_post();
			?>
				<h1 class="onlineShop__post_title">
			<?php	
				echo the_title();
			?>
				</h1>
				<div class="onlineShop__post_text">
			<?php
					the_content();
			?>
				</div>
			<?php
				endwhile; 
			?>
		</div>
	</section>

<?php get_footer();
