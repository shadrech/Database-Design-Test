<?php

use Interop\Container\ContainerInterface;
use Slim\Views\Blade;

return [
	Blade::class => function(ContainerInterface $c) {
		$blade = return new Blade(
	        __DIR__ . "/../resources/views",
	        __DIR__ . "/../cache"
	    );

	    return $blade;
	}
]