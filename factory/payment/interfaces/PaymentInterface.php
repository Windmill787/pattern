<?php declare(strict_types=1);

namespace app\factory\payment\interfaces;

interface PaymentInterface
{
	public function pay(): void;
}