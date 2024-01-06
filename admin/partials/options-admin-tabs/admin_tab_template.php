<?php

/**
 * Options settings display (product data panel tabs).
 *
 * @link       https://digital-stg.com
 * @since      1.0.0
 * @author     Digital STG <contact@digital-stg.com>
 * @package    Calculated_Custom_Fields
 * @subpackage Calculated_Custom_Fields/admin/partials/
 * 
 */

$allowed_html_tags = ['span' => array('style' => array(), 'id' => array(), 'class' => array(), 'data-tip' => array(),), 'b' => array(), 'i' => array(
    'class' => array(),
), 'a' => array('target' => array(), 'rel' => array(), 'href' => array(), 'id' => array(), 'class' => array(),),];

$inputType = $product->get_meta($option_identificator . '_field_type');


if($option_identificator == "op1") {
    $option_number = "1";
} else {
    $option_number = "2";
};



$product_url = get_permalink($post->id);
// target="_blank" => open link in a new tab, rel="noopener noreferrer" => prevent tabnabbing
$view_product_btn = "<a target=\"_blank\" rel=\"noopener noreferrer\" href=" . $product_url . " id=\"top_preview_btn\" class=\"preview button\">" . __('View Product', 'calculated-custom-fields') . "</a>";

if ($inputType === "1") {
    echo "<div class=\"top_info_div\"><span><i class=\"fa fa-tv title_fa\"></i> Field " . esc_html($option_number) . " => " . esc_html__("Text input displayed.", 'calculated-custom-fields') . "</span>" . wp_kses($view_product_btn, $allowed_html_tags) . "</div>";
} else if ($inputType === "2") {
    echo "<div class=\"top_info_div\"><span><i class=\"fa fa-tv title_fa\"></i> Field " . esc_html($option_number) . " => " . esc_html__("Select dropdown displayed.", 'calculated-custom-fields') . "</span>" . wp_kses($view_product_btn, $allowed_html_tags) . "</div>";
} else if ($inputType === "3") {
    echo "<div class=\"top_info_div\"><span><i class=\"fa fa-tv title_fa\"></i> Field " . esc_html($option_number) . " => " . esc_html__("Checkbox input displayed.", 'calculated-custom-fields') . "</span>" . wp_kses($view_product_btn, $allowed_html_tags) . "</div>";
} else if ($inputType === "4") {
    echo "<div class=\"top_info_div\"><span><i class=\"fa fa-tv title_fa\"></i> Field " . esc_html($option_number) . " => " . esc_html__("Text area input displayed.", 'calculated-custom-fields') . "</span>" . wp_kses($view_product_btn, $allowed_html_tags) . "</div>";
} else if ($inputType === "5") {
    echo "<div class=\"top_info_div\"><span><i class=\"fa fa-tv title_fa\"></i> Field " . esc_html($option_number) . " => " . esc_html__("Radio input displayed.", 'calculated-custom-fields') . "</span>" . wp_kses($view_product_btn, $allowed_html_tags) . "</div>";
} else if ($inputType === "6") {
    echo "<div class=\"top_info_div\"><span><i class=\"fa fa-tv title_fa\"></i> Field " . esc_html($option_number) . " => " . esc_html__("Number input displayed.", 'calculated-custom-fields') . "</span>" . wp_kses($view_product_btn, $allowed_html_tags) . "</div>";
} else if ($inputType === "7") {
    echo "<div class=\"top_info_div\"><span><i class=\"fa fa-tv title_fa\"></i> Field " . esc_html($option_number) . " => " . esc_html__("Image swap displayed.", 'calculated-custom-fields') . "</span>" . wp_kses($view_product_btn, $allowed_html_tags) . "</div>";
} else if ($inputType === "8") {
    echo "<div class=\"top_info_div\"><span><i class=\"fa fa-tv title_fa\"></i> Field " . esc_html($option_number) . " => " . esc_html__("Email input displayed.", 'calculated-custom-fields') . "</span>" . wp_kses($view_product_btn, $allowed_html_tags) . "</div>";
} else if ($inputType === "9") {
    echo "<div class=\"top_info_div\"><span><i class=\"fa fa-tv title_fa\"></i> Field " . esc_html($option_number) . " => " . esc_html__("Button swap displayed.", 'calculated-custom-fields') . "</span>" . wp_kses($view_product_btn, $allowed_html_tags) . "</div>";
} else if ($inputType === "10") {
    echo "<div class=\"top_info_div\"><span><i class=\"fa fa-tv title_fa\"></i> Field " . esc_html($option_number) . " => " . esc_html__("Color input displayed.", 'calculated-custom-fields') . "</span>" . wp_kses($view_product_btn, $allowed_html_tags) . "</div>";
} else if ($inputType === "11") {
    echo "<div class=\"top_info_div\"><span><i class=\"fa fa-tv title_fa\"></i> Field " . esc_html($option_number) . " => " . esc_html__("Calculation input displayed.", 'calculated-custom-fields') . "</span>" . wp_kses($view_product_btn, $allowed_html_tags) . "</div>";
} else if ($inputType === "12") {
    echo "<div class=\"top_info_div\"><span><i class=\"fa fa-tv title_fa\"></i> Field " . esc_html($option_number) . " => " . esc_html__("Url input displayed.", 'calculated-custom-fields') . "</span>" . wp_kses($view_product_btn, $allowed_html_tags) . "</div>";
} else if ($inputType === "13") {
    echo "<div class=\"top_info_div\"><span><i class=\"fa fa-tv title_fa\"></i> Field " . esc_html($option_number) . " => " . esc_html__("Upload input displayed.", 'calculated-custom-fields') . "</span>" . wp_kses($view_product_btn, $allowed_html_tags) . "</div>";
} else if ($inputType === "14") {
    echo "<div class=\"top_info_div\"><span><i class=\"fa fa-tv title_fa\"></i> Field " . esc_html($option_number) . " => " . esc_html__("Phone input displayed.", 'calculated-custom-fields') . "</span>" . wp_kses($view_product_btn, $allowed_html_tags) . "</div>";
} else {
    echo "<div class=\"top_info_div\"><span> <i class=\"fa fa-eye-slash title_fa\"></i> Field " . esc_html($option_number) . " => " . esc_html__("No input currently displayed.", 'calculated-custom-fields') . "</span>" . wp_kses($view_product_btn, $allowed_html_tags) . "</div>";
};


woocommerce_wp_text_input([
    'id' => esc_attr($option_identificator) . '_option_name',
    'label' => __('Option label', 'calculated-custom-fields') . ' '  . wp_kses('<span style="color:red">*</span> : ', $allowed_html_tags),
    'wrapper_class' => 'show_if_simple',
    'class' => 'required short',
    'placeholder' => __('Write your option label', 'calculated-custom-fields'),
]);


woocommerce_wp_select([
    'id' => esc_attr($option_identificator) . '_field_type',
    'label' => __('Option type', 'calculated-custom-fields') . ' ' . wp_kses('<span style="color:red">*</span> : ', $allowed_html_tags),
    'class' => 'required short',
    'options' => array(
        '' => __('Select an option type', 'calculated-custom-fields'),
        '1' => __('Text', 'calculated-custom-fields'),
        '2' => __('Select dropdown', 'calculated-custom-fields'),
        '3' => __('Checkboxes', 'calculated-custom-fields'),
        '4' => __('Textarea', 'calculated-custom-fields'),
        '5' => __('Radio buttons', 'calculated-custom-fields'),
        '6' => __('Number', 'calculated-custom-fields'),
        '7' => __('Images', 'calculated-custom-fields'),
        '8' => __('Email', 'calculated-custom-fields'),
        '9' => __('Buttons', 'calculated-custom-fields'),
        '10' => __('Color', 'calculated-custom-fields'),
        '11' => __('Number calculation', 'calculated-custom-fields'),
        '12' => __('Url', 'calculated-custom-fields'),
        '13' => __('Upload ajax', 'calculated-custom-fields'),
        '14' => __('Phone', 'calculated-custom-fields'),
    ),
]);


woocommerce_wp_textarea_input([
    'id' => esc_attr($option_identificator) . '_input_description',
    'label' => __('Option description : ', 'calculated-custom-fields'),
    'type' => 'text',
    'placeholder' => __('Input description', 'calculated-custom-fields'),
    'desc_tip' => true,
    'description' => __('Description of the option under the option label')
]);

woocommerce_wp_textarea_input([
    'id' => esc_attr($option_identificator) . '_input_helptip',
    'label' => __('Option help-tip : ', 'calculated-custom-fields'),
    'type' => 'text',
    'placeholder' => __('Input help-tip', 'calculated-custom-fields'),
    'desc_tip' => true,
    'description' => __('Short text revealed by hovering on the option label', 'custom-product-manger')
]);

woocommerce_wp_text_input([
    'id' => esc_attr($option_identificator) . '_input_placeholder',
    'label' => __('Option placeholder : ', 'calculated-custom-fields'),
    'type' => 'text',
    'placeholder' => __('Input placeholder', 'calculated-custom-fields'),
]);

woocommerce_wp_checkbox([
    'id' => esc_attr($option_identificator) . '_requiredCheck',
    'label' => __('Option required :', 'calculated-custom-fields'),
    'description' => __('Enable if option is required.', 'calculated-custom-fields'),
]);


woocommerce_wp_checkbox([
    'id' => esc_attr($option_identificator) . '_disable_output',
    'label' => __('Option output :', 'calculated-custom-fields'),
    'description' => __('Enable to hide option extra-cost output.', 'calculated-custom-fields'),
]);

//text presets
require plugin_dir_path(__FILE__) . '/parts/text.php'; 
//textarea
require plugin_dir_path(__FILE__) . '/parts/textarea.php'; 
//url
require plugin_dir_path(__FILE__) . '/parts/url.php'; 
//email
require plugin_dir_path(__FILE__) . '/parts/email.php'; 
//number
require plugin_dir_path(__FILE__) . '/parts/number.php'; 
//checkboxes
require plugin_dir_path(__FILE__) . '/parts/checkboxes.php'; 
//select
require plugin_dir_path(__FILE__) . '/parts/select.php'; 
//radio
require plugin_dir_path(__FILE__) . '/parts/radio.php'; 
//images
require plugin_dir_path(__FILE__) . '/parts/images.php'; 
//buttons
require plugin_dir_path(__FILE__) . '/parts/buttons.php'; 
//color
require plugin_dir_path(__FILE__) . '/parts/color.php'; 
//calculation
require plugin_dir_path(__FILE__) . '/parts/calculation.php'; 
//upload
require plugin_dir_path(__FILE__) . '/parts/upload.php'; 
//phone
require plugin_dir_path(__FILE__) . '/parts/phone.php'; 
?>

<div id="<?php echo esc_attr($option_identificator) . "_validation_message"; ?>"></div>


<div>
<p class="form-field">
<label for="<?php echo esc_attr($option_identificator) . "_option_submit"; ?>"><?php esc_html_e('Save option', 'calculated-custom-fields') ?></label><input 
type="submit" class="required short cpm_admin_btn" name="<?php echo esc_attr($option_identificator) . "_option_submit"; ?>" 
id="<?php echo esc_attr($option_identificator) . "_option_submit"; ?>" 
value="<?php esc_html_e('Activate field', 'calculated-custom-fields') ?><?php echo ' ' . esc_html(strtolower($option_number)); ?>"><span class="<?php echo esc_attr($option_identificator . "admin_loader_icon admin_loader_icon");?>"><i class="fa-solid fa-circle-notch"></i></span>
</p>
<p class="form-field">
<label for="<?php echo esc_attr($option_identificator) . "_delete-submit"; ?>"><?php esc_html_e('Delete option', 'calculated-custom-fields') ?></label><input type="submit" class="required short cpm_admin_btn" name="<?php echo esc_attr($option_identificator) . "_delete-submit"; ?>" id="<?php echo esc_attr($option_identificator) . "_delete-submit"; ?>" value="<?php esc_html_e('Disable field', 'calculated-custom-fields') ?><?php echo ' ' . esc_html(strtolower($option_number)); ?>"><span class="<?php echo esc_attr($option_identificator . "delete_admin_loader_icon delete_admin_loader_icon");?>"><i class="fa-solid fa-circle-notch"></i></span>
</p>
</div>

         
