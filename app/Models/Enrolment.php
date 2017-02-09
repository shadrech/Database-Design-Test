<?php
namespace App\Models;

use App\Models\Member;
use App\Models\School;
use Illuminate\Database\Eloquent\Model;

/**
* Model for enrolments table. This houses all the schools and members subscribed
* to that school in one table
*/
class Enrolment extends Model
{
	public $timestamps = false;

	protected $fillable = [
		'member_id',
		'school_id'
	];
	
	/**
	 * Returns associated School
	 * @return App\Models\School
	 */
	public function school()
	{
		return $this->hasOne(School::class, 'id', 'school_id');
	}

	/**
	 * Returns assocaited Member
	 * @return App\Models\Member
	 */
	public function member()
	{
		return $this->hasOne(Member::class, 'id', 'member_id');
	}
}