	<?php 
		// Copyright text
		$url = 'https://colorlib.com/';
		$copyText = sprintf( __( 'Theme by %s colorlib %s Copyright &copy; %s  |  All rights reserved.', 'gilb' ), '<a target="_blank" href="' . esc_url( $url ) . '">', '</a>', date( 'Y' ) );
		$copyRight = !empty( gilb_opt( 'gilb_footer_copyright_text' ) ) ? gilb_opt( 'gilb_footer_copyright_text' ) : $copyText;
	?>
	
	<div class="col-lg-12">
		<div class="copyright_part text-center">
			<p class="footer-text m-0"><?php echo wp_kses_post( $copyRight ); ?></p>
		</div>
	</div>