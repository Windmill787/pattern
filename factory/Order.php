<?php declare(strict_types=1);

namespace app\factory;

class Order
{
	public float $sum;

	public function __construct(float $sum)
	{
		$this->sum = $sum;
	}
}