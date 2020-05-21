<section class="project-collab">

	<?php 
	$collab = get_field('collaborators');
	if( $collab['show_section'] ): ?>

		<div class="collab-content">
		
		<?php echo '<h3 class="canela">' . $collab['collaborator_title'] . '</h3>' ?>


		<?php echo '<h4 class="basis">' . $collab['collaborator_content'] . '</h4>' ?>

		</div>

		<?php else: // field_name returned false ?>
		<?php endif; ?>
		
</section>
