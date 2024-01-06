
<div style="display:none;" class="<?php echo esc_attr($option_identificator) . "_radio_div";?>">

<?php

        woocommerce_wp_text_input([
            'id' =>  esc_attr($option_identificator) . '_radio_name_1',
            'label' => __('Option label 1', 'calculated-custom-fields') . ' ' . wp_kses('<span style="color:red">*</span> : ', $allowed_html_tags),
            'wrapper_class' => 'show_if_simple',
            'class' => 'required short',
            'placeholder' => __('Radio option label 1', 'calculated-custom-fields'),
        ]);

        woocommerce_wp_text_input([
            'id' =>  esc_attr($option_identificator) . '_radio_value_1',
            'label' => __('Option extra-cost 1', 'calculated-custom-fields') . ' ' . wp_kses('<span style="color:red">*</span> : ', $allowed_html_tags),
            'type' => 'number',
            'class' => 'required short',
            'placeholder' => __('Radio option cost 1', 'calculated-custom-fields'),
            'custom_attributes' => array(
                'step' => 'any',
                'min' => '0'
            )
        ]);

        woocommerce_wp_text_input([
            'id' =>  esc_attr($option_identificator) . '_radio_name_2',
            'label' => __('Option label 2', 'calculated-custom-fields') . ' ' . wp_kses('<span style="color:red">*</span> : ', $allowed_html_tags),
            'wrapper_class' => 'show_if_simple',
            'class' => 'required short',
            'placeholder' => __('Radio option label 2', 'calculated-custom-fields'),
        ]);

        woocommerce_wp_text_input([
            'id' =>  esc_attr($option_identificator) . '_radio_value_2',
            'label' => __('Option extra-cost 2', 'calculated-custom-fields') . ' ' . wp_kses('<span style="color:red">*</span> : ', $allowed_html_tags),
            'type' => 'number',
            'class' => 'required short',
            'placeholder' => __('Radio option cost 2', 'calculated-custom-fields'),
            'custom_attributes' => array(
                'step' => 'any',
                'min' => '0'
            )
        ]);

        ?>

        <div class="<?php echo esc_attr($option_identificator) . "_add_radio" ?>">

            <button type="button" class="<?php echo esc_attr($option_identificator) . "_add_radio button" ?>">
                <?php esc_html_e('Add new radio', 'calculated-custom-fields'); ?>
            </button>

        </div>

        <div class="<?php echo esc_attr($option_identificator) . "_3rd_radio" ?>" style="display:none;">

            <?php

            echo "<button type=\"button\" class=\"" . esc_attr($option_identificator) . "_remove_radio button" . "\" >"
                . esc_html__('Remove radio 3', 'calculated-custom-fields') .
                "</button>";

            woocommerce_wp_text_input([
                'id' =>  esc_attr($option_identificator) . '_radio_name_3',
                'label' => __('Option label 3 :', 'calculated-custom-fields'),
                'wrapper_class' => 'show_if_simple',
                'class' => 'required short',
                'placeholder' => __('Radio option label 3', 'calculated-custom-fields'),
            ]);

            woocommerce_wp_text_input([
                'id' =>  esc_attr($option_identificator) . '_radio_value_3',
                'label' => __('Option extra-cost 3 :', 'calculated-custom-fields'),
                'type' => 'number',
                'class' => 'required short',
                'placeholder' => __('Radio option cost 3', 'calculated-custom-fields'),
                'custom_attributes' => array(
                    'step' => 'any',
                    'min' => '0'
                )
            ]);

            echo "<button type=\"button\" class=\"" . esc_attr($option_identificator) . "_add_radio_2 button" . "\" >"
                . esc_html__('Add new radio', 'calculated-custom-fields') .
                "</button>";

            echo "<div style=\"display:none;\" class=\"" . esc_attr($option_identificator) . "_4th_option_radio\">";

            echo "<button type=\"button\" class=\"" . esc_attr($option_identificator) . "_remove_radio_2 button" . "\" >"
                . esc_html__('Remove radio ', 'calculated-custom-fields') .
                "</button>";

            woocommerce_wp_text_input([
                'id' => esc_attr($option_identificator) . '_radio_name_4',
                'label' => __('Option label 4 :', 'calculated-custom-fields'),
                'wrapper_class' => 'show_if_simple',
                'class' => 'required short',
                'placeholder' => __('Radio option label 4', 'calculated-custom-fields'),
            ]);

            woocommerce_wp_text_input([
                'id' =>  esc_attr($option_identificator) . '_radio_value_4',
                'label' => __('Option extra-cost 4 :', 'calculated-custom-fields'),
                'type' => 'number',
                'class' => 'required short',
                'placeholder' => __('Radio option cost 4', 'calculated-custom-fields'),
                'custom_attributes' => array(
                    'step' => 'any',
                    'min' => '0'
                )
            ]);

    ?>
        </div>
        </div>
        </div>