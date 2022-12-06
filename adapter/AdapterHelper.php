<?php declare(strict_types=1);

namespace app\adapter;

class AdapterHelper
{
	public static function getAdapter(AdapterType $adapterType, $response): AdapterInterface
	{
		return match ($adapterType) {
			AdapterType::JSON => new JsonAdapter($response),
			AdapterType::XML => new XmlAdapter($response)
		};
	}
}