<?php 

/**
 * 
 * Display image inputs on product page 
 * 
 * @link       https://digital-stg.com
 * @since      1.0.0
 * @package    Calculated_Custom_Fields
 * @subpackage Calculated_Custom_Fields/public/partials
 * 
 */

?>

<div class="cpm_imgswap_div"> 

<fieldset>
<legend
<?php if($input_helptip) : echo 'title="' . esc_attr($input_helptip) . '"'; endif;?> >
<?php echo esc_html($optionName); ?>
</legend>

<div>     

<?php if($inputDescription) { ?>
<p class="input_Description"><?php echo esc_html($inputDescription); ?></p>
<?php } ?>

<input type="hidden" id="<?php echo esc_attr($option_identificator) . "_img_indexer"; ?>" name="<?php echo esc_attr($option_identificator) . "_img_indexer"; ?>"/>

<div class="cpm_img_swap">

<span id="<?php echo esc_attr($option_identificator) . "_img_box_1"; ?>" class="box_img target"><?php echo wp_get_attachment_image( $img_1_id, 'full' )?></span>
<span id="<?php echo esc_attr($option_identificator) . "_img_box_2"; ?>" class="box_img target"><?php echo wp_get_attachment_image( $img_2_id, 'full' )?></span>
<span id="<?php echo esc_attr($option_identificator) . "_img_box_3"; ?>" class="box_img target"><?php if($img_name_3 || !$img_name_3==" ") { echo wp_get_attachment_image($img_3_id, 'full' ); }?></span>
<span id="<?php echo esc_attr($option_identificator) . "_img_box_4"; ?>" class="box_img target"><?php if($img_name_4 || !$img_name_4==" ") { echo wp_get_attachment_image($img_4_id, 'full' ); }?></span>

</div>

<label for="<?php echo esc_attr($option_identificator) . "_img_radio_1"; ?>" class="img_containerRadio"><?php echo esc_html($img_name_1); ?>
<input type="radio" id="<?php echo esc_attr($option_identificator) . "_img_radio_1"; ?>" name="<?php echo esc_attr($option_identificator) . "_img_radio"; ?>" value="<?php echo esc_attr($img_value_1); ?>">
<span class="checkmarkRadio"></span> 
</label>

<label for="<?php echo esc_attr($option_identificator) . "_img_radio_2"; ?>" class="img_containerRadio"><?php echo esc_html($img_name_2); ?>
<input type="radio" id="<?php echo esc_attr($option_identificator) . "_img_radio_2"; ?>" name="<?php echo esc_attr($option_identificator) . "_img_radio"; ?>" value="<?php echo esc_attr($img_value_2); ?>">
<span class="checkmarkRadio"></span>
</label>

<?php if($img_name_3 || !$img_name_3==" ") { ?> 

<label for="<?php echo esc_attr($option_identificator) . "_img_radio_3"; ?>" class="img_containerRadio"><?php echo esc_html($img_name_3); ?>
<input type="radio" id="<?php echo esc_attr($option_identificator) . "_img_radio_3"; ?>" name="<?php echo esc_attr($option_identificator) . "_img_radio"; ?>" value="<?php echo esc_attr($img_value_3); ?>">
<span class="checkmarkRadio" id="checkmark_3"></span>
</label>

<?php } if($img_name_4 || !$img_name_4==" ") { ?> 

<label for="<?php echo esc_attr($option_identificator) . "_img_radio_4"; ?>" class="img_containerRadio"><?php echo esc_html($img_name_4); ?>
<input type="radio" id="<?php echo esc_attr($option_identificator) . "_img_radio_4"; ?>" name="<?php echo esc_attr($option_identificator) . "_img_radio"; ?>" value="<?php echo esc_attr($img_value_4); ?>">
<span class="checkmarkRadio" id="checkmark_4"></span>
</label>

<?php } ?>

  </div>

<?php if (!$disable_output) { ?>
<p id ="<?php echo esc_attr($option_identificator) . "_outputImgValue"; ?>" class="<?php echo esc_attr($option_identificator) . "_cp_output cp_output"; ?>"></p>
<?php } if($required) { ?>
<input type="hidden" id="<?php echo esc_attr($option_identificator . "img_required")?>" name="img_required" value="<?php echo esc_attr($required); ?>">
<?php };?>

  </fieldset>
  </div>
  </div>

   <?php
