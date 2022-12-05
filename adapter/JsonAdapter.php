<?php declare(strict_types=1);

namespace app\adapter;

use app\adapter\response\JsonResponse;

class JsonAdapter implements AdapterInterface
{
	public function getData($response): array
	{
		/** @var $response JsonResponse */
		return json_decode($response->getJsonData());
	}
}