<div style="display:none;" class="<?php echo esc_attr($option_identificator) . "_upload_div";?>">

<?php


woocommerce_wp_text_input([
    'id' => esc_attr($option_identificator) . '_upload_value',
    'label' => __('Option extra-cost', 'calculated-custom-fields') . ' ' . wp_kses('<span style="color:red">*</span> : ', $allowed_html_tags),
    'type' => 'number',
    'placeholder' => __('Upload option extra-cost', 'calculated-custom-fields'),
    'class' => 'required short',
    'custom_attributes' => array(
        'step' => 'any',
        'min' => '0'
    )
]);

woocommerce_wp_text_input([
    'id' => esc_attr($option_identificator) . '_upload_max_size',
    'label' => __('Upload max size : ', 'calculated-custom-fields'),
    'placeholder' => esc_attr(ini_get("upload_max_filesize")),
    'type' => 'number',
    'custom_attributes' => array(
        'step' => 'any',
        'min' => '0',
    )
]);

?>

<div class="<?php echo esc_attr($option_identificator) . "_add_upload_restriction" ?>">

    <button type="button" class="<?php echo esc_attr($option_identificator) . "_add_upload_restriction button" ?>">
        <?php esc_html_e('Set file types restriction', 'calculated-custom-fields') ?>
    </button>

</div>

<div class="<?php echo esc_attr($option_identificator) . "_upload_restriction" ?>" style="display:none;">

    <?php


    echo "<button type=\"button\" class=\"" . esc_attr($option_identificator) . "_close_restriction button" . "\" >"
        . esc_html__('Close', 'calculated-custom-fields') . "&hairsp;<i class=\"fa-solid fa-close\"></i>
    </button>";

    echo "<div class=\"file_types_chk\">";

    echo "<button type=\"button\" class=\"_check_all button\">"
        . esc_html__('Toggle all mimes types', 'calculated-custom-fields') .
        "</button>";

    $mimes_types = get_allowed_mime_types();


    echo "<p class=\"form-field\">
    <label>" . esc_html__('Information :', 'calculated-custom-fields') . "</label>
    <span class=\"short cpm_info_field\">" .
    esc_html__('Check / uncheck to allow / disallow corresponding file type and restrict upload. By default, these 100 file mime types are disallowed. At least one type allowed is required.', 'calculated-custom-fields')  .
    "</span></p>";



    foreach ($mimes_types as $regex => $mime_types) {

        $product_mimes_types = $product->get_meta($option_identificator . "_" . $mime_types);

        if ($mime_types === "image/jpeg") {
            echo "<p class=\"form-field\"><label style=\"font-weight:bold;\">" . esc_html__('Image', 'calculated-custom-fields') . "</label></p>";
        }
        if ($mime_types === "video/x-ms-asf") {
            echo "<p class=\"form-field\"><label style=\"font-weight:bold;\">" . esc_html__('Video', 'calculated-custom-fields') . "</label></p>";
        }
        if ($mime_types === "text/plain") {
            echo "<p class=\"form-field\"><label style=\"font-weight:bold;\">" . esc_html__('Text', 'calculated-custom-fields') . "</label></p>";
        }
        if ($mime_types === "audio/mpeg") {
            echo "<p class=\"form-field\"><label style=\"font-weight:bold;\">" . esc_html__('Audio', 'calculated-custom-fields') . "</label></p>";
        }
        if ($mime_types === "application/rtf") {
            echo "<p class=\"form-field\"><label style=\"font-weight:bold;\">" . esc_html__('Application', 'calculated-custom-fields') . "</label></p>";
        }
        if ($mime_types === "font/ttf") {
            echo "<p class=\"form-field\"><label style=\"font-weight:bold;\">Plugin extra type</label></p>";
        }

        woocommerce_wp_checkbox([
            'id' => esc_attr($option_identificator) . '_mimes_checkboxes',
            'class' => esc_attr($option_identificator) . '_mimes_checkboxes',
            'name' => esc_attr($option_identificator) . '_mimes_types[]',
            'label' => __(substr($regex, 0, 10) . ' : ', 'calculated-custom-fields'),
            'description' => esc_attr(__($mime_types, 'calculated-custom-fields')),
            //if cbvalue === value => checkbox checked
            'cbvalue' => esc_attr(__($mime_types, 'calculated-custom-fields')),
            'value' => esc_attr(__($product_mimes_types, 'calculated-custom-fields')),
        ]);
    };

?>

</div>
</div>
</div>