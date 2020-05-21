<section class="contact-page">

	<?php
		$args = array(
			'post_type' => 'page',
			'page_id' => '140'
		);

		$query = new WP_Query( $args );
		if ($query->have_posts()): while ($query->have_posts()): $query->the_post(); ?>

		<div class="contact-info">
			<h2 class="canela roe">Talk to us.</h2>
			<h4 class="butter">
				<a href="mailto:<?php echo the_field('general_email'); ?>" class="email basis butter">
					<?php echo the_field('general_email'); ?>
				</a><br>
				<a href="tel:<?php echo the_field('phone_number'); ?>" class="basis butter"><?php echo the_field('phone_number'); ?></a>
			</h4>
		</div>
		<div class="contact-form">
		<?php 
		echo do_shortcode( '[contact-form-7 id="101" title="Contact Form"]' );
		?>
		</div>

	<?php endwhile; endif; ?>

</section>