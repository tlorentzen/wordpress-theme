<?php
require_once(get_template_directory().'/3party/wp-bootstrap-navwalker.php');


// Add Thumbnails feature.
add_theme_support( 'post-thumbnails' );

function add_theme_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );

    // Require bootstrap css.
    wp_enqueue_style( 'bootstrap-min', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css', array('style'), '3.3.6', 'all');

    // Include Javascripts required for the theme.
    wp_enqueue_script( 'javascript', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js', array ( 'jquery' ), '3.3.6', true);
}

add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

/* ------------------------------------------------------------------------- */


function mbe_body_class($classes){
    if(is_user_logged_in()){
        $classes[] = 'body-logged-in';

        if(is_admin_bar_showing()){
            $classes[] = 'showing-admin-bar';
        }
    } else{
        $classes[] = 'body-logged-out';
    }
    return $classes;
}

add_filter('body_class', 'mbe_body_class');


/* ------------------------------------------------------------------------- */

/*

function mbe_wp_head(){
    if(is_user_logged_in()){
        echo '<style>'.PHP_EOL;
        echo 'body{ padding-top: 70px !important; }'.PHP_EOL;
        // Using custom CSS class name.
        echo 'body.body-logged-in .navbar-fixed-top{ top: 30px !important; }'.PHP_EOL;
        // Using WordPress default CSS class name.
        echo 'body.logged-in .navbar-fixed-top{ top: 30px !important; }'.PHP_EOL;
        echo '</style>'.PHP_EOL;
    }
}

add_action('wp_head', 'mbe_wp_head');

*/

register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'Tlorentzen' ),
) );

add_theme_support( 'post-formats', array( 'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat' ) );


$args = array(
    'name'          => "Sidebar right",
    'id'            => "sidebar-right",
    'description'   => '',
    'class'         => '',
    'before_widget' => '<li id="%1$s" class="widget %2$s list-unstyled">',
    'after_widget'  => "</li>\n",
    'before_title'  => '<h2 class="widgettitle">',
    'after_title'   => "</h2>\n",
);

register_sidebar( $args );