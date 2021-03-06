<?php
/*
Plugin Name: Simple Example Plugin
Description: Welcome to WordPress plugin development.
Plugin URI:  https://plugin-planet.com/
Author:      Jeff Starr
Version:     1.0
License:     GPLv2 or later

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version
2 of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
with this program. If not, visit: https://www.gnu.org/licenses/
*/

function my_plugin_action_hook_example() {
    wp_mail('ronnyangelo.freites@gmail.com', 'Subject', 'Message...');
}

add_action('init', 'my_plugin_action_hook_example');

function my_plugin_filter_hook_example($content) {
    
    $content = $content . '<p> Custom content...</p>';

    return $content;
}

add_filter('the_content', 'my_plugin_filter_hook_example');