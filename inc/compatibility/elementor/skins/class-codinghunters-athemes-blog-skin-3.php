<?php

/**
 * Skin for the aThemes: Blog module
 */

add_action( 'elementor/init', 'codinghunters_register_athemes_blog_skin_3' );

function codinghunters_register_athemes_blog_skin_3() {
	
	class Codinghunters_aThemes_Blog_Skin_3 extends Elementor\Skin_Base {
		
		public function __construct( Elementor\Widget_Base $parent ) {
			parent::__construct( $parent );
			add_action( 'elementor/element/athemes-blog/section_style_content/after_section_start', [ $this, 'register_controls' ] );		
		}
     
		public function get_id() {
			return 'codinghunters_athemes_blog_skin_3';
		}

		public function get_title() {
			return __( 'Style 4', 'codinghunters' );
		}

		public function register_controls( $controls ) {

			//Cat
			$controls->add_control(
				'heading_s3_cat',
				[
					'label' => __( 'Category', 'codinghunters' ),
					'type' => \Elementor\Controls_Manager::HEADING,
					'separator' => 'before',
					'condition' => [
						'_skin' => $this->get_id(),
					],					
				]
			);
			$controls->add_control(
				'cat_s3_color',
				[
					'label' => __( 'Color', 'codinghunters' ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'default' => '',
					'selectors' => [
						'{{WRAPPER}} .athemes-blog .first-cat' => 'color: {{VALUE}};',
						'{{WRAPPER}} .athemes-blog .sol' => 'color: {{VALUE}};',
					],
					'scheme' => [
						'type' => \Elementor\Scheme_Color::get_type(),
						'value' => \Elementor\Scheme_Color::COLOR_1,
					],
					'condition' => [
						'_skin' => $this->get_id(),
					],				
				]
			);		


			//Comments
			$controls->add_control(
				'heading_s3_comments',
				[
					'label' => __( 'Comments', 'codinghunters' ),
					'type' => \Elementor\Controls_Manager::HEADING,
					'separator' => 'before',
					'condition' => [
						'_skin' => $this->get_id(),
					],					
				]
			);
			$controls->add_control(
				'comments_s3_color',
				[
					'label' => __( 'Color', 'codinghunters' ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'default' => '',
					'selectors' => [
						'{{WRAPPER}} .athemes-blog .comments-number' => 'color: {{VALUE}};',
					],
					'scheme' => [
						'type' => \Elementor\Scheme_Color::get_type(),
						'value' => \Elementor\Scheme_Color::COLOR_1,
					],
					'condition' => [
						'_skin' => $this->get_id(),
					],				
				]
			);				
		}

		public function render() {
			$settings = $this->parent->get_settings();

		$cats = is_array( $settings['categories'] ) ? implode( ',', $settings['categories'] ) : $settings['categories'];

		$query = new \WP_Query( array(
			'posts_per_page'      => $settings['number'],
			'no_found_rows'       => true,
			'post_stairis'         => 'publish',
			'ignore_sticky_posts' => true,
			'cat' 			      => $cats
		) ); ?>

		<div class="athemes-blog <?php echo $this->get_id(); ?>">
			<div class="row">	
			<?php if ( $query->have_posts() ) : ?>
				<?php while ( $query->have_posts() ) : $query->the_post(); ?>
					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="post-item">
							<?php if ( has_post_thumbnail() ) : ?>
								<?php the_post_thumbnail( 'codinghunters-360-360' ); ?>
							<?php endif; ?>					
							<div class="post-content">
								<?php codinghunters_first_category(); ?>	
								<?php the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' ); ?>
								<?php codinghunters_posted_on(); ?>
								<span class="vert">&vert;</span>
								<?php codinghunters_get_comments_number(); ?>
							</div>	
						</div>				
					</div>
				<?php
				endwhile;
				wp_reset_postdata();
			endif; ?>
			</div>
		</div>	
		<?php
		}

	}
}

add_action( 'elementor/widget/athemes-blog/skins_init', function( $widget ) {
   $widget->add_skin( new Codinghunters_aThemes_Blog_Skin_3( $widget ) );
} );







