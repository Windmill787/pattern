<?php declare(strict_types=1);

namespace app\adapter;

class AdapterHelper
{
	public static function getAdapter(AdapterType $adapterType): AdapterInterface
	{
		return match ($adapterType) {
			AdapterType::JSON => new JsonAdapter(),
			AdapterType::XML => new XmlAdapter()
		};
	}
}