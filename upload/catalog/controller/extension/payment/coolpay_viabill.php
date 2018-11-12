<?php

use CoolPay\Catalog\Controller;

/**
 * Class ControllerExtensionPaymentCoolPayViabill
 */
class ControllerExtensionPaymentCoolPayViabill extends \Controller {

	use Controller;

	/**
	 * The name of the instance
	 *
	 * @return string
	 */
	public function getInstanceName() {
		return 'coolpay_viabill';
	}
}