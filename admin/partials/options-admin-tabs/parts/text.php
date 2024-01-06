
<div style="display:none;" class="<?php echo esc_attr($option_identificator) . "_text_div";?>">

<?php

woocommerce_wp_text_input([
    'id' => esc_attr($option_identificator) . '_text_input_extra_value',
    'label' => __('Option extra-cost', 'calculated-custom-fields') . ' ' . wp_kses('<span style="color:red">*</span> : ', $allowed_html_tags),
    'type' => 'number',
    'class' => 'required short',
    'placeholder' => __('Text extra-cost', 'calculated-custom-fields'),
    'custom_attributes' => array(
        'step' => 'any',
        'min' => '0'
    )
]);

woocommerce_wp_text_input([
    'id' => esc_attr($option_identificator) . '_text_input_min_length',
    'label' => __('Text min length :', 'calculated-custom-fields'),
    'type' => 'number',
    'placeholder' => '0',
    'custom_attributes' => array(
        'step' => 'any',
        'min' => '0'
    )
]);

woocommerce_wp_text_input([
    'id' => esc_attr($option_identificator) . '_text_input_max_length',
    'label' => __('Text max length :', 'calculated-custom-fields'),
    'type' => 'number',
    'placeholder' => '40',
    'custom_attributes' => array(
        'step' => 'any',
        'min' => '0'
    )
]);

woocommerce_wp_checkbox([
    'id' => esc_attr($option_identificator) . '_only_letters',
    'label' => __('Only letters :', 'calculated-custom-fields'),
]);

?>

</div>

