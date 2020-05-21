<div class="full-width-image-section">

	<?php
	// first, get the image object returned by ACF
	$image = get_sub_field('full_width_image');
	?>

	<img 
	class="b-lazy" 
	src="<?php echo $image['sizes']['medium']; ?>" 
	data-src="<?php echo $image['sizes']['large']; ?>|<?php echo $image['url']; ?>"
	data-src-small="<?php $image['sizes']['medium']; ?>|<?php echo $image['sizes']['large']; ?>" 
	alt="<?php echo $image['alt']; ?>">

	<noscript>
	<img src="<?php echo $image['sizes']['large']; ?>|<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
	</noscript>

</div>