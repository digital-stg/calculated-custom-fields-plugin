<div style="display:none;" class="<?php echo esc_attr($option_identificator) . "_select_div";?>">

<?php


woocommerce_wp_text_input([
    'id' => esc_attr($option_identificator) . '_select_no_option',
    'label' => __('Default text :', 'calculated-custom-fields'),
    'wrapper_class' => 'show_if_simple',
    'placeholder' => __('Write your select default text', 'calculated-custom-fields'),
]);

woocommerce_wp_text_input([
    'id' => esc_attr($option_identificator) . '_sub_1_name',
    'label' => __('Option label 1', 'calculated-custom-fields') . ' ' . wp_kses('<span style="color:red">*</span> : ', $allowed_html_tags),
    'wrapper_class' => 'show_if_simple',
    'class' => 'required short',
    'placeholder' => __('Select option label 1', 'calculated-custom-fields'),
]);

woocommerce_wp_text_input([
    'id' => esc_attr($option_identificator) . '_Sub_1_value',
    'label' => __('Option extra-cost 1', 'calculated-custom-fields') . ' ' . wp_kses('<span style="color:red">*</span> : ', $allowed_html_tags),
    'type' => 'number',
    'class' => 'required short',
    'placeholder' => __('Select option cost 1', 'calculated-custom-fields'),
    'custom_attributes' => array(
        'step' => 'any',
        'min' => '0'
    )
]);

woocommerce_wp_text_input([
    'id' => esc_attr($option_identificator) . '_sub_2_name',
    'label' => __('Option label 2', 'calculated-custom-fields') . ' ' . wp_kses('<span style="color:red">*</span> : ', $allowed_html_tags),
    'wrapper_class' => 'show_if_simple',
    'class' => 'required short',
    'placeholder' => __('Select option label 2', 'calculated-custom-fields'),
]);

woocommerce_wp_text_input([
    'id' => esc_attr($option_identificator) . '_Sub_2_value',
    'label' => __('Option extra-cost 2', 'calculated-custom-fields') . ' ' . wp_kses('<span style="color:red">*</span> : ', $allowed_html_tags),
    'type' => 'number',
    'class' => 'required short',
    'placeholder' => __('Select option cost 2', 'calculated-custom-fields'),
    'custom_attributes' => array(
        'step' => 'any',
        'min' => '0'
    )
]);

?>

<div class="<?php echo esc_attr($option_identificator) . "_add_select"; ?>">

    <button type="button" class="<?php echo esc_attr($option_identificator) . "_add_select button"; ?>">
        <?php esc_html_e('Add sub option', 'calculated-custom-fields'); ?>
    </button>

</div>

<div class="<?php echo esc_attr($option_identificator) . "_3rd_option"; ?>" style="display:none;">

    <?php

    echo "<button type=\"button\" class=\"" . esc_attr($option_identificator) . "_remove_select button" . "\" >"
        . esc_html__('Remove select 3', 'calculated-custom-fields') .
        "</button>";

    woocommerce_wp_text_input([
        'id' => esc_attr($option_identificator) . '_sub_3_name',
        'label' => __('Option label 3 :', 'calculated-custom-fields'),
        'wrapper_class' => 'show_if_simple',
        'class' => 'required short',
        'placeholder' => __('Select option label 3', 'calculated-custom-fields'),
    ]);

    woocommerce_wp_text_input([
        'id' =>  esc_attr($option_identificator) . '_Sub_3_value',
        'label' => __('Option extra-cost 3 :', 'calculated-custom-fields'),
        'type' => 'number',
        'class' => 'required short',
        'placeholder' => __('Select option cost 3', 'calculated-custom-fields'),
        'custom_attributes' => array(
            'step' => 'any',
            'min' => '0'
        )
    ]);


    echo "<button type=\"button\" class=\"" . esc_attr($option_identificator) . "_add_select_2 button" . "\" >"
        . esc_html__('Add sub option', 'calculated-custom-fields') .
        "</button>";

    echo "<div style=\"display:none;\" class=\"" . esc_attr($option_identificator) . "_4th_option\">";

    echo "<button type=\"button\" class=\"" . esc_attr($option_identificator) . "_remove_select_2 button" . "\" >"
        . esc_html__('Remove select 4', 'calculated-custom-fields') .
        "</button>";

    woocommerce_wp_text_input([
        'id' =>  esc_attr($option_identificator) . '_sub_4_name',
        'label' => __('Option label 4 :', 'calculated-custom-fields'),
        'wrapper_class' => 'show_if_simple',
        'class' => 'required short',
        'placeholder' => __('Select option label 4', 'calculated-custom-fields'),
    ]);

    woocommerce_wp_text_input([
        'id' =>  esc_attr($option_identificator) . '_Sub_4_value',
        'label' => __('Option extra-cost 4 :', 'calculated-custom-fields'),
        'type' => 'number',
        'class' => 'required short',
        'placeholder' => __('Select option cost 4', 'calculated-custom-fields'),
        'custom_attributes' => array(
            'step' => 'any',
            'min' => '0'
        )
    ]);

    echo "<button type=\"button\" class=\"" . esc_attr($option_identificator) . "_add_select_3 button" . "\" >"
        . esc_html__('Add sub option', 'calculated-custom-fields') .
        "</button>";

    echo "<div style=\"display:none;\" class=\"" . esc_attr($option_identificator) . "_5th_option\">";

    echo "<button type=\"button\" class=\"" . esc_attr($option_identificator) . "_remove_select_3 button" . "\" >"
        . esc_html__('Remove select 5', 'calculated-custom-fields') .
        "</button>";

    woocommerce_wp_text_input([
        'id' =>  esc_attr($option_identificator) . '_sub_5_name',
        'label' => __('Option label 5 :', 'calculated-custom-fields'),
        'wrapper_class' => 'show_if_simple',
        'class' => 'required short',
        'placeholder' => __('Select option label 5', 'calculated-custom-fields'),
    ]);

    woocommerce_wp_text_input([
        'id' =>  esc_attr($option_identificator) . '_Sub_5_value',
        'label' => __('Option extra-cost 5 :', 'calculated-custom-fields'),
        'type' => 'number',
        'class' => 'required short',
        'placeholder' => __('Select option cost 5', 'calculated-custom-fields'),
        'custom_attributes' => array(
            'step' => 'any',
            'min' => '0'
        )
    ]);

    echo "<button type=\"button\" class=\"" . esc_attr($option_identificator) . "_add_select_4 button" . "\" >"
        . esc_html__('Add sub option', 'calculated-custom-fields') .
        "</button>";

    echo "<div style=\"display:none;\" class=\"" . esc_attr($option_identificator) . "_6th_option\">";

    echo "<button type=\"button\" class=\"" . esc_attr($option_identificator) . "_remove_select_4 button" . "\" >"
        . esc_html__('Remove select 6', 'calculated-custom-fields') .
        "</button>";

    woocommerce_wp_text_input([
        'id' =>  esc_attr($option_identificator) . '_sub_6_name',
        'label' => __('Option label 6 :', 'calculated-custom-fields'),
        'wrapper_class' => 'show_if_simple',
        'class' => 'required short',
        'placeholder' => __('Select option label 6', 'calculated-custom-fields'),
    ]);

    woocommerce_wp_text_input([
        'id' =>  esc_attr($option_identificator) . '_Sub_6_value',
        'label' => __('Option extra-cost 6 :', 'calculated-custom-fields'),
        'type' => 'number',
        'class' => 'required short',
        'placeholder' => __('Select option cost 6', 'calculated-custom-fields'),
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
</div>
