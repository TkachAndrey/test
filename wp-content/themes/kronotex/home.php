<?php get_header(); ?>

    <section id="onlineShop" class="onlineShop" role="main">
        <div class="wrapper">

        <?php
            if ( have_posts() ) :
                if ( is_home() && ! is_front_page() ) : 
        ?>
                    <h1 class="onlineShop__title">
                        <?php single_post_title(); ?>
                    </h1>
                    <div class="onlineShop__box">
        <?php
                    while ( have_posts() ) : the_post();
        
                        get_template_part( 'template-parts/content', 'post' );
                        
                    endwhile;
        ?>              
                        </div>
        <?php
                       
                endif;
            else :

        ?> 
                <h1 class="onlineShop__title">Coming Soon</h1>  
        <?php
            endif; 
        ?>
        </div><!-- .wrapper -->
    </section><!-- .onlineShop -->

<?php get_footer();