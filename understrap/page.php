<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package understrap
 */

get_header(); ?>

<div class="wrapper" id="page-wrapper">
    
    <div  id="content" class="container">

        <div class="row">
            <?php
            if ( function_exists('yoast_breadcrumb') ) {
                 yoast_breadcrumb('<p id="breadcrumbs">','</p>');
            } ?>
        
    	   <div id="primary" class="col-md-12 content-area">
           
                 <main id="main" class="site-main" role="main">

                    <?php while ( have_posts() ) : the_post(); ?>

                        <?php get_template_part( 'loop-templates/content', 'page' ); ?>

                        <?php
                            // If comments are open or we have at least one comment, load up the comment template
                            // if ( comments_open() || get_comments_number() ) :
                            //     comments_template();
                            // endif;
                        ?>

                    <?php endwhile; // end of the loop. ?>

                </main><!-- #main -->
               
    	    </div><!-- #primary -->
            
            <?php // get_sidebar(); ?>

        </div><!-- .row -->
        
    </div><!-- Container end -->
    
</div><!-- Wrapper end -->

<?php get_footer(); ?>
