<?php

use CoolPay\Catalog\Controller;

/**
 * Class ControllerExtensionPaymentCoolPaySofort
 */
class ControllerExtensionPaymentCoolPaySofort extends \Controller {

	use Controller;

	/**
	 * The name of the instance
	 *
	 * @return string
	 */
	public function getInstanceName() {
		return 'coolpay_sofort';
	}
}