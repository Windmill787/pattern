<?php declare(strict_types=1);

namespace app\adapter\response;

class JsonResponse
{
	public function getJsonData(): string
	{
		return json_encode(['text' => 'Hello world']);
	}
}