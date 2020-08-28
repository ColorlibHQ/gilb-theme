<?php
// Block direct access
if( !defined( 'ABSPATH' ) ){
    exit( 'Direct script access denied.' );
}

/**
 * @Packge     : Gilb
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */
 

function gilb_widgets_init() {
    // sidebar widgets register
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar', 'gilb' ),
        'id'            => 'gilb-post-sidebar',
        'before_widget' => '<div id="%1$s" class="single_sidebar_widget widget blog-post-archives %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget_title">',
        'after_title'   => '</h4>',
    ) );
    // page sidebar widgets register
    register_sidebar( array(
        'name'          => esc_html__( 'Page Sidebar', 'gilb' ),
        'id'            => 'gilb-page-sidebar',
        'before_widget' => '<div id="%1$s" class="single_sidebar_widget widget blog-post-archives %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h5>',
        'after_title'   => '</h5>',
    ) );
    
    // footer widgets register
    register_sidebar( array(
        'name'          => esc_html__( 'Footer One', 'gilb' ),
        'id'            => 'footer-1',
        'before_widget' => '<div class="col-lg-6"><div id="%1$s" class="single-footer-widget widget mb-100 footer_menu %2$s">',
        'after_widget'  => '</div></div>',
        'before_title'  => '',
        'after_title'   => '',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer Two', 'gilb' ),
        'id'            => 'footer-2',
        'before_widget' => '<div class="col-lg-6"><div id="%1$s" class="single-footer-widget widget mb-100 social_icon %2$s">',
        'after_widget'  => '</div></div>',
        'before_title'  => '',
        'after_title'   => '',
    ) );

    
    
}
add_action( 'widgets_init', 'gilb_widgets_init' );
