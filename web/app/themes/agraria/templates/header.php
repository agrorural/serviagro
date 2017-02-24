<header class="pimary-nav">
  <div class="container">
    <nav class="nav-primary">
        <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
        endif;
        ?>
      </nav>  
  </div>
</header>
<header class="banner branded">
  <img src="<?php echo bloginfo('template_url'); ?>/dist/images/home__masshead_bg_2.png" class="img-fluid" />
  <a class="brand" href="<?= esc_url(home_url('/')); ?>"><span><?php bloginfo('name'); ?></span></a>
</header>
