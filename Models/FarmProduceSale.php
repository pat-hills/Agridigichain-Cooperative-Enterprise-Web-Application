<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;
use Reliese\Database\Eloquent\Model;

/**
 * Class FarmProduceSale
 * 
 * @property int $id
 * @property int $user_id
 * @property int $farmer_id
 * @property int $farm_harvesting_id
 * @property string $quantity
 * @property float $price
 * @property string $buyer
 * @property string $name_of_driver
 * @property string $vehicle_type
 * @property string $registration_number
 * @property string $way_bill_number
 * @property string $notes
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property string $deleted_at
 * @property string $status
 * 
 * @property FarmHarvesting $farm_harvesting
 * @property Farmer $farmer
 * @property User $user
 *
 * @package App\Models
 */
class FarmProduceSale extends Model
{
	use SoftDeletes;
	protected $table = 'farm_produce_sales';

	protected $casts = [
		'user_id' => 'int',
		'farmer_id' => 'int',
		'farm_harvesting_id' => 'int',
		'price' => 'float'
	];

	protected $fillable = [
		'user_id',
		'farmer_id',
		'farm_harvesting_id',
		'quantity',
		'price',
		'buyer',
		'name_of_driver',
		'vehicle_type',
		'registration_number',
		'way_bill_number',
		'notes',
		'status'
	];

	public function farm_harvesting()
	{
		return $this->belongsTo(FarmHarvesting::class);
	}

	public function farmer()
	{
		return $this->belongsTo(Farmer::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
