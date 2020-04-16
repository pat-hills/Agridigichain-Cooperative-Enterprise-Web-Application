<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;
use Reliese\Database\Eloquent\Model;

/**
 * Class PrepareLand
 * 
 * @property int $id
 * @property int $user_id
 * @property int $farmer_id
 * @property Carbon $date_of_activity
 * @property string $month_of_activity
 * @property string $year_of_activity
 * @property float $cost
 * @property string $mechanized_vendor
 * @property string $notes
 * @property string $receipt_url
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
class PrepareLand extends Model
{
	use SoftDeletes;
	protected $table = 'prepare_land';

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
		'cost',
		'mechanized_vendor',
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
