
<div style="display:none;" class="<?php echo esc_attr($option_identificator) . "_button_swap_div";?>">

<?php


                    woocommerce_wp_select([
                        'id' => esc_attr($option_identificator) . '_btnswap_number',
                        'label' => __('Buttons number :', 'calculated-custom-fields'),
                        'style' => 'background-color:#f7f7f7;',
                        'placeholder' => __('Number of displayed buttons', 'calculated-custom-fields'),
                        'options' => array(
                            '' => '3',
                            '1' => '4',
                            '2' => '5',
                            '3' => '6',
                        )
                    ]);

                    woocommerce_wp_text_input([
                        'id' =>  esc_attr($option_identificator) . '_btnswap_name_1',
                        'label' => __('Option label 1', 'calculated-custom-fields') . ' ' . wp_kses('<span style="color:red">*</span> : ', $allowed_html_tags),
                        'wrapper_class' => 'show_if_simple',
                        'class' => 'required short',
                        'placeholder' => __('Button option label 1', 'calculated-custom-fields'),
                    ]);

                    woocommerce_wp_text_input([
                        'id' =>  esc_attr($option_identificator) . '_btnswap_value_1',
                        'label' => __('Option extra-cost 1', 'calculated-custom-fields') . ' ' . wp_kses('<span style="color:red">*</span> : ', $allowed_html_tags),
                        'type' => 'number',
                        'class' => 'required short',
                        'placeholder' => __('Button option cost 1', 'calculated-custom-fields'),
                        'custom_attributes' => array(
                            'step' => 'any',
                            'min' => '0'
                        )
                    ]);

                    woocommerce_wp_text_input([
                        'id' => esc_attr($option_identificator) . '_btnswap_name_2',
                        'label' => __('Option label 2', 'calculated-custom-fields') . ' ' . wp_kses('<span style="color:red">*</span> : ', $allowed_html_tags),
                        'wrapper_class' => 'show_if_simple',
                        'class' => 'required short',
                        'placeholder' => __('Button option label 2', 'calculated-custom-fields'),
                    ]);

                    woocommerce_wp_text_input([
                        'id' =>  esc_attr($option_identificator) . '_btnswap_value_2',
                        'label' => __('Option extra-cost 2', 'calculated-custom-fields') . ' ' . wp_kses('<span style="color:red">*</span> : ', $allowed_html_tags),
                        'type' => 'number',
                        'class' => 'required short',
                        'placeholder' => __('Button option cost 2', 'calculated-custom-fields'),
                        'custom_attributes' => array(
                            'step' => 'any',
                            'min' => '0'
                        )
                    ]);

                    woocommerce_wp_text_input([
                        'id' =>  esc_attr($option_identificator) . '_btnswap_name_3',
                        'label' => __('Option label 3', 'calculated-custom-fields') . ' ' . wp_kses('<span style="color:red">*</span> : ', $allowed_html_tags),
                        'wrapper_class' => 'show_if_simple',
                        'class' => 'required short',
                        'placeholder' => __('Button option label 3', 'calculated-custom-fields'),
                    ]);

                    woocommerce_wp_text_input([
                        'id' =>  esc_attr($option_identificator) . '_btnswap_value_3',
                        'label' => __('Option extra-cost 3', 'calculated-custom-fields') . ' ' . wp_kses('<span style="color:red">*</span> : ', $allowed_html_tags),
                        'type' => 'number',
                        'class' => 'required short',
                        'placeholder' => __('Button option cost 3', 'calculated-custom-fields'),
                        'custom_attributes' => array(
                            'step' => 'any',
                            'min' => '0'
                        )
                    ]);

                    echo "<div style=\"display:none;\" class=\"" . esc_attr($option_identificator) . "_button_swap_4" . "\">";

                    woocommerce_wp_text_input([
                        'id' =>  esc_attr($option_identificator) . '_btnswap_name_4',
                        'label' => __('Option label 4', 'calculated-custom-fields') . ' ' . wp_kses('<span style="color:red">*</span> : ', $allowed_html_tags),
                        'wrapper_class' => 'show_if_simple',
                        'class' => 'required short',
                        'placeholder' => __('Button option label 4', 'calculated-custom-fields'),
                    ]);

                    woocommerce_wp_text_input([
                        'id' =>  esc_attr($option_identificator) . '_btnswap_value_4',
                        'label' => __('Option extra-cost 4', 'calculated-custom-fields') . ' ' . wp_kses('<span style="color:red">*</span> : ', $allowed_html_tags),
                        'type' => 'number',
                        'class' => 'required short',
                        'placeholder' => __('Button option cost 4', 'calculated-custom-fields'),
                        'custom_attributes' => array(
                            'step' => 'any',
                            'min' => '0'
                        )
                    ]);


                    echo "</div>";


                    echo "<div style=\"display:none;\" class=\"" . esc_attr($option_identificator) . "_button_swap_5" . "\">";

                    woocommerce_wp_text_input([
                        'id' =>  esc_attr($option_identificator) . '_btnswap_name_5',
                        'label' => __('Option label 5', 'calculated-custom-fields') . ' ' . wp_kses('<span style="color:red">*</span> : ', $allowed_html_tags),
                        'wrapper_class' => 'show_if_simple',
                        'class' => 'required short',
                        'placeholder' => __('Button option label 5', 'calculated-custom-fields'),
                    ]);


                    woocommerce_wp_text_input([
                        'id' => esc_attr($option_identificator) . '_btnswap_value_5',
                        'label' => __('Option extra-cost 5', 'calculated-custom-fields') . ' ' . wp_kses('<span style="color:red">*</span> : ', $allowed_html_tags),
                        'type' => 'number',
                        'class' => 'required short',
                        'placeholder' => __('Button option cost 5', 'calculated-custom-fields'),
                        'custom_attributes' => array(
                            'step' => 'any',
                            'min' => '0'
                        )
                    ]);

                    echo "</div>";

                    echo "<div style=\"display:none;\" class=\"" . esc_attr($option_identificator) . "_button_swap_6" . "\">";

                    woocommerce_wp_text_input([
                        'id' =>  esc_attr($option_identificator) . '_btnswap_name_6',
                        'label' => __('Option label 6', 'calculated-custom-fields') . ' ' . wp_kses('<span style="color:red">*</span> : ', $allowed_html_tags),
                        'wrapper_class' => 'show_if_simple',
                        'class' => 'required short',
                        'placeholder' => __('Button option label 6', 'calculated-custom-fields'),
                    ]);


                    woocommerce_wp_text_input([
                        'id' =>  esc_attr($option_identificator) . '_btnswap_value_6',
                        'label' => __('Option extra-cost 6', 'calculated-custom-fields') . ' ' . wp_kses('<span style="color:red">*</span> : ', $allowed_html_tags),
                        'type' => 'number',
                        'class' => 'required short',
                        'placeholder' => __('Button option cost 6', 'calculated-custom-fields'),
                        'custom_attributes' => array(
                            'step' => 'any',
                            'min' => '0'
                        )
                    ]);


           ?>

</div>
</div>