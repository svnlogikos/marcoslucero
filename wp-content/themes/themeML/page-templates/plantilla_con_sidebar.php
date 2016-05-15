<?php
/**
 * Template Name: Plantilla con Sidebar Derecho
 *
 *  *
 * @package understrap
 */

get_header(); ?>

<div class="wrapper" id="page-wrapper">
    
    <div  id="content" class="container-fluid">
        
	   <div id="primary" class="col-xs-12 col-sm-12 col-md-12 col-lg-8">

            <main id="main" class="site-main" role="main">

                <?php while ( have_posts() ) : the_post(); ?>

                    <?php get_template_part( 'loop-templates/content', 'page' ); ?>

                    <?php
                        // If comments are open or we have at least one comment, load up the comment template
                        if ( comments_open() || get_comments_number() ) :

                            comments_template();
                        
                        endif;
                    ?>

                <?php endwhile; // end of the loop. ?>

            </main><!-- #main -->
           
	    </div><!-- #primary -->
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
            <?php get_sidebar(); ?>
        </div>
        
    </div><!-- Container end -->
    
</div><!-- Wrapper end -->

<?php get_footer(); ?>