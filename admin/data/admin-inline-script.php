<?php 

/**
 * Get Options PHP Values and pass them to JS file
 *
 * @link       https://github.com/digital-stg 
 * @since      1.0.0
 * @package    Calculated_Custom_Fields
 * @subpackage Calculated_Custom_Fields/admin
 * @author     DigitalStg <contact@digital-stg.com>
 * 
 */

$array = ['quantity_related' => get_option('quantity_related')];

$i = 1;

do {

 $id_value = 'op' .$i;
 $array[$id_value."_select_name_3"] = $product->get_meta($id_value.'_sub_3_name');
 $array[$id_value."_select_name_4"] = $product->get_meta($id_value.'_sub_4_name');
 $array[$id_value."_select_name_5"] = $product->get_meta($id_value.'_sub_5_name');
 $array[$id_value."_select_name_6"] = $product->get_meta($id_value.'_sub_6_name');
 $array[$id_value."_radio_name_3"] = $product->get_meta($id_value.'_radio_name_3');
 $array[$id_value."_radio_name_4"] = $product->get_meta($id_value.'_radio_name_4');
 $array[$id_value."_check_name_2"] = $product->get_meta($id_value.'_checkbox_name_2');
 $array[$id_value."_check_name_3"] = $product->get_meta($id_value.'_checkbox_name_3');
 $array[$id_value."_check_name_4"] = $product->get_meta($id_value.'_checkbox_name_4');
 $array[$id_value."_image_swap_3"]  = $product->get_meta($id_value.'_img_value_3');
 $array[$id_value."_image_swap_4"]  = $product->get_meta($id_value.'_img_value_4');
 $array[$id_value."_btn_swap_4"]  = $product->get_meta($id_value.'_btnswap_value_4');
 $array[$id_value."_btn_swap_5"]  = $product->get_meta($id_value.'_btnswap_value_5');
 $array[$id_value."_btn_swap_6"]  = $product->get_meta($id_value.'_btnswap_value_6');
 $array[$id_value."_calcul_label_2"] = $product->get_meta($id_value.'_calcul_label_2');

 $i++;

} while ($i <= 2);

wp_add_inline_script($this->plugin_name . 'admin_js_inline_script', 'var php_admin_options_values = ' . json_encode( 
  $array 
 ), 'before' );

