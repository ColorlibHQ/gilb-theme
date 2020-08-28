<?php 
/**
 * @Packge     : Gilb
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 * Customizer section fields
 *
 */

/***********************************
 * General Section Fields
 ***********************************/

 // Theme color field
Epsilon_Customizer::add_field(
    'gilb_theme_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Theme Color', 'gilb' ),
        'description' => esc_html__( 'Select the theme color.', 'gilb' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'gilb_general_section',
        'default'     => '#0a0b4d',
    )
);

// Secondary Theme color field
Epsilon_Customizer::add_field(
    'gilb_secondary_theme_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Secondary Theme Color', 'gilb' ),
        'description' => esc_html__( 'Select the secondary theme color.', 'gilb' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'gilb_general_section',
        'default'     => '#ea5267',
    )
);

// Header social profile section
Epsilon_Customizer::add_field(
    'header_soical_profile_separator',
    array(
        'type'        => 'epsilon-separator',
        'label'       => esc_html__( 'Header Social Profile Section', 'gilb' ),
        'section'     => 'gilb_header_section',
        'default'     => true,

    )
);

// Header Social Show/Hide
Epsilon_Customizer::add_field(
    'gilb_social_profile_toggle',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Social Profile Show/Hide', 'gilb' ),
        'section'     => 'gilb_header_section',
        'default'     => true,
    )
);

//Social Profile links
Epsilon_Customizer::add_field(
	'gilb_header_social',
	array(
		'type'         => 'epsilon-repeater',
		'section'      => 'gilb_header_section',
		'label'        => esc_html__( 'Social Profile Links', 'gilb' ),
        'button_label' => esc_html__( 'Add new social link', 'gilb' ),
		'row_label'    => array(
			'type'  => 'field',
			'field' => 'social_link_title',
		),
		'default'      => [
            [
                'social_link_title' => esc_html__( 'Facebook', 'gilb' ),
                'social_url'  => '#',
                'social_icon'  => 'fa fa-facebook',
            ],
            [
                'social_link_title' => esc_html__( 'Twitter', 'gilb' ),
                'social_url'  => '#',
                'social_icon'  => 'fa fa-twitter',
            ],
            [
                'social_link_title' => esc_html__( 'Instagram', 'gilb' ),
                'social_url'  => '#',
                'social_icon'  => 'fa fa-instagram',
            ],
            [
                'social_link_title' => esc_html__( 'Behance', 'gilb' ),
                'social_url'  => '#',
                'social_icon'  => 'fa fa-behance',
            ],
        ],
		'fields'       => array(
			'social_link_title'       => array(
				'label'             => esc_html__( 'Title', 'gilb' ),
				'type'              => 'text',
				'sanitize_callback' => 'wp_kses_post',
				'default'           => 'Twitter',
			),
			'social_url' => array(
				'label'             => esc_html__( 'Social URL', 'gilb' ),
				'type'              => 'text',
				'sanitize_callback' => 'sanitize_text_field',
				'default'           => '#',
			),
			'social_icon'        => array(
				'label'   => esc_html__( 'Icon', 'gilb' ),
				'type'    => 'epsilon-icon-picker',
				'default' => 'fa fa-twitter',
			),
			
		),
	)
);

// Header color sections
Epsilon_Customizer::add_field(
    'header_color_section',
    array(
        'type'        => 'epsilon-separator',
        'label'       => esc_html__( 'Header Color Section', 'gilb' ),
        'section'     => 'gilb_header_section',

    )
);
 
// Header background color field
Epsilon_Customizer::add_field(
    'gilb_header_bg_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Sticky Header BG Color', 'gilb' ),
        'description' => esc_html__( 'Select the header background color.', 'gilb' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'gilb_header_section',
        'default'     => '#0a0b4d',
    )
);

// Header nav menu color field
Epsilon_Customizer::add_field(
    'gilb_header_menu_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header menu color', 'gilb' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'gilb_header_section',
        'default'     => '#ffffff',
    )
);

// Header nav menu hover color field
Epsilon_Customizer::add_field(
    'gilb_header_menu_hover_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header menu hover color', 'gilb' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'gilb_header_section',
        'default'     => '#ea5267',
    )
);

// Header dropdown menu bg color field
Epsilon_Customizer::add_field(
    'gilb_header_drop_menu_bg_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Dropdown menu BG color', 'gilb' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'gilb_header_section',
        'default'     => '#ea5267',
    )
);

// Header dropdown menu color field
Epsilon_Customizer::add_field(
    'gilb_header_drop_menu_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Dropdown menu color', 'gilb' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'gilb_header_section',
        'default'     => '#ffffff',
    )
);

// Header dropdown menu hover color field
Epsilon_Customizer::add_field(
    'gilb_header_drop_menu_hover_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Dropdown menu hover color', 'gilb' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'gilb_header_section',
        'default'     => '#ffffff',
    )
);

/***********************************
 * Blog Section Fields
 ***********************************/
 
// Post excerpt length field
Epsilon_Customizer::add_field(
    'gilb_excerpt_length',
    array(
        'type'        => 'text',
        'label'       => esc_html__( 'Set post excerpt length', 'gilb' ),
        'description' => esc_html__( 'Set post excerpt length.', 'gilb' ),
        'section'     => 'gilb_blog_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'     => '30',
    )
);

// Blog single page social share icon
Epsilon_Customizer::add_field(
    'gilb_blog_meta',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Blog page post meta show/hide', 'gilb' ),
        'section'     => 'gilb_blog_section',
        'default'     => true
    )
);
Epsilon_Customizer::add_field(
    'gilb_like_btn',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Blog Single Page Like Button show/hide', 'gilb' ),
        'section'     => 'gilb_blog_section',
        'default'     => true
    )
);
Epsilon_Customizer::add_field(
    'gilb_blog_share',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Blog Single Page Share show/hide', 'gilb' ),
        'section'     => 'gilb_blog_section',
        'default'     => true
    )
);


/***********************************
 * Portfolio Section Fields
 ***********************************/
 
// Portfolio related project toggle
Epsilon_Customizer::add_field(
    'gilb_portfolio_single_rp',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Portfolio related project Show/Hide', 'gilb' ),
        'section'     => 'gilb_portfolio_section',
        'default'     => true,
    )
);

// Portfolio related project's section title
Epsilon_Customizer::add_field(
    'gilb_portfolio_related_projects_sec_title',
    array(
        'type'              => 'text',
        'label'             => esc_html__( 'Related project\'s section title', 'gilb' ),
        'section'           => 'gilb_portfolio_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => esc_html__( 'Related work', 'gilb' ),
    )
);

// Portfolio related project's item
Epsilon_Customizer::add_field(
    'gilb_portfolio_related_projects_item',
    array(
        'type'              => 'text',
        'label'             => esc_html__( 'Related project\'s item', 'gilb' ),
        'section'           => 'gilb_portfolio_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => absint(3),
    )
);

/***********************************
 * 404 Page Section Fields
 ***********************************/

// 404 text #1 field
Epsilon_Customizer::add_field(
    'gilb_fof_titleone',
    array(
        'type'              => 'text',
        'label'             => esc_html__( '404 Text #1', 'gilb' ),
        'section'           => 'gilb_fof_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => 'Say Hello.'
    )
);
// 404 text #2 field
Epsilon_Customizer::add_field(
    'gilb_fof_titletwo',
    array(
        'type'              => 'text',
        'label'             => esc_html__( '404 Text #2', 'gilb' ),
        'section'           => 'gilb_fof_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => 'Say Hello.'
    )
);
// 404 text #1 color field
Epsilon_Customizer::add_field(
    'gilb_fof_textone_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( '404 Text #1 Color', 'gilb' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'gilb_fof_section',
        'default'     => '#000000',
    )
);
// 404 text #2 color field
Epsilon_Customizer::add_field(
    'gilb_fof_texttwo_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( '404 Text #2 Color', 'gilb' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'gilb_fof_section',
        'default'     => '#656565',
    )
);
// 404 background color field
Epsilon_Customizer::add_field(
    'gilb_fof_bg_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( '404 Page Background Color', 'gilb' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'gilb_fof_section',
        'default'     => '#fff',
    )
);

/***********************************
 * Footer Section Fields
 ***********************************/

// Footer personal info section
Epsilon_Customizer::add_field(
    'gilb_personal_info_section_separator',
    array(
        'type'        => 'epsilon-separator',
        'label'       => esc_html__( 'Footer personal info show/hide', 'gilb' ),
        'section'     => 'gilb_footer_section',

    )
);

// Footer personal info toggle
Epsilon_Customizer::add_field(
    'gilb_personal_info_section',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Footer personal info toggle', 'gilb' ),
        'description' => esc_html__( 'Toggle to display footer widgets.', 'gilb' ),
        'section'     => 'gilb_footer_section',
        'default'     => true,
    )
);

// Footer personal info title
Epsilon_Customizer::add_field(
    'gilb_footer_personal_info_title',
    array(
        'type'              => 'text',
        'label'             => esc_html__( 'Footer personal info title', 'gilb' ),
        'section'           => 'gilb_footer_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => esc_html__( 'Discuss your project now', 'gilb' ),
    )
);

// Footer personal info email
Epsilon_Customizer::add_field(
    'gilb_footer_personal_info_email',
    array(
        'type'              => 'text',
        'label'             => esc_html__( 'Footer personal info email', 'gilb' ),
        'section'           => 'gilb_footer_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => esc_html__( 'example@gilb.com', 'gilb' ),
    )
);

// Footer personal info button label
Epsilon_Customizer::add_field(
    'gilb_footer_personal_info_button_label',
    array(
        'type'              => 'text',
        'label'             => esc_html__( 'Footer personal info button label', 'gilb' ),
        'section'           => 'gilb_footer_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => esc_html__( 'Download CV', 'gilb' ),
    )
);

// Footer personal info button url
Epsilon_Customizer::add_field(
    'gilb_footer_personal_info_button_url',
    array(
        'type'              => 'text',
        'label'             => esc_html__( 'Footer personal info button url', 'gilb' ),
        'section'           => 'gilb_footer_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => '#',
    )
);

// Footer Widget section
Epsilon_Customizer::add_field(
    'footer_widget_separator',
    array(
        'type'        => 'epsilon-separator',
        'label'       => esc_html__( 'Footer Widget Section', 'gilb' ),
        'section'     => 'gilb_footer_section',

    )
);

// Footer widget toggle field
Epsilon_Customizer::add_field(
    'gilb_footer_widget_toggle',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Footer widget show/hide', 'gilb' ),
        'description' => esc_html__( 'Toggle to display footer widgets.', 'gilb' ),
        'section'     => 'gilb_footer_section',
        'default'     => true,
    )
);

// Footer Copyright section
Epsilon_Customizer::add_field(
    'gilb_footer_copyright_separator',
    array(
        'type'        => 'epsilon-separator',
        'label'       => esc_html__( 'Footer Copyright Section', 'gilb' ),
        'section'     => 'gilb_footer_section',
        'default'     => true,

    )
);

// Footer copyright text field
$url = 'https://colorlib.com/';
$copyText = sprintf( __( 'Theme by %s colorlib %s Copyright &copy; %s  |  All rights reserved.', 'gilb' ), '<a target="_blank" href="' . esc_url( $url ) . '">', '</a>', date( 'Y' ) );
Epsilon_Customizer::add_field(
    'gilb_footer_copyright_text',
    array(
        'type'        => 'epsilon-text-editor',
        'label'       => esc_html__( 'Footer copyright text', 'gilb' ),
        'section'     => 'gilb_footer_section',
        'default'     => wp_kses_post( $copyText ),
    )
);

// Footer widget background color field
Epsilon_Customizer::add_field(
    'gilb_footer_bg_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Background Color', 'gilb' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'gilb_footer_section',
        'default'     => '#0a0b4d',
    )
);

// Footer widget text color field
Epsilon_Customizer::add_field(
    'gilb_footer_widget_text_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Text Color', 'gilb' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'gilb_footer_section',
        'default'     => '#ffffff',
    )
);

// Footer widget anchor color field
Epsilon_Customizer::add_field(
    'gilb_footer_widget_anchor_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Anchor Color', 'gilb' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'gilb_footer_section',
        'default'     => '#ffffff',
    )
);

// Footer widget anchor hover color field
Epsilon_Customizer::add_field(
    'gilb_footer_widget_anchor_hover_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Anchor Hover Color', 'gilb' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'gilb_footer_section',
        'default'     => '#ea5267',
    )
);

