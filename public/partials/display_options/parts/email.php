<?php 

/**
 * 
 * Display email inputs on product page 
 * 
 * @link       https://digital-stg.com
 * @since      1.0.0
 * @package    Calculated_Custom_Fields
 * @subpackage Calculated_Custom_Fields/public/partials
 * 
 */

?>

<div class="cpm_email_input_div">

<fieldset>
<legend for="<?php echo esc_attr($option_identificator) . "_email_field"; ?>"
<?php if($input_helptip) {echo esc_html(sprintf('title=%s', $input_helptip));}?>>
<?php echo esc_html($optionName); ?>
</legend>

<?php if ($inputDescription) { ?>
<p class="input_Description"><?php echo esc_html($inputDescription); ?></p>
 <?php } ?>

<div class="wpcb_input_container">

<input type="email" id="<?php echo esc_attr($option_identificator) . "_email_field"; ?>" 
class="wpcb_icon_inputs" name="<?php echo esc_attr($option_identificator) . "_email_field"; ?>" 
autocomplete="on" maxlength="<?php if ($email_max_length) {echo esc_attr($email_max_length);} else {echo esc_html("40");}?>" 
placeholder="<?php if ($input_placeholder) {echo esc_attr($input_placeholder);} else {esc_attr_e('Email address', 'calculated-custom-fields');} ?>" 
<?php if ($required) {echo esc_html("required");} ?>>

</div>

<?php if (!$disable_output) { ?>
<p id="<?php echo esc_attr($option_identificator) . "_outputEmailValue"; ?>" class="<?php echo esc_attr($option_identificator) . "_cp_output cp_output"; ?>"></p>
<?php }; ?>

</fieldset>
</div>
</div>

<?php
