<?php

/**
 * Setting tabs of the product data panel.
 *
 * @link       https://digital-stg.com
 * @since      1.0.0
 *
 * @package    Calculated_Custom_Fields
 * @subpackage Calculated_Custom_Fields/admin/partials/
 */


?>

<div class="top_info_div"><span><i class="fa fa-cog"></i> &nbsp;<?php echo esc_html__('Settings', 'calculated-custom-fields') ?></span></div>


<?php

$allowed_html_tags = ['span' => array('id' => array(), 'class' => array(), 'data-tip' => array(),), 'b' => array(), 'i' => array(
    'class' => array(),
), 'a' => array('href' => array(), 'id' => array(), 'class' => array(),),];

woocommerce_wp_text_input([
    'id' => 'max_fields_number',
    'label' => __('Fields number : ', 'calculated-custom-fields'),
    'type' => 'number',
    'class' => 'short',
    'value' => '2',
    'placeholder' => '2',
    'desc_tip' => 'true',
    'description' => __( 'Only pro version. No maximum limit. Mininum is 2.', 'calculated-custom-fields' ),
    'custom_attributes' => array(
        'disabled' => 'disabled',
    )
]);


woocommerce_wp_text_input([
    'id' => 'free_option_text',
    'label' => __('Free option text : ', 'calculated-custom-fields'),
    'type' => 'text',
    'placeholder' => get_option('free_option_text'),
    'desc_tip' => 'true',
    'description' => __( 'Text that appears when option is free.', 'calculated-custom-fields' ),
]);

woocommerce_wp_text_input([
    'id' => 'cost_option_text',
    'label' => __('Extra-cost option text : ', 'calculated-custom-fields'),
    'type' => 'text',
    'placeholder' => get_option('cost_option_text'),
    'desc_tip' => 'true',
    'description' => __( 'Text that appears before option price, if option output is enable.', 'calculated-custom-fields' ),
]);

woocommerce_wp_text_input([
    'id' => 'add_to_cart_text',
    'label' => __('Add to cart text : ', 'calculated-custom-fields'),
    'type' => 'text',
    'placeholder' => get_option('add_to_cart_text'),
    'desc_tip' => 'true',
    'description' => __( 'Text that replaces "add to cart" on the shop page product button (if at least one option is activated).', 'calculated-custom-fields' ),
]);

woocommerce_wp_text_input([
    'id' => 'option_required_text',
    'label' => __('Required option text : ', 'calculated-custom-fields'),
    'type' => 'text',
    'placeholder' => get_option('option_required_text'),
    'desc_tip' => 'true',
    'description' => __( 'Text that appears if option is required and unfilled (select, buttons, images, radio, color, upload, checkboxes)', 'calculated-custom-fields' ),
]);

?>

<div>

    <p class="form-field"> 
        <label for=""><?php esc_html_e('Save', 'calculated-custom-fields') ?></label><input type="submit" class="required short cpm_admin_btn" name="save_settings" id="" value="<?php esc_html_e('Save all settings', 'calculated-custom-fields') ?>"><span class="<?php echo esc_html("save_loader_icon");?>"><i class="fa-solid fa-circle-notch"></i></span>
    </p>
    <p class="form-field">
        <label for=""><?php esc_html_e('Reset', 'calculated-custom-fields') ?></label><input type="submit" class="required short cpm_admin_btn" name="remove_settings" id="" value=" <?php esc_html_e('Reset all settings', 'calculated-custom-fields') ?>"><span class="<?php echo esc_html("delete_loader_icon");?>"><i class="fa-solid fa-circle-notch"></i></span>
    </p>

</div>