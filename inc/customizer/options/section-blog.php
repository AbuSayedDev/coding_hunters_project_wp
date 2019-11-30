<?php
/**
 * Blog Customizer panel
 *
 * @package Codinghunters
 */

/**
 * Index
 */
Codinghunters_Kirki::add_panel( 'codinghunters_panel_blog', array(
    'title'       	 => __( 'Blog', 'codinghunters' ),
    'priority'       => 17,
) );
Codinghunters_Kirki::add_section( 'codinghunters_section_blog_index', array(
	'title'       	 => __( 'Index&amp;archives', 'codinghunters' ),
	'panel'			 => 'codinghunters_panel_blog',
    'priority'       => 17,
) );
Codinghunters_Kirki::add_field( 'codinghunters', array(
	'type'        => 'radio',
	'settings'    => 'blog_layout',
	'label'       => __( 'Blog layout', 'codinghunters' ),
	'section'     => 'codinghunters_section_blog_index',
	'default'     => 'layout-default',
	'choices'     => array(
		'layout-default' 	=> esc_attr__( 'Default', 'codinghunters' ),
		'layout-grid' 		=> esc_attr__( 'Grid', 'codinghunters' ),
		'layout-list-2' 		=> esc_attr__( 'Classic', 'codinghunters' ),
		'layout-two-columns' 		=> esc_attr__( 'Two Columns', 'codinghunters' ),
	),
) );
Codinghunters_Kirki::add_field( 'codinghunters', array(
	'type'        => 'number',
	'settings'    => 'excerpt_length',
	'label'       => esc_attr__( 'Excerpt length', 'codinghunters' ),
	'section'     => 'codinghunters_section_blog_index',
	'default'     => 20,
	'priority'    => 10,
	'choices'     => array(
		'min'  => 5,
		'max'  => 60,
		'step' => 1,
	),
) );
Codinghunters_Kirki::add_field( 'codinghunters', array(
	'type'        => 'text',
	'settings'    => 'read_more_text',
	'label'       => esc_attr__( 'Read more text', 'codinghunters' ),
	'description' => esc_attr__( 'Leave empty to hide', 'codinghunters' ),
	'section'     => 'codinghunters_section_blog_index',
	'default'     => esc_attr__( 'Read more', 'codinghunters' ),
	'priority'    => 10,
) );

Codinghunters_Kirki::add_field( 'codinghunters', array(
	'type'        => 'checkbox',
	'settings'    => 'index_hide_thumb',
	'label'       => esc_attr__( 'Hide post thumbnail?', 'codinghunters' ),
	'section'     => 'codinghunters_section_blog_index',
	'default'     => '0',
	'priority'    => 10,
) );
Codinghunters_Kirki::add_field( 'codinghunters', array(
	'type'        => 'checkbox',
	'settings'    => 'index_hide_date',
	'label'       => esc_attr__( 'Hide post date?', 'codinghunters' ),
	'section'     => 'codinghunters_section_blog_index',
	'default'     => '0',
	'priority'    => 10,
) );
Codinghunters_Kirki::add_field( 'codinghunters', array(
	'type'        => 'checkbox',
	'settings'    => 'index_hide_cats',
	'label'       => esc_attr__( 'Hide post categories?', 'codinghunters' ),
	'section'     => 'codinghunters_section_blog_index',
	'default'     => '0',
	'priority'    => 10,
) );
Codinghunters_Kirki::add_field( 'codinghunters', array(
	'type'        => 'checkbox',
	'settings'    => 'index_hide_author',
	'label'       => esc_attr__( 'Hide post author?', 'codinghunters' ),
	'section'     => 'codinghunters_section_blog_index',
	'default'     => '0',
	'priority'    => 10,
) );
Codinghunters_Kirki::add_field( 'codinghunters', array(
	'type'        => 'checkbox',
	'settings'    => 'index_hide_comments',
	'label'       => esc_attr__( 'Hide comments number?', 'codinghunters' ),
	'section'     => 'codinghunters_section_blog_index',
	'default'     => '0',
	'priority'    => 10,
) );


/**
 * Single posts
 */
Codinghunters_Kirki::add_section( 'codinghunters_section_blog_single', array(
	'title'       	 => __( 'Single posts', 'codinghunters' ),
	'panel'			 => 'codinghunters_panel_blog',	
    'priority'       => 17,
) );
Codinghunters_Kirki::add_field( 'codinghunters', array(
	'type'        => 'radio',
	'settings'    => 'single_post_layout',
	'label'       => __( 'Single post layout', 'codinghunters' ),
	'section'     => 'codinghunters_section_blog_single',
	'default'     => 'layout-default',
	'choices'     => array(
		'layout-default' 	=> esc_attr__( 'Default', 'codinghunters' ),
		'layout-full' 		=> esc_attr__( 'No sidebar', 'codinghunters' ),
	),
) );
Codinghunters_Kirki::add_field( 'codinghunters', array(
	'type'        => 'radio',
	'settings'    => 'single_post_content_layout',
	'label'       => __( 'Content layout', 'codinghunters' ),
	'section'     => 'codinghunters_section_blog_single',
	'default'     => 'layout-default',
	'choices'     => array(
		'layout-default' 	=> esc_attr__( 'Default', 'codinghunters' ),
		'layout-2' 		=> esc_attr__( 'Layout 2', 'codinghunters' ),
		'layout-3' 		=> esc_attr__( 'Layout 3', 'codinghunters' ),
	),
) );
Codinghunters_Kirki::add_field( 'codinghunters', array(
	'type'        => 'radio',
	'settings'    => 'single_comment_form_layout',
	'label'       => __( 'Comment Form Layout', 'codinghunters' ),
	'section'     => 'codinghunters_section_blog_single',
	'default'     => 'layout-default',
	'choices'     => array(
		'layout-default' 	=> esc_attr__( 'Default', 'codinghunters' ),
		'layout-2' 		=> esc_attr__( 'Layout 2', 'codinghunters' ),
		'layout-3' 		=> esc_attr__( 'Layout 3', 'codinghunters' ),
	),
) );
Codinghunters_Kirki::add_field( 'codinghunters', array(
	'type'        => 'checkbox',
	'settings'    => 'single_hide_thumb',
	'label'       => esc_attr__( 'Hide post thumbnail?', 'codinghunters' ),
	'section'     => 'codinghunters_section_blog_single',
	'default'     => '0',
	'priority'    => 10,
) );
Codinghunters_Kirki::add_field( 'codinghunters', array(
	'type'        => 'checkbox',
	'settings'    => 'single_hide_date',
	'label'       => esc_attr__( 'Hide post date?', 'codinghunters' ),
	'section'     => 'codinghunters_section_blog_single',
	'default'     => '0',
	'priority'    => 10,
) );
Codinghunters_Kirki::add_field( 'codinghunters', array(
	'type'        => 'checkbox',
	'settings'    => 'single_hide_cats',
	'label'       => esc_attr__( 'Hide post categories?', 'codinghunters' ),
	'section'     => 'codinghunters_section_blog_single',
	'default'     => '0',
	'priority'    => 10,
) );
Codinghunters_Kirki::add_field( 'codinghunters', array(
	'type'        => 'checkbox',
	'settings'    => 'single_hide_author',
	'label'       => esc_attr__( 'Hide post author?', 'codinghunters' ),
	'section'     => 'codinghunters_section_blog_single',
	'default'     => '0',
	'priority'    => 10,
) );