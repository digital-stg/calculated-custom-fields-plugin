<?php

/**
 * Provide a admin area view for the plugin
 *
 *
 * @link       https://digital-stg.com
 * @since      1.0.0
 *
 * @package    Calculated_Custom_Fields
 * @subpackage Calculated_Custom_Fields/admin/partials
 * @author     Digital STG <contact@digital-stg.com>
 * 
 */

$post = get_post();
$product = wc_get_product($post->ID);
$price = $product->get_regular_price();

//Option 1 check
$isOption1_active =  $product->get_meta('op1_field_type');

//Option 2 check
$isOption2_active =  $product->get_meta('op2_field_type');

//Help and desc tips
$calcul_help_tip = "<span class=\"woocommerce-help-tip cpm\" data-tip=\"" . __('Use $user_value with numbers and basic mathematic operators : + - / * ( ) . 
      $user_value is required and refers to the value given by the user on the product page.
      Use also $second_user_value if you choose to add another input.', 'calculated-custom-fields') . "\"></span>"; ?>

<div id="custom_produts_manager" class="panel woocommerce_options_panel hidden">

  <div class="tab">

    <a class="tablinks" id="tab_op1"> <?php if (!$isOption1_active) {
                            echo "<i class=\"fa fa-toggle-off\" aria-hidden=\"true\"></i> ";
                          } else {
                            echo "<i class=\"fa fa-toggle-on\" aria-hidden=\"true\"></i> ";
                          }
                          esc_html_e('Field 1', 'calculated-custom-fields'); ?>
    </a>
    <a class="tablinks" id="tab_op2"> <?php if (!$isOption2_active) {
                            echo "<i class=\"fa fa-toggle-off\" aria-hidden=\"true\"></i> ";
                          } else {
                            echo "<i class=\"fa fa-toggle-on\" aria-hidden=\"true\"></i> ";
                          }
                          esc_html_e('Field 2', 'calculated-custom-fields'); ?>
    </a>

    <a class="tablinks" id="add_new_tab"><i class="fa fa-circle-plus" aria-hidden="true"></i> <?php esc_html_e('Add more fields', 'calculated-custom-fields'); ?></a>
    <a class="tablinks" id="settings"><i class="fa fa-cog" aria-hidden="true"></i> <?php esc_html_e('Settings', 'calculated-custom-fields'); ?></a>
    <a class="tablinks" id="demo_data"><i class="fa fa-laptop" aria-hidden="true"></i> <?php esc_html_e('Data', 'calculated-custom-fields'); ?></a>
</a>
  </div>

  <div id="London" class="tabcontent">
    <?php if (!$price) {
      echo "<div><p class=\"error notice\" style=\"border-left:3px solid red;\">" . esc_html__('Product regular price has to be set.', 'calculated-custom-fields') . "</p></div>";
    } else {
      $option_identificator = "op1";
      require plugin_dir_path(__FILE__) . 'options-admin-tabs/admin_tab_template.php'; 
    } ?>
  </div>

  <div id="Paris" class="tabcontent">
    <?php if (!$price) {
      echo "<div><p class=\"error notice\" style=\"border-left:3px solid red;\">" . esc_html__('Product regular price has to be set.', 'calculated-custom-fields') . "</p></div>";
    } else {
      $option_identificator = "op2";
      require plugin_dir_path(__FILE__) . 'options-admin-tabs/admin_tab_template.php'; 
    } ?>
  </div>

  <div id="Tokyo" class="tabcontent">
    <?php 
    require plugin_dir_path(__FILE__) . 'options-admin-tabs/link-tab.php'; ?>
  </div>

  <div id="Helsinki" class="tabcontent">
    <?php require plugin_dir_path(__FILE__) . 'options-admin-tabs/settings_tab.php'; ?>
  </div>

  <div id="Roma" class="tabcontent">
    <?php require plugin_dir_path(__FILE__) . 'options-admin-tabs/demo_tab.php'; ?>
  </div>


  </div>

