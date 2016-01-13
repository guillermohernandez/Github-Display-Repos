<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://memohernandez.com
 * @since      1.0.0
 *
 * @package    Github_Display_Repos
 * @subpackage Github_Display_Repos/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Github_Display_Repos
 * @subpackage Github_Display_Repos/includes
 * @author     Guillermo Hernandez Jr <guillermohernandez@gmail.com>
 */
class Github_Display_Repos_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'github-display-repos',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
