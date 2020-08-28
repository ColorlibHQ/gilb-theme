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

// Header background image oparation

$class     = '';
$headerimg = '';
if( get_header_image() ){
    $headerimg = get_header_image();
    $class = ' header-image';
}
?>

<section class="hero-banner<?php echo esc_attr( $class ); ?>" <?php echo gilb_inline_bg_img( esc_url( $headerimg ) ); ?>>
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="breadcrumb_tittle">
                <h2>
                    <?php
                    if ( is_category() ) {
                        single_cat_title( __('Category: ', 'gilb') );

                    } elseif ( is_tag() ) {
                        single_tag_title( __('Tag Archive for - ', 'gilb') );

                    } elseif ( is_archive() ) {
                        echo get_the_archive_title();

                    } elseif ( is_page() ) {
                        echo get_the_title();

                    } elseif ( is_search() ) {
                        echo esc_html__( 'Search for: ', 'gilb' ) . get_search_query();

                    } elseif ( ! ( is_404() ) && ( is_single() ) || ( is_page() ) ) {
                        echo  get_the_title();

                    } elseif ( is_home() ) {
                        echo esc_html__( 'Blog', 'gilb' );

                    } elseif ( is_404() ) {
                        echo esc_html__( '404 error', 'gilb' );

                    }
                    ?>
                </h2>
            </div>
        </div>
    </div>
</section>