<?php declare(strict_types=1);

namespace app\factory\payment\interfaces;

interface PaymentFactoryInterface
{
	public function createPayment(): PaymentInterface;
}