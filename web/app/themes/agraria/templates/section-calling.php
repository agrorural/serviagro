<div class="section-container">
	<?php 
		$post1_ID = 5; 
		$post1 = get_post( $post1_ID ); 
		//$post1_permalink = get_permalink( $post1_ID ); 
	?>
		<div class="page-header">
			<h2><?php echo $post1->post_title; ?></h2>
		</div>

		<?php echo $post1->post_excerpt; ?>
</div>