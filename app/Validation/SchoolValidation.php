<?php
namespace App\Validation;

class SchoolValidation
{
	private $input;

	function __construct(array $input)
	{
		$this->input = $this->cleanInputs($input);
	}

	/**
	 * Validate input array
	 * @return array Errors array
	 */
	public function validate()
	{
		$errors = [];

		if (empty($this->input['name']))
			$errors[] = "Name field must be present";
		elseif (!preg_match("/^[a-zA-Z ]*$/", $this->input['name']))
      		$errors[] = "Only letters and white space allowed for name";

      	return $errors;
	}

	/**
	 * Input getter function
	 * @return array
	 */
	public function getInput()
	{
		return $this->input;
	}

	/**
	 * Clean inputs, escape special chars, trim...
	 * @param  array $input
	 * @return array
	 */
	private function cleanInputs($input)
	{
		return array_map(function($i){
			return htmlspecialchars(trim($i));
		}, $input);
	}
}