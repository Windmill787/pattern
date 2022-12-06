<?php declare(strict_types=1);

namespace app\adapter;

use app\adapter\response\XmlResponse;

class XmlAdapter implements AdapterInterface
{
	public function __construct(readonly XmlResponse $response)
	{
	}

	public function getData(): array
	{
		return array($this->response->getXmlData());
	}
}