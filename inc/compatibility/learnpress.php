<?php
/**
 * Learnpress compatibility
 *
 * @package Codinghunters
 */

/**
 * Wraps free course label in span
 *
 */
function codinghunters_learnpress_free_course_label() {

	return '<span class="free-course-label">' . __( 'Free', 'codinghunters' ) . '</span>';

}
add_filter( 'learn_press_course_price_html_free', 'codinghunters_learnpress_free_course_label' );

/**
 * Wraps paid course label in span
 *
 */
function codinghunters_learnpress_paid_course_label( $price ) {

	return '<span class="paid-course-label">' . $price . '</span>';

}
add_filter( 'learn_press_course_price_html', 'codinghunters_learnpress_paid_course_label' );