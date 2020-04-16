<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;
use Reliese\Database\Eloquent\Model;

/**
 * Class FarmHarvesting
 * 
 * @property int $id
 * @property int $user_id
 * @property int $farmer_id
 * @property Carbon $date_of_activity
 * @property string $month_of_activity
 * @property string $year_of_activity
 * @property string $labour_cost
 * @property string $package_type
 * @property string $quantity
 * @property string $weight
 * @property string $unit
 * @property string $notes
 * @property string $image_url
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
class FarmHarvesting extends Model
{
	use SoftDeletes;
	protected $table = 'farm_harvesting';

	protected $casts = [
		'user_id' => 'int',
		'farmer_id' => 'int'
	];

	protected $dates = [
		'date_of_activity'
	];

	protected $fillable = [
		'user_id',
		'farmer_id',
		'date_of_activity',
		'month_of_activity',
		'year_of_activity',
		'labour_cost',
		'package_type',
		'quantity',
		'weight',
		'unit',
		'notes',
		'image_url',
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
