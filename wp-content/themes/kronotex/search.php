<?php
/*
Template Name: Search Page
*/
get_header(); ?>

    <section id="searchPage" class="searchPage" role="main">
        <div class="wrapper">
			
			<h1 class="searchPage__title">Search results for: </h1>
			<div class="searchPage__request"><?php the_search_query(); ?></div>

			<div id="main" class="searchPage__content" role="main">

				<?php
					if ( have_posts() ) : 
				?>
						<div class="latest-news-container">
					
				<?php
						/* Start the Loop */
						while ( have_posts() ) : the_post();

							get_template_part( 'template-parts/content', 'post' );

						endwhile;

					else : 
				?> 
						</div> 
				<?php

						get_template_part( 'template-parts/content', 'search' );

					endif; 
				?>
			</div>
        </div><!-- .wrapper -->
    </section><!-- .searchPage -->

<?php get_footer(); ?>