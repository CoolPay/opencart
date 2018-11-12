<?php

use CoolPay\Admin\Installer;
use CoolPay\Admin\Settings;
use CoolPay\Instance;

/**
 * Class ControllerExtensionPaymentCoolPayViabill
 */
class ControllerExtensionPaymentCoolPayViabill extends Controller {

	use Instance;
	use Installer;
	use Settings;

	/**
	 * Return the name of the payment instance
	 *
	 * @return string
	 */
	public function getInstanceName() {
		return 'coolpay_viabill';
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