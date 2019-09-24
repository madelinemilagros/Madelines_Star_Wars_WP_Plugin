<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       MadelineMilagros.com
 * @since      1.0.0
 *
 * @package    Madelines_Star_Wars
 * @subpackage Madelines_Star_Wars/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Madelines_Star_Wars
 * @subpackage Madelines_Star_Wars/includes
 * @author     Madeline Merced <madelinemmilagros@gmail.com>
 */
class Madelines_Star_Wars_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'madelines star wars',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
