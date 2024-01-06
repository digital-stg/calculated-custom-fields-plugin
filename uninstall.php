<?php

/**
 * Fired when the plugin is uninstalled.
 *
 *
 * @link       https://github.com/digital-stg
 * @since      1.0.0
 *
 * @package    Calculated_Custom_Fields
 */

// If uninstall not called from WordPress, then exit.
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit;
}

		$i = 1;
		do {
			$option_identificator = "op" . $i;

			$args = array(
				$option_identificator . '_option_name', $option_identificator . '_field_type', $option_identificator . '_input_description', $option_identificator . '_input_helptip', $option_identificator . '_requiredCheck', $option_identificator . '_disable_output', $option_identificator . '_input_placeholder', $option_identificator . '_text_input_extra_value',
				$option_identificator . '_text_input_max_length', $option_identificator . '_text_input_min_length', $option_identificator . '_number_input_extra_value', $option_identificator . '_number_min_value', $option_identificator . '_number_max_value', $option_identificator . '_number_step_value',
				$option_identificator . '_text_area_extra_value', $option_identificator . '_email_extra_value', $option_identificator . '_email_max_length', $option_identificator . '_checkbox_name', $option_identificator . '_field_value', $option_identificator . '_checkbox_name_2', $option_identificator . '_field_value_2',
				$option_identificator . '_checkbox_name_3', $option_identificator . '_field_value_3', $option_identificator . '_checkbox_name_4', $option_identificator . '_field_value_4', $option_identificator . '_sub_1_name', $option_identificator . '_Sub_1_value', $option_identificator . '_sub_2_name', $option_identificator . '_Sub_2_value', $option_identificator . '_sub_3_name', $option_identificator . '_Sub_3_value',
				$option_identificator . '_sub_4_name', $option_identificator . '_Sub_4_value', $option_identificator . '_sub_5_name', $option_identificator . '_Sub_5_value', $option_identificator . '_sub_6_name', $option_identificator . '_Sub_6_value',   $option_identificator . '_select_no_option', $option_identificator . '_radio_name_1', $option_identificator . '_radio_name_2', $option_identificator . '_radio_name_3', $option_identificator . '_radio_name_4', $option_identificator . '_radio_value_1', $option_identificator . '_radio_value_2', $option_identificator . '_radio_value_3', $option_identificator . '_radio_value_4',
				$option_identificator . '_img_name_1', $option_identificator . '_img_name_2', $option_identificator . '_img_name_3',  $option_identificator . '_img_name_4', $option_identificator . '_img_value_1', $option_identificator . '_img_value_2', $option_identificator . '_img_value_3',  $option_identificator . '_img_value_4', $option_identificator . '_img_1', $option_identificator . '_img_2', $option_identificator . '_img_3', $option_identificator . '_img_4',
				$option_identificator . '_btnswap_name_1', $option_identificator . '_btnswap_name_2', $option_identificator . '_btnswap_name_3', $option_identificator . '_btnswap_name_4', $option_identificator . '_btnswap_name_5', $option_identificator . '_btnswap_name_6',
				$option_identificator . '_btnswap_value_1', $option_identificator . '_btnswap_value_2', $option_identificator . '_btnswap_value_3', $option_identificator . '_btnswap_value_4', $option_identificator . '_btnswap_value_5', $option_identificator . '_btnswap_value_6',
				$option_identificator . '_color_extra_value', $option_identificator . '_calcul_formula',$option_identificator . '_calcul_number_min_value', $option_identificator . '_calcul_number_max_value', $option_identificator . '_calcul_number_step_value', $option_identificator . '_calcul_label_2', $option_identificator . '_calcul_description_2',  $option_identificator . '_input_calcul_helptip_2', $option_identificator . '_input_placeholder_2', $option_identificator . '_url_extra_value', $option_identificator . '_url_max_length', $option_identificator . '_url_min_length', $option_identificator . '_url_pattern',
				$option_identificator . '_only_letters', $option_identificator . '_text_area_max_length', $option_identificator . '_upload_value', $option_identificator . '_upload_max_size', 
				$option_identificator . '_phone_extra_value', $option_identificator . '_phone_minlength', $option_identificator . '_phone_maxlength', $option_identificator . '_phone_type', $option_identificator . '_national_code', $option_identificator . '_only_europa',  $option_identificator . '_international_code'
				
			  );
	
			foreach ($args as $to_delete) {
				if ($to_delete) {
					delete_metadata('post', $post_id, $to_delete, false, true);
				}
			}
			
			  //Delete allowed mimes types
			  $mimes_types = get_allowed_mime_types();
			  foreach ($mimes_types as $regex => $mime) {
				delete_metadata('post', $post_id, $option_identificator.'_'.$mime, false, true);
			  }

			$i++;
		} while ($i <= 2);

		update_option('quantity_related', 'yes');
		update_option('free_option_text', __('Free option', 'calculated-custom-fields'));
		update_option('cost_option_text', __('Option cost', 'calculated-custom-fields'));
		update_option('add_to_cart_text', __('Customize', 'calculated-custom-fields'));
		update_option('option_required_text', __('Option required', 'calculated-custom-fields'));

