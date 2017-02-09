<?php
namespace App\Models;

use App\Models\Enrolment;
use Illuminate\Database\Eloquent\Model;

/**
* Model for members table
*/
class Member extends Model
{
	public $timestamps = false;
	protected $fillable = [
		'name',
		'email'
	];

	/**
	 * Get all enrolments member is enrolled for
	 * @return App\Models\Enrolment(s)
	 */
	public function enrolments()
	{
		return $this->hasMany(Enrolment::class, "member_id");
	}
}