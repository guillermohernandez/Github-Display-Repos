<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://memohernandez.com
 * @since             1.0.0
 * @package           Github_Display_Repos
 *
 * @wordpress-plugin
 * Plugin Name:       Github Display Repos
 * Plugin URI:        https://github.com/guillermohernandez/Github-Display-Repos
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Guillermo Hernandez Jr
 * Author URI:        http://memohernandez.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       github-display-repos
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-github-display-repos-activator.php
 */
function activate_github_display_repos() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-github-display-repos-activator.php';
	Github_Display_Repos_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-github-display-repos-deactivator.php
 */
function deactivate_github_display_repos() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-github-display-repos-deactivator.php';
	Github_Display_Repos_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_github_display_repos' );
register_deactivation_hook( __FILE__, 'deactivate_github_display_repos' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-github-display-repos.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_github_display_repos() {

	$plugin = new Github_Display_Repos();
	$plugin->run();

}
run_github_display_repos();
