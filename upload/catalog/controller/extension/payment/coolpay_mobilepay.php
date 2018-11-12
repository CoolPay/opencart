<?php

use CoolPay\Catalog\Controller;

/**
 * Class ControllerExtensionPaymentCoolPayMobilepay
 */
class ControllerExtensionPaymentCoolPayMobilepay extends \Controller {

	use Controller;

	/**
	 * The name of the instance
	 *
	 * @return string
	 */
	public function getInstanceName() {
		return 'coolpay_mobilepay';
	}
}