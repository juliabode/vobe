<?php
/*
Template Name: Homepage
*/
?>

<?php echo do_shortcode( '[responsive_slider]' ); ?>

<div class="large-12 medium-12 small-12 column">
    <?php get_template_part('templates/page', 'header'); ?>
    <?php get_template_part('templates/content', 'page'); ?>
</div>
