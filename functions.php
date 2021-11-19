<?php add_action('acf/init', 'my_acf_op_init');
function my_acf_op_init() {
    // Check function exists.
    if( function_exists('acf_add_options_page') ) {
        // Register options page.
        $option_page = acf_add_options_page(array(
            'page_title'    => __('Sivuston asetukset'),
            'menu_title'    => __('Sivuston asetukset'),
            'menu_slug'     => 'theme-general-settings',
            'capability'    => 'edit_posts',
            'redirect'      => false
        ));
    }
}

register_nav_menus( array(
    'menu-1' => esc_html__( 'Primary', 'first-theme' ),
) );

add_action('acf/init', 'my_acf_init_block_types');
function my_acf_init_block_types() {

    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

        // register a testimonial block.
        acf_register_block_type(array(
            'name'              => 'hero',
            'title'             => __('Hero'),
            'description'       => __('A hero image block'),
            'render_template'   => 'blocks/hero.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'hero', 'full-width' ),
        ));

    }
}

function test_theme_scripts() {
    wp_enqueue_style( 'first-theme-style', get_stylesheet_uri() );
    wp_enqueue_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
}
add_action( 'wp_enqueue_scripts', 'test_theme_scripts' );