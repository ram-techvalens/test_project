<?php
/**
 * Plugin Name: Limit Plugins by User
 * Plugin URI: http://stackoverflow.com/q/14340131/1287812
 * Description: Show selected plugins for specific users. 
 * Based on the code by spuriousdata, http://stackoverflow.com/a/3713985.
 * Author: brasofilo
 * Author URI: http://wordpress.stackexchange.com/users/12615/brasofilo
 * Version: 1.0
 * License: GPLv2 or later
 */

add_filter( 'all_plugins', 'plugin_permissions_so_3707134' );

/**
 * Filter the list of plugins according to user_login
 *
 * Usage: configure the variable $plugin_credentials, which holds a list of users and their plugins.
 * To give full access, put a simple string "ALL"
 * To grant only for some plugins, create an array with the Plugin Slug, 
 *    which is the file name without extension (akismet.php, hello.php)
 *
 * @return array List of plugins
 */
function plugin_permissions_so_3707134( $plugins )
{
    // Config
    $plugin_credentials = array(
        'admin' => "ALL",
        'subscriber' => array(
            'akismet',
        ),
        'another-admin' => array(
            'akismet',
            'hello',
        ),
    );

    // Current user
    global $current_user;
    $username = $current_user->user_login;

    // Super admin, return everything
    if ( "ALL" == $plugin_credentials[ $username ] )
        return $plugins;

    // Filter the plugins of the user
    foreach ( $plugins as $key => $value ) 
    { 
        // Get the file name minus extension
        $plugin_slug = basename( $key, '.php' );

        // If not in the list of allowed plugins, remove from array
        if( !in_array( $plugin_slug, $plugin_credentials[ $username ] ) )
            unset( $plugins[ $key ] );
    }

    return $plugins;
}