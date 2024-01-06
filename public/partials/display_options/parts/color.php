<?php 

/**
 * 
 * Display color inputs on product page 
 * 
 * @link       https://digital-stg.com
 * @since      1.0.0
 * @package    Calculated_Custom_Fields
 * @subpackage Calculated_Custom_Fields/public/partials
 * 
 */

?>

<div class="cpm_color_input_div">

<fieldset>
<legend for="<?php echo esc_attr($option_identificator) . "_color_field"; ?>"
<?php if($input_helptip) : echo 'title="' . esc_attr($input_helptip) . '"'; endif;?> >
<?php echo esc_html($optionName); ?>
</legend>

<?php if ($inputDescription) { ?>
<p class="input_Description"><?php echo esc_html($inputDescription); ?></p>
<?php } ?>

<div class="wpcb_input_container wpcb_trigger_click">

<input type="text" id="<?php echo esc_attr($option_identificator) . "_click_color"; ?>" class="wpcb_icon_inputs" value="<?php esc_attr_e('Choose a custom color', 'calculated-custom-fields'); ?>" readonly />
<input type="color" style="display:none;" id="<?php echo esc_attr($option_identificator) . "_color_custom_field"; ?>" autocomplete="off" name="<?php echo esc_attr($option_identificator) . "_color_custom_field"; ?>" value="">

</div>

<?php if (!$disable_output) { ?>
<p id="<?php echo esc_attr($option_identificator) . "_outputColorValue"; ?>" class="<?php echo esc_attr($option_identificator) . "_cp_output cp_output"; ?>"></p>
<?php };if ($required) { ?>
<input type="hidden" id="<?php echo esc_attr($option_identificator) . "_color_required"; ?>" name="<?php echo esc_attr($option_identificator) . "_color_required"; ?>" value="<?php echo esc_attr($required); ?>">

<?php } ?>

</fieldset>
</div>
</div>

<?php
