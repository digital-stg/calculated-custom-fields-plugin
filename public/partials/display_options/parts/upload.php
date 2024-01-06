<?php 

/**
 * 
 * Display upload inputs on product page 
 * 
 * @link       https://digital-stg.com
 * @since      1.0.0
 * @package    Calculated_Custom_Fields
 * @subpackage Calculated_Custom_Fields/public/partials
 * 
 */

?>

<div class="cpm_upload_input_div">

<fieldset>
<legend for="<?php echo esc_attr($option_identificator) . "_upload_input"; ?>"
<?php if($input_helptip) : echo 'title="' . esc_attr($input_helptip) . '"'; endif;?> >
<?php echo esc_html($optionName); ?>
</legend>

<?php if ($inputDescription) { ?>
<p class="input_Description"><?php echo esc_html($inputDescription); ?></p>
<?php } ?>

<div class="wpcb_input_container wpcb_trigger_click">

<input type="text" id="<?php echo esc_attr($option_identificator) . "_click_upload"; ?>" class="wpcb_icon_inputs" 
value="<?php if ($input_placeholder) {echo esc_attr($input_placeholder);} else {esc_attr_e('Upload a file', 'calculated-custom-fields');} ?>" 
readonly />
<input type="file" name="<?php echo esc_attr($option_identificator) . "_upload_input"; ?>" 
id="<?php echo esc_attr($option_identificator) . "_upload_input"; ?>" style="display:none;" multiple="false" 
accept="<?php $mimes_types = get_allowed_mime_types(); foreach ($mimes_types as $index => $mime) {
$product_allowed_mime_types = $product->get_meta($option_identificator . '_' . $mime); 
if (!empty($product_allowed_mime_types)) {echo esc_attr($product_allowed_mime_types) . ','; } } ?>"/>

<span class="loading_upload_spinner" id="<?php echo esc_attr($option_identificator) . "_loader_spinner"; ?>"><i class="fa-solid fa-circle-notch"></i></span>

<input type="hidden" name="product_id" id="product_id" value="<?php echo esc_attr($product->get_id()); ?>" />
<input type="hidden" name="product_price" id="product_price" value="<?php echo esc_attr($product->get_price()); ?>" />
<input type="hidden" name="option_text" id="option_text" class="option_text" 
value="<?php if ($upload_value != "0") {echo get_option('cost_option_text');} else {echo get_option('free_option_text'); }; ?>"/>

<?php wp_nonce_field('upload', 'upload_nonce'); ?>

</div>

<p class="<?php echo esc_attr($option_identificator) . '_output_upload_value'; ?>" style="display: none;" ;> 
<?php if ($upload_value == "0") {echo get_option('free_option_text');} else {echo esc_attr($upload_value);} ?> </p>
<p id="<?php echo esc_attr($option_identificator) . "_output_upload_option"; ?>" class="<?php echo esc_attr($option_identificator) . "_cp_output cp_output"; ?>"></p>
<div class="<?php echo esc_attr($option_identificator) . '_upload_content_output cp_output' ?>"></div>

<?php if ($required) { ?>
<input type="hidden" id="<?php echo esc_attr($option_identificator) . "upload_is_required"; ?>" name="<?php echo esc_attr($option_identificator) . "upload_is_required"; ?>" value="<?php echo esc_attr($required); ?>">
<?php }  ?>

</fieldset>
</div>
</div>

<?php 