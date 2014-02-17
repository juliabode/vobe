<?php
/**
 * Customize Login Screen
 */

function my_login_logo() { ?>
    <style type="text/css">
        body.login {
            background-image: url(<?php echo get_bloginfo( 'template_directory' ) ?>/assets/img/bg.png);
        }
        body.login div#login h1 a {
            background-image: url(<?php echo get_bloginfo( 'template_directory' ) ?>/assets/img/logo.png);
            padding-bottom: 30px;
            width: auto;
			background-size: 100%;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

function my_login_logo_url() {
    return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
    return 'Vobe Event Consulting';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );

/**
* Add Favicon in admin panel
*/

function add_admin_area_favicon() {
    $favicon_url = get_template_directory_uri() . '/assets/img/favicon.png';
    echo '<link rel="shortcut icon" href="' . $favicon_url . '" />';
}
 
add_action('admin_head', 'add_admin_area_favicon');