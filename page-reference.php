<?php
/*
Template Name: Referenzen
*/
?>

<div class="large-12 medium-12 small-12 column">
    <?php get_template_part('templates/page', 'header'); ?>
    <?php get_template_part('templates/content', 'page'); ?>

    <div class="reference-list">

        <?php if( have_rows('reference_list') ) { ?>
        <ul>
            <?php while ( have_rows('reference_list') ) { the_row(); ?>
                <li><?php the_sub_field('reference'); ?>
                </li>
            <?php } ?>
        </ul>
        <?php } ?>

    </div>

</div>