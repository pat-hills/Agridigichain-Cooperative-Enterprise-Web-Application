<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;
use Reliese\Database\Eloquent\Model;

/**
 * Class FarmVisit
 * 
 * @property int $id
 * @property int $farmer_id
 * @property int $user_id
 * @property Carbon $date_time_visit
 * @property Carbon $date_visit
 * @property string $comments
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property string $deleted_at
 * @property string $status
 * 
 * @property Farmer $farmer
 * @property User $user
 *
 * @package App\Models
 */
class FarmVisit extends Model
{
	use SoftDeletes;
	protected $table = 'farm_visit';

	protected $casts = [
		'farmer_id' => 'int',
		'user_id' => 'int'
	];

	protected $dates = [
		'date_time_visit',
		'date_visit'
	];

	protected $fillable = [
		'farmer_id',
		'user_id',
		'date_time_visit',
		'date_visit',
		'comments',
		'status'
	];

	public function farmer()
	{
		return $this->belongsTo(Farmer::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
