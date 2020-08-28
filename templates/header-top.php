<!-- ***** Header Area Start ***** -->
<header class="main_menu home_menu">
    <div class="container">
        <div class="row align-items-center">
            <!-- Menu Area Start -->
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <?php 
                    // Header Logo
                    echo gilb_theme_logo('navbar-brand');
                    ?>
                    <!-- Menu Area -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="menu_icon"><i class="ti-menu"></i></span>
                    </button>

                    <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                        <?php 
                        if(has_nav_menu('primary-menu')) {
                            wp_nav_menu(array(
                                'menu'           => 'primary-menu',
                                'theme_location' => 'primary-menu',
                                'menu_id'        => 'menu-main-menu',
                                'container_class'=> 'collapse navbar-collapse main-menu-item',
                                'container_id'   => 'navbarSupportedContent',
                                'menu_class'     => 'navbar-nav',
                                'walker'         => new gilb_bootstrap_navwalker,
                                'depth'          => 3
                            ));
                        }
                        
                        $social_profile = gilb_opt( 'gilb_social_profile_toggle' );
                        if( $social_profile == 1 ) {
                            $social_icons = gilb_opt( 'gilb_header_social' );
                            ?> 
                            <div class="social_icon">
                                <?php
                                if ( is_array( $social_icons ) ) {
                                    for ( $i = 0; $i < count($social_icons); $i++ ) {
                                        $social_icon = $social_icons[$i]['social_icon'];
                                        ?>
                                        <a href="<?php echo esc_url($social_icons[$i]['social_url']);?>"><i class="<?php echo esc_html( $social_icon );?>"></i></a>
                                        <?php
                                    }
                                }
                                ?>
                            </div>
                            <?php 
                        } 
                        ?>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>