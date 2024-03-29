<?php
/**
 * Colors Customizer panel
 *
 * @package Codinghunters
 */

/**
 * Colors panel
 */
Codinghunters_Kirki::add_panel( 'codinghunters_panel_colors', array(
    'priority'    => 10,
    'title'       => esc_attr__( 'Colors', 'codinghunters' ),
) );

/**
 * General
 */
Codinghunters_Kirki::add_field( 'codinghunters', array(
	'type'        => 'color',
	'settings'    => 'color_primary',
	'label'       => esc_attr__( 'Primary color', 'codinghunters' ),
	'section'     => 'colors',
	'default'     => '#f0437e',
	'transport'	 => 'auto',
	'output' => array(
		array(
			'element'  => '.woocommerce div.product .woocommerce-tabs ul.tabs li.active a,.product div.entry-summary p.price, .product div.entry-summary span.price,.athemes-blog:not(.codinghunters_athemes_blog_skin) .posted-on a,.athemes-blog:not(.codinghunters_athemes_blog_skin) .byline a:hover,.testimonials-section.style1:before,.single-post .read-more-link .gt,.blog-loop .read-more-link .gt,.single-post .posted-on a,.blog-loop .posted-on a,.entry-title a:hover,.codinghunters_recent_entries .post-date,.menuStyle3 .top-bar .contact-item .fa,.menuStyle4 .contact-area .contact-block .contact-icon,.widget_categories li:hover::before,.widget_categories li:hover a',
			'property' => 'color',
		),
		array(
			'element'  => '.product .single_add_to_cart_button.button.alt,.menuStyle4 .contact-area .contact-block .contact-icon,button,.button,input[type="button"],input[type="reset"],input[type="submit"]',
			'property' => 'border-color',
		),		
		array(
			'element'  => '.woocommerce-checkout button.button.alt,.woocommerce-checkout button.button.alt:hover,.woocommerce-cart .cart-collaterals .cart_totals .button:hover,.woocommerce-cart .cart-collaterals .cart_totals .button,.product .single_add_to_cart_button.button.alt:hover,.product .single_add_to_cart_button.button.alt,.woocommerce ul.products li.product .button,.menuStyle2 .main-navigation a:hover:after, .menuStyle2 .main-navigation .current-menu-item:after,.comments-area .comment-reply-link:hover,.menuStyle4 .main-navigation .header-cta:before,.menuStyle4 .main-navigation .header-cta,button,.button,input[type="button"],input[type="reset"],input[type="submit"],.menuStyle3 .main-navigation a:hover:after,.menuStyle3 .main-navigation .current-menu-item:after',
			'property' => 'background-color',
		),		
	),			
) );

/**
 * Header colors
 */
Codinghunters_Kirki::add_section( 'codinghunters_section_colors_header', array(
    'title'       	 => esc_attr__( 'Header', 'codinghunters' ),
	'panel'          => 'codinghunters_panel_colors',
	'description'    => esc_attr__( 'Different color options show up here, based on the type of menu you select from the Header > Menu section', 'codinghunters' ),
    'priority'       => 11,
) );

/**
 * Menu type 1
 */
Codinghunters_Kirki::add_field( 'codinghunters', array(
	'type'        => 'color',
	'settings'    => 'color_mt1_site_title',
	'label'       => esc_attr__( 'Site title', 'codinghunters' ),
	'section'     => 'codinghunters_section_colors_header',
	'default'     => '#ffffff',
    'required'  => array(
        array(
            'setting'  => 'menu_type',
            'value'    => 'menuStyle1',
            'operator' => '==',
        ),
	),
	'transport'	 => 'auto',
	'output' => array(
		array(
			'element'  => '.menuStyle1 .site-title a',
			'property' => 'color',
		),
	),			
) );
Codinghunters_Kirki::add_field( 'codinghunters', array(
	'type'        => 'color',
	'settings'    => 'color_mt1_site_title_sticky',
	'label'       => esc_attr__( 'Site title (sticky)', 'codinghunters' ),
	'section'     => 'codinghunters_section_colors_header',
	'default'     => '#191919',
    'required'  => array(
        array(
            'setting'  => 'menu_type',
            'value'    => 'menuStyle1',
            'operator' => '==',
        ),
	),
	'transport'	 => 'auto',
	'output' => array(
		array(
			'element'  => '.menuStyle1 .sticky-wrapper.is-sticky .site-title a',
			'property' => 'color',
		),
	),			
) );
Codinghunters_Kirki::add_field( 'codinghunters', array(
	'type'        => 'color',
	'settings'    => 'color_mt1_site_desc',
	'label'       => esc_attr__( 'Site description', 'codinghunters' ),
	'section'     => 'codinghunters_section_colors_header',
	'default'     => '#ffffff',
    'required'  => array(
        array(
            'setting'  => 'menu_type',
            'value'    => 'menuStyle1',
            'operator' => '==',
        ),
	),
	'transport'	 => 'auto',
	'output' => array(
		array(
			'element'  => '.menuStyle1 .site-description',
			'property' => 'color',
		),
	),
) );
Codinghunters_Kirki::add_field( 'codinghunters', array(
	'type'        => 'color',
	'settings'    => 'color_mt1_site_desc_sticky',
	'label'       => esc_attr__( 'Site description (sticky)', 'codinghunters' ),
	'section'     => 'codinghunters_section_colors_header',
	'default'     => '#191919',
    'required'  => array(
        array(
            'setting'  => 'menu_type',
            'value'    => 'menuStyle1',
            'operator' => '==',
        ),
	),
	'transport'	 => 'auto',
	'output' => array(
		array(
			'element'  => '.menuStyle1 .sticky-wrapper.is-sticky .site-description',
			'property' => 'color',
		),
	),
) );
Codinghunters_Kirki::add_field( 'codinghunters', array(
	'type'        => 'color',
	'settings'    => 'color_mt1_top_menu_items',
	'label'       => esc_attr__( 'Top level menu items', 'codinghunters' ),
	'section'     => 'codinghunters_section_colors_header',
	'default'     => '#ffffff',
    'required'  => array(
        array(
            'setting'  => 'menu_type',
            'value'    => 'menuStyle1',
            'operator' => '==',
        ),
	),
	'transport'	 => 'auto',
	'output' => array(
		array(
			'element'  => '.menuStyle1 .main-navigation a, .menuStyle1 .fa-search',
			'property' => 'color',
		),
	),
) );
Codinghunters_Kirki::add_field( 'codinghunters', array(
	'type'        => 'color',
	'settings'    => 'color_mt1_top_menu_items_sticky',
	'label'       => esc_attr__( 'Top level menu items (sticky)', 'codinghunters' ),
	'section'     => 'codinghunters_section_colors_header',
	'default'     => '#191919',
    'required'  => array(
        array(
            'setting'  => 'menu_type',
            'value'    => 'menuStyle1',
            'operator' => '==',
        ),
	),
	'transport'	 => 'auto',
	'output' => array(
		array(
			'element'  => '.menuStyle1 .sticky-wrapper.is-sticky .main-navigation a, .menuStyle1 .sticky-wrapper.is-sticky .fa-search',
			'property' => 'color',
		),
	),
) );

Codinghunters_Kirki::add_field( 'codinghunters', array(
	'type'        => 'color',
	'settings'    => 'color_mt1_bg_color',
	'label'       => esc_attr__( 'Background color', 'codinghunters' ),
	'section'     => 'codinghunters_section_colors_header',
	'default'     => '',
    'required'  => array(
        array(
            'setting'  => 'menu_type',
            'value'    => 'menuStyle1',
            'operator' => '==',
        ),
	),
	'choices'     => array(
		'alpha' => true,
	),	
	'transport'	 => 'auto',
	'output' => array(
		array(
			'element'  => '.menuStyle1 .site-header, .menuStyle1.page-template-template_page-builder .site-header',
			'property' => 'background-color',
		),
	),
) );
Codinghunters_Kirki::add_field( 'codinghunters', array(
	'type'        => 'color',
	'settings'    => 'color_mt1_bg_color_sticky',
	'label'       => esc_attr__( 'Background color (sticky)', 'codinghunters' ),
	'section'     => 'codinghunters_section_colors_header',
	'default'     => '#ffffff',
    'required'  => array(
        array(
            'setting'  => 'menu_type',
            'value'    => 'menuStyle1',
            'operator' => '==',
        ),
	),
	'choices'     => array(
		'alpha' => true,
	),	
	'transport'	 => 'auto',
	'output' => array(
		array(
			'element'  => '.menuStyle1 .is-sticky .site-header',
			'property' => 'background-color',
		),
	),
) );

/**
 * Menu type 2
 */
Codinghunters_Kirki::add_field( 'codinghunters', array(
	'type'        => 'color',
	'settings'    => 'color_mt2_site_title',
	'label'       => esc_attr__( 'Site title', 'codinghunters' ),
	'section'     => 'codinghunters_section_colors_header',
	'default'     => '#191919',
    'required'  => array(
        array(
            'setting'  => 'menu_type',
            'value'    => 'menuStyle2',
            'operator' => '==',
        ),
	),
	'transport'	 => 'auto',
	'output' => array(
		array(
			'element'  => '.menuStyle2 .site-title a',
			'property' => 'color',
		),
	),			
) );
Codinghunters_Kirki::add_field( 'codinghunters', array(
	'type'        => 'color',
	'settings'    => 'color_mt2_site_title_sticky',
	'label'       => esc_attr__( 'Site title (sticky)', 'codinghunters' ),
	'section'     => 'codinghunters_section_colors_header',
	'default'     => '#191919',
    'required'  => array(
        array(
            'setting'  => 'menu_type',
            'value'    => 'menuStyle2',
            'operator' => '==',
        ),
	),
	'transport'	 => 'auto',
	'output' => array(
		array(
			'element'  => '.menuStyle2 .sticky-wrapper.is-sticky .site-title a',
			'property' => 'color',
		),
	),			
) );
Codinghunters_Kirki::add_field( 'codinghunters', array(
	'type'        => 'color',
	'settings'    => 'color_mt2_site_desc',
	'label'       => esc_attr__( 'Site description', 'codinghunters' ),
	'section'     => 'codinghunters_section_colors_header',
	'default'     => '#707070',
    'required'  => array(
        array(
            'setting'  => 'menu_type',
            'value'    => 'menuStyle2',
            'operator' => '==',
        ),
	),
	'transport'	 => 'auto',
	'output' => array(
		array(
			'element'  => '.menuStyle2 .site-description',
			'property' => 'color',
		),
	),
) );
Codinghunters_Kirki::add_field( 'codinghunters', array(
	'type'        => 'color',
	'settings'    => 'color_mt2_site_desc_sticky',
	'label'       => esc_attr__( 'Site description (sticky)', 'codinghunters' ),
	'section'     => 'codinghunters_section_colors_header',
	'default'     => '#707070',
    'required'  => array(
        array(
            'setting'  => 'menu_type',
            'value'    => 'menuStyle2',
            'operator' => '==',
        ),
	),
	'transport'	 => 'auto',
	'output' => array(
		array(
			'element'  => '.menuStyle2 .sticky-wrapper.is-sticky .site-description',
			'property' => 'color',
		),
	),
) );
Codinghunters_Kirki::add_field( 'codinghunters', array(
	'type'        => 'color',
	'settings'    => 'color_mt2_top_menu_items',
	'label'       => esc_attr__( 'Top level menu items', 'codinghunters' ),
	'section'     => 'codinghunters_section_colors_header',
	'default'     => '#191919',
    'required'  => array(
        array(
            'setting'  => 'menu_type',
            'value'    => 'menuStyle2',
            'operator' => '==',
        ),
	),
	'transport'	 => 'auto',
	'output' => array(
		array(
			'element'  => '.menuStyle2 .main-navigation a',
			'property' => 'color',
		),
	),
) );
Codinghunters_Kirki::add_field( 'codinghunters', array(
	'type'        => 'color',
	'settings'    => 'color_mt2_top_menu_items_sticky',
	'label'       => esc_attr__( 'Top level menu items (sticky)', 'codinghunters' ),
	'section'     => 'codinghunters_section_colors_header',
	'default'     => '#191919',
    'required'  => array(
        array(
            'setting'  => 'menu_type',
            'value'    => 'menuStyle2',
            'operator' => '==',
        ),
	),
	'transport'	 => 'auto',
	'output' => array(
		array(
			'element'  => '.menuStyle2 .sticky-wrapper.is-sticky .main-navigation a',
			'property' => 'color',
		),
	),
) );
Codinghunters_Kirki::add_field( 'codinghunters', array(
	'type'        => 'color',
	'settings'    => 'color_mt2_bg_color',
	'label'       => esc_attr__( 'Background color', 'codinghunters' ),
	'section'     => 'codinghunters_section_colors_header',
	'default'     => '#fff',
    'required'  => array(
        array(
            'setting'  => 'menu_type',
            'value'    => 'menuStyle2',
            'operator' => '==',
        ),
	),
	'choices'     => array(
		'alpha' => true,
	),	
	'transport'	 => 'auto',
	'output' => array(
		array(
			'element'  => '.menuStyle2 .site-header',
			'property' => 'background-color',
		),
	),
) );
Codinghunters_Kirki::add_field( 'codinghunters', array(
	'type'        => 'color',
	'settings'    => 'color_mt2_bg_color_sticky',
	'label'       => esc_attr__( 'Background color (sticky)', 'codinghunters' ),
	'section'     => 'codinghunters_section_colors_header',
	'default'     => '#ffffff',
    'required'  => array(
        array(
            'setting'  => 'menu_type',
            'value'    => 'menuStyle2',
            'operator' => '==',
        ),
	),
	'choices'     => array(
		'alpha' => true,
	),	
	'transport'	 => 'auto',
	'output' => array(
		array(
			'element'  => '.menuStyle2 .is-sticky .site-header',
			'property' => 'background-color',
		),
	),
) );

/**
 * Menu type 3
 */
Codinghunters_Kirki::add_field( 'codinghunters', array(
	'type'        => 'color',
	'settings'    => 'color_mt3_top_bar',
	'label'       => esc_attr__( 'Top bar background', 'codinghunters' ),
	'section'     => 'codinghunters_section_colors_header',
	'default'     => '#fff',
    'required'  => array(
        array(
            'setting'  => 'menu_type',
            'value'    => 'menuStyle3',
            'operator' => '==',
        ),
	),
	'transport'	 => 'auto',
	'output' => array(
		array(
			'element'  => '.menuStyle3 .top-bar',
			'property' => 'background-color',
		),
	),			
) );
Codinghunters_Kirki::add_field( 'codinghunters', array(
	'type'        => 'color',
	'settings'    => 'color_mt3_top_bar_color',
	'label'       => esc_attr__( 'Top bar color', 'codinghunters' ),
	'section'     => 'codinghunters_section_colors_header',
	'default'     => '#191919',
    'required'  => array(
        array(
            'setting'  => 'menu_type',
            'value'    => 'menuStyle3',
            'operator' => '==',
        ),
	),
	'transport'	 => 'auto',
	'output' => array(
		array(
			'element'  => '.menuStyle3 .top-bar a, .menuStyle3 .top-bar .contact-item.header-social .fa, .menuStyle3 .top-bar .contact-item.header-social a',
			'property' => 'color',
		),
	),			
) );
Codinghunters_Kirki::add_field( 'codinghunters', array(
	'type'        => 'color',
	'settings'    => 'color_mt3_site_title',
	'label'       => esc_attr__( 'Site title', 'codinghunters' ),
	'section'     => 'codinghunters_section_colors_header',
	'default'     => '#ffffff',
    'required'  => array(
        array(
            'setting'  => 'menu_type',
            'value'    => 'menuStyle3',
            'operator' => '==',
        ),
	),
	'transport'	 => 'auto',
	'output' => array(
		array(
			'element'  => '.menuStyle3 .site-title a',
			'property' => 'color',
		),
	),			
) );
Codinghunters_Kirki::add_field( 'codinghunters', array(
	'type'        => 'color',
	'settings'    => 'color_mt3_site_title_sticky',
	'label'       => esc_attr__( 'Site title (sticky)', 'codinghunters' ),
	'section'     => 'codinghunters_section_colors_header',
	'default'     => '#191919',
    'required'  => array(
        array(
            'setting'  => 'menu_type',
            'value'    => 'menuStyle3',
            'operator' => '==',
        ),
	),
	'transport'	 => 'auto',
	'output' => array(
		array(
			'element'  => '.menuStyle3 .sticky-wrapper.is-sticky .site-title a',
			'property' => 'color',
		),
	),			
) );
Codinghunters_Kirki::add_field( 'codinghunters', array(
	'type'        => 'color',
	'settings'    => 'color_mt3_site_desc',
	'label'       => esc_attr__( 'Site description', 'codinghunters' ),
	'section'     => 'codinghunters_section_colors_header',
	'default'     => '#ffffff',
    'required'  => array(
        array(
            'setting'  => 'menu_type',
            'value'    => 'menuStyle3',
            'operator' => '==',
        ),
	),
	'transport'	 => 'auto',
	'output' => array(
		array(
			'element'  => '.menuStyle3 .site-description',
			'property' => 'color',
		),
	),
) );
Codinghunters_Kirki::add_field( 'codinghunters', array(
	'type'        => 'color',
	'settings'    => 'color_mt3_site_desc_sticky',
	'label'       => esc_attr__( 'Site description (sticky)', 'codinghunters' ),
	'section'     => 'codinghunters_section_colors_header',
	'default'     => '#191919',
    'required'  => array(
        array(
            'setting'  => 'menu_type',
            'value'    => 'menuStyle3',
            'operator' => '==',
        ),
	),
	'transport'	 => 'auto',
	'output' => array(
		array(
			'element'  => '.menuStyle3 .sticky-wrapper.is-sticky .site-description',
			'property' => 'color',
		),
	),
) );
Codinghunters_Kirki::add_field( 'codinghunters', array(
	'type'        => 'color',
	'settings'    => 'color_mt3_top_menu_items',
	'label'       => esc_attr__( 'Top level menu items', 'codinghunters' ),
	'section'     => 'codinghunters_section_colors_header',
	'default'     => '#ffffff',
    'required'  => array(
        array(
            'setting'  => 'menu_type',
            'value'    => 'menuStyle3',
            'operator' => '==',
        ),
	),
	'transport'	 => 'auto',
	'output' => array(
		array(
			'element'  => '.menuStyle3 .main-navigation a',
			'property' => 'color',
		),
	),
) );
Codinghunters_Kirki::add_field( 'codinghunters', array(
	'type'        => 'color',
	'settings'    => 'color_mt3_top_menu_items_sticky',
	'label'       => esc_attr__( 'Top level menu items (sticky)', 'codinghunters' ),
	'section'     => 'codinghunters_section_colors_header',
	'default'     => '#191919',
    'required'  => array(
        array(
            'setting'  => 'menu_type',
            'value'    => 'menuStyle3',
            'operator' => '==',
        ),
	),
	'transport'	 => 'auto',
	'output' => array(
		array(
			'element'  => '.menuStyle3 .sticky-wrapper.is-sticky .main-navigation a',
			'property' => 'color',
		),
	),
) );
Codinghunters_Kirki::add_field( 'codinghunters', array(
	'type'        => 'color',
	'settings'    => 'color_mt3_bg_color',
	'label'       => esc_attr__( 'Background color', 'codinghunters' ),
	'section'     => 'codinghunters_section_colors_header',
	'default'     => 'transparent',
    'required'  => array(
        array(
            'setting'  => 'menu_type',
            'value'    => 'menuStyle3',
            'operator' => '==',
        ),
	),
	'choices'     => array(
		'alpha' => true,
	),	
	'transport'	 => 'auto',
	'output' => array(
		array(
			'element'  => '.menuStyle3 .bottom-bar, .menuStyle3.page-template-template_page-builder .bottom-bar',
			'property' => 'background-color',
		),
	),
) );

Codinghunters_Kirki::add_field( 'codinghunters', array(
	'type'        => 'color',
	'settings'    => 'color_mt3_bg_color_sticky',
	'label'       => esc_attr__( 'Background color (sticky)', 'codinghunters' ),
	'section'     => 'codinghunters_section_colors_header',
	'default'     => '#ffffff',
    'required'  => array(
        array(
            'setting'  => 'menu_type',
            'value'    => 'menuStyle3',
            'operator' => '==',
        ),
	),
	'choices'     => array(
		'alpha' => true,
	),	
	'transport'	 => 'auto',
	'output' => array(
		array(
			'element'  => '.menuStyle3 .is-sticky .bottom-bar',
			'property' => 'background-color',
		),
	),
) );

/**
 * Menu type 4
 */
Codinghunters_Kirki::add_field( 'codinghunters', array(
	'type'        => 'color',
	'settings'    => 'color_mt4_site_title',
	'label'       => esc_attr__( 'Site title', 'codinghunters' ),
	'section'     => 'codinghunters_section_colors_header',
	'default'     => '#191919',
    'required'  => array(
        array(
            'setting'  => 'menu_type',
            'value'    => 'menuStyle4',
            'operator' => '==',
        ),
	),
	'transport'	 => 'auto',
	'output' => array(
		array(
			'element'  => '.menuStyle4 .site-title a',
			'property' => 'color',
		),
	),			
) );
Codinghunters_Kirki::add_field( 'codinghunters', array(
	'type'        => 'color',
	'settings'    => 'color_mt4_site_desc',
	'label'       => esc_attr__( 'Site description', 'codinghunters' ),
	'section'     => 'codinghunters_section_colors_header',
	'default'     => '#707070',
    'required'  => array(
        array(
            'setting'  => 'menu_type',
            'value'    => 'menuStyle4',
            'operator' => '==',
        ),
	),
	'transport'	 => 'auto',
	'output' => array(
		array(
			'element'  => '.menuStyle4 .site-description',
			'property' => 'color',
		),
	),
) );
Codinghunters_Kirki::add_field( 'codinghunters', array(
	'type'        => 'color',
	'settings'    => 'color_mt4_menu_bg_color',
	'label'       => esc_attr__( 'Menu background color', 'codinghunters' ),
	'section'     => 'codinghunters_section_colors_header',
	'default'     => '#0e304e',
    'required'  => array(
        array(
            'setting'  => 'menu_type',
            'value'    => 'menuStyle4',
            'operator' => '==',
        ),
	),
	'choices'     => array(
		'alpha' => true,
	),	
	'transport'	 => 'auto',
	'output' => array(
		array(
			'element'  => '.menuStyle4 .main-navigation',
			'property' => 'background-color',
		),
	),
) );
Codinghunters_Kirki::add_field( 'codinghunters', array(
	'type'        => 'color',
	'settings'    => 'color_mt4_top_menu_items',
	'label'       => esc_attr__( 'Top level menu items', 'codinghunters' ),
	'section'     => 'codinghunters_section_colors_header',
	'default'     => '#fff',
    'required'  => array(
        array(
            'setting'  => 'menu_type',
            'value'    => 'menuStyle4',
            'operator' => '==',
        ),
	),
	'transport'	 => 'auto',
	'output' => array(
		array(
			'element'  => '.menuStyle4 .main-navigation li a',
			'property' => 'color',
		),
	),
) );
Codinghunters_Kirki::add_field( 'codinghunters', array(
	'type'        => 'color',
	'settings'    => 'color_mt4_bg_color',
	'label'       => esc_attr__( 'Background color', 'codinghunters' ),
	'section'     => 'codinghunters_section_colors_header',
	'default'     => '#fff',
    'required'  => array(
        array(
            'setting'  => 'menu_type',
            'value'    => 'menuStyle4',
            'operator' => '==',
        ),
	),
	'choices'     => array(
		'alpha' => true,
	),	
	'transport'	 => 'auto',
	'output' => array(
		array(
			'element'  => '.menuStyle4 .site-header',
			'property' => 'background-color',
		),
	),
) );


Codinghunters_Kirki::add_field( 'codinghunters', array(
	'type'        => 'color',
	'settings'    => 'color_mt4_top_line',
	'label'       => esc_attr__( 'Contact blocks - top line', 'codinghunters' ),
	'section'     => 'codinghunters_section_colors_header',
	'default'     => '#595959',
    'required'  => array(
        array(
            'setting'  => 'menu_type',
            'value'    => 'menuStyle4',
            'operator' => '==',
        ),
	),
	'choices'     => array(
		'alpha' => true,
	),	
	'transport'	 => 'auto',
	'output' => array(
		array(
			'element'  => '.menuStyle4 .contact-area .contact-block span:first-of-type',
			'property' => 'color',
		),
	),
) );

Codinghunters_Kirki::add_field( 'codinghunters', array(
	'type'        => 'color',
	'settings'    => 'color_mt4_bottom_line',
	'label'       => esc_attr__( 'Contact blocks - bottom line', 'codinghunters' ),
	'section'     => 'codinghunters_section_colors_header',
	'default'     => '#0e304e',
    'required'  => array(
        array(
            'setting'  => 'menu_type',
            'value'    => 'menuStyle4',
            'operator' => '==',
        ),
	),
	'choices'     => array(
		'alpha' => true,
	),	
	'transport'	 => 'auto',
	'output' => array(
		array(
			'element'  => '.menuStyle4 .contact-area .contact-block span:last-of-type',
			'property' => 'color',
		),
	),
) );

//Submenu
Codinghunters_Kirki::add_field( 'codinghunters', array(
	'type'        => 'color',
	'settings'    => 'color_submenu_items',
	'label'       => esc_attr__( 'Submenu items', 'codinghunters' ),
	'section'     => 'codinghunters_section_colors_header',
	'default'     => '#1c1c1c',
	'transport'	 => 'auto',
	'output' => array(
		array(
			'element'  => '#site-navigation ul ul li a',
			'property' => 'color',
		),
	),
) );
Codinghunters_Kirki::add_field( 'codinghunters', array(
	'type'        => 'color',
	'settings'    => 'color_submenu_bg',
	'label'       => esc_attr__( 'Submenu background', 'codinghunters' ),
	'section'     => 'codinghunters_section_colors_header',
	'default'     => '#f7f7f7',
	'transport'	 => 'auto',
	'output' => array(
		array(
			'element'  => '#site-navigation ul ul li',
			'property' => 'background-color',
		),
	),
) );

Codinghunters_Kirki::add_field( 'codinghunters', array(
	'type'        => 'color',
	'settings'    => 'mobile_toggle_color',
	'label'       => esc_attr__( 'Mobile toggle color', 'codinghunters' ),
	'section'     => 'codinghunters_section_colors_header',
	'default'     => '',
	'transport'	 => 'auto',
	'output' => array(
		array(
			'element'  => '.menuStyle1 .mobile-menu-toggle_lines, .menuStyle1 .mobile-menu-toggle_lines:before, .menuStyle1 .mobile-menu-toggle_lines:after,.menuStyle1 .mobile-menu-toggle_lines,.mobile-menu-toggle_lines:before, .mobile-menu-toggle_lines:after,.mobile-menu-toggle_lines,.menuStyle3 .mobile-menu-toggle_lines,.menuStyle3 .mobile-menu-toggle_lines:before, .menuStyle3 .mobile-menu-toggle_lines:after',
			'property' => 'background',
		),
	),			
) );

/**
 * Blog colors
 */
Codinghunters_Kirki::add_section( 'codinghunters_section_colors_blog', array(
    'title'       	 => esc_attr__( 'Blog', 'codinghunters' ),
	'panel'          => 'codinghunters_panel_colors',
    'priority'       => 12,
) );

Codinghunters_Kirki::add_field( 'codinghunters', array(
	'type'        => 'color',
	'settings'    => 'color_index_post_title',
	'label'       => esc_attr__( 'Post title (archives)', 'codinghunters' ),
	'section'     => 'codinghunters_section_colors_blog',
	'default'     => '#191919',
	'transport'	 => 'auto',
	'output' => array(
		array(
			'element'  => '.entry-title a',
			'property' => 'color',
		),
	),
) );
Codinghunters_Kirki::add_field( 'codinghunters', array(
	'type'        => 'color',
	'settings'    => 'color_single_post_title',
	'label'       => esc_attr__( 'Post title (single)', 'codinghunters' ),
	'section'     => 'codinghunters_section_colors_blog',
	'default'     => '#191919',
	'transport'	 => 'auto',
	'output' => array(
		array(
			'element'  => '.single-post .entry-title',
			'property' => 'color',
		),
	),
) );
Codinghunters_Kirki::add_field( 'codinghunters', array(
	'type'        => 'color',
	'settings'    => 'color_meta_cat_bg',
	'label'       => esc_attr__( 'Categories (single and archives)', 'codinghunters' ),
	'section'     => 'codinghunters_section_colors_blog',
	'default'     => '#eff1f4',
	'transport'	 => 'auto',
	'output' => array(
		array(
			'element'  => '.single-post .post-cat, .blog-loop .post-cat',
			'property' => 'background-color',
		),
	),
) );
Codinghunters_Kirki::add_field( 'codinghunters', array(
	'type'        => 'color',
	'settings'    => 'color_meta_text',
	'label'       => esc_attr__( 'Meta text', 'codinghunters' ),
	'section'     => 'codinghunters_section_colors_blog',
	'default'     => '#bfbfbf',
	'transport'	 => 'auto',
	'output' => array(
		array(
			'element'  => '.single-post .entry-meta, .blog-loop .entry-meta',
			'property' => 'color',
		),
	),
) );
Codinghunters_Kirki::add_field( 'codinghunters', array(
	'type'        => 'color',
	'settings'    => 'color_meta_links',
	'label'       => esc_attr__( 'Meta links', 'codinghunters' ),
	'section'     => 'codinghunters_section_colors_blog',
	'default'     => '#595959',
	'transport'	 => 'auto',
	'output' => array(
		array(
			'element'  => '.single-post .entry-meta .byline a, .blog-loop .entry-meta .byline a',
			'property' => 'color',
		),
	),
) );
Codinghunters_Kirki::add_field( 'codinghunters', array(
	'type'        => 'color',
	'settings'    => 'color_post_text',
	'label'       => esc_attr__( 'Body text', 'codinghunters' ),
	'section'     => 'codinghunters_section_colors_blog',
	'default'     => '#595959',
	'transport'	 => 'auto',
	'output' => array(
		array(
			'element'  => '.single-post .entry-content, .blog-loop .entry-content',
			'property' => 'color',
		),
		array(
			'element'  => '.editor-block-list__layout, .editor-block-list__layout .editor-block-list__block',
			'context'  => array( 'editor' ),
		),		
	),
) );



/**
 * Widgets
 */

Codinghunters_Kirki::add_section( 'codinghunters_section_colors_widgets', array(
    'title'       	 => esc_attr__( 'Sidebar&amp;footer widgets', 'codinghunters' ),
	'panel'          => 'codinghunters_panel_colors',
    'priority'       => 12,
) );

Codinghunters_Kirki::add_field( 'codinghunters', array(
	'type'        => 'color',
	'settings'    => 'color_widgets_title',
	'label'       => esc_attr__( 'Widget titles', 'codinghunters' ),
	'section'     => 'codinghunters_section_colors_widgets',
	'default'     => '#191919',
	'transport'	 => 'auto',
	'output' => array(
		array(
			'element'  => '.widget .widget-title',
			'property' => 'color',
		),
	),
) );

Codinghunters_Kirki::add_field( 'codinghunters', array(
	'type'        => 'color',
	'settings'    => 'color_widgets_text',
	'label'       => esc_attr__( 'Widget text', 'codinghunters' ),
	'section'     => 'codinghunters_section_colors_widgets',
	'default'     => '#707070',
	'transport'	 => 'auto',
	'output' => array(
		array(
			'element'  => '.widget',
			'property' => 'color',
		),
	),
) );

Codinghunters_Kirki::add_field( 'codinghunters', array(
	'type'        => 'color',
	'settings'    => 'color_widgets_links',
	'label'       => esc_attr__( 'Widget links', 'codinghunters' ),
	'section'     => 'codinghunters_section_colors_widgets',
	'default'     => '#595959',
	'transport'	 => 'auto',
	'output' => array(
		array(
			'element'  => '.widget a',
			'property' => 'color',
		),
	),
) );