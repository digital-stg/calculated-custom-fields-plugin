<?php

/**
 * 
 * @link              https://github.com/digital-stg
 * @since             1.0.0
 * @package           Calculated_Custom_Fields
 *
 * @wordpress-plugin
 * Plugin Name:       Calculated Custom Fields
 * Plugin URI:        
 * Description:       Add cumulative custom fields with live calculation to your WooCommerce products. 
 * Version:           1.0.0
 * 
 * Author:            DigitalStg
 * Author URI:        https://digital-stg.com
 * License:           GPLv2 
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       calculated-custom-fields
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if (!defined('WPINC')) {
	die;
}

/** 
 * Currently plugin version.
 * Start at version 1.0.0, use SemVer - https://semver.org
 * => update here when new versions releases.
 */

define('CALCULATED_CUSTOM_FIELDS_VERSION', '1.0.0');

/**
 * The code that runs during plugin activation.
 */
function activate_calculated_custom_fields()
{
	require_once plugin_dir_path(__FILE__) . 'includes/class-calculated-custom-fields-activator.php';
	Calculated_Custom_Fields_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 */

function deactivate_calculated_custom_fields()
{
	require_once plugin_dir_path(__FILE__) . 'includes/class-calculated-custom-fields-deactivator.php';
	Calculated_Custom_Fields_Deactivator::deactivate();
}

register_activation_hook(__FILE__, 'activate_calculated_custom_fields');
register_deactivation_hook(__FILE__, 'deactivate_calculated_custom_fields');

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */

require plugin_dir_path(__FILE__) . 'includes/class-calculated-custom-fields.php';

/**
 * Composer is a tool for dependency management in PHP.
 */

require_once(plugin_dir_path(__FILE__) . '/vendor/autoload.php');

/**
 * Begins execution of the plugin.
 *
 * @since    1.0.0
 */

function run_calculated_custom_fields()
{
	$plugin = new Calculated_Custom_Fields();
	$plugin->run();
}

run_calculated_custom_fields();
