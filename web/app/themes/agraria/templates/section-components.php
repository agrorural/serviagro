<div class="section-container">
	<!--
		<div class="page-header">
			<h2>Bienvenidos</h2>
		</div>
	-->
	<div class="items">
		<div class="item">
			<div class="item-container">
			<?php $post1_ID = 20; $post1 = get_post( $post1_ID ); $post1_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post1_ID ), 'gfull' ); $post1_permalink = get_permalink( $post1_ID ); //var_dump($post1); ?>
		      <a href="<?php echo $post1_permalink; ?>">
		      <div class="item-caption">
		        <h4><?php echo $post1->post_title; ?></h4>
		        <?php echo '<p>' . $post1->post_excerpt . '</p>'; ?>
		      </div>
		      </a>
		    </div>
		</div>
		<div class="item">
			<div class="item-container">
			
			<?php $post2_ID = 22; $post2 = get_post( $post2_ID ); $post2_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post2_ID ), 'gfull' ); $post2_permalink = get_permalink( $post2_ID ); //var_dump($post2); ?>
		    <a href="<?php echo $post2_permalink; ?>">
		      <div class="item-caption">
		        <h4><?php echo $post2->post_title; ?></h4>
		        <?php echo '<p>' . $post2->post_excerpt . '</p>'; ?>
		      </div>
		    </a>
		    </div>
		</div>
	</div>
</div>