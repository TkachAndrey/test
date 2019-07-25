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

        <?php
                endif;

                /* Start the Loop */
                while ( have_posts() ) : the_post();
        ?>

        <?php

                    /*
                     * Include the Post-Format-specific template for the content.
                     * If you want to override this in a child theme, then include a file
                     * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                     */
                    get_template_part( 'template-parts/content', 'post' );

                endwhile;

            else :

        ?> 
                <h2>Coming Soon</h2>  
        <?php

            endif; 
        ?>

        </div><!-- .wrapper -->
    </section><!-- .onlineShop -->

<?php get_footer(); ?>