<?php
namespace App\Models;

use App\Models\Enrolment;
use Illuminate\Database\Eloquent\Model;

/**
* School Model for the illuminate/database package
*/
class School extends Model
{
	public $timestamps = false;
	protected $fillable = [
		'name'
	];

	/**
	 * Get all enrolments associated with the
	 * @return App\Models\Enrolment(s)
	 */
	public function enrolments()
	{
		$this->hasMany(Enrolment::class, "school_id");
	}
}