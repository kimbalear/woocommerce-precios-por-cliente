<?php
/*
  Plugin Name: SYN Media WooCommerce Fedex
  Plugin URI: http://www.synmedia.ca
  Description: Automatic Shipping Calculation using the Fedex Shipping API for WooCommerce
  Version: 1.0.2
  Author: Guillaume Prieur
  Author URI: http://www.synmedia.ca
  Requires at least: 3.1
  Tested up to: 3.3.1

  Copyright: © 2012-2013 SYN Media Inc.
  License: GNU General Public License v3.0
  License URI: http://www.gnu.org/licenses/gpl-3.0.html
 */
 
if ( ! class_exists( 'SYN_Auto_Update' ) )
	require_once( 'syn-updates/syn_auto_update.php' );

function syn_fedex_update_init(){
	$syn_update = new SYN_Auto_Update( get_plugin_data(__FILE__), plugin_basename( __FILE__ ), '4548833', 'QXKYTd5u3oMPhJPPeHNccNvvO' );
}
add_action('admin_init', 'syn_fedex_update_init', 11);

/**
 * Localisation
 */
load_plugin_textdomain( 'wc_fedex', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );

require_once('functions.php');

/**
 * Check if WooCommerce is active
 */
if ( is_woo_enabled() ) {

	require_once('functions.php');

	/**
	 * woocommerce_init_shipping_table_rate function.
	 *
	 * @access public
	 * @return void
	 */
	function wc_fedex_init() {
		if ( ! class_exists( 'WC_Shipping_Fedex' ) )
			include_once( 'classes/class-wc-shipping-fedex.php' );
	}

	add_action( 'woocommerce_shipping_init', 'wc_fedex_init' );

	/**
	 * wc_fedex_add_method function.
	 *
	 * @access public
	 * @param mixed $methods
	 * @return void
	 */
	function wc_fedex_add_method( $methods ) {
		$methods[] = 'WC_Shipping_Fedex';
		return $methods;
	}

	add_filter( 'woocommerce_shipping_methods', 'wc_fedex_add_method' );
	
	/**
	 * Display a notice if we don't have a origin city or province selected.
	 * @return void
	 */
	function wc_fedex_notices() {
	
		if ( ! class_exists( 'WC_Shipping_Fedex' ) )
			include_once( 'classes/class-wc-shipping-fedex.php' );
	
		$fedex = new WC_Shipping_Fedex();
		
		if( empty($fedex->origin_postalcode) ){
			
			$fedex_url = self_admin_url( 'admin.php?page=woocommerce_settings&tab=shipping&section=WC_Shipping_Fedex' );

			$message = __( 'You must enter your post code before you can use Fedex shipping.' , 'wc_fedex' );
	
			echo '<div class="updated fade"><p><a href="' . $fedex_url . '">' . $message . '</p></div>' . "\n";
			
		}
	
	}

	add_action( 'admin_notices', 'wc_fedex_notices' );

}

?>