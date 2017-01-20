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
				    	$term_link = get_term_link( $term );
				        echo '<div class="item">';
				        	echo '<div class="item-container">';
				        		$orgImg = get_field('orgImg', $term->taxonomy . '_' . $term->term_id);
				        		 //var_dump($orgImg['url']);
				        		if($orgImg){
				        			echo '<img class="" src="' . $orgImg['url'] . '" alt="Card image cap">';
				        		}
					        	//echo $term->name;
						        //echo '<pre>';
								//var_dump($term);
								//echo '</pre>';

									//echo '<h4>' . $term->name . '</h4>';
				        			echo '<div class="item-caption">';
				        				echo '<p>' . $term->description . '</p>';
				        			echo '</div>';
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
										echo '<ul class="list-group list-group-flush">';
										    foreach ( $posts_array as $post ) :
										        setup_postdata( $post ); ?>
										        <li class="list-group-item"><small><?php the_title(); ?></small></li>
										    <?php
										    endforeach; 
										    wp_reset_postdata();
									    echo '</ul>';
									}

									echo '<div class="card-block">';
									    echo '<a href=" ' . $term_link . '" class="card-link">Más servicios</a>';
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
</div>