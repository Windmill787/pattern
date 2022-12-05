<?php declare(strict_types=1);

namespace app\adapter;

use app\adapter\response\XmlResponse;

class XmlAdapter implements AdapterInterface
{
	public function getData($response): array
	{
		/** @var $response XmlResponse */
		return array($response->getXmlData());
	}
}