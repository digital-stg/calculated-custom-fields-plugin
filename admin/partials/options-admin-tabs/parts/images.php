
<div style="display:none;" class="<?php echo esc_attr($option_identificator) . "_image_div";?>">

<?php

        $img_1_id = "";
        if ($product->get_meta($option_identificator . '_img_1') && wp_get_attachment_image($product->get_meta($option_identificator . '_img_1'))) {
            $img_1_id = $product->get_meta($option_identificator . '_img_1');
        };
        $img_2_id = "";
        if ($product->get_meta($option_identificator . '_img_2')  && wp_get_attachment_image($product->get_meta($option_identificator . '_img_2'))) {
            $img_2_id = $product->get_meta($option_identificator . '_img_2');
        };
        $img_3_id = "";
        if ($product->get_meta($option_identificator . '_img_3') && wp_get_attachment_image($product->get_meta($option_identificator . '_img_3'))) {
            $img_3_id = $product->get_meta($option_identificator . '_img_3');
        };
        $img_4_id = "";
        if ($product->get_meta($option_identificator . '_img_4') && wp_get_attachment_image($product->get_meta($option_identificator . '_img_4'))) {
            $img_4_id = $product->get_meta($option_identificator . '_img_4');
        };



    echo '<p class="form-field"><label for="op1_img_1">Image ID 1</label> <a href="#" class="' .  esc_attr($option_identificator) . '_img-upl" style="margin-left:5px;">' . esc_html__('Upload image', 'calculated-custom-fields') . '</a>
<a href="#" class="' .  esc_attr($option_identificator) . '_img-rmv" style="display:none;margin-left:5px;">' . esc_html__('Remove image', 'calculated-custom-fields') . '</a>
<input type="text" class="required short" placeholder="Upload image ID" name="' .  esc_attr($option_identificator) . '_img_1" value="' . esc_attr($img_1_id) . '" readonly></p>';


woocommerce_wp_text_input([
    'id' => esc_attr($option_identificator) . '_img_name_1',
    'type' => 'text',
    'label' => __('Option label 1', 'calculated-custom-fields') . ' ' . wp_kses('<span style="color:red">*</span> : ', $allowed_html_tags),
    'wrapper_class' => 'show_if_simple',
    'class' => 'required short',
    'placeholder' => __('Image option label 1', 'calculated-custom-fields'),
    'custom_attributes' => array()
]);

woocommerce_wp_text_input([
    'id' => esc_attr($option_identificator) . '_img_value_1',
    'label' => __('Option extra-cost 1', 'calculated-custom-fields') . ' ' . wp_kses('<span style="color:red">*</span> : ', $allowed_html_tags),
    'type' => 'number',
    'class' => 'required short',
    'placeholder' => __('Image option cost 1', 'calculated-custom-fields'),
    'custom_attributes' => array(
        'step' => 'any',
        'min' => '0'
    )
]);


    echo '<p class="form-field"><label>Image ID 2</label><a href="#" class="' .  esc_attr($option_identificator) . '_img-upl" style="margin-left:5px;">' . esc_html__('Upload image', 'calculated-custom-fields') . '</a>
<a href="#" class="' .  esc_attr($option_identificator) . '_img-rmv" style="display:none;margin-left:5px;">' . esc_html__('Remove image', 'calculated-custom-fields') . '</a>
<input type="text" class="required short" placeholder="Upload image ID"  name="' .  esc_attr($option_identificator) . '_img_2" value="' . esc_attr($img_2_id) . '" readonly></p>';


woocommerce_wp_text_input([
    'id' => esc_attr($option_identificator) . '_img_name_2',
    'label' => __('Option label 2', 'calculated-custom-fields') . ' ' . wp_kses('<span style="color:red">*</span> : ', $allowed_html_tags),
    'wrapper_class' => 'show_if_simple',
    'class' => 'required short',
    'placeholder' => __('Image option label 2', 'calculated-custom-fields'),
]);

woocommerce_wp_text_input([
    'id' => esc_attr($option_identificator) . '_img_value_2',
    'label' => __('Option extra-cost 2', 'calculated-custom-fields') . ' ' . wp_kses('<span style="color:red">*</span> : ', $allowed_html_tags),
    'type' => 'number',
    'class' => 'required short',
    'placeholder' => __('Image option cost 2 :', 'calculated-custom-fields'),
    'custom_attributes' => array(
        'step' => 'any',
        'min' => '0'
    )
]);

?>

<div class="<?php echo esc_attr($option_identificator) . "_add_image" ?>" ;>

    <button type="button" class="<?php echo esc_attr($option_identificator) . "_add_image button" ?>">
        <?php esc_html_e('Add new image', 'calculated-custom-fields') ?>
    </button>

</div>

<div class="<?php echo esc_attr($option_identificator) . "_3rd_img" ?>" style="display:none;">

    <?php

    echo "<button type=\"button\" class=\"" . esc_attr($option_identificator) . "_remove_image button" . "\" >" . esc_html__('Remove Image 3', 'calculated-custom-fields') . "</button>";


        echo '<p class="form-field"><label>Image ID 3</label><a href="#" class="' .  esc_attr($option_identificator) . '_img-upl" style="margin-left:5px;">' . esc_html__('Upload image', 'calculated-custom-fields') . '</a>
<a href="#" class="' .  esc_attr($option_identificator) . '_img-rmv" style="display:none;margin-left:5px;">' . esc_html__('Remove image', 'calculated-custom-fields') . '</a>
<input type="text" class="required short" placeholder="Upload image ID"  name="' .  esc_attr($option_identificator) . '_img_3" value="' . esc_attr($img_3_id) . '" readonly></p>';
    

    woocommerce_wp_text_input([
        'id' => esc_attr($option_identificator) . '_img_name_3',
        'label' => __('Option label 3 :', 'calculated-custom-fields'),
        'wrapper_class' => 'show_if_simple',
        'class' => 'required short',
        'placeholder' => __('Image option label 3', 'calculated-custom-fields'),
    ]);

    woocommerce_wp_text_input([
        'id' => esc_attr($option_identificator) . '_img_value_3',
        'label' => __('Option extra-cost 3 :', 'calculated-custom-fields'),
        'type' => 'number',
        'placeholder' => __('Image option cost 3', 'calculated-custom-fields'),
        'custom_attributes' => array(
            'step' => 'any',
            'min' => '0'
        )
    ]);

    ?>

    <div class="<?php echo esc_attr($option_identificator) . "_add_image_2" ?>">

        <button type="button" class="<?php echo esc_attr($option_identificator) . "_add_image_2 button" ?>">
            <?php esc_html_e('Add new image', 'calculated-custom-fields') ?>
        </button>

    </div>

    <div class="<?php echo esc_attr($option_identificator) . "_4th_img" ?>" style="display:none;">

        <?php

        echo "<button type=\"button\" class=\"" . esc_attr($option_identificator) . "_remove_image_2 button" . "\">" . esc_html__('Remove Image 4', 'calculated-custom-fields') . "</button>";


            echo '<p class="form-field"><label>Image ID 4</label><a href="#" class="' .  esc_attr($option_identificator) . '_img-upl" style="margin-left:5px;">' . esc_html__('Upload image', 'calculated-custom-fields') . '</a>
<a href="#" class="' .  esc_attr($option_identificator) . '_img-rmv" style="display:none;margin-left:5px;">' . esc_html__('Remove image', 'calculated-custom-fields') . '</a>
<input type="text" class="required short" placeholder="Upload image id"  name="' .  esc_attr($option_identificator) . '_img_4" value="' . esc_attr($img_4_id) . '" readonly></p>';
        

        woocommerce_wp_text_input([
            'id' => esc_attr($option_identificator) . '_img_name_4',
            'label' => __('Option label 4 :', 'calculated-custom-fields'),
            'wrapper_class' => 'show_if_simple',
            'class' => 'required short',
            'placeholder' => __('Image option label 4', 'calculated-custom-fields'),
        ]);

        woocommerce_wp_text_input([
            'id' => esc_attr($option_identificator) . '_img_value_4',
            'label' => __('Option extra-cost 4 :', 'calculated-custom-fields'),
            'type' => 'number',
            'class' => 'required short',
            'placeholder' => __('Image option cost 4', 'calculated-custom-fields'),
            'custom_attributes' => array(
                'step' => 'any',
                'min' => '0'
            )
        ]);

?>
    </div>
    </div>
    </div>