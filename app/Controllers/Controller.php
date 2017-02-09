<?php
namespace App\Controllers;

use Slim\Views\Blade;

/**
* Main Controller method for Blade dependency injection
*/
class Controller
{
	protected $view;

	function __construct($container)
	{
		//setup Slim\Views\Blade instance for all Controllers
		$this->view = $container['view'];
	}
}