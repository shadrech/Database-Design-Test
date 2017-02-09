<?php
namespace App\Controllers;

use App\Controllers\Controller;
use App\Models\Member;

/**
* Home Controller which handles basic web roots and returns assocaiated view
*/
class HomeController extends Controller
{
	/**
	 * Main home page
	 */
	function index($request, $response, $args)
	{
		$member = Member::first();

		$name = "Cambridge University";

		return $this->view->render($response, 'home', compact('name', 'member'));
	}
}