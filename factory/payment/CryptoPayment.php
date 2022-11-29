<?php declare(strict_types=1);

namespace app\factory\payment;

use app\factory\payment\interfaces\PaymentInterface;

class CryptoPayment implements PaymentInterface
{
	public function pay(): void
	{
		print_r('Paying with crypto');
	}
}