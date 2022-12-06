<?php declare(strict_types=1);

namespace app\adapter;

use app\adapter\response\JsonResponse;

class JsonAdapter implements AdapterInterface
{
	public function __construct(readonly JsonResponse $response)
	{
	}

	public function getData(): array
	{
		return json_decode($this->response->getJsonData(), true);
	}
}