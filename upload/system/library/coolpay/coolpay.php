<?php

namespace CoolPay;

use CoolPay\API\Client;
use CoolPay\API\Request;

/**
 * Class CoolPay
 *
 * @package CoolPay
 */
class CoolPay {

	use Order;

	/**
	 * Contains the CoolPay_Request object
	 *
	 * @type Request
	 * @access public
	 **/
	public $request;


	/**
	 * __construct function.
	 *
	 * Instantiates the main class.
	 * Creates a client which is passed to the request construct.
	 *
	 * @auth_string string Authentication string for CoolPay
	 *
	 * @access      public
	 */
	public function api( $auth_string = '' ) {
		$client        = new Client( $auth_string );
		$this->request = new Request( $client );
	}
}
