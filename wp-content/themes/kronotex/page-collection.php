<?php get_header(); ?>

   <section class="slider">
		<div class="slider__slogan">
			<h1 class="slider__slogan_h1">
				<span class="slider__slogan_bold">
					<?php bloginfo('name'); ?>
				</span><br>
				<?php bloginfo('description'); ?>
			</h1>
		</div>
		<?php $images = get_field('slider');

		if( $images ): ?>
	        <ul class="slider__slides">
	            <?php foreach( $images as $image ): ?>
	                <li class="slider__image">
	                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
	                </li>
	            <?php endforeach; ?>
	        </ul>
		<?php endif; ?>
	</section><!-- slider -->

	<section class="advantages">
		<div class="wrapper">
			<div class="advantages__slogan">
				<h2 class="advantages__slogan_h2">
					<?php the_field('slogan'); ?>
				</h2>
				<p class="advantages__slogan_p">
					<?php the_field('motto_brand'); ?>
				</p>
			</div>
			
			<?php if( have_rows('advantages_items') ): ?>
				<div class="advantages__block">
					<?php while( have_rows('advantages_items') ): the_row(); ?>
						<div class="advantages__items">
							<div class="advantages__items_img1 advantages__items_img">
								<img src="<?php echo get_sub_field('advantage_logo')['url']; ?>" alt="<?php echo get_sub_field('advantage_logo')['alt']; ?> "/>
							</div>
							<h3 class="advantages__items_h3">
								<?php the_sub_field('advantage_title'); ?>
							</h3>
							<p class="advantages__items_p">
								<?php the_sub_field('advantage_description'); ?>
							</p>
						</div>
					<?php endwhile; ?>
				</div>
			<?php endif; ?>
		</div>
	</section><!-- /.advantages -->


<?php get_footer(); ?>