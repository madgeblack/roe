	<?php 
	$hero = get_field('hero_image');
	if( $hero ): ?>

<section class="project-hero" style="background-image: url('<?php echo $hero ?>')">

    <a href="#intro" class="icon">
		<svg id="scroll-icon" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 27.02 14.98"><title>Scroll</title><polygon class="cls-1" points="13.51 14.98 0 0.98 1.02 0 13.51 12.94 26 0 27.02 0.98 13.51 14.98"/></svg>
	</a>

</section>

<?php endif; ?>