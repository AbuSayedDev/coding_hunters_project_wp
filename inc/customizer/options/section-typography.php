<?php
/**
 * Typography Customizer panel
 *
 * @package Codinghunters
 */

Codinghunters_Kirki::add_panel( 'codinghunters_panel_typography', array(
    'priority'    => 10,
    'title'       => __( 'Typography', 'codinghunters' ),
) );


/**
 * Font families
 */
Codinghunters_Kirki::add_section( 'codinghunters_section_fonts', array(
    'title'       	 => __( 'Font families', 'codinghunters' ),
    'panel'          => 'codinghunters_panel_typography',
    'priority'       => 12,
) );

//Headings family
Codinghunters_Kirki::add_field( 'codinghunters', array(
	'type'        => 'typography',
	'settings'    => 'headings_font',
	'label'       => esc_attr__( 'Headings', 'codinghunters' ),
	'section'     => 'codinghunters_section_fonts',
	'default'     => array(
		'font-family'    => 'Work Sans',
		'variant'        => '500',
	),
	'priority'    => 10,
	'output'      => array(
		array(
			'element' => 'h1,h2,h3,h4,h5,h6,.site-title',
		),
		array(
			'element'  => '.editor-block-list__layout h1,.editor-block-list__layout h2,.editor-block-list__layout h3,.editor-block-list__layout h4,.editor-block-list__layout h5,.editor-block-list__layout h6,.editor-post-title__block .editor-post-title__input',
			'context'  => array( 'editor' ),
		),		
	),
) );

//Body family
Codinghunters_Kirki::add_field( 'codinghunters', array(
	'type'        => 'typography',
	'settings'    => 'body_font',
	'label'       => esc_attr__( 'Body', 'codinghunters' ),
	'section'     => 'codinghunters_section_fonts',
	'default'     => array(
		'font-family'    => 'Work Sans',
		'variant'        => 'regular',
	),
	'priority'    => 10,
	'output'      => array(
		array(
			'element' => 'body',
		),
		array(
			'element'  => '.editor-block-list__layout,.editor-block-list__layout .editor-block-list__block',
			'context'  => array( 'editor' ),
		),		
	),
) );

/**
 * Font sizes
 */
Codinghunters_Kirki::add_section( 'codinghunters_section_font_sizes', array(
    'title'       	 => esc_attr__( 'Font sizes', 'codinghunters' ),
    'panel'          => 'codinghunters_panel_typography',
    'priority'       => 12,
) );

//Header font sizes
Codinghunters_Kirki::add_field( 'codinghunters', array(
	'type'        => 'custom',
	'settings'    => 'label_font_sizes_general',
	'label'       => '',
	'section'     => 'codinghunters_section_font_sizes',
	'default'     => '<div style="text-transform:uppercase;font-weight:600;background: #ccd6de;color: #1c1c1c;padding: 10px 20px;text-align: center;margin: 30px 0 15px 0;letter-spacing: 1px;border: 1px solid #ccc6c6;">' . esc_html__( 'General', 'codinghunters' ) . '</div>',
	'priority'    => 10,
) );
Codinghunters_Kirki::add_field( 'codinghunters', array(
	'type'     	  => 'slider',
	'settings'    => 'font_size_body',
	'label'       =>  esc_attr__( 'Body', 'codinghunters' ),
	'section'     => 'codinghunters_section_font_sizes',
	'default'     => '16',
	'priority'    => 10,
	'choices'   => array(
		'min'  => 10,
		'max'  => 30,
		'step' => 1,
	),
	'transport'	  => 'auto',
	'output'      => array(
		array(
			'element'  => 'body',
			'property' => 'font-size',
			'units'    => 'px',
		),
		array(
			'element'  => '.editor-styles-wrapper p',
			'context'  => array( 'editor' ),
		),
	),	
) );

Codinghunters_Kirki::add_field( 'codinghunters', array(
	'type'        => 'custom',
	'settings'    => 'label_font_sizes_header',
	'label'       => '',
	'section'     => 'codinghunters_section_font_sizes',
	'default'     => '<div style="text-transform:uppercase;font-weight:600;background: #ccd6de;color: #1c1c1c;padding: 10px 20px;text-align: center;margin: 30px 0 15px 0;letter-spacing: 1px;border: 1px solid #ccc6c6;">' . esc_html__( 'Header area', 'codinghunters' ) . '</div>',
	'priority'    => 10,
) );
Codinghunters_Kirki::add_field( 'codinghunters', array(
	'type'     	  => 'slider',
	'settings'    => 'font_size_site_title',
	'label'       =>  esc_attr__( 'Site title', 'codinghunters' ),
	'section'     => 'codinghunters_section_font_sizes',
	'default'     => '36',
	'priority'    => 10,
	'choices'   => array(
		'min'  => 16,
		'max'  => 50,
		'step' => 1,
	),
	'transport'	  => 'auto',
	'output'      => array(
		array(
			'element'  => '.site-title',
			'property' => 'font-size',
			'units'    => 'px',
		),
	),	
) );

Codinghunters_Kirki::add_field( 'codinghunters', array(
	'type'     	  => 'slider',
	'settings'    => 'font_size_site_desc',
	'label'       =>  esc_attr__( 'Site description', 'codinghunters' ),
	'section'     => 'codinghunters_section_font_sizes',
	'default'     => '16',
	'priority'    => 10,
	'choices'   => array(
		'min'  => 12,
		'max'  => 30,
		'step' => 1,
	),
	'transport'	  => 'auto',
	'output'      => array(
		array(
			'element'  => '.site-description',
			'property' => 'font-size',
			'units'    => 'px',
		),
	),	
) );

Codinghunters_Kirki::add_field( 'codinghunters', array(
	'type'     	  => 'slider',
	'settings'    => 'font_size_menu_top_items',
	'label'       =>  esc_attr__( 'Top level menu items', 'codinghunters' ),
	'section'     => 'codinghunters_section_font_sizes',
	'default'     => '16',
	'priority'    => 10,
	'choices'   => array(
		'min'  => 10,
		'max'  => 30,
		'step' => 1,
	),
	'transport'	  => 'auto',
	'output'      => array(
		array(
			'element'  => '.main-navigation li',
			'property' => 'font-size',
			'units'    => 'px',
		),
	),	
) );

Codinghunters_Kirki::add_field( 'codinghunters', array(
	'type'     	  => 'slider',
	'settings'    => 'font_size_menu_top_items',
	'label'       =>  esc_attr__( 'Submenu items', 'codinghunters' ),
	'section'     => 'codinghunters_section_font_sizes',
	'default'     => '13',
	'priority'    => 10,
	'choices'   => array(
		'min'  => 10,
		'max'  => 30,
		'step' => 1,
	),
	'transport'	  => 'auto',
	'output'      => array(
		array(
			'element'  => '.main-navigation ul ul li',
			'property' => 'font-size',
			'units'    => 'px',
		),
	),	
) );

//Blog
Codinghunters_Kirki::add_field( 'codinghunters', array(
	'type'        => 'custom',
	'settings'    => 'label_font_sizes_blog',
	'label'       => '',
	'section'     => 'codinghunters_section_font_sizes',
	'default'     => '<div style="text-transform:uppercase;font-weight:600;background: #ccd6de;color: #1c1c1c;padding: 10px 20px;text-align: center;margin: 30px 0 15px 0;letter-spacing: 1px;border: 1px solid #ccc6c6;">' . esc_html__( 'Blog', 'codinghunters' ) . '</div>',
	'priority'    => 10,
) );
Codinghunters_Kirki::add_field( 'codinghunters', array(
	'type'     	  => 'slider',
	'settings'    => 'font_size_index_title',
	'label'       =>  esc_attr__( 'Post titles (archives)', 'codinghunters' ),
	'section'     => 'codinghunters_section_font_sizes',
	'default'     => '',
	'priority'    => 10,
	'choices'   => array(
		'min'  => 10,
		'max'  => 50,
		'step' => 1,
	),
	'transport'	  => 'auto',
	'output'      => array(
		array(
			'element'  => '.blog-loop .entry-title',
			'property' => 'font-size',
			'units'    => 'px',
		),
	),	
) );
Codinghunters_Kirki::add_field( 'codinghunters', array(
	'type'     	  => 'slider',
	'settings'    => 'font_size_single_title',
	'label'       =>  esc_attr__( 'Post titles (singles)', 'codinghunters' ),
	'section'     => 'codinghunters_section_font_sizes',
	'default'     => '36',
	'priority'    => 10,
	'choices'   => array(
		'min'  => 10,
		'max'  => 50,
		'step' => 1,
	),
	'transport'	  => 'auto',
	'output'      => array(
		array(
			'element'  => '.single-post .entry-title',
			'property' => 'font-size',
			'units'    => 'px',
		),
	),	
) );

//Sidebar font sizes
Codinghunters_Kirki::add_field( 'codinghunters', array(
	'type'        => 'custom',
	'settings'    => 'label_font_sizes_sidebar',
	'label'       => '',
	'section'     => 'codinghunters_section_font_sizes',
	'default'     => '<div style="text-transform:uppercase;font-weight:600;background: #ccd6de;color: #1c1c1c;padding: 10px 20px;text-align: center;margin: 30px 0 15px 0;letter-spacing: 1px;border: 1px solid #ccc6c6;">' . esc_html__( 'Sidebar', 'codinghunters' ) . '</div>',
	'priority'    => 10,
) );
Codinghunters_Kirki::add_field( 'codinghunters', array(
	'type'     	  => 'slider',
	'settings'    => 'font_size_widget_title',
	'label'       =>  esc_attr__( 'Widget titles', 'codinghunters' ),
	'section'     => 'codinghunters_section_font_sizes',
	'default'     => '24',
	'priority'    => 10,
	'choices'   => array(
		'min'  => 10,
		'max'  => 30,
		'step' => 1,
	),
	'transport'	  => 'auto',
	'output'      => array(
		array(
			'element'  => '.widget-area .widget-title',
			'property' => 'font-size',
			'units'    => 'px',
		),
	),	
) );
Codinghunters_Kirki::add_field( 'codinghunters', array(
	'type'     	  => 'slider',
	'settings'    => 'font_size_widgets',
	'label'       =>  esc_attr__( 'Widgets text', 'codinghunters' ),
	'section'     => 'codinghunters_section_font_sizes',
	'default'     => '16',
	'priority'    => 10,
	'choices'   => array(
		'min'  => 10,
		'max'  => 30,
		'step' => 1,
	),
	'transport'	  => 'auto',
	'output'      => array(
		array(
			'element'  => '.widget-area .widget',
			'property' => 'font-size',
			'units'    => 'px',
		),
	),	
) );

//Footer font sizes
Codinghunters_Kirki::add_field( 'codinghunters', array(
	'type'        => 'custom',
	'settings'    => 'label_font_sizes_footer',
	'label'       => '',
	'section'     => 'codinghunters_section_font_sizes',
	'default'     => '<div style="text-transform:uppercase;font-weight:600;background: #ccd6de;color: #1c1c1c;padding: 10px 20px;text-align: center;margin: 30px 0 15px 0;letter-spacing: 1px;border: 1px solid #ccc6c6;">' . esc_html__( 'Footer area', 'codinghunters' ) . '</div>',
	'priority'    => 10,
) );
Codinghunters_Kirki::add_field( 'codinghunters', array(
	'type'     	  => 'slider',
	'settings'    => 'font_size_footer_widget_titles',
	'label'       =>  esc_attr__( 'Footer widget titles', 'codinghunters' ),
	'section'     => 'codinghunters_section_font_sizes',
	'default'     => '20',
	'priority'    => 10,
	'choices'   => array(
		'min'  => 10,
		'max'  => 30,
		'step' => 1,
	),
	'transport'	  => 'auto',
	'output'      => array(
		array(
			'element'  => '.sidebar-column .widget-title',
			'property' => 'font-size',
			'units'    => 'px',
		),
	),	
) );

Codinghunters_Kirki::add_field( 'codinghunters', array(
	'type'     	  => 'slider',
	'settings'    => 'font_size_footer_widgets',
	'label'       =>  esc_attr__( 'Footer widgets text', 'codinghunters' ),
	'section'     => 'codinghunters_section_font_sizes',
	'default'     => '16',
	'priority'    => 10,
	'choices'   => array(
		'min'  => 10,
		'max'  => 30,
		'step' => 1,
	),
	'transport'	  => 'auto',
	'output'      => array(
		array(
			'element'  => '.sidebar-column .widget',
			'property' => 'font-size',
			'units'    => 'px',
		),
	),	
) );

Codinghunters_Kirki::add_field( 'codinghunters', array(
	'type'     	  => 'slider',
	'settings'    => 'font_size_footer_credits',
	'label'       =>  esc_attr__( 'Footer credits', 'codinghunters' ),
	'section'     => 'codinghunters_section_font_sizes',
	'default'     => '13',
	'priority'    => 10,
	'choices'   => array(
		'min'  => 10,
		'max'  => 30,
		'step' => 1,
	),
	'transport'	  => 'auto',
	'output'      => array(
		array(
			'element'  => '.site-info',
			'property' => 'font-size',
			'units'    => 'px',
		),
	),	
) );