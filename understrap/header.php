<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-title" content="<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="shortcut icon" href="<?php echo esc_url( home_url( '/' ) ); ?>favicon.ico" type="image/x-icon"/>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
<div class="container-fluid">
<div class="row">
<div id="home">
    <div class="wrapper-inner">
        <div id="top">
            <div class="container">
                <div class="row">
                    <div class="logo col-md-5">
                        <?php if(is_front_page()){ ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/src/img/logo.png" alt="Logo">
                        <?php } else { ?>
                        <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri(); ?>/src/img/logo.png" alt="Logo"></a>
                        <?php } ?>
                        <p class="logo-slogan">Пожарная безопасность предприятий</p>
                    </div>
                    <div class="col-md-7">
                        <div class="phone">
                              <p><a href="tel:88123134326">8 (812) 313-43-26</a><br>
            <a href="tel:89013018630">8 (901) 301-86-30 </a><br>
            <a href="mailto:info@rusarsenal-spb.com">info@rusarsenal-spb.com</a></p>

                        </div>
                        <div class="bascet">
                            <a class="cart-contents" href="<?php echo WC()->cart->get_cart_url(); ?>" title="Перейти в корзину">
                            <div class="total_products">
                                <?php echo WC()->cart->get_cart_contents_count(); ?></div> </a>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="navbar navbar-dark bg-inverse site-navigation" data-spy="affix" data-offset-top="150" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
                            

                <div class="container">
                    <div class="navbar-header" data-spy="affix" id="affix" data-offset-top="10" >

                                <!-- .navbar-toggle is used as the toggle for collapsed navbar content -->

                                  <button class="navbar-toggle hidden-sm-up" type="button" data-toggle="collapse" data-target=".exCollapsingNavbar">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>

                            </div>

                            <!-- The WordPress Menu goes here -->
                            <?php wp_nav_menu(
                                    array(
                                        'theme_location' => 'primary',
                                        'container_class' => 'collapse navbar-toggleable-xs exCollapsingNavbar',
                                        'menu_class' => 'nav navbar-nav',
                                        'fallback_cb' => '',
                                        'menu_id' => 'main-menu',
                                        'walker' => new wp_bootstrap_navwalker()
                                    )
                            ); ?>

                </div> <!-- .container -->
            </nav>
            
        <div id="header">
            <div class="row-container visible-first">
                <div class="container">
                <div class="row">
                <div class="moduletable slogan  col-md-12"><div class="module_container"><div class="mod-custom mod-custom__slogan">
                    ВСЕГДА ОПТОВЫЕ ЦЕНЫ И 100% КАЧЕСТВО!
                    </div></div></div>
                </div>
                </div>
            </div>
        </div>

        </div>
    </div>
        
        
</div>
</div>
</div>