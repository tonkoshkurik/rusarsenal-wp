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
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <?php wp_nav_menu(
                                    array(
                                        'theme_location' => 'footer-main-menu',
                                        'container_class' => FALSE,
                                        'fallback_cb' => '',
                                        'menu_class' => 'footer-menu',
                                    )
                            ); ?>
<!--               <a href="#" class="price-list">Прайс-лист</a><br>
 -->              <a class="btn btn-md podpis" data-toggle="modal" data-target="#myModal">Подписаться <br>на прайс-лист</a>
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
            echo '<ul class="footer-categories footer-menu">';
            for($i = 0; $i < ceil($index/2); $i++){
                echo '<li class="footer-cat"><a href="'. get_term_link($parent_cat[$i]->slug, 'product_cat') .'">'. $parent_cat[$i]->name .'</a></li>';
            }
        echo '</ul></div><div class="col-sm-3"><ul class="footer-categories footer-menu">';
            for($i = ceil($index/2); $i < $index; $i++){
                echo '<li class="footer-cat"><a href="'. get_term_link($parent_cat[$i]->slug, 'product_cat') .'">'. $parent_cat[$i]->name .'</a></li>';
            }

        echo '</ul></div>'
        ?>
        <div class="col-sm-3 contakt-info">
            <p>ООО «РУСАРСЕНАЛ-СПб» <br>
            195043 г. Санкт-Петербург, <br>
            Рябовское шоссе, д.124 </p>

            <p><a href="tel:88123134326">8 (812) 313-43-26</a><br>
            <a href="tel:89013018630">8 (901) 301-86-30 </a><br>
            <a href="mailto:info@rusarsenal-spb.com">info@rusarsenal-spb.com</a></p>
             <p>Время работы офиса и склада: <br>
            понедельник-пятница <br>
            с 9:00 до 17:30, <br>
            обед с 12:30 до 13:00 </p>
        </div>
            
        </div>
        
        <div class="modals">
          <!-- Trigger the modal with a button -->
<!--           <button type="button" class="btn btn-info btn-lg" >Open Modal</button>
 -->
          <!-- Modal -->
          <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Подписаться на прайс-лист</h4>
                </div>
                <div class="modal-body">
                  <?php dynamic_sidebar( 'modal' ); ?>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                </div>
              </div>

            </div>
          </div>
          

        </div>


        <div class="row">
            <div class="col-md-12">
    
                <footer id="colophon" class="site-footer">

                    <div class="site-info">
                          ООО «РУСАРСЕНАЛ-СПб»
                        <span class="copy">&copy;</span>
                        2016  Все права защищены 
                    </div><!-- .site-info -->

                </footer><!-- #colophon -->

            </div><!--col end -->
        </div>
    </div>
</div>



</div><!-- #page -->

<div class="contakt-form" >
<div id="habla_topbar_div"    class="habla_topbar_div_normal hbl_pal_title_fg hbl_pal_title_bg habla_topbar_div_compressed ">
<a id="habla_oplink_a">Задайте нам вопрос! <i class="fa fa-arrow-circle-up" aria-hidden="true"></i>
</a></div>
<div id="habla_expanded_div" >
<?php dynamic_sidebar( 'contakt-form' ); ?>
</div>
</div>

<?php wp_footer(); ?>
</body>
</html>