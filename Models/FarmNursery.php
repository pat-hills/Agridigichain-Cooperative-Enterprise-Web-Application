<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;
use Reliese\Database\Eloquent\Model;

/**
 * Class FarmNursery
 * 
 * @property int $id
 * @property int $user_id
 * @property int $farmer_id
 * @property Carbon $date_of_activity
 * @property string $month_of_activity
 * @property string $year_of_activity
 * @property string $size_of_nursery
 * @property string $source_of_seedling
 * @property float $cost
 * @property string $notes
 * @property string $receipt_url
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property string $deleted_at
 * @property string $status
 * @property string $main_crop
 * 
 * @property Farmer $farmer
 * @property User $user
 *
 * @package App\Models
 */
class FarmNursery extends Model
{
	use SoftDeletes;
	protected $table = 'farm_nursery';

	protected $casts = [
		'user_id' => 'int',
		'farmer_id' => 'int',
		'cost' => 'float'
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
		'size_of_nursery',
		'source_of_seedling',
		'cost',
		'notes',
		'receipt_url',
		'status',
		'main_crop'
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
