<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Roe
 */

get_header();
?>

	<div id="primary" class="content-area" data-page="yes">
		<main id="main" class="site-main">
			<?php
				get_template_part( 'template-parts/home-hero', get_post_type() );

				get_template_part( 'template-parts/home-one', get_post_type() );

				get_template_part( 'template-parts/home-two', get_post_type() );

				get_template_part( 'template-parts/home-three', get_post_type() );

				get_template_part( 'template-parts/home-contact', get_post_type() );
				?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
