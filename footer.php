<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Roe
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">

		<?php
		$args = array(
			'post_type' => 'page',
			'page_id' => '140'
		);

		$query = new WP_Query( $args );
		if ($query->have_posts()): while ($query->have_posts()): $query->the_post(); ?>

		<div class="footer-wrapper">
			<div class="footer-left">
				<div class="oyster">
					<img src="<?php echo get_template_directory_uri() . '/assets/oyster@2x.gif' ?>" alt="Illustrated oyster opening and closing to reveal a pearl">
				</div>

				<div class="disclaimer">
					<p class="roe">
						<?php echo the_field('copy_block'); ?>
					</p>

					<nav id="footer-navigation" class="footer-navigation">
					<?php
					wp_nav_menu( array(
						'theme_location' => 'footer-menu',
						'menu_id'        => 'footer-nav',
					) );
					?>
					</nav>
				</div>
			</div>

			<div class="footer-right roe">

				<a class="roe contact-link" href="tel:<?php echo the_field('phone_number'); ?>">
					<p class="contact"><?php echo the_field('phone_number'); ?></p>
				</a>
				
				<a class="roe contact-link" href="mailto:<?php echo the_field('general_email'); ?>">
					<p class="contact"><?php echo the_field('general_email'); ?></p>
				</a>

			</div>
		</div>

	<?php endwhile; endif; ?>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

<?php if (is_front_page()): ?>
<!--home page custom JS-->
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/header-hide-top.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/fade-in.js"></script>
<?php endif; ?>


<?php if (is_page('work')): ?>
<!--home page custom JS-->
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/women-at-work.js"></script>
<?php endif; ?>

<?php if (is_page('details')): ?>
<!--home page custom JS-->
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/values.js"></script>
<?php endif; ?>
