<?php get_header(); ?>

    <section id="aboutUs" class="aboutUs" role="main">
        <div class="wrapper">
				<h1 class="onlineShop__post_title">
				<?php echo the_title();?>
			</h1>
			
			<?php 
			if ( have_posts() ) : 
				while ( have_posts() ) : the_post();
					the_content();
					the_field('video');
				endwhile; 
			else: ?>
				<p>Sorry, no posts matched your criteria.</p>
			<?php endif; ?>

        </div><!-- .wrapper -->
    </section><!-- .onlineShop -->

<?php get_footer(); ?>