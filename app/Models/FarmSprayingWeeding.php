<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;
use Reliese\Database\Eloquent\Model;

/**
 * Class FarmSprayingWeeding
 * 
 * @property int $id
 * @property int $user_id
 * @property int $farmer_id
 * @property Carbon $date_of_activity
 * @property string $month_of_activity
 * @property string $year_of_activity
 * @property string $labour_cost
 * @property string $activity_type
 * @property string $source_of_vendor
 * @property string $name_of_item
 * @property string $cost_of_item
 * @property string $quantity_of_item
 * @property string $weight_of_item
 * @property string $unit_of_item
 * @property string $type_infestation
 * @property string $size_of_catchment
 * @property string $rate_infestation
 * @property string $notes
 * @property string $incident_url
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
class FarmSprayingWeeding extends Model
{
	use SoftDeletes;
	protected $table = 'farm_spraying_weeding';

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
		'activity_type',
		'source_of_vendor',
		'name_of_item',
		'cost_of_item',
		'quantity_of_item',
		'weight_of_item',
		'unit_of_item',
		'type_infestation',
		'size_of_catchment',
		'rate_infestation',
		'notes',
		'incident_url',
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
