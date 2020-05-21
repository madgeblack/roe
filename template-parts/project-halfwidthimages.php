
<div class="half-width-image-section">

	<?php 
	$left_image = get_sub_field('left_image'); 
	$right_image = get_sub_field('right_image');
	?>
	
	<div class="half-width-image-wrapper">
		<img 
		class="half-width-image b-lazy" 
		src="<?php echo $left_image['sizes']['medium']; ?>"
		data-src="<?php echo $left_image['url']; ?>" 
		data-src-small="<?php echo $left_image['sizes']['medium']; ?>|<?php echo $left_image['url']; ?>" 
		alt="<?php echo $left_image['alt']; ?>">
	</div>
	
	<div class="half-width-image-wrapper">
		<img 
		class="half-width-image b-lazy" 
		src="<?php echo $right_image['sizes']['medium']; ?>"
		data-src="<?php echo $right_image['url']; ?>" 
		data-src-small="<?php echo $right_image['sizes']['medium']; ?>|<?php echo $right_image['url']; ?>" 
		alt="<?php echo $right_image['alt']; ?>">
	</div>

</div>



