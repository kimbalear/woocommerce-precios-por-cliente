<!DOCTYPE html>
<!--[if IE 8]>
<html xmlns="http://www.w3.org/1999/xhtml" class="ie8 wp-toolbar"  lang="es-ES" class="no-js">
<![endif]-->
<!--[if !(IE 8) ]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" class="wp-toolbar"  lang="es-ES" class="no-js">
<!--<![endif]-->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Añadir nuevo pedido &lsaquo; Distribuidora GC En Línea &#8212; WordPress</title>
<script type="text/javascript">
addLoadEvent = function(func){if(typeof jQuery!="undefined")jQuery(document).ready(func);else if(typeof wpOnload!='function'){wpOnload=func;}else{var oldonload=wpOnload;wpOnload=function(){oldonload();func();}}};
var ajaxurl = '/dev/wp_gc/wp-admin/admin-ajax.php',
	pagenow = 'shop_order',
	typenow = 'shop_order',
	adminpage = 'post-new-php',
	thousandsSeparator = '.',
	decimalPoint = ',',
	isRtl = 0;
</script>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link rel='stylesheet' href='http://masrenovable.com/dev/wp_gc/wp-admin/load-styles.php?c=1&amp;dir=ltr&amp;load=dashicons,admin-bar,wp-admin,buttons,wp-auth-check,wp-color-picker,media-views&amp;ver=3.9.1' type='text/css' media='all' />
<link rel='stylesheet' id='open-sans-css'  href='//fonts.googleapis.com/css?family=Open+Sans%3A300italic%2C400italic%2C600italic%2C300%2C400%2C600&#038;subset=latin%2Clatin-ext&#038;ver=3.9.1' type='text/css' media='all' />
<!--[if lte IE 7]>
<link rel='stylesheet' id='ie-css'  href='http://masrenovable.com/dev/wp_gc/wp-admin/css/ie.min.css?ver=3.9.1' type='text/css' media='all' />
<![endif]-->
<link rel='stylesheet' id='a3rev-wp-admin-style-css'  href='http://masrenovable.com/dev/wp_gc/wp-content/plugins/woocommerce-dynamic-gallery/assets/css/a3_wp_admin.css?ver=3.9.1' type='text/css' media='all' />
<link rel='stylesheet' id='woocommerce_admin_menu_styles-css'  href='http://masrenovable.com/dev/wp_gc/wp-content/plugins/woocommerce/assets/css/menu.css?ver=2.1.8' type='text/css' media='all' />
<link rel='stylesheet' id='woocommerce_admin_styles-css'  href='http://masrenovable.com/dev/wp_gc/wp-content/plugins/woocommerce/assets/css/admin.css?ver=2.1.8' type='text/css' media='all' />
<link rel='stylesheet' id='jquery-ui-style-css'  href='//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css?ver=2.1.8' type='text/css' media='all' />
<link rel='stylesheet' id='mediaelement-css'  href='http://masrenovable.com/dev/wp_gc/wp-includes/js/mediaelement/mediaelementplayer.min.css?ver=2.13.0' type='text/css' media='all' />
<link rel='stylesheet' id='wp-mediaelement-css'  href='http://masrenovable.com/dev/wp_gc/wp-includes/js/mediaelement/wp-mediaelement.css?ver=3.9.1' type='text/css' media='all' />
<link rel='stylesheet' id='imgareaselect-css'  href='http://masrenovable.com/dev/wp_gc/wp-includes/js/imgareaselect/imgareaselect.css?ver=0.9.8' type='text/css' media='all' />
<link rel='stylesheet' id='ak_framework_admin-css'  href='http://masrenovable.com/dev/wp_gc/wp-content/plugins/capsman/framework/styles/admin.css?ver=0.8' type='text/css' media='all' />
<link rel='stylesheet' id='ak_capsman_admin-css'  href='http://masrenovable.com/dev/wp_gc/wp-content/plugins/capsman/admin.css?ver=1.3.2' type='text/css' media='all' />
<link rel='stylesheet' id='woocommerce-activation-css'  href='http://masrenovable.com/dev/wp_gc/wp-content/plugins/woocommerce/assets/css/activation.css?ver=3.9.1' type='text/css' media='all' />
<script type='text/javascript'>
/* <![CDATA[ */
var woocommerce_admin = {"i18n_decimal_error":"Por favor ingrese en formato decimal (.) sin separadores de miles.","i18n_mon_decimal_error":"Por favor ingrese en formato decimal (.) sin separadores de miles y s\u00edmbolo de moneda.","decimal_point":".","mon_decimal_point":"."};
/* ]]> */
</script>
<script type='text/javascript'>
/* <![CDATA[ */
var accounting_params = {"mon_decimal_point":"."};
/* ]]> */
</script>
<script type='text/javascript'>
/* <![CDATA[ */
var woocommerce_admin_meta_boxes = {"remove_item_notice":"\u00bfEst\u00e1 seguro de que quiere eliminar los art\u00edculos seleccionados? Si ya has reducido el stock de este art\u00edculo, o este pedido fue realizado por un cliente, tendr\u00e1 que restaurar manualmente el stock del art\u00edculo.","i18n_select_items":"Por favor, selecciona algunos art\u00edculos.","remove_item_meta":"\u00bfBorrar este atributo del art\u00edculo?","remove_attribute":"\u00bfEliminar este atributo?","name_label":"Nombre","remove_label":"Eliminar","click_to_toggle":"Haz click para alternar","values_label":"Valor\/es","text_attribute_tip":"Introduzca alg\u00fan texto, o algunos atributos separados por barras (|).","visible_label":"Visible en la p\u00e1gina de producto","used_for_variations_label":"Usado para variaciones","new_attribute_prompt":"Introduzca un nombre para el nuevo t\u00e9rmino del atributo:","calc_totals":"\u00bfCalcular totales basado en los articulos, descuentos y env\u00edo?","calc_line_taxes":"\u00bfCalcular impuestos por l\u00ednea? Esto calcular\u00e1 los impuestos basados en el pa\u00eds de los clientes. Si no se ha especificado una direcci\u00f3n de facturaci\u00f3n\/env\u00edo se usar\u00e1 el pa\u00eds base de la tienda.","copy_billing":"\u00bfCopiar la informaci\u00f3n de facturaci\u00f3n a la informaci\u00f3n de env\u00edo? Esto eliminar\u00e1 cualquier informaci\u00f3n de env\u00edo introducida actualmente.","load_billing":"\u00bfCargar la informaci\u00f3n de facturaci\u00f3n del cliente? Esto eliminar\u00e1 la informaci\u00f3n de facturaci\u00f3n introducida actualmente.","load_shipping":"\u00bfCargar la informaci\u00f3n de env\u00edo del cliente? Esto eliminar\u00e1 la informaci\u00f3n de env\u00edo introducida actualmente.","featured_label":"Destacado","prices_include_tax":"yes","round_at_subtotal":"no","no_customer_selected":"No se ha seleccionado ning\u00fan cliente","plugin_url":"http:\/\/masrenovable.com\/dev\/wp_gc\/wp-content\/plugins\/woocommerce","ajax_url":"http:\/\/masrenovable.com\/dev\/wp_gc\/wp-admin\/admin-ajax.php","order_item_nonce":"6c8f114459","add_attribute_nonce":"a58a2c551a","save_attributes_nonce":"97eea8202e","calc_totals_nonce":"59fef516a4","get_customer_details_nonce":"6024bc4dd0","search_products_nonce":"378b24fa2b","grant_access_nonce":"71539b670c","revoke_access_nonce":"a717d3b1c1","add_order_note_nonce":"29912089d0","delete_order_note_nonce":"50edfc670e","calendar_image":"http:\/\/masrenovable.com\/dev\/wp_gc\/wp-content\/plugins\/woocommerce\/assets\/images\/calendar.png","post_id":"58789","base_country":"MX","currency_format_num_decimals":"2","currency_format_symbol":"$","currency_format_decimal_sep":".","currency_format_thousand_sep":",","currency_format":"%s\u00a0%v","rounding_precision":"4","tax_rounding_mode":"2","product_types":["external","grouped","simple","variable"],"default_attribute_visibility":"","default_attribute_variation":"","i18n_download_permission_fail":"No se puede conceder acceso - puede que el usuario ya tenga acceso a este archivo o el email de facturaci\u00f3n no est\u00e9 establecido. Asegurese de que el email est\u00e9 establecido y que el pedido ha sido guardado.","i18n_permission_revoke":"\u00bfSeguro que desea revocar el acceso a esta descarga?"};
/* ]]> */
</script>

<script type='text/javascript'>
/* <![CDATA[ */
var userSettings = {"url":"\/dev\/wp_gc\/","uid":"1","time":"1402253568"};/* ]]> */
</script>
<script type='text/javascript' src='http://masrenovable.com/dev/wp_gc/wp-admin/load-scripts.php?c=1&amp;load%5B%5D=jquery-core,jquery-migrate,utils,jquery-ui-core,jquery-ui-widget,jquery-ui-mouse,jquery-ui-sortable,jquery-ui-datepicker,pluploa&amp;load%5B%5D=d,json2&amp;ver=3.9.1'></script>
<script type='text/javascript' src='http://masrenovable.com/dev/wp_gc/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js?ver=2.66'></script>
<script type='text/javascript' src='http://masrenovable.com/dev/wp_gc/wp-content/plugins/woocommerce/assets/js/jquery-tiptip/jquery.tipTip.min.js?ver=2.1.8'></script>
<script type='text/javascript' src='http://masrenovable.com/dev/wp_gc/wp-content/plugins/woocommerce/assets/js/admin/woocommerce_admin.min.js?ver=2.1.8'></script>
<script type='text/javascript' src='http://masrenovable.com/dev/wp_gc/wp-content/plugins/woocommerce/assets/js/chosen/chosen.jquery.min.js?ver=2.1.8'></script>
<script type='text/javascript' src='http://masrenovable.com/dev/wp_gc/wp-content/plugins/woocommerce/assets/js/chosen/ajax-chosen.jquery.min.js?ver=2.1.8'></script>
<script type='text/javascript' src='http://masrenovable.com/dev/wp_gc/wp-content/plugins/woocommerce/assets/js/admin/accounting.min.js?ver=0.3.2'></script>
<script type='text/javascript' src='http://masrenovable.com/dev/wp_gc/wp-content/plugins/woocommerce/assets/js/admin/round.min.js?ver=2.1.8'></script>
<script type='text/javascript' src='http://masrenovable.com/dev/wp_gc/wp-content/plugins/woocommerce/assets/js/admin/meta-boxes.min.js?ver=2.1.8'></script>
			<style type="text/css">
				#wpadminbar.nojs .ab-top-menu > li.menupop.icon-woocommerce:hover > .ab-item:before,
				#wpadminbar .ab-top-menu > li.menupop.icon-woocommerce.hover > .ab-item:before,
				#wpadminbar.nojs .ab-top-menu > li.menupop.icon-woocommerce > .ab-item:before,
				#wpadminbar .ab-top-menu > li.menupop.icon-woocommerce > .ab-item:before {
					content: "\f174";
					font-family: 'dashicons';
				}
				@media screen and ( max-width: 782px ) {
					#wp-toolbar > ul > li#wp-admin-bar-ddw-woocommerce-admin-bar {
						display: block;
					}
					#wp-toolbar > ul > li#wp-admin-bar-ddw-woocommerce-admin-bar > a {
						margin: 0;
						padding: 0;
						position: relative;
						text-indent: -9999px;
						width: 52px;
					}
					#wp-toolbar > ul > li#wp-admin-bar-ddw-woocommerce-admin-bar > .ab-item:before {
						display: block;
						font: 400 32px/1 dashicons;
						margin: 0;
						text-align: center;
						text-indent: 0;
						top: 7px;
						width: 52px;
					}
					#wp-toolbar > ul > li#wp-admin-bar-ddw-woocommerce-admin-bar ul li .ab-sub-wrapper,
					#wp-toolbar > ul > li#wp-admin-bar-ddw-woocommerce-admin-bar ul#wp-admin-bar-ddw-woocommerce-wcgroup {
						display: none;
					}
				}
			</style>
				<style type="text/css">

			#wp-admin-bar-ddw-woocommerce-languages-de > .ab-item:before,
			#wp-admin-bar-ddw-woocommerce-wclanguages-de > .ab-item:before,
			#wp-admin-bar-ddw-woocommerce-wclanguages-nl > .ab-item:before,
			#wp-admin-bar-ddw-woocommerce-wclanguages-es > .ab-item:before,
			#wp-admin-bar-ddw-woocommerce-wclanguages-cz > .ab-item:before {
				content: '• ';
				margin-top: -2px;
			}
			#wpadminbar abbr,
			#wpadminbar .wcaba-search-input,
			#wpadminbar .wcaba-search-go {
				color: #666;
				text-shadow: none;
			}
			#wpadminbar a > abbr,
			#wpadminbar .wcaba-search-input,
			#wpadminbar .wcaba-search-go {
				color: #21759b;
			}
			#wpadminbar .wcaba-search-input,
			#wpadminbar .wcaba-search-go {
				background-color: #fff;
			}
			#wpadminbar .wcaba-search-go {
				font-size: 0.8em;
				margin: 0 0 0 2px;
				padding: 1px 4px;
			}
			.wp-admin #wpadminbar .wcaba-search-go {
				margin: 5px 0 0 2px;
			}
		</style>
			<style type="text/css">
			/*<![CDATA[*/
			.wc-badge:before {
				font-family: WooCommerce !important;
				content: "\e03d";
				color: #fff;
				-webkit-font-smoothing: antialiased;
				-moz-osx-font-smoothing: grayscale;
				font-size: 80px;
				font-weight: normal;
				width: 165px;
				height: 165px;
				line-height: 165px;
				text-align: center;
				position: absolute;
				top: 0;
				left: 0;
				margin: 0;
				vertical-align: middle;
			}
			.wc-badge {
				position: relative;;
				background: #9c5d90;
				text-rendering: optimizeLegibility;
				padding-top: 150px;
				height: 52px;
				width: 165px;
				font-weight: 600;
				font-size: 14px;
				text-align: center;
				color: #ddc8d9;
				margin: 5px 0 0 0;
				-webkit-box-shadow: 0 1px 3px rgba(0,0,0,.2);
				box-shadow: 0 1px 3px rgba(0,0,0,.2);
			}
			.about-wrap .wc-badge {
				position: absolute;
				top: 0;
				right: 0;
			}
			.about-wrap .wc-feature {
				overflow: visible !important;
				*zoom:1;
			}
			.about-wrap .wc-feature:before,
			.about-wrap .wc-feature:after {
				content: " ";
				display: table;
			}
			.about-wrap .wc-feature:after {
				clear: both;
			}
			.about-wrap .feature-rest div {
				width: 50% !important;
				padding-right: 100px;
				-moz-box-sizing: border-box;
				box-sizing: border-box;
				margin: 0 !important;
			}
			.about-wrap .feature-rest div.last-feature {
				padding-left: 100px;
				padding-right: 0;
			}
			.about-wrap div.icon {
				width: 0 !important;
				padding: 0;
				margin: 0;
			}
			.about-wrap .feature-rest div.icon:before { 
				font-family: WooCommerce !important;
				font-weight: normal;
				width: 100%;
				font-size: 170px;
				line-height: 125px;
				color: #9c5d90;
				display: inline-block;
				position: relative;
				text-align: center;
				speak: none;
				margin: 0 0 0 -100px;
				content: "\e01d";
				-webkit-font-smoothing: antialiased;
				-moz-osx-font-smoothing: grayscale;
			}
			.about-integrations {
				background: #fff;
				margin: 20px 0;
				padding: 1px 20px 10px;
			}
			/*]]>*/
		</style>
				<style type="text/css">
					</style>
		<script type="text/javascript">var _wpColorScheme = {"icons":{"base":"#999","focus":"#2ea2cc","current":"#fff"}};</script>
<style type="text/css" media="print">#wpadminbar { display:none; }</style>
</head>





<body class="wp-admin wp-core-ui no-js  post-new-php auto-fold admin-bar post-type-shop_order branch-3-9 version-3-9-1 admin-color-fresh locale-es-es multisite no-customize-support no-svg">
<script type="text/javascript">
	document.body.className = document.body.className.replace('no-js','js');
</script>

	<script type="text/javascript">
		(function() {
			var request, b = document.body, c = 'className', cs = 'customize-support', rcs = new RegExp('(^|\\s+)(no-)?'+cs+'(\\s+|$)');

			request = true;

			b[c] = b[c].replace( rcs, ' ' );
			b[c] += ( window.postMessage && request ? ' ' : ' no-' ) + cs;
		}());
	</script>
<div class="wrap">
<h2>Añadir nuevo pedido</h2>
<div id="lost-connection-notice" class="error hidden">
	<p><span class="spinner"></span> <strong>Perdida la conexión.</strong> El guardado automático se ha desactivado hasta que se vuelva a conectar.	<span class="hide-if-no-sessionstorage">Hemos hecho copias de seguridad de esta entrada en tu navegador por si acaso.</span>
	</p>
</div>
<form name="post" action="wp-admin/post.php" method="post" id="post">
<input type="hidden" id="_wpnonce" name="_wpnonce" value="844c51d96f" /><input type="hidden" name="_wp_http_referer" value="/dev/wp_gc/wp-admin/post-new.php?post_type=shop_order" /><input type="hidden" id="user-id" name="user_ID" value="1" />
<input type="hidden" id="hiddenaction" name="action" value="editpost" />
<input type="hidden" id="originalaction" name="originalaction" value="editpost" />
<input type="hidden" id="post_author" name="post_author" value="1" />
<input type="hidden" id="post_type" name="post_type" value="shop_order" />
<input type="hidden" id="original_post_status" name="original_post_status" value="auto-draft" />
<input type="hidden" id="referredby" name="referredby" value="http://masrenovable.com/dev/wp_gc/" />
<input type="hidden" name="_wp_original_http_referer" value="http://masrenovable.com/dev/wp_gc/" /><input type='hidden' id='auto_draft' name='auto_draft' value='1' /><input type='hidden' id='post_ID' name='post_ID' value='58789' /><input type="hidden" id="meta-box-order-nonce" name="meta-box-order-nonce" value="66c491df2f" /><input type="hidden" id="closedpostboxesnonce" name="closedpostboxesnonce" value="ee3f50b096" />

<div id="poststuff">
<div id="post-body" class="metabox-holder columns-2">
<div id="post-body-content">

<div id="titlediv">
<div id="titlewrap">
		<label class="screen-reader-text" id="title-prompt-text" for="title">Introduce el título aquí</label>
	<input type="text" name="post_title" size="30" value="" id="title" autocomplete="off" />
</div>
<div class="inside">
</div>
<input type="hidden" id="samplepermalinknonce" name="samplepermalinknonce" value="d136841f20" /></div><!-- /titlediv -->
</div><!-- /post-body-content -->

<div id="postbox-container-1" class="postbox-container">
<div id="side-sortables" class="meta-box-sortables"><div id="woocommerce-order-actions" class="postbox " >
<div class="handlediv" title="Haz clic para cambiar"><br /></div><h3 class='hndle'><span>Acciones de pedido</span></h3>
<div class="inside">
		<ul class="order_actions submitbox">

			
			<li class="wide" id="actions">
				<select name="wc_order_action">
					<option value="">Acciones</option>
					<optgroup label="Reenviar emails del pedido">
						<option value="send_email_new_order">Nuevo pedido</option><option value="send_email_customer_processing_order">Procesando tu pedido</option><option value="send_email_customer_completed_order">Pedido completado</option><option value="send_email_customer_invoice">Factura del cliente</option>					</optgroup>
					<option value="regenerate_download_permissions">Generar Permisos de descarga</option>
									</select>

				<button class="button wc-reload" title="Aplicar"><span>Aplicar</span></button>
			</li>

			<li class="wide">
				<div id="delete-action"><a class="submitdelete deletion" href="http://masrenovable.com/dev/wp_gc/wp-admin/post.php?post=58789&#038;action=trash&#038;_wpnonce=1d3d81dd3f">Mover a la Papelera</a></div>

				<input type="submit" class="button save_order button-primary tips" name="save" value="Guardar Pedido" data-tip="Guardar/actualizar el pedido" />
			</li>

			
		</ul>
		</div>
</div>
<div id="woocommerce-order-totals" class="postbox " >
<div class="handlediv" title="Haz clic para cambiar"><br /></div><h3 class='hndle'><span>Total Pedido</span></h3>
<div class="inside">
		<div class="totals_group">
			<h4><span class="tax_total_display inline_total"></span>Envío</h4>

			<div id="shipping_rows" class="total_rows">
							</div>

			<h4><a href="#" class="add_total_row" data-row="&lt;div class=&quot;total_row shipping_row&quot; data-order_item_id=&quot;&quot;&gt;
	&lt;p class=&quot;wide&quot;&gt;
		&lt;input type=&quot;text&quot; name=&quot;shipping_method_title[new][]]&quot; placeholder=&quot;Etiqueta&quot; value=&quot;Envío&quot; class=&quot;first&quot; /&gt;
		&lt;input type=&quot;hidden&quot; name=&quot;shipping_method_id[new][]]&quot; value=&quot;&quot; /&gt;
	&lt;/p&gt;
	&lt;p class=&quot;first&quot;&gt;
		&lt;select name=&quot;shipping_method[new][]]&quot; class=&quot;first&quot;&gt;
			&lt;optgroup label=&quot;Método de envío&quot;&gt;
				&lt;option value=&quot;&quot;&gt;N/D&lt;/option&gt;
				&lt;option value=&quot;flat_rate&quot; &gt;Precio único&lt;/option&gt;&lt;option value=&quot;free_shipping&quot; &gt;Envío gratuito&lt;/option&gt;&lt;option value=&quot;international_delivery&quot; &gt;Envío internacional&lt;/option&gt;&lt;option value=&quot;local_delivery&quot; &gt;Envío por Paquetería&lt;/option&gt;&lt;option value=&quot;local_pickup&quot; &gt;Recogida local&lt;/option&gt;&lt;option value=&quot;fedex&quot; &gt;Fedex&lt;/option&gt;&lt;option value=&quot;other&quot;&gt;Otro&lt;/option&gt;			&lt;/optgroup&gt;
		&lt;/select&gt;
	&lt;/p&gt;
	&lt;p class=&quot;last&quot;&gt;
		&lt;input type=&quot;text&quot; class=&quot;shipping_cost wc_input_price&quot; name=&quot;shipping_cost[new][]]&quot; placeholder=&quot;0&quot; value=&quot;&quot; /&gt;
	&lt;/p&gt;
		&lt;a href=&quot;#&quot; class=&quot;delete_total_row&quot;&gt;&times;&lt;/a&gt;
	&lt;div class=&quot;clear&quot;&gt;&lt;/div&gt;
&lt;/div&gt;
">+ Agregar costo de envío <span class="tips" data-tip="Estos son los costos de envío y manejo para la orden.">[?]</span></a></a></h4>
			<div class="clear"></div>

					</div>

		
		<div class="totals_group">
			<h4><label for="_order_discount">Descuentos del pedido <span class="tips" data-tip="This is the total discount applied after tax.">[?]</span></label></h4>
			<input type="text" class="wc_input_price" id="_order_discount" name="_order_discount" placeholder="0" value="" />
		</div>
		<div class="totals_group">
			<h4><label for="_order_total">Total del pedido</label></h4>
			<input type="text" class="wc_input_price" id="_order_total" name="_order_total" placeholder="0" value="" />
		</div>
				<p class="buttons">
						<button type="button" class="button calc_totals button-primary">Calcular total</button>
		</p>
		</div>
</div>
<div id="submitdiv" class="postbox " >
<div class="handlediv" title="Haz clic para cambiar"><br /></div><h3 class='hndle'><span>Publicar</span></h3>
<div class="inside">
<div class="submitbox" id="submitpost">

<div id="minor-publishing">

<div style="display:none;">
<p class="submit"><input type="submit" name="save" id="save" class="button" value="Guardar"  /></p></div>

<div id="minor-publishing-actions">
<div id="save-action">
<input  type="submit" name="save" id="save-post" value="Guardar borrador" class="button" />
<span class="spinner"></span>
</div>
<div class="clear"></div>
</div><!-- #minor-publishing-actions -->

<div id="misc-publishing-actions">

<div class="misc-pub-section misc-pub-post-status"><label for="post_status">Estado:</label>
<span id="post-status-display">
Borrador</span>
<a href="#post_status" class="edit-post-status hide-if-no-js"><span aria-hidden="true">Editar</span> <span class="screen-reader-text">Editar estado</span></a>

<div id="post-status-select" class="hide-if-js">
<input type="hidden" name="hidden_post_status" id="hidden_post_status" value="draft" />
<select name='post_status' id='post_status'>
<option value='pending'>Pendiente de revisión</option>
<option selected='selected' value='draft'>Borrador</option>
</select>
 <a href="#post_status" class="save-post-status hide-if-no-js button">Aceptar</a>
 <a href="#post_status" class="cancel-post-status hide-if-no-js button-cancel">Cancelar</a>
</div>

</div><!-- .misc-pub-section -->

<div class="misc-pub-section misc-pub-visibility" id="visibility">
Visibilidad: <span id="post-visibility-display">Público</span>
<a href="#visibility" class="edit-visibility hide-if-no-js"><span aria-hidden="true">Editar</span> <span class="screen-reader-text">Editar visibilidad</span></a>

<div id="post-visibility-select" class="hide-if-js">
<input type="hidden" name="hidden_post_password" id="hidden-post-password" value="" />
<input type="hidden" name="hidden_post_visibility" id="hidden-post-visibility" value="public" />
<input type="radio" name="visibility" id="visibility-radio-public" value="public"  checked='checked' /> <label for="visibility-radio-public" class="selectit">Público</label><br />
<input type="radio" name="visibility" id="visibility-radio-password" value="password"  /> <label for="visibility-radio-password" class="selectit">Protegida con contraseña</label><br />
<span id="password-span"><label for="post_password">Contraseña:</label> <input type="text" name="post_password" id="post_password" value=""  maxlength="20" /><br /></span>
<input type="radio" name="visibility" id="visibility-radio-private" value="private"  /> <label for="visibility-radio-private" class="selectit">Privada</label><br />

<p>
 <a href="#visibility" class="save-post-visibility hide-if-no-js button">Aceptar</a>
 <a href="#visibility" class="cancel-post-visibility hide-if-no-js button-cancel">Cancelar</a>
</p>
</div>

</div><!-- .misc-pub-section -->

<div class="misc-pub-section curtime misc-pub-curtime">
	<span id="timestamp">
	Publicar <b>inmediatamente</b></span>
	<a href="#edit_timestamp" class="edit-timestamp hide-if-no-js"><span aria-hidden="true">Editar</span> <span class="screen-reader-text">Editar fecha y hora</span></a>
	<div id="timestampdiv" class="hide-if-js"><div class="timestamp-wrap"><input type="text" id="jj" name="jj" value="08" size="2" maxlength="2" autocomplete="off" /> del <select id="mm" name="mm">
			<option value="01" >01-ene</option>
			<option value="02" >02-feb</option>
			<option value="03" >03-mar</option>
			<option value="04" >04-abr</option>
			<option value="05" >05-may</option>
			<option value="06"  selected='selected'>06-jun</option>
			<option value="07" >07-jul</option>
			<option value="08" >08-ago</option>
			<option value="09" >09-sep</option>
			<option value="10" >10-oct</option>
			<option value="11" >11-nov</option>
			<option value="12" >12-dic</option>
</select> de <input type="text" id="aa" name="aa" value="2014" size="4" maxlength="4" autocomplete="off" /> a las <input type="text" id="hh" name="hh" value="12" size="2" maxlength="2" autocomplete="off" /> : <input type="text" id="mn" name="mn" value="52" size="2" maxlength="2" autocomplete="off" /></div><input type="hidden" id="ss" name="ss" value="48" />

<input type="hidden" id="hidden_mm" name="hidden_mm" value="06" />
<input type="hidden" id="cur_mm" name="cur_mm" value="06" />
<input type="hidden" id="hidden_jj" name="hidden_jj" value="08" />
<input type="hidden" id="cur_jj" name="cur_jj" value="08" />
<input type="hidden" id="hidden_aa" name="hidden_aa" value="2014" />
<input type="hidden" id="cur_aa" name="cur_aa" value="2014" />
<input type="hidden" id="hidden_hh" name="hidden_hh" value="12" />
<input type="hidden" id="cur_hh" name="cur_hh" value="12" />
<input type="hidden" id="hidden_mn" name="hidden_mn" value="52" />
<input type="hidden" id="cur_mn" name="cur_mn" value="52" />

<p>
<a href="#edit_timestamp" class="save-timestamp hide-if-no-js button">Aceptar</a>
<a href="#edit_timestamp" class="cancel-timestamp hide-if-no-js button-cancel">Cancelar</a>
</p>
</div>
</div>
</div>
<div class="clear"></div>
</div>

<div id="major-publishing-actions">
<div id="delete-action">
<a class="submitdelete deletion" href="http://masrenovable.com/dev/wp_gc/wp-admin/post.php?post=58789&amp;action=trash&amp;_wpnonce=1d3d81dd3f">Mover a la papelera</a></div>

<div id="publishing-action">
<span class="spinner"></span>
		<input name="original_publish" type="hidden" id="original_publish" value="Publicar" />
		<input type="submit" name="publish" id="publish" class="button button-primary button-large" value="Publicar" accesskey="p"  /></div>
<div class="clear"></div>
</div>
</div>

</div>
</div>
<div id="woocommerce-order-notes" class="postbox " >
<div class="handlediv" title="Haz clic para cambiar"><br /></div><h3 class='hndle'><span>Notas de pedido</span></h3>
<div class="inside">
<ul class="order_notes"><li>Todavía no hay notas para este pedido.</li></ul>		<div class="add_note">
			<h4>Añadir nota <img class="help_tip" data-tip='Agregar una nota de referencia, o añadir una nota al cliente (se le notificará).' src="http://masrenovable.com/dev/wp_gc/wp-content/plugins/woocommerce/assets/images/help.png" height="16" width="16" /></h4>
			<p>
				<textarea type="text" name="order_note" id="add_order_note" class="input-text" cols="20" rows="5"></textarea>
			</p>
			<p>
				<select name="order_note_type" id="order_note_type">
					<option value="customer">Nota del cliente</option>
					<option value="">Nota privada</option>
				</select>
				<a href="#" class="add_note button">Añadir</a>
			</p>
		</div>
		</div>
</div>
</div></div>
<div id="postbox-container-2" class="postbox-container">
<div id="normal-sortables" class="meta-box-sortables"><div id="woocommerce-order-data" class="postbox " >
<div class="handlediv" title="Haz clic para cambiar"><br /></div><h3 class='hndle'><span>Información del Pedido</span></h3>
<div class="inside">
<input type="hidden" id="woocommerce_meta_nonce" name="woocommerce_meta_nonce" value="16850ce837" /><input type="hidden" name="_wp_http_referer" value="/dev/wp_gc/wp-admin/post-new.php?post_type=shop_order" />		<style type="text/css">
			#post-body-content, #titlediv, #major-publishing-actions, #minor-publishing-actions, #visibility, #submitdiv { display:none }
		</style>
		<div class="panel-wrap woocommerce">
			<input name="post_title" type="hidden" value="Order" />
			<input name="post_status" type="hidden" value="publish" />
			<div id="order_data" class="panel">

				<h2>Detalles del Pedido</h2>
				<p class="order_number">Número de pedido #58789. </p>

				<div class="order_data_column_container">
					<div class="order_data_column">
						<h4>Detalles generales</h4>

						<p class="form-field form-field-wide"><label for="order_date">Fecha del pedido:</label>
							<input type="text" class="date-picker-field" name="order_date" id="order_date" maxlength="10" value="2014-06-08" pattern="[0-9]{4}-(0[1-9]|1[012])-(0[1-9]|1[0-9]|2[0-9]|3[01])" />@<input type="text" class="hour" placeholder="h" name="order_date_hour" id="order_date_hour" maxlength="2" size="2" value="12" pattern="\-?\d+(\.\d{0,})?" />:<input type="text" class="minute" placeholder="m" name="order_date_minute" id="order_date_minute" maxlength="2" size="2" value="52" pattern="\-?\d+(\.\d{0,})?" />
						</p>

						<p class="form-field form-field-wide"><label for="order_status">Estado del pedido:</label>
						<select id="order_status" name="order_status" class="chosen_select">
							<option value="pending"  selected='selected'>pendiente</option><option value="failed" >falló</option><option value="on-hold" >en espera</option><option value="processing" >procesando</option><option value="completed" >completado</option><option value="refunded" >devuelto</option><option value="cancelled" >cancelado</option>						</select></p>

						<p class="form-field form-field-wide">
							<label for="customer_user">Cliente:</label>
							<select id="customer_user" name="customer_user" class="ajax_chosen_select_customer">
								<option value="">Invitado</option>
															</select>
						</p>

											</div>
					<div class="order_data_column">
						<h4>Detalles de facturación <a class="edit_address" href="#"><img src="http://masrenovable.com/dev/wp_gc/wp-content/plugins/woocommerce/assets/images/icons/edit.png" alt="Edit" width="14" /></a></h4>
						<div class="address"><p class="none_set"><strong>Dirección:</strong> No hay una dirección de facturación establecida.</p></div><div class="edit_address"><p><button class="button load_customer_billing">Cargar dirección de facturación</button></p><p class="form-field _billing_first_name_field "><label for="_billing_first_name">Nombre</label><input type="text" class="short" name="_billing_first_name" id="_billing_first_name" value="" placeholder=""  /> </p><p class="form-field _billing_last_name_field "><label for="_billing_last_name">Apellido</label><input type="text" class="short" name="_billing_last_name" id="_billing_last_name" value="" placeholder=""  /> </p><p class="form-field _billing_company_field "><label for="_billing_company">Empresa</label><input type="text" class="short" name="_billing_company" id="_billing_company" value="" placeholder=""  /> </p><p class="form-field _billing_address_1_field "><label for="_billing_address_1">Dirección 1</label><input type="text" class="short" name="_billing_address_1" id="_billing_address_1" value="" placeholder=""  /> </p><p class="form-field _billing_address_2_field "><label for="_billing_address_2">Dirección 2</label><input type="text" class="short" name="_billing_address_2" id="_billing_address_2" value="" placeholder=""  /> </p><p class="form-field _billing_city_field "><label for="_billing_city">Ciudad</label><input type="text" class="short" name="_billing_city" id="_billing_city" value="" placeholder=""  /> </p><p class="form-field _billing_postcode_field "><label for="_billing_postcode">Código postal</label><input type="text" class="short" name="_billing_postcode" id="_billing_postcode" value="" placeholder=""  /> </p><p class="form-field _billing_country_field "><label for="_billing_country">País</label><select id="_billing_country" name="_billing_country" class="select short"><option value=""  selected='selected'>Seleccione un país&hellip;</option><option value="MX" >México</option></select> </p><p class="form-field _billing_state_field "><label for="_billing_state">Estado/Provincia</label><input type="text" class="short" name="_billing_state" id="_billing_state" value="" placeholder=""  /> </p><p class="form-field _billing_email_field "><label for="_billing_email">Email</label><input type="text" class="short" name="_billing_email" id="_billing_email" value="" placeholder=""  /> </p><p class="form-field _billing_phone_field "><label for="_billing_phone">Teléfono</label><input type="text" class="short" name="_billing_phone" id="_billing_phone" value="" placeholder=""  /> </p>							<p class="form-field form-field-wide">
								<label>Forma de pago:</label>
								<select name="_payment_method" id="_payment_method" class="first">
									<option value="">N/D</option>
									<option value="bacs" >Transferencia Bancaria Directa</option><option value="cheque" >Pago mediante cheques</option><option value="paypal" >PayPal</option><option value="mercadopago" >MercadoPago</option><option value="other">Otro</option>								</select>
							</p>
							</div>					</div>
					<div class="order_data_column">

						<h4>Detalles de envío <a class="edit_address" href="#"><img src="http://masrenovable.com/dev/wp_gc/wp-content/plugins/woocommerce/assets/images/icons/edit.png" alt="Edit" width="14" /></a></h4>
						<div class="address"><p class="none_set"><strong>Dirección:</strong> No se ha establecido una dirección de envío.</p></div><div class="edit_address"><p><button class="button load_customer_shipping">Cargar dirección de envío</button> <button class="button billing-same-as-shipping">Copiar de facturación</button></p><p class="form-field _shipping_first_name_field "><label for="_shipping_first_name">Nombre</label><input type="text" class="short" name="_shipping_first_name" id="_shipping_first_name" value="" placeholder=""  /> </p><p class="form-field _shipping_last_name_field "><label for="_shipping_last_name">Apellido</label><input type="text" class="short" name="_shipping_last_name" id="_shipping_last_name" value="" placeholder=""  /> </p><p class="form-field _shipping_company_field "><label for="_shipping_company">Empresa</label><input type="text" class="short" name="_shipping_company" id="_shipping_company" value="" placeholder=""  /> </p><p class="form-field _shipping_address_1_field "><label for="_shipping_address_1">Dirección 1</label><input type="text" class="short" name="_shipping_address_1" id="_shipping_address_1" value="" placeholder=""  /> </p><p class="form-field _shipping_address_2_field "><label for="_shipping_address_2">Dirección 2</label><input type="text" class="short" name="_shipping_address_2" id="_shipping_address_2" value="" placeholder=""  /> </p><p class="form-field _shipping_city_field "><label for="_shipping_city">Ciudad</label><input type="text" class="short" name="_shipping_city" id="_shipping_city" value="" placeholder=""  /> </p><p class="form-field _shipping_postcode_field "><label for="_shipping_postcode">Código postal</label><input type="text" class="short" name="_shipping_postcode" id="_shipping_postcode" value="" placeholder=""  /> </p><p class="form-field _shipping_country_field "><label for="_shipping_country">País</label><select id="_shipping_country" name="_shipping_country" class="select short"><option value=""  selected='selected'>Seleccione un país&hellip;</option><option value="MX" >México</option></select> </p><p class="form-field _shipping_state_field "><label for="_shipping_state">Estado/Provincia</label><input type="text" class="short" name="_shipping_state" id="_shipping_state" value="" placeholder=""  /> </p>								<p class="form-field form-field-wide"><label for="excerpt">Nota del cliente:</label>
								<textarea rows="1" cols="40" name="excerpt" tabindex="6" id="excerpt" placeholder="Comentarios del cliente acerca del pedido"></textarea></p>
								</div>					</div>
				</div>
				<div class="clear"></div>
			</div>
		</div>
		</div>
</div>
<div id="woocommerce-order-items" class="postbox " >
<div class="handlediv" title="Haz clic para cambiar"><br /></div><h3 class='hndle'><span>Artículos del pedido</span></h3>
<div class="inside">
		<div class="woocommerce_order_items_wrapper">
			<table cellpadding="0" cellspacing="0" class="woocommerce_order_items">
				<thead>
					<tr>
						<th><input type="checkbox" class="check-column" /></th>
						<th class="item" colspan="2">Artículo</th>

						
						
						<th class="quantity">Cant.</th>

						<th class="line_cost">Total</th>

						
						<th width="1%">&nbsp;</th>
					</tr>
				</thead>
				<tbody id="order_items_list">

									</tbody>
			</table>
		</div>

		<p class="bulk_actions">
			<select>
				<option value="">Acciones</option>
				<optgroup label="Editar">
					<option value="delete">Borrar líneas</option>
				</optgroup>
				<optgroup label="Acciones de stock">
					<option value="reduce_stock">Reducir línea de stock</option>
					<option value="increase_stock">Incrementar línea de stock</option>
				</optgroup>
			</select>

			<button type="button" class="button do_bulk_action wc-reload" title="Aplicar"><span>Aplicar</span></button>
		</p>

		<p class="add_items">
			<select id="add_item_id" class="ajax_chosen_select_products_and_variations" multiple="multiple" data-placeholder="Buscar un producto&hellip;" style="width: 400px"></select>

			<button type="button" class="button add_order_item">Agregar artículo(s)</button>
			<button type="button" class="button add_order_fee">Añadir gasto</button>
		</p>
		<div class="clear"></div>
		</div>
</div>
<div id="postcustom" class="postbox " >
<div class="handlediv" title="Haz clic para cambiar"><br /></div><h3 class='hndle'><span>Campos personalizados</span></h3>
<div class="inside">
<div id="postcustomstuff">
<div id="ajax-response"></div>

<table id="list-table" style="display: none;">
	<thead>
	<tr>
		<th class="left">Nombre</th>
		<th>Valor</th>
	</tr>
	</thead>
	<tbody id="the-list" data-wp-lists="list:meta">
	<tr><td></td></tr>
	</tbody>
</table><p><strong>Añadir nuevo campo personalizado:</strong></p>
<table id="newmeta">
<thead>
<tr>
<th class="left"><label for="metakeyselect">Nombre</label></th>
<th><label for="metavalue">Valor</label></th>
</tr>
</thead>

<tbody>
<tr>
<td id="newmetaleft" class="left">
<select id="metakeyselect" name="metakeyselect">
<option value="#NONE#">&mdash; Elegir &mdash;</option>

<option value='apply_before_tax'>apply_before_tax</option>
<option value='coupon_amount'>coupon_amount</option>
<option value='discount_type'>discount_type</option>
<option value='exclude_product_ids'>exclude_product_ids</option>
<option value='expiry_date'>expiry_date</option>
<option value='free_shipping'>free_shipping</option>
<option value='individual_use'>individual_use</option>
<option value='product_ids'>product_ids</option>
<option value='total_sales'>total_sales</option>
<option value='usage_limit'>usage_limit</option></select>
<input class="hide-if-js" type="text" id="metakeyinput" name="metakeyinput" value="" />
<a href="#postcustomstuff" class="hide-if-no-js" onclick="jQuery('#metakeyinput, #metakeyselect, #enternew, #cancelnew').toggle();return false;">
<span id="enternew">Nuevo</span>
<span id="cancelnew" class="hidden">Cancelar</span></a>
</td>
<td><textarea id="metavalue" name="metavalue" rows="2" cols="25"></textarea></td>
</tr>

<tr><td colspan="2">
<div class="submit">
<input type="submit" name="addmeta" id="newmeta-submit" class="button" value="Añadir un campo personalizado" data-wp-lists="add:the-list:newmeta"  /></div>
<input type="hidden" id="_ajax_nonce-add-meta" name="_ajax_nonce-add-meta" value="f388ed9abb" /></td></tr>
</tbody>
</table>
</div>
<p>Los campos personalizados se pueden usar para añadir metadatos adicionales a una entrada y luego <a href="http://codex.wordpress.org/Using_Custom_Fields" target="_blank"> mostrarlos en tu tema.</a> .</p>
</div>
</div>
<div id="woocommerce-order-downloads" class="postbox " >
<div class="handlediv" title="Haz clic para cambiar"><br /></div><h3 class='hndle'><span>Permisos de producto descargable <span class="tips" data-tip="Nota: Los permisos para los artículos del pedido serán automáticamente concedidos cuando el pedido pase al estado de procesando/completado.">[?]</span></span></h3>
<div class="inside">
		<div class="order_download_permissions wc-metaboxes-wrapper">

			<div class="wc-metaboxes">
							</div>

			<div class="toolbar">
				<p class="buttons">
					<select name="grant_access_id" id="grant_access_id" class="ajax_chosen_select_downloadable_products_and_variations" multiple="multiple" data-placeholder="Elige un producto descargable&hellip;" style="width: 400px"></select>
					<button type="button" class="button grant_access">Conceder acceso</button>
				</p>
				<div class="clear"></div>
			</div>

		</div>
		</div>
</div>
</div><div id="advanced-sortables" class="meta-box-sortables"></div></div>
</div><!-- /post-body -->
<br class="clear" />
</div><!-- /poststuff -->
</form>
</div>

<form method="get" action="">
<table style="display:none;"><tbody id="com-reply"><tr id="replyrow" style="display:none;"><td colspan="2" class="colspanchange">
	<div id="replyhead" style="display:none;"><h5>Responder al comentarío</h5></div>
	<div id="addhead" style="display:none;"><h5>Añadir nuevo comentario</h5></div>
	<div id="edithead" style="display:none;">
		<div class="inside">
		<label for="author">Nombre</label>
		<input type="text" name="newcomment_author" size="50" value="" id="author" />
		</div>

		<div class="inside">
		<label for="author-email">Correo electrónico</label>
		<input type="text" name="newcomment_author_email" size="50" value="" id="author-email" />
		</div>

		<div class="inside">
		<label for="author-url">URL</label>
		<input type="text" id="author-url" name="newcomment_author_url" size="103" value="" />
		</div>
		<div style="clear:both;"></div>
	</div>

	<div id="replycontainer">
	<div id="wp-replycontent-wrap" class="wp-core-ui wp-editor-wrap html-active"><link rel='stylesheet' id='editor-buttons-css'  href='http://masrenovable.com/dev/wp_gc/wp-includes/css/editor.min.css?ver=3.9.1' type='text/css' media='all' />
<div id="wp-replycontent-editor-container" class="wp-editor-container"><textarea class="wp-editor-area" rows="20" cols="40" name="replycontent" id="replycontent"></textarea></div>
</div>

	</div>

	<p id="replysubmit" class="submit">
	<a href="#comments-form" class="save button-primary alignright">
	<span id="addbtn" style="display:none;">Añadir comentario</span>
	<span id="savebtn" style="display:none;">Actualizar comentario</span>
	<span id="replybtn" style="display:none;">Enviar respuesta</span></a>
	<a href="#comments-form" class="cancel button-secondary alignleft">Cancelar</a>
	<span class="waiting spinner"></span>
	<span class="error" style="display:none;"></span>
	<br class="clear" />
	</p>

	<input type="hidden" name="user_ID" id="user_ID" value="1" />
	<input type="hidden" name="action" id="action" value="" />
	<input type="hidden" name="comment_ID" id="comment_ID" value="" />
	<input type="hidden" name="comment_post_ID" id="comment_post_ID" value="" />
	<input type="hidden" name="status" id="status" value="" />
	<input type="hidden" name="position" id="position" value="1" />
	<input type="hidden" name="checkbox" id="checkbox" value="0" />
	<input type="hidden" name="mode" id="mode" value="single" />
	<input type="hidden" id="_ajax_nonce-replyto-comment" name="_ajax_nonce-replyto-comment" value="7de141df81" /><input type="hidden" id="_wp_unfiltered_html_comment" name="_wp_unfiltered_html_comment" value="1a808e00fa" /></td></tr></tbody></table>
</form>

<script type="text/javascript">
try{document.post.title.focus();}catch(e){}
</script>

<div class="clear"></div></div><!-- wpbody-content -->
<div class="clear"></div></div><!-- wpbody -->
<div class="clear"></div></div><!-- wpcontent -->

<div id="wpfooter">
		<p id="footer-left" class="alignleft">
		<span id="footer-thankyou">Gracias por crear con <a href="https://es.wordpress.org/">WordPress</a>.</span>	</p>
	<p id="footer-upgrade" class="alignright">
		Versión 3.9.1	</p>
	<div class="clear"></div>
</div>


<style type="text/css">
		#TB_ajaxContent{width:auto !important;}
		#TB_ajaxContent p {
			padding:2px 0;	
			margin:6px 0;
		}
		.field_content {
			padding:0 0 0 40px;
		}
		.field_content label{
			width:150px;
			float:left;
			text-align:left;
		}
		.a3-view-docs-button {
			background-color: #FFFFE0 !important;
			border: 1px solid #E6DB55 !important;
			border-radius: 3px;
			-webkit-border-radius: 3px;
			-moz-border-radius: 3px;
			color: #21759B !important;
			outline: 0 none;
			text-shadow:none !important;
			font-weight:normal !important;
			font-family: sans-serif;
			font-size: 12px;
			text-decoration: none;
			padding: 3px 8px;
			position: relative;
			margin-left: 4px;
			white-space:nowrap;
		}
		.a3-view-docs-button:hover {
			color: #D54E21 !important;
		}
		@media screen and ( max-width: 782px ) {
			#woo_search_box_text {
				width:100% !important;	
			}
		}
		@media screen and ( max-width: 480px ) {
			.a3_woocommerce_search_exclude_item {
				float:none !important;
				display:block;
			}
		}
		#woo_predictive_upgrade_area { border:2px solid #E6DB55;-webkit-border-radius:10px;-moz-border-radius:10px;-o-border-radius:10px; border-radius: 10px; padding:0; position:relative}
	  	#woo_predictive_upgrade_area h3{ margin-left:10px;}
		.a3-rev-logo-extensions { position:absolute; left:10px; top:0px; z-index:10; color:#46719D; }
		.a3-rev-logo-extensions:before {
		  font-family: "a3-sidebar-menu" !important;
		  font-style: normal !important;
		  font-weight: normal !important;
		  font-variant: normal !important;
		  text-transform: none !important;
		  speak: none;
		  line-height: 1;
		  -webkit-font-smoothing: antialiased;
		  -moz-osx-font-smoothing: grayscale;
			display:inline-block;
			font-size:25px !important;
			font-weight:400;
			height: 36px;
			padding: 8px 0;
			transition: all 0.1s ease-in-out 0s;
		  
		  content: "\a3" !important;
		}
	   	#woo_predictive_extensions { background:#FFFBCC; -webkit-border-radius:10px 10px 0 0;-moz-border-radius:10px 10px 0 0;-o-border-radius:10px 10px 0 0; border-radius: 10px 10px 0 0; color: #555555; margin: 0px; padding: 4px 8px 4px 40px; text-shadow: 0 1px 0 rgba(255, 255, 255, 0.8); position:relative;}
		</style>
		<div id="woo_search_widget_shortcode" style="display:none;">
		  <div>
			<h3>Personaliza el código corto (shortcode) de la Búsqueda Predictiva <a class="add-new-h2 a3-view-docs-button" target="_blank" href="http://docs.a3rev.com/user-guides/woocommerce/woo-predictive-search/#section-16" >View Docs</a></h3>
			<div style="clear:both"></div>
            <div id="woo_predictive_upgrade_area"><div class="a3-rev-logo-extensions"></div><div id="woo_predictive_extensions">Yes you'll love the Predictive Search shortcode feature. Upgrading to the <a target="_blank" href="http://a3rev.com/shop/woocommerce-predictive-search/">Pro Version</a> activates this shortcode feature as well as the awesome 'Smart Search' feature, per widget controls, the All Search Results page customization settings and function features.</div>			<div class="field_content">
            	                <p><label for="woo_search_product_items">Nombre del Producto:</label> <input disabled="disabled" style="width:100px;" size="10" id="woo_search_product_items" name="woo_search_product_items" type="text" value="6" /> <span class="description">Número de Nombre del Producto resultados a mostrar en el desplegable</span></p> 
                                <p><label for="woo_search_p_sku_items">SKU del Producto:</label> <input disabled="disabled" style="width:100px;" size="10" id="woo_search_p_sku_items" name="woo_search_p_sku_items" type="text" value="0" /> <span class="description">Número de SKU del Producto resultados a mostrar en el desplegable</span></p> 
                                <p><label for="woo_search_p_cat_items">Categorías de Productos:</label> <input disabled="disabled" style="width:100px;" size="10" id="woo_search_p_cat_items" name="woo_search_p_cat_items" type="text" value="0" /> <span class="description">Número de Categorías de Productos resultados a mostrar en el desplegable</span></p> 
                                <p><label for="woo_search_p_tag_items">Etiquetas de Producto:</label> <input disabled="disabled" style="width:100px;" size="10" id="woo_search_p_tag_items" name="woo_search_p_tag_items" type="text" value="0" /> <span class="description">Número de Etiquetas de Producto resultados a mostrar en el desplegable</span></p> 
                                <p><label for="woo_search_post_items">Posts:</label> <input disabled="disabled" style="width:100px;" size="10" id="woo_search_post_items" name="woo_search_post_items" type="text" value="0" /> <span class="description">Número de Posts resultados a mostrar en el desplegable</span></p> 
                                <p><label for="woo_search_page_items">Páginas:</label> <input disabled="disabled" style="width:100px;" size="10" id="woo_search_page_items" name="woo_search_page_items" type="text" value="0" /> <span class="description">Número de Páginas resultados a mostrar en el desplegable</span></p> 
                                <p><label for="woo_search_show_price">Precio:</label> <input disabled="disabled" type="checkbox" checked="checked" id="woo_search_show_price" name="woo_search_show_price" value="1" /> <span class="description">Show Product prices</span></p>
            	<p><label for="woo_search_text_lenght">Caracteres:</label> <input disabled="disabled" style="width:100px;" size="10" id="woo_search_text_lenght" name="woo_search_text_lenght" type="text" value="100" /> <span class="description">Número de caracteres de la descripción de producto</span></p>
                <p><label for="woo_search_align">Alineación:</label> <select disabled="disabled" style="width:100px" id="woo_search_align" name="woo_search_align"><option value="none" selected="selected">Ninguno</option><option value="left-wrap">Envolver a la izquierda</option><option value="left">No envolver a la izquierda</option><option value="center">Centro</option><option value="right-wrap">Envolver a la derecha</option><option value="right">No envolver a la derecha</option></select> <span class="description">Alineamiento horizontal de la caja de búsqueda</span></p>
                <p><label for="woo_search_width">Ancho de la caja de búsqueda:</label> <input disabled="disabled" style="width:100px;" size="10" id="woo_search_width" name="woo_search_width" type="text" value="200" />px</p>
                <p><label for="woo_search_box_text">Mensaje de texto de la caja de búsqueda:</label> <input disabled="disabled" style="width:300px;" size="10" id="woo_search_box_text" name="woo_search_box_text" type="text" value="Buscar producto..." /></p>
                <p><label for="woo_search_padding"><strong>Relleno</strong>:</label><br /> 
				<label for="woo_search_padding_top" style="width:auto; float:none">Encima:</label><input disabled="disabled" style="width:50px;" size="10" id="woo_search_padding_top" name="woo_search_padding_top" type="text" value="10" />px &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <label for="woo_search_padding_bottom" style="width:auto; float:none">Debajo:</label> <input disabled="disabled" style="width:50px;" size="10" id="woo_search_padding_bottom" name="woo_search_padding_bottom" type="text" value="10" />px &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <label for="woo_search_padding_left" style="width:auto; float:none">Izquierda:</label> <input disabled="disabled" style="width:50px;" size="10" id="woo_search_padding_left" name="woo_search_padding_left" type="text" value="0" />px &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <label for="woo_search_padding_right" style="width:auto; float:none">Derecha:</label> <input disabled="disabled" style="width:50px;" size="10" id="woo_search_padding_right" name="woo_search_padding_right" type="text" value="0" />px
                </p>
			</div>
            <p>&nbsp;&nbsp;<input disabled="disabled" type="button" class="button-primary" value="Insertar código corto (shorcode)" />&nbsp;&nbsp;&nbsp;
            <a class="button" style="" href="#" onclick="tb_remove(); return false;">Cancelar</a>
			</p>
            <div style="clear:both;"></div>
           	</div>
		  </div>
          <div style="clear:both;"></div>
		</div>
			<script type="text/javascript">
			jQuery(function() {
				jQuery('<option>').val('mark_processing').text('Marcar procesando').appendTo("select[name='action']");
				jQuery('<option>').val('mark_processing').text('Marcar procesando').appendTo("select[name='action2']");

				jQuery('<option>').val('mark_on-hold').text('Marcar en espera').appendTo("select[name='action']");
				jQuery('<option>').val('mark_on-hold').text('Marcar en espera').appendTo("select[name='action2']");

				jQuery('<option>').val('mark_completed').text('Marcar completado').appendTo("select[name='action']");
				jQuery('<option>').val('mark_completed').text('Marcar completado').appendTo("select[name='action2']");
			});
			</script>
				<div id="post-lock-dialog" class="notification-dialog-wrap hidden">
	<div class="notification-dialog-background"></div>
	<div class="notification-dialog">
			<div class="post-taken-over">
			<div class="post-locked-avatar"></div>
			<p class="wp-tab-first" tabindex="0">
			<span class="currently-editing"></span><br>
			<span class="locked-saving hidden"><img src="images/wpspin_light-2x.gif" width="16" height="16" /> Guardando revisión...</span>
			<span class="locked-saved hidden">Tu últimos cambios fueron guardados en la revisión.</span>
			</p>
						<p><a class="button button-primary wp-tab-last" href="http://masrenovable.com/dev/wp_gc/wp-admin/edit.php?post_type=shop_order">Pedidos</a></p>
		</div>
			</div>
	</div>
		<div id="local-storage-notice" class="hidden">
	<p class="local-restore">
		La copia de seguridad de esta entrada de tu navegador es diferente de la versión que hay en la parte inferior.		<a class="restore-backup" href="#">Restaurar la copia de seguridad.</a>
	</p>
	<p class="undo-restore hidden">
		Entrada restaurada con éxito.		<a class="undo-restore-backup" href="#">Deshacer.</a>
	</p>
	</div>
		<script type="text/html" id="tmpl-media-frame">
		<div class="media-frame-menu"></div>
		<div class="media-frame-title"></div>
		<div class="media-frame-router"></div>
		<div class="media-frame-content"></div>
		<div class="media-frame-toolbar"></div>
		<div class="media-frame-uploader"></div>
	</script>

	<script type="text/html" id="tmpl-media-modal">
		<div class="media-modal wp-core-ui">
			<a class="media-modal-close" href="#" title="Cerrar"><span class="media-modal-icon"></span></a>
			<div class="media-modal-content"></div>
		</div>
		<div class="media-modal-backdrop"></div>
	</script>

	<script type="text/html" id="tmpl-uploader-window">
		<div class="uploader-window-content">
			<h3>Arrastra archivos aquí para subirlos</h3>
		</div>
	</script>

	<script type="text/html" id="tmpl-uploader-editor">
		<div class="uploader-editor-content">
			<div class="uploader-editor-title">Arrastra archivos aquí para subirlos</div>
		</div>
	</script>

	<script type="text/html" id="tmpl-uploader-inline">
		<# var messageClass = data.message ? 'has-upload-message' : 'no-upload-message'; #>
		<div class="uploader-inline-content {{ messageClass }}">
		<# if ( data.message ) { #>
			<h3 class="upload-message">{{ data.message }}</h3>
		<# } #>
					<div class="upload-ui">
				<h3 class="upload-instructions drop-instructions">Arrastra archivos a cualquier lugar para subirlos</h3>
				<a href="#" class="browser button button-hero">Selecciona archivos</a>
			</div>

			<div class="upload-inline-status"></div>

			<div class="post-upload-ui">
				
				<p class="max-upload-size">Tamaño máximo del archivo a subir: 1MB.</p>

				<# if ( data.suggestedWidth && data.suggestedHeight ) { #>
					<p class="suggested-dimensions">
						Dimensiones de imagen sugerida: {{data.suggestedWidth}} &times; {{data.suggestedHeight}}
					</p>
				<# } #>

							</div>
				</div>
	</script>

	<script type="text/html" id="tmpl-uploader-status">
		<h3>Subiendo</h3>
		<a class="upload-dismiss-errors" href="#">Descartar errores</a>

		<div class="media-progress-bar"><div></div></div>
		<div class="upload-details">
			<span class="upload-count">
				<span class="upload-index"></span> / <span class="upload-total"></span>
			</span>
			<span class="upload-detail-separator">&ndash;</span>
			<span class="upload-filename"></span>
		</div>
		<div class="upload-errors"></div>
	</script>

	<script type="text/html" id="tmpl-uploader-status-error">
		<span class="upload-error-label">Error</span>
		<span class="upload-error-filename">{{{ data.filename }}}</span>
		<span class="upload-error-message">{{ data.message }}</span>
	</script>

	<script type="text/html" id="tmpl-attachment">
		<div class="attachment-preview type-{{ data.type }} subtype-{{ data.subtype }} {{ data.orientation }}">
			<# if ( data.uploading ) { #>
				<div class="media-progress-bar"><div></div></div>
			<# } else if ( 'image' === data.type ) { #>
				<div class="thumbnail">
					<div class="centered">
						<img src="{{ data.size.url }}" draggable="false" />
					</div>
				</div>
			<# } else { #>
				<img src="{{ data.icon }}" class="icon" draggable="false" />
				<div class="filename">
					<div>{{ data.filename }}</div>
				</div>
			<# } #>

			<# if ( data.buttons.close ) { #>
				<a class="close media-modal-icon" href="#" title="Eliminar"></a>
			<# } #>

			<# if ( data.buttons.check ) { #>
				<a class="check" href="#" title="Desmarcar"><div class="media-modal-icon"></div></a>
			<# } #>
		</div>
		<#
		var maybeReadOnly = data.can.save || data.allowLocalEdits ? '' : 'readonly';
		if ( data.describe ) { #>
			<# if ( 'image' === data.type ) { #>
				<input type="text" value="{{ data.caption }}" class="describe" data-setting="caption"
					placeholder="Titula esta imagen&hellip;" {{ maybeReadOnly }} />
			<# } else { #>
				<input type="text" value="{{ data.title }}" class="describe" data-setting="title"
					<# if ( 'video' === data.type ) { #>
						placeholder="Describe este video&hellip;"
					<# } else if ( 'audio' === data.type ) { #>
						placeholder="Describe este archivo de audio&hellip;"
					<# } else { #>
						placeholder="Describe este archivo&hellip;"
					<# } #> {{ maybeReadOnly }} />
			<# } #>
		<# } #>
	</script>

	<script type="text/html" id="tmpl-attachment-details">
		<h3>
			Detalles de adjuntos
			<span class="settings-save-status">
				<span class="spinner"></span>
				<span class="saved">Guardado.</span>
			</span>
		</h3>
		<div class="attachment-info">
			<div class="thumbnail">
				<# if ( data.uploading ) { #>
					<div class="media-progress-bar"><div></div></div>
				<# } else if ( 'image' === data.type ) { #>
					<img src="{{ data.size.url }}" draggable="false" />
				<# } else { #>
					<img src="{{ data.icon }}" class="icon" draggable="false" />
				<# } #>
			</div>
			<div class="details">
				<div class="filename">{{ data.filename }}</div>
				<div class="uploaded">{{ data.dateFormatted }}</div>

				<# if ( 'image' === data.type && ! data.uploading ) { #>
					<# if ( data.width && data.height ) { #>
						<div class="dimensions">{{ data.width }} &times; {{ data.height }}</div>
					<# } #>

					<# if ( data.can.save ) { #>
						<a class="edit-attachment" href="{{ data.editLink }}&amp;image-editor" target="_blank">Editar imagen</a>
						<a class="refresh-attachment" href="#">Actualizar</a>
					<# } #>
				<# } #>

				<# if ( data.fileLength ) { #>
					<div class="file-length">Longitud: {{ data.fileLength }}</div>
				<# } #>

				<# if ( ! data.uploading && data.can.remove ) { #>
											<a class="delete-attachment" href="#">Borrar permanentemente</a>
									<# } #>

				<div class="compat-meta">
					<# if ( data.compat && data.compat.meta ) { #>
						{{{ data.compat.meta }}}
					<# } #>
				</div>
			</div>
		</div>

		<# var maybeReadOnly = data.can.save || data.allowLocalEdits ? '' : 'readonly'; #>
			<label class="setting" data-setting="title">
				<span>Título</span>
				<input type="text" value="{{ data.title }}" {{ maybeReadOnly }} />
			</label>
			<label class="setting" data-setting="caption">
				<span>Leyenda</span>
				<textarea {{ maybeReadOnly }}>{{ data.caption }}</textarea>
			</label>
		<# if ( 'image' === data.type ) { #>
			<label class="setting" data-setting="alt">
				<span>Texto alternativo</span>
				<input type="text" value="{{ data.alt }}" {{ maybeReadOnly }} />
			</label>
		<# } #>
			<label class="setting" data-setting="description">
				<span>Descripción</span>
				<textarea {{ maybeReadOnly }}>{{ data.description }}</textarea>
			</label>
	</script>

	<script type="text/html" id="tmpl-media-selection">
		<div class="selection-info">
			<span class="count"></span>
			<# if ( data.editable ) { #>
				<a class="edit-selection" href="#">Editar</a>
			<# } #>
			<# if ( data.clearable ) { #>
				<a class="clear-selection" href="#">Borrar</a>
			<# } #>
		</div>
		<div class="selection-view"></div>
	</script>

	<script type="text/html" id="tmpl-attachment-display-settings">
		<h3>Ajustes de visualización de adjuntos</h3>

		<# if ( 'image' === data.type ) { #>
			<label class="setting">
				<span>Alineación</span>
				<select class="alignment"
					data-setting="align"
					<# if ( data.userSettings ) { #>
						data-user-setting="align"
					<# } #>>

					<option value="left">
						Izquierda					</option>
					<option value="center">
						Centrar					</option>
					<option value="right">
						Derecha					</option>
					<option value="none" selected>
						Ninguna					</option>
				</select>
			</label>
		<# } #>

		<div class="setting">
			<label>
				<# if ( data.model.canEmbed ) { #>
					<span>Incrustar o enlazar</span>
				<# } else { #>
					<span>Enlazado a</span>
				<# } #>

				<select class="link-to"
					data-setting="link"
					<# if ( data.userSettings && ! data.model.canEmbed ) { #>
						data-user-setting="urlbutton"
					<# } #>>

				<# if ( data.model.canEmbed ) { #>
					<option value="embed" selected>
						Incrustar reproductor de medios					</option>
					<option value="file">
				<# } else { #>
					<option value="file" selected>
				<# } #>
					<# if ( data.model.canEmbed ) { #>
						Enlace al archivo de medios					<# } else { #>
						Archivo multimedia					<# } #>
					</option>
					<option value="post">
					<# if ( data.model.canEmbed ) { #>
						Enlace a página de adjuntos					<# } else { #>
						Página de adjuntos					<# } #>
					</option>
				<# if ( 'image' === data.type ) { #>
					<option value="custom">
						URL personalizada					</option>
					<option value="none">
						Ninguna					</option>
				<# } #>
				</select>
			</label>
			<input type="text" class="link-to-custom" data-setting="linkUrl" />
		</div>

		<# if ( 'undefined' !== typeof data.sizes ) { #>
			<label class="setting">
				<span>Tamaño</span>
				<select class="size" name="size"
					data-setting="size"
					<# if ( data.userSettings ) { #>
						data-user-setting="imgsize"
					<# } #>>
											<#
						var size = data.sizes['thumbnail'];
						if ( size ) { #>
							<option value="thumbnail" >
								Miniatura &ndash; {{ size.width }} &times; {{ size.height }}
							</option>
						<# } #>
											<#
						var size = data.sizes['medium'];
						if ( size ) { #>
							<option value="medium" >
								Medio &ndash; {{ size.width }} &times; {{ size.height }}
							</option>
						<# } #>
											<#
						var size = data.sizes['large'];
						if ( size ) { #>
							<option value="large" >
								Grande &ndash; {{ size.width }} &times; {{ size.height }}
							</option>
						<# } #>
											<#
						var size = data.sizes['full'];
						if ( size ) { #>
							<option value="full"  selected='selected'>
								Tamaño completo &ndash; {{ size.width }} &times; {{ size.height }}
							</option>
						<# } #>
									</select>
			</label>
		<# } #>
	</script>

	<script type="text/html" id="tmpl-gallery-settings">
		<h3>Ajustes de galería</h3>

		<label class="setting">
			<span>Enlazado a</span>
			<select class="link-to"
				data-setting="link"
				<# if ( data.userSettings ) { #>
					data-user-setting="urlbutton"
				<# } #>>

				<option value="post" selected>
					Página de adjuntos				</option>
				<option value="file">
					Archivo multimedia				</option>
				<option value="none">
					Ninguna				</option>
			</select>
		</label>

		<label class="setting">
			<span>Columnas</span>
			<select class="columns" name="columns"
				data-setting="columns">
									<option value="1" >
						1					</option>
									<option value="2" >
						2					</option>
									<option value="3"  selected='selected'>
						3					</option>
									<option value="4" >
						4					</option>
									<option value="5" >
						5					</option>
									<option value="6" >
						6					</option>
									<option value="7" >
						7					</option>
									<option value="8" >
						8					</option>
									<option value="9" >
						9					</option>
							</select>
		</label>

		<label class="setting">
			<span>Orden aleatorio</span>
			<input type="checkbox" data-setting="_orderbyRandom" />
		</label>
	</script>

	<script type="text/html" id="tmpl-playlist-settings">
		<h3>Ajuste de listas de reproducción</h3>

		<# var emptyModel = _.isEmpty( data.model ),
			isVideo = 'video' === data.controller.get('library').props.get('type'); #>

		<label class="setting">
			<input type="checkbox" data-setting="tracklist" <# if ( emptyModel ) { #>
				checked="checked"
			<# } #> />
			<# if ( isVideo ) { #>
			<span>Mostrar lista de vídeos</span>
			<# } else { #>
			<span>Mostrar lista de reproducción</span>
			<# } #>
		</label>

		<# if ( ! isVideo ) { #>
		<label class="setting">
			<input type="checkbox" data-setting="artists" <# if ( emptyModel ) { #>
				checked="checked"
			<# } #> />
			<span>Mostrar nombre de artista en la lista de pistas</span>
		</label>
		<# } #>

		<label class="setting">
			<input type="checkbox" data-setting="images" <# if ( emptyModel ) { #>
				checked="checked"
			<# } #> />
			<span>Mostrar imágenes</span>
		</label>
	</script>

	<script type="text/html" id="tmpl-embed-link-settings">
		<label class="setting">
			<span>Título</span>
			<input type="text" class="alignment" data-setting="title" />
		</label>
	</script>

	<script type="text/html" id="tmpl-embed-image-settings">
		<div class="thumbnail">
			<img src="{{ data.model.url }}" draggable="false" />
		</div>

					<label class="setting caption">
				<span>Leyenda</span>
				<textarea data-setting="caption" />
			</label>
		
		<label class="setting alt-text">
			<span>Texto alternativo</span>
			<input type="text" data-setting="alt" />
		</label>

		<div class="setting align">
			<span>Alineación</span>
			<div class="button-group button-large" data-setting="align">
				<button class="button" value="left">
					Izquierda				</button>
				<button class="button" value="center">
					Centrar				</button>
				<button class="button" value="right">
					Derecha				</button>
				<button class="button active" value="none">
					Ninguna				</button>
			</div>
		</div>

		<div class="setting link-to">
			<span>Enlazado a</span>
			<div class="button-group button-large" data-setting="link">
				<button class="button" value="file">
					URL de la imagen				</button>
				<button class="button" value="custom">
					URL personalizada				</button>
				<button class="button active" value="none">
					Ninguna				</button>
			</div>
			<input type="text" class="link-to-custom" data-setting="linkUrl" />
		</div>
	</script>

	<script type="text/html" id="tmpl-attachments-css">
		<style type="text/css" id="{{ data.id }}-css">
			#{{ data.id }} {
				padding: 0 {{ data.gutter }}px;
			}

			#{{ data.id }} .attachment {
				margin: {{ data.gutter }}px;
				width: {{ data.edge }}px;
			}

			#{{ data.id }} .attachment-preview,
			#{{ data.id }} .attachment-preview .thumbnail {
				width: {{ data.edge }}px;
				height: {{ data.edge }}px;
			}

			#{{ data.id }} .portrait .thumbnail img {
				max-width: {{ data.edge }}px;
				height: auto;
			}

			#{{ data.id }} .landscape .thumbnail img {
				width: auto;
				max-height: {{ data.edge }}px;
			}
		</style>
	</script>

	<script type="text/html" id="tmpl-image-details">
		<div class="media-embed">
			<div class="embed-media-settings">
				<div class="column-image">
					<div class="image">
						<img src="{{ data.model.url }}" draggable="false" />

						<# if ( data.attachment && window.imageEdit ) { #>
							<div class="actions">
								<input type="button" class="edit-attachment button" value="Editar Original" />
								<input type="button" class="replace-attachment button" value="Reemplazar" />
							</div>
						<# } #>
					</div>
				</div>
				<div class="column-settings">
											<label class="setting caption">
							<span>Leyenda</span>
							<textarea data-setting="caption">{{ data.model.caption }}</textarea>
						</label>
					
					<label class="setting alt-text">
						<span>Texto alternativo</span>
						<input type="text" data-setting="alt" value="{{ data.model.alt }}" />
					</label>

					<h3>Ajustes de visualización</h3>
					<div class="setting align">
						<span>Alineación</span>
						<div class="button-group button-large" data-setting="align">
							<button class="button" value="left">
								Izquierda							</button>
							<button class="button" value="center">
								Centrar							</button>
							<button class="button" value="right">
								Derecha							</button>
							<button class="button active" value="none">
								Ninguna							</button>
						</div>
					</div>

					<# if ( data.attachment ) { #>
						<# if ( 'undefined' !== typeof data.attachment.sizes ) { #>
							<label class="setting size">
								<span>Tamaño</span>
								<select class="size" name="size"
									data-setting="size"
									<# if ( data.userSettings ) { #>
										data-user-setting="imgsize"
									<# } #>>
																			<#
										var size = data.sizes['thumbnail'];
										if ( size ) { #>
											<option value="thumbnail">
												Miniatura &ndash; {{ size.width }} &times; {{ size.height }}
											</option>
										<# } #>
																			<#
										var size = data.sizes['medium'];
										if ( size ) { #>
											<option value="medium">
												Medio &ndash; {{ size.width }} &times; {{ size.height }}
											</option>
										<# } #>
																			<#
										var size = data.sizes['large'];
										if ( size ) { #>
											<option value="large">
												Grande &ndash; {{ size.width }} &times; {{ size.height }}
											</option>
										<# } #>
																			<#
										var size = data.sizes['full'];
										if ( size ) { #>
											<option value="full">
												Tamaño completo &ndash; {{ size.width }} &times; {{ size.height }}
											</option>
										<# } #>
																		<option value="custom">
										Tamaño personalizado									</option>
								</select>
							</label>
						<# } #>
							<div class="custom-size<# if ( data.model.size !== 'custom' ) { #> hidden<# } #>">
								<label><span>Ancho <small>(px)</small></span> <input data-setting="customWidth" type="number" step="1" value="{{ data.model.customWidth }}" /></label><span class="sep">&times;</span><label><span>Altura <small>(px)</small></span><input data-setting="customHeight" type="number" step="1" value="{{ data.model.customHeight }}" /></label>
							</div>
					<# } #>

					<div class="setting link-to">
						<span>Enlazado a</span>
						<select data-setting="link">
						<# if ( data.attachment ) { #>
							<option value="file">
								Archivo multimedia							</option>
							<option value="post">
								Página de adjuntos							</option>
						<# } else { #>
							<option value="file">
								URL de la imagen							</option>
						<# } #>
							<option value="custom">
								URL personalizada							</option>
							<option value="none">
								Ninguna							</option>
						</select>
						<input type="text" class="link-to-custom" data-setting="linkUrl" />
					</div>
					<div class="advanced-section">
						<h3><a class="advanced-toggle" href="#">Opciones Avanzadas</a></h3>
						<div class="advanced-settings hidden">
							<div class="advanced-image">
								<label class="setting title-text">
									<span>Atributo "title" de la imagen</span>
									<input type="text" data-setting="title" value="{{ data.model.title }}" />
								</label>
								<label class="setting extra-classes">
									<span>Clases CSS de la imagen</span>
									<input type="text" data-setting="extraClasses" value="{{ data.model.extraClasses }}" />
								</label>
							</div>
							<div class="advanced-link">
								<div class="setting link-target">
									<label><input type="checkbox" data-setting="linkTargetBlank" value="_blank" <# if ( data.model.linkTargetBlank ) { #>checked="checked"<# } #>>Abrir enlace en una nueva ventana/pestaña</label>
								</div>
								<label class="setting link-rel">
									<span>Relación del enlace</span>
									<input type="text" data-setting="linkRel" value="{{ data.model.linkClassName }}" />
								</label>
								<label class="setting link-class-name">
									<span>Clases CSS del enlace</span>
									<input type="text" data-setting="linkClassName" value="{{ data.model.linkClassName }}" />
								</label>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</script>

	<script type="text/html" id="tmpl-image-editor">
		<div id="media-head-{{ data.id }}"></div>
		<div id="image-editor-{{ data.id }}"></div>
	</script>

	<script type="text/html" id="tmpl-audio-details">
		<# var ext, html5types = {
			mp3: wp.media.view.settings.embedMimes.mp3,
			ogg: wp.media.view.settings.embedMimes.ogg
		}; #>

				<div class="media-embed media-embed-details">
			<div class="embed-media-settings embed-audio-settings">
				<audio style="visibility: hidden"
	controls
	class="wp-audio-shortcode"
	width="{{ _.isUndefined( data.model.width ) ? 400 : data.model.width }}"
	preload="{{ _.isUndefined( data.model.preload ) ? 'none' : data.model.preload }}"
	<#
	if ( ! _.isUndefined( data.model.autoplay ) && data.model.autoplay ) {
		#> autoplay<#
	}
	if ( ! _.isUndefined( data.model.loop ) && data.model.loop ) {
		#> loop<#
	}
	#>
>
	<# if ( ! _.isEmpty( data.model.src ) ) { #>
	<source src="{{ data.model.src }}" type="{{ wp.media.view.settings.embedMimes[ data.model.src.split('.').pop() ] }}" />
	<# } #>

	<# if ( ! _.isEmpty( data.model.mp3 ) ) { #>
	<source src="{{ data.model.mp3 }}" type="{{ wp.media.view.settings.embedMimes[ 'mp3' ] }}" />
	<# } #>
	<# if ( ! _.isEmpty( data.model.ogg ) ) { #>
	<source src="{{ data.model.ogg }}" type="{{ wp.media.view.settings.embedMimes[ 'ogg' ] }}" />
	<# } #>
	<# if ( ! _.isEmpty( data.model.wma ) ) { #>
	<source src="{{ data.model.wma }}" type="{{ wp.media.view.settings.embedMimes[ 'wma' ] }}" />
	<# } #>
	<# if ( ! _.isEmpty( data.model.m4a ) ) { #>
	<source src="{{ data.model.m4a }}" type="{{ wp.media.view.settings.embedMimes[ 'm4a' ] }}" />
	<# } #>
	<# if ( ! _.isEmpty( data.model.wav ) ) { #>
	<source src="{{ data.model.wav }}" type="{{ wp.media.view.settings.embedMimes[ 'wav' ] }}" />
	<# } #>
	</audio>

				<# if ( ! _.isEmpty( data.model.src ) ) {
					ext = data.model.src.split('.').pop();
					if ( html5types[ ext ] ) {
						delete html5types[ ext ];
					}
				#>
				<label class="setting">
					<span>SRC</span>
					<input type="text" disabled="disabled" data-setting="src" value="{{ data.model.src }}" />
					<a class="remove-setting">Eliminar</a>
				</label>
				<# } #>
				<# if ( ! _.isEmpty( data.model.mp3 ) ) {
					if ( ! _.isUndefined( html5types.mp3 ) ) {
						delete html5types.mp3;
					}
				#>
				<label class="setting">
					<span>MP3</span>
					<input type="text" disabled="disabled" data-setting="mp3" value="{{ data.model.mp3 }}" />
					<a class="remove-setting">Eliminar</a>
				</label>
				<# } #>
				<# if ( ! _.isEmpty( data.model.ogg ) ) {
					if ( ! _.isUndefined( html5types.ogg ) ) {
						delete html5types.ogg;
					}
				#>
				<label class="setting">
					<span>OGG</span>
					<input type="text" disabled="disabled" data-setting="ogg" value="{{ data.model.ogg }}" />
					<a class="remove-setting">Eliminar</a>
				</label>
				<# } #>
				<# if ( ! _.isEmpty( data.model.wma ) ) {
					if ( ! _.isUndefined( html5types.wma ) ) {
						delete html5types.wma;
					}
				#>
				<label class="setting">
					<span>WMA</span>
					<input type="text" disabled="disabled" data-setting="wma" value="{{ data.model.wma }}" />
					<a class="remove-setting">Eliminar</a>
				</label>
				<# } #>
				<# if ( ! _.isEmpty( data.model.m4a ) ) {
					if ( ! _.isUndefined( html5types.m4a ) ) {
						delete html5types.m4a;
					}
				#>
				<label class="setting">
					<span>M4A</span>
					<input type="text" disabled="disabled" data-setting="m4a" value="{{ data.model.m4a }}" />
					<a class="remove-setting">Eliminar</a>
				</label>
				<# } #>
				<# if ( ! _.isEmpty( data.model.wav ) ) {
					if ( ! _.isUndefined( html5types.wav ) ) {
						delete html5types.wav;
					}
				#>
				<label class="setting">
					<span>WAV</span>
					<input type="text" disabled="disabled" data-setting="wav" value="{{ data.model.wav }}" />
					<a class="remove-setting">Eliminar</a>
				</label>
				<# } #>
				
				<# if ( ! _.isEmpty( html5types ) ) { #>
				<div class="setting">
					<span>Añadir fuentes alternativas para maximizar la reproducción en HTML5</span>
					<div class="button-large">
					<# _.each( html5types, function (mime, type) { #>
					<button class="button add-media-source" data-mime="{{ mime }}">{{ type }}</button>
					<# } ) #>
					</div>
				</div>
				<# } #>

				<div class="setting preload">
					<span>Precarga</span>
					<div class="button-group button-large" data-setting="preload">
						<button class="button" value="auto">Automático</button>
						<button class="button" value="metadata">Metadatos</button>
						<button class="button active" value="none">Ninguna</button>
					</div>
				</div>

				<label class="setting checkbox-setting">
					<input type="checkbox" data-setting="autoplay" />
					<span>Reproducción automática</span>
				</label>

				<label class="setting checkbox-setting">
					<input type="checkbox" data-setting="loop" />
					<span>Repetir</span>
				</label>
			</div>
		</div>
	</script>

	<script type="text/html" id="tmpl-video-details">
		<# var ext, html5types = {
			mp4: wp.media.view.settings.embedMimes.mp4,
			ogv: wp.media.view.settings.embedMimes.ogv,
			webm: wp.media.view.settings.embedMimes.webm
		}; #>

				<div class="media-embed media-embed-details">
			<div class="embed-media-settings embed-video-settings">
				<div class="wp-video-holder">
				<#
				var isYouTube = ! _.isEmpty( data.model.src ) && data.model.src.match(/youtube|youtu\.be/);
					w = ! data.model.width || data.model.width > 640 ? 640 : data.model.width,
					h = ! data.model.height ? 360 : data.model.height;

				if ( data.model.width && w !== data.model.width ) {
					h = Math.ceil( ( h * w ) / data.model.width );
				}
				#>

				<#  var w, h, settings = wp.media.view.settings,
		isYouTube = ! _.isEmpty( data.model.src ) && data.model.src.match(/youtube|youtu\.be/);

	if ( settings.contentWidth && data.model.width >= settings.contentWidth ) {
		w = settings.contentWidth;
	} else {
		w = data.model.width;
	}

	if ( w !== data.model.width ) {
		h = Math.ceil( ( h * w ) / data.model.width );
	} else {
		h = data.model.height;
	}
#>
<div style="max-width: 100%; width: {{ w }}px">
<video controls
	class="wp-video-shortcode{{ isYouTube ? ' youtube-video' : '' }}"
	width="{{ w }}"
	height="{{ h }}"
	<#
		if ( ! _.isUndefined( data.model.poster ) && data.model.poster ) {
			#> poster="{{ data.model.poster }}"<#
		} #>
		preload="{{ _.isUndefined( data.model.preload ) ? 'metadata' : data.model.preload }}"<#
	 if ( ! _.isUndefined( data.model.autoplay ) && data.model.autoplay ) {
		#> autoplay<#
	}
	 if ( ! _.isUndefined( data.model.loop ) && data.model.loop ) {
		#> loop<#
	}
	#>
>
	<# if ( ! _.isEmpty( data.model.src ) ) {
		if ( isYouTube ) { #>
		<source src="{{ data.model.src }}" type="video/youtube" />
		<# } else { #>
		<source src="{{ data.model.src }}" type="{{ settings.embedMimes[ data.model.src.split('.').pop() ] }}" />
		<# }
	} #>

	<# if ( data.model.mp4 ) { #>
	<source src="{{ data.model.mp4 }}" type="{{ settings.embedMimes[ 'mp4' ] }}" />
	<# } #>
	<# if ( data.model.m4v ) { #>
	<source src="{{ data.model.m4v }}" type="{{ settings.embedMimes[ 'm4v' ] }}" />
	<# } #>
	<# if ( data.model.webm ) { #>
	<source src="{{ data.model.webm }}" type="{{ settings.embedMimes[ 'webm' ] }}" />
	<# } #>
	<# if ( data.model.ogv ) { #>
	<source src="{{ data.model.ogv }}" type="{{ settings.embedMimes[ 'ogv' ] }}" />
	<# } #>
	<# if ( data.model.wmv ) { #>
	<source src="{{ data.model.wmv }}" type="{{ settings.embedMimes[ 'wmv' ] }}" />
	<# } #>
	<# if ( data.model.flv ) { #>
	<source src="{{ data.model.flv }}" type="{{ settings.embedMimes[ 'flv' ] }}" />
	<# } #>
		{{{ data.model.content }}}
</video>
</div>

				<# if ( ! _.isEmpty( data.model.src ) ) {
					ext = data.model.src.split('.').pop();
					if ( html5types[ ext ] ) {
						delete html5types[ ext ];
					}
				#>
				<label class="setting">
					<span>SRC</span>
					<input type="text" disabled="disabled" data-setting="src" value="{{ data.model.src }}" />
					<a class="remove-setting">Eliminar</a>
				</label>
				<# } #>
				<# if ( ! _.isEmpty( data.model.mp4 ) ) {
					if ( ! _.isUndefined( html5types.mp4 ) ) {
						delete html5types.mp4;
					}
				#>
				<label class="setting">
					<span>MP4</span>
					<input type="text" disabled="disabled" data-setting="mp4" value="{{ data.model.mp4 }}" />
					<a class="remove-setting">Eliminar</a>
				</label>
				<# } #>
				<# if ( ! _.isEmpty( data.model.m4v ) ) {
					if ( ! _.isUndefined( html5types.m4v ) ) {
						delete html5types.m4v;
					}
				#>
				<label class="setting">
					<span>M4V</span>
					<input type="text" disabled="disabled" data-setting="m4v" value="{{ data.model.m4v }}" />
					<a class="remove-setting">Eliminar</a>
				</label>
				<# } #>
				<# if ( ! _.isEmpty( data.model.webm ) ) {
					if ( ! _.isUndefined( html5types.webm ) ) {
						delete html5types.webm;
					}
				#>
				<label class="setting">
					<span>WEBM</span>
					<input type="text" disabled="disabled" data-setting="webm" value="{{ data.model.webm }}" />
					<a class="remove-setting">Eliminar</a>
				</label>
				<# } #>
				<# if ( ! _.isEmpty( data.model.ogv ) ) {
					if ( ! _.isUndefined( html5types.ogv ) ) {
						delete html5types.ogv;
					}
				#>
				<label class="setting">
					<span>OGV</span>
					<input type="text" disabled="disabled" data-setting="ogv" value="{{ data.model.ogv }}" />
					<a class="remove-setting">Eliminar</a>
				</label>
				<# } #>
				<# if ( ! _.isEmpty( data.model.wmv ) ) {
					if ( ! _.isUndefined( html5types.wmv ) ) {
						delete html5types.wmv;
					}
				#>
				<label class="setting">
					<span>WMV</span>
					<input type="text" disabled="disabled" data-setting="wmv" value="{{ data.model.wmv }}" />
					<a class="remove-setting">Eliminar</a>
				</label>
				<# } #>
				<# if ( ! _.isEmpty( data.model.flv ) ) {
					if ( ! _.isUndefined( html5types.flv ) ) {
						delete html5types.flv;
					}
				#>
				<label class="setting">
					<span>FLV</span>
					<input type="text" disabled="disabled" data-setting="flv" value="{{ data.model.flv }}" />
					<a class="remove-setting">Eliminar</a>
				</label>
				<# } #>
								</div>

				<# if ( ! _.isEmpty( html5types ) ) { #>
				<div class="setting">
					<span>Añadir fuentes alternativas para maximizar la reproducción en HTML5</span>
					<div class="button-large">
					<# _.each( html5types, function (mime, type) { #>
					<button class="button add-media-source" data-mime="{{ mime }}">{{ type }}</button>
					<# } ) #>
					</div>
				</div>
				<# } #>

				<# if ( ! _.isEmpty( data.model.poster ) ) { #>
				<label class="setting">
					<span>Imagen de poster</span>
					<input type="text" disabled="disabled" data-setting="poster" value="{{ data.model.poster }}" />
					<a class="remove-setting">Eliminar</a>
				</label>
				<# } #>
				<div class="setting preload">
					<span>Precarga</span>
					<div class="button-group button-large" data-setting="preload">
						<button class="button" value="auto">Automático</button>
						<button class="button" value="metadata">Metadatos</button>
						<button class="button active" value="none">Ninguna</button>
					</div>
				</div>

				<label class="setting checkbox-setting">
					<input type="checkbox" data-setting="autoplay" />
					<span>Reproducción automática</span>
				</label>

				<label class="setting checkbox-setting">
					<input type="checkbox" data-setting="loop" />
					<span>Repetir</span>
				</label>

				<label class="setting" data-setting="content">
					<span>Pistas (subtítulos, leyendas, descripciones, capítulos o metadatos)</span>
					<#
					var content = '';
					if ( ! _.isEmpty( data.model.content ) ) {
						var tracks = jQuery( data.model.content ).filter( 'track' );
						_.each( tracks.toArray(), function (track) {
							content += track.outerHTML; #>
						<p>
							<input class="content-track" type="text" value="{{ track.outerHTML }}" />
							<a class="remove-setting remove-track">Eliminar</a>
						</p>
						<# } ); #>
					<# } else { #>
					<em>No hay subtítulos asociados.</em>
					<# } #>
					<textarea class="hidden content-setting">{{ content }}</textarea>
				</label>
			</div>
		</div>
	</script>

	<script type="text/html" id="tmpl-editor-gallery">
		<div class="toolbar">
			<div class="dashicons dashicons-edit edit"></div><div class="dashicons dashicons-no-alt remove"></div>
		</div>
		<# if ( data.attachments ) { #>
			<div class="gallery gallery-columns-{{ data.columns }}">
				<# _.each( data.attachments, function( attachment, index ) { #>
					<dl class="gallery-item">
						<dt class="gallery-icon">
							<# if ( attachment.thumbnail ) { #>
								<img src="{{ attachment.thumbnail.url }}" width="{{ attachment.thumbnail.width }}" height="{{ attachment.thumbnail.height }}" />
							<# } else { #>
								<img src="{{ attachment.url }}" />
							<# } #>
						</dt>
						<dd class="wp-caption-text gallery-caption">
							{{ attachment.caption }}
						</dd>
					</dl>
					<# if ( index % data.columns === data.columns - 1 ) { #>
						<br style="clear: both;">
					<# } #>
				<# } ); #>
			</div>
		<# } else { #>
			<div class="wpview-error">
				<div class="dashicons dashicons-format-gallery"></div><p>No se han encontrado elementos.</p>
			</div>
		<# } #>
	</script>

	<script type="text/html" id="tmpl-editor-audio">
		<div class="toolbar">
			<div class="dashicons dashicons-edit edit"></div>
			<div class="dashicons dashicons-no-alt remove"></div>
		</div>
		<audio style="visibility: hidden"
	controls
	class="wp-audio-shortcode"
	width="{{ _.isUndefined( data.model.width ) ? 400 : data.model.width }}"
	preload="{{ _.isUndefined( data.model.preload ) ? 'none' : data.model.preload }}"
	<#
	if ( ! _.isUndefined( data.model.autoplay ) && data.model.autoplay ) {
		#> autoplay<#
	}
	if ( ! _.isUndefined( data.model.loop ) && data.model.loop ) {
		#> loop<#
	}
	#>
>
	<# if ( ! _.isEmpty( data.model.src ) ) { #>
	<source src="{{ data.model.src }}" type="{{ wp.media.view.settings.embedMimes[ data.model.src.split('.').pop() ] }}" />
	<# } #>

	<# if ( ! _.isEmpty( data.model.mp3 ) ) { #>
	<source src="{{ data.model.mp3 }}" type="{{ wp.media.view.settings.embedMimes[ 'mp3' ] }}" />
	<# } #>
	<# if ( ! _.isEmpty( data.model.ogg ) ) { #>
	<source src="{{ data.model.ogg }}" type="{{ wp.media.view.settings.embedMimes[ 'ogg' ] }}" />
	<# } #>
	<# if ( ! _.isEmpty( data.model.wma ) ) { #>
	<source src="{{ data.model.wma }}" type="{{ wp.media.view.settings.embedMimes[ 'wma' ] }}" />
	<# } #>
	<# if ( ! _.isEmpty( data.model.m4a ) ) { #>
	<source src="{{ data.model.m4a }}" type="{{ wp.media.view.settings.embedMimes[ 'm4a' ] }}" />
	<# } #>
	<# if ( ! _.isEmpty( data.model.wav ) ) { #>
	<source src="{{ data.model.wav }}" type="{{ wp.media.view.settings.embedMimes[ 'wav' ] }}" />
	<# } #>
	</audio>
		<div class="wpview-overlay"></div>
	</script>

	<script type="text/html" id="tmpl-editor-video">
		<div class="toolbar">
			<div class="dashicons dashicons-edit edit"></div>
			<div class="dashicons dashicons-no-alt remove"></div>
		</div>
		<#  var w, h, settings = wp.media.view.settings,
		isYouTube = ! _.isEmpty( data.model.src ) && data.model.src.match(/youtube|youtu\.be/);

	if ( settings.contentWidth && data.model.width >= settings.contentWidth ) {
		w = settings.contentWidth;
	} else {
		w = data.model.width;
	}

	if ( w !== data.model.width ) {
		h = Math.ceil( ( h * w ) / data.model.width );
	} else {
		h = data.model.height;
	}
#>
<div style="max-width: 100%; width: {{ w }}px">
<video controls
	class="wp-video-shortcode{{ isYouTube ? ' youtube-video' : '' }}"
	width="{{ w }}"
	height="{{ h }}"
	<#
		if ( ! _.isUndefined( data.model.poster ) && data.model.poster ) {
			#> poster="{{ data.model.poster }}"<#
		} #>
		preload="{{ _.isUndefined( data.model.preload ) ? 'metadata' : data.model.preload }}"<#
	 if ( ! _.isUndefined( data.model.autoplay ) && data.model.autoplay ) {
		#> autoplay<#
	}
	 if ( ! _.isUndefined( data.model.loop ) && data.model.loop ) {
		#> loop<#
	}
	#>
>
	<# if ( ! _.isEmpty( data.model.src ) ) {
		if ( isYouTube ) { #>
		<source src="{{ data.model.src }}" type="video/youtube" />
		<# } else { #>
		<source src="{{ data.model.src }}" type="{{ settings.embedMimes[ data.model.src.split('.').pop() ] }}" />
		<# }
	} #>

	<# if ( data.model.mp4 ) { #>
	<source src="{{ data.model.mp4 }}" type="{{ settings.embedMimes[ 'mp4' ] }}" />
	<# } #>
	<# if ( data.model.m4v ) { #>
	<source src="{{ data.model.m4v }}" type="{{ settings.embedMimes[ 'm4v' ] }}" />
	<# } #>
	<# if ( data.model.webm ) { #>
	<source src="{{ data.model.webm }}" type="{{ settings.embedMimes[ 'webm' ] }}" />
	<# } #>
	<# if ( data.model.ogv ) { #>
	<source src="{{ data.model.ogv }}" type="{{ settings.embedMimes[ 'ogv' ] }}" />
	<# } #>
	<# if ( data.model.wmv ) { #>
	<source src="{{ data.model.wmv }}" type="{{ settings.embedMimes[ 'wmv' ] }}" />
	<# } #>
	<# if ( data.model.flv ) { #>
	<source src="{{ data.model.flv }}" type="{{ settings.embedMimes[ 'flv' ] }}" />
	<# } #>
		{{{ data.model.content }}}
</video>
</div>
		<div class="wpview-overlay"></div>
	</script>

	<script type="text/html" id="tmpl-wp-playlist-current-item">
	<# if ( data.image ) { #>
	<img src="{{ data.thumb.src }}"/>
	<# } #>
	<div class="wp-playlist-caption">
		<span class="wp-playlist-item-meta wp-playlist-item-title">&#8220;{{ data.title }}&#8221;</span>
		<# if ( data.meta.album ) { #><span class="wp-playlist-item-meta wp-playlist-item-album">{{ data.meta.album }}</span><# } #>
		<# if ( data.meta.artist ) { #><span class="wp-playlist-item-meta wp-playlist-item-artist">{{ data.meta.artist }}</span><# } #>
	</div>
</script>
<script type="text/html" id="tmpl-wp-playlist-item">
	<div class="wp-playlist-item">
		<a class="wp-playlist-caption" href="{{ data.src }}">
			{{ data.index ? ( data.index + '. ' ) : '' }}
			<# if ( data.caption ) { #>
				{{ data.caption }}
			<# } else { #>
				<span class="wp-playlist-item-title">&#8220;{{{ data.title }}}&#8221;</span>
				<# if ( data.artists && data.meta.artist ) { #>
				<span class="wp-playlist-item-artist"> &mdash; {{ data.meta.artist }}</span>
				<# } #>
			<# } #>
		</a>
		<# if ( data.meta.length_formatted ) { #>
		<div class="wp-playlist-item-length">{{ data.meta.length_formatted }}</div>
		<# } #>
	</div>
</script>

	<script type="text/html" id="tmpl-editor-playlist">
		<div class="toolbar">
			<div class="dashicons dashicons-edit edit"></div>
			<div class="dashicons dashicons-no-alt remove"></div>
		</div>
		<# if ( data.tracks ) { #>
			<div class="wp-playlist wp-{{ data.type }}-playlist wp-playlist-{{ data.style }}">
				<# if ( 'audio' === data.type ){ #>
				<div class="wp-playlist-current-item"></div>
				<# } #>
				<{{ data.type }} controls="controls" preload="none" <#
					if ( data.width ) { #> width="{{ data.width }}"<# }
					#><# if ( data.height ) { #> height="{{ data.height }}"<# } #>></{{ data.type }}>
				<div class="wp-playlist-next"></div>
				<div class="wp-playlist-prev"></div>
			</div>
			<div class="wpview-overlay"></div>
		<# } else { #>
			<div class="wpview-error">
				<div class="dashicons dashicons-video-alt3"></div><p>No se han encontrado elementos.</p>
			</div>
		<# } #>
	</script>

	<script type="text/html" id="tmpl-crop-content">
		<img class="crop-image" src="{{ data.url }}">
		<div class="upload-errors"></div>
	</script>

	<script type='text/javascript'>list_args = {"class":"WP_Post_Comments_List_Table","screen":{"id":"shop_order","base":"post"}};</script>
<!-- WooCommerce JavaScript -->
<script type="text/javascript">
jQuery(function($) {

			jQuery('select.ajax_chosen_select_customer').ajaxChosen({
			    method: 		'GET',
			    url: 			'http://masrenovable.com/dev/wp_gc/wp-admin/admin-ajax.php',
			    dataType: 		'json',
			    afterTypeDelay: 100,
			    minTermLength: 	1,
			    data:		{
			    	action: 	'woocommerce_json_search_customers',
					security: 	'a0f06ac289'
			    }
			}, function (data) {

				var terms = {};

			    $.each(data, function (i, val) {
			        terms[i] = val;
			    });

			    return terms;
			});
		
});
</script>
	<div id="wp-auth-check-wrap" class="hidden">
	<div id="wp-auth-check-bg"></div>
	<div id="wp-auth-check">
	<div class="wp-auth-check-close" tabindex="0" title="Cerrar"></div>
			<div id="wp-auth-check-form" data-src="http://masrenovable.com/dev/wp_gc/wp-login.php?interim-login=1"></div>
			<div class="wp-auth-fallback">
		<p><b class="wp-auth-fallback-expired" tabindex="0">Sesión caducada</b></p>
		<p><a href="http://masrenovable.com/dev/wp_gc/wp-login.php" target="_blank">Por favor, accede de nuevo.</a>
		La página de acceso se abrirá en una ventana nueva. Después del acceso puede cerrarla y volver a esta página.</p>
	</div>
	</div>
	</div>
	
<script type='text/javascript'>
/* <![CDATA[ */
var commonL10n = {"warnDelete":"Est\u00e1s a punto de borrar permanentemente los elementos seleccionados. \n  'Aceptar' para borrar, 'Cancelar' para salir."};var wpAjax = {"noPerm":"No tienes autorizaci\u00f3n para hacer eso.","broken":"Ha ocurrido un error no identificado."};var heartbeatSettings = {"nonce":"326d8e16bc","suspension":"disable"};var postL10n = {"ok":"Aceptar","cancel":"Cancelar","publishOn":"Publicar el:","publishOnFuture":"Programar para el:","publishOnPast":"Publicada el:","dateFormat":"%2$s del %1$s de %3$s a las %4$s : %5$s","showcomm":"Mostrar m\u00e1s comentarios","endcomm":"No hay m\u00e1s comentarios.","publish":"Publicar","schedule":"Programar","update":"Actualizar","savePending":"Guardar como pendiente","saveDraft":"Guardar borrador","private":"Privada","public":"P\u00fablico","publicSticky":"P\u00fablica, destacada","password":"Protegida con contrase\u00f1a","privatelyPublished":"Publicada como privada","published":"Publicada","comma":",","saveAlert":"Los cambios realizados se perder\u00e1n si abres otra p\u00e1gina.","savingText":"Guardando borrador\u2026"};var authcheckL10n = {"beforeunload":"Tu sesi\u00f3n ha caducado. Puedes identificarte otra vez desde esta p\u00e1gina o ir a la p\u00e1gina de identificaci\u00f3n.","interval":"180"};var wpColorPickerL10n = {"clear":"Borrar","defaultString":"Predeterminado","pick":"Elige un color","current":"Color actual"};var _wpUtilSettings = {"ajax":{"url":"\/dev\/wp_gc\/wp-admin\/admin-ajax.php"}};var _wpMediaModelsL10n = {"settings":{"ajaxurl":"\/dev\/wp_gc\/wp-admin\/admin-ajax.php","post":{"id":0}}};var pluploadL10n = {"queue_limit_exceeded":"Has intentado poner en cola demasiados archivos.","file_exceeds_size_limit":"El tama\u00f1o del archivo %s excede el tama\u00f1o permitido en este sitio.","zero_byte_file":"Este archivo est\u00e1 vacio. Por favor, prueba con otro.","invalid_filetype":"Este tipo de archivo no est\u00e1 permitido. Por favor, prueba con otro.","not_an_image":"Este archivo no es una imagen. Por favor, prueba con otro.","image_memory_exceeded":"Memoria excedida. Por favor, prueba con otro archivo m\u00e1s peque\u00f1o.","image_dimensions_exceeded":"Supera el tama\u00f1o permitido. Por favor, prueba con otro.","default_error":"Ha habido un error en la subida. Por favor int\u00e9ntalo m\u00e1s tarde.","missing_upload_url":"Ha habido un problema con la configuraci\u00f3n. Por favor, contacta con el  administrador del servidor.","upload_limit_exceeded":"S\u00f3lo puedes subir 1 archivo.","http_error":"Error HTTP.","upload_failed":"Fall\u00f3 la subida.","big_upload_failed":"Por favor, intenta subir este archivo a trav\u00e9s del %1$snavegador%2$s.","big_upload_queued":"%s excede el tama\u00f1o m\u00e1ximo de subida de la herramienta de subida m\u00faltiple de archivos del navegador.","io_error":"Error de entrada\/salida.","security_error":"Error de seguridad.","file_cancelled":"Archivo cancelado.","upload_stopped":"Subida detenida.","dismiss":"Descartar","crunching":"Calculando\u2026","deleted":"movidos a la papelera.","error_uploading":"Ha habido un error al subir \u201c%s\u201d"};
var _wpPluploadSettings = {"defaults":{"runtimes":"html5,flash,silverlight,html4","file_data_name":"async-upload","url":"\/dev\/wp_gc\/wp-admin\/async-upload.php","flash_swf_url":"http:\/\/masrenovable.com\/dev\/wp_gc\/wp-includes\/js\/plupload\/plupload.flash.swf","silverlight_xap_url":"http:\/\/masrenovable.com\/dev\/wp_gc\/wp-includes\/js\/plupload\/plupload.silverlight.xap","filters":{"max_file_size":"1536000b"},"multipart_params":{"action":"upload-attachment","_wpnonce":"1e55ef8d6e"}},"browser":{"mobile":false,"supported":true},"limitExceeded":false};var mejsL10n = {"language":"es-ES","strings":{"Close":"Cerrar","Fullscreen":"Pantalla completa","Download File":"Descargar archivo","Download Video":"Descargar v\u00eddeo","Play\/Pause":"Reproducir\/Pausar","Mute Toggle":"Desactivar sonido","None":"Ninguna","Turn off Fullscreen":"Salir de pantalla completa","Go Fullscreen":"Ver en pantalla completa","Unmute":"Activar sonido","Mute":"Silenciar","Captions\/Subtitles":"Pies de foto \/ Subt\u00edtulos"}};
var _wpmejsSettings = {"pluginPath":"\/dev\/wp_gc\/wp-includes\/js\/mediaelement\/"};var _wpMediaViewsL10n = {"url":"URL","addMedia":"A\u00f1adir objeto","search":"Buscar","select":"Elegir","cancel":"Cancelar","update":"Actualizar","replace":"Reemplazar","remove":"Eliminar","back":"Atr\u00e1s","selected":"%d seleccionados","dragInfo":"Arrastra las im\u00e1genes para ordenarlas.","uploadFilesTitle":"Subir archivos","uploadImagesTitle":"Subir im\u00e1genes","mediaLibraryTitle":"Librer\u00eda multimedia","insertMediaTitle":"Insertar objeto","createNewGallery":"Crear una nueva galer\u00eda","createNewPlaylist":"Crear una nueva lista de reproducci\u00f3n","createNewVideoPlaylist":"Crear una nueva lista de reproducci\u00f3n de v\u00eddeos","returnToLibrary":"\u2190 Volver a la librer\u00eda","allMediaItems":"Todos los elementos multimedia","noItemsFound":"No se han encontrado elementos.","insertIntoPost":"Insertar en Pedido","uploadedToThisPost":"Subido a este Pedido","warnDelete":"Est\u00e1s a punto de borrar permanentemente este elemento.\n 'Cancelar' para parar, 'Aceptar' para borrar.","insertFromUrlTitle":"Insertar desde URL","setFeaturedImageTitle":"Fijar la imagen destacada","setFeaturedImage":"Asignar imagen destacada","createGalleryTitle":"Crear galer\u00eda","editGalleryTitle":"Editar galer\u00eda","cancelGalleryTitle":"\u2190 Cancelar galer\u00eda","insertGallery":"Inserta galer\u00eda","updateGallery":"Actualizar galer\u00eda","addToGallery":"A\u00f1adir a la galer\u00eda","addToGalleryTitle":"A\u00f1adir a la Galer\u00eda","reverseOrder":"Orden inverso","imageDetailsTitle":"Detalles de la imagen","imageReplaceTitle":"Reemplazar imagen","imageDetailsCancel":"Cancela la edici\u00f3n","editImage":"Editar imagen","chooseImage":"Elegir imagen","selectAndCrop":"Selecciona y recorta","skipCropping":"No recortar","cropImage":"Recortar imagen","cropYourImage":"Recorta tu imagen","cropping":"Recortando\u2026","suggestedDimensions":"Dimensiones de imagen sugerida:","cropError":"Se ha producido un error recortando la imagen.","audioDetailsTitle":"Detalles del audio","audioReplaceTitle":"Reemplazar audio","audioAddSourceTitle":"A\u00f1adir origen del audio","audioDetailsCancel":"Cancela la edici\u00f3n","videoDetailsTitle":"Detalles del v\u00eddeo","videoReplaceTitle":"Reemplazar v\u00eddeo","videoAddSourceTitle":"A\u00f1adir fuente de v\u00eddeo","videoDetailsCancel":"Cancela la edici\u00f3n","videoSelectPosterImageTitle":"Elegir imagen de poster","videoAddTrackTitle":"A\u00f1adir subt\u00edtulos","playlistDragInfo":"Arrastrar y soltar para reordenar pistas.","createPlaylistTitle":"Crear lista de reproducci\u00f3n de audios","editPlaylistTitle":"Editar lista de reproducci\u00f3n de audio","cancelPlaylistTitle":"\u2190 Cancelar lista de reproducci\u00f3n de audio","insertPlaylist":"Insertar lista de reproducci\u00f3n de audio","updatePlaylist":"Actualizar lista de reproducci\u00f3n de audio","addToPlaylist":"A\u00f1adir a la lista de reproducci\u00f3n de audio","addToPlaylistTitle":"A\u00f1adir a la lista de reproducci\u00f3n de audio","videoPlaylistDragInfo":"Arrastrar y soltar para reordenar v\u00eddeos.","createVideoPlaylistTitle":"Crear lista de reproducci\u00f3n de v\u00eddeos","editVideoPlaylistTitle":"Editar lista de reproducci\u00f3n de v\u00eddeo","cancelVideoPlaylistTitle":"\u2190 Cancelar lista de reproducci\u00f3n de v\u00eddeos","insertVideoPlaylist":"Insertar lista de reproducci\u00f3n de v\u00eddeo","updateVideoPlaylist":"Actualizar lista de reproducci\u00f3n de v\u00eddeos","addToVideoPlaylist":"A\u00f1adir a lista de reproducci\u00f3n de v\u00eddeos","addToVideoPlaylistTitle":"A\u00f1adir a lista de reproducci\u00f3n de v\u00eddeo","settings":{"tabs":[],"tabUrl":"http:\/\/masrenovable.com\/dev\/wp_gc\/wp-admin\/media-upload.php?chromeless=1","mimeTypes":{"image":"Im\u00e1genes","audio":"Audio","video":"V\u00eddeo","text\/csv":"Store Exports"},"captions":true,"nonce":{"sendToEditor":"3f684f2b8c"},"post":{"id":0},"defaultProps":{"link":"file","align":"","size":""},"attachmentCounts":{"audio":0,"video":0},"embedExts":["mp3","ogg","wma","m4a","wav","mp4","m4v","webm","ogv","wmv","flv"],"embedMimes":{"mp3":"audio\/mpeg","m4a":"audio\/mpeg","wmv":"video\/x-ms-wmv"},"contentWidth":800}};var imageEditL10n = {"error":"No se puede cargar la previsualizaci\u00f3n de la imagen. Por favor, recarga la p\u00e1gina y prueba de nuevo."};var wordCountL10n = {"type":"w"};var quicktagsL10n = {"closeAllOpenTags":"Cerrar todas las etiquetas abiertas","closeTags":"cerrar etiquetas","enterURL":"Introduce la URL","enterImageURL":"Introduce la URL de la imagen","enterImageDescription":"Introduce una descripci\u00f3n de la imagen","fullscreen":"pantalla completa","toggleFullscreen":"Cambiar a modo pantalla completa","textdirection":"Direcci\u00f3n del texto","toggleTextdirection":"Cambiar la direcci\u00f3n del editor de texto"};var wpLinkL10n = {"title":"Insertar\/Editar enlace","update":"Actualizar","save":"A\u00f1adir enlace","noTitle":"(sin t\u00edtulo)","noMatchesFound":"No se han encontrado coincidencias."};/* ]]> */
</script>
<script type='text/javascript' src='http://masrenovable.com/dev/wp_gc/wp-admin/load-scripts.php?c=1&amp;load%5B%5D=hoverIntent,common,admin-bar,suggest,wp-ajax-response,jquery-color,wp-lists,postbox,heartbeat,post,svg-painter,wp-auth-check,jqu&amp;load%5B%5D=ery-ui-draggable,jquery-ui-slider,jquery-touch-punch,iris,wp-color-picker,jquery-ui-position,jquery-ui-menu,jquery-ui-autocomple&amp;load%5B%5D=te,underscore,shortcode,backbone,wp-util,wp-backbone,media-models,wp-plupload,mediaelement,wp-mediaelement,media-views,media-edi&amp;load%5B%5D=tor,media-audiovideo,wp-playlist,mce-view,imgareaselect,image-edit,word-count,quicktags,wplink&amp;ver=3.9.1'></script>
<script type='text/javascript' src='http://masrenovable.com/dev/wp_gc/wp-content/themes/surfarama/library/js/scripts-admin.js?ver=3.9.1'></script>

		<script type="text/javascript">
		tinyMCEPreInit = {
			baseURL: "",
			suffix: ".min",
						mceInit: {},
			qtInit: {'replycontent':{id:"replycontent",buttons:"strong,em,link,block,del,ins,img,ul,ol,li,code,close"}},
			ref: {plugins:"",theme:"modern",language:""},
			load_ext: function(url,lang){var sl=tinymce.ScriptLoader;sl.markDone(url+'/langs/'+lang+'.js');sl.markDone(url+'/langs/'+lang+'_dlg.js');}
		};
		</script>
				<script type="text/javascript">
		
		( function() {
			var init, edId, qtId, firstInit, wrapper;

			if ( typeof tinymce !== 'undefined' ) {
				for ( edId in tinyMCEPreInit.mceInit ) {
					if ( firstInit ) {
						init = tinyMCEPreInit.mceInit[edId] = tinymce.extend( {}, firstInit, tinyMCEPreInit.mceInit[edId] );
					} else {
						init = firstInit = tinyMCEPreInit.mceInit[edId];
					}

					wrapper = tinymce.DOM.select( '#wp-' + edId + '-wrap' )[0];

					if ( ( tinymce.DOM.hasClass( wrapper, 'tmce-active' ) || ! tinyMCEPreInit.qtInit.hasOwnProperty( edId ) ) &&
						! init.wp_skip_init ) {

						try {
							tinymce.init( init );

							if ( ! window.wpActiveEditor ) {
								window.wpActiveEditor = edId;
							}
						} catch(e){}
					}
				}
			}

			if ( typeof quicktags !== 'undefined' ) {
				for ( qtId in tinyMCEPreInit.qtInit ) {
					try {
						quicktags( tinyMCEPreInit.qtInit[qtId] );

						if ( ! window.wpActiveEditor ) {
							window.wpActiveEditor = qtId;
						}
					} catch(e){};
				}
			}

			if ( typeof jQuery !== 'undefined' ) {
				jQuery('.wp-editor-wrap').on( 'click.wp-editor', function() {
					if ( this.id ) {
						window.wpActiveEditor = this.id.slice( 3, -5 );
					}
				});
			} else {
				for ( qtId in tinyMCEPreInit.qtInit ) {
					document.getElementById( 'wp-' + qtId + '-wrap' ).onclick = function() {
						window.wpActiveEditor = this.id.slice( 3, -5 );
					}
				}
			}
		}());
		</script>
				<div id="wp-link-backdrop" style="display: none"></div>
		<div id="wp-link-wrap" class="wp-core-ui" style="display: none">
		<form id="wp-link" tabindex="-1">
		<input type="hidden" id="_ajax_linking_nonce" name="_ajax_linking_nonce" value="fc570c4631" />		<div id="link-modal-title">
			Insertar/Editar enlace			<div id="wp-link-close" tabindex="0"></div>
	 	</div>
		<div id="link-selector">
			<div id="link-options">
				<p class="howto">Introduce la URL de destino</p>
				<div>
					<label><span>URL</span><input id="url-field" type="text" name="href" /></label>
				</div>
				<div>
					<label><span>Título</span><input id="link-title-field" type="text" name="linktitle" /></label>
				</div>
				<div class="link-target">
					<label><span>&nbsp;</span><input type="checkbox" id="link-target-checkbox" /> Abrir enlace en una nueva ventana/pestaña</label>
				</div>
			</div>
			<p class="howto" id="wp-link-search-toggle">O enlaza a contenido ya existente</p>
			<div id="search-panel">
				<div class="link-search-wrapper">
					<label>
						<span class="search-label">Buscar</span>
						<input type="search" id="search-field" class="link-search-field" autocomplete="off" />
						<span class="spinner"></span>
					</label>
				</div>
				<div id="search-results" class="query-results">
					<ul></ul>
					<div class="river-waiting">
						<span class="spinner"></span>
					</div>
				</div>
				<div id="most-recent-results" class="query-results">
					<div class="query-notice"><em>No se ha indicado ningún término de búsqueda. Se mostrarán
 los objetos más recientes.</em></div>
					<ul></ul>
					<div class="river-waiting">
						<span class="spinner"></span>
					</div>
				</div>
			</div>
		</div>
		<div class="submitbox">
			<div id="wp-link-update">
				<input type="submit" value="Añadir enlace" class="button button-primary" id="wp-link-submit" name="wp-link-submit">
			</div>
			<div id="wp-link-cancel">
				<a class="submitdelete deletion" href="#">Cancelar</a>
			</div>
		</div>
		</form>
		</div>
<script type="text/javascript">if(typeof wpOnload=='function')wpOnload();</script>
</body>
</html>