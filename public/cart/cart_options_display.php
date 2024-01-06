<?php

/**
 * Display user choices  on cart page
 *
 * @link       https://github.com/digital-stg 
 * @since      1.0.0
 *
 * @package    Calculated_Custom_Fields
 * @subpackage Calculated_Custom_Fields/public
 */

 //text
if(isset( $cart_item_data[$option_identificator.'_check_text'] ) ) {
  $item_data[] = array(
  'key' => esc_attr($cart_item_data[$option_identificator.'_option_name']),
  'value' => wc_clean( $cart_item_data[$option_identificator.'_check_text'])
  );
  }

//number
  if( isset( $cart_item_data[$option_identificator.'_custom_number'] ) ) {
    $item_data[] = array(
    'key' => esc_attr($cart_item_data[$option_identificator.'_option_name']),
    'value' => wc_clean( $cart_item_data[$option_identificator.'_custom_number'])
    );
    }

//textarea
  if( isset( $cart_item_data[$option_identificator.'_textarea_content'] ) ) {
    $item_data[] = array(
    'key' => esc_attr($cart_item_data[$option_identificator.'_option_name']),
    'value' => wc_clean( $cart_item_data[$option_identificator.'_textarea_content'])
    );
    }

//email
  if(isset($cart_item_data[$option_identificator.'_email_content'])) {
    $item_data[] = array(
    'key' => esc_attr($cart_item_data[$option_identificator.'_option_name']),
    'value' => wc_clean($cart_item_data[$option_identificator.'_email_content'])
    );
    }
  
//url
  if( isset($cart_item_data[$option_identificator.'_choose_url'])) {
    $item_data[] = array(
    'key' => esc_attr($cart_item_data[$option_identificator.'_option_name']),
    'value' => wc_clean($cart_item_data[$option_identificator.'_choose_url'])
    );
    }

//phone
  if( isset($cart_item_data[$option_identificator.'_phone_number'])) {
    $item_data[] = array(
    'key' => esc_attr($cart_item_data[$option_identificator.'_option_name']),
    'value' => wc_clean($cart_item_data[$option_identificator.'_phone_number'])
    );
    }

//color
  if( isset($cart_item_data[$option_identificator.'_choose_color'])) {
    $item_data[] = array(
    'key' => esc_attr($cart_item_data[$option_identificator.'_option_name']),
    'value' => wc_clean($cart_item_data[$option_identificator.'_choose_color'])
    );
    }

//select
 if(isset($cart_item_data[$option_identificator . '_selected_index']) && $cart_item_data[$option_identificator . '_selected_index'] !=0) {
    $item_data[] = array(
    'key' => esc_attr($cart_item_data[$option_identificator.'_option_name']),
    'value' => wc_clean($cart_item_data[$option_identificator.'select_sub_option_name'])
    );
    }

//Radio
  if(isset($cart_item_data[$option_identificator.'_radio_price'])) {
    $item_data[] = array(
    'key' => esc_attr($cart_item_data[$option_identificator.'_option_name']),
    'value' => wc_clean($cart_item_data[$option_identificator . 'radio_sub_option_name'])
    );
    }

//img
  if( isset($cart_item_data[$option_identificator.'_img_val'])) {
    $item_data[] = array(
    'key' => esc_attr($cart_item_data[$option_identificator.'_option_name']),
    'value' => wc_clean($cart_item_data[$option_identificator . '_img_name'])
    );
    }

//buttons
  if( isset($cart_item_data[$option_identificator.'_btn_val'])) {
    $item_data[] = array(
    'key' => esc_attr($cart_item_data[$option_identificator.'_option_name']),
    'value' => wc_clean( $cart_item_data[$option_identificator.'_btn_name'])
    );
    }

//upload
  if( isset($cart_item_data[$option_identificator.'_file_name'])) {
    $item_data[] = array(
    'key' => esc_attr($cart_item_data[$option_identificator.'_option_name']),
    'value' => wc_clean($cart_item_data[$option_identificator.'_file_name'])
    );
    }

/*calcul formula */
if (isset($cart_item_data[$option_identificator . '_custom_calcul_value'])) {
  $item_data[] = array(
    'key' => esc_attr($cart_item_data[$option_identificator . '_option_name']),
    'value' => wc_clean($cart_item_data[$option_identificator . '_custom_calcul_value']),
  );
}

if (isset($cart_item_data[$option_identificator . '_custom_calcul_value_2']) && $cart_item_data[$option_identificator . '_custom_calcul_value_2'] !== "") {
  $item_data[] = array(
    'key' => esc_attr($cart_item_data[$option_identificator.'_label_input_2']),
    'value' => wc_clean($cart_item_data[$option_identificator . '_custom_calcul_value_2'])
  );
}

//checkboxes
if (isset($cart_item_data[$option_identificator . '_check1'] ) && !isset($cart_item_data[$option_identificator . '_check2'] ) && !isset($cart_item_data[$option_identificator . '_check3'] ) && !isset($cart_item_data[$option_identificator . '_check4'] )) {
  $item_data[] = array(
    'key' => esc_attr($cart_item_data[$option_identificator . '_option_name']),
    'value' => wc_clean($cart_item_data[$option_identificator .'_checkbox_name'][1]));
}

if (isset($cart_item_data[$option_identificator . '_check1'] ) && isset($cart_item_data[$option_identificator . '_check2'] ) && !isset($cart_item_data[$option_identificator . '_check3'] ) && !isset($cart_item_data[$option_identificator . '_check4'] )) {
  $item_data[] = array(
    'key' => esc_attr($cart_item_data[$option_identificator . '_option_name']),
    'value' => wc_clean($cart_item_data[$option_identificator .'_checkbox_name'][1] . ', ' . $cart_item_data[$option_identificator .'_checkbox_name'][2]));
}

if (isset($cart_item_data[$option_identificator . '_check1'] ) && isset($cart_item_data[$option_identificator . '_check2'] ) && isset($cart_item_data[$option_identificator . '_check3'] ) && !isset($cart_item_data[$option_identificator . '_check4'] )) {
  $item_data[] = array(
    'key' => esc_attr($cart_item_data[$option_identificator . '_option_name']),
    'value' => wc_clean($cart_item_data[$option_identificator .'_checkbox_name'][1] . ', ' . $cart_item_data[$option_identificator .'_checkbox_name'][2] . ', ' . $cart_item_data[$option_identificator .'_checkbox_name'][3]));
}

if (isset($cart_item_data[$option_identificator . '_check1'] ) && !isset($cart_item_data[$option_identificator . '_check2'] ) && isset($cart_item_data[$option_identificator . '_check3'] ) && isset($cart_item_data[$option_identificator . '_check4'] )) {
  $item_data[] = array(
    'key' => esc_attr($cart_item_data[$option_identificator . '_option_name']),
    'value' => wc_clean($cart_item_data[$option_identificator .'_checkbox_name'][1] . ', ' . $cart_item_data[$option_identificator .'_checkbox_name'][3] . ', ' . $cart_item_data[$option_identificator .'_checkbox_name'][4]));
}

if (isset($cart_item_data[$option_identificator . '_check1'] ) && isset($cart_item_data[$option_identificator . '_check2'] ) && !isset($cart_item_data[$option_identificator . '_check3'] ) && isset($cart_item_data[$option_identificator . '_check4'] )) {
  $item_data[] = array(
    'key' => esc_attr($cart_item_data[$option_identificator . '_option_name']),
    'value' => wc_clean($cart_item_data[$option_identificator .'_checkbox_name'][1] . ', ' . $cart_item_data[$option_identificator .'_checkbox_name'][2] . ', ' . $cart_item_data[$option_identificator .'_checkbox_name'][4]));
}

if (isset($cart_item_data[$option_identificator . '_check1'] ) && isset($cart_item_data[$option_identificator . '_check2'] ) && isset($cart_item_data[$option_identificator . '_check3'] ) && isset($cart_item_data[$option_identificator . '_check4'] )) {
  $item_data[] = array(
    'key' => esc_attr($cart_item_data[$option_identificator . '_option_name']),
    'value' => wc_clean($cart_item_data[$option_identificator .'_checkbox_name'][1] . ', ' . $cart_item_data[$option_identificator .'_checkbox_name'][2] . ', ' . $cart_item_data[$option_identificator .'_checkbox_name'][3] . ', ' . $cart_item_data[$option_identificator .'_checkbox_name'][4]));
}

if (isset($cart_item_data[$option_identificator . '_check1'] ) && !isset($cart_item_data[$option_identificator . '_check2'] ) && isset($cart_item_data[$option_identificator . '_check3'] ) && !isset($cart_item_data[$option_identificator . '_check4'] )) {
  $item_data[] = array(
    'key' => esc_attr($cart_item_data[$option_identificator . '_option_name']),
    'value' => wc_clean($cart_item_data[$option_identificator .'_checkbox_name'][1] . ', ' . $cart_item_data[$option_identificator .'_checkbox_name'][3]));
}

if (isset($cart_item_data[$option_identificator . '_check1'] ) && !isset($cart_item_data[$option_identificator . '_check2'] ) && !isset($cart_item_data[$option_identificator . '_check3'] ) && isset($cart_item_data[$option_identificator . '_check4'] )) {
  $item_data[] = array(
    'key' => esc_attr($cart_item_data[$option_identificator . '_option_name']),
    'value' => wc_clean($cart_item_data[$option_identificator .'_checkbox_name'][1] . ', ' . $cart_item_data[$option_identificator .'_checkbox_name'][4]));
}

if (!isset($cart_item_data[$option_identificator . '_check1'] ) && isset($cart_item_data[$option_identificator . '_check2'] ) && !isset($cart_item_data[$option_identificator . '_check3'] ) && !isset($cart_item_data[$option_identificator . '_check4'] )) {
  $item_data[] = array(
    'key' => esc_attr($cart_item_data[$option_identificator . '_option_name']),
    'value' => wc_clean($cart_item_data[$option_identificator .'_checkbox_name'][2]));
}

if (!isset($cart_item_data[$option_identificator . '_check1'] ) && isset($cart_item_data[$option_identificator . '_check2'] ) && isset($cart_item_data[$option_identificator . '_check3'] ) && !isset($cart_item_data[$option_identificator . '_check4'] )) {
  $item_data[] = array(
    'key' => esc_attr($cart_item_data[$option_identificator . '_option_name']),
    'value' => wc_clean($cart_item_data[$option_identificator .'_checkbox_name'][2] . ', ' . $cart_item_data[$option_identificator .'_checkbox_name'][3]));
}

if (!isset($cart_item_data[$option_identificator . '_check1'] ) && isset($cart_item_data[$option_identificator . '_check2'] ) && isset($cart_item_data[$option_identificator . '_check3'] ) && isset($cart_item_data[$option_identificator . '_check4'] )) {
  $item_data[] = array(
    'key' => esc_attr($cart_item_data[$option_identificator . '_option_name']),
    'value' => wc_clean($cart_item_data[$option_identificator .'_checkbox_name'][2] . ', ' . $cart_item_data[$option_identificator .'_checkbox_name'][3] . ', ' . $cart_item_data[$option_identificator .'_checkbox_name'][4]));
}

if (!isset($cart_item_data[$option_identificator . '_check1'] ) && isset($cart_item_data[$option_identificator . '_check2'] ) && !isset($cart_item_data[$option_identificator . '_check3'] ) && isset($cart_item_data[$option_identificator . '_check4'] )) {
  $item_data[] = array(
    'key' => esc_attr($cart_item_data[$option_identificator . '_option_name']),
    'value' => wc_clean($cart_item_data[$option_identificator .'_checkbox_name'][2] . ', ' . $cart_item_data[$option_identificator .'_checkbox_name'][4]));
}

if (!isset($cart_item_data[$option_identificator . '_check1'] ) && !isset($cart_item_data[$option_identificator . '_check2'] ) && isset($cart_item_data[$option_identificator . '_check3'] ) && !isset($cart_item_data[$option_identificator . '_check4'] )) {
  $item_data[] = array(
    'key' => esc_attr($cart_item_data[$option_identificator . '_option_name']),
    'value' => wc_clean($cart_item_data[$option_identificator .'_checkbox_name'][3]));
}

if (!isset($cart_item_data[$option_identificator . '_check1'] ) && !isset($cart_item_data[$option_identificator . '_check2'] ) && isset($cart_item_data[$option_identificator . '_check3'] ) && isset($cart_item_data[$option_identificator . '_check4'] )) {
  $item_data[] = array(
    'key' => esc_attr($cart_item_data[$option_identificator . '_option_name']),
    'value' => wc_clean($cart_item_data[$option_identificator .'_checkbox_name'][3] . ', ' . $cart_item_data[$option_identificator .'_checkbox_name'][4]));
}

if (!isset($cart_item_data[$option_identificator . '_check1'] ) && !isset($cart_item_data[$option_identificator . '_check2'] ) && !isset($cart_item_data[$option_identificator . '_check3'] ) && isset($cart_item_data[$option_identificator . '_check4'] )) {
  $item_data[] = array(
    'key' => esc_attr($cart_item_data[$option_identificator . '_option_name']),
    'value' => wc_clean($cart_item_data[$option_identificator .'_checkbox_name'][4]));
}





   
       
  
  
   
