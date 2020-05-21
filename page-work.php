<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Roe
 */

get_header();
?>

<div id="primary" class="content-area">
<main id="main" class="site-main">
		<section id="work" class="work-section">
		<?php
		$args = array(
			'orderby' => 'menu_order',
			'post_status' => 'publish',
		);

		$query = new WP_Query( $args );
		if ($query->have_posts()): while ($query->have_posts()): $query->the_post(); ?>

			<?php 
			$preview = get_field('preview_image');
			if( $preview ): ?>



			<article class="project-<?php the_ID(); ?> project-block <?php echo $preview['column_display']?>">

				<!-- TO FIX: ONLY PRINTING FIRST VALUE -->

				<div class="project-container-content">
					<a href="<?php the_permalink(); ?>">
						<img class="preview-image" src="<?php echo $preview['preview_image'] ?>">

						<div class="project-info">
							<p class="view-link roe">View Project</p>
							<h3 class="canela"><?php the_title(); ?></h3>
						</div>
					</a>
				</div>
			</article>

		<?php endif; ?>

		<?php endwhile; endif; ?>

		</section><!-- #main -->

		<a href="">
			<div class="women-at-work-container">
				<img id="women-at-work-spinner" src="<?php echo get_template_directory_uri() . '/assets/waw.svg' ?>">
			</div>
		</a>
	</main>
</div>

<?php
// get_sidebar();
get_footer();


