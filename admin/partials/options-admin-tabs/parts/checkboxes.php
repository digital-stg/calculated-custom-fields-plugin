
<div style="display:none;" class="<?php echo esc_attr($option_identificator) . "_checkbox_div";?>">

<?php

woocommerce_wp_text_input([
    'id' => esc_attr($option_identificator) . '_checkbox_name',
    'label' => __('Option label 1', 'calculated-custom-fields') . ' ' . wp_kses('<span style="color:red">*</span> : ', $allowed_html_tags),
    'type' => 'text',
    'class' => 'required short',
    'placeholder' => __('Checkbox option label 1', 'calculated-custom-fields'),
]);

woocommerce_wp_text_input([
    'id' => esc_attr($option_identificator) . '_field_value',
    'label' => __('Option extra-cost 1', 'calculated-custom-fields') . ' ' . wp_kses('<span style="color:red">*</span> : ', $allowed_html_tags),
    'type' => 'number',
    'class' => 'required short',
    'placeholder' => __('Checkbox option cost 1', 'calculated-custom-fields'),
    'custom_attributes' => array(
        'step' => 'any',
        'min' => '0'
    )
]);

?>

<div class="<?php echo esc_attr($option_identificator) . "_add_chk"; ?>">

    <button type="button" class="<?php echo esc_attr($option_identificator) . "_add_chk button"; ?>">
        <?php esc_html_e('Add new checkbox', 'calculated-custom-fields'); ?>
    </button>

</div>

<div class="<?php echo esc_attr($option_identificator) . "_2nd_checkbox"; ?>" style="display:none;">

    <?php

    echo "<button type=\"button\" class=\"" . esc_attr($option_identificator) . "_remove_chk button" . "\" >"
        . esc_html__('Remove checkbox 2', 'calculated-custom-fields') .
        "</button>";


    woocommerce_wp_text_input([
        'id' => esc_attr($option_identificator) . '_checkbox_name_2',
        'label' => __('Option label 2 :', 'calculated-custom-fields'),
        'type' => 'text',
        'class' => 'required short',
        'placeholder' => __('Checkbox option label 2', 'calculated-custom-fields'),
    ]);


    woocommerce_wp_text_input([
        'id' =>  esc_attr($option_identificator) . '_field_value_2',
        'label' => __('Option extra-cost 2 :', 'calculated-custom-fields'),
        'type' => 'number',
        'class' => 'required short',
        'placeholder' => __('Checkbox option cost 2', 'calculated-custom-fields'),
        'custom_attributes' => array(
            'step' => 'any',
            'min' => '0'
        )
    ]);

    echo "<button type=\"button\" class=\"" . esc_attr($option_identificator) . "_add_chk_2 button" . "\" >"
        . esc_html__('Add new checkbox', 'calculated-custom-fields') .
        "</button>";

    echo "<div style=\"display:none;\" class=" . esc_attr($option_identificator) . "_3rd_checkbox>";

    echo "<button type=\"button\" class=\"" . esc_attr($option_identificator) . "_remove_chk_2 button" . "\" >"
        . esc_html__('Remove checkbox 3', 'calculated-custom-fields') .
        "</button>";

    woocommerce_wp_text_input([
        'id' => esc_attr($option_identificator) . '_checkbox_name_3',
        'label' => __('Option label 3 :', 'calculated-custom-fields'),
        'type' => 'text',
        'class' => 'required short',
        'placeholder' => __('Checkbox option label 3', 'calculated-custom-fields'),
    ]);

    woocommerce_wp_text_input([
        'id' => esc_attr($option_identificator) . '_field_value_3',
        'label' => __('Option extra-cost 3 :', 'calculated-custom-fields'),
        'type' => 'number',
        'class' => 'required short',
        'placeholder' => __('Checkbox option cost 3', 'calculated-custom-fields'),
        'custom_attributes' => array(
            'step' => 'any',
            'min' => '0'
        )
    ]);

    echo "<button type=\"button\" class=\"" . esc_attr($option_identificator) . "_add_chk_3 button" . "\" >"
        . esc_html__('Add new checkbox', 'calculated-custom-fields') .
        "</button>";

    echo "<div style=\"display:none;\" class=\"" . esc_attr($option_identificator) . "_4th_checkbox\">";

    echo "<button type=\"button\" class=\"" . esc_attr($option_identificator) . "_remove_chk_3 button" . "\" >"
        . esc_html__('Remove checkbox 4', 'calculated-custom-fields') .
        "</button>";

    woocommerce_wp_text_input([
        'id' => esc_attr($option_identificator) . '_checkbox_name_4',
        'label' => __('Option label 4 :', 'calculated-custom-fields'),
        'type' => 'text',
        'class' => 'required short',
        'placeholder' => __('Checkbox option label 4', 'calculated-custom-fields'),
    ]);

    woocommerce_wp_text_input([
        'id' => esc_attr($option_identificator) . '_field_value_4',
        'label' => __('Option extra-cost 4 :', 'calculated-custom-fields'),
        'type' => 'number',
        'class' => 'required short',
        'placeholder' => __('Checkbox option cost 4', 'calculated-custom-fields'),
        'custom_attributes' => array(
            'step' => 'any',
            'min' => '0'
        )
    ]);
?>

</div>
</div>
</div>
</div>