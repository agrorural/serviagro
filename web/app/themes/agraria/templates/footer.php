<footer class="content-info">
  <div class="container">
    <section class="widget widget_text">
    	<a class="brand" href="<?= esc_url(home_url('/')); ?>"><span><?php bloginfo('name'); ?></span></a>
	    <div class="textwidget">
			<address>
				<?php /*<strong><?php bloginfo('name'); ?></strong><br> */?>
				Av. La Universidad Nº 200<br>
				La Molina, Lima 12, PE<br>
				<abbr title="Teléfono">T:</abbr> <a href="tel:+511-209-8800">(511) 209-8800</a><br><br>
				<a href="mailto:#">contacto@serviagro.com</a>
			</address>
	    </div>
    </section>
    <?php dynamic_sidebar('sidebar-footer'); ?>
  </div>
</footer>
