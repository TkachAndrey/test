<?php get_header(); ?>

	<section id="primary" class="content-area">
		<div class="wrapper">
			<header>
			    <h1 class="page-title screen-reader-text">
			    	<?php single_post_title(); ?>
			    </h1>
		    </header>


			<?php

				// if ( is_page('page-collection.php') ) : 
				// 	get_template_part('template-parts/page-collection.php');

				// elseif ( is_page_template('surface.php') ): 
				// 	get_template_part('template-parts/surface.php');

				// elseif ( is_page_template('abousUs.php') ): 
				// 	get_template_part('template-parts/aboutUs.php');

				// elseif ( is_page_template('surface.php') ): 
				// 	get_template_part('template-parts/surface.php');

				// elseif ( is_page_template('surface.php') ): 
				// 	get_template_part('template-parts/delivery.php');

	   //       	endif;
				
			?>
		</div>
	</section>

<?php get_footer(); ?>