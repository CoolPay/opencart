<?php

use CoolPay\Admin\Installer;
use CoolPay\Admin\Settings;
use CoolPay\Instance;

/**
 * Class ControllerExtensionPaymentCoolPayMobilepay
 */
class ControllerExtensionPaymentCoolPayMobilepay extends Controller {

	use Instance;
	use Installer;
	use Settings;

	/**
	 * Return the name of the payment instance
	 *
	 * @return string
	 */
	public function getInstanceName() {
		return 'coolpay_mobilepay';
	}

	/**
	 * @return array
	 */
	protected function getInstanceSettingsFields() {
		return [];
	}

	/**
	 * @return array
	 */
	protected function getInstanceValidationFields() {
		return [];
	}
}