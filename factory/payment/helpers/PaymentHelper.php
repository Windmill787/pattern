<?php

namespace app\factory\payment\helpers;

use app\factory\payment\CardPaymentFactory;
use app\factory\payment\CashPaymentFactory;
use app\factory\payment\CryptoPaymentFactory;
use app\factory\payment\interfaces\PaymentFactoryInterface;
use Exception;

class PaymentHelper
{
	const PAYMENT_TYPE_CASH = 'cash';
	const PAYMENT_TYPE_CARD = 'card';
	const PAYMENT_TYPE_CRYPTO = 'crypto';

	/**
	 * @throws Exception
	 */
	public static function getFactory(string $paymentType): PaymentFactoryInterface
	{
		return match ($paymentType) {
			self::PAYMENT_TYPE_CASH => new CashPaymentFactory(),
			self::PAYMENT_TYPE_CARD => new CardPaymentFactory(),
			self::PAYMENT_TYPE_CRYPTO => new CryptoPaymentFactory(),
			default => throw new Exception("Unknown payment type"),
		};
	}
}