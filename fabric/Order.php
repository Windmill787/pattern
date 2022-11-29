<?php

declare(strict_types=1);

class Order
{
	public $sum;

	public function __construct(int $sum)
	{
		$this->sum = $sum;
	}
}