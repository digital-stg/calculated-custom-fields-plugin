<?php

/**
 * Save and delete all options from the admin panel
 *
 * @link       https://github.com/digital-stg 
 * @since      1.0.0
 * @package    Calculated_Custom_Fields
 * @subpackage Calculated_Custom_Fields/admin
 * @author     DigitalStg <contact@digital-stg.com>
 * 
 */

    //DELETE ALL FIELDS

    if ($_POST[$option_identificator . '_delete-submit']){
          
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
    delete_metadata('post', $post_id, $to_delete, false, false);
    }
  }

  //Delete allowed mimes types
  $mimes_types = get_allowed_mime_types();
  foreach ($mimes_types as $regex => $mime) {
    delete_metadata('post', $post_id, $option_identificator.'_'.$mime, false, false);
  }

    } else {
  
       //SAVE ALL FIELDS

      $metaValues = array(
        $option_identificator . '_option_name' => sanitize_text_field($_POST[$option_identificator . '_option_name']),
        $option_identificator . '_field_type' => sanitize_text_field($_POST[$option_identificator . '_field_type']),
        $option_identificator . '_input_description' => sanitize_textarea_field($_POST[$option_identificator . '_input_description']),
        $option_identificator . '_input_helptip' => sanitize_textarea_field($_POST[$option_identificator . '_input_helptip']),
        $option_identificator . '_requiredCheck' => sanitize_key($_POST[$option_identificator . '_requiredCheck']),
        $option_identificator . '_disable_output' => sanitize_key($_POST[$option_identificator . '_disable_output']),
        $option_identificator . '_input_placeholder' => sanitize_text_field($_POST[$option_identificator . '_input_placeholder']),
        $option_identificator . '_only_letters' => sanitize_key($_POST[$option_identificator . '_only_letters']),
        $option_identificator . '_text_input_extra_value' => sanitize_text_field($_POST[$option_identificator . '_text_input_extra_value']),
        $option_identificator . '_text_input_max_length' => sanitize_text_field($_POST[$option_identificator . '_text_input_max_length']),
        $option_identificator . '_text_input_min_length' => sanitize_text_field($_POST[$option_identificator . '_text_input_min_length']),
        $option_identificator . '_url_extra_value' => sanitize_text_field($_POST[$option_identificator . '_url_extra_value']),
        $option_identificator . '_url_max_length' => sanitize_text_field($_POST[$option_identificator . '_url_max_length']),
        $option_identificator . '_url_min_length' => sanitize_text_field($_POST[$option_identificator . '_url_min_length']),
        $option_identificator . '_url_pattern' => sanitize_text_field($_POST[$option_identificator . '_url_pattern']),
        $option_identificator . '_number_input_extra_value' => sanitize_text_field($_POST[$option_identificator . '_number_input_extra_value']),
        $option_identificator . '_number_min_value' => sanitize_text_field($_POST[$option_identificator . '_number_min_value']),
        $option_identificator . '_number_max_value' => sanitize_text_field($_POST[$option_identificator . '_number_max_value']),
        $option_identificator . '_number_step_value' => sanitize_text_field($_POST[$option_identificator . '_number_step_value']),
        $option_identificator . '_text_area_extra_value' => sanitize_text_field($_POST[$option_identificator . '_text_area_extra_value']),
        $option_identificator . '_text_area_max_length' => sanitize_text_field($_POST[$option_identificator . '_text_area_max_length']),
        $option_identificator . '_email_extra_value' => sanitize_text_field($_POST[$option_identificator . '_email_extra_value']),
        $option_identificator . '_email_max_length' => sanitize_text_field($_POST[$option_identificator . '_email_max_length']),
        $option_identificator . '_checkbox_name' =>  sanitize_text_field($_POST[$option_identificator . '_checkbox_name']),
        $option_identificator . '_field_value' => sanitize_text_field($_POST[$option_identificator . '_field_value']),
        $option_identificator . '_checkbox_name_2' => sanitize_text_field($_POST[$option_identificator . '_checkbox_name_2']),
        $option_identificator . '_field_value_2' => sanitize_text_field($_POST[$option_identificator . '_field_value_2']),
        $option_identificator . '_checkbox_name_3' => sanitize_text_field($_POST[$option_identificator . '_checkbox_name_3']),
        $option_identificator . '_field_value_3' => sanitize_text_field($_POST[$option_identificator . '_field_value_3']),
        $option_identificator . '_checkbox_name_4' => sanitize_text_field($_POST[$option_identificator . '_checkbox_name_4']),
        $option_identificator . '_field_value_4' => sanitize_text_field($_POST[$option_identificator . '_field_value_4']),
        $option_identificator . '_select_no_option' => sanitize_text_field($_POST[$option_identificator . '_select_no_option']),
        $option_identificator . '_sub_1_name' => sanitize_text_field($_POST[$option_identificator . '_sub_1_name']),
        $option_identificator . '_Sub_1_value' => sanitize_text_field($_POST[$option_identificator . '_Sub_1_value']),
        $option_identificator . '_sub_2_name' => sanitize_text_field($_POST[$option_identificator . '_sub_2_name']),
        $option_identificator . '_Sub_2_value' => sanitize_text_field($_POST[$option_identificator . '_Sub_2_value']),
        $option_identificator . '_sub_3_name' => sanitize_text_field($_POST[$option_identificator . '_sub_3_name']),
        $option_identificator . '_Sub_3_value' => sanitize_text_field($_POST[$option_identificator . '_Sub_3_value']),
        $option_identificator . '_sub_4_name' => sanitize_text_field($_POST[$option_identificator . '_sub_4_name']),
        $option_identificator . '_Sub_4_value' => sanitize_text_field($_POST[$option_identificator . '_Sub_4_value']),
        $option_identificator . '_sub_5_name' => sanitize_text_field($_POST[$option_identificator . '_sub_5_name']),
        $option_identificator . '_Sub_5_value' => sanitize_text_field($_POST[$option_identificator . '_Sub_5_value']),
        $option_identificator . '_sub_6_name' => sanitize_text_field($_POST[$option_identificator . '_sub_6_name']),
        $option_identificator . '_Sub_6_value' => sanitize_text_field($_POST[$option_identificator . '_Sub_6_value']),
        $option_identificator . '_radio_name_1' => sanitize_text_field($_POST[$option_identificator . '_radio_name_1']),
        $option_identificator . '_radio_value_1' => sanitize_text_field($_POST[$option_identificator . '_radio_value_1']),
        $option_identificator . '_radio_name_2' => sanitize_text_field($_POST[$option_identificator . '_radio_name_2']),
        $option_identificator . '_radio_value_2' => sanitize_text_field($_POST[$option_identificator . '_radio_value_2']),
        $option_identificator . '_radio_name_3' => sanitize_text_field($_POST[$option_identificator . '_radio_name_3']),
        $option_identificator . '_radio_value_3' => sanitize_text_field($_POST[$option_identificator . '_radio_value_3']),
        $option_identificator . '_radio_name_4' => sanitize_text_field($_POST[$option_identificator . '_radio_name_4']),
        $option_identificator . '_radio_value_4' => sanitize_text_field($_POST[$option_identificator . '_radio_value_4']),
        $option_identificator . '_img_name_1' => sanitize_text_field($_POST[$option_identificator . '_img_name_1']),
        $option_identificator . '_img_value_1' => sanitize_text_field($_POST[$option_identificator . '_img_value_1']),
        $option_identificator . '_img_name_2' => sanitize_text_field($_POST[$option_identificator . '_img_name_2']),
        $option_identificator . '_img_value_2' => sanitize_text_field($_POST[$option_identificator . '_img_value_2']),
        $option_identificator . '_img_name_3' => sanitize_text_field($_POST[$option_identificator . '_img_name_3']),
        $option_identificator . '_img_value_3' => sanitize_text_field($_POST[$option_identificator . '_img_value_3']),
        $option_identificator . '_img_name_4' => sanitize_text_field($_POST[$option_identificator . '_img_name_4']),
        $option_identificator . '_img_value_4' => sanitize_text_field($_POST[$option_identificator . '_img_value_4']),
        $option_identificator . '_img_1' => sanitize_text_field($_POST[$option_identificator . '_img_1']),
        $option_identificator . '_img_2' => sanitize_text_field($_POST[$option_identificator . '_img_2']),
        $option_identificator . '_img_3' => sanitize_text_field($_POST[$option_identificator . '_img_3']),
        $option_identificator . '_img_4' => sanitize_text_field($_POST[$option_identificator . '_img_4']),
        $option_identificator . '_btnswap_name_1' => sanitize_text_field($_POST[$option_identificator . '_btnswap_name_1']),
        $option_identificator . '_btnswap_value_1' => sanitize_text_field($_POST[$option_identificator . '_btnswap_value_1']),
        $option_identificator . '_btnswap_name_2' => sanitize_text_field($_POST[$option_identificator . '_btnswap_name_2']),
        $option_identificator . '_btnswap_value_2' => sanitize_text_field($_POST[$option_identificator . '_btnswap_value_2']),
        $option_identificator . '_btnswap_name_3' => sanitize_text_field($_POST[$option_identificator . '_btnswap_name_3']),
        $option_identificator . '_btnswap_value_3' => sanitize_text_field($_POST[$option_identificator . '_btnswap_value_3']),
        $option_identificator . '_btnswap_name_4' => sanitize_text_field($_POST[$option_identificator . '_btnswap_name_4']),
        $option_identificator . '_btnswap_value_4' => sanitize_text_field($_POST[$option_identificator . '_btnswap_value_4']),
        $option_identificator . '_btnswap_name_5' => sanitize_text_field($_POST[$option_identificator . '_btnswap_name_5']),
        $option_identificator . '_btnswap_value_5' => sanitize_text_field($_POST[$option_identificator . '_btnswap_value_5']),
        $option_identificator . '_btnswap_name_6' => sanitize_text_field($_POST[$option_identificator . '_btnswap_name_6']),
        $option_identificator . '_btnswap_value_6' => sanitize_text_field($_POST[$option_identificator . '_btnswap_value_6']),
        $option_identificator . '_color_extra_value' => sanitize_text_field($_POST[$option_identificator . '_color_extra_value']),
        $option_identificator . '_calcul_formula' => sanitize_textarea_field($_POST[$option_identificator . '_calcul_formula']),
        $option_identificator . '_calcul_label_2' => sanitize_text_field($_POST[$option_identificator . '_calcul_label_2']),
        $option_identificator . '_calcul_description_2' => sanitize_text_field($_POST[$option_identificator . '_calcul_description_2']),
        $option_identificator . '_input_placeholder_2' => sanitize_text_field($_POST[$option_identificator . '_input_placeholder_2']),
        $option_identificator . '_input_calcul_helptip_2' => sanitize_text_field($_POST[$option_identificator . '_input_calcul_helptip_2']),
        $option_identificator . '_calcul_number_min_value' => sanitize_text_field($_POST[$option_identificator . '_calcul_number_min_value']),
        $option_identificator . '_calcul_number_max_value' => sanitize_text_field($_POST[$option_identificator . '_calcul_number_max_value']),
        $option_identificator . '_upload_value' => sanitize_text_field($_POST[$option_identificator . '_upload_value']),
        $option_identificator . '_upload_max_size' => sanitize_text_field($_POST[$option_identificator . '_upload_max_size']),
        $option_identificator . '_phone_extra_value' => sanitize_text_field($_POST[$option_identificator . '_phone_extra_value']),
        $option_identificator . '_phone_minlength' => sanitize_text_field($_POST[$option_identificator . '_phone_minlength']),
        $option_identificator . '_phone_maxlength' => sanitize_text_field($_POST[$option_identificator . '_phone_maxlength']),
        $option_identificator . '_phone_type' => sanitize_text_field($_POST[$option_identificator . '_phone_type']),
        $option_identificator . '_only_europa' => sanitize_key($_POST[$option_identificator . '_only_europa']),
        $option_identificator . '_national_code' => sanitize_text_field($_POST[$option_identificator . '_national_code']),
        $option_identificator . '_international_code' => sanitize_text_field($_POST[$option_identificator . '_international_code']),

      );

  foreach ($metaValues as $metaKey => $metaValue) {

    update_post_meta($post_id, $metaKey, esc_attr($metaValue));
  
  }

  // Delete all mimes type 
  $mimes_types = get_allowed_mime_types();
  foreach ($mimes_types as $regex => $mime) {
    delete_metadata('post', $post_id, $option_identificator . '_' . $mime, false, false);
  }

  $allowed_mimes_types = $_POST[$option_identificator . '_mimes_types'];
  foreach ($allowed_mimes_types as $index => $mime) {
    update_post_meta($post_id, $option_identificator . '_' . $mime, esc_attr($mime));
  }  

    }
