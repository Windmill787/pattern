<?php declare(strict_types=1);

namespace app;

use app\adapter\AdapterHelper;
use app\adapter\AdapterType;
use app\adapter\response\JsonResponse;
use app\adapter\response\XmlResponse;
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

	public function runAdapter(): void
	{
		$responses = [
			[
				'type' => AdapterType::JSON,
				'response' => new JsonResponse(),
			],
			[
				'type' => AdapterType::XML,
				'response' => new XmlResponse(),
			],
		];

		foreach ($responses as $response) {
			$adapter = AdapterHelper::getAdapter($response['type']);
			$data = $adapter->getData($response['response']);
			print_r("<br>");
			$string = json_encode($data);
			print_r("Price: {$response['type']->value}<br>Data: $string<br>");
		}
	}
}