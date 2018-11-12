<?php

use CoolPay\Catalog\Controller;
use CoolPay\Statuses;

/**
 * Class ControllerExtensionPaymentCoolPay
 */
class ControllerExtensionPaymentCoolPay extends \Controller implements Statuses {

	use Controller;

	/**
	 * The name of the instance
	 *
	 * @return string
	 */
	public function getInstanceName() {
		return 'coolpay';
	}
}