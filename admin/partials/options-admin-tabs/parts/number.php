
<div style="display:none;" class="<?php echo esc_attr($option_identificator) . "_number_div";?>">

<?php

woocommerce_wp_text_input([
    'id' => esc_attr($option_identificator) . '_number_input_extra_value',
    'label' => __('Option extra-cost', 'calculated-custom-fields') . ' ' . wp_kses('<span style="color:red">*</span> : ', $allowed_html_tags),
    'type' => 'number',
    'class' => 'required short',
    'placeholder' => __('Number extra-cost', 'calculated-custom-fields'),
    'custom_attributes' => array(
        'step' => 'any',
        'min' => '0'
    )
]);

woocommerce_wp_text_input([
    'id' => esc_attr($option_identificator) . '_number_min_value',
    'label' => __('Number min value : ', 'calculated-custom-fields'),
    'type' => 'number',
    'placeholder' => '0',
    'custom_attributes' => array(
        'step' => 'any',
        'min' => '0'
    )
]);

woocommerce_wp_text_input([
    'id' => esc_attr($option_identificator) . '_number_max_value',
    'label' => __('Number max value : ', 'calculated-custom-fields'),
    'type' => 'number',
    'placeholder' => '100000000',
    'custom_attributes' => array(
        'step' => 'any',
        'min' => '0'
    )
]);


woocommerce_wp_text_input([
    'id' => esc_attr($option_identificator) . '_number_step_value',
    'label' => __('Number step value : ', 'calculated-custom-fields'),
    'type' => 'number',
    'placeholder' => '1',
    'custom_attributes' => array(
        'step' => 'any',
        'min' => '0'
    )
]);

?>

</div>