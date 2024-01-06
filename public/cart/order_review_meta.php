<?php


/**
 * Save and Display custom data in user order review (after checkout), order admin and email order
 *
 * @link       https://github.com/digital-stg 
 * @since      1.0.0
 *
 * @package    Calculated_Custom_Fields
 * @subpackage Calculated_Custom_Fields/public
 */


/*text*/
if ( isset( $values[$option_identificator . '_check_text'] ) ) {
$item->update_meta_data($values[$option_identificator.'_option_name'], $values[$option_identificator.'_check_text']);
}

/*number*/
if( isset( $values[$option_identificator.'_custom_number'] ) ) {
$item->update_meta_data($values[$option_identificator.'_option_name'], $values[$option_identificator.'_custom_number']);
}

/*textarea*/
if( isset( $values[$option_identificator.'_textarea_content'] ) ) {
  $item->update_meta_data($values[$option_identificator.'_option_name'], $values[$option_identificator.'_textarea_content']);
  }

/*email*/
if( isset( $values[$option_identificator.'_email_content'] ) ) {
  $item->update_meta_data($values[$option_identificator.'_option_name'], $values[$option_identificator.'_email_content']);
  }

/*url*/
if( isset( $values[$option_identificator.'_choose_url'] ) ) {
  $item->update_meta_data($values[$option_identificator.'_option_name'], $values[$option_identificator.'_choose_url']);
  }

/*phone*/
if( isset( $values[$option_identificator.'_phone_number'] ) ) {
  $item->update_meta_data($values[$option_identificator.'_option_name'], $values[$option_identificator.'_phone_number']);
  }

/*color*/
if( isset( $values[$option_identificator.'_choose_color'] ) ) {
  $item->update_meta_data($values[$option_identificator.'_option_name'], $values[$option_identificator.'_choose_color']);
  }

/*select*/
if( isset( $values[$option_identificator.'_selected_option_price'] ) ) {
  $item->update_meta_data($values[$option_identificator.'_option_name'], $values[$option_identificator.'select_sub_option_name']);
  }

/*radio*/
if( isset( $values[$option_identificator.'_radio_price'] ) ) {
  $item->update_meta_data($values[$option_identificator.'_option_name'], $values[$option_identificator.'radio_sub_option_name']);
  }

/*img*/
if( isset( $values[$option_identificator.'_img_val'] ) ) {
  $item->update_meta_data($values[$option_identificator.'_option_name'], $values[$option_identificator.'_img_name']);
  }

/*buttons*/
if( isset( $values[$option_identificator.'_btn_val'] ) ) {
  $item->update_meta_data($values[$option_identificator.'_option_name'], $values[$option_identificator.'_btn_name']);
  }

/*upload*/
if( isset( $values[$option_identificator.'_file_name'] ) ) {
  $item->update_meta_data($values[$option_identificator.'_option_name'], $values[$option_identificator.'_file_name']);
  }

/*calcul formula*/
if( isset( $values[$option_identificator.'_custom_calcul_value'] ) ) {
  $item->update_meta_data($values[$option_identificator.'_option_name'], $values[$option_identificator.'_custom_calcul_value']);
    
    if( isset( $values[$option_identificator.'_custom_calcul_value_2'] ) ) {
    $item->update_meta_data($values[$option_identificator.'_label_input_2'], $values[$option_identificator.'_custom_calcul_value_2']);}
  }

/*checkboxes*/
if (
  isset($values[$option_identificator . '_check1']) && !isset($values[$option_identificator . '_check2']) && !isset($values[$option_identificator . '_check3']) && !isset($values[$option_identificator . '_check4'])
) {
  $item->update_meta_data($values[$option_identificator . '_option_name'], $values[$option_identificator . '_checkbox_name'][1]);
}

if (
  isset($values[$option_identificator . '_check1']) && isset($values[$option_identificator . '_check2']) && !isset($values[$option_identificator . '_check3']) && !isset($values[$option_identificator . '_check4'])
) {
  $item->update_meta_data($values[$option_identificator . '_option_name'], $values[$option_identificator . '_checkbox_name'][1] . ', ' .  $values[$option_identificator . '_checkbox_name'][2]);
}

if (
  isset($values[$option_identificator . '_check1']) && isset($values[$option_identificator . '_check2']) && isset($values[$option_identificator . '_check3']) && !isset($values[$option_identificator . '_check4'])
) {
  $item->update_meta_data($values[$option_identificator . '_option_name'], $values[$option_identificator . '_checkbox_name'][1] . ', ' .  $values[$option_identificator . '_checkbox_name'][2] . ', ' .  $values[$option_identificator . '_checkbox_name'][3]);
}

if (
  isset($values[$option_identificator . '_check1']) && isset($values[$option_identificator . '_check2']) && isset($values[$option_identificator . '_check3']) && isset($values[$option_identificator . '_check4'])
) {
  $item->update_meta_data($values[$option_identificator . '_option_name'], $values[$option_identificator . '_checkbox_name'][1] . ', ' .  $values[$option_identificator . '_checkbox_name'][2] . ', ' .  $values[$option_identificator . '_checkbox_name'][3] . ', ' .  $values[$option_identificator . '_checkbox_name'][4]);
}

if (
  isset($values[$option_identificator . '_check1']) && !isset($values[$option_identificator . '_check2']) && isset($values[$option_identificator . '_check3']) && isset($values[$option_identificator . '_check4'])
) {
  $item->update_meta_data($values[$option_identificator . '_option_name'], $values[$option_identificator . '_checkbox_name'][1] . ', ' .  $values[$option_identificator . '_checkbox_name'][3] . ', ' .  $values[$option_identificator . '_checkbox_name'][4]);
}

if (
  isset($values[$option_identificator . '_check1']) && isset($values[$option_identificator . '_check2']) && !isset($values[$option_identificator . '_check3']) && isset($values[$option_identificator . '_check4'])
) {
  $item->update_meta_data($values[$option_identificator . '_option_name'], $values[$option_identificator . '_checkbox_name'][1] . ', ' .  $values[$option_identificator . '_checkbox_name'][2] . ', ' .  $values[$option_identificator . '_checkbox_name'][4]);
}

if (
  isset($values[$option_identificator . '_check1']) && !isset($values[$option_identificator . '_check2']) && isset($values[$option_identificator . '_check3']) && !isset($values[$option_identificator . '_check4'])
) {
  $item->update_meta_data($values[$option_identificator . '_option_name'], $values[$option_identificator . '_checkbox_name'][1] . ', ' .  $values[$option_identificator . '_checkbox_name'][3]);
}

if (
  isset($values[$option_identificator . '_check1']) && !isset($values[$option_identificator . '_check2']) && !isset($values[$option_identificator . '_check3']) && isset($values[$option_identificator . '_check4'])
) {
  $item->update_meta_data($values[$option_identificator . '_option_name'], $values[$option_identificator . '_checkbox_name'][1] . ', ' .  $values[$option_identificator . '_checkbox_name'][4]);
}

if (
  !isset($values[$option_identificator . '_check1']) && isset($values[$option_identificator . '_check2']) && !isset($values[$option_identificator . '_check3']) && !isset($values[$option_identificator . '_check4'])
) {
  $item->update_meta_data($values[$option_identificator . '_option_name'], $values[$option_identificator . '_checkbox_name'][2]);
}

if (
  !isset($values[$option_identificator . '_check1']) && isset($values[$option_identificator . '_check2']) && isset($values[$option_identificator . '_check3']) && !isset($values[$option_identificator . '_check4'])
) {
  $item->update_meta_data($values[$option_identificator . '_option_name'], $values[$option_identificator . '_checkbox_name'][2] . ', ' . $values[$option_identificator . '_checkbox_name'][3]);
}

if (
  !isset($values[$option_identificator . '_check1']) && isset($values[$option_identificator . '_check2']) && isset($values[$option_identificator . '_check3']) && isset($values[$option_identificator . '_check4'])
) {
  $item->update_meta_data($values[$option_identificator . '_option_name'], $values[$option_identificator . '_checkbox_name'][2] . ', ' . $values[$option_identificator . '_checkbox_name'][3] . ', ' . $values[$option_identificator . '_checkbox_name'][4]);
}

if (
  !isset($values[$option_identificator . '_check1']) && isset($values[$option_identificator . '_check2']) && !isset($values[$option_identificator . '_check3']) && isset($values[$option_identificator . '_check4'])
) {
  $item->update_meta_data($values[$option_identificator . '_option_name'], $values[$option_identificator . '_checkbox_name'][2] . ', ' . $values[$option_identificator . '_checkbox_name'][4]);
}

if (
  !isset($values[$option_identificator . '_check1']) && !isset($values[$option_identificator . '_check2']) && isset($values[$option_identificator . '_check3']) && !isset($values[$option_identificator . '_check4'])
) {
  $item->update_meta_data($values[$option_identificator . '_option_name'], $values[$option_identificator . '_checkbox_name'][3]);
}

if (
  !isset($values[$option_identificator . '_check1']) && !isset($values[$option_identificator . '_check2']) && isset($values[$option_identificator . '_check3']) && isset($values[$option_identificator . '_check4'])
) {
  $item->update_meta_data($values[$option_identificator . '_option_name'], $values[$option_identificator . '_checkbox_name'][3] . ', ' . $values[$option_identificator . '_checkbox_name'][4]);
}

if (
  !isset($values[$option_identificator . '_check1']) && !isset($values[$option_identificator . '_check2']) && !isset($values[$option_identificator . '_check3']) && isset($values[$option_identificator . '_check4'])
) {
  $item->update_meta_data($values[$option_identificator . '_option_name'], $values[$option_identificator . '_checkbox_name'][4]);
}