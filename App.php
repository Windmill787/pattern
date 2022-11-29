<?php declare(strict_types=1);

namespace app;

use app\factory\Order;
use app\factory\payment\helpers\PaymentHelper;

class App
{
	public function runFactory(): void
	{
		$orderPayments = [
			[
				'order' => new Order(50),
				'payment_type' => PaymentHelper::PAYMENT_TYPE_CASH
			],
			[
				'order' => new Order(100),
				'payment_type' => PaymentHelper::PAYMENT_TYPE_CARD
			],
			[
				'order' => new Order(500),
				'payment_type' => PaymentHelper::PAYMENT_TYPE_CARD
			],
			[
				'order' => new Order(1000),
				'payment_type' => PaymentHelper::PAYMENT_TYPE_CRYPTO
			]
		];

		foreach ($orderPayments as $orderPayment) {
			$payment = PaymentHelper::getFactory($orderPayment['payment_type'])->createPayment();
			$payment->pay();
			print_r("<br>");
			print_r("Price: {$orderPayment['order']->sum}<br><br>");
		}
	}
}