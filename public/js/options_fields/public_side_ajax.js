(function( $ ) {

    var option_identificator = ["op1", "op2"];
   
    var array = {};

    $.each(option_identificator, function (index, id_value) {
        

        /*Click on custom input to upload */
        $("#" + id_value + "_click_upload").click(function () {
            $("#" + id_value + "_upload_input").click();
        });

        $("#" + id_value + "_upload_input").change(function () {

            var ajax_url = front_end_ajax.ajax_url;
            var nonce = front_end_ajax.nonce;

            $("#" + id_value + "_loader_spinner").show();

            $this = $(this);
            file_data = $(this).prop('files')[0];
            form_data = new FormData();
            fake_path = $(this).val();
            file_name_space = fake_path.substring(fake_path.lastIndexOf("\\") + 1, fake_path.length);
            file_name = file_name_space.replace(/ /g, "-");
            product_id = $('#product_id').val();
            option_cost_text = $('#option_text').val();

            form_data.append('file_name', file_name);
            form_data.append('file', file_data);
            form_data.append('upload_nonce', nonce);
            form_data.append('option_text', option_cost_text);
            form_data.append('product_id', product_id);
            form_data.append('option_id', option_identificator[index]);
            form_data.append('action', 'front_end_ajax');
            form_data.append('product_price', $('#product_price').val());
            form_data.append('quantity', $('[name=quantity]').val());
            form_data.append('upload_charge', $('.'+  id_value + "_output_upload_value").html().replace(/[^0-9.]/g, ""));

        
            $.ajax({
                url: ajax_url,
                type: 'POST',
                contentType: false,
                processData: false,
                data: form_data,
                success: function (response) {
                    if(response === "0") {$('.' + form_data.get('option_id')+'_upload_content_output').html('<p class="cp_output"><i class="fa-solid fa-triangle-exclamation"></i>&nbsp; File type error. You are not allowed to upload this file.</p>');} 
                    else {  
                        $('.' + form_data.get('option_id') + '_upload_content_output').html(response);
                        upload_charge = form_data.get('upload_charge');
                        product_price = form_data.get('product_price');
                        option_text = form_data.get('option_text');
                        option_id = form_data.get('option_id');

                        if(upload_charge > 0) {
                        display_new_price_after_upload(upload_charge, product_price, option_id, option_text);
                    } else {
                        //set value to 0 in local storage 
                        localStorage.setItem('Option_'+form_data.get('option_id').replace(/[^0-9.]/g, ""), "0");
                    }
                    }

                }
            
        })

    
    });


        function display_new_price_after_upload(upload_charge, product_price, option_id, option_text) {

      
            $('.cp_output').show();

            var option_id = option_id;

            if (option_id === "op1") { var a = 1; var b = 2;}
            else if (option_id === "op2") { var a = 2; var b = 1;}

            //Current option in local storage -> value
            localStorage.setItem('Option_' + a, array[option_id + '_option_charge']);

            //get the other options (0 or value)
            option_2_cost = parseFloat(localStorage.getItem('Option_' + b));

            var price_input_id = php_options_values.price_input_id;
            
            var output_id = $(price_input_id);

            var currency = front_end_ajax.currency;
            var currency_position = front_end_ajax.currency_position;
            var product_price = parseFloat(product_price);
            var upload_charge = parseFloat(upload_charge);

            var quantity_related = $('[name=quantity_related]').val();
            var quantity = parseFloat($('[name=quantity]').val());

            //set value in local storage
            localStorage.setItem('Option_'+form_data.get('option_id').replace(/[^0-9.]/g, ""), upload_charge);

            var price_front_0 = product_price + upload_charge + option_2_cost;
            var price_front = parseFloat(price_front_0 * quantity).toFixed(2);

            $("#" + id_value + "_loader_spinner").hide();

           if (currency_position == "right_space") {
                output_id.html(price_front + ' ' + currency);
                $("#" + id_value + "_output_upload_option").html(option_text + ' ' + parseFloat(upload_charge * quantity).toFixed(2) + ' ' + currency);
            } else if (currency_position == "left_space") {
                output_id.html(currency + ' ' + price_front);
                $("#" + id_value + "_output_upload_option").html(option_text + ' ' + currency + ' ' + parseFloat(upload_charge * quantity).toFixed(2));
            }
            else if (currency_position == "right") {
                output_id.html(price_front + currency);
                $("#" + id_value + "_output_upload_option").html(option_text + ' ' + parseFloat(upload_charge * quantity).toFixed(2) + currency);
            }
            else if (currency_position == "left") {
                output_id.html(currency + price_front);
                $("#" + id_value + "_output_upload_option").html(option_text + ' ' + currency + parseFloat(upload_charge * quantity).toFixed(2));
            } else {
                return;
            }

        }

    });


})( jQuery );