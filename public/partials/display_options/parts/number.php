<?php 

/**
 * 
 * Display number inputs on product page 
 * 
 * @link       https://digital-stg.com
 * @since      1.0.0
 * @package    Calculated_Custom_Fields
 * @subpackage Calculated_Custom_Fields/public/partials
 * 
 */

?>

<div class="cpm_number_div">

<fieldset>
<legend for="<?php echo esc_attr($option_identificator) . "_number_custom_field"; ?>"
<?php if($input_helptip) : echo 'title="' . esc_attr($input_helptip) . '"'; endif;?> >
<?php echo esc_html($optionName); ?>
</legend>

<?php if($inputDescription) { ?>
<p class="input_Description"><?php echo esc_html($inputDescription); ?></p>
<?php } ?>

<div class="wpcb_input_container">

<input type="number" 
id="<?php echo esc_attr($option_identificator) . "_number_custom_field"; ?>"
class="wpcb_icon_inputs"
name="<?php echo esc_attr($option_identificator) . "_number_custom_field"; ?>" 
autocomplete="off" 
min="<?php if($number_min) { echo esc_attr($number_min);} else {echo esc_html("0");}?>"
max="<?php if($number_max) { echo esc_attr($number_max);} else {echo esc_html("100000000");}?>"
step="<?php if($number_step) { echo esc_attr($number_step);}?>"
placeholder="<?php if($input_placeholder){echo esc_attr($input_placeholder);} else { esc_attr_e('Write a number', 'calculated-custom-fields');}?>"
<?php if($required){echo esc_html("required");} ?>>

</div>

<?php if (!$disable_output) { ?>
<p id="<?php echo esc_attr($option_identificator) . "_outputNumberValue"; ?>" class="<?php echo esc_attr($option_identificator) . "_cp_output cp_output"; ?>"></p> 
<p id="<?php echo esc_attr($option_identificator) . "_NfillWithNumbers"; ?>" style="display:none"></p> 
<?php } ?>

</fieldset>
</div>
</div>

<?php
