<?php

/**
 * Tab for importing demo data
 *
 * @link       https://digital-stg.com
 * @since      1.0.0
 *
 * @package    Calculated_Custom_Fields
 * @subpackage Calculated_Custom_Fields/admin/partials/
 */


?>

<div class="top_info_div"><span><i class="fa fa-file-import"></i> &nbsp;<?php echo esc_html__('You can import 14 sample products.', 'calculated-custom-fields') ?></span></div>

<div>

    <p class="form-field">
        <label for=""><?php esc_html_e('Demo data : ', 'calculated-custom-fields') ?></label><input type="submit" class="button button-small" style="margin:0;" name="import_demo_data" value="<?php esc_html_e('Import', 'calculated-custom-fields') ?>" onclick="return confirm('Do you want to import 14 products and 4 images ?');">
    </p>

</div>