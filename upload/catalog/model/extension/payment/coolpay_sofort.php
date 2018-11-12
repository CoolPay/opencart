<?php

use CoolPay\Catalog\Model;

/**
 * Class ModelExtensionPaymentCoolPaySofort
 */
class ModelExtensionPaymentCoolPaySofort extends \Model {

	use Model;

	/**
	 * Return the name of the payment instance
	 *
	 * @return string
	 */
	public function getInstanceName() {
		return 'coolpay_sofort';
	}

	/**
	 * Return gateway specific payment link data
	 *
	 * @return array
	 */
	public function getPaymentLinkData() {
		return [
			'payment_methods' => 'sofort',
		];
	}

	/**
	 * Returns gateway specific payment data
	 *
	 * @return array
	 */
	public function getPaymentData() {
		return [
		];
	}
}
