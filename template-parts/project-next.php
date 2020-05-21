<section class="next-project">


	<div class="next-title">

		<?php 
		global $post; 
		$previous_post = get_previous_post();
		$first_post = get_post( 1 );

		if ( is_object($previous_post) ):
		?>

		<a href="<?php echo esc_url( get_permalink( $previous_post->ID ) ); ?>">
			<h3 class="canela berry"><?php echo esc_attr( $previous_post->post_title ); ?></h3>
		</a>

	</div>

	<div class="next-line"></div>

	<div class="next-link">
		<a href="<?php echo esc_url( get_permalink( $previous_post->ID ) ); ?>">
			<p class="berry">Next</p>
		</a>
	</div>

		<?php else: ?>

		<a href="<?php echo esc_url( get_permalink( $first_post ) ); ?>">
			<h3 class="canela berry"><?php echo esc_attr( $first_post->post_title ); ?></h3>
		</a>

	</div>

	<div class="next-line"></div>

	<div class="next-link">
		<a href="<?php echo esc_url( get_permalink( $first_post ) ); ?>">
			<p class="berry">Next</p>
		</a>
	</div>

		<?php endif; ?>

</section>