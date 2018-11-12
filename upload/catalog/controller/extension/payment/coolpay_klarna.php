<?php

use CoolPay\Catalog\Controller;

/**
 * Class ControllerExtensionPaymentCoolPayKlarna
 */
class ControllerExtensionPaymentCoolPayKlarna extends \Controller {

	use Controller;

	/**
	 * The name of the instance
	 *
	 * @return string
	 */
	public function getInstanceName() {
		return 'coolpay_klarna';
	}
}