<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */
?>

<?php // get_sidebar('footerfull'); ?>

<div id="footer">
    <dic class="container">
        <div class="row">
            <div class="col-sm-3">
                <?php wp_nav_menu(
                                    array(
                                        'theme_location' => 'footer-main-menu',
                                        'container_class' => FALSE,
                                        'fallback_cb' => '',
                                        'menu_id' => 'footer-menu',
                                    )
                            ); ?>
            </div>
            <div class="col-sm-3">
                        <?php

          $taxonomy     = 'product_cat';
          $orderby      = 'name';  
          $show_count   = 0;      // 1 for yes, 0 for no
          $pad_counts   = 0;      // 1 for yes, 0 for no
          $hierarchical = 1;      // 1 for yes, 0 for no  
          $title        = '';  
          $empty        = 0;

          $args = array(
                 'taxonomy'     => $taxonomy,
                 'orderby'      => $orderby,
                 'show_count'   => $show_count,
                 'pad_counts'   => $pad_counts,
                 'hierarchical' => $hierarchical,
                 'title_li'     => $title,
                 'hide_empty'   => $empty
          );
         $all_categories = get_categories( $args );
         $index = 0;
         // print_r($all_categories);
         foreach ($all_categories as $cat) {
                if($cat->category_parent == 0) {
                $parent_cat[]=$cat;
                $index++;
                }
            } 
            for($i = 0; $i <= $index/2; $i++){
                echo '<br /><a href="'. get_term_link($parent_cat[$i]->slug, 'product_cat') .'">'. $parent_cat[$i]->name .'</a>';
            }
        echo '</div><div class="col-sm-3">';
            for($i = $index/2+1; $i < $index; $i++){
                echo '<br /><a href="'. get_term_link($parent_cat[$i]->slug, 'product_cat') .'">'. $parent_cat[$i]->name .'</a>';
            }

        echo '</div>'
        ?>
        <div class="col-sm-3">
            <p>ООО «РУСАРСЕНАЛ-СПб» <br>
            195043 г. Санкт-Петербург, <br>
            Рябовское шоссе, д.124 </p>

            <p><a href="tel:88123134326">8 (812) 313-43-26</a><br>
            <a href="tel:>89013018630">8 (901) 301-86-30 </a><br>
            <a href="mailto:info@rusarsenal-spb.com">info@rusarsenal-spb.com</a></p>

            <p>Время работы офиса и склада: <br>
            понедельник-пятница <br>
            с 9:00 до 17:30, <br>
            обед с 12:30 до 13:00 </p>
        </div>
            
        </div>
    </dic>
</div>

<div class="wrapper" id="wrapper-footer">
    
    <div class="container">

        <div class="row">

            <div class="col-md-12">
    
                <footer id="colophon" class="site-footer" role="contentinfo">

                    <div class="site-info">
                          ООО «РУСАРСЕНАЛ-СПб»
                        <span class="copy">&copy;</span>
                        2016  Все права защищены 
                    </div><!-- .site-info -->

                </footer><!-- #colophon -->

            </div><!--col end -->

        </div><!-- row end -->
        
    </div><!-- container end -->
    
</div><!-- wrapper end -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>