<?php
/**
 * Main Plugin File
 *
 * @package UltraEmbed
 */

/**
 * Plugin Name:       UltraEmbed (Advanced Iframe)
 * Plugin URI:        https://ultradevs.com/wp/plugins/ultraembed
 * Description:       Use Iframe with more features using shortcode [iframe src="Link"]
 * Version:           1.0.0
 * Author:            ultraDevs
 * Author URI:        https://ultradevs.com
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       ultra-embed
 * Domain Path:       /languages
 */

// If this file is called directly, abort!
if ( ! defined( 'ABSPATH' ) ) {exit;}


define('ultraembed_dir', plugin_dir_path(__FILE__));
define('ultraembed_base', plugin_basename(__FILE__));
/**
 * Begin execution of the plugin
 */

if (!function_exists('run_ultraEmbed')) {
	function run_ultraEmbed()
	{
		require(ultraembed_dir.'includes/init.php');
		$ultraEmbed= new ultraEmbedInit();
		$ultraEmbed->run();

	}
}

//run
run_ultraEmbed();