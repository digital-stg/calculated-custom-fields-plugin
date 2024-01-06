<?php

/**
 * Define the internationalization functionality.
 *
 * Load the plugin text domain for translation.
 *
 * @since      1.0.0
 * @package    Calculated_Custom_Fields
 * @subpackage Calculated_Custom_Fields/includes
 * @author     digital-stg <contact@digital-stg.com>
 * 
 */

class Calculated_Custom_Fields_i18n {

	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'calculated-custom-fields',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}

}
