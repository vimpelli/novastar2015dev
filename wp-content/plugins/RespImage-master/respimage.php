<?php

/*
Plugin Name: RespImage
Plugin URI: http://elf02.de/2014/07/14/respimage-wordpress-plugin/
Description: Responsive image solution using Picturefill.js.
Version: 1.0.0
Author: ChrisB
Author URI: http://elf02.de
License: MIT
*/

defined('ABSPATH') OR exit;

define('RESPIMAGE_FILE', __FILE__);
define('RESPIMAGE_PLUGIN_DIR', untrailingslashit(plugin_dir_path(RESPIMAGE_FILE )));
define('RESPIMAGE_PLUGIN_URL', untrailingslashit(plugins_url(basename(plugin_dir_path(RESPIMAGE_FILE )), basename(RESPIMAGE_FILE))));


require_once(
    sprintf(
        '%s/inc/%s.class.php',
        RESPIMAGE_PLUGIN_DIR,
        'respimage'
    )
);


add_action(
    'plugins_loaded',
    array(
        'respimage',
        'instance'
    )
);

?>