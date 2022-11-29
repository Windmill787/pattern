<?php

namespace app\factory\payment;

use app\factory\payment\interfaces\PaymentFactoryInterface;
use app\factory\payment\interfaces\PaymentInterface;

class CardPaymentFactory implements PaymentFactoryInterface
{
	public function createPayment(): PaymentInterface
	{
		return new CardPayment();
	}
}