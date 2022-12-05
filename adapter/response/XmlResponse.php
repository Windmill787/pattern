<?php declare(strict_types=1);

namespace app\adapter\response;

class XmlResponse
{
	public function getXmlData(): \SimpleXMLElement
	{
		return new \SimpleXMLElement(<<<XML
<?xml version="1.0" encoding="utf-8" ?>
<text>Hello world</text>
XML
);
	}
}