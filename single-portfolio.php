<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package gilb
 */

get_header();
$project_img_id  = gilb_meta( 'project_img');
$ach_list        = gilb_meta( 'ach_list');
$project_img_url = wp_get_attachment_image_src( $project_img_id, 'gilb_portfolio_details_img_555x544' );
?>

    <!-- portfolio part start -->
    <section class="philosophy_part project_details section_padding">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <?php
                if( have_posts() ) {
                    while( have_posts() ) : the_post();
                    ?>
                    <div class="col-lg-5 col-md-6">
                        <div class="philophy_img">
                            <?php 
                                echo '<img src="'.$project_img_url[0].'" alt="'.get_the_title().'">';
                            ?>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="philophy_text">
                            <h2><?php the_title()?></h2>
                            <?php the_content()?>
                            <ul>
                                <?php
                                    foreach ( $ach_list as $single_list ) {
                                        echo '<li><a href="'.$single_list[1].'">'.$single_list[0].'</a></li>';
                                    }
                                ?>
                            </ul>
                        </div>
                    </div>
                    <?php
                    endwhile;
                }
                ?>
            </div>
        </div>
    </section>
    <!-- portfolio part end -->
    
    <?php
    if( gilb_opt('gilb_portfolio_single_rp') == 1 ) {
	    // Portfolio Recent Post
	    if ( function_exists( 'gilb_recent_portfolio' ) ) {
		    gilb_recent_portfolio();
	    }
    }

// Footer============
get_footer();