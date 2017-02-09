<?php
namespace App\Controllers;

use App\Controllers\Controller;
use App\Models\Enrolment;
use App\Models\Member;
use App\Models\School;
use App\Validation\MemberValidation;
use Slim\Http\Request;
use Slim\Http\Response;

/**
* Home Controller which handles basic web roots and returns assocaiated view
*/
class MemberController extends Controller
{
	public function index($request, $response, $args)
	{
		$members = Member::all();

		return $this->view->render($response, 'members', compact('members'));
	}

	/**
	 * Show form to create new member
	 * @param  Slim\Http\Request   $request
	 * @param  Slim\Http\Response $response
	 * @param  array   $args
	 * @return Slim\Http\Response
	 */
	public function create($request, $response, $args)
	{
		$schools = School::all();

		return $this->view->render($response, 'addMember', compact('schools'));
	}

	/**
	 * Add a new member with one school
	 * @param  Slim\Http\Request   $request
	 * @param  Slim\Http\Response $response
	 * @param  array   $args
	 * @return Slim\Http\Response
	 */
	public function post(Request $request, Response $response, $args)
	{
		$input = $request->getParsedBody();
		$validator = new MemberValidation($input);

		//validation failed therefore redirect back with errors
		if (!empty($errors = $validator->validate())) {
			$schools = School::all();
			return $this->view->render($response, 'addMember', compact('errors','schools'));
		}

		$input = $validator->getInput();
		
		$member = Member::create([
			'name' => $input['name'],
			'email' => $input['email']
		]);

		Enrolment::create([
			'member_id' => $member->id,
			"school_id" => $input['school']
		]);

		return $response->withRedirect('/members', 200);
	}

	public function delete(Request $request, Response $response, $args)
	{
		$id = $request->getParam('id');

		Member::findOrFail($id)->delete();

		return $response->withRedirect('/members', 200);	
	}
}