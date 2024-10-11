<?php
/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://example.com
 * @since             1.0.0
 * @package           WP Plugin Template
 *
 * @wordpress-plugin
 * Plugin Name:       WP Plugin Template
 * Plugin URI:
 * Description:       Optimize and speed up WP site.
 * Version:           1.0.0
 * Author:            Josip Mucak
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       plugin-name
 * Domain Path:       /languages
 */


use WpPluginTemplate\WPPluginTemplate;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! file_exists( __DIR__ . '/vendor/autoload.php' ) ) {
	add_action( 'admin_notices', function () {
		?>
        <div class="notice notice-error">
            <h2>Missing <i>vendor/autoloader.php</i></h2>
            <p>
                <strong>
                    You are missing composer autoload. Please run <i>composer install</i> in root of your project.
                </strong>
            </p>
        </div>
		<?php
	} );

	return;
}

require_once __DIR__ . '/vendor/autoload.php';

( new WPPluginTemplate() )->init( array(
	'plugin_path'     => plugin_dir_path( __FILE__ ),
	'plugin_url'      => plugin_dir_url( __FILE__ ),
	'plugin_basename' => plugin_basename( __FILE__ ),
) );