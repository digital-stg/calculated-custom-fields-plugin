
<div style="display:none;" class="<?php echo esc_attr($option_identificator) . "_calculation_div";?>">

<?php

woocommerce_wp_textarea_input([
    'id' => esc_attr($option_identificator) . '_calcul_formula',
    'label' => __('Calcul formula', 'calculated-custom-fields') . ' ' . wp_kses('<span style="color:red">*</span> : ', $allowed_html_tags),
    'type' => 'text',
    'class' => 'required short',
    'placeholder' => '($user_value * 0.1) + ((4/2)-1)',
    'description' => wp_kses($calcul_help_tip, $allowed_html_tags),
]);

echo "<p class=\"form-field\">
<label>" . esc_html__('Information :', 'calculated-custom-fields') . "</label><span class=\"short cpm_info_field\">'<strong>\$user_value</strong>' " . esc_html__('is required in the calcul formula and refers to the value gived by the customer on the product page.', 'calculated-custom-fields') .
    "</span>
</p>";

echo "<p class=\"form-field\">
<label>" . esc_html__('Example :', 'calculated-custom-fields') . "</label>
<span class=\"short cpm_info_field\"><strong>(\$user_value * 0.1) + 10  </strong><br>" .
    esc_html__('In this case, if user write 100, 20 will be dynamically added to price ((100 * 0.1) + 10). 
If product initial regular price was 30$, his new price is 50$.', 'calculated-custom-fields') .
    "</span>
</p>";


woocommerce_wp_text_input([
    'id' => esc_attr($option_identificator) . '_calcul_number_min_value',
    'label' => __('Number min value : ', 'calculated-custom-fields'),
    'type' => 'number',
    'placeholder' => '0',
    'custom_attributes' => array(
        'step' => 'any',
        'min' => '0'
    )
]);

woocommerce_wp_text_input([
    'id' => esc_attr($option_identificator) . '_calcul_number_max_value',
    'label' => __('Number max value : ', 'calculated-custom-fields'),
    'type' => 'number',
    'placeholder' => __('no limit', 'calculated-custom-fields'),
    'custom_attributes' => array(
        'step' => 'any',
        'min' => '0'
    )
]);


woocommerce_wp_text_input([
    'id' => esc_attr($option_identificator) . '_calcul_number_step_value',
    'label' => __('Number step value : ', 'calculated-custom-fields'),
    'type' => 'number',
    'placeholder' => '0.1',
    'custom_attributes' => array(
        'step' => 'any',
        'min' => '0'
    )
]);

?>

<div class="<?php echo esc_attr($option_identificator) . "_add_calcul" ?>">

    <button type="button" class="<?php echo esc_attr($option_identificator) . "_add_calcul button" ?>">
        <?php esc_html_e('Add new calcul input', 'calculated-custom-fields'); ?>
    </button>

</div>

<div class="<?php echo esc_attr($option_identificator) . "_2nd_calcul" ?>" style="display:none;">

    <?php


    echo "<button type=\"button\" style=\"margin-bottom:10px\"  class=\"" . esc_attr($option_identificator) . "_remove_calcul button" . "\" >"
        . esc_html__('Remove second input', 'calculated-custom-fields') .
        "</button>";

    echo "<p class=\"form-field\">
<label>" . esc_html__('Information :', 'calculated-custom-fields') . "</label><span class=\"short cpm_info_field\"><strong>\$second_user_value</strong> "  . esc_html__('is now required in the calcul formula.', 'calculated-custom-fields') .
        "</span>
</p>";

    echo "<p class=\"form-field\">
<label>" . esc_html__('Example :', 'calculated-custom-fields') . "</label>
<span class=\"short cpm_info_field\"><strong>(\$user_value * \$second_user_value) + 10</strong><br>" .
        esc_html__('In this case, if user write 3 and 4, 22 will be dynamically added to price ((3 * 4) + 10).
If product initial regular price was 30$, his new price is 52$.', 'calculated-custom-fields') .
        "</span>
</p>";


    woocommerce_wp_text_input([
        'id' => esc_attr($option_identificator) . '_calcul_label_2',
        'label' => __('Option label 2', 'calculated-custom-fields') . ' ' . wp_kses('<span style="color:red">*</span> : ', $allowed_html_tags),
        'type' => 'text',
        'class' => 'required short',
        'placeholder' => 'Second input option label',
    ]);

    woocommerce_wp_text_input([
        'id' => esc_attr($option_identificator) . '_calcul_description_2',
        'label' => __('Input description 2 :', 'calculated-custom-fields'),
        'type' => 'text',
        'placeholder' => __('Second input description', 'calculated-custom-fields'),
    ]);

    woocommerce_wp_text_input([
        'id' => esc_attr($option_identificator) . '_input_calcul_helptip_2',
        'label' => __('Description helptip 2 :', 'calculated-custom-fields'),
        'type' => 'text',
        'placeholder' => __('Second input helptip', 'calculated-custom-fields'),
    ]);

    woocommerce_wp_text_input([
        'id' => esc_attr($option_identificator) . '_input_placeholder_2',
        'label' => __('Input placeholder 2 :', 'calculated-custom-fields'),
        'type' => 'text',
        'placeholder' => __('Second input placeholder', 'calculated-custom-fields'),
    ]);

?>

</div>
</div>