<?php
get_header();
?>

<div id="primary" class="content-area">
<main id="main" class="site-main">
		<section id="directory" class="directory-section">

		<div class="categories">

			<p class="basis roe">DIRECTORY</p>

			<ul>
				<h3 class="canela roe category-name">
			    <?php wp_list_categories( array(
			        'orderby'    => 'name',
			        'order'    => 'asc',
			        'show_count' => false,
			        'exclude'    => array( 1 ),
			        'title_li' => ''
			    ) ); ?> 
				</h3>
			</ul>
		</div>
			

		<!-- create fixed category list in bottom left -->
		<div class="resources-block">
						<!-- create the loop for the custom post type -->
			<?php
			$args = array(
				'post_type' => 'directory',
				'cat' => get_query_var('cat'),
				'orderby' 	=> 'date',
				'order'		=> 'desc',
				'posts_per_page'=>-1,
				 'caller_get_posts'=>1
			);

			$query = new WP_Query( $args );
			if ($query->have_posts()): while ($query->have_posts()): $query->the_post(); ?>

			<article class="resource-<?php the_ID(); ?> resource">

					<!-- TO FIX: ONLY PRINTING FIRST VALUE -->

					<div class="resource-container-content">
						<a target="_blank" rel="noopener noreferrer" href="<?php the_field('url'); ?>">
							<div class="resource-info">
								<h4 class="basis butter"><?php the_title(); ?></h4>
								<p class="basis butter"><?php the_field('description'); ?></p>
							</div>
						</a>
					</div>
			</article>

			<?php endwhile; endif; ?>
		</div>

		<!-- in scrollable main section : -->
		<!-- call for the titles -->
		<!-- then the url  -->
		<!-- then description -->

		</section><!-- #main -->

	</main>
</div>

<?php
// get_sidebar();
// get_footer();
