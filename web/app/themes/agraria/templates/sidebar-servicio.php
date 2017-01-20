<section class="widget">
	<h3>Institución</h3>
	<?php
		$qo = get_queried_object();
		$orgUrl = get_field('orgUrl', $qo->taxonomy . '_' . $qo->term_id);
		$orgTel = get_field('orgTel', $qo->taxonomy . '_' . $qo->term_id);
		$orgDir = get_field('orgDir', $qo->taxonomy . '_' . $qo->term_id);
		$orgImg = get_field('orgImg', $qo->taxonomy . '_' . $qo->term_id);
		//var_dump($qo);
	?>
	<div class="card">
		<?php if($orgImg) {
			echo ' <img class="card-img-top" src="'.$orgImg['url'].'" alt="Card image cap">';
		}?>
		<div class="card-block">
	    	<h4 class="card-title"><?php echo $qo->name; ?></h4>
	    	<p class="card-text"><?php echo $qo->description; ?></p>
	  	</div>
	  	<?php if ($orgUrl){
		  	echo '<div class="card-block">';
			    echo '<a href="'. $orgUrl .'" class="card-link" target="_blank">Visitar Web</a>';
			echo '</div>';
		}?>
	</div>
</section>