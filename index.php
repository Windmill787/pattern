<?php declare(strict_types=1);

use app\App;

require __DIR__ . '/vendor/autoload.php';

try {
	$app = new App();
	$app->runFactory();

	

	print_r("<hr>End");
} catch (Throwable $e) {
	print_r("<pre>$e</pre>");
}