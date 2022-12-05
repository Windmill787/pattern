<?php declare(strict_types=1);

namespace app\adapter;

enum AdapterType: string
{
	case XML = 'xml';
	case JSON = 'json';
}
