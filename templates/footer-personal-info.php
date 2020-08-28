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
        $gilb_personal_info     = !empty( gilb_opt( 'gilb_personal_info_section' ) ) ? gilb_opt( 'gilb_personal_info_section' ) : '';
        $gilb_pinfo_label       = !empty( gilb_opt( 'gilb_footer_personal_info_title' ) ) ? gilb_opt( 'gilb_footer_personal_info_title' ) : '';
        $gilb_pinfo_email       = !empty( gilb_opt( 'gilb_footer_personal_info_email' ) ) ? gilb_opt( 'gilb_footer_personal_info_email' ) : '';
        $gilb_pinfo_btn_label   = !empty( gilb_opt( 'gilb_footer_personal_info_button_label' ) ) ? gilb_opt( 'gilb_footer_personal_info_button_label' ) : '';
        $gilb_pinfo_btn_url     = !empty( gilb_opt( 'gilb_footer_personal_info_button_url' ) ) ? gilb_opt( 'gilb_footer_personal_info_button_url' ) : '';
    
    if( $gilb_personal_info ) {
        ?>
		<div class="col-lg-6">
			<div class="footer_text">
				<span><?php echo esc_html( $gilb_pinfo_label )?></span>
				<h2><?php echo esc_html( $gilb_pinfo_email )?></h2>
			</div>
		</div>
		<div class="col-lg-6">
			<div class="footer_btn">
				<a href="<?php echo esc_url( $gilb_pinfo_btn_url )?>" class="btn_1"><?php echo esc_html( $gilb_pinfo_btn_label )?></a>
			</div>
		</div>
		<?php 
	} ?>