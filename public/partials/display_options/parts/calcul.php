<?php 

/**
 * 
 * Display calculation inputs on product page 
 * 
 * @link       https://digital-stg.com
 * @since      1.0.0
 * @package    Calculated_Custom_Fields
 * @subpackage Calculated_Custom_Fields/public/partials
 * 
 */

?>

<div class="cpm_number_calculation_div">

<fieldset>
<legend for="<?php echo esc_attr($option_identificator) . "_calcul_number_custom_field"; ?>"
<?php if($input_helptip) : echo 'title="' . esc_attr($input_helptip) . '"'; endif;?> >
<?php echo esc_html($optionName); ?>
</legend>

<?php if ($inputDescription) { ?>
<p class="input_Description" <?php if ($input_helptip) { ?> title="<?php echo esc_attr($input_helptip); ?>" <?php } ?>>
<?php echo esc_html($inputDescription); ?></p>
<?php } ?>

<div class="wpcb_input_container">

<input type="number" id="<?php echo esc_attr($option_identificator) . "_calcul_number_custom_field"; ?>" 
class="wpcb_icon_inputs" autocomplete="off" name="<?php echo esc_attr($option_identificator) . "_calcul_number_custom_field"; ?>" 
min="<?php if ($calcul_number_min) { echo esc_attr($calcul_number_min);} else {echo esc_html("0");} ?>" 
max="<?php if ($calcul_number_max) { echo esc_attr($calcul_number_max);} ?>" 
step="<?php if ($calcul_number_step) {echo esc_attr($calcul_number_step);} else {echo esc_html("0.1");} ?>" 
placeholder="<?php if ($input_placeholder) {echo esc_attr($input_placeholder);} ?>" <?php if ($required) {echo esc_html("required");}?>/>
</div>

<?php 

if (!$disable_output && $calcul_label_2 == "") { ?>
<p id="<?php echo esc_attr($option_identificator) . "_outputCalculValue"; ?>" class="<?php echo esc_attr($option_identificator) . "_cp_output cp_output"; ?>"></p>
<p id="<?php echo esc_attr($option_identificator) . "_fillWithNumbers"; ?>" class="cp_output"></p>
     <?php } ?>

</fieldset>


<?php if (!$calcul_label_2 == "") { ?>

     <fieldset>
<legend for="<?php echo esc_attr($option_identificator) . "_calcul_number_custom_field"; ?>"
<?php if($input_calcul_helptip_2) : echo 'title="' . esc_attr($input_calcul_helptip_2) . '"'; endif;?> >
<?php echo esc_html($calcul_label_2); ?>
</legend>

<?php if ($calcul_description_2) { ?>

<p class="input_Description" <?php if ($input_calcul_helptip_2) { ?> title="<?php echo esc_attr($input_calcul_helptip_2); ?>" <?php } ?>>
<?php echo esc_html($calcul_description_2); ?>
</p>
<?php } ?>

<div class="wpcb_input_container">

<input type="number" id="<?php echo esc_attr($option_identificator) . "_calcul_number_custom_field_2"; ?>" 
class="wpcb_icon_inputs" autocomplete="off" 
name="<?php echo esc_attr($option_identificator) . "_calcul_number_custom_field_2"; ?>" 
min="<?php if ($calcul_number_min) {echo esc_attr($calcul_number_min);} else {echo esc_html("0");} ?>" 
max="<?php if ($calcul_number_max) {echo esc_attr($calcul_number_max);} ?>" 
step="<?php if ($calcul_number_step) {echo esc_attr($calcul_number_step);} else {echo esc_html("0.1");} ?>" 
placeholder="<?php if ($input_placeholder_2) {echo esc_attr($input_placeholder_2); } ?>" 
<?php if ($required) {echo esc_html("required"); } ?>> 

</div>

<?php if (!$disable_output) { ?>
<p id="<?php echo esc_attr($option_identificator) . "_outputCalculValue"; ?>" class="<?php echo esc_attr($option_identificator) . "_cp_output cp_output"; ?>"></p>
<p id="<?php echo esc_attr($option_identificator) . "_fillWithNumbers"; ?>" class="cp_output"></p>
     <?php }}; ?>

</fieldset>


</div>
</div>

<?php

