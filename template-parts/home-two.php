<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Roe
 */

?>

<section class="home-two" data-is-dark="yes">
	<div class="listening-images">
		

		<div class="talking-wrapper">
			<video class="talking" preload="none" autoplay loop muted>
				<source src="<?php echo get_template_directory_uri() . '/assets/testing.mp4' ?>" type="video/mp4">
				<!-- <source src="" type="video/webm"> -->
				Sorry, your browser doesn't support embedded videos.
			</video>
		</div>

		<div class="listening-wrapper">
			<video class="listening" preload="none" autoplay loop muted playsinline>
				<source src="<?php echo get_template_directory_uri() . '/assets/testing.mp4' ?>" type="video/mp4">
				<!-- <source src="" type="video/webm"> -->
				Sorry, your browser doesn't support embedded videos.
			</video>
		</div>

	</div>

	<div class="changes-wrapper">
		<div class="changes">
			<h5 class="basis fluid">
				The world is changing quickly, and<br>Roe is a reflection of that change.
			</h5>
		</div>

		<div class="not-content-copy">
				<h2 class="canela butter fluid">
					We won’t be content with mere cosmetic changes for ourselves, and the same goes for your brand.
				</h2>
			</div>
	</div>
	<div class="reflection-wrapper">
		<div class="reflection-video-wrapper">
			<video class="reflection" preload="none" autoplay loop muted playsinline>
				<source src="<?php echo get_template_directory_uri() . '/assets/testing.mp4' ?>" type="video/mp4">
				<!-- <source src="" type="video/webm"> -->
				Sorry, your browser doesn't support embedded videos.
			</video>
		</div>
	</div>

	<div class="meaningful-wrapper">
		<div class="team-wrapper">
			<video class="team" preload="none" autoplay loop muted playsinline>
				<source src="<?php echo get_template_directory_uri() . '/assets/testing.mp4' ?>" type="video/mp4">
				<!-- <source src="" type="video/webm"> -->
				Sorry, your browser doesn't support embedded videos.
			</video>
		</div>

		<div class="meaningful-text">
			<h4 class="canela fluid">
					Meaningful work demands the right voices, and we’ll tailor our team to address your specific needs. 
			</h4>
		</div>
	</div>
</section>
