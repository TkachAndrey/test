<?php get_header(); ?>

    <section id="404" class="error-404" role="main">
        <div class="wrapper">
			<div class="error-404__header">
				<h1 class="error-404__title">
					<?php _e( 'Oops! ', 'kronotex' ); ?>
				</h1>
				<p class="error-404__description">
					That page can&rsquo;t be found. 
				</p>
				<p class="error-404__description">
					It looks like nothing was found at this location. Maybe try a search?. 
				</p>
			</div><!-- .error-404-header -->

			<div class="error-404__searchForm">
				<?php get_search_form(); ?>
			</div>
        </div><!-- .wrapper -->
    </section><!-- .error-404 -->

<?php get_footer(); ?>



<!-- _e() -  -->