<?php 
	$post1_ID = 12; 
	$post1 = get_post( $post1_ID ); 
	$post1_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post1_ID ), 'gfull' ); 
	$post1_permalink = get_permalink( $post1_ID ); //var_dump($post1); 
?>

<div class="section-container">
	<div class="items">
		<div class="item components__img">
			<div class="item-container">
				<?php 
					echo '<img src="' . $post1_image_url[0] . '" class="img-fluid" />'; 
				?>
			</div>
		</div>
		<div class="item components__text">
			<div class="item-container">
				<div class="page-header">
					<?php 
						echo '<h2>' . $post1->post_title . '</h2>'; 
						//var_dump($post1->post_title); 
					?>
				</div>
				<div class="item-caption">
			    	<?php echo $post1->post_content; ?>
			    </div>
			</div>
		</div>
	</div>
</div>