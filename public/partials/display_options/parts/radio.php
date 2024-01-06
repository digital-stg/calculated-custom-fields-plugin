<?php 

/**
 * 
 * Display radio inputs on product page 
 * 
 * @link       https://digital-stg.com
 * @since      1.0.0
 * @package    Calculated_Custom_Fields
 * @subpackage Calculated_Custom_Fields/public/partials
 * 
 */

?>

<div class="cpm_radio_input_div"> 

<fieldset>
<legend
<?php if($input_helptip) : echo 'title="' . esc_attr($input_helptip) . '"'; endif;?>>
<?php echo esc_html($optionName); ?>
</legend>

<?php if($inputDescription) { ?>
<p class="input_Description"><?php echo esc_html($inputDescription); ?></p> 
<?php } ?>

<input type="hidden" id="<?php echo esc_attr($option_identificator) . "_radio_indexer"; ?>" name="<?php echo esc_attr($option_identificator) . "_radio_indexer"; ?>"/>

<label for="<?php echo esc_attr($option_identificator) . "_radio_1"; ?>" class="container_radio"> <?php echo esc_html($radioName_1); ?> 
<input type="radio" id="<?php echo esc_attr($option_identificator) . "_radio_1"; ?>" class="<?php echo esc_attr($option_identificator) . "_radiojs"; ?>" name="<?php echo esc_attr($option_identificator) . "_radio_value"; ?>" value="<?php echo esc_attr($radioValue_1); ?>" checked>
<span class="checkmark_radio"></span>
</label>

<label for="<?php echo esc_attr($option_identificator) . "_radio_2"; ?>" class="container_radio"><?php echo esc_html($radioName_2); ?>
<input type="radio" id="<?php echo esc_attr($option_identificator) . "_radio_2"; ?>" class="<?php echo esc_attr($option_identificator) . "_radiojs"; ?>" name="<?php echo esc_attr($option_identificator) . "_radio_value"; ?>" value="<?php echo esc_attr($radioValue_2); ?>">
<span class="checkmark_radio"></span>
</label>

<?php if($radioName_3 || !$radioName_3=="") { ?> 

<label for="<?php echo esc_attr($option_identificator) . "_radio_3"; ?>" class="container_radio"><?php echo esc_html($radioName_3); ?>
<input type="radio" id="<?php echo esc_attr($option_identificator) . "_radio_3"; ?>" class="<?php echo esc_attr($option_identificator) . "_radiojs"; ?>" name="<?php echo esc_attr($option_identificator) . "_radio_value"; ?>" value="<?php echo esc_attr($radioValue_3); ?>">
<span class="checkmark_radio"></span>
</label>

<?php } else if(!$radioName_3 || $radioName_3==" ") { 
    //sleep
} 

?>

<?php if($radioName_4 || !$radioName_4=="") { ?> 

<label for="<?php echo esc_attr($option_identificator) . "_radio_4"; ?>" class="container_radio"><?php echo esc_html($radioName_4); ?>
<input type="radio" id="<?php echo esc_attr($option_identificator) . "_radio_4"; ?>" class="<?php echo esc_attr($option_identificator) . "_radiojs"; ?>" name="<?php echo esc_attr($option_identificator) . "_radio_value"; ?>" value="<?php echo esc_attr($radioValue_4); ?>">
<span class="checkmark_radio"></span>
</label>


<?php } else if(!$radioName_4 || $radioName_4==" ") { 
//sleep
} 

if($required) { ?>
<input type="hidden" id="<?php echo esc_attr($option_identificator . "radio_required")?>" name="radio_required" value="<?php echo esc_attr($required);?>">
<?php }  if (!$disable_output) { ?>
<p id ="<?php echo esc_attr($option_identificator) . "_outputRadioValue"; ?>" class="<?php echo esc_attr($option_identificator) . "_cp_output cp_output"; ?>"></p>
<?php };?>

 </fieldset>
 </div>
 </div>
 
<?php
