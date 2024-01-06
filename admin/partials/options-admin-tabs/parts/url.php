<div style="display:none;" class="<?php echo esc_attr($option_identificator) . "_url_div";?>">

<?php


woocommerce_wp_text_input([
    'id' => esc_attr($option_identificator) . '_url_extra_value',
    'label' => __('Option extra-cost', 'calculated-custom-fields') . ' ' . wp_kses('<span style="color:red">*</span> : ', $allowed_html_tags),
    'type' => 'number',
    'class' => 'required short',
    'placeholder' => __('Url extra-cost', 'calculated-custom-fields'),
    'custom_attributes' => array(
        'step' => 'any',
        'min' => '0'
    )
]);

woocommerce_wp_text_input([
    'id' => esc_attr($option_identificator) . '_url_min_length',
    'label' => __('Url min length : ', 'calculated-custom-fields'),
    'type' => 'number',
    'placeholder' => '0',
    'custom_attributes' => array(
        'step' => 'any',
        'min' => '0'
    )
]);

woocommerce_wp_text_input([
    'id' => esc_attr($option_identificator) . '_url_max_length',
    'label' => __('Url max length : ', 'calculated-custom-fields'),
    'type' => 'number',
    'placeholder' => '40',
    'custom_attributes' => array(
        'step' => 'any',
        'min' => '0'
    )
]);

woocommerce_wp_select([
    'id' => esc_attr($option_identificator) . '_url_pattern',
    'label' => __('Url pattern.', 'calculated-custom-fields') . ' ' . wp_kses('<span style="color:red">*</span> : ', $allowed_html_tags),
    'class' => 'required short',
    'options' => array(
        '' => 'Select a pattern',
        '1' => 'Accept http:// or https://',
        '2' => 'Only http://',
        '3' => 'Only https://',
    ),
]);

?>

</div>

