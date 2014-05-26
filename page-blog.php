<?php
/*
Template Name: Blog
*/
?>


<div class="large-12 medium-12 small-12 column">
    <?php get_template_part('templates/page', 'header'); ?>
    <?php query_posts( 'post_type=post&orderby=date' ); ?>

    <div class="row">
        <div class="small-9 medium-9 small-12 left">
            <?php
                get_template_part('templates/content', 'single');
            ?>
        </div>

        <aside class="sidebar column small-3 medium-3 small-12 special-box" role="complementary">
            <?php dynamic_sidebar('sidebar-blog'); ?>
        </aside><!-- /.sidebar -->
    </div>
</div>

<?php wp_reset_query(); ?>
