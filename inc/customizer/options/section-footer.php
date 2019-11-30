<?php
/**
 * Footer Customizer panel
 *
 * @package Codinghunters
 */


Codinghunters_Kirki::add_section( 'codinghunters_section_footer', array(
    'title'       	 => __( 'Footer', 'codinghunters' ),
    'priority'       => 16,
) );

Codinghunters_Kirki::add_field( 'codinghunters', array(
	'type'        => 'radio',
	'settings'    => 'footer_widget_areas',
	'label'       => __( 'Footer widget areas', 'codinghunters' ),
	'section'     => 'codinghunters_section_footer',
	'default'     => '4',
	'priority'    => 10,
	'choices'     => array(
		'1'   	=> esc_attr__( '1', 'codinghunters' ),
		'2'   	=> esc_attr__( '2', 'codinghunters' ),
		'3'	 	=> esc_attr__( '3', 'codinghunters' ),
		'4'  	=> esc_attr__( '4', 'codinghunters' ),
	),
) );

//Santize function
function codinghunters_sanitize_text( $input ) {
    return wp_kses_post( force_balance_tags( $input ) );
}