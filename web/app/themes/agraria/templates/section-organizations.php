<div class="section-container">
		<div class="page-header">
			<h2>Instituciones</h2>
		</div>
		
			<?php
				$args = array( 'hide_empty=0' ); 
				$terms = get_terms( 'organizacion', $args );

				if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
				    echo '<div class="items">';
				    foreach ( $terms as $term ) {
				        echo '<div class="item card">';
				        	echo '<div class="item-container">';
				        		$orgImg = get_field('orgImg', $term->taxonomy . '_' . $term->term_id);
				        		 //var_dump($orgImg['url']);
				        		if($orgImg){
				        			echo '<img class="card-img-top" src="' . $orgImg['url'] . '" alt="Card image cap">';
				        		}
					        	//echo $term->name;
						        //echo '<pre>';
								//var_dump($term);
								//echo '</pre>';
								echo '<div class="card-block">';
									echo '<h4 class="card-title">' . $term->name . '</h4>';
							        $posts_array = get_posts(
									    array(
									        'posts_per_page' => 3,
									        'post_type' => 'servicio',
									        'tax_query' => array(
									            array(
									                'taxonomy' => ''.$term->taxonomy,
									                'field' => 'term_id',
									                'terms' => $term->term_id,
									            )
									        )
									    )
									);


								//var_dump($posts_array);

									if ( $posts_array ) {
										echo '<ul class="list-unstyled">';
										    foreach ( $posts_array as $post ) :
										        setup_postdata( $post ); ?>
										        <li><small><?php the_title(); ?></small></li>
										    <?php
										    endforeach; 
										    wp_reset_postdata();
									    echo '</ul>';
									}
								echo '</div>';
							echo '</div>';
						echo '</div>';
				    }
				    echo '</div>';
				}

				//echo '<pre>';
				//var_dump($terms);
				//echo '</pre>';

			?>

	<div class="items">
		<div class="item">
			<div class="item-container">
			<?php /*
			<?php $post1_ID = 20; $post1 = get_post( $post1_ID ); $post1_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post1_ID ), 'gfull' ); $post1_permalink = get_permalink( $post1_ID ); //var_dump($post1); ?>
		      <a href="<?php echo $post1_permalink; ?>"><img src="<?php echo $post1_image_url[0]; ?>" alt="" /></a>
		      <div class="item-caption">
		        <h3><a href="<?php echo $post1_permalink; ?>"><?php echo $post1->post_title; ?></a></h3>
		        <?php echo '<p>' . $post1->post_excerpt . '</p>'; ?>
		      </div>
		      <?php */ ?>
		    </div>
		</div>
		<div class="item">
			<div class="item-container">
			<?php /*
			<?php $post2_ID = 22; $post2 = get_post( $post2_ID ); $post2_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post2_ID ), 'gfull' ); $post2_permalink = get_permalink( $post2_ID ); //var_dump($post2); ?>
		      <a href="<?php echo $post2_permalink; ?>"><img src="<?php echo $post2_image_url[0]; ?>" alt="" /></a>
		      <div class="item-caption">
		        <h3><a href="<?php echo $post2_permalink; ?>"><?php echo $post2->post_title; ?></a></h3>
		        <?php echo '<p>' . $post2->post_excerpt . '</p>'; ?>
		      </div>
		     <?php */ ?>
		    </div>
		</div>
	</div>
</div>