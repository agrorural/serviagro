<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

?>

<!doctype html>
<html <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
    <!--[if IE]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->
    <?php
      do_action('get_header');
      get_template_part('templates/header');
    ?>
    <section id="s1" class="calling">
      <?php get_template_part('templates/section', 'calling'); ?>
      <div class="scroll">
        <a class="scroll-to" href="#s2"><span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span></a>
      </div>
    </section>
    <section id="s2" class="components">
      <?php get_template_part('templates/section', 'components'); ?>
      <div class="scroll">
        <a class="scroll-to" href="#s3"><span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span></a>
      </div>
    </section>
    <section id="s3" class="organizations">
      <?php get_template_part('templates/section', 'organizations'); ?>
      <div class="scroll">
        <a class="scroll-to" href="#s4"><span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span></a>
      </div>
    </section>
    <?php
      do_action('get_footer');
      get_template_part('templates/footer');
      wp_footer();
    ?>
  </body>
</html>
