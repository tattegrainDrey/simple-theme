<?php

/* -------------------------------------- Style */
function enqueue_styles() {
    wp_enqueue_style('my-theme-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'enqueue_styles');


/* -------------------------------------- Saving the menu */
// function save_menu()
// {
//     register_nav_menus(array(
//         'main-menu' => 'Header Menu'
//     ));
// }
// add_action('init', 'save_menu', 0);

/* -------------------------------------- theme support */
add_theme_support('custom-logo', array(
    'height' => 150,
    'width'  => 150
));

add_theme_support('post-thumbnails');

/* -------------------------------------- Excerpt*/
function custom_excerpt_length($length) {
    return 40; // Change the number to your desired word count
}
add_filter('excerpt_length', 'custom_excerpt_length');

function custom_excerpt_more($more) {
    return '... <a href="' . get_permalink() . '" class="more">Read more</a>';
}
add_filter('excerpt_more', 'custom_excerpt_more');


/* -------------------------------------- Widgets*/
function enregistrer_sidebar()
{
    register_sidebar(array(
        'name' => __('Footer 1', 'nom-de-mon-theme'),
        'id' => 'footer_1',
        'description' => __('Une zone de widget pour afficher des widgets dans le pied de page.', 'nom-de-mon-theme'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
}
add_action('widgets_init', 'enregistrer_sidebar');


/*---------------- Page Templates */
function add_custom_page_template_support() {
    add_theme_support('custom-page-templates');
}
add_action('after_setup_theme', 'add_custom_page_template_support');

