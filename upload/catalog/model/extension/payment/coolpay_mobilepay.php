<?php

use CoolPay\Catalog\Model;

/**
 * Class ModelExtensionPaymentCoolPayMobilepay
 */
class ModelExtensionPaymentCoolPayMobilepay extends \Model {

	use Model;

	/**
	 * Return the name of the payment instance
	 *
	 * @return string
	 */
	public function getInstanceName() {
		return 'coolpay_mobilepay';
	}

	/**
	 * Return gateway specific payment link data
	 *
	 * @return array
	 */
	public function getPaymentLinkData() {
		return [
			'payment_methods' => 'mobilepay',
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
