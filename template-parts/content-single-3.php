<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Codinghunters
 */

$layout 		= codinghunters_single_layout();
$hide_thumb 	= get_theme_mod( 'single_hide_thumb' );
$hide_date 		= get_theme_mod( 'single_hide_date' );
$hide_cats 		= get_theme_mod( 'single_hide_cats' );
$hide_author 	= get_theme_mod( 'single_hide_author' );
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>



	<header class="entry-header">
		<?php
		if ( $hide_cats == '' ) {
			echo '<span>';
			codinghunters_all_categories();
			echo '</span>';
		}
		?>
		<?php
			the_title( '<h1 class="entry-title">', '</h1>' );
		?>
		<div class="entry-meta">
			<i class="fa fa-user" aria-hidden="true"></i>
			<?php
			if ( $layout['type'] != 'layout-grid' && $layout['type'] != 'layout-masonry' && $hide_author == '' ) {
				codinghunters_posted_by();
			}
			?>
			<span class="separator">-</span>
			<i class="fa fa-clock-o" aria-hidden="true"></i>
			<?php
			if ( $hide_date == '' ) {
				codinghunters_posted_on();
			}
			?>
		</div><!-- .entry-meta -->
		<?php
		if ( ( $hide_thumb == '' ) )
		{
			if ( has_post_thumbnail() )
			{
				?>
				<div class="thumbnail">
					<?php codinghunters_post_thumbnail(); ?>
				</div>
				<?php
			}
		}
		?>
	</header><!-- .entry-header -->
	<div class="entry-content">
		<?php
			the_content( sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'codinghunters' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'codinghunters' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php codinghunters_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
