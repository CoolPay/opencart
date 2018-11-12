<?php

use CoolPay\Catalog\Model;

/**
 * Class ModelExtensionPaymentCoolPayKlarna
 */
class ModelExtensionPaymentCoolPayKlarna extends \Model {

	use Model;

	/**
	 * Return the name of the payment instance
	 *
	 * @return string
	 */
	public function getInstanceName() {
		return 'coolpay_klarna';
	}

	/**
	 * Return gateway specific payment link data
	 *
	 * @return array
	 */
	public function getPaymentLinkData() {
		return [
			'payment_methods' => 'klarna',
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
