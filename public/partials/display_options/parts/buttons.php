<?php 

/**
 * 
 * Display buttons on product page 
 * 
 * @link       https://digital-stg.com
 * @since      1.0.0
 * @package    Calculated_Custom_Fields
 * @subpackage Calculated_Custom_Fields/public/partials
 * 
 */

?>

<div class="cpm_btnswap_div">

<fieldset>
<legend id="label"
<?php if($input_helptip) : echo 'title="' . esc_attr($input_helptip) . '"'; endif;?> >
<?php echo esc_html($optionName); ?>
</legend>

<div>

<?php if ($inputDescription) { ?>
<p class="input_Description"><?php echo esc_html($inputDescription); ?></p>
<?php } ?>

<input type="hidden" id="<?php echo esc_attr($option_identificator) . "_btn_indexer"; ?>" name="<?php echo esc_attr($option_identificator) . "_btn_indexer"; ?>" />

<label for="<?php echo esc_attr($option_identificator) . "_btn_radio_1"; ?>" class="btn_containerRadio"><?php echo esc_html($btn_name_1); ?>
<input type="radio" id="<?php echo esc_attr($option_identificator) . "_btn_radio_1"; ?>" name="<?php echo esc_attr($option_identificator) . "_btn_radio"; ?>" 
value="<?php echo esc_attr($btn_value_1); ?>">
<span class="checkmarkRadio"></span>
</label>

<label for="<?php echo esc_attr($option_identificator) . "_btn_radio_2"; ?>" class="btn_containerRadio"><?php echo esc_html($btn_name_2); ?>
<input type="radio" id="<?php echo esc_attr($option_identificator) . "_btn_radio_2"; ?>" name="<?php echo esc_attr($option_identificator) . "_btn_radio"; ?>" value="<?php echo esc_attr($btn_value_2); ?>">
<span class="checkmarkRadio"></span>
</label>

<label for="<?php echo esc_attr($option_identificator) . "_btn_radio_3"; ?>" class="btn_containerRadio"><?php echo esc_html($btn_name_3); ?>
<input type="radio" id="<?php echo esc_attr($option_identificator) . "_btn_radio_3"; ?>" name="<?php echo esc_attr($option_identificator) . "_btn_radio"; ?>" value="<?php echo esc_attr($btn_value_3); ?>">
<span class="checkmarkRadio" id="checkmark_3"></span>
 </label>

<?php if ($btn_name_4 || !$btn_name_4 == "") { ?>

<label for="<?php echo esc_attr($option_identificator) . "_btn_radio_4"; ?>" class="btn_containerRadio"><?php echo esc_html($btn_name_4); ?>
<input type="radio" id="<?php echo esc_attr($option_identificator) . "_btn_radio_4"; ?>" name="<?php echo esc_attr($option_identificator) . "_btn_radio"; ?>" value="<?php echo esc_attr($btn_value_4); ?>">
<span class="checkmarkRadio" id="checkmark_4"></span>
</label>

<?php }

if ($btn_name_5 || !$btn_name_5 == "") { ?>

<label for="<?php echo esc_attr($option_identificator) . "_btn_radio_5"; ?>" class="btn_containerRadio"><?php echo esc_html($btn_name_5); ?>
<input type="radio" id="<?php echo esc_attr($option_identificator) . "_btn_radio_5"; ?>" name="<?php echo esc_attr($option_identificator) . "_btn_radio"; ?>" value="<?php echo esc_attr($btn_value_5); ?>">
<span class="checkmarkRadio" id="checkmark_5"></span>
</label>

<?php } if ($btn_name_6 || !$btn_name_6 == "") { ?>

<label for="<?php echo esc_attr($option_identificator) . "_btn_radio_6"; ?>" class="btn_containerRadio"><?php echo esc_html($btn_name_6); ?>
<input type="radio" id="<?php echo esc_attr($option_identificator) . "_btn_radio_6"; ?>" name="<?php echo esc_attr($option_identificator) . "_btn_radio"; ?>" value="<?php echo esc_attr($btn_value_6); ?>">
 <span class="checkmarkRadio" id="checkmark_6"></span>
</label>

<?php } ?>

 </div>

<?php if (!$disable_output) { ?>
<p id="<?php echo esc_attr($option_identificator) . "_outputBtnValue"; ?>" class="<?php echo esc_attr($option_identificator) . "_cp_output cp_output"; ?>"></p>
<?php }; if ($required) { ?>
<input type="hidden" id="<?php echo esc_attr($option_identificator . "btn_required") ?>" name="btn_required" value="<?php echo esc_attr($required); ?>">
<?php }; ?>


</fieldset>
</div>
</div>

<?php
