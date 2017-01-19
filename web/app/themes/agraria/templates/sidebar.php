<?php if(is_page()){ ?>
	<?php if (has_nav_menu('nosotros_navigation')) { ?>
	    <section class="widget">
			<h3>Nosotros</h3>
			<?php wp_nav_menu(['theme_location' => 'nosotros_navigation', 'menu_class' => 'nav nav-sidebar']); ?>
		</section>
	<?php } ?>
<?php } else {?>
	<?php dynamic_sidebar('sidebar-primary'); ?>
<?php } ?>
