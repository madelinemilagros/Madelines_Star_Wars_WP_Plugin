<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              MadelineMilagros.com
 * @since             1.0.0
 * @package           Madelines_Star_Wars
 *
 * @wordpress-plugin
 * Plugin Name:       Madelines Star Wars 
 * Plugin URI:        http://madelinemilagros.com/index.php/madelines-star-wars-plugin/
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Madeline Merced
 * Author URI:        MadelineMilagros.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       madelines star wars
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'MADELINES STAR WARS_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-madelines star wars-activator.php
 */
function activate_madelines star wars() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-madelines star wars-activator.php';
	Madelines_Star_Wars_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-madelines star wars-deactivator.php
 */
function deactivate_madelines star wars() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-madelines star wars-deactivator.php';
	Madelines_Star_Wars_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_madelines star wars' );
register_deactivation_hook( __FILE__, 'deactivate_madelines star wars' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-madelines star wars.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_madelines star wars() {

	$plugin = new Madelines_Star_Wars();
	$plugin->run();

}
run_madelines star wars();
