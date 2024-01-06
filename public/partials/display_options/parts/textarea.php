<?php 

/**
 * 
 * Display textarea inputs on product page 
 * 
 * @link       https://digital-stg.com
 * @since      1.0.0
 * @package    Calculated_Custom_Fields
 * @subpackage Calculated_Custom_Fields/public/partials
 * 
 */

?>

<div class="cpm_text_area_div">

<fieldset>
<legend for="<?php echo esc_attr($option_identificator) . "_text_area_input"; ?>"
<?php if($input_helptip) : echo 'title="' . esc_attr($input_helptip) . '"'; endif;?> >
<?php echo esc_html($optionName); ?>
</legend>

<?php if($inputDescription) { ?>
<p class="input_Description"><?php echo esc_html($inputDescription); ?></p>
<?php } ?>

<div class="wpcb_input_container wp_textarea_container">

<textarea
class="wpcb_icon_inputs"
id="<?php echo esc_attr($option_identificator) . "_text_area_input"; ?>"
name="<?php echo esc_attr($option_identificator) . "_text_area_input"; ?>"
maxlength="<?php if($text_area_max_length){echo esc_attr($text_area_max_length);} else { echo esc_html("260");} ?>"
placeholder="<?php if($input_placeholder){echo esc_attr($input_placeholder);} else { esc_attr_e('Write a long text.', 'calculated-custom-fields');}?>"
cols="20"rows="2" wrap="off"
<?php if($required){echo esc_html("required");}?>>
</textarea>

</div>

<?php if (!$disable_output) { ?>
<p id="<?php echo esc_attr($option_identificator) . "_output_text_area_val"; ?>" class="<?php echo esc_attr("cp_output " . $option_identificator . "_cp_output");?>"></p>
<?php } ?>

</fieldset>
</div>
</div>

<?php
