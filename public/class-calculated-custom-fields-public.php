<?php

/**
 * The public-facing functionality of the plugin.
 * 
 * @link       https://digital-stg.com
 * @since      1.0.0
 *
 * @package    Calculated_Custom_Fields
 * @subpackage Calculated_Custom_Fields/public
 * @author     digital-stg <contact@digital-stg.com> 
 * 
 */

class Calculated_Custom_Fields_Public

{
	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name  
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    
	 */
	private $version;

	/**
	 * The current price input id
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $price_input_id   
	 */

	 private $price_input_id = ".woocommerce-Price-amount.amount";

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name      
	 * @param      string    $version    
	 */
	

	public function __construct($calculated_custom_fields, $version)

	{
		$this->plugin_name = $calculated_custom_fields;
		$this->version = $version;
		$this->price_input_id = $this->price_input_id;

		add_filter('woocommerce_loop_add_to_cart_link', array($this, 'ccf_change_add_to_cart_button_text_if_option'), 10, 1);
		add_action('woocommerce_before_add_to_cart_button', array($this, 'ccf_woocommerce_options_fields_display'), 30);
		add_filter('woocommerce_add_cart_item_data', array($this, 'cpm_add_cart_item_data'), 10, 3);
		add_filter( 'woocommerce_get_item_data', array($this, 'cpm_get_item_data'), 10, 2 );
		add_action( 'woocommerce_checkout_create_order_line_item', array($this, 'cpm_checkout_create_order_line_item'), 10, 4 );
		add_filter('upload_dir', array($this, 'ccf_change_default_upload_subdir'), 10, 1);

		if (is_admin()) {
		//is_admin() check required for ajax script (even in front-end for non-logged user)
		add_action('wp_ajax_front_end_ajax', array($this, 'front_end_ajax'), 10, 1);
		add_action('wp_ajax_nopriv_front_end_ajax', array($this, 'front_end_ajax'), 10, 1);
		}

		$option_quantity_related = get_option('quantity_related');
		if ($option_quantity_related) {
			add_action('woocommerce_before_calculate_totals', array($this, 'ccf_add_option_cost_to_product_price'), 10, 1);
		} 
	}

	// Register the stylesheets for the public-facing side of the site.
	public function enqueue_styles()
	{
		wp_enqueue_style($this->plugin_name, plugin_dir_url(__FILE__) . 'css/calculated-custom-fields-public.css', array(), $this->version, 'all');
		wp_enqueue_style($this->plugin_name . 'fafa', plugin_dir_url(__DIR__) . 'admin/assets/fontawesome/css/all.css', array(), $this->version, 'all');
	}

	//Register the JavaScript for the public-facing side of the site.
	public function enqueue_scripts()
	{

		if (is_product()) {

			//enqueue select menu
			wp_enqueue_script('jquery-ui-selectmenu');
			
			//enqueue select menu
			wp_enqueue_script('jquery-ui-checkboxradio');
			
			//JS dom ready events + swap
			wp_enqueue_script($this->plugin_name, plugin_dir_url(__FILE__) . 'js/calculated-custom-fields-public.js', array('jquery'), $this->version, false);
			
			//JQuery
			wp_enqueue_script($this->plugin_name . 'change_js', plugin_dir_url(__FILE__) . 'js/options_fields/public_side_change.js', array('jquery'), $this->version, false);
			wp_enqueue_script($this->plugin_name . 'quantity_js', plugin_dir_url(__FILE__) . 'js/options_fields/public_side_quantity.js', array('jquery'), $this->version, false);
			
			// Getting PHP values and pass them to JS File -> wp_add_inline_script() 
			wp_register_script($this->plugin_name . 'public_js_inline_script', '', array("jquery"), '', true);
			wp_enqueue_script($this->plugin_name . 'public_js_inline_script');

			$post = get_post();
			$product = wc_get_product($post->ID);
			if (!empty($product)) {
				require plugin_dir_path(__FILE__) . 'data/public-inline-script.php';
			}

			//Ajax public side register
			$upload_nonce = wp_create_nonce('upload_nonce');

			wp_enqueue_script(
				'ajax-script',
				plugins_url('/js/options_fields/public_side_ajax.js', __FILE__),
				array('jquery'),
				'1.0.,0',
				true
			);

			wp_localize_script(
				'ajax-script',
				'front_end_ajax',
				array(
					'ajax_url' => admin_url('admin-ajax.php'),
					'nonce'    => $upload_nonce,
					'currency' => get_woocommerce_currency_symbol(),
					'currency_position' => get_option('woocommerce_currency_pos'),
				)
			);
		}
	}

	// "Customize" button instead of "Add to cart" button on shop page if product option set
	function ccf_change_add_to_cart_button_text_if_option($button)
	{
		$post = get_post();
		$product = wc_get_product($post->ID);
		$optionName = $product->get_meta('op1_option_name');
		$optionName_2 = $product->get_meta('op2_option_name');
		if ($optionName || $optionName_2) {
			$button_text = get_option('add_to_cart_text');
			$button = "<div class=\"wp-block-button wc-block-components-product-button align-center\"><a href=". $product->get_permalink() . "><button class=\"wp-block-button__link wp-element-button wc-block-components-product-button__button  product_type_simple has-font-size has-small-font-size has-text-align-center\">" . $button_text . "</button></a></div>";
		}
		
		return $button;

	}

	// Display fields on the product page before the add to cart button
	function ccf_woocommerce_options_fields_display()
	{
		require plugin_dir_path(__FILE__) . 'partials/calculated-custom-fields-public-display.php';
	}

	// Add cart item data
	function cpm_add_cart_item_data($cart_item_data, $product_id, $variation_id)
	{
		$i = 1;
		do {
			$option_identificator = 'op' . $i;
			require plugin_dir_path(__FILE__) . 'cart/cart_item_data.php';
			$i++;
		} while ($i <= 2);

		return $cart_item_data;
	}

	// display cart item date on cart page
	function cpm_get_item_data($item_data, $cart_item_data) 
		{
			$i = 1;
			do {
				$option_identificator = 'op' . $i;
				require plugin_dir_path(__FILE__) . 'cart/cart_options_display.php';
				$i++;
			} while ($i <= 2);
			return $item_data;
		}

	   // display custom data in order review and admin order review
		function cpm_checkout_create_order_line_item($item, $cart_item_key, $values, $order) {

		$i = 1;
		do {
			$option_identificator = 'op' . $i;
			require plugin_dir_path(__FILE__) . 'cart/order_review_meta.php';
			$i++;
		} while ($i <= 2);
		}


	function ccf_add_option_cost_to_product_price($cart)
	{
		foreach ($cart->get_cart() as $index => $cart_item) {
			if (isset($cart_item['new_price'])) {
				$price = $cart_item['new_price'];
				$cart_item['data']->set_price(($price));
			}
		};
	}

	//Change defaut upload sub directory to wp-content/uploads/front-uploads
	function ccf_change_default_upload_subdir($upload_dir)
	{
		global $wp_filter; //check if the filter doesn't already exists before.
		if (!isset($wp_filter['upload_dir'])) {
			return;
		} else if (doing_action('wp_ajax_front_end_ajax') || doing_action('wp_ajax_nopriv_front_end_ajax')) {
			$upload_dir['subdir'] = '/front-uploads';
			$upload_dir['path'] = $upload_dir['basedir'] . $upload_dir['subdir'];
			$upload_dir['url'] = $upload_dir['baseurl'] . $upload_dir['subdir'];
		} else {
			$upload_dir['path'] = $upload_dir['basedir'];
			$upload_dir['url'] = $upload_dir['baseurl'];
		}
		return $upload_dir;
	}

	//Front-end Ajax file upload 
	function front_end_ajax($cart_item_data)
	{
		// Check nonce
		if (
			isset($_POST['upload_nonce'])
			&& wp_verify_nonce($_POST['upload_nonce'], 'upload_nonce')
		) {
			// These files need to be included as dependencies when upload on front end
			require_once(ABSPATH . 'wp-admin/includes/image.php');
			require_once(ABSPATH . 'wp-admin/includes/file.php');
			require_once(ABSPATH . 'wp-admin/includes/media.php');

			//Handling upload
			$uploaded_file_name = $_POST['file_name'];
			$uploaded_file = $_FILES['file'];
			$product_id = $_POST['product_id'];
			$option_identificator = $_POST['option_id'];
			$quantity = $_POST['quantity'];
			$upload_charge = $_POST['upload_charge'];
			$upload_overrides = ['test_form' => false];

			$mimes_types = get_allowed_mime_types();
			$product = wc_get_product($product_id);
			foreach ($mimes_types as $mime) {
				$i = 0;
				$file_mime_type = mime_content_type($_FILES['file']['tmp_name']);
				$product_allowed_mime_type = $product->get_meta($option_identificator . '_' . $mime);
				if ($file_mime_type === $product_allowed_mime_type) {
					$i = 1;
					break;
				}
			}
			if ($i < 1) {
				return;
			}

			//Check file size
			$admin_allowed_max_size = floatval($product->get_meta($option_identificator . '_upload_max_size'));
			$file_size = $_FILES['file']['size']; //bytes 
			$filesize = round($file_size / 1024 / 1024, 1); //Megabytes

			if (!empty($admin_allowed_max_size) && $filesize > $admin_allowed_max_size) {
				echo '<p class="cp_output"><i class="fa-solid fa-triangle-exclamation"></i>&nbsp;' . esc_html__('File size exceeds the maximum limit. Unallowed.', 'calculated-custom-fields') . '</p>';
				die;
			}

			//Handle upload
			$movefile = wp_handle_upload($uploaded_file, $upload_overrides);

			if ($movefile && !isset($movefile['error'])) {

				//Sucess response
				$disable_output = $product->get_meta($option_identificator . '_disable_output');
				$quantity_related = get_option('quantity_related');
				$option_fees = $upload_charge * $quantity;
				//Input to tell JS quantity is related for calculation in response 
				echo "<input type=\"hidden\" name=\"quantity_related\" value=\"true\" />";
				
				echo '<p class="cp_output" style="margin-bottom:10px;">' . esc_html__('File was successfully uploaded.', 'calculated-custom-fields') . '</p>';
				$upload_dir = wp_upload_dir();
				$file_path = $upload_dir['url'] . '/' . $uploaded_file_name;

				if (strpos($file_mime_type, 'image') !== false) {
					//File is an image
					//echo '<img style="border:1px solid #e7e7e7;objet-fit:cover;" src=' . $file_path . ' width=150 height=150 />';
					echo '<p class="cp_output">' . $uploaded_file_name . '</p>';
				} else {
					//File is not an image
					echo '<p class="cp_output">' . $uploaded_file_name . '</p>';
				}
			} else {
				//error message
				echo '<p class="cp_output">' . $movefile['error'] . '</p>';
			}
		}
		wp_die();
	}
}
