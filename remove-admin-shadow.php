<?php
/*
Plugin Name: Remove Admin Shadow
Plugin URI: http://www.vanderwijk.com/updates/remove-wordpress-3-2-admin-shadow-plugin/
Description: Removes admin shadow from WordPress admin interface
Version: 1.0
Author: Johan van der Wijk
Author URI: http://www.vanderwijk.com

*/

function ras_add_style() {
   echo '<style type="text/css">
           #adminmenushadow, #adminmenuback { background-image: none; }
         </style>';
}

add_action('admin_head', 'ras_add_style');

?>
