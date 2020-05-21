<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Roe
 */

?>

<section class="home-contact max-width">
	
		<?php
		$args = array(
			'post_type' => 'page',
			'page_id' => '125'
		);

		$query = new WP_Query( $args );
		if ($query->have_posts()): while ($query->have_posts()): $query->the_post(); ?>

		<?php 
		$button = get_field('contact_buttons');
		if( $button ): ?>

			<div class="form-popup" id="popupForm">
				<a href="javascript:void(0);" class="close-icon" onclick="closeForm()">
	    				<svg id="close-popup-icon" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 27.41 27.41"><title>Close Menu</title><polygon class="cls-1" points="27.41 1.41 26 0 13.71 12.29 1.41 0 0 1.42 12.29 13.71 0 26 1.41 27.41 13.71 15.12 26 27.41 27.41 26 15.12 13.71 27.41 1.41"/></svg>
					</a>

				<div class="form-content">
					<div class="popup-prompt">
						<h2 class="prompt canela berry">Talk to us.</h2>
					</div>
					<?php 
					echo do_shortcode( '[contact-form-7 id="101" title="Contact Form"]' );
					?>
				</div>
		</div>

	<div class="contact-content-wrapper">

		<div id="talk-bubble-one" class="talk-bubble" onclick="firstForm()">
			<h4 class="talk-bubble-content basis fluid white"><?php echo $button['bubble_1'] ?></h4>
			<svg id="talk-bubble-shape-one" class="talk-bubble-shape" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 204 216">
				<path class="cls-1" d="M204.05,102A102,102,0,1,0,95,203.75L102.05,216l7.08-12.25A102,102,0,0,0,204.05,102Z" transform="translate(-0.05)"/>
			</svg>
		</div>

		<div id="talk-bubble-two" class="talk-bubble" onclick="secondForm()">
			<h4 class="talk-bubble-content basis fluid white"><?php echo $button['bubble_2'] ?></h4>
			<svg id="talk-bubble-shape-two" class="talk-bubble-shape" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 204 216">
				<path class="cls-1" d="M204.05,102A102,102,0,1,0,95,203.75L102.05,216l7.08-12.25A102,102,0,0,0,204.05,102Z" transform="translate(-0.05)"/>
			</svg>
		</div>

		<div id="talk-bubble-three" class="talk-bubble" onclick="thirdForm()">
			<h4 class="talk-bubble-content basis fluid white"><?php echo $button['bubble_3'] ?></h4>
			<svg id="talk-bubble-shape-three" class="talk-bubble-shape" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 204 216">
				<path class="cls-1" d="M204.05,102A102,102,0,1,0,95,203.75L102.05,216l7.08-12.25A102,102,0,0,0,204.05,102Z" transform="translate(-0.05)"/>
			</svg>
		</div>

		<div id="talk-bubble-four" class="talk-bubble" onclick="fourthForm()">
			<h4 class="talk-bubble-content basis fluid white"><?php echo $button['bubble_4'] ?></h4>
			<svg id="talk-bubble-shape-four" class="talk-bubble-shape" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 204 216">
				<path class="cls-1" d="M204.05,102A102,102,0,1,0,95,203.75L102.05,216l7.08-12.25A102,102,0,0,0,204.05,102Z" transform="translate(-0.05)"/>
			</svg>
		</div>

		<div id="talk-bubble-five" class="talk-bubble" onclick="fifthForm()">
			<h4 class="talk-bubble-content basis fluid white"><?php echo $button['bubble_5'] ?></h4>
			<svg id="talk-bubble-shape-five" class="talk-bubble-shape" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 204 216">
				<path class="cls-1" d="M204.05,102A102,102,0,1,0,95,203.75L102.05,216l7.08-12.25A102,102,0,0,0,204.05,102Z" transform="translate(-0.05)"/>
			</svg>
		</div>

		<h1 class="canela fluid talk">Talk to us.</h1>

	</div>

	<?php endif; ?>
	<?php endwhile; endif; ?>

	<?php wp_reset_query(); ?>


</section>
