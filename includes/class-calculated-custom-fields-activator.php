<?php

/**
 * Fired during plugin activation
 *
 * @link       https://github.com/digital-stg
 * @since      1.0.0
 *
 * @package    Calculated_Custom_Fields
 * @subpackage Calculated_Custom_Fields/includes
 */


class Calculated_Custom_Fields_Activator
{

	public static function activate()
	{// Test to see if WooCommerce is active (including network activated).
	$plugin_path = trailingslashit(WP_PLUGIN_DIR) . 'woocommerce/woocommerce.php';

	if (!in_array($plugin_path, wp_get_active_and_valid_plugins())) {
		deactivate_plugins(plugin_basename(__FILE__));
		wp_die('<h1>' . esc_html__('WooCommerce is required', 'calculated-custom-fields') . '</h1><br><br><strong></strong>' . esc_html__('CCF Plugin activation cancelled', 'calculated-custom-fields') . '<br><br><a href="' . get_site_url() . '/wp-admin/plugins.php">' . esc_html__('Go back to plugins', 'calculated-custom-fields') . '</a>');
		}

	}
}
