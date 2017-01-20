<?php use Roots\Sage\Titles; ?>

<div class="page-header">
	<?php if(is_singular()){ ?>
		<?php 
			$term_list = wp_get_post_terms( get_queried_object()->ID, 'organizacion', array( 'fields' => 'names' ) ); 
			print_r('<h1>Servicios de '. $term_list['0'] . '</h1>');
		?>
	<?php }else{ ?>
		<h1>Servicios de <?php echo get_queried_object()->name; ?></h1>
	<?php } ?>
</div>


