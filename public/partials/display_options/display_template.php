<?php

/**
 * 
 * Display option fields on product page 
 * 
 * @link       https://digital-stg.com
 * @since      1.0.0
 * @package    Calculated_Custom_Fields
 * @subpackage Calculated_Custom_Fields/public/partials
 * 
 */

global $post;
$product = wc_get_product($post->ID);
$money_smybol = get_woocommerce_currency_symbol();
$optionName = $product->get_meta($option_identificator . '_option_name');
$inputType =  $product->get_meta($option_identificator . '_field_type');
$inputDescription = $product->get_meta($option_identificator . '_input_description');
$input_helptip = $product->get_meta($option_identificator . '_input_helptip');
$required = $product->get_meta($option_identificator . '_requiredCheck');
$disable_output = $product->get_meta($option_identificator . '_disable_output');
$input_placeholder = $product->get_meta($option_identificator . '_input_placeholder');
$checkboxname_1 = $product->get_meta($option_identificator . '_checkbox_name');
$optionValue = $product->get_meta($option_identificator . '_field_value');
$checkboxname_2 = $product->get_meta($option_identificator . '_checkbox_name_2');
$checkbox2Value = $product->get_meta($option_identificator . '_field_value_2');
$checkboxname_3 = $product->get_meta($option_identificator . '_checkbox_name_3');
$checkbox3Value = $product->get_meta($option_identificator . '_field_value_3');
$checkboxname_4 = $product->get_meta($option_identificator . '_checkbox_name_4');
$checkbox4Value = $product->get_meta($option_identificator . '_field_value_4');
$textExtra = $product->get_meta($option_identificator . '_text_input_extra_value');
$only_letters = $product->get_meta($option_identificator . '_only_letters');
$text_min_length = $product->get_meta($option_identificator . '_text_input_min_length');
$text_max_length = $product->get_meta($option_identificator . '_text_input_max_length');
$text_area_max_length = $product->get_meta($option_identificator . '_text_area_max_length');
$number_extra_value = $product->get_meta($option_identificator . '_number_input_extra_value');
$number_min = $product->get_meta($option_identificator . '_number_min_value');
$number_max = $product->get_meta($option_identificator . '_number_max_value');
$number_step = $product->get_meta($option_identificator . '_number_step_value');
$url_extra_value = $product->get_meta($option_identificator . '_url_extra_value');
$url_min = $product->get_meta($option_identificator . '_url_min_length');
$url_max = $product->get_meta($option_identificator . '_url_max_length');
$url_pattern = $product->get_meta($option_identificator . '_url_pattern');
$selectOptionName1 = $product->get_meta($option_identificator . '_sub_1_name');
$selectOptionValue1 = $product->get_meta($option_identificator . '_Sub_1_value');
$selectOptionName2 = $product->get_meta($option_identificator . '_sub_2_name');
$selectOptionValue2 = $product->get_meta($option_identificator . '_Sub_2_value');
$selectOptionName3 = $product->get_meta($option_identificator . '_sub_3_name');
$selectOptionValue3 = $product->get_meta($option_identificator . '_Sub_3_value');
$selectOptionName4 = $product->get_meta($option_identificator . '_sub_4_name');
$selectOptionValue4 = $product->get_meta($option_identificator . '_Sub_4_value');
$selectOptionName5 = $product->get_meta($option_identificator . '_sub_5_name');
$selectOptionValue5 = $product->get_meta($option_identificator . '_Sub_5_value');
$selectOptionName6 = $product->get_meta($option_identificator . '_sub_6_name');
$selectOptionValue6 = $product->get_meta($option_identificator . '_Sub_6_value');
$selectDefaultText = $product->get_meta($option_identificator . '_select_no_option');
$radioName_1 = $product->get_meta($option_identificator . '_radio_name_1');
$radioValue_1 = $product->get_meta($option_identificator . '_radio_value_1');
$radioName_2 = $product->get_meta($option_identificator . '_radio_name_2');
$radioValue_2 = $product->get_meta($option_identificator . '_radio_value_2');
$radioName_3 = $product->get_meta($option_identificator . '_radio_name_3');
$radioValue_3 = $product->get_meta($option_identificator . '_radio_value_3');
$radioName_4 = $product->get_meta($option_identificator . '_radio_name_4');
$radioValue_4 = $product->get_meta($option_identificator . '_radio_value_4');
$img_name_1 = $product->get_meta($option_identificator . '_img_name_1');
$img_value_1 = $product->get_meta($option_identificator . '_img_value_1');
$img_name_2 = $product->get_meta($option_identificator . '_img_name_2');
$img_value_2 = $product->get_meta($option_identificator . '_img_value_2');
$img_name_3 = $product->get_meta($option_identificator . '_img_name_3');
$img_value_3 = $product->get_meta($option_identificator . '_img_value_3');
$img_name_4 = $product->get_meta($option_identificator . '_img_name_4');
$img_value_4 = $product->get_meta($option_identificator . '_img_value_4');
$img_1_id = $product->get_meta($option_identificator . '_img_1');
$img_2_id = $product->get_meta($option_identificator . '_img_2');
$img_3_id = $product->get_meta($option_identificator . '_img_3');
$img_4_id = $product->get_meta($option_identificator . '_img_4');
$email_value = $product->get_meta($option_identificator . '_email_extra_value');
$email_max_length = $product->get_meta($option_identificator . '_email_max_length');
$btn_name_1 = $product->get_meta($option_identificator . '_btnswap_name_1');
$btn_value_1 = $product->get_meta($option_identificator . '_btnswap_value_1');
$btn_name_2 = $product->get_meta($option_identificator . '_btnswap_name_2');
$btn_value_2 = $product->get_meta($option_identificator . '_btnswap_value_2');
$btn_name_3 = $product->get_meta($option_identificator . '_btnswap_name_3');
$btn_value_3 = $product->get_meta($option_identificator . '_btnswap_value_3');
$btn_name_4 = $product->get_meta($option_identificator . '_btnswap_name_4');
$btn_value_4 = $product->get_meta($option_identificator . '_btnswap_value_4');
$btn_name_5 = $product->get_meta($option_identificator . '_btnswap_name_5');
$btn_value_5 = $product->get_meta($option_identificator . '_btnswap_value_5');
$btn_name_6 = $product->get_meta($option_identificator . '_btnswap_name_6');
$btn_value_6 = $product->get_meta($option_identificator . '_btnswap_value_6');
$color_value = $product->get_meta($option_identificator . '_color_extra_value');
$calcul_formula = $product->get_meta($option_identificator . '_calcul_formula');
$calcul_label_2 = $product->get_meta($option_identificator . '_calcul_label_2');
$calcul_description_2 = $product->get_meta($option_identificator . '_calcul_description_2');
$input_calcul_helptip_2 = $product->get_meta($option_identificator . '_input_calcul_helptip_2');
$input_placeholder_2 = $product->get_meta($option_identificator . '_input_placeholder_2');
$calcul_number_min = $product->get_meta($option_identificator . '_calcul_number_min_value');
$calcul_number_max = $product->get_meta($option_identificator . '_calcul_number_max_value');
$calcul_number_step = $product->get_meta($option_identificator . '_calcul_number_step_value');
$upload_value = $product->get_meta($option_identificator . '_upload_value');
$upload_max_size = $product->get_meta($option_identificator . '_upload_max_size');
$phone_value = $product->get_meta($option_identificator . '_phone_extra_value');
$phone_minlength = $product->get_meta($option_identificator . '_phone_minlength');
$phone_maxlength = $product->get_meta($option_identificator . '_phone_maxlength');
$only_national = $product->get_meta($option_identificator . '_national_code');


if ($inputType == "1" && $optionName && $textExtra != "") {

     //text inputs
     require plugin_dir_path(__FILE__) . 'parts/text.php';
     
} else  if ($inputType == "2" && $optionName && $selectOptionName1) {

     //select inputs
     require plugin_dir_path(__FILE__) . 'parts/select.php';

} else if ($inputType == "3" && $optionName) {

     //checkboxes inputs
     require plugin_dir_path(__FILE__) . 'parts/checkboxes.php';

} else if ($inputType == "4") {

     //textarea inputs
     require plugin_dir_path(__FILE__) . 'parts/textarea.php';

} else if ($inputType == "5" && $optionName && $radioName_1) {

     //radio inputs
     require plugin_dir_path(__FILE__) . 'parts/radio.php';

} else if ($inputType == "6") {

     //number inputs
     require plugin_dir_path(__FILE__) . 'parts/number.php';

} else if ($inputType == "7" && $optionName && $img_name_1 && $img_1_id) {

     //image inputs
     require plugin_dir_path(__FILE__) . 'parts/images.php';

} else if ($inputType == "8" && $optionName) {

     //email inputs
     require plugin_dir_path(__FILE__) . 'parts/email.php';

} else if ($inputType == "9" && $optionName) {

     //button inputs
     require plugin_dir_path(__FILE__) . 'parts/buttons.php';

} else if ($inputType == "10" && $color_value != "") {

     //color inputs
     require plugin_dir_path(__FILE__) . 'parts/color.php';

} else if ($inputType == "11" && !$calcul_formula == "") {

     //calcul formula inputs
     require plugin_dir_path(__FILE__) . 'parts/calcul.php';

} else if ($inputType == "12" && $url_extra_value != "") {

     //url inputs
     require plugin_dir_path(__FILE__) . 'parts/url.php';

} else if ($inputType == "13" && $upload_value != "") {

     //upload inputs
     require plugin_dir_path(__FILE__) . 'parts/upload.php';

} else if ($inputType == "14" && $only_national != "") {

     //phone inputs
     require plugin_dir_path(__FILE__) . 'parts/phone.php';

} else {

     //End of cpm_form
     echo "</div>";
}
