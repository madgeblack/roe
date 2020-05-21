<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Roe
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">

		<?php get_template_part( 'template-parts/project-hero' ); ?>
		
		<?php get_template_part( 'template-parts/project-intro' ); ?>

		<?php if( have_rows('post_content') ):
				while ( have_rows('post_content') ) : the_row(); ?>
		
		<?php if( get_row_layout() == 'dark_text' ): 

		get_template_part( 'template-parts/project-darktext' );

		elseif( get_row_layout() == 'light_text' ):

		get_template_part( 'template-parts/project-lighttext');

		elseif( get_row_layout() == 'full_width_image' ):

		get_template_part( 'template-parts/project-fullwidthimage');

		elseif( get_row_layout() == 'full_width_video' ):

		get_template_part( 'template-parts/project-fullwidthvideo');

		elseif( get_row_layout() == 'half_width_images' ):

		get_template_part( 'template-parts/project-halfwidthimages');

					
					endif;
				endwhile;
			endif; ?>

		<?php get_template_part( 'template-parts/project-collaborators' ) ?>

		<?php get_template_part( 'template-parts/project-next' ) ?>

	</div>


	<footer class="entry-footer">
	</footer>
</article><!-- #post-<?php the_ID(); ?> -->
