<?php 


/**
 * Saving cart item date when adding to cart
 *
 * @link       https://github.com/digital-stg 
 * @since      1.0.0
 *
 * @package    Calculated_Custom_Fields
 * @subpackage Calculated_Custom_Fields/public
 */

   use Symfony\Component\ExpressionLanguage\ExpressionLanguage;


    $product = wc_get_product( $product_id );
    $price = $product->get_price();

    $optionName = $product->get_meta($option_identificator.'_option_name', true );

    $textExtraValue = $product->get_meta($option_identificator.'_text_input_extra_value');
    $optionValue = $product->get_meta($option_identificator.'_field_value');
    $optionValue_2 = $product->get_meta($option_identificator.'_field_value_2');
    $optionValue_3 = $product->get_meta($option_identificator.'_field_value_3');
    $optionValue_4 = $product->get_meta($option_identificator.'_field_value_4');
    $text_area_extra = $product->get_meta($option_identificator.'_text_area_extra_value');
    $number_extra_value = $product->get_meta($option_identificator.'_number_input_extra_value');
    $url_extra_value = $product->get_meta($option_identificator.'_url_extra_value');
    $emailValue = $product->get_meta($option_identificator.'_email_extra_value');
    $colorExtraValue = $product->get_meta($option_identificator.'_color_extra_value');
    $calculFormula = $product->get_meta($option_identificator.'_calcul_formula');
    $upload_charge = $product->get_meta($option_identificator.'_upload_value');
    $phone_charge = $product->get_meta($option_identificator.'_phone_extra_value');

    $cart_item_data[$option_identificator.'_option_name'] = $optionName;

    $selectOptName1 = $product->get_meta($option_identificator.'_sub_1_name');
    $selectOptName2 = $product->get_meta($option_identificator.'_sub_2_name');
    $selectOptName3 = $product->get_meta( $option_identificator.'_sub_3_name');
    $selectOptName4 = $product->get_meta( $option_identificator.'_sub_4_name');
    $selectOptName5 = $product->get_meta( $option_identificator.'_sub_5_name');
    $selectOptName6 = $product->get_meta( $option_identificator.'_sub_6_name');
    $radioName1 = $product->get_meta( $option_identificator.'_radio_name_1');
    $radioName2 = $product->get_meta( $option_identificator.'_radio_name_2');
    $radioName3 = $product->get_meta( $option_identificator.'_radio_name_3');
    $radioName4 = $product->get_meta( $option_identificator.'_radio_name_4');
    $imgName1 = $product->get_meta( $option_identificator.'_img_name_1');
    $imgName2 = $product->get_meta( $option_identificator.'_img_name_2');
    $imgName3 = $product->get_meta( $option_identificator.'_img_name_3');
    $imgName4 = $product->get_meta( $option_identificator.'_img_name_4');
    $btnName1 = $product->get_meta( $option_identificator.'_btnswap_name_1');
    $btnName2 = $product->get_meta( $option_identificator.'_btnswap_name_2');
    $btnName3 = $product->get_meta( $option_identificator.'_btnswap_name_3');
    $btnName4 = $product->get_meta( $option_identificator.'_btnswap_name_4');
    $btnName5 = $product->get_meta( $option_identificator.'_btnswap_name_5');
    $btnName6 = $product->get_meta( $option_identificator.'_btnswap_name_6');
    $checkName_1 = $product->get_meta($option_identificator.'_checkbox_name');
    $checkName_2 = $product->get_meta($option_identificator.'_checkbox_name_2');
    $checkName_3 = $product->get_meta($option_identificator.'_checkbox_name_3');
    $checkName_4 = $product->get_meta($option_identificator.'_checkbox_name_4');
    $calcul_label_2 = $product->get_meta($option_identificator.'_calcul_label_2');

    $selectedOptionValueCart = "";
    $radioButtonValue = "";
    $imgValue = "";
    $btnValue = "";
    $chooseColor = "";

if (isset($_POST[$option_identificator . '_select_input'])) {
    $selectedOptionValueCart = sanitize_text_field($_POST[$option_identificator . '_select_input']);
}
if (isset($_POST[$option_identificator . '_radio_value'])) {
    $radioButtonValue =  sanitize_text_field($_POST[$option_identificator . '_radio_value']);
}
if (isset($_POST[$option_identificator . '_img_radio'])) {
    $imgValue =  sanitize_text_field($_POST[$option_identificator . '_img_radio']);
}
if (isset($_POST[$option_identificator . '_btn_radio'])) {
    $btnValue =  sanitize_text_field($_POST[$option_identificator . '_btn_radio']);
}
if (isset($_POST[$option_identificator . '_color_custom_field'])) {
    $chooseColor = sanitize_hex_color($_POST[$option_identificator.'_color_custom_field']);
}


    /*text input*/
    if(isset($_POST[$option_identificator.'_text_input']) && !empty($_POST[$option_identificator.'_text_input'])) {
        $cart_item_data['old_price'] = floatval($price);
        if(isset($cart_item_data['new_price'])) {   
        $cart_item_data['new_price'] = $cart_item_data['new_price']  + floatval($textExtraValue); }
        else {$cart_item_data['new_price'] = floatval($price) + floatval($textExtraValue);}
        $cart_item_data[$option_identificator.'_check_text'] = sanitize_text_field($_POST[$option_identificator.'_text_input']);
    }

    /*number input*/
    if( isset($_POST[$option_identificator.'_number_custom_field']) && !$_POST[$option_identificator.'_number_custom_field'] == " ")  {
        $cart_item_data['old_price'] = floatval($price);
        if(isset($cart_item_data['new_price'])) { 
            $cart_item_data['new_price'] = $cart_item_data['new_price']  + floatval($number_extra_value);  }
        else {
        $cart_item_data['new_price'] = floatval($price) + floatval($number_extra_value);}
        $cart_item_data[$option_identificator.'_custom_number'] = sanitize_text_field($_POST[$option_identificator.'_number_custom_field']);
    } 

    /*textarea*/
    if( isset($_POST[$option_identificator.'_text_area_input']) && !($_POST[$option_identificator.'_text_area_input'] == " "))  {
        $cart_item_data['old_price'] = floatval($price);
        if(isset($cart_item_data['new_price'])) {  
            $cart_item_data['new_price'] = $cart_item_data['new_price']  + floatval($text_area_extra); } else {
            $cart_item_data['new_price'] = floatval($price) + floatval($text_area_extra);}
        $cart_item_data[$option_identificator.'_textarea_content'] = sanitize_textarea_field($_POST[$option_identificator.'_text_area_input']);
    } 

    /*email*/
    if( isset($_POST[$option_identificator.'_email_field']) && !($_POST[$option_identificator.'_email_field'] == " "))  {

        $cart_item_data['old_price'] = floatval($price);
        if(isset($cart_item_data['new_price'])) {  
        $cart_item_data['new_price'] = $cart_item_data['new_price']  + floatval($emailValue); }
        else {  $cart_item_data['new_price'] = floatval($price) + floatval($emailValue);}
        $cart_item_data[$option_identificator.'_email_content'] = sanitize_email($_POST[$option_identificator.'_email_field']);
    } 

    /*url*/
    if( isset($_POST[$option_identificator.'_url_field']) && !($_POST[$option_identificator.'_url_field'] == " ")) {
        $cart_item_data['old_price'] = floatval($price);
        if(isset($cart_item_data['new_price'])) {
        $cart_item_data['new_price'] = $cart_item_data['new_price']  + floatval($url_extra_value); }
        else { $cart_item_data['new_price'] = floatval($price) + floatval($url_extra_value);}
        $cart_item_data[$option_identificator.'_choose_url'] = sanitize_url($_POST[$option_identificator.'_url_field']);
    } 

    /*phone*/
    if(isset($_POST[$option_identificator.'_phone_post']) ) {
        $cart_item_data['old_price'] = floatval($price);
        if(isset($cart_item_data['new_price'])) {   
        $cart_item_data['new_price'] = $cart_item_data['new_price']  + floatval($phone_charge); }
        else {$cart_item_data['new_price'] = floatval($price) + floatval($phone_charge);}
        $cart_item_data[$option_identificator.'_phone_number'] = sanitize_text_field($_POST[$option_identificator.'_phone_input']);
    } 

    /*color*/    
    if( isset($_POST[$option_identificator.'_color_custom_field']) && !($_POST[$option_identificator.'_color_custom_field'] == "#a4a4a4")) {
        $cart_item_data['old_price'] = floatval($price);
        if(isset($cart_item_data['new_price'])) {
            $cart_item_data['new_price'] = $cart_item_data['new_price'] + floatval($colorExtraValue);} 
        else {$cart_item_data['new_price'] = floatval($price) + floatval($colorExtraValue); }
        $cart_item_data[$option_identificator.'_choose_color'] = sanitize_hex_color($_POST[$option_identificator.'_color_custom_field']);
    }

    /*select*/
       if ( isset($_POST[$option_identificator.'_select_input']) && $_POST[$option_identificator . '_select_input'] >= 0) {
        $cart_item_data['old_price'] = floatval($price);
        if (isset($cart_item_data['new_price'])) {
            $cart_item_data['new_price'] =  $cart_item_data['new_price']  + floatval($selectedOptionValueCart);
        } else {
            $cart_item_data['new_price'] = floatval($price) + floatval($selectedOptionValueCart);
        }
        $cart_item_data[$option_identificator . '_selected_option_price'] = floatval($selectedOptionValueCart);
        $cart_item_data[$option_identificator . '_selected_index'] = absint($_POST[$option_identificator . '_selector_index']);

        switch ($cart_item_data[$option_identificator . '_selected_index']) {

            case 1:
                $cart_item_data[$option_identificator . 'select_sub_option_name'] = $selectOptName1;
                break;

            case 2:
                $cart_item_data[$option_identificator . 'select_sub_option_name'] = $selectOptName2;
                break;

            case 3:
                $cart_item_data[$option_identificator . 'select_sub_option_name'] = $selectOptName3;
                break;

            case 4:
                $cart_item_data[$option_identificator . 'select_sub_option_name'] = $selectOptName4;
                break;

            case 5:
                $cart_item_data[$option_identificator . 'select_sub_option_name'] = $selectOptName5;
                break;

            case 6:
                $cart_item_data[$option_identificator . 'select_sub_option_name'] = $selectOptName6;
                break;
        }
    }

        /* radio */
        if ( isset($_POST[$option_identificator.'_radio_value']) && $_POST[$option_identificator . '_radio_value'] != "") {
            $cart_item_data['old_price'] = floatval($price);
            if (isset($cart_item_data['new_price'])) {
                $cart_item_data['new_price'] = $cart_item_data['new_price']  + floatval($radioButtonValue);
            } else {
                $cart_item_data['new_price'] = floatval($price) + floatval($radioButtonValue);
            }
            $cart_item_data[$option_identificator . '_radio_price'] =  floatval($radioButtonValue);
            $cart_item_data[$option_identificator . '_radio_index'] = absint($_POST[$option_identificator . '_radio_indexer']);

            switch ($cart_item_data[$option_identificator . '_radio_index']) {
                case 0:
                    $cart_item_data[$option_identificator . 'radio_sub_option_name'] = $radioName1;
                    break;
                case 1:
                    $cart_item_data[$option_identificator . 'radio_sub_option_name'] = $radioName2;
                    break;
                case 2:
                    $cart_item_data[$option_identificator . 'radio_sub_option_name'] = $radioName3;
                    break;
                case 3:
                    $cart_item_data[$option_identificator . 'radio_sub_option_name'] = $radioName4;
                    break;
            }
        }

        /*image swap*/
        if (isset($_POST[$option_identificator.'_img_radio']) &&  $_POST[$option_identificator . '_img_radio'] != "") {
            $cart_item_data['old_price'] = floatval($price);
            if (isset($cart_item_data['new_price'])) {
                $cart_item_data['new_price'] = $cart_item_data['new_price'] + floatval($imgValue);
            } else {
                $cart_item_data['new_price'] = floatval($price) + floatval($imgValue);
            }
            $cart_item_data[$option_identificator . '_img_val'] =  floatval($imgValue);
            $cart_item_data[$option_identificator . '_img_index'] = absint($_POST[$option_identificator . '_img_indexer']);

            switch ($cart_item_data[$option_identificator . '_img_index']) {
                case 0:
                    $cart_item_data[$option_identificator . '_img_name'] = $imgName1;
                    break;
                case 1:
                    $cart_item_data[$option_identificator . '_img_name'] = $imgName2;
                    break;
                case 2:
                    $cart_item_data[$option_identificator . '_img_name'] = $imgName3;
                    break;
                case 3:
                    $cart_item_data[$option_identificator . '_img_name'] = $imgName4;
                    break;
            }
        }


        /*buttons*/
        if (isset($_POST[$option_identificator.'_btn_radio']) &&  $_POST[$option_identificator . '_btn_radio'] != "") {
            $cart_item_data['old_price'] = floatval($price);
            if (isset($cart_item_data['new_price'])) {
                $cart_item_data['new_price'] = $cart_item_data['new_price'] + floatval($btnValue);
            } else {
                $cart_item_data['new_price'] = floatval($price) + floatval($btnValue);
            }
            $cart_item_data[$option_identificator . '_btn_val'] =  floatval($btnValue);
            $cart_item_data[$option_identificator . '_btn_index'] = absint($_POST[$option_identificator . '_btn_indexer']);

            switch ($cart_item_data[$option_identificator . '_btn_index']) {
                case 0:
                    $cart_item_data[$option_identificator . '_btn_name'] = $btnName1;
                    break;
                case 1:
                    $cart_item_data[$option_identificator . '_btn_name'] = $btnName2;
                    break;
                case 2:
                    $cart_item_data[$option_identificator . '_btn_name'] = $btnName3;
                    break;
                case 3:
                    $cart_item_data[$option_identificator . '_btn_name'] = $btnName4;
                    break;
                case 4:
                    $cart_item_data[$option_identificator . '_btn_name'] = $btnName5;
                    break;
                case 5:
                    $cart_item_data[$option_identificator . '_btn_name'] = $btnName6;
                    break;
            }
        }



        /*upload*/
        if (!empty($_FILES[$option_identificator . '_upload_input']['name'])) {

            $cart_item_data['old_price'] = floatval($price);
            if (isset($cart_item_data['new_price'])) {
                $cart_item_data['new_price'] = $cart_item_data['new_price']  + floatval($upload_charge);
            } else {
                $cart_item_data['new_price'] = floatval($price) + floatval($upload_charge);
            }

            $cart_item_data[$option_identificator . '_file_name'] = sanitize_file_name($_FILES[$option_identificator . '_upload_input']['name']);
            $file_type = $_FILES[$option_identificator . '_upload_input']['type'];

            /* used for display image in cart -- if is image */
            if (str_contains($file_type, 'image')) {
                $cart_item_data[$option_identificator . '_file_is_image'] = true;
            } else {
                $cart_item_data[$option_identificator . '_file_is_image'] = false;
            };
        }





        // checkbox 1
        if (isset($_POST[$option_identificator . '_checkbox'])) {

            $cart_item_data['old_price'] = floatval($price);
            $cart_item_data[$option_identificator . '_check1'] = absint($_POST[$option_identificator . '_checkbox']);

            if (isset($cart_item_data['new_price'])) {
                $cart_item_data['new_price'] = $cart_item_data['new_price'] + floatval($optionValue);
            } else {
                $cart_item_data['new_price'] = floatval($price) + floatval($optionValue);
            }

            $cart_item_data[$option_identificator . '_checkbox_name'][1] =  $checkName_1;

            if (isset($_POST[$option_identificator . '_checkbox_2'])) {

                $cart_item_data[$option_identificator . '_check2'] = absint($_POST[$option_identificator . '_checkbox_2']);
                $cart_item_data['old_price'] = floatval($price);

                if (isset($cart_item_data['new_price'])) {
                    $cart_item_data['new_price'] = $cart_item_data['new_price'] + floatval($optionValue_2);
                } else {
                    $cart_item_data['new_price'] = floatval($price) + floatval($optionValue) + floatval($optionValue_2);
                }

                $cart_item_data[$option_identificator . '_checkbox_name'][2] =  $checkName_2;
            }

            if (isset($_POST[$option_identificator . '_checkbox_3'])) {

                $cart_item_data[$option_identificator . '_check3'] = absint($_POST[$option_identificator . '_checkbox_3']);
                $cart_item_data['old_price'] = floatval($price);

                if (isset($cart_item_data['new_price'])) {
                    $cart_item_data['new_price'] = $cart_item_data['new_price'] + floatval($optionValue_3);
                } else {
                    $cart_item_data['new_price'] = floatval($price) + floatval($optionValue) + floatval($optionValue_2) + floatval($optionValue_3);
                }

                $cart_item_data[$option_identificator . '_checkbox_name'][3] =  $checkName_3;
            }

            if (isset($_POST[$option_identificator . '_checkbox_4'])) {

                $cart_item_data[$option_identificator . '_check4'] = absint($_POST[$option_identificator . '_checkbox_4']);
                $cart_item_data['old_price'] = floatval($price);

                if (isset($cart_item_data['new_price'])) {
                    $cart_item_data['new_price'] = $cart_item_data['new_price'] + floatval($optionValue_4);
                } else {
                    $cart_item_data['new_price'] = floatval($price) + floatval($optionValue) + floatval($optionValue_2) + floatval($optionValue_3) + floatval($optionValue_4);
                }

                $cart_item_data[$option_identificator . '_checkbox_name'][4] =  $checkName_4;
            }
        }


        // checkbox 2
        else if (isset($_POST[$option_identificator . '_checkbox_2'])) {

            $cart_item_data[$option_identificator . '_check2'] = absint($_POST[$option_identificator . '_checkbox_2']);
            $cart_item_data['old_price'] = floatval($price);

            if (isset($cart_item_data['new_price'])) {
                $cart_item_data['new_price'] = $cart_item_data['new_price'] + floatval($optionValue_2);
            } else {
                $cart_item_data['new_price'] = floatval($price) + floatval($optionValue_2);
            }

            $cart_item_data[$option_identificator . '_checkbox_name'][2] =  $checkName_2;

            if (isset($_POST[$option_identificator . '_checkbox_3'])) {

                $cart_item_data[$option_identificator . '_check3'] = absint($_POST[$option_identificator . '_checkbox_3']);
                $cart_item_data['old_price'] = floatval($price);

                if (isset($cart_item_data['new_price'])) {
                    $cart_item_data['new_price'] = $cart_item_data['new_price'] + floatval($optionValue_3);
                } else {
                    $cart_item_data['new_price'] = floatval($price) + floatval($optionValue_2) + floatval($optionValue_3);
                }

                $cart_item_data[$option_identificator . '_checkbox_name'][3] =  $checkName_3;
            }

            if (isset($_POST[$option_identificator . '_checkbox_4'])) {

                $cart_item_data[$option_identificator . '_check4'] = absint($_POST[$option_identificator . '_checkbox_4']);
                $cart_item_data['old_price'] = floatval($price);

                if (isset($cart_item_data['new_price'])) {
                    $cart_item_data['new_price'] = $cart_item_data['new_price'] + floatval($optionValue_4);
                } else {
                    $cart_item_data['new_price'] = floatval($price) + floatval($optionValue_4) + floatval($optionValue_2) + floatval($optionValue_3);
                }

                $cart_item_data[$option_identificator . '_checkbox_name'][4] =  $checkName_4;
            }
        }


        // checkbox 3
        else if (isset($_POST[$option_identificator . '_checkbox_3'])) {

            $cart_item_data[$option_identificator . '_check3'] = absint($_POST[$option_identificator . '_checkbox_3']);
            $cart_item_data['old_price'] = floatval($price);

            if (isset($cart_item_data['new_price'])) {
                $cart_item_data['new_price'] = $cart_item_data['new_price'] + floatval($optionValue_3);
            } else {
                $cart_item_data['new_price'] = floatval($price) + floatval($optionValue_3);
            }

            $cart_item_data[$option_identificator . '_checkbox_name'][3] =  $checkName_3;

            if (isset($_POST[$option_identificator . '_checkbox_4'])) {
                $cart_item_data[$option_identificator . '_check4'] = absint($_POST[$option_identificator . '_checkbox_4']);
                $cart_item_data['old_price'] = floatval($price);

                if (isset($cart_item_data['new_price'])) {
                    $cart_item_data['new_price'] = $cart_item_data['new_price'] + floatval($optionValue_4);
                } else {
                    $cart_item_data['new_price'] = floatval($price) + floatval($optionValue_4) + floatval($optionValue_3);
                }

                $cart_item_data[$option_identificator . '_checkbox_name'][4] =  $checkName_4;
            }
        }

        //checkbox 4
        else if (isset($_POST[$option_identificator . '_checkbox_4'])) {
            $cart_item_data[$option_identificator . '_check4'] = absint($_POST[$option_identificator . '_checkbox_4']);
            $cart_item_data['old_price'] = floatval($price);

            if (isset($cart_item_data['new_price'])) {
                $cart_item_data['new_price'] = $cart_item_data['new_price'] + floatval($optionValue_4);
            } else {
                $cart_item_data['new_price'] = floatval($price) + floatval($optionValue_4);
            }

            $cart_item_data[$option_identificator . '_checkbox_name'][4] =  $checkName_4;
        }



        /*calcul formula*/

        if(isset($_POST[$option_identificator.'_calcul_number_custom_field']) && !($_POST[$option_identificator.'_calcul_number_custom_field'] == " ")) {


            $cart_item_data['old_price'] = floatval($price);
    
            $user_value = sanitize_text_field($_POST[$option_identificator.'_calcul_number_custom_field']);
            $user_value_2 = "";
            if(isset($_POST[$option_identificator.'_calcul_number_custom_field_2'])) {
                $user_value_2 = sanitize_text_field($_POST[$option_identificator.'_calcul_number_custom_field_2']);
            }
           
            $cart_item_data[$option_identificator.'_custom_calcul_value'] = $user_value;
            $cart_item_data[$option_identificator.'_custom_calcul_value_2'] = $user_value_2;
    
            $cart_item_data[$option_identificator.'_label_input_2'] = $calcul_label_2;
        
    
            $result_operation  = str_ireplace('$user_value', $user_value, $calculFormula);
    
            if($user_value_2) {
            $str = ['$user_value','$second_user_value'];
            $rplc =[$user_value, $user_value_2];
            $result_operation  = str_ireplace($str, $rplc, $calculFormula);
            }
    
            /* Use of Symfony ExpressionLanguage because eval() function disallowed */
            
            $expressionLanguage = new ExpressionLanguage();
            $result = $expressionLanguage->evaluate($result_operation); 
           
            $cart_item_data[$option_identificator.'_result'] = floatval($result);
            if (isset($cart_item_data['new_price'])) {
                $cart_item_data['new_price'] = $cart_item_data['new_price'] + floatval($result);
            } else {
                $cart_item_data['new_price'] = floatval($price) + floatval($result);
            }
    
        } 

    






