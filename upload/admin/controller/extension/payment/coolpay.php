<?php

use CoolPay\Admin\Installer;
use CoolPay\Admin\Settings;
use CoolPay\Instance;

/**
 * Class ControllerExtensionCoolPay
 */
class ControllerExtensionPaymentCoolPay extends Controller {

	use Instance;
	use Settings;
	use Installer;

	/**
	 * Return the name of the payment instance
	 *
	 * @return string
	 */
	public function getInstanceName() {
		return 'coolpay';
	}

	/**
	 * @return array
	 */
	protected function getInstanceSettingsFields() {
		return [
			'autocapture',
			'autofee',
			'text_on_statement',
			'branding_id',
			'payment_methods',
			'cron_token',
		];
	}

	/**
	 * @return array
	 */
	protected function getInstanceValidationFields() {
		return [
			'payment_methods',
		];
	}
}
