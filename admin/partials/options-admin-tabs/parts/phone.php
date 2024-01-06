<div style="display:none;" class="<?php echo esc_attr($option_identificator) . "_phone_div";?>">

<?php


                            woocommerce_wp_text_input([
                                'id' => esc_attr($option_identificator) . '_phone_extra_value',
                                'label' => __('Option extra-cost', 'calculated-custom-fields') . ' ' . wp_kses('<span style="color:red">*</span> : ', $allowed_html_tags),
                                'type' => 'number',
                                'placeholder' => __('Phone option extra-cost', 'calculated-custom-fields'),
                                'class' => 'required short',
                                'custom_attributes' => array(
                                    'step' => 'any',
                                    'min' => '0'
                                )
                            ]);


                            woocommerce_wp_text_input([
                                'id' => esc_attr($option_identificator) . '_phone_minlength',
                                'label' => __('Phone min length : ', 'calculated-custom-fields'),
                                'type' => 'number',
                                'placeholder' => '7',
                                'custom_attributes' => array(
                                    'step' => 'any',
                                    'min' => '0'
                                )
                            ]);

                            woocommerce_wp_text_input([
                                'id' => esc_attr($option_identificator) . '_phone_maxlength',
                                'label' => __('Phone max length : ', 'calculated-custom-fields'),
                                'type' => 'number',
                                'placeholder' => '30',
                                'custom_attributes' => array(
                                    'step' => 'any',
                                    'min' => '0'
                                )
                            ]);

                            ?>

                            <div class="<?php echo esc_attr($option_identificator) . "_national_phone" ?>">

                                <?php

                                require_once ABSPATH . '/wp-content/plugins/' . $this->plugin_name . '/public/data/country-code-array.php';

                                $choose_national_code = $product->get_meta($option_identificator . '_national_code');


                                foreach ($countryArray as $index => $value) {
                                    $admin_country[null] = 'Select a default country';
                                    $admin_country[$index] = ucfirst(strtolower($value['name'])) . ' +' . $value['code'];
                                };


                                if ($choose_national_code === "") {

                                    woocommerce_wp_select([
                                        'id' => esc_attr($option_identificator) . '_national_code',
                                        'label' => __('Dialling code :', 'calculated-custom-fields'),
                                        'class' => 'required short',
                                        'placeholder' => __('Select default country'),
                                        'value' => esc_attr($admin_country[null]),
                                        'options' => array_map('esc_attr', $admin_country),
                                    ]);
                                } else {
                                    woocommerce_wp_select([
                                        'id' => esc_attr($option_identificator) . '_national_code',
                                        'label' => __('Dialling code :', 'calculated-custom-fields'),
                                        'class' => 'required short',
                                        //'cbvalue' => $choose_national_code,
                                        'value' => esc_attr($choose_national_code),
                                        'options' => array_map('esc_attr', $admin_country),
                                    ]);
                                };
?>

                            </div>
                            </div>