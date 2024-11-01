<?php
/**
 * Plugin Name: WP Paytoolbox
 * Plugin URI: http://wp.paytoolbox.com
 * Description: An eCommerce plugin
 * Version: 1.0
 * Author: Paytoolbox
 * Author URI: https://paytoolbox.com
 *
 * @package PayToolbox
 */

include 'WpPaytoolbox-class.php';
include 'models/WpptbProduct.php';
include 'models/WpptbCategory.php';
include 'vendor/autoload.php';


define("WPPTB_BASE_URL", "https://demo.paytoolbox.com");
define("WPPTB_API_URL", WPPTB_BASE_URL. "/shop-api");
define('WPPTB_API_USERNAME', 'test@paytoolbox.com');
define('WPPTB_API_PASSWORD', 'test');


function wppaytoolbox_init(){
	$WpPaytoolbox = new WpPaytoolbox();
	$WpPaytoolbox->init();
}

function wppaytoolbox_get_all_categories(){
	return $GLOBALS['wpptb-all-categories'];
}
function wppaytoolbox_get_category_products(){
	return $GLOBALS['wpptb-category-products'];
}
function wppaytoolbox_get_product(){
	return $GLOBALS['wpptb-product'];
}

add_action('plugins_loaded','wppaytoolbox_init');

