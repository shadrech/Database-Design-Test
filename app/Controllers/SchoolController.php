<?php
namespace App\Controllers;

use App\Controllers\Controller;
use App\Models\Member;
use App\Models\School;
use App\Validation\SchoolValidation;
use Slim\Http\Request;
use Slim\Http\Response;

/**
* Home Controller which handles basic web roots and returns assocaiated view
*/
class SchoolController extends Controller
{
	function index($request, $response, $args)
	{
		$schools = School::all();

		return $this->view->render($response, 'schools', compact('schools'));
	}

	public function create($request, $response, $args)
	{
		return $this->view->render($response, 'addSchool');
	}

	public function post(Request $request, Response $response, $args)
	{
		$input = $request->getParsedBody();
		$validator = new SchoolValidation($input);

		//validation failed therefore redirect back with errors
		if (!empty($errors = $validator->validate())) {
			return $this->view->render($response, 'addSchool', compact('errors'));
		}

		School::create($validator->getInput());

		return $response->withRedirect('/', 200);
	}
}