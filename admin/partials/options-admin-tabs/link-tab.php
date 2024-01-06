<?php 

/**
 * Tab Link to CCF Pro version on website
 *
 * @link       https://digital-stg.com
 * @since      1.0.0
 *
 * @package    Calculated_Custom_Fields
 * @subpackage Calculated_Custom_Fields/admin/partials/
 */

$allowed_html_tags = ['span' => array('style' =>array(), 'id' => array(), 'class' => array(), 'data-tip' => array(),), 'b' => array(), 'i' => array(
'class' => array(),), 'a' => array('target' => array(), 'rel' => array(), 'href' => array(), 'id' => array(), 'class' => array(),),];

$product_url = get_permalink($post->id);

$view_product_btn = "<a target=\"_blank\" rel=\"noopener noreferrer\" href=". $product_url." id=\"top_preview_btn\" class=\"preview button\">". __('View Product', 'calculated-custom-fields') ."</a>";

echo "<div class=\"top_info_div\"><span> <i class=\"fa-solid fa-infinity\"></i> &thinsp;" . esc_html__('No field limit with the pro version.', 'calculated-custom-fields') . "</span>". wp_kses($view_product_btn, $allowed_html_tags) ."</div>";


woocommerce_wp_text_input([
    'id' => 'fake_option_name',
    'label' => __('Option label :', 'calculated-custom-fields'),
    'wrapper_class' => 'show_if_simple',
    'class' => 'required short',
    'placeholder' => __('Write your option label','calculated-custom-fields'),
    'custom_attributes' => array(
        'disabled' => 'disabled',
    )
]);


woocommerce_wp_select([
    'id' => 'fake_field_type',
    'label' => __('Option type :', 'calculated-custom-fields'),
    'class' => 'required short',
    'options' => array(
        '' => __('Select an option type','calculated-custom-fields'),
    ),
    'custom_attributes' => array(
        'disabled' => 'disabled',
    )
]);


woocommerce_wp_textarea_input([
    'id' =>'fake_input_description',
    'label' => __('Option description : ', 'calculated-custom-fields'),
    'type' => 'text',
    'placeholder' => __('Input description', 'calculated-custom-fields'),
    'custom_attributes' => array(
        'disabled' => 'disabled',
    )
]);

woocommerce_wp_textarea_input([
    'id' => 'fake_input_helptip',
    'label' => __('Option help-tip : ', 'calculated-custom-fields'),
    'type' => 'text',
    'placeholder' => __('Input help-tip', 'calculated-custom-fields'),
    'custom_attributes' => array(
        'disabled' => 'disabled',
    )
]);


echo "<p class=\"form-field\"><label>" .esc_html__('Link :', 'calculated-custom-fields') ."</label><span class=\"short cpm_info_field\">" . wp_kses(__('Check our <a target=\"_blank\" rel=\"noopener noreferrer\" href=\"https://digital-stg.com\">official website</a> for more information and documentation.', 'calculated-custom-fields'), $allowed_html_tags) ."</span>
</p>";

?>


