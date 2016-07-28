<?php
/**
 * Template Name: Full Width Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published
 *
 * @package understrap
 */

get_header(); ?>

<div class="wrapper" id="full-width-page-wrapper">
    <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Top Sidebar')) : ?>
    <?php endif; ?>
    <div  id="content" class="container">
	   <div id="primary" class="col-md-12 content-area">

            <main id="main" class="site-main" >
                                                     
                    <?php

                        $meta_query   = WC()->query->get_meta_query();
                        $meta_query[] = array(
                            'key'   => '_featured',
                            'value' => 'yes'
                        );
                        $args = array(
                            'post_type'   =>  'product',
                            'stock'       =>  1,
                            'showposts'   =>  8,
                            'orderby'     =>  'date',
                            'order'       =>  'DESC',
                            'meta_query'  =>  $meta_query
                        );
                        $loop = new WP_Query( $args );
                        while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>

                            <div class="col-sm-3 product">
                                <div class="prod-box">
                                <div class="vm-product-media-container">    
                                    <?php 
                                        if ( has_post_thumbnail( $loop->post->ID ) ) 
                                            echo get_the_post_thumbnail( $loop->post->ID, 'shop_catalog' ); 
                                        else 
                                            echo '<img src="' . woocommerce_placeholder_img_src() . '" alt="Placeholder" width="65px" height="115px" />'; 
                                    ?>
                                </div>
                                <div class="vm-product-details-container">
                                <h5 class="item_name product_title heading-style-5 visible-first"><?php the_title(); ?></h5>
                                <div class="clearfix"></div>
                                <div class="product-price">           
                                <?php 
                                    echo $product->get_price_html(); 
                                ?></div>
                                <div class="btn-position">
                                <?php 
                                    $home = esc_url( home_url( '/' ) ); 
                                    echo "<a href='{$home}?add-to-cart={$loop->post->ID}'><i class='fa fa-shopping-cart'></i></a>";
                                ?>
                                </div>
                                </div>
                                <div class="clearfix"></div>
                                </div>    
                            </div>

                    <?php 
                        endwhile;
                        wp_reset_query(); 
                    ?>                                                                                                                      
            </main><!-- #main -->
           
        </div><!-- #primary -->
        
    </div><!-- Container end --> 
                    <div id="latest_post">
                      <div class="container">
                        <div class="row">
                                <h3 class="text-center">Последние новости</h3>
                    <?php $args = array(
                        'numberposts' => 2,
                        'offset' => 0,
                        'orderby' => 'post_date',
                        'order' => 'DESC',
                        'post_type' => 'post' );

                        $recent_posts = wp_get_recent_posts( $args );

                        // print_r($recent_posts);
                        foreach( $recent_posts as $recent ) :
                       //     echo '<li><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </li> ';
                        ?>
                  
                            <article class="col-md-6 item item_num1 item__module  lastItem visible-first" >
                            <div class="relative">
                            <figure class="item_img img-intro img-intro__none">
                            <time datetime="<?php echo $recent['post_date'] ?>" class="item_published">
                            <?php  echo get_the_date("Y/m/d", $recent['ID']);  ?></time>
                            <a href="<?php echo get_permalink($recent["ID"]); ?>">
                            <?php echo get_the_post_thumbnail($recent['ID'], 'thumbnail'); ?>
                            </a>
                            </figure>
                            <div class="item_content">
                             
                            <h4 class="item_title item_title__blog heading-style-4 visible-first">
                            <?php echo $recent['post_title'] ?> </h4>
                             
                            <div class="item_introtext"> <?php 
                            $line=strip_tags($recent['post_content']);
                            $words = explode(" ",strip_tags($line));
                            $content = implode(" ",array_splice($words,0,13)) . " ..." ;
                            echo $content;
                                ?>
                            <a class="readmore" href="<?php echo get_permalink($recent["ID"]); ?>"><span>Читать</span></a></div>
                            <div class="clearfix"></div>
                            </div></div>  </article>
                        <?php endforeach; ?> 
                            </div>
                        </div>
                    </div>

  <div id="ya_map" style="width: 100%; height: 400px"></div>  
</div><!-- Wrapper end -->



<?php get_footer(); ?>