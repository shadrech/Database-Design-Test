<?php

use App\Controller;
use Slim\Views\Blade;

$container = $app->getContainer();

/*
declare view here so we can access it via the anonymous function in the
proxy methods on the \Slim\App instance, or injecting it to every instance
of App/Controllers\Controller via its constructor
 */
$container['view'] = function($container) {
	return new Blade(
		$container['settings']['renderer']['blade_template_path'],
        $container['settings']['renderer']['blade_cache_path']
	);
};