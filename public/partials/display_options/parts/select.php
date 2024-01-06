<?php 

/**
 * 
 * Display select inputs on product page 
 * 
 * @link       https://digital-stg.com
 * @since      1.0.0
 * @package    Calculated_Custom_Fields
 * @subpackage Calculated_Custom_Fields/public/partials
 * 
 */

?>

<div class="cpm_select_input_div">

<fieldset>
<legend for="<?php echo esc_attr($option_identificator) . "_select_input"; ?>"
<?php if($input_helptip) : echo 'title="' . esc_attr($input_helptip) . '"'; endif;?> >
<?php echo esc_html($optionName); ?>
</legend>

<?php if($inputDescription) { ?>
<p class="input_Description"><?php echo esc_html($inputDescription); ?></p>
<?php } ?>

<div class="wpcb_input_container">

<select class="wpcb_icon_inputs" id="<?php echo esc_attr($option_identificator) . "_select_input"; ?>" name="<?php echo esc_attr($option_identificator) . "_select_input"; ?>" value="" <?php if($required){echo esc_html(' required');} ?>>
<option value=""> <?php if($selectDefaultText) { echo esc_attr($selectDefaultText);} else {esc_html_e('Select an option', 'calculated-custom-fields');} ?></option>
<option value="<?php echo esc_attr($selectOptionValue1);?>"><?php echo esc_html($selectOptionName1);?></option>
<option value="<?php echo esc_attr($selectOptionValue2);?>"><?php echo esc_html($selectOptionName2);?></option>
<?php if(!$selectOptionName3=="") { echo " <option value=\"" .  esc_attr($selectOptionValue3) . "\">" . esc_html($selectOptionName3) . "</option>"; }  ?>  
<?php if(!$selectOptionName4=="") { echo " <option value=\"" . esc_attr($selectOptionValue4) . "\">" . esc_html($selectOptionName4)  . "</option>"; }  ?>  
<?php if(!$selectOptionName5=="") { echo " <option value=\"" . esc_attr($selectOptionValue5) . "\">" . esc_html($selectOptionName5)  . "</option>"; }  ?>  
<?php if(!$selectOptionName6=="") { echo " <option value=\"" . esc_attr($selectOptionValue6) . "\">" . esc_html($selectOptionName6)  . "</option>"; }  ?>  

</select>
</div>

<input type="hidden" id="<?php echo esc_attr($option_identificator) . "_selector_index"; ?>" name="<?php echo esc_attr($option_identificator) . "_selector_index"; ?>"/>

<?php if (!$disable_output) { ?>
<p id ="<?php echo esc_attr($option_identificator) . "_output_select_val"; ?>" class="<?php echo esc_attr("cp_output " . $option_identificator . "_cp_output");?>"></p>
<?php }; if($required) { ?>
<input type="hidden" id="<?php echo esc_attr($option_identificator . "select_required")?>" name="select_required" value="<?php echo esc_attr($required); ?>">
<?php } ?>

</fieldset>
</div> 
</div> 

<?php


