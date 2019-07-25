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
	</section><!-- /.slider -->

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

	<section class="categories">
		<div class="categories__grid">
			<?php 
				$categories_group1 = get_field('categories_group1');
			if ($categories_group1): ?>
				<a href="<?php echo $categories_group1['relational_link']; ?>" class="categories__grid_item categories__grid_laminat">
					<img src="<?php echo $categories_group1['required_image']['url']; ?>" alt="<?php echo $categories_group1['required_image']['alt']; ?>" class="categories__grid_img" />
					<h2 class="categories__grid_h2 categories__grid_h2-laminat">
						<?php echo $categories_group1['short_name']; ?>
					</h2>
				</a>
			<?php endif; ?>
			<?php 
				$categories_group2 = get_field('categories_group2');
			if ($categories_group2): ?>
				<a href="<?php echo $categories_group2['relational_link']; ?>" class="categories__grid_item categories__grid_podlojki">
					<img src="<?php echo $categories_group2['required_image']['url']; ?>" alt="<?php echo $categories_group2['required_image']['alt']; ?> " class="categories__grid_img" />
					<h2 class="categories__grid_h2 categories__grid_h2-podlojki">
						<?php echo $categories_group2['short_name']; ?>
					</h2>
				</a>
			<?php endif; ?>
			<?php 
				$categories_group3 = get_field('categories_group3');
			if ($categories_group3): ?>
				<a href="<?php echo $categories_group3['relational_link']; ?>" class="categories__grid_item categories__grid_plintus">
					<img src="<?php echo $categories_group3['required_image']['url']; ?>" alt="<?php echo $categories_group3['required_image']['alt']; ?> " class="categories__grid_img" />
					<h2 class="categories__grid_h2 categories__grid_h2-plintus">
						<?php echo $categories_group3['short_name']; ?>
					</h2>
				</a>
			<?php endif; ?>
			<?php 
				$categories_group4 = get_field('categories_group4');
			if ($categories_group4): ?>
				<a href="<?php echo $categories_group4['relational_link']; ?>" class="categories__grid_item categories__grid_shop">
					<img src="<?php echo $categories_group4['required_image']['url']; ?>" alt="<?php echo $categories_group4['required_image']['alt']; ?> " class="categories__grid_img" />
					<h2 class="categories__grid_h2 categories__grid_h2-shop">
						<?php echo $categories_group4['short_name']; ?>
					</h2>
				</a>
			<?php endif; ?>
		</div>	
	</section><!-- /.categories -->

	<section class="plan">
		<div class="wrapper">
			<div class="plan__content">
				<div class="plan__text">
					<?php 
						$plan = get_field('plan');
						if ($plan): ?>
							<h2 class="plan__text_h2">
								<?php $plan['plan_title']; ?>
							</h2>
							<p class="plan__text_p"><?php $plan['plan_description']; ?></p>
							<a href="#!" class="plan__text_btn">Создать технический план</a>
						<?php endif; ?>
				</div>
				<div class="plan__content_img">
					<img src="<?php bloginfo('template_directory'); ?>/assets/img/plan.svg" alt="">
				</div>
				<div class="plan__content_rightTopBox"></div>
				<div class="plan__content_leftBottomBox"></div>
			</div>
		</div>
	</section><!-- /.plan -->


<?php get_footer(); ?>