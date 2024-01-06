<?php 

/**
 * 
 * Display phone inputs on product page 
 * 
 * @link       https://digital-stg.com
 * @since      1.0.0
 * @package    Calculated_Custom_Fields
 * @subpackage Calculated_Custom_Fields/public/partials
 * 
 */

?>

<div class="cpm_phone_input_div">

<?php require_once ABSPATH . '/wp-content/plugins/' . $this->plugin_name . '/public/data/country-code-array.php'; ?>

<fieldset>
<legend for="<?php echo esc_attr($option_identificator) . "_phone_input"; ?>"
<?php if($input_helptip) : echo 'title="' . esc_attr($input_helptip) . '"'; endif;?> >
<?php echo esc_html($optionName); ?>
</legend>

<?php if ($inputDescription) { ?>
<p class="input_Description"><?php echo esc_html($inputDescription); ?></p>
<?php } ?>

<div class="national_phone">

<div class="wpcb_input_container">

<input type="tel" value="<?php echo esc_html('+ ') . esc_attr($countryArray[$only_national]['code']) . ' '; ?>" 
class="wpcb_icon_inputs" id="<?php echo esc_attr($option_identificator) . "_phone_input"; ?>" 
name="<?php echo esc_attr($option_identificator) . "_phone_input"; ?>" 
maxlength="<?php if ($phone_maxlength) {echo esc_attr($phone_maxlength);} else {echo esc_html("30");} ?>" 
minlength="<?php if ($phone_minlength) {echo esc_attr($phone_minlength);} else {echo esc_html("7");} ?>" 
placeholder="<?php if ($input_placeholder) {echo esc_attr($input_placeholder);} else {esc_attr_e('Your phone number', 'calculated-custom-fields');} ?>" 
autocomplete="off" pattern="^[0-9\+.\- ]+$" <?php if ($required) {echo esc_html("required");} ?>/>

<input type="hidden" name="<?php echo esc_attr($option_identificator) . "_phone_post"; ?>" id="<?php echo esc_attr($option_identificator) . "_phone_post"; ?>">

</div>

</div>

<?php if (!$disable_output) { ?>
<p id="<?php echo esc_attr($option_identificator) . '_output_phone_value' ?>" class="<?php echo esc_attr($option_identificator) . "_cp_output cp_output"; ?>"></p>
<?php } ?>

</fieldset>
</div>
</div>

<?php

