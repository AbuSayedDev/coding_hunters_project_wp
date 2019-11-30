<?php
/**
 * Header Customizer panel
 *
 * @package Codinghunters
 */

Codinghunters_Kirki::add_panel( 'codinghunters_panel_header', array(
    'priority'    => 10,
    'title'       => __( 'Header', 'codinghunters' ),
) );

//Menu
Codinghunters_Kirki::add_section( 'codinghunters_section_menu', array(
    'title'       	 => __( 'Menu', 'codinghunters' ),
    'panel'          => 'codinghunters_panel_header',
    'priority'       => 12,
) );
Codinghunters_Kirki::add_field( 'codinghunters', array(
	'type'        => 'radio',
	'settings'    => 'menu_type',
	'label'       => __( 'Menu type', 'codinghunters' ),
	'section'     => 'codinghunters_section_menu',
	'default'     => 'menuStyle2',
	'choices'     => array(
		'menuStyle1' => esc_attr__( 'Basic 1 - inside header', 'codinghunters' ),
		'menuStyle2' => esc_attr__( 'Basic 2 - outside header', 'codinghunters' ),
		'menuStyle5' => esc_attr__( 'Basic 3 - inside header', 'codinghunters' ),
		'menuStyle6' => esc_attr__( 'Basic 4 - inside header', 'codinghunters' ),
	),
) );
Codinghunters_Kirki::add_field( 'codinghunters', array(
	'type'        => 'radio',
	'settings'    => 'menu_container',
	'label'       => __( 'Menu width', 'codinghunters' ),
	'section'     => 'codinghunters_section_menu',
	'default'     => 'menuNotContained',
	'choices'     => array(
		'menuContained' 	=> esc_attr__( 'Contained', 'codinghunters' ),
		'menuNotContained' 	=> esc_attr__( 'Not contained', 'codinghunters' ),
	),
	'required'  => array(
		array(
			'setting'  => 'menu_type',
			'value'    => 'menuStyle5',
			'operator' => '!=',
		),
		array(
			'setting'  => 'menu_type',
			'value'    => 'menuStyle6',
			'operator' => '!=',
		),
	)
) );
Codinghunters_Kirki::add_field( 'codinghunters', array(
	'type'        => 'radio',
	'settings'    => 'sticky_menu',
	'label'       => esc_attr__( 'Sticky menu', 'codinghunters' ),
	'section'     => 'codinghunters_section_menu',
	'default'     => 'sticky-header',
	'choices'     => array(
		'sticky-header' 	=> esc_attr__( 'Sticky menu', 'codinghunters' ),
		'static-header' 	=> esc_attr__( 'Static menu', 'codinghunters' ),
	),	
) );

//Menu style 3 conditional options
Codinghunters_Kirki::add_field( 'codinghunters', array(
	'type'        => 'custom',
	'settings'    => 'titleMenuStyle3',
	'section'     => 'codinghunters_section_menu',
	'default'     => '<h4 style="text-transform: uppercase;color: #b9bdbf;letter-spacing: 1px;margin-bottom:0;">' . esc_attr__( '*Extended 1* menu options', 'codinghunters' ) . '</h4>',
    'required'  => array(
        array(
            'setting'  => 'menu_type',
            'value'    => 'menuStyle3',
            'operator' => '==',
        ),
    )
) );
Codinghunters_Kirki::add_field( 'codinghunters', array(
	'type'        => 'custom',
	'settings'    => 'dividerMenuStyle30',
	'section'     => 'codinghunters_section_menu',
	'default'     => '<hr>',
    'required'  => array(
        array(
            'setting'  => 'menu_type',
            'value'    => 'menuStyle3',
            'operator' => '==',
        ),
    )
) );
Codinghunters_Kirki::add_field( 'codinghunters', array(
	'type'       		=> 'text',
	'settings'    		=> 'x1_cta_text',
	'label'       		=> __( 'Call to action text', 'codinghunters' ),
	'section'     		=> 'codinghunters_section_menu',
	'default'     		=> esc_attr__( 'Get a quote', 'codinghunters' ),
    'required'  => array(
        array(
            'setting'  => 'menu_type',
            'value'    => 'menuStyle3',
            'operator' => '==',
        ),
    )	
) );
Codinghunters_Kirki::add_field( 'codinghunters', array(
	'type'       		=> 'url',
	'settings'    		=> 'x1_cta_url',
	'label'       		=> __( 'Call to action URL', 'codinghunters' ),
	'section'     		=> 'codinghunters_section_menu',
	'default'     		=> esc_attr__( 'http://example.org/contact/', 'codinghunters' ),
    'required'  => array(
        array(
            'setting'  => 'menu_type',
            'value'    => 'menuStyle3',
            'operator' => '==',
        ),
    )	
) );

Codinghunters_Kirki::add_field( 'codinghunters', array(
	'type'        => 'custom',
	'settings'    => 'dividerMenuStyle31',
	'section'     => 'codinghunters_section_menu',
	'default'     => '<hr>',
    'required'  => array(
        array(
            'setting'  => 'menu_type',
            'value'    => 'menuStyle3',
            'operator' => '==',
        ),
    )
) );


$social_networks = array( 
	'fa-facebook' => 'Facebook',
	'fa-twitter'  => 'Twitter',
	'fa-linkedin'  => 'Linkedin',
	'fa-dribbble'  => 'Dribbble',
	'fa-google-plus-g'  => 'Twitter',
	'fa-xing' => 'Xing',
	'fa-weibo' => 'Weibo',
	'fa-vimeo' => 'Vimeo',
	'fa-youtube' => 'YouTube',
	'fa-vk' => 'VK',
	'fa-pinterest-p' => 'Pinterest',
	'fa-instagram' => 'Instagram',
	'fa-github' => 'GitHub',
	'fa-bandcamp' => 'Bandcamp',
	'fa-behance' => 'Behance',
	'fa-foursquare' => 'Foursquare',
	'fa-reddit' => 'Reddit',
	'fa-spotify' => 'Spotify',
	'fa-soundcloud' => 'Soundcloud',
	'fa-telegram' => 'telegram',
);
Codinghunters_Kirki::add_field( 'codinghunters', array(
	'type'       		=> 'repeater',
	'settings'    		=> 'x1_header_social',
	'label'       		=> __( 'Social links', 'codinghunters' ),
	'description'       => __( 'Available for menu types Extended 1', 'codinghunters' ),	
	'section'     		=> 'codinghunters_section_menu',
	'row_label' => array(
		'type'  => 'field',
		'value' => esc_attr__('Social network', 'codinghunters' ),
		'field' => 'icon',
	),	
    'required'  => array(
        array(
            'setting'  => 'menu_type',
            'value'    => 'menuStyle3',
            'operator' => '==',
        ),
    ),
	'default'     => array(
		array(
			'icon'		=> 'fa-facebook',
			'link_url'  => 'https://facebook.com/yourprofile',
		),
		array(
			'icon'		=> 'fa-twitter',			
			'link_url'  => 'https://twitter.com/yourprofile',
		),
	),
	'fields' => array(
		'icon' => array(
			'type'        => 'select',
			'label'       => __( 'Social network', 'codinghunters' ),
			'choices'     => $social_networks,
		),
		'link_url' => array(
			'type'        => 'text',
			'label'       => esc_attr__( 'Social profile URL', 'codinghunters' ),
			'default'     => '',
		),
	)    
) );

Codinghunters_Kirki::add_field( 'codinghunters', array(
	'type'        => 'custom',
	'settings'    => 'dividerMenuStyle32',
	'section'     => 'codinghunters_section_menu',
	'default'     => '<hr>',
    'required'  => array(
        array(
            'setting'  => 'menu_type',
            'value'    => 'menuStyle3',
            'operator' => '==',
        ),
    )
) );

Codinghunters_Kirki::add_field( 'codinghunters', array(
	'type'       		=> 'text',
	'settings'    		=> 'x1_email_address',
	'label'       		=> __( 'Email address', 'codinghunters' ),
	'section'     		=> 'codinghunters_section_menu',
	'default'     		=> 'office@example.org',
    'required'  => array(
        array(
            'setting'  => 'menu_type',
            'value'    => 'menuStyle3',
            'operator' => '==',
        ),
    )	
) );

Codinghunters_Kirki::add_field( 'codinghunters', array(
	'type'        => 'custom',
	'settings'    => 'dividerMenuStyle33',
	'section'     => 'codinghunters_section_menu',
	'default'     => '<hr>',
    'required'  => array(
        array(
            'setting'  => 'menu_type',
            'value'    => 'menuStyle3',
            'operator' => '==',
        ),
    )
) );

Codinghunters_Kirki::add_field( 'codinghunters', array(
	'type'       		=> 'text',
	'settings'    		=> 'x1_phone_number',
	'label'       		=> __( 'Phone number', 'codinghunters' ),
	'section'     		=> 'codinghunters_section_menu',
	'default'     		=> '+333.222.111',
    'required'  => array(
        array(
            'setting'  => 'menu_type',
            'value'    => 'menuStyle3',
            'operator' => '==',
        ),
    )	
) );

//Menu style 4 conditional options
Codinghunters_Kirki::add_field( 'codinghunters', array(
	'type'        => 'custom',
	'settings'    => 'titleMenuStyle4',
	'section'     => 'codinghunters_section_menu',
	'default'     => '<h4 style="text-transform: uppercase;color: #b9bdbf;letter-spacing: 1px;margin-bottom:0;">' . esc_attr__( '*Extended 2* menu options', 'codinghunters' ) . '</h4>',
    'required'  => array(
        array(
            'setting'  => 'menu_type',
            'value'    => 'menuStyle4',
            'operator' => '==',
        ),
    )
) );
Codinghunters_Kirki::add_field( 'codinghunters', array(
	'type'        => 'custom',
	'settings'    => 'dividerMenuStyle40',
	'section'     => 'codinghunters_section_menu',
	'default'     => '<hr>',
    'required'  => array(
        array(
            'setting'  => 'menu_type',
            'value'    => 'menuStyle4',
            'operator' => '==',
        ),
    )
) );
Codinghunters_Kirki::add_field( 'codinghunters', array(
	'type'       		=> 'text',
	'settings'    		=> 'cta_text_menustyle4',
	'label'       		=> __( 'Call to action text', 'codinghunters' ),
	'section'     		=> 'codinghunters_section_menu',
	'default'     		=> esc_attr__( 'Get a quote', 'codinghunters' ),
    'required'  => array(
        array(
            'setting'  => 'menu_type',
            'value'    => 'menuStyle4',
            'operator' => '==',
        ),
    )	
) );
Codinghunters_Kirki::add_field( 'codinghunters', array(
	'type'       		=> 'url',
	'settings'    		=> 'cta_url_menustyle4',
	'label'       		=> __( 'Call to action URL', 'codinghunters' ),
	'section'     		=> 'codinghunters_section_menu',
	'default'     		=> esc_attr__( 'http://example.org/contact/', 'codinghunters' ),
    'required'  => array(
        array(
            'setting'  => 'menu_type',
            'value'    => 'menuStyle4',
            'operator' => '==',
        ),
    )	
) );

Codinghunters_Kirki::add_field( 'codinghunters', array(
	'type'        => 'custom',
	'settings'    => 'dividerMenuStyle41',
	'section'     => 'codinghunters_section_menu',
	'default'     => '<hr>',
    'required'  => array(
        array(
            'setting'  => 'menu_type',
            'value'    => 'menuStyle4',
            'operator' => '==',
        ),
    )
) );
Codinghunters_Kirki::add_field( 'codinghunters', array(
	'type'       		=> 'text',
	'settings'    		=> 'above_phone_number',
	'label'       		=> __( 'Above phone number text', 'codinghunters' ),
	'section'     		=> 'codinghunters_section_menu',
	'default'     		=> esc_attr__( 'Call us', 'codinghunters' ),
    'required'  => array(
        array(
            'setting'  => 'menu_type',
            'value'    => 'menuStyle4',
            'operator' => '==',
        ),
    )	
) );
Codinghunters_Kirki::add_field( 'codinghunters', array(
	'type'       		=> 'text',
	'settings'    		=> 'phone_number',
	'label'       		=> __( 'Phone number', 'codinghunters' ),
	'section'     		=> 'codinghunters_section_menu',
	'default'     		=> '999.999.999',
    'required'  => array(
        array(
            'setting'  => 'menu_type',
            'value'    => 'menuStyle4',
            'operator' => '==',
        ),
    )	
) );
Codinghunters_Kirki::add_field( 'codinghunters', array(
	'type'        => 'custom',
	'settings'    => 'dividerMenuStyle42',
	'section'     => 'codinghunters_section_menu',
	'default'     => '<hr>',
    'required'  => array(
        array(
            'setting'  => 'menu_type',
            'value'    => 'menuStyle4',
            'operator' => '==',
        ),
    )		
) );

Codinghunters_Kirki::add_field( 'codinghunters', array(
	'type'       		=> 'text',
	'settings'    		=> 'above_address',
	'label'       		=> __( 'Above address text', 'codinghunters' ),
	'section'     		=> 'codinghunters_section_menu',
	'default'     		=> esc_attr__( 'Address', 'codinghunters' ),
    'required'  => array(
        array(
            'setting'  => 'menu_type',
            'value'    => 'menuStyle4',
            'operator' => '==',
        ),
    )	
) );
Codinghunters_Kirki::add_field( 'codinghunters', array(
	'type'       		=> 'text',
	'settings'    		=> 'address_details',
	'label'       		=> __( 'Your address', 'codinghunters' ),
	'section'     		=> 'codinghunters_section_menu',
	'default'     		=> esc_attr__( 'Brooklyn Street', 'codinghunters' ),
    'required'  => array(
        array(
            'setting'  => 'menu_type',
            'value'    => 'menuStyle4',
            'operator' => '==',
        ),
    )	
) );
Codinghunters_Kirki::add_field( 'codinghunters', array(
	'type'        => 'custom',
	'settings'    => 'dividerMenuStyle43',
	'section'     => 'codinghunters_section_menu',
	'default'     => '<hr>',
    'required'  => array(
        array(
            'setting'  => 'menu_type',
            'value'    => 'menuStyle4',
            'operator' => '==',
        ),
    )		
) );

Codinghunters_Kirki::add_field( 'codinghunters', array(
	'type'       		=> 'text',
	'settings'    		=> 'above_opening',
	'label'       		=> __( 'Above opening hours', 'codinghunters' ),
	'section'     		=> 'codinghunters_section_menu',
	'default'     		=> esc_attr__( 'Opening hours', 'codinghunters' ),
    'required'  => array(
        array(
            'setting'  => 'menu_type',
            'value'    => 'menuStyle4',
            'operator' => '==',
        ),
    )	
) );
Codinghunters_Kirki::add_field( 'codinghunters', array(
	'type'       		=> 'text',
	'settings'    		=> 'opening_hours',
	'label'       		=> __( 'Opening hours', 'codinghunters' ),
	'section'     		=> 'codinghunters_section_menu',
	'default'     		=> esc_attr__( '9-18 Mon-Fri', 'codinghunters' ),
    'required'  => array(
        array(
            'setting'  => 'menu_type',
            'value'    => 'menuStyle4',
            'operator' => '==',
        ),
    )	
) );
Codinghunters_Kirki::add_field( 'codinghunters', array(
	'type'        => 'custom',
	'settings'    => 'dividerMenuStyle44',
	'section'     => 'codinghunters_section_menu',
	'default'     => '<hr>',
    'required'  => array(
        array(
            'setting'  => 'menu_type',
            'value'    => 'menuStyle4',
            'operator' => '==',
        ),
    )		
) );

Codinghunters_Kirki::add_field( 'codinghunters', array(
	'type'        => 'checkbox',
	'settings'    => 'disable_header_search',
	'section'     => 'codinghunters_section_menu',
	'default'     => '',	
	'label'       => __( 'Disable header search icon?', 'codinghunters' ),
) );

// Menu style 5
Codinghunters_Kirki::add_field( 'codinghunters', array(
	'type'       		=> 'text',
	'settings'    		=> 'menu5_custom_text',
	'label'       		=> __( 'Custom Text', 'codinghunters' ),
	'section'     		=> 'codinghunters_section_menu',
	'default'     		=> __( 'Call Us', 'codinghunters' ),
	'required'  => array(
		array(
			'setting'  => 'menu_type',
			'value'    => 'menuStyle5',
			'operator' => '==',
		),
	)
) );

// Menu style 5
Codinghunters_Kirki::add_field( 'codinghunters', array(
	'type'       		=> 'text',
	'settings'    		=> 'menu5_facebook',
	'label'       		=> __( 'Facebook', 'codinghunters' ),
	'section'     		=> 'codinghunters_section_menu',
	'required'  => array(
		array(
			'setting'  => 'menu_type',
			'value'    => 'menuStyle5',
			'operator' => '==',
		),
	)
) );
// Menu style 5
Codinghunters_Kirki::add_field( 'codinghunters', array(
	'type'       		=> 'text',
	'settings'    		=> 'menu5_twitter',
	'label'       		=> __( 'Twitter', 'codinghunters' ),
	'section'     		=> 'codinghunters_section_menu',
	'required'  => array(
		array(
			'setting'  => 'menu_type',
			'value'    => 'menuStyle5',
			'operator' => '==',
		),
	)
) );
// Menu style 5
Codinghunters_Kirki::add_field( 'codinghunters', array(
	'type'       		=> 'text',
	'settings'    		=> 'menu5_google',
	'label'       		=> __( 'Google +', 'codinghunters' ),
	'section'     		=> 'codinghunters_section_menu',
	'default'     		=> '',
	'required'  => array(
		array(
			'setting'  => 'menu_type',
			'value'    => 'menuStyle5',
			'operator' => '==',
		),
	)
) );
// Menu style 5
Codinghunters_Kirki::add_field( 'codinghunters', array(
	'type'       		=> 'text',
	'settings'    		=> 'menu5_linkedin',
	'label'       		=> __( 'Linkedin', 'codinghunters' ),
	'section'     		=> 'codinghunters_section_menu',
	'required'  => array(
		array(
			'setting'  => 'menu_type',
			'value'    => 'menuStyle5',
			'operator' => '==',
		),
	)
) );
// Menu style 5
Codinghunters_Kirki::add_field( 'codinghunters', array(
	'type'       		=> 'text',
	'settings'    		=> 'menu5_skype',
	'label'       		=> __( 'Skype', 'codinghunters' ),
	'section'     		=> 'codinghunters_section_menu',
	'required'  => array(
		array(
			'setting'  => 'menu_type',
			'value'    => 'menuStyle5',
			'operator' => '==',
		),
	)
) );
// Menu style 6
Codinghunters_Kirki::add_field( 'codinghunters', array(
	'type'       		=> 'textarea',
	'settings'    		=> 'menu6_top_section_left',
	'label'       		=> __( 'Block Top Left Content', 'codinghunters' ),
	'section'     		=> 'codinghunters_section_menu',
	'required'  => array(
		array(
			'setting'  => 'menu_type',
			'value'    => 'menuStyle6',
			'operator' => '==',
		),
	)
) );
// Menu style 6
Codinghunters_Kirki::add_field( 'codinghunters', array(
	'type'       		=> 'textarea',
	'settings'    		=> 'menu6_top_section_right',
	'label'       		=> __( 'Block Top Right Content', 'codinghunters' ),
	'section'     		=> 'codinghunters_section_menu',
	'required'  => array(
		array(
			'setting'  => 'menu_type',
			'value'    => 'menuStyle6',
			'operator' => '==',
		),
	)
) );

Codinghunters_Kirki::add_field( 'codinghunters', array(
	'type'       		=> 'text',
	'settings'    		=> 'menu6_button_text',
	'label'       		=> __( 'Button Text', 'codinghunters' ),
	'section'     		=> 'codinghunters_section_menu',
	'required'  => array(
		array(
			'setting'  => 'menu_type',
			'value'    => 'menuStyle6',
			'operator' => '==',
		),
	)
) );

Codinghunters_Kirki::add_field( 'codinghunters', array(
	'type'       		=> 'text',
	'settings'    		=> 'menu6_button_url',
	'label'       		=> __( 'Button Url', 'codinghunters' ),
	'section'     		=> 'codinghunters_section_menu',
	'required'  => array(
		array(
			'setting'  => 'menu_type',
			'value'    => 'menuStyle6',
			'operator' => '==',
		),
	)
) );

/**
 * Checks if menu type is extended
 */
function codinghunters_menu_type_callback() {
    $type = get_theme_mod( 'menu_type' );

    if ( $type == 'menuStyle3' || $type == 'menuStyle4' ) {
    	return true;
    } else {
    	return false;
    }
}