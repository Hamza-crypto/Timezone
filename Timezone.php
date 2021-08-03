<?php
/**
 * Plugin Name: Timezone
 * Plugin URI: https://www.yourwebsiteurl.com/
 * Description: Add Like and Dislike funtionality to posts.
 * Version: 1.0
 * Author: Hamza
 * Author URI: http://yourwebsiteurl.com/
 **/

if (!defined('WPINC')) {
	die();
}

if (!defined('TZ_PLUGIN_DIR')) {
	define('TM=Z_PLUGIN_DIR', plugin_dir_url(__FILE__));
}

require plugin_dir_path(__FILE__) . 'functionality.php';
