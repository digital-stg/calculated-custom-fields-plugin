<div style="display:none;" class="<?php echo esc_attr($option_identificator) . "_textarea_div";?>">

<?php

woocommerce_wp_text_input([
    'id' => esc_attr($option_identificator) . '_text_area_extra_value',
    'label' => __('Option extra-cost', 'calculated-custom-fields') . ' ' . wp_kses('<span style="color:red">*</span> : ', $allowed_html_tags),
    'type' => 'number',
    'class' => 'required short',
    'placeholder' => __('Textarea extra-cost', 'calculated-custom-fields'),
    'custom_attributes' => array(
        'step' => 'any',
        'min' => '0'
    )
]);

woocommerce_wp_text_input([
    'id' => esc_attr($option_identificator) . '_text_area_max_length',
    'label' => __('Textarea max length : ', 'calculated-custom-fields'),
    'type' => 'number',
    'placeholder' => '260',
    'custom_attributes' => array(
        'step' => 'any',
        'min' => '0'
    )
]);

?>

</div>