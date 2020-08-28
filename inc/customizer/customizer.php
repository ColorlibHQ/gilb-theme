<?php 
/**
 * @Packge     : Gilb
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */

class gilb_theme_customizer {


    function __construct(){
        add_action( 'customize_register', array( $this, 'gilb_theme_customizer_options' ) );
        add_action( 'customize_controls_enqueue_scripts', array( $this, 'gilb_customizer_js' ) );
    }

    // Customize register hook

    public function gilb_theme_customizer_options( $wp_customize ){

        // Include files
        include( GILB_DIR_PATH_INC. 'customizer/fields/sections.php' );
        include( GILB_DIR_PATH_INC. 'customizer/fields/fields.php' );

        // Change panel to theme option
        $wp_customize->get_section( 'title_tagline' )->panel      = 'gilb_theme_options_panel';
        // change priorities
        $wp_customize->get_section( 'title_tagline' )->priority     = 0;
        $wp_customize->remove_section( 'colors' );

        // Copyright text selective refresh
        $wp_customize->selective_refresh->add_partial( 'gilb-copyright-text-settings', 
        array( 'selector' => '.footer_Part' ) );
        
    }


    // Customizer js enqueue

    public function gilb_customizer_js(){

        wp_enqueue_script( 'gilb-customizer', GILB_DIR_URI.'inc/customizer/js/customizer.js', array('customize-controls'), '1.0', true );

        $portfolios = new WP_Query( array(
            'post_type' => 'portfolio',
            'posts_per_page'    => -1,
    
        ) );

        if ( count($portfolios->posts) > 0 ) {
            $first_portfolio_item_id = $portfolios->posts[0]->ID;
            $first_portfolio_item_url = get_permalink( $first_portfolio_item_id );
        } else {
            $first_portfolio_item_url = '';
        }

        wp_localize_script( 'gilb-customizer', 'moahCustomizerdata', array(
            'site_url'      => site_url('/'),
            'blog_page'     => get_post_type_archive_link( 'post' ),
            'portfolio_page'     => esc_url($first_portfolio_item_url),

        ) );

    }

    // Image sanitization callback.

    public static function gilb_sanitize_image( $image, $setting ) {

        /*
         * Array of valid image file types.
         *
         * The array includes image mime types that are included in wp_get_mime_types()
         */
        $mimes = array(
            'jpg|jpeg|jpe' => 'image/jpeg',
            'gif'          => 'image/gif',
            'png'          => 'image/png',
            'bmp'          => 'image/bmp',
            'tif|tiff'     => 'image/tiff',
            'ico'          => 'image/x-icon'
        );

        // Return an array with file extension and mime_type.
        $file = wp_check_filetype( $image, $mimes );

        // If $image has a valid mime_type, return it; otherwise, return the default.
        return ( $file['ext'] ? $image : $setting->default );
    }

}
?>