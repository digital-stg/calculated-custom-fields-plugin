//Prevent var not defined
var php_admin_options_values = "null";


(function ($) {

    /**
     * Admin side JQ, options menu tabs + functions
     * 
     */

   
    var option_identificator_id = "#op1";
    var option_identificator_class = ".op1";
    var option_identificator = "op1";


    $(function () {
        
        var quantity_related = php_admin_options_values.quantity_related;

        if (quantity_related) {
            $("#quantity_related").prop("checked", true);
        }

        $(document).on("click", '.tablinks', function (e) {

            var index = $(".tablinks").index(this);

            if (this.id == "settings") {
                openCity('Helsinki');
                $(this).toggleClass('active');
            } else if (this.id == "demo_data") {
                openCity('Roma');
                $(this).toggleClass('active');
            } else if (this.id == "add_new_tab") {
                if (this.previousElementSibling.id == "ccf-pro-11") {
                    if (this.previousElementSibling.className.includes('active')) {
                        $('#Tokyo').hide().fadeIn(400);
                    } else {
                        e.preventDefault();
                        openCity('Tokyo');
                        $(this.previousElementSibling).toggleClass('active');
                    }

                } else {
                    $(this).before('<a class="tablinks" id="ccf-pro-11"><i class="fa fa-toggle-off" aria-hidden="true"></i> CCF Pro </a>');
                    openCity('Tokyo');
                    $(this.previousElementSibling).toggleClass('active');
                }
            } else if (this.id == "tab_op1") {
                openCity('London');
                $(this).toggleClass('active');
                var option_identificator = "op1";
                var option_identificator_id = "#op1";
                var option_identificator_class = ".op1";
                //dom ready functions with op1 id top down. 
            }
            else if (this.id == "tab_op2") {
                openCity('Paris');
                $(this).toggleClass('active');
                var option_identificator = "op2";
                var option_identificator_id = "#op2";
                var option_identificator_class = ".op2";
                display_input_type(option_identificator_id, option_identificator_class);
                admin_btn_switching(option_identificator_class);
                display_btn_number(option_identificator_id, option_identificator_class);
                upload_img_swp(option_identificator_class);
                reveal_filled_section(option_identificator, option_identificator_id, option_identificator_class);
                check_submit_validate(option_identificator_id);
            } else {
                openCity('Tokyo');
                $(this).toggleClass('active');
            }

        });

       
        function openCity(cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
        }

        /* Display admin sub section according input choose */

        function display_input_type(option_identificator_id, option_identificator_class) {

          

            var selectedOption = $(option_identificator_id + '_field_type').val();

            if (selectedOption == "14") {
                $(option_identificator_class + '_phone_div').css("display", "block");
            }
            else if (selectedOption == "13") {
                $(option_identificator_class + '_upload_div').css("display", "block");
            }
            else if (selectedOption == "12") {
                $(option_identificator_class + '_url_div').css("display", "block");
            }
            else if (selectedOption == "11") {
                $(option_identificator_class + '_calculation_div').css("display", "block");
            }
            else if (selectedOption == "10") {
                $(option_identificator_class + '_color_div').css("display", "block");
            }
            else if (selectedOption == "9") {
                $(option_identificator_class + '_button_swap_div').css("display", "block");
            }
            else if (selectedOption == "8") {
                $(option_identificator_class + '_email_div').css("display", "block");
            }
            else if (selectedOption == "7") {
                $(option_identificator_class + '_image_div').css("display", "block");
            }
            else if (selectedOption == "6") {
                $(option_identificator_class + '_number_div').css("display", "block");
            }
            else if (selectedOption == "5") {
                $(option_identificator_class + '_radio_div').css("display", "block");
            }
            else if (selectedOption == "4") {
                $(option_identificator_class + '_textarea_div').css("display", "block");
            }
            else if (selectedOption == "3") {
                $(option_identificator_class + '_checkbox_div').css("display", "block");
            }
            else if (selectedOption == "2") {
                $(option_identificator_class + '_select_div').css("display", "block");
            }
            else if (selectedOption == "1") {
                $(option_identificator_class + '_text_div').css("display", "block");
            }
            else {
                $(option_identificator_class + '_checkbox_div').css("display", "none");
                $(option_identificator_class + '_select_div').css("display", "none");
                $(option_identificator_class + '_text_div').css("display", "none");
                $(option_identificator_class + '_radio_div').css("display", "none");
                $(option_identificator_class + '_requiredCheck_field').css("display", "none");
                $(option_identificator_class + '_disable_output_field').css("display", "none");
                $(option_identificator_class + '_input_placeholder_field').css("display", "none");
                $(option_identificator_class + '_number_div').css("display", "none");
                $(option_identificator_class + '_email_div').css("display", "none");
                $(option_identificator_class + '_button_swap_div').css("display", "none");
                $(option_identificator_class + '_color_div').css("display", "none");
                $(option_identificator_class + '_calculation_div').css("display", "none");
                $(option_identificator_class + '_url_div').css("display", "none");
                $(option_identificator_class + '_upload_div').css("display", "none");
                $(option_identificator_class + '_phone_div').css("display", "none");
            }

            $(option_identificator_id + '_field_type').change(function () {

                $('input').css('border-color', '#8c8f94');
                $(option_identificator_id + '_validation_message').html('');
                var selectedOption = $(option_identificator_id + '_field_type').val();

                if (selectedOption == "14") {
                    $(option_identificator_class + '_phone_div').css("display", "block");
                    $(option_identificator_class + '_upload_div').css("display", "none");
                    $(option_identificator_class + '_url_div').css("display", "none");
                    $(option_identificator_class + '_calculation_div').css("display", "none");
                    $(option_identificator_class + '_color_div').css("display", "none");
                    $(option_identificator_class + '_button_swap_div').css("display", "none");
                    $(option_identificator_class + '_email_div').css("display", "none");
                    $(option_identificator_class + '_requiredCheck_field').css("display", "block");
                    $(option_identificator_class + '_disable_output_field').css("display", "block");
                    $(option_identificator_class + '_input_placeholder_field').css("display", "block");
                    $(option_identificator_class + '_checkbox_div').css("display", "none");
                    $(option_identificator_class + '_select_div').css("display", "none");
                    $(option_identificator_class + '_text_div').css("display", "none");
                    $(option_identificator_class + '_textarea_div').css("display", "none");
                    $(option_identificator_class + '_radio_div').css("display", "none");
                    $(option_identificator_class + '_number_div').css("display", "none");
                    $(option_identificator_class + '_image_div').css("display", "none");
                }

                else if (selectedOption == "13") {
                    $(option_identificator_class + '_upload_div').css("display", "block");
                    $(option_identificator_class + '_url_div').css("display", "none");
                    $(option_identificator_class + '_calculation_div').css("display", "none");
                    $(option_identificator_class + '_color_div').css("display", "none");
                    $(option_identificator_class + '_button_swap_div').css("display", "none");
                    $(option_identificator_class + '_email_div').css("display", "none");
                    $(option_identificator_class + '_requiredCheck_field').css("display", "block");
                    $(option_identificator_class + '_disable_output_field').css("display", "block");
                    $(option_identificator_class + '_input_placeholder_field').css("display", "block");
                    $(option_identificator_class + '_checkbox_div').css("display", "none");
                    $(option_identificator_class + '_select_div').css("display", "none");
                    $(option_identificator_class + '_text_div').css("display", "none");
                    $(option_identificator_class + '_textarea_div').css("display", "none");
                    $(option_identificator_class + '_radio_div').css("display", "none");
                    $(option_identificator_class + '_number_div').css("display", "none");
                    $(option_identificator_class + '_image_div').css("display", "none");
                    $(option_identificator_class + '_phone_div').css("display", "none");
                }
                else if (selectedOption == "12") {
                    $(option_identificator_class + '_url_div').css("display", "block");
                    $(option_identificator_class + '_calculation_div').css("display", "none");
                    $(option_identificator_class + '_color_div').css("display", "none");
                    $(option_identificator_class + '_button_swap_div').css("display", "none");
                    $(option_identificator_class + '_email_div').css("display", "none");
                    $(option_identificator_class + '_requiredCheck_field').css("display", "block");
                    $(option_identificator_class + '_disable_output_field').css("display", "block");
                    $(option_identificator_class + '_input_placeholder_field').css("display", "block");
                    $(option_identificator_class + '_checkbox_div').css("display", "none");
                    $(option_identificator_class + '_select_div').css("display", "none");
                    $(option_identificator_class + '_text_div').css("display", "none");
                    $(option_identificator_class + '_textarea_div').css("display", "none");
                    $(option_identificator_class + '_radio_div').css("display", "none");
                    $(option_identificator_class + '_number_div').css("display", "none");
                    $(option_identificator_class + '_image_div').css("display", "none");
                    $(option_identificator_class + '_upload_div').css("display", "none");
                    $(option_identificator_class + '_phone_div').css("display", "none");
                }

                else if (selectedOption == "11") {

                    $(option_identificator_class + '_calculation_div').css("display", "block");
                    $(option_identificator_class + '_color_div').css("display", "none");
                    $(option_identificator_class + '_button_swap_div').css("display", "none");
                    $(option_identificator_class + '_email_div').css("display", "none");
                    $(option_identificator_class + '_requiredCheck_field').css("display", "block");
                    $(option_identificator_class + '_disable_output_field').css("display", "block");
                    $(option_identificator_class + '_input_placeholder_field').css("display", "block");
                    $(option_identificator_class + '_checkbox_div').css("display", "none");
                    $(option_identificator_class + '_select_div').css("display", "none");
                    $(option_identificator_class + '_text_div').css("display", "none");
                    $(option_identificator_class + '_textarea_div').css("display", "none");
                    $(option_identificator_class + '_radio_div').css("display", "none");
                    $(option_identificator_class + '_number_div').css("display", "none");
                    $(option_identificator_class + '_image_div').css("display", "none");
                    $(option_identificator_class + '_url_div').css("display", "none");
                    $(option_identificator_class + '_upload_div').css("display", "none");
                    $(option_identificator_class + '_phone_div').css("display", "none");
                }
                else if (selectedOption == "10") {

                    $(option_identificator_class + '_color_div').css("display", "block");
                    $(option_identificator_class + '_button_swap_div').css("display", "none");
                    $(option_identificator_class + '_email_div').css("display", "none");
                    $(option_identificator_class + '_requiredCheck_field').css("display", "block");
                    $(option_identificator_class + '_disable_output_field').css("display", "block");
                    $(option_identificator_class + '_input_placeholder_field').css("display", "none");
                    $(option_identificator_class + '_checkbox_div').css("display", "none");
                    $(option_identificator_class + '_select_div').css("display", "none");
                    $(option_identificator_class + '_text_div').css("display", "none");
                    $(option_identificator_class + '_textarea_div').css("display", "none");
                    $(option_identificator_class + '_radio_div').css("display", "none");
                    $(option_identificator_class + '_number_div').css("display", "none");
                    $(option_identificator_class + '_image_div').css("display", "none");
                    $(option_identificator_class + '_calculation_div').css("display", "none");
                    $(option_identificator_class + '_url_div').css("display", "none");
                    $(option_identificator_class + '_upload_div').css("display", "none");
                    $(option_identificator_class + '_phone_div').css("display", "none");

                } else if (selectedOption == "9") {
                    $(option_identificator_class + '_button_swap_div').css("display", "block");
                    $(option_identificator_class + '_email_div').css("display", "none");
                    $(option_identificator_class + '_requiredCheck_field').css("display", "block");
                    $(option_identificator_class + '_disable_output_field').css("display", "block");
                    $(option_identificator_class + '_input_placeholder_field').css("display", "none");
                    $(option_identificator_class + '_checkbox_div').css("display", "none");
                    $(option_identificator_class + '_select_div').css("display", "none");
                    $(option_identificator_class + '_text_div').css("display", "none");
                    $(option_identificator_class + '_textarea_div').css("display", "none");
                    $(option_identificator_class + '_radio_div').css("display", "none");
                    $(option_identificator_class + '_number_div').css("display", "none");
                    $(option_identificator_class + '_image_div').css("display", "none");
                    $(option_identificator_class + '_color_div').css("display", "none");
                    $(option_identificator_class + '_calculation_div').css("display", "none");
                    $(option_identificator_class + '_url_div').css("display", "none");
                    $(option_identificator_class + '_upload_div').css("display", "none");
                    $(option_identificator_class + '_phone_div').css("display", "none");
                }

                else if (selectedOption == "8") {
                    $(option_identificator_class + '_email_div').css("display", "block");
                    $(option_identificator_class + '_requiredCheck_field').css("display", "block");
                    $(option_identificator_class + '_disable_output_field').css("display", "block");
                    $(option_identificator_class + '_input_placeholder_field').css("display", "block");
                    $(option_identificator_class + '_checkbox_div').css("display", "none");
                    $(option_identificator_class + '_select_div').css("display", "none");
                    $(option_identificator_class + '_text_div').css("display", "none");
                    $(option_identificator_class + '_textarea_div').css("display", "none");
                    $(option_identificator_class + '_radio_div').css("display", "none");
                    $(option_identificator_class + '_number_div').css("display", "none");
                    $(option_identificator_class + '_image_div').css("display", "none");
                    $(option_identificator_class + '_button_swap_div').css("display", "none");
                    $(option_identificator_class + '_color_div').css("display", "none");
                    $(option_identificator_class + '_calculation_div').css("display", "none");
                    $(option_identificator_class + '_url_div').css("display", "none");
                    $(option_identificator_class + '_upload_div').css("display", "none");
                    $(option_identificator_class + '_phone_div').css("display", "none");
                }

                else if (selectedOption == "7") {
                    $(option_identificator_class + '_image_div').css("display", "block");
                    $(option_identificator_class + '_requiredCheck_field').css("display", "block");
                    $(option_identificator_class + '_disable_output_field').css("display", "block");
                    $(option_identificator_class + '_input_placeholder_field').css("display", "none");
                    $(option_identificator_class + '_checkbox_div').css("display", "none");
                    $(option_identificator_class + '_select_div').css("display", "none");
                    $(option_identificator_class + '_text_div').css("display", "none");
                    $(option_identificator_class + '_textarea_div').css("display", "none");
                    $(option_identificator_class + '_radio_div').css("display", "none");
                    $(option_identificator_class + '_number_div').css("display", "none");
                    $(option_identificator_class + '_email_div').css("display", "none");
                    $(option_identificator_class + '_button_swap_div').css("display", "none");
                    $(option_identificator_class + '_color_div').css("display", "none");
                    $(option_identificator_class + '_calculation_div').css("display", "none");
                    $(option_identificator_class + '_url_div').css("display", "none");
                    $(option_identificator_class + '_upload_div').css("display", "none");
                    $(option_identificator_class + '_phone_div').css("display", "none");
                }

                else if (selectedOption == "6") {
                    $(option_identificator_class + '_number_div').css("display", "block");
                    $(option_identificator_class + '_requiredCheck_field').css("display", "block");
                    $(option_identificator_class + '_disable_output_field').css("display", "block");
                    $(option_identificator_class + '_input_placeholder_field').css("display", "block");
                    $(option_identificator_class + '_checkbox_div').css("display", "none");
                    $(option_identificator_class + '_select_div').css("display", "none");
                    $(option_identificator_class + '_text_div').css("display", "none");
                    $(option_identificator_class + '_textarea_div').css("display", "none");
                    $(option_identificator_class + '_radio_div').css("display", "none");
                    $(option_identificator_class + '_image_div').css("display", "none");
                    $(option_identificator_class + '_email_div').css("display", "none");
                    $(option_identificator_class + '_button_swap_div').css("display", "none");
                    $(option_identificator_class + '_color_div').css("display", "none");
                    $(option_identificator_class + '_calculation_div').css("display", "none");
                    $(option_identificator_class + '_url_div').css("display", "none");
                    $(option_identificator_class + '_upload_div').css("display", "none");
                    $(option_identificator_class + '_phone_div').css("display", "none");
                }

                else if (selectedOption == "5") {
                    $(option_identificator_class + '_radio_div').css("display", "block");
                    $(option_identificator_class + '_requiredCheck_field').css("display", "block");
                    $(option_identificator_class + '_disable_output_field').css("display", "block");
                    $(option_identificator_class + '_input_placeholder_field').css("display", "none");
                    $(option_identificator_class + '_checkbox_div').css("display", "none");
                    $(option_identificator_class + '_select_div').css("display", "none");
                    $(option_identificator_class + '_text_div').css("display", "none");
                    $(option_identificator_class + '_textarea_div').css("display", "none");
                    $(option_identificator_class + '_number_div').css("display", "none");
                    $(option_identificator_class + '_image_div').css("display", "none");
                    $(option_identificator_class + '_email_div').css("display", "none");
                    $(option_identificator_class + '_button_swap_div').css("display", "none");
                    $(option_identificator_class + '_color_div').css("display", "none");
                    $(option_identificator_class + '_calculation_div').css("display", "none");
                    $(option_identificator_class + '_url_div').css("display", "none");
                    $(option_identificator_class + '_upload_div').css("display", "none");
                    $(option_identificator_class + '_phone_div').css("display", "none");
                }

                else if (selectedOption == "4") {
                    $(option_identificator_class + '_textarea_div').css("display", "block");
                    $(option_identificator_class + '_requiredCheck_field').css("display", "block");
                    $(option_identificator_class + '_disable_output_field').css("display", "block");
                    $(option_identificator_class + '_input_placeholder_field').css("display", "block");
                    $(option_identificator_class + '_checkbox_div').css("display", "none");
                    $(option_identificator_class + '_select_div').css("display", "none");
                    $(option_identificator_class + '_text_div').css("display", "none");
                    $(option_identificator_class + '_radio_div').css("display", "none");
                    $(option_identificator_class + '_image_div').css("display", "none");
                    $(option_identificator_class + '_email_div').css("display", "none");
                    $(option_identificator_class + '_number_div').css("display", "none");
                    $(option_identificator_class + '_button_swap_div').css("display", "none");
                    $(option_identificator_class + '_color_div').css("display", "none");
                    $(option_identificator_class + '_calculation_div').css("display", "none");
                    $(option_identificator_class + '_url_div').css("display", "none");
                    $(option_identificator_class + '_upload_div').css("display", "none");
                    $(option_identificator_class + '_phone_div').css("display", "none");
                }

                else if (selectedOption == "3") {
                    $(option_identificator_class + '_checkbox_div').css("display", "block");
                    $(option_identificator_class + '_requiredCheck_field').css("display", "block");
                    $(option_identificator_class + '_disable_output_field').css("display", "block");
                    $(option_identificator_class + '_input_placeholder_field').css("display", "none");
                    $(option_identificator_class + '_select_div').css("display", "none");
                    $(option_identificator_class + '_text_div').css("display", "none");
                    $(option_identificator_class + '_radio_div').css("display", "none");
                    $(option_identificator_class + '_textarea_div').css("display", "none");
                    $(option_identificator_class + '_number_div').css("display", "none");
                    $(option_identificator_class + '_image_div').css("display", "none");
                    $(option_identificator_class + '_email_div').css("display", "none");
                    $(option_identificator_class + '_button_swap_div').css("display", "none");
                    $(option_identificator_class + '_color_div').css("display", "none");
                    $(option_identificator_class + '_calculation_div').css("display", "none");
                    $(option_identificator_class + '_url_div').css("display", "none");
                    $(option_identificator_class + '_upload_div').css("display", "none");
                    $(option_identificator_class + '_phone_div').css("display", "none");
                }
                else if (selectedOption == "2") {
                    $(option_identificator_class + '_select_div').css("display", "block");
                    $(option_identificator_class + '_requiredCheck_field').css("display", "block");
                    $(option_identificator_class + '_disable_output_field').css("display", "block");
                    $(option_identificator_class + '_input_placeholder_field').css("display", "none");
                    $(option_identificator_class + '_checkbox_div').css("display", "none");
                    $(option_identificator_class + '_text_div').css("display", "none");
                    $(option_identificator_class + '_radio_div').css("display", "none");
                    $(option_identificator_class + '_textarea_div').css("display", "none");
                    $(option_identificator_class + '_number_div').css("display", "none");
                    $(option_identificator_class + '_image_div').css("display", "none");
                    $(option_identificator_class + '_email_div').css("display", "none");
                    $(option_identificator_class + '_button_swap_div').css("display", "none");
                    $(option_identificator_class + '_color_div').css("display", "none");
                    $(option_identificator_class + '_calculation_div').css("display", "none");
                    $(option_identificator_class + '_url_div').css("display", "none");
                    $(option_identificator_class + '_upload_div').css("display", "none");
                    $(option_identificator_class + '_phone_div').css("display", "none");
                }

                else if (selectedOption == "1") {
                    $(option_identificator_class + '_text_div').css("display", "block");
                    $(option_identificator_class + '_requiredCheck_field').css("display", "block");
                    $(option_identificator_class + '_disable_output_field').css("display", "block");
                    $(option_identificator_class + '_input_placeholder_field').css("display", "block");
                    $(option_identificator_class + '_checkbox_div').css("display", "none");
                    $(option_identificator_class + '_select_div').css("display", "none");
                    $(option_identificator_class + '_radio_div').css("display", "none");
                    $(option_identificator_class + '_textarea_div').css("display", "none");
                    $(option_identificator_class + '_number_div').css("display", "none");
                    $(option_identificator_class + '_image_div').css("display", "none");
                    $(option_identificator_class + '_email_div').css("display", "none");
                    $(option_identificator_class + '_button_swap_div').css("display", "none");
                    $(option_identificator_class + '_color_div').css("display", "none");
                    $(option_identificator_class + '_calculation_div').css("display", "none");
                    $(option_identificator_class + '_url_div').css("display", "none");
                    $(option_identificator_class + '_upload_div').css("display", "none");
                    $(option_identificator_class + '_phone_div').css("display", "none");
                } else {
                    $(option_identificator_class + '_select_div').css("display", "none");
                    $(option_identificator_class + '_checkbox_div').css("display", "none");
                    $(option_identificator_class + '_text_div').css("display", "none");
                    $(option_identificator_class + '_radio_div').css("display", "none");
                    $(option_identificator_class + '_requiredCheck_field').css("display", "none");
                    $(option_identificator_class + '_disable_output_field').css("display", "none");
                    $(option_identificator_class + '_input_placeholder_field').css("display", "none");
                    $(option_identificator_class + '_textarea_div').css("display", "none");
                    $(option_identificator_class + '_number_div').css("display", "none");
                    $(option_identificator_class + '_image_div').css("display", "none");
                    $(option_identificator_class + '_email_div').css("display", "none");
                    $(option_identificator_class + '_button_swap_div').css("display", "none");
                    $(option_identificator_class + '_color_div').css("display", "none");
                    $(option_identificator_class + '_calculation_div').css("display", "none");
                    $(option_identificator_class + '_url_div').css("display", "none");
                    $(option_identificator_class + '_upload_div').css("display", "none");
                    $(option_identificator_class + '_phone_div').css("display", "none");
                }

            });

            /* Select placeholder value if empty */
            var selectdefautText = $(option_identificator_id + '_select_no_option').val();
            if (selectdefautText == "") { $(option_identificator_id + '_select_no_option').val('Select an option'); }

        }

        /* Button swap number switching */

        function display_btn_number(option_identificator_id, option_identificator_class) {

            var numberOfButton = $(option_identificator_id + '_btnswap_number').val();

            if (numberOfButton == "1") {

                $(option_identificator_class + '_button_swap_4').css("display", "block");
                $(option_identificator_class + '_button_swap_5').css("display", "none");
                $(option_identificator_class + '_button_swap_6').css("display", "none");

            } else if (numberOfButton == "2") {

                $(option_identificator_class + '_button_swap_4').css("display", "block");
                $(option_identificator_class + '_button_swap_5').css("display", "block");
                $(option_identificator_class + '_button_swap_6').css("display", "none");

            } else if (numberOfButton == "3") {

                $(option_identificator_class + '_button_swap_4').css("display", "block");
                $(option_identificator_class + '_button_swap_5').css("display", "block");
                $(option_identificator_class + '_button_swap_6').css("display", "block");

            } else {

                $(option_identificator_class + '_button_swap_4').css("display", "none");
                $(option_identificator_class + '_button_swap_5').css("display", "none");
                $(option_identificator_class + '_button_swap_6').css("display", "none");

            }

            $(option_identificator_id + '_btnswap_number').change(function () {

                var numberOfButton = $(option_identificator_id + '_btnswap_number').val();

                if (numberOfButton == "1") {

                    $(option_identificator_class + '_button_swap_4').css("display", "block");
                    $(option_identificator_class + '_button_swap_5').css("display", "none");
                    $(option_identificator_class + '_button_swap_6').css("display", "none");
                    $(option_identificator_id + '_btnswap_name_5').val('');
                    $(option_identificator_id + '_btnswap_value_5').val('');
                    $(option_identificator_id + '_btnswap_name_6').val('');
                    $(option_identificator_id + '_btnswap_value_6').val('');

                } else if (numberOfButton == "2") {

                    $(option_identificator_class + '_button_swap_4').css("display", "block");
                    $(option_identificator_class + '_button_swap_5').css("display", "block");
                    $(option_identificator_class + '_button_swap_6').css("display", "none");
                    $(option_identificator_id + '_btnswap_name_6').val('');
                    $(option_identificator_id + '_btnswap_value_6').val('');

                } else if (numberOfButton == "3") {

                    $(option_identificator_class + '_button_swap_4').css("display", "block");
                    $(option_identificator_class + '_button_swap_5').css("display", "block");
                    $(option_identificator_class + '_button_swap_6').css("display", "block");

                } else {

                    $(option_identificator_class + '_button_swap_4').css("display", "none");
                    $(option_identificator_class + '_button_swap_5').css("display", "none");
                    $(option_identificator_class + '_button_swap_6').css("display", "none");
                    $(option_identificator_id + '_btnswap_name_4').val('');
                    $(option_identificator_id + '_btnswap_value_4').val('');
                    $(option_identificator_id + '_btnswap_name_5').val('');
                    $(option_identificator_id + '_btnswap_value_5').val('');
                    $(option_identificator_id + '_btnswap_name_6').val('');
                    $(option_identificator_id + '_btnswap_value_6').val('');
                }

            });

        }

        /*
        *
        * Custom uploader for image swap
        *
        */

        function upload_img_swp(option_identificator_class) {

            // on upload button click
            $('body').on('click', option_identificator_class + '_img-upl', function (e) {

     

                var button = $(this),

                    custom_uploader = wp.media({
                        title: 'Insert image',
                        library: {
                            type: 'image'
                        },
                        button: {
                            text: 'Use this image' // button label text
                        },
                        multiple: false
                    }).on('select', function () { 
                        var attachment = custom_uploader.state().get('selection').first().toJSON();
                        button.html('<img width="150" height="150" style="display:block; margin-bottom:2px;margin-top: -35px;" src="' + attachment.url + '">').next().show().next().val(attachment.id);
                    }).open();


            });

            // on remove button click
            $('body').on('click', option_identificator_class + '_img-rmv', function (e) {
                e.preventDefault();
                var button = $(this);
                button.next().val(''); // emptying the hidden field
                button.hide().prev().html('Upload image');
            });

        }


        /* Admin buttons js */

        function admin_btn_switching(option_identificator_class) {

           
                $(option_identificator_class + '_national_phone').show();
               
               /* Open and close file types restriction panel */

               $("._check_all").click(function () {
                $(option_identificator_class+ '_mimes_checkboxes').each(function(){
                    $(this).prop('checked', !$(this)[0].checked);
                 })});
    
               $(option_identificator_class + "_add_upload_restriction").click(function () {
                $(this).next().css('display', 'block');
                $('.file_types_chk').css('display', 'block');
                $(this).css('display', 'none');
                $(option_identificator_class + "_close_restriction").css('display', 'block');
            });

            $(option_identificator_class + "_close_restriction").click(function () {
                $(this).next().css('display', 'none');
                $(this).css('display', 'none');
                $(option_identificator_class + "_add_upload_restriction").css('display', 'block');
            });
    
            /* Add and remove number calculation */

            $(option_identificator_class + "_add_calcul").click(function () {

                $(this).next().css('display', 'block');
                $(this).css('display', 'none');
                $(option_identificator_class + "_remove_calcul").css('display', 'block');
            });

            $(option_identificator_class + "_remove_calcul").click(function () {
                $(this).parent('div').css('display', 'none');
                $(this).css('display', 'none');
                $(option_identificator_class + "_add_calcul").css('display', 'block');
                var inputs = $(this).parent('div').find('input');
                inputs.val('');
            });

            /* Add and remove img swap */

            $(option_identificator_class + "_add_image").click(function () {

                $(this).next().css('display', 'block');
                $(this).css('display', 'none');
                $(option_identificator_class + "_remove_image").css('display', 'block');

            });

            $(option_identificator_class + "_remove_image").click(function () {
                $(this).parent('div').css('display', 'none');
                $(this).css('display', 'none');
                $(option_identificator_class + "_add_image").css('display', 'block');
                var inputs = $(this).parent('div').find('input');
                inputs.val('');
            });

            $(option_identificator_class + "_add_image_2").click(function () {

                $(this).next().css('display', 'block');
                $(this).css('display', 'none');
                $(option_identificator_class + "_remove_image_2").css('display', 'block');

            });

            $(option_identificator_class + "_remove_image_2").click(function () {
                $(this).parent('div').css('display', 'none');
                $(this).css('display', 'none');
                $(option_identificator_class + "_add_image_2").css('display', 'block');
                var inputs = $(this).parent('div').find('input');
                inputs.val('');
            });


            /* Add and remove radio */

            $(option_identificator_class + "_add_radio").click(function () {

                $(this).next().css('display', 'block');
                $(this).css('display', 'none');
                $(option_identificator_class + "_remove_radio").css('display', 'block');

            });

            $(option_identificator_class + "_remove_radio").click(function () {
                $(this).parent('div').css('display', 'none');
                $(this).css('display', 'none');
                $(option_identificator_class + "_add_radio").css('display', 'block');
                var inputs = $(this).parent('div').find('input');
                inputs.val('');
            });

            $(option_identificator_class + "_add_radio_2").click(function () {

                $(this).next().css('display', 'block');
                $(this).css('display', 'none');
                $(option_identificator_class + "_remove_radio_2").css('display', 'block');

            });

            $(option_identificator_class + "_remove_radio_2").click(function () {
                $(this).parent('div').css('display', 'none');
                $(this).css('display', 'none');
                $(option_identificator_class + "_add_radio_2").css('display', 'block');
                var inputs = $(this).parent('div').find('input');
                inputs.val('');
            });


            /* Add and remove select */

            $(option_identificator_class + "_add_select").click(function () {

                $(this).next().css('display', 'block');
                $(this).css('display', 'none');
                $(option_identificator_class + "_remove_select").css('display', 'block');

            });

            $(option_identificator_class + "_remove_select").click(function () {
                $(this).parent('div').css('display', 'none');
                $(this).css('display', 'none');
                $(option_identificator_class + "_add_select").css('display', 'block');
                var inputs = $(this).parent('div').find('input');
                inputs.val('');
            });

            $(option_identificator_class + "_add_select_2").click(function () {

                $(this).next().css('display', 'block');
                $(this).css('display', 'none');
                $(option_identificator_class + "_remove_select_2").css('display', 'block');

            });

            $(option_identificator_class + "_remove_select_2").click(function () {
                $(this).parent('div').css('display', 'none');
                $(this).css('display', 'none');
                $(option_identificator_class + "_add_select_2").css('display', 'block');
                var inputs = $(this).parent('div').find('input');
                inputs.val('');
            });

            $(option_identificator_class + "_add_select_3").click(function () {

                $(this).next().css('display', 'block');
                $(this).css('display', 'none');
                $(option_identificator_class + "_remove_select_3").css('display', 'block');

            });

            $(option_identificator_class + "_remove_select_3").click(function () {
                $(this).parent('div').css('display', 'none');
                $(this).css('display', 'none');
                $(option_identificator_class + "_add_select_3").css('display', 'block');
                var inputs = $(this).parent('div').find('input');
                inputs.val('');
            });


            $(option_identificator_class + "_add_select_4").click(function () {

                $(this).next().css('display', 'block');
                $(this).css('display', 'none');
                $(option_identificator_class + "_remove_select_4").css('display', 'block');

            });

            $(option_identificator_class + "_remove_select_4").click(function () {
                $(this).parent('div').css('display', 'none');
                $(this).css('display', 'none');
                $(option_identificator_class + "_add_select_4").css('display', 'block');
                var inputs = $(this).parent('div').find('input');
                inputs.val('');
            });



            /* Add and remove checkbox */

            $(option_identificator_class + "_add_chk").click(function () {

                $(this).next().css('display', 'block');
                $(this).css('display', 'none');
                $(option_identificator_class + "_remove_chk").css('display', 'block');

            });

            $(option_identificator_class + "_remove_chk").click(function () {
                $(this).parent('div').css('display', 'none');
                $(this).css('display', 'none');
                $(option_identificator_class + "_add_chk").css('display', 'block');
                var inputs = $(this).parent('div').find('input');
                inputs.val('');
            });

            $(option_identificator_class + "_add_chk_2").click(function () {

                $(this).next().css('display', 'block');
                $(this).css('display', 'none');
                $(option_identificator_class + "_remove_chk_2").css('display', 'block');

            });

            $(option_identificator_class + "_remove_chk_2").click(function () {
                $(this).parent('div').css('display', 'none');
                $(this).css('display', 'none');
                $(option_identificator_class + "_add_chk_2").css('display', 'block');
                var inputs = $(this).parent('div').find('input');
                inputs.val('');
            });

            $(option_identificator_class + "_add_chk_3").click(function () {

                $(this).next().css('display', 'block');
                $(this).css('display', 'none');
                $(option_identificator_class + "_remove_chk_3").css('display', 'block');

            });

            $(option_identificator_class + "_remove_chk_3").click(function () {
                $(this).parent('div').css('display', 'none');
                $(this).css('display', 'none');
                $(option_identificator_class + "_add_chk_3").css('display', 'block');
                var inputs = $(this).parent('div').find('input');
                inputs.val('');
            });

        }

        /* Display fields if not empty */

        function reveal_filled_section(option_identificator, option_identificator_id, option_identificator_class) {

            //Getting PHP values from wp_add_inline_script()

                var select_name_3 = php_admin_options_values[option_identificator + "_select_name_3"];
                var select_name_4 = php_admin_options_values[option_identificator + "_select_name_4"];
                var select_name_5 = php_admin_options_values[option_identificator + "_select_name_5"];
                var select_name_6 = php_admin_options_values[option_identificator + "_select_name_6"];

                var checkbox_name_2 = php_admin_options_values[option_identificator + "_check_name_2"];
                var checkbox_name_3 = php_admin_options_values[option_identificator + "_check_name_3"];
                var checkbox_name_4 = php_admin_options_values[option_identificator + "_check_name_4"];

                var radio_name_3 = php_admin_options_values[option_identificator + "_radio_name_3"];
                var radio_name_4 = php_admin_options_values[option_identificator + "_radio_name_4"];

                var image_swap_3 = php_admin_options_values[option_identificator+ "_image_swap_3"];
                var image_swap_4 = php_admin_options_values[option_identificator + "_image_swap_4"];

                var btn_swap_4 = php_admin_options_values[option_identificator + "_btn_swap_4"];
                var btn_swap_5 = php_admin_options_values[option_identificator + "_btn_swap_5"];
                var btn_swap_6 = php_admin_options_values[option_identificator + "_btn_swap_6"];

                var calcul_label_2 = php_admin_options_values[option_identificator + "_calcul_label_2"];

             
            /* if not empty reveal sections */

            if (calcul_label_2) {
              
                $(option_identificator_class + "_2nd_calcul").css('display', 'block');
                $(option_identificator_class + "_add_calcul").css('display', 'none');
                $(option_identificator_class + "_remove_calcul").css('display', 'block');
            }

            if (select_name_3) {
                $(option_identificator_class + "_3rd_option").css('display', 'block');
                $(option_identificator_class + "_add_select").css('display', 'none');
            }

            if (select_name_4) {
                $(option_identificator_class + "_4th_option").css('display', 'block');
                $(option_identificator_class + "_add_select_2").css('display', 'none');
            }

            if (select_name_5) {
                $(option_identificator_class + "_5th_option").css('display', 'block');
                $(option_identificator_class + "_add_select_3").css('display', 'none');
            }

            if (select_name_6) {
                $(option_identificator_class + "_6th_option").css('display', 'block');
                $(option_identificator_class + "_add_select_4").css('display', 'none');
            }

            if (radio_name_3) {
                $(option_identificator_class + "_3rd_radio").css('display', 'block');
                $(option_identificator_class + "_add_radio").css('display', 'none');
            }

            if (radio_name_4) {
                $(option_identificator_class + "_4th_option_radio").css('display', 'block');
                $(option_identificator_class + "_add_radio_2").css('display', 'none');
            }

            if (checkbox_name_2) {
                $(option_identificator_class + "_2nd_checkbox").css('display', 'block');
                $(option_identificator_class + "_add_chk").css('display', 'none');
            }

            if (checkbox_name_3) {
                $(option_identificator_class + "_3rd_checkbox").css('display', 'block');
                $(option_identificator_class + "_add_chk_2").css('display', 'none');
            }

            if (checkbox_name_4) {
                $(option_identificator_class + "_4th_checkbox").css('display', 'block');
                $(option_identificator_class + "_add_chk_3").css('display', 'none');
            }

            if (image_swap_3) {
                $(option_identificator_class + "_3rd_img").css('display', 'block');
                $(option_identificator_class + "_add_image").css('display', 'none');
            }

            if (image_swap_4) {
                $(option_identificator_class + "_4th_img").css('display', 'block');
                $(option_identificator_class + "_add_image_2").css('display', 'none');
            }


            if (btn_swap_4) {
                $(option_identificator_class + "_button_swap_4").css('display', 'block');
                $(option_identificator_class + "_button_swap_5").css('display', 'none');
                $(option_identificator_class + "_button_swap_6").css('display', 'none');
                $(option_identificator_id + "_btnswap_number").val("1");
            }

            if (btn_swap_5) {
                $(option_identificator_class + "_button_swap_4").css('display', 'block');
                $(option_identificator_class + "_button_swap_5").css('display', 'block');
                $(option_identificator_class + "_button_swap_6").css('display', 'none');
                $(option_identificator_id + "_btnswap_number").val("2");
            }

            if (btn_swap_6) {
                $(option_identificator_class + "_button_swap_4").css('display', 'block');
                $(option_identificator_class + "_button_swap_5").css('display', 'block');
                $(option_identificator_class + "_button_swap_6").css('display', 'block');
                $(option_identificator_id + "_btnswap_number").val("3");
            }


        }

        /*
        *
        * Form submit & validation
        *
        */
     
        
        function check_submit_validate(option_identificator_id) {

           /* disable submit with keypress enter */

           document.addEventListener('keypress', function (event) {
            if (event.key === 'Enter') {
                event.preventDefault();
                return false;
            }
        });

        $(option_identificator_id + '_delete-submit').unbind("click").bind('click', function (event) {

            var clicked_submit_id = event.target.id;
            var clicked_id_num = parseInt(clicked_submit_id.replace(/[^0-9]/gi, ''));
            var option_identificator_id = "#op" + clicked_id_num;
            var option_identificator_class = ".op" + clicked_id_num;
            var option_number = option_identificator_id.replace(/[^0-9]/gi, '');

            if (confirm('Delete option ' + option_number + ' ?')) {
                $(option_identificator_class + "delete_admin_loader_icon").show();
                $(option_identificator_class + "admin_loader_icon").hide();
                return;
            }
            //not removing
            event.preventDefault();
        });


        //Confirm reset settings
        $('[name=remove_settings]').unbind("click").bind("click", function (event) {

            if (confirm('Reset settings ?')) {
                $(".delete_loader_icon").show();
                $(".save_loader_icon").hide();
                return;
            }
            //not removing
            event.preventDefault();
        });

        //Loader on save settings button
        $('[name=save_settings]').unbind("click").bind("click", function (event) {
            $(".save_loader_icon").show();
        });


        $(option_identificator_id + '_option_submit').on('click', function (event) {

            var clicked_submit_id = event.target.id;
            var clicked_id_num = parseInt(clicked_submit_id.replace(/[^0-9]/gi, ''));
            var option_identificator_id = "#op" + clicked_id_num;
            var option_identificator_class = ".op" + clicked_id_num;

            $(option_identificator_class + "admin_loader_icon").show();

                // general validation
                $(option_identificator_id + '_validation_message').html('');

                $(".required").each(function () {
                    if ($(this).is(':visible') && $(this).css('display') == 'block' && $(this).val().match(/^\s*$/g)) {
                        event.preventDefault();
                        $(this).css('border-color', 'red');
                        $(option_identificator_id + '_validation_message').html('<p class=\"error notice\" style=\"border-left:3px solid red;\">Fill required fields.</p>');
                       $(option_identificator_class + "admin_loader_icon").hide();
                    }
                });


                //If chk mimes type not checked
                if($(option_identificator_class + '_mimes_checkboxes:checked').length === 0 && $(option_identificator_id + '_field_type').val() === "13"){
                    event.preventDefault();
                    $(option_identificator_id + '_validation_message').html('<p class=\"error notice\" style=\"border-left:3px solid red;\">At least one file type allowed is required. Check file type restriction.</p>');
                    $(option_identificator_class + "admin_loader_icon").hide();
                };

              
                // Calcul Formula input validation

                if ($(option_identificator_id + '_calcul_formula').is(':visible') && $(option_identificator_id + '_calcul_formula').css('display') == 'block') {


                    //Check required variables "$user_value " (and "$second_user_value " if 2nd input choosed) 

                    if ($(option_identificator_id + '_calcul_formula').val().indexOf("$user_value") == -1) {
                        event.preventDefault();
                        $(option_identificator_id + '_calcul_formula').css('border-color', 'red');
                        $(option_identificator_id + '_validation_message').append('<p class=\"error notice\" style=\"border-left:3px solid red;\"><strong>$user_value</strong> is required in calcul formula.</p>')
                        $(option_identificator_class + "admin_loader_icon").hide();
                    }

                    if ($(option_identificator_id + '_calcul_label_2').is(':visible') && $(option_identificator_id + '_calcul_formula').val().indexOf("$second_user_value") == -1) {
                        event.preventDefault();
                        $(option_identificator_id + '_calcul_formula').css('border-color', 'red');
                        $(option_identificator_id + '_validation_message').append('<p class=\"error notice\" style=\"border-left:3px solid red;\"><strong>$second_user_value</strong> is required in calcul formula (you choose to add another input).</p>')
                        $(option_identificator_class + "admin_loader_icon").hide();
                    }

                    //remove white space begin and end
                    $(option_identificator_id + '_calcul_formula').val($.trim($(option_identificator_id + '_calcul_formula').val()));

                    //replace comma by dot
                    var change_commma_for_dot = $(option_identificator_id + '_calcul_formula').val().replace(/[,]/g, '.');
                    $(option_identificator_id + '_calcul_formula').val(change_commma_for_dot);


                    //check unallowed values 
                    var newVal = $(option_identificator_id + '_calcul_formula').val().replace(/[(]/g, ' ( ').replace(/[)]/g, ' ) ').replace(/[+]/g, ' + ').replace(/[-]/g, ' - ').replace(/[*]/g, ' * ').replace(/[/]/g, ' / ');
                    var split_array = newVal.split(" ");
                    var regPattern1 = /^[ 0-9+\-*().\/\(\)]*$/;
                    var regPattern2 = /^(\$user_value)$/;
                    if ($(option_identificator_id + '_calcul_label_2').is(':visible')) {
                        var regPattern2 = /^(\$user_value)$|^(\$second_user_value)$/;
                    }

                    if ($(option_identificator_id + '_calcul_label_2').is(':visible')) {
                        var string_notice2 = ", $second_user_value";
                    } else { var string_notice2 = " " }

                    var i;

                    for (i = 0; i < split_array.length; ++i) {
                        var value = split_array[i];
                        if (!value.match(regPattern1)) {
                            if (!value.match(regPattern2)) {
                                event.preventDefault();
                                $(option_identificator_id + '_calcul_formula').css('border-color', 'red');
                                $(option_identificator_id + '_validation_message').append('<p class=\"error notice\" style=\"border-left:3px solid red;\"> Unallowed value : <strong>' + value + '</strong></p>');
                                $(option_identificator_id + '_validation_message').append('<p class=\"error notice\" style=\"border-left:3px solid red;\">Are allowed only : numbers, mathematic operators  .+-/*(), $user_value ' + string_notice2 + '</p>');
                                $(option_identificator_class + "admin_loader_icon").hide();
                            }
                        }

                    }

                    // TEST FORMULA BY DOING CALCULATION WITH VALUE 1 => CHECK IF SYMBOLS ERROR
                    var testing_formula = $(option_identificator_id + '_calcul_formula').val().replace(/\$user_value/g, 1);
                    if ($(option_identificator_id + '_calcul_label_2').is(':visible')) {
                        var testing_formula = $(option_identificator_id + '_calcul_formula').val().replace(/\$user_value/g, 1).replace(/\$second_user_value/g, 1);
                    }
                    try {
                        var calcul_result = Function("return " + testing_formula)();
                    } catch (error) {
                        event.preventDefault();
                        $(option_identificator_id + '_calcul_formula').css('border-color', 'red');
                        $(option_identificator_id + '_validation_message').append('<p class=\"error notice\" style=\"border-left:3px solid red;\">Error in formula.</p>');
                        $(option_identificator_class + "admin_loader_icon").hide();
                    }

                    // check error symbols
                    var error_symbol = ["++", "+ +", " + + ", "--", "- -", " - - ", "**", "* *", " * * ", "//", "/ /", " / / ", "..", ". .", " . . "];
                    var stringIncludesError = error_symbol.some(error_value => $(option_identificator_id + '_calcul_formula').val().includes(error_value));
                    if (stringIncludesError == true) {
                        event.preventDefault();
                        $(option_identificator_id + '_calcul_formula').css('border-color', 'red');
                        $(option_identificator_id + '_validation_message').append('<p class=\"error notice\" style=\"border-left:3px solid red;\">Check your symbols.</p>');
                        $(option_identificator_class + "admin_loader_icon").hide();
                    }

                    //if parentheses number is odd (impair) => error 
                    if ($(option_identificator_id + '_calcul_formula').val().indexOf("(") == 0) {
                        var parenthese_number = $(option_identificator_id + '_calcul_formula').val().match(/[()]/g).length;
                        if (parenthese_number % 2 == 1) {
                            event.preventDefault();
                            $(option_identificator_id + '_calcul_formula').css('border-color', 'red');
                            $(option_identificator_id + '_validation_message').append('<p class=\"error notice\" style=\"border-left:3px solid red;\">Close or remove parentheses ( )</p>');
                            $(option_identificator_class + "admin_loader_icon").hide();
                        }
                    }

                }

            });


        }


        openCity('London');
        $(".tablinks").first().toggleClass('active');

        display_input_type(option_identificator_id, option_identificator_class);
        admin_btn_switching(option_identificator_class);
        display_btn_number(option_identificator_id, option_identificator_class);
        upload_img_swp(option_identificator_class);
        reveal_filled_section(option_identificator, option_identificator_id, option_identificator_class);
        check_submit_validate(option_identificator_id);
     
    });


})(jQuery);

