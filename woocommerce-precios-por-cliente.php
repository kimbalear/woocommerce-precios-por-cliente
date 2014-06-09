<?php
/*
    Plugin Name: Precio por cliente
    Plugin URI: http://masrenovable.com
    Description: Modifica el precio de todos los productos dada una funcion y segun el 
				grupo de usuario que lo consulte. Plugin desarrollado para WooCommerce.
    Version: 0.1b
    Author: Ruy R. Garcia
    Author URI: http://masrenovable.com
*/
 
/**
 * Verifica si WooCommerce esta activo
 **/

if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
	// $factorDescuento = 0.8608080808080808;
	function precio_mayorista($precio) {
		// global $factorDescuento;
		$grupoUsuario = es_usuario_mayorista();
		// echo var_dump($grupoUsuario);
		if (!is_null($grupoUsuario)) {
			if (in_array('mayorista', $grupoUsuario)) {
				$discountPrice = $precio;
			} else if (in_array('consumidor', $grupoUsuario)) {
				$discountPrice = $precio * 1.16;
			} else if (in_array('online', $grupoUsuario)) {
				$discountPrice = $precio * 1.16;
			} else {
				// es_usuario_mayorista('customer');
				$discountPrice = $precio * 1.16;
			}
			return $discountPrice;
		} else {return $precio * 1.16;}
	}

	function es_usuario_mayorista() {
		// echo var_dump(   in_array(array('mayorista', 'consumidor', 'online'), wp_get_current_user()->roles)   );
		// echo var_dump(WC()->session->customer);
		if ( !in_array('mayorista', wp_get_current_user()->roles) ) {
			$usuario = get_user_by( 'id', (int)WC()->session->customer );
		} else {
			$usuario = wp_get_current_user();
		}
		// $KWS_User_Groups = new KWS_User_Groups();
	    // $grupo = $KWS_User_Groups->get_user_user_groups($user_ID);
	    // return $grupo[0];
	    //// $usuario = wp_get_current_user();
	    // $rol = get_role( $role );
	    return $usuario->roles;
	}
//	add_filter('woocommerce_get_price','precio_mayorista');
//	add_filter('get_product_from_item','precio_mayorista');

	// 	if ( isset($_GET['user_id']) && !empty($_GET['user_id']) ) {
	// 	$GLOBALS['woocommerce']->session->customer = $_GET['user_id'];
	// }
	// 	echo $GLOBALS['woocommerce']->session->customer;

}
