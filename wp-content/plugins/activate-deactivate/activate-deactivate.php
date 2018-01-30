<?php
/*
Plugin Name: Deactivation & Activation
Description: Example demonstrating activation, deactivation, and uninstall hooks.
Plugin URI:  https://plugin-planet.com/
Author:      Jeff Starr
Version:     1.0
*/

class ActivateDeactivate {

    public function __construct()
    {
        self::register_hooks();
    }

    // do stuff on activation
    public static function myplugin_on_activation() {

        if ( ! current_user_can( 'activate_plugins' ) ) return;

        add_option( 'myplugin_posts_per_page', 10 );
        add_option( 'myplugin_show_welcome_page', true );

    }

    // do stuff on deactivation
    public static function myplugin_on_deactivation() {

        if ( ! current_user_can( 'activate_plugins' ) ) return;

        flush_rewrite_rules();

    }

    // do stuff on uninstall
    public static function myplugin_on_uninstall() {

        if ( ! current_user_can( 'activate_plugins' ) ) return;

        delete_option( 'myplugin_posts_per_page', 10 );
        delete_option( 'myplugin_show_welcome_page', true );

    }

    public static function register_hooks() {
        register_activation_hook( __FILE__, array( 'ActivateDeactivate', 'myplugin_on_activation' ) );
        register_deactivation_hook( __FILE__, array( 'ActivateDeactivate', 'myplugin_on_deactivation' ) );
        register_uninstall_hook( __FILE__, array( 'ActivateDeactivate', 'myplugin_on_uninstall' ) );
    }
}

new ActivateDeactivate();
