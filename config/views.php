<?php

return [
	"settings" => [
		"displayErrorDetails" => true, //development true, false for production
		"renderer" => [
			"blade_template_path" => __DIR__ . "/../resources/views",
			"blade_cache_path" => __DIR__ . "/../cache"
		]
	]
];