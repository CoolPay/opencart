<?php

use CoolPay\Catalog\Recurring;
use CoolPay\Statuses;

class ControllerExtensionRecurringCoolPay extends \Controller implements Statuses {

	use Recurring\Controller;

	/**
	 * Return the name of the payment instance
	 *
	 * @return string
	 */
	public function getInstanceName() {
		return 'coolpay';
	}
}