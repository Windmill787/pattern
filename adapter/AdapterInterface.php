<?php declare(strict_types=1);

namespace app\adapter;

interface AdapterInterface
{
	public function getData($response): array;
}