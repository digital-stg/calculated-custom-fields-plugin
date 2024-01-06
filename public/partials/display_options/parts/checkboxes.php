<?php 

/**
 * 
 * Display checkboxes inputs on product page 
 * 
 * @link       https://digital-stg.com
 * @since      1.0.0
 * @package    Calculated_Custom_Fields
 * @subpackage Calculated_Custom_Fields/public/partials
 * 
 */

?>

<div class="cpm_checkbox_input_div">
     

<fieldset>
<legend for="<?php echo esc_attr($option_identificator) . "_checkbox_input"; ?>"
<?php if($input_helptip) : echo 'title="' . esc_attr($input_helptip) . '"'; endif;?> >
<?php echo esc_html($optionName); ?>
</legend>

<?php if($inputDescription) { ?>
<p class="input_Description"><?php echo esc_html($inputDescription); ?></p>
<?php } ?>
    
<label for="<?php echo esc_attr($option_identificator) . "_checkbox"; ?>" class="container_checkbox"> <?php echo esc_html($checkboxname_1); ?>
<input type="checkbox" id="<?php echo esc_attr($option_identificator) . "_checkbox"; ?>" name="<?php echo esc_attr($option_identificator) . "_checkbox"; ?>" value="1" class="checkboxes"/> 
</label>
    
<?php if($checkbox2Value!="") { ?>

<label for="<?php echo esc_attr($option_identificator) . "_checkbox_2"; ?>" class="container_checkbox"><?php echo esc_html($checkboxname_2); ?>
<input type="checkbox" id="<?php echo esc_attr($option_identificator) . "_checkbox_2"; ?>" name="<?php echo esc_attr($option_identificator) . "_checkbox_2"; ?>" value="2" class="checkboxes">     
<span class="checkmark"></span></label>

<?php } ?>

<?php if($checkbox3Value!="") { ?>

<label for="<?php echo esc_attr($option_identificator) . "_checkbox_3"; ?>" class="container_checkbox"><?php echo esc_html($checkboxname_3); ?>
<input type="checkbox" id="<?php echo esc_attr($option_identificator) . "_checkbox_3"; ?>" name="<?php echo esc_attr($option_identificator) . "_checkbox_3"; ?>" value="3" class="checkboxes">  
<span class="checkmark"></span></label>

<?php } ?>

<?php if($checkbox4Value!="") { ?>

<label for="<?php echo esc_attr($option_identificator) . "_checkbox_4"; ?>" class="container_checkbox"><?php echo esc_html($checkboxname_4); ?>
<input type="checkbox" id="<?php echo esc_attr($option_identificator) . "_checkbox_4"; ?>" name="<?php echo esc_attr($option_identificator) . "_checkbox_4"; ?>" value="4" class="checkboxes">  
<span class="checkmark"></span></label>
<?php } ?>

<?php if (!$disable_output) { ?>
<p class="<?php echo esc_attr($option_identificator) . "_cp_output cp_output"; ?>"></p>
<?php }; if($required) { ?> 
<!-- use in js for validation -->
<input type="hidden" id="<?php echo esc_attr($option_identificator ."chk_required");?>" name="chk_required" value="<?php echo esc_attr($required); ?>">
<?php } ?>

</fieldset>
</div>
</div>

<?php

