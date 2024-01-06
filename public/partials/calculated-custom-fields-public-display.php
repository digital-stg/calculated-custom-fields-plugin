<?php

/**
 * 
 *  Public-facing view for the plugin
 * 
 * @link       https://digital-stg.com
 * @since      1.0.0
 * @package    Calculated_Custom_Fields
 * @subpackage Calculated_Custom_Fields/public/partials
 * @author     digital-stg <contact@digital-stg.com> 
 * 
 */

// Display all option fields on product pages 

?>

<div class="ccf_form"> 

<?php

$active_option = 0;
$i = 1;
do {
    echo '<div class="ccf_form_op_' . $i .'">';
    $option_identificator = 'op' .$i;
    require plugin_dir_path(__FILE__) . 'display_options/display_template.php';
    if ($product->get_meta($option_identificator . '_field_type')) {
        $active_option++;
    }
    $i++;

} while ($i <= 2);

if ($active_option > 0) {    ?>
    <div class="woo_quantity_new_input">
        <fieldset>
            <legend for="get_woo_quantity_input"><?php esc_html_e('Quantity', 'calculated-custom-fields'); ?></legend>
            <div class="wpcb_input_container">
                <input type="number" id="get_woo_quantity_input" class="wpcb_icon_inputs" placeholder="<?php esc_html_e('Quantity', 'calculated-custom-fields'); ?>" name="quantity" value="1" min="1" step="1">
            </div>
        </fieldset>
    </div>

<?php } ?>

</div>
