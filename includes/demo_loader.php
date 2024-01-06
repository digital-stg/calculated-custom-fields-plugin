<?php

/**
 * Loads demo data (14 custom fields).
 *
 * @link       https://github.com/digital-stg
 * @since      1.0.0
 * @author     digitalStg <contact@digital-stg.com>
 * @package    Calculated_Custom_Fields
 * @subpackage Calculated_Custom_Fields/includes
 */


/*----------------------- CUSTOM FIELDS ---------------------------*/

 //Create "Image field"
 $post_id = wp_insert_post( array('post_content' => '', 'post_title' => 'Image field', 'post_type' => 'product', 'post_status' => 'publish') );
wp_set_object_terms( $post_id, 'simple', 'product_type' );

$attachmentId = $attachmentId_2 = $attachmentId_3 = $attachmentId_4 = "";

$file = array();
$file['name'] = 'https://ccf-demo-store.digital-stg.com/wp-content/uploads/2024/01/triangle.png';
$file['tmp_name'] = download_url($file['name']);
if($file['name']) : $attachmentId = media_handle_sideload($file, $post_id); endif;


$file_2 = array();
$file_2['name'] = 'https://ccf-demo-store.digital-stg.com/wp-content/uploads/2024/01/Square.png';
$file_2['tmp_name'] = download_url($file_2['name']);
if($file_2['name']) : $attachmentId_2 = media_handle_sideload($file_2, $post_id); endif;

$file_3 = array();
$file_3['name'] = 'https://ccf-demo-store.digital-stg.com/wp-content/uploads/2024/01/circle.png';
$file_3['tmp_name'] = download_url($file_3['name']);
if($file_3['name']) : $attachmentId_3 = media_handle_sideload($file_3, $post_id);  endif;

$file_4 = array();
$file_4['name'] = 'https://ccf-demo-store.digital-stg.com/wp-content/uploads/2024/01/losange.png';
$file_4['tmp_name'] = download_url($file_4['name']);
if($file_4['name']) : $attachmentId_4 = media_handle_sideload($file_4, $post_id); endif;


$product_meta = ['_regular_price' => '3.00',
'_sale_price' => '3.00',
'_price' => '3.00',
'op1_field_type' => '7',
'op1_option_name' => 'Image',
'op1_img_1' => $attachmentId,
'op1_img_2' => $attachmentId_2,
'op1_img_3' => $attachmentId_3,
'op1_img_4' => $attachmentId_4,
'op1_img_name_1' => 'Img A',
'op1_img_value_1'=> '1',
'op1_img_name_2'=> 'Img B',
'op1_img_value_2'=> '2',
'op1_img_name_3'=> 'Img C',
'op1_img_value_3'=> '3',
'op1_img_name_4'=> 'Img D',
'op1_img_value_4'=> '4',
];

foreach($product_meta as $meta_key => $meta_value) {
update_post_meta($post_id, $meta_key, $meta_value);
};


//Create "Text field"
 $post_id = wp_insert_post( array('post_content' => '', 'post_title' => 'Text field', 'post_type' => 'product', 'post_status' => 'publish') );
wp_set_object_terms( $post_id, 'simple', 'product_type' );

$product_meta = [ '_regular_price' => '1.00',
'_sale_price' => '1.00',
'_price' => '1.00',
'op1_field_type' => '1',
'op1_option_name' => 'Write a custom text',
'op1_text_input_extra_value' => '10'
];

foreach($product_meta as $meta_key => $meta_value) {
update_post_meta($post_id, $meta_key, $meta_value);
};

//Create "Number field"
 $post_id = wp_insert_post( array('post_content' => '', 'post_title' => 'Number field', 'post_type' => 'product', 'post_status' => 'publish') );
wp_set_object_terms( $post_id, 'simple', 'product_type' );

$product_meta = [ '_regular_price' => '2.00',
'_sale_price' => '2.00',
'_price' => '2.00',
'op1_field_type' => '6',
'op1_option_name' => 'Write a custom number',
'op1_number_input_extra_value' => '23'
];

foreach($product_meta as $meta_key => $meta_value) {
update_post_meta($post_id, $meta_key, $meta_value);
};

 //Create "Email field"
 $post_id = wp_insert_post( array('post_content' => '', 'post_title' => 'Email field', 'post_type' => 'product', 'post_status' => 'publish') );
wp_set_object_terms( $post_id, 'simple', 'product_type' );

$product_meta = [ '_regular_price' => '3.00',
'_sale_price' => '3.00',
'_price' => '3.00',
'op1_field_type' => '8',
'op1_option_name' => 'Write your email',
'op1_email_extra_value' => '6'
];

foreach($product_meta as $meta_key => $meta_value) {
update_post_meta($post_id, $meta_key, $meta_value);
};

 //Create "Textarea field"
 $post_id = wp_insert_post( array('post_content' => '', 'post_title' => 'Textarea field', 'post_type' => 'product', 'post_status' => 'publish') );
wp_set_object_terms( $post_id, 'simple', 'product_type' );

$product_meta = [ '_regular_price' => '1.00',
'_sale_price' => '1.00',
'_price' => '1.00',
'op1_field_type' => '4',
'op1_option_name' => 'Write a custom message',
'op1_text_area_extra_value' => '19'
];

foreach($product_meta as $meta_key => $meta_value) {
update_post_meta($post_id, $meta_key, $meta_value);
};

 //Create "Phone field"
 $post_id = wp_insert_post( array('post_content' => '', 'post_title' => 'Phone field', 'post_type' => 'product', 'post_status' => 'publish') );
wp_set_object_terms( $post_id, 'simple', 'product_type' );

$product_meta = [ '_regular_price' => '2.00',
'_sale_price' => '2.00',
'_price' => '2.00',
'op1_field_type' => '14',
'op1_option_name' => 'Write your phone',
'op1_phone_extra_value' => '15',
'op1_national_code' => 'US',
];

foreach($product_meta as $meta_key => $meta_value) {
update_post_meta($post_id, $meta_key, $meta_value);
};

 //Create "Select field"
 $post_id = wp_insert_post( array('post_content' => '', 'post_title' => 'Dropdown field', 'post_type' => 'product', 'post_status' => 'publish') );
wp_set_object_terms( $post_id, 'simple', 'product_type' );

$product_meta = [ '_regular_price' => '3.00',
'_sale_price' => '3.00',
'_price' => '3.00',
'op1_field_type' => '2',
'op1_option_name' => 'Select',
'op1_sub_1_name' => 'A',
'op1_Sub_1_value' => '1',
'op1_sub_2_name' => 'B',
'op1_Sub_2_value' => '2',
'op1_sub_3_name' => 'C',
'op1_Sub_3_value' => '3',
'op1_sub_4_name' => 'D',
'op1_Sub_4_value' => '4',
'op1_sub_5_name' => 'E',
'op1_Sub_5_value' => '5',
'op1_sub_6_name' => 'F',
'op1_Sub_6_value' => '6',
];

foreach($product_meta as $meta_key => $meta_value) {
update_post_meta($post_id, $meta_key, $meta_value);
};


 //Create "Checkboxes field"
 $post_id = wp_insert_post( array('post_content' => '', 'post_title' => 'Checkboxes field', 'post_type' => 'product', 'post_status' => 'publish') );
wp_set_object_terms( $post_id, 'simple', 'product_type' );

$product_meta = [ '_regular_price' => '1.00',
'_sale_price' => '1.00',
'_price' => '1.00',
'op1_field_type' => '3',
'op1_option_name' => 'Checkboxes',
'op1_checkbox_name' => 'A',
'op1_field_value'=> '1',
'op1_checkbox_name_2'=> 'B',
'op1_field_value_2'=> '2',
'op1_checkbox_name_3'=> 'C',
'op1_field_value_3'=> '3',
'op1_checkbox_name_4'=> 'D',
'op1_field_value_4'=> '4',
];

foreach($product_meta as $meta_key => $meta_value) {
update_post_meta($post_id, $meta_key, $meta_value);
};

 //Create "Radio field"
 $post_id = wp_insert_post( array('post_content' => '', 'post_title' => 'Radio field', 'post_type' => 'product', 'post_status' => 'publish') );
wp_set_object_terms( $post_id, 'simple', 'product_type' );

$product_meta = ['_regular_price' => '2.00',
'_sale_price' => '2.00',
'_price' => '2.00',
'op1_field_type' => '5',
'op1_option_name' => 'Radio',
'op1_radio_name_1' => 'A',
'op1_radio_value_1'=> '1',
'op1_radio_name_2'=> 'B',
'op1_radio_value_2'=> '2',
'op1_radio_name_3'=> 'C',
'op1_radio_value_3'=> '3',
'op1_radio_name_4'=> 'D',
'op1_radio_value_4'=> '4',
];

foreach($product_meta as $meta_key => $meta_value) {
update_post_meta($post_id, $meta_key, $meta_value);
};


 //Create "Buttons field"
 $post_id = wp_insert_post( array('post_content' => '', 'post_title' => 'Buttons field', 'post_type' => 'product', 'post_status' => 'publish') );
wp_set_object_terms( $post_id, 'simple', 'product_type' );

$product_meta = ['_regular_price' => '1.00',
'_sale_price' => '1.00',
'_price' => '1.00',
'op1_field_type' => '9',
'op1_option_name' => 'Buttons',
'op1_btnswap_name_1' => 'A',
'op1_btnswap_value_1' => '1',
'op1_btnswap_name_2' => 'B',
'op1_btnswap_value_2' => '2',
'op1_btnswap_name_3' => 'C',
'op1_btnswap_value_3' => '3',
'op1_btnswap_name_4' => 'D',
'op1_btnswap_value_4' => '4',
'op1_btnswap_name_5' => 'E',
'op1_btnswap_value_5' => '5',
'op1_btnswap_name_6' => 'F',
'op1_btnswap_value_6' => '6',
];

foreach($product_meta as $meta_key => $meta_value) {
update_post_meta($post_id, $meta_key, $meta_value);
};


 //Create "Color field"
 $post_id = wp_insert_post( array('post_content' => '', 'post_title' => 'Color field', 'post_type' => 'product', 'post_status' => 'publish') );
wp_set_object_terms( $post_id, 'simple', 'product_type' );

$product_meta = ['_regular_price' => '2.00',
'_sale_price' => '2.00',
'_price' => '2.00',
'op1_field_type' => '10',
'op1_option_name' => 'Color',
'op1_color_extra_value' => '26'
];

foreach($product_meta as $meta_key => $meta_value) {
update_post_meta($post_id, $meta_key, $meta_value);
};


 //Create "Calculation field"
 $post_id = wp_insert_post( array('post_content' => '', 'post_title' => 'Calculation field', 'post_type' => 'product', 'post_status' => 'publish') );
wp_set_object_terms( $post_id, 'simple', 'product_type' );

$product_meta = ['_regular_price' => '6.00',
'_sale_price' => '6.00',
'_price' => '6.00',
'op1_field_type' => '11',
'op1_option_name' => 'Set your width',
'op1_calcul_formula' => '($user_value * $second_user_value) + 10',
'op1_calcul_label_2' => 'Set your height'
];

foreach($product_meta as $meta_key => $meta_value) {
update_post_meta($post_id, $meta_key, $meta_value);
};



 //Create "Url field"
 $post_id = wp_insert_post( array('post_content' => '', 'post_title' => 'Url field', 'post_type' => 'product', 'post_status' => 'publish') );
wp_set_object_terms( $post_id, 'simple', 'product_type' );

$product_meta = ['_regular_price' => '3.00',
'_sale_price' => '3.00',
'_price' => '3.00',
'op1_field_type' => '12',
'op1_option_name' => 'Write your URL',
'op1_url_extra_value' => '16',
];

foreach($product_meta as $meta_key => $meta_value) {
update_post_meta($post_id, $meta_key, $meta_value);
};


 //Create "Upload field"
 $post_id = wp_insert_post( array('post_content' => '', 'post_title' => 'Upload field', 'post_type' => 'product', 'post_status' => 'publish') );
wp_set_object_terms( $post_id, 'simple', 'product_type' );

$product_meta = ['_regular_price' => '10.00',
'_sale_price' => '10.00',
'_price' => '10.00',
'op1_field_type' => '13',
'op1_option_name' => 'Upload ajax',
'op1_upload_value' => '33',
'op1_image/jpeg' => 'image/jpeg',
'op1_image/png' => 'image/png',
'op1_application/pdf' => 'application/pdf',
'op1_input_description' => '100 mimes types available. In this example, only pdf, jpg and png are allowed.'
];

foreach($product_meta as $meta_key => $meta_value) {
update_post_meta($post_id, $meta_key, $meta_value);
};




