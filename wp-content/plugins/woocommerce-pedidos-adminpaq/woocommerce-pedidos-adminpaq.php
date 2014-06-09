<?php
/*
    Plugin Name: Exportación de Pedidos para ADMINPAQ
    Plugin URI: http://masrenovable.com
    Description: Exporta los pedidos en formato de importación TXT para ADMINPAQ.
    			 Plugin desarrollado para WooCommerce.
    Version: 0.1b
    Author: Ruy R. Garcia
    Author URI: http://masrenovable.com
*/
 
/**
 * Verifica si WooCommerce esta activo
 **/
if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {

    add_action('add_menu', 'agregar_submenu');

    function agregar_submenu() {
        // add_options_page( 'ADMINPAQ', 'ADMINPAQ', 'manage_options', 'my-unique-identifier', 'my_plugin_options' );
        add_submenu_page( 'tools.php', 'ADMINPAQ', 'ADMINPAQ', 'manage_options', 'my-unique-identifier', 'my_plugin_options' );
    }

    // // mt_settings_page() displays the page content for the Test settings submenu
    // function mt_settings_page() {
    //     echo "<h2>" . __( 'Test Settings', 'menu-test' ) . "</h2>";
    // }

    function my_plugin_options() {
        if ( !current_user_can( 'manage_options' ) )  {
            wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
        }
        echo '<div class="wrap">';
        echo '<p>Here is where the form would go if I actually had options.</p>';
        echo '</div>';
    }

	// function mostrar_boton_descarga(){
	// }
	// add_filter('woocommerce_right_now_orders_table_end', 'mostrar_boton_descarga');
}

