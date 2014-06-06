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