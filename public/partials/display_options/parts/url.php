<?php 

/**
 * 
 * Display url inputs on product page 
 * 
 * @link       https://digital-stg.com
 * @since      1.0.0
 * @package    Calculated_Custom_Fields
 * @subpackage Calculated_Custom_Fields/public/partials
 * 
 */

if ($url_pattern == "2") {
    $choose_pattern = "http://.*";
    $url_placeholder = "http://";
} else if ($url_pattern == "3") {
    $choose_pattern = "https://.*";
    $url_placeholder = "https://";
} else {
    $choose_pattern = "https?://.+";
    $url_placeholder = "http(s)://";
}

?>

<div class="cpm_url_input_div">

<fieldset>
<legend for="<?php echo esc_attr($option_identificator) . "_url_field"; ?>"
<?php if($input_helptip) : echo 'title="' . esc_attr($input_helptip) . '"'; endif;?> >
<?php echo esc_html($optionName); ?>
</legend>

<?php if ($inputDescription) { ?>
<p class="input_Description"><?php echo esc_html($inputDescription); ?></p>
<?php } ?>

<div class="wpcb_input_container">

<input type="url" id="<?php echo esc_attr($option_identificator) . "_url_field"; ?>" 
class="wpcb_icon_inputs" name="<?php echo esc_attr($option_identificator) . "_url_field"; ?>" 
placeholder="<?php if ($input_placeholder) {echo esc_attr($input_placeholder);} else {echo esc_attr_e($url_placeholder);} ?>" 
pattern="<?php echo esc_attr($choose_pattern) ?>" autocomplete="off" 
maxlength="<?php if ($url_max) {echo esc_attr($url_max);} else {echo esc_html("40");} ?>" 
minlength="<?php if ($url_min) {echo esc_attr($url_min);} else { echo esc_html("0");} ?>" 
<?php if ($required) {echo esc_html("required");} ?>>

</div>

<?php if (!$disable_output) { ?>
<p id="<?php echo esc_attr($option_identificator) . "_outputUrlValue"; ?>" class="<?php echo esc_attr($option_identificator) . "_cp_output cp_output"; ?>"></p>
<?php }; ?>

</fieldset>
</div>
</div>

<?php 

