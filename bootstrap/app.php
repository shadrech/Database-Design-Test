<?php

use Slim\App;

$app = new App([
	"settings" => [
		"displayErrorDetails" => true, //development true, false for production
		"renderer" => [
			"blade_template_path" => __DIR__ . "/../resources/views",
			"blade_cache_path" => __DIR__ . "/../cache"
		]
	]
]);

require __DIR__ . "/container.php";
require __DIR__ . "/database.php";