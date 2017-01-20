<footer class="content-info">
  <div class="container">
	  <div class="wrap">
	    <section class="widget widget_text">
	    	<a class="brand" href="<?= esc_url(home_url('/')); ?>"><span><?php bloginfo('name'); ?></span></a>
		    <div class="textwidget">
				<address>
					<?php /*<strong><?php bloginfo('name'); ?></strong><br> */?>
					Av. La Universidad Nº 200<br>
					La Molina, Lima 12, PE<br>
					<abbr title="Teléfono">T:</abbr> <a href="tel:+511-209-8800">(511) 209-8800</a> anexos. 4332, 4249, 4234<br><br>
					<a href="mailto:#">contacto@serviagro.com</a>
				</address>
		    </div>
	    </section>
	    <?php dynamic_sidebar('sidebar-footer'); ?>
	    <section class="widget widget_text widget_minagri">
	    	<a class="brand minagri" href="http://www.minagri.gob.pe" target="_blank"><span>MINAGRI</span></a>
	    </section>
	   </div>
  </div>
</footer>
