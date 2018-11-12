<?php

use CoolPay\Catalog\Model;

/**
 * Class ModelExtensionPaymentCoolPayViabill
 */
class ModelExtensionPaymentCoolPayViabill extends \Model {

	use Model;

	/**
	 * Return the name of the payment instance
	 *
	 * @return string
	 */
	public function getInstanceName() {
		return 'coolpay_viabill';
	}

	/**
	 * Return gateway specific payment link data
	 *
	 * @return array
	 */
	public function getPaymentLinkData() {
		return [
			'payment_methods' => 'viabill',
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
