<?php 
// Block direct access
if( !defined( 'ABSPATH' ) ){
	exit( 'Direct script access denied.' );
}
/**
 * @Packge 	   : Gilb
 * @Version    : 1.0
 * @Author 	   : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */

?>

	<?php 
		// Footer widget 1
		if( is_active_sidebar( 'footer-1' ) ){
			dynamic_sidebar( 'footer-1' );
		}

		// Footer widget 2
		if( is_active_sidebar( 'footer-2' ) ){
			dynamic_sidebar( 'footer-2' );
		}
	?>