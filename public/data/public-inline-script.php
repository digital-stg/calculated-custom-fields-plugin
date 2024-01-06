<?php

// Get Options PHP Values and pass them to JS file

$array = ['price' => $product->get_price(), 
'currency' => get_woocommerce_currency_symbol(),
'currency_position' => get_option('woocommerce_currency_pos'),
'quantity_related' => get_option('quantity_related'),
'free_option_text' => get_option('free_option_text'),
'cost_option_text' => get_option('cost_option_text'),
'option_required_text' =>get_option('option_required_text'),
'formula_notice_1' => __('Fill the input with numbers', 'calculated-custom-fields'),
'formula_notice_2' => __('Fill the second input', 'calculated-custom-fields'),
'formula_notice_3' => __('Fill the first input', 'calculated-custom-fields'),
'formula_notice_4' => __('Fill the input', 'calculated-custom-fields'),
'price_input_id' => $this->price_input_id
];

$i = 1;

do {
 $id_value = 'op' .$i;
 $array[$id_value."_active_option"] = $product->get_meta($id_value.'_field_type');
 $array[$id_value."_text_input_extra_value"] = $product->get_meta($id_value.'_text_input_extra_value');
 $array[$id_value."_url_extra_value"] = $product->get_meta($id_value.'_url_extra_value');
 $array[$id_value."_text_area_extra_value"] = $product->get_meta($id_value.'_text_area_extra_value');
 $array[$id_value."_number_input_extra_value"] = $product->get_meta($id_value.'_number_input_extra_value');
 $array[$id_value."_checkbox_value"] = $product->get_meta($id_value.'_field_value');
 $array[$id_value."_checkbox_value_2"] = $product->get_meta($id_value.'_field_value_2');
 $array[$id_value."_checkbox_value_3"] = $product->get_meta($id_value.'_field_value_3');
 $array[$id_value."_checkbox_value_4"] = $product->get_meta($id_value.'_field_value_4');
 $array[$id_value."_select_value"] = $product->get_meta($id_value.'_Sub_1_value');
 $array[$id_value."_select_value_2"]  = $product->get_meta($id_value.'_Sub_2_value');
 $array[$id_value."_select_value_3"]  = $product->get_meta($id_value.'_Sub_3_value');
 $array[$id_value."_select_value_4"]  = $product->get_meta($id_value.'_Sub_4_value');
 $array[$id_value."_select_value_5"]  = $product->get_meta($id_value.'_Sub_5_value');
 $array[$id_value."_select_value_6"]  = $product->get_meta($id_value.'_Sub_6_value');
 $array[$id_value."_email_extra_value"] = $product->get_meta($id_value.'_email_extra_value');
 $array[$id_value."_color_extra_value"] = $product->get_meta($id_value.'_color_extra_value');
 $array[$id_value."_calcul_formula"] = $product->get_meta($id_value.'_calcul_formula');
 $array[$id_value."_upload_value"] = $product->get_meta($id_value.'_upload_value');
 $array[$id_value."_phone_extra_value"] = $product->get_meta($id_value.'_phone_extra_value');

 $i++;

} while ($i <= 2);

wp_add_inline_script($this->plugin_name . 'public_js_inline_script', 'var php_options_values = ' . json_encode(
	$array,
), 'before');
