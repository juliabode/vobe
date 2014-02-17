<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>

  <!--[if lt IE 8]>
    <div class="alert alert-warning">
      <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'roots'); ?>
    </div>
  <![endif]-->

  <?php
    do_action('get_header');
  ?>

  <div class="off-canvas-wrap">
    <div class="inner-wrap">

      <div class="wrap row bg--white" role="document">
        <?php get_template_part('templates/header'); ?>

        <div class="content row">
          <main class="main <?php echo roots_main_class(); ?>" role="main">
            <?php include roots_template_path(); ?>
          </main><!-- /.main -->
          <?php if (roots_display_sidebar()) : ?>
            <aside class="sidebar <?php echo roots_sidebar_class(); ?>" role="complementary">
              <?php include roots_sidebar_path(); ?>
            </aside><!-- /.sidebar -->
          <?php endif; ?>
        </div><!-- /.content -->
      </div><!-- /.wrap -->

      <?php get_template_part('templates/footer'); ?>
    </div>
  </div>

<?php wp_footer(); ?>

</body>
</html>
