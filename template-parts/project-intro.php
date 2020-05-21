<section class="project-intro" id="intro">
	<div class="intro-content">

	<?php 
	$intro = get_field('intro_content');
	if( $intro ): ?>
	
		<div class="intro-left">
		<h2 class="canela fluid"><?php the_title(); ?></h2>
		</div>

		<div class="intro-right">
			<h4 class="basis fluid"><?php echo $intro['intro_copy'] ?></h4>

			<p class="project-metadata roe"><?php echo $intro['category'] ?></p>
		</div>

	<?php endif; ?>

	</div>
</section>
