<?php
/**
 * Declaring widgets
 *
 *
 * @package understrap
 */
function understrap_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'understrap' ),
		'id'            => 'sidebar-1',
		'description'   => 'Sidebar widget area',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

    // register_sidebar( array(
    //     'name'          => __( 'Hero Slider', 'understrap' ),
    //     'id'            => 'hero',
    //     'description'   => 'Hero slider area. Place two or more widgets here and they will slide!',
    //     'before_widget' => '<div class="item">',
    //     'after_widget'  => '</div>',
    //     'before_title'  => '',
    //     'after_title'   => '',
    // ) );

    register_sidebar( array(
        'name'          => __( 'Modal', 'understrap' ),
        'id'            => 'modal',
        'description'   => 'Widget area for modal window',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',
    ) );

        register_sidebar( array(
        'name'          => 'Contakt form',
        'id'            => 'contakt-form',
        'description'   => 'Widget area below footer for Contakt form',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',
    ) );

}
add_action( 'widgets_init', 'understrap_widgets_init' );