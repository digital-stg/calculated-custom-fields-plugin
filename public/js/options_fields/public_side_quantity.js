(function ($) {
    'use strict';

    /**
     * 
     *
     * $(function() {
     *
     * });
     *
     * When the window is loaded:
     *
     * $( window ).load(function() {
     *
     * });
     *
     * or others
     */


    $(function () {


        var price = php_options_values.price;
        var currency = php_options_values.currency;
        var currency_position = php_options_values.currency_position;
        var quantity_related = php_options_values.quantity_related;
        var free_option_text = php_options_values.free_option_text;
        var price_input_id = php_options_values.price_input_id;
        var price_input = $(price_input_id);
        var option_identificator = ["op1", "op2"];
        var array = {};


        $.each(option_identificator, function (index, id_value) {

            //get PHP values from inline script

            array[id_value + "_text_input_extra_value"] = php_options_values[id_value + "_text_input_extra_value"];

            array[id_value + "_text_area_extra_value"] = php_options_values[id_value + "_text_area_extra_value"];
            array[id_value + "_number_input_extra_value"] = php_options_values[id_value + "_number_input_extra_value"];
            array[id_value + "_url_extra_value"] = php_options_values[id_value + "_url_extra_value"];
            array[id_value + "_checkbox_value"] = php_options_values[id_value + "_checkbox_value"];
            array[id_value + "_checkbox_value_2"] = php_options_values[id_value + "_checkbox_value_2"];
            array[id_value + "_checkbox_value_3"] = php_options_values[id_value + "_checkbox_value_3"];
            array[id_value + "_checkbox_value_4"] = php_options_values[id_value + "_checkbox_value_4"];
            array[id_value + "_select_value"] = php_options_values[id_value + "_select_value"];
            array[id_value + "_select_value_2"] = php_options_values[id_value + "_select_value_2"];
            array[id_value + "_select_value_3"] = php_options_values[id_value + "_select_value_3"];
            array[id_value + "_select_value_4"] = php_options_values[id_value + "_select_value_4"];
            array[id_value + "_select_value_5"] = php_options_values[id_value + "_select_value_5"];
            array[id_value + "_select_value_6"] = php_options_values[id_value + "_select_value_6"];
            array[id_value + "_email_extra_value"] = php_options_values[id_value + "_email_extra_value"];
            array[id_value + "_color_extra_value"] = php_options_values[id_value + "_color_extra_value"];
            array[id_value + "_calcul_formula"] = php_options_values[id_value + "_calcul_formula"];
            array[id_value + "_upload_value"] = php_options_values[id_value + "_upload_value"];
            array[id_value + "_phone_extra_value"] = php_options_values[id_value + "_phone_extra_value"];
            array[id_value + "_active_option"] = php_options_values[id_value + "_active_option"];

            /* Disable default quantity input if option has been set */
            if (array[id_value + "_active_option"]) {
                $('.qty').css('display', 'none');
                $("#get_woo_quantity_input").change(function () {
                    $('[name=quantity]').val($("#get_woo_quantity_input").val());
                });
            };
        });

        // When quantity is changed

        $('[name=quantity]').on('input', function () {

            //get option_1 
            var option_1 = parseFloat(localStorage.getItem('Option_1'));

            //get option_2
            var option_2 = parseFloat(localStorage.getItem('Option_2'));


            if (!(this.value < 1)) {

                if (!quantity_related) {

                    var product_total = parseFloat((parseFloat(price) * this.value) + option_1 + option_2).toFixed(2);

                    if (currency_position == "left") {
                        var new_price = price_input.html(currency + product_total);
                    }
                    else if (currency_position == "left_space") {
                        var new_price = price_input.html(currency + ' ' + product_total);
                    }
                    else if (currency_position == "right") {
                        var new_price = price_input.html(product_total + currency);
                    }
                    else if (currency_position == "right_space") {
                        var new_price = price_input.html(product_total + ' ' + currency);

                    }
                }

                else {

                    var product_total = parseFloat((parseFloat(price) + option_1 + option_2) * this.value).toFixed(2);

                    if (currency_position == "left") {
                        var new_price = price_input.html(currency + product_total);
                    }
                    else if (currency_position == "left_space") {
                        var new_price = price_input.html(currency + ' ' + product_total);
                    }
                    else if (currency_position == "right") {
                        var new_price = price_input.html(product_total + currency);
                    }
                    else if (currency_position == "right_space") {
                        var new_price = price_input.html(product_total + ' ' + currency);

                    } 

                    $.each(option_identificator, function (i, val) {

                        array[val + 'textInput'] = $('#' + val + '_text_input').val();
                        array[val + 'text_area'] = $('#' + val + '_text_area_input').val();
                        array[val + 'number_input'] = $('#' + val + '_number_custom_field').val();
                        array[val + 'email_input'] = $('#' + val + '_email_field').val();
                        array[val + 'colorInput'] = $('#' + val + '_color_custom_field').val();
                        array[val + 'calculInput'] = $('#' + val + '_calcul_number_custom_field').val();
                        array[val + 'url_Input'] = $('#' + val + '_url_field').val();
                        array[val + 'upload_input'] = $('#' + val + '_upload_input').val();
                        array[val + 'phone_input'] = $('#' + val + '_phone_input').val();
                        var valueSelecter = $('[name=' + val + '_select_input]').val();
                        var chooseButtonValue = $('input[name="' + val + '_radio_value"]:checked').val();
                        var imgChooseValue = $('input[name="' + val + '_img_radio"]:checked').val();
                        var BtnChooseValue = $('input[name="' + val + '_btn_radio"]:checked').val();


                      //WHEN Upload inputs ARE filled

                      if (array[val +'upload_input']) {
                       
                        var quantity = $('[name=quantity]').val();
                        var quantityNumber = parseFloat(quantity).toFixed(2);
                        array[val+'_option_charge'] = parseFloat(array[val+'_upload_value']);
                        var $output_id = $('#'+ val +'_output_upload_option');
                        var option_cost = parseFloat(array[val+'_option_charge'] * quantityNumber).toFixed(2);

                        output_option($output_id, option_cost, currency);

                    }


                    //WHEN NUMBER INPUTS ARE filled

                    if (array[val +'number_input']) {
                      
                        array[val +'number_input'] = $('#'+val+'_number_custom_field').val();
                        var quantity = $('[name=quantity]').val();
                        var quantityNumber = parseFloat(quantity).toFixed(2);
                        array[val+'_option_charge'] = parseFloat(array[val+'_number_input_extra_value']);
                        var cost = price + array[val+'_option_charge'];
                        var option_cost = parseFloat(array[val+'_option_charge'] * quantityNumber).toFixed(2);

                        $('#' +val+'_outputNumberValue').css('display', 'block');

                        var $output_id = $('#' +val+'_outputNumberValue');

                        output_option($output_id, option_cost, currency);

                        //"Free Option" if option=0
                        if (array[val+'_option_charge'] == "0") {

                            $('#' +val +'_outputNumberValue').html(free_option_text);
                        }

                    }




                    //when text area is fill
                    if (array[val + 'text_area']) {

                        var quantity = $('[name=quantity]').val();
                        var quantityNumber = parseFloat(quantity).toFixed(2);
                        array[val + '_option_charge'] = parseFloat(array[val + '_text_area_extra_value']);
                        var cost = parseFloat(price) + array[val + '_option_charge'];
                        var option_cost = parseFloat(array[val + '_option_charge'] * quantityNumber).toFixed(2);
                        var $output_id = $('#' + val + '_output_text_area_val');

                        output_option($output_id, option_cost, currency);

                        //"Free Option" if option=0
                        if (array[val + '_option_charge'] == "0") {

                            $('#' + val + '_output_text_area_val').html(free_option_text);
                        }

                    }


                    //if text input is fill 

                    if (array[val + 'textInput']) {

                        var quantity = $('[name=quantity]').val();
                        var quantityNumber = parseFloat(quantity).toFixed(2);
                        array[val + '_option_charge'] = parseFloat(array[val + '_text_input_extra_value']);
                        var cost = parseFloat(price) + array[val + '_option_charge'];
                        var option_cost = parseFloat(array[val + '_option_charge'] * quantityNumber).toFixed(2);

                        var $output_id = $('#' + val + '_output_text_val');

                        output_option($output_id, option_cost, currency);

                        //"Free Option" if option=0
                        if (array[val + '_option_charge'] == "0") {
                            $('#' + val + '_output_text_val').html(free_option_text);
                        }

                    }


                    //if EMAIL input is fill 

                    if (array[val + 'email_input']) {

                        var quantity = $('[name=quantity]').val();
                        var quantityNumber = parseFloat(quantity).toFixed(2);
                        array[val + '_option_charge'] = parseFloat(array[val + '_email_extra_value']);
                        var cost = parseFloat(price) + array[val + '_option_charge'];
                        var option_cost = parseFloat(array[val + '_option_charge'] * quantityNumber).toFixed(2);

                        var $output_id = $('#' + val + '_outputEmailValue');

                        output_option($output_id, option_cost, currency);

                        //"Free Option" if option=0
                        if (array[val + '_option_charge'] == "0") {

                            $('#' + val + '_outputEmailValue').html(free_option_text);
                        }

                    }

                        //URL is fill

                        if (array[val + 'url_Input']) {

                            var quantity = $('[name=quantity]').val();
                            var quantityNumber = parseFloat(quantity).toFixed(2);
                            array[val + '_option_charge'] = parseFloat(array[val + '_url_extra_value']);
                            var cost = parseFloat(price) + array[val + '_option_charge'];
                            var option_cost = parseFloat(array[val + '_option_charge'] * quantityNumber).toFixed(2);

                            var $output_id = $('#' + val + '_outputUrlValue');

                            output_option($output_id, option_cost, currency);

                            //"Free Option" if option=0
                            if (array[val + '_option_charge'] == "0") {
                                $('#' + val + '_outputUrlValue').html(free_option_text);
                            }

                        }



                        //if phone input is fill 

                        if (array[val + 'phone_input'] && $('#' + val + '_output_phone_value').html()) {

                            var quantity = $('[name=quantity]').val();
                            var quantityNumber = parseFloat(quantity).toFixed(2);
                            array[val + '_option_charge'] = parseFloat(array[val + '_phone_extra_value']);
                            var cost = parseFloat(price) + array[val + '_option_charge'];
                            var option_cost = parseFloat(array[val + '_option_charge'] * quantityNumber).toFixed(2);

                            var $output_id = $('#' + val + '_output_phone_value');

                            output_option($output_id, option_cost, currency);

                            //"Free Option" if option=0
                            if (array[val + '_option_charge'] == "0") {
                                $('#' + val + '_output_phone_value').html(free_option_text);
                            }

                        }


                        //if checkbox 1 checked 

                        var checkbox = $('#' + val + '_checkbox'), // Selected or current checkbox
                            value = checkbox.val(); // Value of checkbox
                        var check2_val = localStorage.getItem(val + '_check2');
                        var check2_val_number = parseFloat(check2_val);
                        var check3_val = localStorage.getItem(val + '_check3');
                        var check3_val_number = parseFloat(check3_val);
                        var check4_val = localStorage.getItem(val + '_check4');
                        var check4_val_number = parseFloat(check4_val);

                        if (checkbox.is(':checked')) {

                            var quantity = $('[name=quantity]').val();
                            var quantityNumber = parseFloat(quantity).toFixed(2);
                            array[val + '_option_charge'] = parseFloat(array[val + '_checkbox_value']);
                            var cost = parseFloat(price) + array[val + '_option_charge'] + check2_val_number + check3_val_number + check4_val_number;
                            var total_checkbox = array[val + '_option_charge'] + check2_val_number + check3_val_number + check4_val_number;
                            var option_cost = parseFloat(total_checkbox * quantityNumber).toFixed(2);

                            var $output_id = $('.' + val + '_cp_output');

                            output_option($output_id, option_cost, currency);

                            if (array[val + '_option_charge'] == 0) { $('.' + val + '_output_check_val').html(free_option_text) };

                        }


                        //if checkbox 2 checked 

                        var checkbox2 = $('#' + val + '_checkbox_2'), // Selected or current checkbox
                            value = checkbox2.val(); // Value of checkbox

                        var check1_val = localStorage.getItem(val + '_check1');
                        var check1_val_number = parseFloat(check1_val);
                        var check3_val = localStorage.getItem(val + '_check3');
                        var check3_val_number = parseFloat(check3_val);
                        var check4_val = localStorage.getItem(val + '_check4');
                        var check4_val_number = parseFloat(check4_val);

                        if (checkbox2.is(':checked')) {

                            var quantity = $('[name=quantity]').val();
                            var quantityNumber = parseFloat(quantity).toFixed(2);

                            array[val + '_option_charge'] = parseFloat(array[val + '_checkbox_value_2']);

                            var cost = parseFloat(price) + array[val + '_option_charge'] + check1_val_number + check3_val_number + check4_val_number;


                            var total_checkbox = array[val + '_option_charge'] + check1_val_number + check3_val_number + check4_val_number;
                            var option_cost = parseFloat(total_checkbox * quantityNumber).toFixed(2);

                            var $output_id = $('.' + val + '_cp_output');

                            output_option($output_id, option_cost, currency);

                            if (array[val + '_option_charge'] == 0) { $('.' + val + '_output_check_val').html(free_option_text) };
                        }


                        //if checkbox 3 checked 

                        var checkbox3 = $('#' + val + '_checkbox_3'), // Selected or current checkbox
                            value = checkbox3.val(); // Value of checkbox

                        var check1_val = localStorage.getItem(val + '_check1');
                        var check1_val_number = parseFloat(check1_val);
                        var check2_val = localStorage.getItem(val + '_check2');
                        var check2_val_number = parseFloat(check2_val);
                        var check4_val = localStorage.getItem(val + '_check4');
                        var check4_val_number = parseFloat(check4_val);

                        if (checkbox3.is(':checked')) {

                            var quantity = $('[name=quantity]').val();
                            var quantityNumber = parseFloat(quantity).toFixed(2);

                            array[val + '_option_charge'] = parseFloat(array[val + '_checkbox_value_3']);

                            var cost = parseFloat(price) + array[val + '_option_charge'] + check1_val_number + check2_val_number + check4_val_number;
                            var price_front = parseFloat(cost * quantityNumber).toFixed(2);
                            var total_checkbox = array[val + '_option_charge'] + check1_val_number + check2_val_number + check4_val_number;
                            var option_cost = parseFloat(total_checkbox * quantityNumber).toFixed(2);

                            var $output_id = $('.' + val + '_cp_output');

                            output_option($output_id, option_cost, currency);

                            if (array[val + '_option_charge'] == 0) { $('.' + val + '_output_check_val').html(free_option_text) };
                        }



                        //if checkbox 4 checked 

                        var checkbox4 = $('#' + val + '_checkbox_4'), // Selected or current checkbox
                            value = checkbox4.val(); // Value of checkbox

                        var check1_val = localStorage.getItem(val + '_check1');
                        var check1_val_number = parseFloat(check1_val);
                        var check2_val = localStorage.getItem(val + '_check2');
                        var check2_val_number = parseFloat(check2_val);
                        var check3_val = localStorage.getItem(val + '_check3');
                        var check3_val_number = parseFloat(check3_val);

                        if (checkbox4.is(':checked')) {

                            var quantity = $('[name=quantity]').val();
                            var quantityNumber = parseFloat(quantity).toFixed(2);
                            array[val + '_option_charge'] = parseFloat(array[val + '_checkbox_value_4']);
                            var cost = parseFloat(price) + array[val + '_option_charge'] + check1_val_number + check2_val_number + check3_val_number;
                            var price_front = parseFloat(cost * quantityNumber).toFixed(2);
                            var total_checkbox = array[val + '_option_charge'] + check1_val_number + check2_val_number + check3_val_number;
                            var option_cost = parseFloat(total_checkbox * quantityNumber).toFixed(2);

                            var $output_id = $('.' + val + '_cp_output');

                            output_option($output_id, option_cost, currency);

                            if (array[val + '_option_charge'] == 0) { $('.' + val + '_output_check_val').html(free_option_text) };
                        }



                        if (valueSelecter) {

                            var quantity = $('[name=quantity]').val();
                            var quantityNumber = parseFloat(quantity).toFixed(2);

                            var selectedOption = parseFloat($('#' + val + '_select_input').val()).toFixed(2);
                            var selected_index = $('#' + val + '_selector_index').val();

                            //output value

                            if (selectedOption == "0.00") {
                                $('#' + val + '_output_select_val').html('Free option');
                            }

                            var opnumber1 = parseFloat(array[val + '_select_value']);
                            var opnumber2 = parseFloat(array[val + '_select_value_2']);
                            var opnumber3 = parseFloat(array[val + '_select_value_3']);
                            var opnumber4 = parseFloat(array[val + '_select_value_4']);
                            var opnumber5 = parseFloat(array[val + '_select_value_5']);
                            var opnumber6 = parseFloat(array[val + '_select_value_6']);

                            if (selected_index == "1") {

                                var cost = parseFloat(price) + opnumber1;
                                var option_cost = parseFloat(opnumber1 * quantityNumber).toFixed(2);

                                var $output_id = $('#' + val + '_output_select_val');

                                output_option($output_id, option_cost, currency);

                                if (option_cost == "0.00") {
                                    $('#' + val + '_output_select_val').html(free_option_text);

                                }

                            }


                            else if (selected_index == "2") {

                                var cost = parseFloat(price) + opnumber2;
                                var option_cost = parseFloat(opnumber2 * quantityNumber).toFixed(2);

                                var $output_id = $('#' + val + '_output_select_val');

                                output_option($output_id, option_cost, currency);

                                if (option_cost == "0.00") {
                                    $('#' + val + '_output_select_val').html(free_option_text);

                                }

                            }


                            else if (selected_index == "3") {



                                var cost = parseFloat(price) + opnumber3;
                                var option_cost = parseFloat(opnumber3 * quantityNumber).toFixed(2);

                                var $output_id = $('#' + val + '_output_select_val');

                                output_option($output_id, option_cost, currency);

                                if (option_cost == "0.00") {
                                    $('#' + val + '_output_select_val').html(free_option_text);

                                }

                            }

                            else if (selected_index == "4") {

                                var cost = parseFloat(price) + opnumber4;
                                var option_cost = parseFloat(opnumber4 * quantityNumber).toFixed(2);

                                var $output_id = $('#' + val + '_output_select_val');

                                output_option($output_id, option_cost, currency);

                                if (option_cost == "0.00") {
                                    $('#' + val + '_output_select_val').html(free_option_text);

                                }



                            }

                            else if (selected_index == "5") {

                                var cost = parseFloat(price) + opnumber5;
                                var option_cost = parseFloat(opnumber5 * quantityNumber).toFixed(2);

                                var $output_id = $('#' + val + '_output_select_val');

                                output_option($output_id, option_cost, currency);

                                if (option_cost == "0.00") {
                                    $('#' + val + '_output_select_val').html(free_option_text);

                                }

                            }

                            else if (selected_index == "6") {

                                var cost = parseFloat(price) + opnumber6;
                                var option_cost = parseFloat(opnumber6 * quantityNumber).toFixed(2);

                                var $output_id = $('#' + val + '_output_select_val');

                                output_option($output_id, option_cost, currency);

                                if (option_cost == "0.00") {
                                    $('#' + val + '_output_select_val').html(free_option_text);

                                }

                            }



                        }

                        //If radio buttons checked
                        if (chooseButtonValue) {

                            var quantity = $('[name=quantity]').val();
                            var quantityNumber = parseFloat(quantity).toFixed(2);
                            array[val + '_option_charge'] = parseFloat(chooseButtonValue);
                            var cost = parseFloat(price) + array[val + '_option_charge'];
                            var option_cost = parseFloat(array[val + '_option_charge'] * quantityNumber).toFixed(2);

                            var $output_id = $('#' + val + '_outputRadioValue');

                            output_option($output_id, option_cost, currency);

                        }

                        //If image clicked
                        if (imgChooseValue) {

                            var quantity = $('[name=quantity]').val();
                            var quantityNumber = parseFloat(quantity).toFixed(2);
                            array[val + '_option_charge'] = parseFloat(imgChooseValue);
                            var cost = parseFloat(price) + array[val + '_option_charge'];
                            var option_cost = parseFloat(array[val + '_option_charge'] * quantityNumber).toFixed(2);
                            var $output_id = $('#' + val + '_outputImgValue');

                            output_option($output_id, option_cost, currency);

                        }


                        //If btn swap clicked
                        if (BtnChooseValue) {

                            var quantity = $('[name=quantity]').val();
                            var quantityNumber = parseFloat(quantity).toFixed(2);
                            array[val + '_option_charge'] = parseFloat(BtnChooseValue);
                            var cost = parseFloat(price) + array[val + '_option_charge'];
                            var option_cost = parseFloat(array[val + '_option_charge'] * quantityNumber).toFixed(2);
                            var $output_id = $('#' + val + '_outputBtnValue');

                            output_option($output_id, option_cost, currency);

                        }

                        // COLOR INPUT

                        if (array[val + 'colorInput'] != "#a4a4a4" && array[val + 'colorInput']) {

                            var quantity = $('[name=quantity]').val();
                            var quantityNumber = parseFloat(quantity).toFixed(2);
                            array[val + '_option_charge'] = parseFloat(array[val + '_color_extra_value']);
                            var cost = parseFloat(price) + array[val + '_option_charge'];
                            var option_cost = parseFloat(array[val + '_option_charge'] * quantityNumber).toFixed(2);
                            var $output_id = $('#' + val + '_outputColorValue');

                            output_option($output_id, option_cost, currency);

                            //"Free Option" if option=0
                            if (array[val + '_option_charge'] == "0") {

                                $('#' + val + '_outputColorValue').html(free_option_text);
                            }

                        }

                        if (array[val + 'calculInput']) {

                            var $user_value = $('#' + val + '_calcul_number_custom_field').val();
                            var quantity = $('[name=quantity]').val();
                            var quantityNumber = parseFloat(quantity).toFixed(2);
                            var active_formula = array[val + '_calcul_formula'].replace('$user_value', $user_value);

                            //Calculate string with Function instead of eval() 
                            var calcul_result = Function("return " + active_formula)();
                            var option_cost = calcul_result * quantityNumber;
                            var $output_id = $('#' + val + '_outputCalculValue');

                            output_option($output_id, option_cost, currency);

                            //"Free Option" if option=0
                            if (calcul_result == "0") {

                                $('#' + val + '_outputCalculValue').html(free_option_text);
                            }

                        }

                    });

                }

            }

        });



        function output_option($output_id, option_cost, currency) {
            var $output_id = $output_id;
            var currency = currency;
            var option_cost = option_cost;
            var cost_option_text = php_options_values.cost_option_text;

            if (currency_position == "left") {
                $output_id.html(cost_option_text + ' ' + currency + parseFloat(option_cost).toFixed(2));
            }
            else if (currency_position == "left_space") {
                $output_id.html(cost_option_text + ' ' + currency + ' ' + option_cost);
            }
            else if (currency_position == "right") {
                $output_id.html(cost_option_text + ' ' + parseFloat(option_cost).toFixed(2) + currency);
            }
            else if (currency_position == "right_space") {
                $output_id.html(cost_option_text + ' ' + parseFloat(option_cost).toFixed(2) + ' ' + currency);
            } else {
                //do something
            }

            //"Free Option" if option=0
            if (option_cost === "0.00") {

                $output_id.html(free_option_text);
            }

        }

    });

})(jQuery);
