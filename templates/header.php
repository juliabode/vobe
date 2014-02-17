<div class="bg--red">
    <a class="left-off-canvas-toggle menu-icon" ><span></span></a>
</div>

<header class="banner row" role="banner">
    <div class="small-12 medium-4 large-5 columns">
        <a class="brand" href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a>
    </div>

    <div class="small-12 medium-8 large-7 columns pos--init">

        <nav class="social-nav">
            <ul id="social-media-links">
                <li class="facebook-icon"><a href="#">Facebook</a></li>
                <li class="twitter-icon"><a href="#">Twitter</a></li>
                <li class="google-icon"><a href="#">Google</a></li>
                <li class="xing-icon"><a href="#">Xing</a></li>
                <li class="linkedin-icon"><a href="#">LinkedIn</a></li>
            </ul>
        </nav>
        <nav class="nav-main left-off-canvas-menu" role="navigation">
            <?php
                if (has_nav_menu('primary_navigation')) :
                    wp_nav_menu( array( 'theme_location'    => 'primary_navigation',
                                        'menu_class'        => 'nav nav-pills off-canvas-list',
                                        'items_wrap'        => '<ul id="%1$s" class="%2$s"><li class="hide-large hide-med"><a class="icon-close exit-off-canvas"></a></li>%3$s</ul>'));
                endif;
            ?>
        </nav>
    </div>
</header>
