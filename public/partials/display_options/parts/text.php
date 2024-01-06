<?php 

/**
 * 
 * Display text inputs on product page 
 * 
 * @link       https://digital-stg.com
 * @since      1.0.0
 * @package    Calculated_Custom_Fields
 * @subpackage Calculated_Custom_Fields/public/partials
 * 
 */

?>

<div class="cmp_text_input_div">
    
<fieldset>
<legend for="<?php echo esc_attr($option_identificator) . "_text_input"; ?>"
<?php if($input_helptip) : echo 'title="' . esc_attr($input_helptip) . '"'; endif;?> >
<?php echo esc_html($optionName); ?>
</legend>

<?php if($inputDescription) { ?>
<p class="input_Description"><?php echo esc_html($inputDescription); ?></p>
<?php } ?>

<div class="wpcb_input_container">

<input type="text" id="<?php echo esc_attr($option_identificator) . "_text_input"; ?>"
class="wpcb_icon_inputs" 
name="<?php echo esc_attr($option_identificator) . "_text_input"; ?>" 
maxlength="<?php if($text_max_length){echo esc_attr($text_max_length);} else { echo esc_html("40");}?>"
minlength="<?php if($text_min_length){echo esc_attr($text_min_length);} else { echo esc_html("0");}?>"
placeholder="<?php if($input_placeholder){echo esc_attr($input_placeholder);} else {esc_attr_e('Write your text', 'calculated-custom-fields');}?>"
<?php if($only_letters) { $pattern = "^[a-zA-Z\s]*$"; echo esc_html(sprintf('pattern=%s', $pattern));}
if($required){echo esc_html(' required');} ?>>

</div>

<?php if (!$disable_output) { ?>
<p id="<?php echo esc_attr($option_identificator) . "_output_text_val"; ?>" class="<?php echo esc_attr("cp_output " . $option_identificator . "_cp_output");?>"></p>
<?php } ?>

</fieldset>
</div>
</div>

<?php

