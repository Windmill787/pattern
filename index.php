<?php

declare(strict_types=1);

include "./fabric/Order.php";


try {
	$order = new Order(123);

	print_r($order);

	print_r("<hr>End");
} catch (Throwable $e) {
	print_r("<pre>$e</pre>");
}