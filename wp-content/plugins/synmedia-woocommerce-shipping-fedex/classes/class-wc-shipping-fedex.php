<?php
/**
 * WC_Shipping_Fedex class.
 *
 * @extends WC_Shipping_Method
 */
class WC_Shipping_Fedex extends WC_Shipping_Method {
	
	private $rate_major = '13';
	
	private $address_validation_major = '2';
	
	private $services = array(
		'EUROPE_FIRST_INTERNATIONAL_PRIORITY'	=> 'Europe First International Priority',
		'FEDEX_1_DAY_FREIGHT'					=> '1 Day Freight',
		'FEDEX_2_DAY'							=> '2Day',
		'FEDEX_2_DAY_AM'						=> '2Day A.M',
		'FEDEX_2_DAY_FREIGHT'					=> '2 Day Freight',
		'FEDEX_3_DAY_FREIGHT'					=> '3 Day Freight',
		'FEDEX_EXPRESS_SAVER'					=> 'Express Saver',
		'FEDEX_FIRST_FREIGHT'					=> 'First Freight',
		'FIRST_OVERNIGHT'						=> 'First Overnight',
		'PRIORITY_OVERNIGHT'					=> 'Priority Overnight',
		'STANDARD_OVERNIGHT'					=> 'Standard Overnight',
		'GROUND_HOME_DELIVERY'					=> 'Ground Home Delivery',
		'FEDEX_GROUND'							=> 'Ground',
		'INTERNATIONAL_ECONOMY'					=> 'International Economy',
		'INTERNATIONAL_FIRST'					=> 'International First',
		'INTERNATIONAL_PRIORITY'				=> 'International Priority',
		'INTERNATIONAL_ECONOMY_FREIGHT'			=> 'Economy Freight',
		'INTERNATIONAL_PRIORITY_FREIGHT'		=> 'Priority Freight',
		'FEDEX_FREIGHT'							=> 'Freight',
		'FEDEX_NATIONAL_FREIGHT'				=> 'National Freight',
		'INTERNATIONAL_GROUND'					=> 'International Ground',
		'SMART_POST'							=> 'Smart Post',
		'FEDEX_FREIGHT_ECONOMY'					=> 'Freight Economy',
		'FEDEX_FREIGHT_PRIORITY'				=> 'Freight Priority'
	);
	
	private $request;
	
	private $soap_extension = false;
	
	private $crates;
	
	private $boxes;
	
	private $key;
	
	private $password;

	function __construct() {
		global $woocommerce;
		
		$this->crates = array();
		
		$this->id = 'fedex';
		$this->title = 'Fedex';
		$this->method_title = 'Fedex';

		// Load the form fields.
		$this->init_form_fields();

		// Load the settings.
		$this->init_settings();


		$this->enabled				= isset( $this->settings['enabled'] ) && $this->settings['enabled'] == 'yes' ? true : false;
		$this->title				= isset( $this->settings['title'] ) ? $this->settings['title'] : 'Fedex';
		$this->debug				= isset( $this->settings['debug'] ) && $this->settings['debug'] == 'yes' ? true : false;
		$this->availability			= isset( $this->settings['availability'] ) ? $this->settings['availability'] : 'all';
		$this->countries			= isset( $this->settings['countries'] ) ? $this->settings['countries'] : array();
		$this->origin_postalcode	= isset($this->settings['origin_postalcode']) ? str_replace( ' ', '', strtoupper( $this->settings['origin_postalcode'] ) ) : '';
		$this->origin_country		= $woocommerce->countries->get_base_country();
		$this->dev_mode				= isset( $this->settings['dev_mode'] ) && $this->settings['dev_mode'] == 'yes' ? true : false;
		$this->dev_key				= isset( $this->settings['dev_key'] ) ? $this->settings['dev_key'] : '';
		$this->dev_password			= isset( $this->settings['dev_password'] ) ? $this->settings['dev_password'] : '';
		$this->prod_key				= isset( $this->settings['prod_key'] ) ? $this->settings['prod_key'] : '';
		$this->prod_password		= isset( $this->settings['prod_password'] ) ? $this->settings['prod_password'] : '';
		$this->account_number		= isset( $this->settings['account_number'] ) ? $this->settings['account_number'] : '510087666';
		$this->meter_number			= isset( $this->settings['meter_number'] ) ? $this->settings['meter_number'] : '118579571';
		$this->need_signature		= isset( $this->settings['need_signature'] ) && $this->settings['need_signature'] == 'yes' ? true : false;
		$this->insure_shipping		= isset( $this->settings['insure_shipping'] ) && $this->settings['insure_shipping'] == 'yes' ? true : false;
		$this->fee					= isset( $this->settings['fee'] ) ? $this->settings['fee'] : '';
		$this->shipping_methods		= isset( $this->settings['shipping_methods'] ) ? $this->settings['shipping_methods'] : array();
		$this->custom_methods		= isset( $this->settings['custom_methods'] ) ? $this->settings['custom_methods'] : array();
		
		$this->packing_method		= isset( $this->settings['packing_method'] ) ? $this->settings['packing_method'] : 'per_item';
		$this->soap_method			= isset( $this->settings['soap_method'] ) ? $this->settings['soap_method'] : 'auto';
		
		if( empty( $this->custom_methods ) && !empty( $this->services ) ){
			
			foreach( $this->services as $method_key => $method_name ){
				
				$this->custom_methods[ $method_key ] = array(
					'name'				=> woocommerce_clean( $method_name ),
					'price_ajustment'	=> '',
					'enabled'			=> ( ( isset( $this->settings['shipping_methods'] ) && array_search( $method_key, $this->settings['shipping_methods'] ) !== false ) || !isset( $this->settings['shipping_methods'] ) ? '1' : '0' )
				);
				
			}
			
		}
		
		if(class_exists('SoapClient') && class_exists('SoapHeader') && $this->soap_method != 'nusoap'){
			$this->soap_extension = true;
			if( $this->debug && $this->enabled )
				$woocommerce->add_message('Use native SoapHeader extension.<br />');
		}else{
			require_once('nusoap/lib/nusoap.php');
			if( $this->debug && $this->enabled )
				$woocommerce->add_message('Use nusoap extension.<br />');
		}
		
		if( $this->dev_mode ){
			$this->key = $this->dev_key;
			$this->password = $this->dev_password;
			$this->wsdl_path = plugin_dir_path(__FILE__)."wsdl/development/RateService_v".$this->rate_major.".wsdl";
			$this->address_validation_wsdl_path = plugin_dir_path(__FILE__).'wsdl/development/AddressValidationService_v'.$this->address_validation_major.'.wsdl';
		}else{
			$this->key = $this->prod_key;
			$this->password = $this->prod_password;
			$this->wsdl_path = plugin_dir_path(__FILE__)."wsdl/production/RateService_v".$this->rate_major.".wsdl";
			$this->address_validation_wsdl_path = plugin_dir_path(__FILE__).'wsdl/production/AddressValidationService_v'.$this->address_validation_major.'.wsdl';
		}

		add_action( 'woocommerce_update_options_shipping_' . $this->id, array( &$this, 'process_admin_options' ) );

		add_action('admin_notices', array(&$this, 'currency_check'));
	}

	/**
	 * Initialise Gateway Settings Form Fields
	 */
	function init_form_fields() {
		global $woocommerce;

		$this->form_fields = array(
		    'enabled' => array(
				'title' => __('Enable/Disable', 'wc_fedex'),
				'type' => 'checkbox',
				'label' => __('Enable Fedex', 'wc_fedex'),
				'default' => ''
		    ),
		    'title' => array(
				'title' => __('Method title', 'wc_fedex'),
				'type' => 'text',
				'description' => __('Enter the title of the shipping method.', 'wc_fedex'),
				'default' => __('Fedex', 'wc_fedex')
		    ),
		    'debug' => array(
				'title' => __('Debug Mode', 'wc_fedex'),
				'label' => __('Enable Debug Mode', 'wc_fedex'),
				'type' => 'checkbox',
				'description' => __('Output the response from Fedex on the cart/checkout for debugging purposes.', 'wc_fedex'),
				'default' => ''
		    ),
		    'availability'  => array(
				'title'           => __( 'Method Availability', 'wc_fedex' ),
				'type'            => 'select',
				'default'         => 'all',
				'class'           => 'availability',
				'options'         => array(
					'all'            => __( 'All Countries', 'wc_fedex' ),
					'specific'       => __( 'Specific Countries', 'wc_fedex' ),
				),
			),
			'countries'        => array(
				'title'           => __( 'Specific Countries', 'wc_fedex' ),
				'type'            => 'multiselect',
				'class'           => 'chosen_select',
				'css'             => 'width: 450px;',
				'default'         => '',
				'options'         => $woocommerce->countries->get_allowed_countries(),
			),
		    'origin_postalcode' => array(
				'title' => __('Origin Postal code', 'wc_fedex'),
				'type' => 'text',
				'description' => __('Enter your origin postal code.', 'wc_fedex'),
				'default' => __('', 'wc_fedex')
		    ),
		    'api'           => array(
				'title'           => __( 'API Settings', 'wc_fedex' ),
				'type'            => 'title',
				'description'     => __( 'Your API access details', 'wc_fedex' ),
		    ),
		    'dev_mode' => array(
				'title' => __('Development mode', 'wc_fedex'),
				'label' => __('Use the development key and password', 'wc_fedex'),
				'type' => 'checkbox',
				'description' => __('Enabling this feature use the development key and password and use fedex dev. environment.', 'wc_fedex'),
				'default' => 'yes'
		    ),
		    'dev_key' => array(
				'title' => __('Development Key', 'wc_fedex'),
				'type' => 'text',
				'css' => 'width: 250px;',
				'description' => __('Your Development Key to retrieve shipping rates', 'wc_fedex'),
				'default' => ''
		    ),
		    'dev_password' => array(
				'title' => __('Development Password', 'wc_fedex'),
				'type' => 'text',
				'description' => __('Your Development Password to retrieve shipping rates', 'wc_fedex'),
				'default' => ''
		    ),
		    'prod_key' => array(
				'title' => __('Production Key', 'wc_fedex'),
				'type' => 'text',
				'css' => 'width: 250px;',
				'description' => __('Your Production Key to retrieve shipping rates', 'wc_fedex'),
				'default' => ''
		    ),
		    'prod_password' => array(
				'title' => __('Production Password', 'wc_fedex'),
				'type' => 'text',
				'description' => __('Your Production Password to retrieve shipping rates', 'wc_fedex'),
				'default' => ''
		    ),
		    'account_number' => array(
				'title' => __('Account number', 'wc_fedex'),
				'type' => 'text',
				'css' => 'width: 250px;',
				'description' => __('Your account number to retrieve shipping rates', 'wc_fedex'),
				'default' => '510087666'
		    ),
		    'meter_number' => array(
				'title' => __('Meter number', 'wc_fedex'),
				'type' => 'text',
				'description' => __('Your metter number to retrieve shipping rates', 'wc_fedex'),
				'default' => '118579571'
		    ),
		    'need_signature' => array(
				'title' => __('Need signature', 'wc_fedex'),
				'label' => __('Enable signature requirements', 'wc_fedex'),
				'type' => 'checkbox',
				'description' => __('Enabling this feature will tell Fedex to calculate the cost with a signature', 'wc_fedex'),
				'default' => 'no'
		    ),
		    'insure_shipping' => array(
				'title' => __('Insure shipping', 'wc_fedex'),
				'label' => __('Enable shipping insurance', 'wc_fedex'),
				'type' => 'checkbox',
				'description' => __('Enabling this feature will tell Fedex to calculate the cost with insurance for the total.', 'wc_fedex'),
				'default' => 'no'
		    ),
		    'fee' => array(
				'title' => __('Handling Fee', 'wc_fedex'),
				'type' => 'text',
				'description' => __('Fee excluding tax. Enter an amount, e.g. 2.50, or a percentage, e.g. 5%.', 'wc_fedex'),
				'default' => '0'
		    ),
		    'custom_methods' => array(
				'type' => 'custom_methods'
		    )
		);
	}

	/**
	 * First step is to make sure the configuration of woocommerce is correct.
	 * Raise warning if is not correct.
	 */
	function currency_check() {
	}
	
	function create_soap_client( $wsdl ){
		if($this->soap_extension){
			$client = new SoapClient( $wsdl, 
				array(
					'trace' =>	true
				)
			);
		}else{
			$client = new nusoap_client($wsdl, true, array(
				'trace' =>	true
			));
			$client->soap_defencoding = 'UTF-8';
			$client->setCredentials($this->key, $this->pass);
		}
		return($client);
	}

	/**
	 * Get shipping quotes based on change of shipping address
	 * 
	 * @method calculate_shipping
	 * @abstract setup shipping rate for each selected shipping option
	 */
	function calculate_shipping( $package ){
		global $woocommerce;
		
		if($this->debug)
			$woocommerce->add_message('Enter calculate shipping function.<br />');
		
		$update_rates = false;
		$cart_items = $woocommerce->cart->get_cart();
		foreach ($cart_items as $id => $cart_item) {
			$cart_temp[] = $id . $cart_item['quantity'];
		}
		$cart_hash = hash('MD5', serialize($cart_temp));

		if (!$this->debug)
			$cache_data = get_transient(get_class($this));
		else
			$cache_data = '';

		if ($cache_data) {
			if ($cache_data['cart_hash'] == $cart_hash && $cache_data['shipping_data']['postalcode'] == $package['destination']['postcode'] && $cache_data['shipping_data']['State'] == $package['destination']['state'] && $cache_data['shipping_data']['Country'] == $package['destination']['country']) {
				$this->rates = $cache_data['rates'];
				if($this->debug)
					$woocommerce->add_message('Shipping update not required.<br />');
			} else {
				if($this->debug)
					$woocommerce->add_message('Shipping update required.<br />');
				$update_rates = true;
			}
		} else {
			if($this->debug)
				$woocommerce->add_message('Shipping update required.<br />');
			$update_rates = true;
		}

		//only update rates when needed
		if ($update_rates) {
			if($this->debug)
				$woocommerce->add_message('Enter update shipping.<br />');
			if ($this->get_shipping_request($package)) {
				$cache_data['shipping_data'] = array(
				    'postalcode' => $package['destination']['postcode'],
				    'State' => $package['destination']['state'],
				    'Country' => $package['destination']['country']
				);
				$cache_data['cart_hash'] = $cart_hash;
				$cache_data['rates'] = $this->rates;

				set_transient(get_class($this), $cache_data);
			}
		}
	}
	
	public function has_enabled_methods(){
		
		$enabled = false;
		
		if( !empty( $this->custom_methods ) ){
		
			foreach( $this->custom_methods as $method_key => $service ){
				
				if( $service['enabled'] ){

					$enabled = true;
					break;
					
				}
				
			}
			
		}
		
		return $enabled;
		
	}
	
	/**
	 * validate_address function. Used Fedex address verification
	 *
	 * @access public
	 * @param mixed $address
	 * @return $address
	 */
	public function validate_address( $address ){
		global $woocommerce;
		
		$address['postalcode'] = str_replace( ' ', '', strtoupper( $address['postalcode'] ) );
		
		$client = $this->create_soap_client( $this->address_validation_wsdl_path );
		
		if($this->soap_extension){
		
			$request = array(
				'WebAuthenticationDetail' => array(
					'UserCredential' => array(
						'Key'		=> $this->key,
						'Password'	=> $this->password
					)
				),
				'ClientDetail' => array(
					'AccountNumber'	=> $this->account_number,
					'MeterNumber'	=> $this->meter_number
				),
				'TransactionDetail' => array(
					'CustomerTransactionId' => '*** SYN Media WooCommerce Fedex Method ***'
				),
				'Version' => array(
					'ServiceId'		=> 'aval',
					'Major'			=> $this->address_validation_major,
					'Intermediate'	=> '0',
					'Minor'			=> '0'
				),
				'RequestTimestamp' => date('c'),
				'Options' => array(
					'CheckResidentialStatus'		=> 1,
					'MaximumNumberOfMatches'		=> 5,
					'StreetAccuracy'				=> 'LOOSE',
					'DirectionalAccuracy'			=> 'LOOSE',
					'CompanyNameAccuracy'			=> 'LOOSE',
					'ConvertToUpperCase'			=> 1,
					'RecognizeAlternateCityNames'	=> 1,
					'ReturnParsedElements'			=> 1
				),
				'AddressesToValidate' => array(
					array(
						'AddressId' => 'client',
						'Address' => array(
							'StreetLines' => array( $address['address'], $address['address_2'] ),
							'PostalCode'  => $address['postalcode']
						)
					)
				)
			);
			
			if($this->debug)
				$woocommerce->add_message( 'FedEx request address validation: <pre style="height:200px">' . print_r( $request, true ) . '</pre>' );
			
			$response = $client->addressValidation( $request );
			
			if($this->debug)
				$woocommerce->add_message( 'FedEx response address validation: <pre style="height:200px">' . print_r( $response, true ) . '</pre>' );
			
			if( $response->HighestSeverity != 'FAILURE' && $response->HighestSeverity != 'ERROR' ){
				
				foreach( $response->AddressResults as $validated_address ){
					
					if( $validated_address->ProposedAddressDetails->ResidentialStatus == 'BUSINESS' )
						$address['residential'] = false;
					
				}
				
			}
		
		}else{
/*
			$client->custom_payload = '<?xml version="1.0" encoding="UTF-8"?><SOAP-ENV:Envelope xmlns:SOAP-ENV="http://schemas.xmlsoap.org/soap/envelope/" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:ns1="'.$this->uri.'"><SOAP-ENV:Header><ns1:RequestContext><ns1:Version>1.2</ns1:Version><ns1:Language>fr</ns1:Language><ns1:GroupID>xxx</ns1:GroupID><ns1:RequestReference>Address validation</ns1:RequestReference></ns1:RequestContext></SOAP-ENV:Header><SOAP-ENV:Body><ns1:ValidateCityPostalCodeZipRequest><ns1:Addresses><ns1:ShortAddress><ns1:City>'.$address['city'].'</ns1:City><ns1:Province>'.$address['province'].'</ns1:Province><ns1:Country>'.$address['country'].'</ns1:Country><ns1:PostalCode>'.$address['postalcode'].'</ns1:PostalCode></ns1:ShortAddress></ns1:Addresses></ns1:ValidateCityPostalCodeZipRequest></SOAP-ENV:Body></SOAP-ENV:Envelope>';

			$response = $client->call('ValidateCityPostalCodeZip', '', $this->uri);
*/
		}

		$client = $request = null;
		
		return($address);
	}

	/**
	 * Send request and retrieve the result.
	 */
	function get_shipping_request( $package ) {
		global $woocommerce;
		
		if($this->debug)
			$woocommerce->add_message('Enter shipping request function.<br />');
		
		$client = $this->create_soap_client( $this->wsdl_path );
		
		$address = $this->validate_address( array(
			'address'		=> $package['destination']['address'],
			'address_2'		=> $package['destination']['address_2'],
			'city'			=> $package['destination']['city'],
			'province'		=> $package['destination']['state'],
			'country'		=> $package['destination']['country'],
			'postalcode'	=> $package['destination']['postcode'],
			'residential'	=> true
		));
		
		/* Declare new object first */
		$this->request = array(
			'WebAuthenticationDetail' => array(
				'UserCredential' => array(
					'Key'		=> $this->key,
					'Password'	=> $this->password
				)
			),
			'ClientDetail' => array(
				'AccountNumber'	=> $this->account_number,
				'MeterNumber'	=> $this->meter_number
			),
			'TransactionDetail' => array(
				'CustomerTransactionId' => '*** SYN Media WooCommerce Fedex Method ***'
			),
			'Version' => array(
				'ServiceId'		=> 'crs',
				'Major'			=> $this->rate_major,
				'Intermediate'	=> '0',
				'Minor'			=> '0'
			),
			'ReturnTransitAndCommit' => true,
			'RequestedShipment' => array(
				'DropoffType' => 'REGULAR_PICKUP',
				'Shipper' => array(
					'Address' => array(
						'PostalCode'	=> $this->origin_postalcode,
						'CountryCode'	=> $woocommerce->countries->get_base_country()
					)
				),
				'Recipient' => array(
					'Address' => array(
						'Residential'			=> $address['residential'],
						'StateOrProvinceCode'	=> $address['province'],
						'PostalCode'			=> $address['postalcode'],
						'CountryCode'			=> $address['country']
					)
				),
				'RequestedPackageLineItems' => array(),
				'PackageCount' => 0
			)
		);
		
		if( !in_array( $address['country'], array( 'US', 'CA',  ) ) )
			unset( $this->request['RequestedShipment']['Recipient']['Address']['StateOrProvinceCode'] );
		
		$packages = $this->set_package_requests( $package );
		
		if( count($packages) <= 0 )
			return false;
		
		foreach( $packages as $key => $pack ){
			
			$item = array(
				'Dimensions' => array(
					'Length'	=> $pack['Length'],
			    	'Width'		=> $pack['Width'],
			    	'Height'	=> $pack['Height'],
			    	'Units'		=> 'IN'
				),
				'Weight' => array(
					'Value' => $pack['Weight'],
					'Units' => 'LB'
				),
				'GroupPackageCount' => $pack['Qty'],
				'SequenceNumber' => ( $key + 1 )
			);
			
			if( $this->insure_shipping ){
				
				$item['InsuredValue'] = array(
					'Amount'	=> ( $pack['Value'] * $pack['Qty'] ),
					'Currency'	=> get_woocommerce_currency()
				);
				
			}
				
			if( $this->need_signature ){
			
				$item['SpecialServicesRequested'] = array(
					'SpecialServiceTypes' => 'SIGNATURE_OPTION',
					'SignatureOptionDetail' => array(
						'OptionType' => 'ADULT'
					)
				);
				
			}
			
			$this->request['RequestedShipment']['PackageCount'] += $pack['Qty'];
				
			$this->request['RequestedShipment']['RequestedPackageLineItems'][] = $item;
			
		}
		
		if($this->debug)
			$woocommerce->add_message( 'FedEx request: <pre style="height:200px">' . print_r( $this->request, true ) . '</pre>' );
		
		$response = $client->getRates( $this->request );
		
		if($this->debug)
			$woocommerce->add_message( 'FedEx response: <pre style="height:200px">' . print_r( $response, true ) . '</pre>' );
		
		if( $response ){
		
			if( $response->HighestSeverity != 'FAILURE' && $response->HighestSeverity != 'ERROR' && isset( $response->RateReplyDetails ) ){
			
				$rate_reply_details = $response->RateReplyDetails;
			
				if( !is_array( $rate_reply_details ) )
					$rate_reply_details = array( $rate_reply_details );
					
				foreach( $rate_reply_details as $rate ){
				
					$method_id = $rate->ServiceType;
				
					if( !isset( $this->custom_methods[ $method_id ] ) || ( isset( $this->custom_methods[ $method_id ] ) && !$this->custom_methods[ $method_id ][ 'enabled' ] ) )
						continue;
					
					$rate_id = $this->id.':'.$method_id;
					$rate_name = $this->title.' ' . ( !empty( $this->custom_methods[ $method_id ]['name'] ) ? $this->custom_methods[ $method_id ]['name'] : $this->services[ $method_id ] );
					$rate_cost = is_array( $rate->RatedShipmentDetails ) ? $rate->RatedShipmentDetails[0]->ShipmentRateDetail->TotalNetCharge->Amount : $rate->RatedShipmentDetails->ShipmentRateDetail->TotalNetCharge->Amount;
					
					$this->combine_estimate(array(
						'code'	=> $method_id,
						'id' 	=> $rate_id,
						'label' => $rate_name,
						'cost' 	=> $rate_cost
					));
					
				}
				
				if( !empty($this->crates) ){
				
					foreach( $this->crates as $rate ){
						$this->add_this_estimate($rate);
					}
					
				}
					
			}
			
		}
		
		if( empty( $this->rates ) ){
			
			if($this->debug)
				$woocommerce->add_message('Fedex returned no rates - ensure you have defined product dimensions and weights.');
			
		}else{
			
			if($this->debug)
				$woocommerce->add_message('All was good!');
			
		}
		
		return false;
	}
	
	function combine_estimate( $estimate ){
	
		if( !isset($this->crates[ $estimate['id'] ]) ){
			$this->crates[ $estimate['id'] ] = $estimate;
		}else{
			$this->crates[ $estimate['id'] ]['cost'] += $estimate['cost'];
		}
		
	}
	
	function add_this_estimate($estimate){
		global $woocommerce;
		
		if( !empty( $this->custom_methods[ $estimate['code'] ][ 'price_ajustment' ] ) ){
			$estimate['cost'] = $estimate['cost'] + $this->get_fee( $this->custom_methods[ $estimate['code'] ][ 'price_ajustment' ], $estimate['cost'] );
		}
		unset($estimate['code']);

		if( !empty( $this->fee ) ) {
			$estimate['cost'] = $estimate['cost'] + $this->get_fee($this->fee, $estimate['cost']);
		}
		
		$this->add_rate( $estimate );
	}


	/**
	 * Shipping method available condition:
	 * 1. Set to yes
	 * 2. Origin country is CA
	 * 3. Dest country is in the list
	 * 
	 * @global type $woocommerce
	 * @return type 
	 */
	function is_available() {
		global $woocommerce;
		
		if ( !$this->enabled )
			return false;
			
		if($this->debug)
			$woocommerce->add_message('Fedex is enabled<br />');

		if (isset($woocommerce->cart->cart_contents_total) && isset($this->min_amount) && $this->min_amount && $this->min_amount > $woocommerce->cart->cart_contents_total)
			return false;

		if (!$this->origin_postalcode):
			return false;
		endif;

		$ship_to_countries = '';

		if ($this->availability == 'specific') :
			$ship_to_countries = $this->countries;
		else :
			if (get_option('woocommerce_allowed_countries') == 'specific') :
				$ship_to_countries = get_option('woocommerce_specific_allowed_countries');
			endif;
		endif;

		if (is_array($ship_to_countries)) :
			if (!in_array($woocommerce->customer->get_shipping_country(), $ship_to_countries))
				return false;
		endif;

		return true;
	}

	function admin_options() {
		global $woocommerce;
		?>
		<h3><?php _e('Fedex', 'wc_fedex'); ?></h3>
		<p><?php echo(sprintf(__('You must have a Key and Password to calculate Fedex Shipping, <a href="%s" target="_blank">click here</a> to register an account with Fedex.', 'wc_fedex'), 'http://www.fedex.com/us/developer/')); ?></p>
		<table class="form-table">
			<?php
			// Generate the HTML For the settings form.
			$this->generate_settings_html();
			?>
		</table><!--/.form-table-->
		<?php
	}
	
	/**
     * get_request function.
     *
     * @access private
     * @return void
     */
    private function set_package_requests( $package ) {

	    // Choose selected packing
    	switch ( $this->packing_method ) { 
	    	case 'per_item' :
	    	default :
	    		$packages = $this->per_item_shipping( $package );
	    	break;
    	}
    	
    	return $packages;
    }
    
    /**
     * per_item_shipping function.
     *
     * @access private
     * @param mixed $package
     * @return void
     */
    private function per_item_shipping( $package ) {
    
	    global $woocommerce;
	    
	    $packages = array();

    	// Get weight of order
    	foreach ( $package['contents'] as $item_id => $values ) {

    		if ( ! $values['data']->needs_shipping() ) {
    			if ( $this->debug )
    				$woocommerce->add_message( sprintf( __( 'Product # is virtual. Skipping.', 'wc_fedex' ), $item_id ) );
    			continue;
    		}

    		if ( ! $values['data']->get_weight() ) {
	    		if ( $this->debug )
	    			$woocommerce->add_error( sprintf( __( 'Product # is missing weight. Aborting.', 'wc_fedex' ), $item_id ) );
	    		return;
    		}

			if ( $values['data']->length && $values['data']->height && $values['data']->width ) {

				$dimensions = array( $values['data']->length, $values['data']->height, $values['data']->width );

				rsort( $dimensions );
				
				$pack = array(
					'Length'	=> max( 1, round( woocommerce_get_dimension( $dimensions[0], 'in' ), 2 ) ),
					'Width'		=> max( 1, round( woocommerce_get_dimension( $dimensions[1], 'in' ), 2 ) ),
					'Height'	=> max( 1, round( woocommerce_get_dimension( $dimensions[2], 'in' ), 2 ) ),
					'Weight'	=> max( '0.5', round( woocommerce_get_weight( $values['data']->get_weight(), 'lbs' ), 2 ) ),
					'Qty'		=> $values['quantity'],
					'Value'		=> $values['data']->get_price()
				);
				
				$packages[] = $pack;
				
			}
			
    	}
    	
    	return $packages;
    	
    }
    	
	/**
     * Generate Multiselect HTML.
     *
     * @access public
     * @param mixed $key
     * @param mixed $data
     * @since 1.0.0
     * @return string
     */
    function generate_multiselect_html ( $key, $data ) {
    	$html = '';

    	if ( isset( $data['title'] ) && $data['title'] != '' ) $title = $data['title']; else $title = '';
    	$data['options'] = (isset( $data['options'] )) ? (array) $data['options'] : array();
    	$data['class'] = (isset( $data['class'] )) ? $data['class'] : '';
    	$data['css'] = (isset( $data['css'] )) ? $data['css'] : '';

		$html .= '<tr valign="top">' . "\n";
			$html .= '<th scope="row" class="titledesc">';
			$html .= '<label for="' . $this->plugin_id . $this->id . '_' . $key . '">' . $title . '</label>';
			$html .= '</th>' . "\n";
			$html .= '<td class="forminp">' . "\n";
				$html .= '<fieldset><legend class="screen-reader-text"><span>' . $title . '</span></legend>' . "\n";
				$html .= '<select multiple="multiple" style="'.$data['css'].'" class="multiselect '.$data['class'].'" name="' . $this->plugin_id . $this->id . '_' . $key . '[]" id="' . $this->plugin_id . $this->id . '_' . $key . '">';

				foreach ($data['options'] as $option_key => $option_value) :
					$html .= '<option value="'.$option_key.'" ';
					if (isset($this->settings[$key]) && in_array($option_key, (array) $this->settings[$key])) $html .= 'selected="selected"';
					$html .= '>'.$option_value.'</option>';
				endforeach;

				$html .= '</select>';
				if ( isset( $data['description'] ) && $data['description'] != '' ) { $html .= '<span class="description">' . $data['description'] . '</span>' . "\n"; }
				if(isset($data['allbuttons']) && $data['allbuttons']){ $html .= '<br ><input type="button" class="button select_all_fedex_shipping" value="'.__('Select All', 'wc_fedex').'"><button class="button select_none_fedex_shipping">'.__('Select None', 'wc_fedex').'</button>'."<script type=\"text/javascript\">jQuery(function(){jQuery('.select_all_fedex_shipping').live('click', function(){jQuery('#woocommerce_fedex_shipping_methods option').attr('selected','selected');jQuery('#woocommerce_fedex_shipping_methods').trigger('liszt:updated');return false;});jQuery('.select_none_fedex_shipping').live('click', function(){jQuery('#woocommerce_fedex_shipping_methods option').removeAttr('selected');jQuery('#woocommerce_fedex_shipping_methods').trigger('liszt:updated');return false;})});</script>"; }
			$html .= '</fieldset>';
			$html .= '</td>' . "\n";
		$html .= '</tr>' . "\n";

    	return $html;
    }
    
    function generate_custom_methods_html ( $key, $data ) {
    	global $woocommerce;
    	
    	ob_start();
		?>
		<tr valign="top" id="method_options">
			<th scope="row" class="titledesc"><?php _e( 'Services', 'wc_ups' ); ?></th>
			<td class="forminp">
				<table class="wc_tax_rates widefat">
					<thead>
						<tr>
							<th class="sort">&nbsp;</th>
			
							<th><?php _e( 'Method name', 'syn_ups' ); ?>&nbsp;<span class="tips" data-tip="<?php _e('The method name that will be show on the cart and checkout.', 'syn_ups'); ?>">[?]</span></th>
			
							<th><?php _e( 'Price ajustment', 'syn_ups' ); ?>&nbsp;<span class="tips" data-tip="<?php _e('Surcharge for this method, enter either a fixed amount (Ex.: 3.34) or a % amount (Ex.: 3.34%)', 'syn_ups'); ?>">[?]</span></th>
			
							<th style="width:8%;"><?php _e( 'Enabled', 'syn_ups' ); ?>&nbsp;<span class="tips" data-tip="<?php _e('Enable this shipping method or not', 'syn_ups'); ?>">[?]</span></th>
			
						</tr>
					</thead>
					<tbody id="methods">
					
					<?php if( !empty( $this->custom_methods ) ){ ?>
					
					<?php foreach( $this->custom_methods as $method_key => $service ){ ?>
					
						<tr>
							<td class="sort"><input type="hidden" class="order_shipping_method" name="order_shipping_method[]" value="<?php echo( $method_key ); ?>" /></td>
	
							<td class="method_name">
								<input type="text" name="method_name[]" value="<?php echo esc_attr( $service['name'] ) ?>" />
							</td>
	
							<td class="price_ajustment">
								<input type="text" name="method_price_ajustment[]" value="<?php echo esc_attr( $service['price_ajustment'] ) ?>" placeholder="<?php _e( 'Ex.: 3.34 or 3.34%', 'syn_ups' ); ?>" />
							</td>
	
							<td class="method_enabled" style="width:8%;" align="center">
								<input type="checkbox" class="checkbox" name="method_enabled_<?php echo($method_key); ?>" value="1" style="width:auto;"<?php echo( $service['enabled'] ? ' checked="checked"' : '' ); ?> />
							</td>
	
						</tr>
					
					<?php } ?>
					
					<?php } ?>

					</tbody>
				</table>
				<script type="text/javascript">
					jQuery( function() {
						jQuery('.wc_tax_rates tbody').sortable({
							items:'tr',
							cursor:'move',
							axis:'y',
							scrollSensitivity:40,
							forcePlaceholderSize: true,
							helper: 'clone',
							opacity: 0.65,
							placeholder: 'wc-metabox-sortable-placeholder',
							start:function(event,ui){
								ui.item.css('background-color','#f6f6f6');
							},
							stop:function(event,ui){
								ui.item.removeAttr('style');
							}
						});
					});
				</script>
			</td>
		</tr>
		<?php
		
		return ob_get_clean();
		
    }
    
    public function validate_custom_methods_field( $key ) {
    
		$custom_methods = array();
		
		if( !empty( $_POST['order_shipping_method'] ) ){
			
			foreach( $_POST['order_shipping_method'] as $key => $method_key ){
				
				$custom_methods[ $method_key ] = array(
					'name'				=> woocommerce_clean( $_POST['method_name'][$key] ),
					'price_ajustment'	=> woocommerce_clean( $_POST['method_price_ajustment'][$key] ),
					'enabled'			=> isset( $_POST['method_enabled_'.$method_key] ) ? 1 : 0
				);
				
			}
			
		}

		return $custom_methods;
		
	}

}
	
?>