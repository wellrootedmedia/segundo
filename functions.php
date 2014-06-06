<?php

//function getVimeoVideoId() {
//    global $post;
//
//    $vimeoId = get_post_meta( $post->ID, 'VimeoId', true );
//    define(VIMEOID, $vimeoId);
//
//    return VIMEOID;
//}
//add_action( 'after_setup_theme', 'function_name' );

//Register area for custom menu
function register_my_menu() {
    register_nav_menu( 'primary-menu', __( 'Primary Menu' ) );
} add_action( 'init', 'register_my_menu' );


add_theme_support('post-thumbnails');
add_theme_support( 'post-formats', array( 'aside', 'gallery', 'video', 'link' ) );
//add_post_type_support( 'page', 'post-formats' );
//add_post_type_support( 'my_custom_post_type', 'post-formats' );


function ctpc_settings_init() {
    add_settings_section('ctpc_setting_section', 'Add tag to client e.g. "rich-chi"', 'ctpc_setting_section', 'general' );
    add_settings_field(
        'ctpc_saved_setting_taglink_id',
        'Client Tag link',
        'ctpc_setting_taglink',
        'general',
        'ctpc_setting_section'
    );
    register_setting( 'general', 'ctpc_setting_values' );
} add_action('admin_init', 'ctpc_settings_init' );

function ctpc_setting_section() { echo '<p></p>'; }

function ctpc_setting_taglink() {
    $ctpc_options = get_option( 'ctpc_setting_values' );
    $taglink = $ctpc_options['taglink'];

    echo '<input type="text" name="ctpc_setting_values[taglink]" value="' . esc_attr($taglink) . '" />';
}



class Menu_With_Description extends Walker_Nav_Menu {
    function start_el(&$output, $item, $depth, $args) {
        global $wp_query;
        $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

        $class_names = $value = '';

        $classes = empty( $item->classes ) ? array() : (array) $item->classes;

        $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) );
        $class_names = ' class="' . esc_attr( $class_names ) . '"';

        $output .= $indent . '<li id="menu-item-'. $item->ID . '"' . $value . $class_names .'>';

        $attributes = ! empty( $item->attr_title ) ? ' title="' . esc_attr( $item->attr_title ) .'"' : '';
        $attributes .= ! empty( $item->target ) ? ' target="' . esc_attr( $item->target ) .'"' : '';
        $attributes .= ! empty( $item->xfn ) ? ' rel="' . esc_attr( $item->xfn ) .'"' : '';
        $attributes .= ! empty( $item->url ) ? ' href="' . esc_attr( $item->url ) .'"' : '';

        $item_output = $args->before;
        $item_output .= '<a'. $attributes .'>';
        $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
        $item_output .= '<br /><span class="sub">' . $item->description . '</span>';
        $item_output .= '</a>';
        $item_output .= $args->after;

//        echo '<pre>';
//        print_r( $item );
//        echo '</pre>';
//
//        echo '<pre>';
//        print_r($depth);
//        echo '</pre>';
//
//        echo '<pre>';
//        print_r($args);
//        echo '</pre>';

        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }
}